<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function generatePsw(){
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,5);
        return $pwd;
    }

    public function getTeachers(){
        return User::where('userType', 'teacher')->get();
    }

    public function listTeachers(){
        return view("teacher.list");
    }

    public function getTeacher($id){
        return User::where(["id" => $id])->first();
    }

    public function postTeacher(Request $r){
        $pwd = $this->generatePsw();
        User::create([
            'firstName' => $r->firstName,
            'lastName' => $r->lastName,
            'secondLastName' => $r->secondLastName,
            'email' => $r->email,
            'password' => $pwd,
            'userType' => 'teacher'
        ]);
        $this->sendEmail($r->email, $pwd);
        return ['res' => 'ok'];
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

    public function newTeacher(){
        return view('teacher.new');
    }

    public function putTeacher(Request $r){
        $t = User::where(["id" => $r->id])->first();
        $t->firstName = $r->firstName;
        $t->lastName = $r->lastName;
        $t->secondLastName = $r->secondLastName;
        $t->email = $r->email;
        //$t->password = $r->password;
        $t->update();
        return ['res' => 'ok'];
    }

    public function editTeacher($id){
        return view('teacher.edit', ["id" => $id]);
    }

    public function deleteTeacher($id){
        $t = User::where(["id" => $id])->first();
        $t->delete();
        return ["res" => "ok"];
    }
}
