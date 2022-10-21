<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function index()
    {
         return view('home');
   }
    public function teamProgress()
    {
        return view('teamProgress');
    }
    public function form1()
    {
        return view('form1');
    }
    public function form2()
    {
        return view('form2');
    }
    public function form3()
    {
        return view('form3');
    }
    public function form4()
    {
        return view('form4');
    }
    public function form5()
    {
        return view('form5');
    }
    public function form6()
    {
        return view('form6');
    }
    public function form7()
    {
        return view('form7');
    }
    public function changePass()
    {
        return view('changePass');
    }
  
    public function updatePass(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error","Contraseña antigua no es correcta!");
        }

        //dd($request->all());
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status","Contraseña actualizada exitosamente!");
    }


}
