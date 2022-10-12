<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('ChangePass');
    }
}
