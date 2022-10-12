<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

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
        return User::where('userType', 'student')->get();
        //return view('student.list');
    }
    
    public function getStudent($id) {
        return User::where(["id" => $id])->first();
    }

    public function postStudent(Request $request) {
        $pwd = $this->generatePsw();
   
        User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'secondLastName' => $request->secondLastName,
            'email' => $request->email,
            'password' => Hash::make($pwd),
            'userType' => 'student'
        ]);

         $this->sendEmail($request->email, $pwd);
         return ['result' => 'ok'];

        // $data = array(
        //    'pass' => $pwd,
        //  );
        //  Mail::send('emails.psw', $data, function($message){
        //     $message->from('incuvalabunivalle@hotmail.com', 'Incuvalab');
        //     $message->to('aliciavirreira15@gmail.com')->subject('Contraseña cuenta Incuvalab');
        //  });

        return ['result' => 'ok'];
    }

    
    public function sendEmail($address, $pwd){
        $data = array(
             'pass' => $pwd,
        );

         Mail::send('emails.psw', $data, function($message) use ($address){
             $message->from('incuvalabunivalle@hotmail.com', 'Incuvalab');
             $message->to($address)->subject('Contraseña cuenta Incuvalab');
        });
    }
    

    public function putStudent(Request $request) {
        $student = User::where(["id" => $request->id])->first();
        $student->firstName = $request->firstName;
        $student->lastName = $request->lastName;
        $student->secondLastName = $request->secondLastName;
        $student->email = $request->email;
        $student->update();
        return ['result' => 'ok'];
    }

    public function deleteStudent($id) {
        $student = User::where(["id" => $id])->first();
        $student->delete();
        return ['result' => 'ok'];
    }

    //Vistas
    public function editStudent($id) {
        return view('student.edit', ["id" => $id]);
    }

    public function newStudent() {
        return view("student.new");
    }

    public function listStudents() {
        return view("student.list");
    }

    // public function filter($builder, $value)
    // {
    //     return $builder->where('type', $value);
    // }
}
