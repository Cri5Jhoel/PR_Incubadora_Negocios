<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Jobs\SendEmail;
use App\Mail\EmailForQueue;
use App\Models\Team;
use App\Models\Userteam;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{

    protected function validator(array $data)
    {
        return Validator::make($data, [
           
            'email' => ['required', 'string', 'email', 'max:100', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    public function generatePsw(){
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,5);
        return $pwd;
    }

    public function getStudents() {
        //return User::where('userType', 'student')->orderBy('firstName','asc')->get();
        //return view('student.list');
          return User::join('userteams', 'users.id', '=', 'userteams.idUser')
              ->join('teams', 'userteams.idTeam', '=', 'teams.id')
              ->select('users.*', 'teams.teamName')
              ->where('users.userType', '=', 'student')
              ->orderBy('firstName','asc')
              ->get();
        // return $students;
        
    }

    public function getTeam($id) {
         $idTeam = Team::rightJoin('userteams', 'teams.id', '=', 'userteams.idTeam')
        ->rightJoin('users', 'userteams.idUser', '=', 'users.id')
        ->select('teams.id')
        ->where([['userteams.idUser', '=', $id], ['users.userType', '=', 'student']])
        ->get();

        return User::rightJoin('userteams', 'users.id', '=', 'userteams.idUser')
        ->rightJoin('teams', 'userteams.idTeam', '=', 'teams.id')
        ->select('users.*', 'teams.teamName', 'teams.period')
        ->where([['userteams.idTeam', '=', $idTeam ], ['users.userType', '=', 'student']])
        ->orderBy('firstName','asc')
        ->get();
    }
    
    public function getStudent($id) {
        //return User::where(["id" => $id])->first();

        return User::join('userteams', 'users.id', '=', 'userteams.idUser')
              ->join('teams', 'userteams.idTeam', '=', 'teams.id')
              ->select('users.*', 'teams.id as teamId') 
              ->where('users.id', '=', $id)
              ->first();
    }

    public function postStudent(Request $request) 
    {
        try{
            DB::beginTransaction();
            $pwd = $this->generatePsw();
   
            $user = User::create([
                'firstName' => $request->firstName,
                'lastName' => $request->lastName,
                'secondLastName' => $request->secondLastName,
                'email' => $request->email,
                'password' => Hash::make($pwd),
                'userType' => 'student'
            ]);
            
           
            Userteam::create([
                'idUser' => $user->id, 
                'idTeam' => $request->teamID

            ]);

            SendEmail::dispatch($request->email, $pwd);

            DB::commit();
        }catch(Exception $ex){
            DB::rollback();
        }

         return ['result' => 'ok'];

        // $data = array(
        //    'pass' => $pwd,
        //  );
        //  Mail::send('emails.psw', $data, function($message){
        //     $message->from('incuvalabunivalle@hotmail.com', 'Incuvalab');
        //     $message->to('aliciavirreira15@gmail.com')->subject('Contraseña cuenta Incuvalab');
        //  });

    }

    
    public function send($address, $pwd){
        // $data = array(
        //      'pass' => $pwd,
        // );

        // Mail::send('emails.psw', $data, function($message) use ($address){
        //      $message->from('incuvalabunivalle@hotmail.com', 'Incuvalab');
        //      $message->to($address)->subject('Contraseña cuenta Incuvalab');
        // });
       
    }
    

    public function putStudent(Request $request) {
       
        try{
            $student = User::where(["id" => $request->id])->first();
            $student->firstName = $request->firstName;
            $student->lastName = $request->lastName;
            $student->secondLastName = $request->secondLastName;
            $student->email = $request->email;
            $student->update();

            // $team = Userteam::where(["idUser" => $request->id])->first();
            Userteam::where(["idUser" => $request->id])->delete();
            // $team->delete();

            Userteam::create([
                'idUser' => $request->id, 
                'idTeam' => $request->teamID
            ]);

            DB::commit();
        }catch(Exception $ex){
            DB::rollback();
        }

        return ['result' => 'ok'];
    }

    public function deleteStudent($id) {
        $student = User::where(["id" => $id])->first();
        $student->delete();
        return ['result' => 'ok'];
    }

    //Vistas
    public function editStudent($id) {
        $teams = Team::all();
        return view('student.edit', ["id" => $id], compact('teams'));
    }

    public function newStudent() {
        $teams = Team::all();
        return view("student.new", compact('teams'));
    }

    public function listStudents() {
        return view("student.list");
    }

    public function myTeamInfo() {
        return view("student.myteam");
    }

    // public function filter($builder, $value)
    // {
    //     return $builder->where('type', $value);
    // }
}
