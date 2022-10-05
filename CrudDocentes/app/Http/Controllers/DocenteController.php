<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Docente;


use Illuminate\Support\Facades\Mail;

class DocenteController extends Controller
{

    public function generatePsw(){
        $comb = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $shfl = str_shuffle($comb);
        $pwd = substr($shfl,0,5);
        return $pwd;
    }

    public function getTeachers(){
        return Docente::all();
    }

    public function listTeachers(){
        return view("Docentes.index", ["teachers" => Docente::all()]);
    }

    public function getTeacher($id){
        return Docente::where(["id" => $id])->first();
    }

    public function postTeacher(Request $r){
        $pwd = $this->generatePsw();
        Docente::create([
            'firstName' => $r->firstName,
            'lastName' => $r->lastName,
            'secondLastName' => $r->secondLastName,
            'course' => $r->course,
            'email' => $r->email,
            'password' => $pwd
        ]);
        $this->sendEmail($r->email, $pwd);
        return ['res' => 'ok'];
    }

    public function sendEmail($address, $pwd){
        $data = array(
            'pass' => $pwd,
        );
        Mail::send('Email.msgMail', $data, function($message) use($address){
            $message->from('incuvalabunivalle@hotmail.com', 'Incuvalab');
            $message->to($address)->subject('Contraseña cuenta Incuvalab');
        });
        return ['result' => 'ok'];
    }

    public function newTeacher(){
        return view('Docentes.new');
    }

    public function putTeacher(Request $r){
        $t = Docente::where(["id" => $r->id])->first();
        $t->firstName = $r->firstName;
        $t->lastName = $r->lastName;
        $t->secondLastName = $r->secondLastName;
        $t->course = $r->course;
        $t->email = $r->email;
        $t->password = $r->password;
        $t->update();
        return ['res' => 'ok'];
    }

    public function editTeacher($id){
        return view('Docentes.edit', ["id" => $id]);
    }

    public function deleteTeacher($id){
        $t = Docente::where(["id" => $id])->first();
        $t->delete();
        return ["res" => "ok"];
    }


    
    
}
