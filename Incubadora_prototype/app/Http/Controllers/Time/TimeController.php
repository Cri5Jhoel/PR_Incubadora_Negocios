<?php

namespace App\Http\Controllers\Time;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Time;
use Illuminate\Support\Facades\DB;


class TimeController extends Controller
{
    //functions to CRUD Times
    public function getTimes()
    {
        return Time::all();
    }
   

    public function getTime($id)
    {
        return Time::where(["id" => $id])->first();
    }

    public function postTime(Request $request) {
        $validateTime = DB::table('times')->where('year', '=', $request->year)->get();

        if (count($validateTime) > 0) {
            return ['result' => 'error'];
        }
        else{
            Time::create([
                'year' => $request->year,
                'form1_start' =>  $request->form1_start,
                'form1_end' => $request->form1_end,
                'form2_start' => $request->form2_start,
                'form2_end' => $request->form2_end,
                'form3_start' => $request->form3_start,
                'form3_end' => $request->form3_end,
                'form4_start' => $request->form4_start,
                'form4_end' => $request->form4_end,
                'form5_start' => $request->form5_start,
                'form5_end' => $request->form5_end,
                'form6_start' => $request->form6_start,
                'form6_end' => $request->form6_end,
                'form7_start' => $request->form7_start,
                'form7_end' => $request->form7_end
            ]);
            return ['result' => 'ok'];
        }
    }

    public function putTime(Request $request)
    {
        $time = Time::where(["id" => $request->id])->first();
        $time->year = $request->year;

        $time->form1_start = $request->form1_start;
        $time->form1_end = $request->form1_end;

        $time->form2_start = $request->form2_start;
        $time->form2_end = $request->form2_end;

        $time->form3_start = $request->form3_start;
        $time->form3_end = $request->form3_end;

        $time->form4_start = $request->form4_start;
        $time->form4_end = $request->form4_end;

        $time->form5_start = $request->form5_start;
        $time->form5_end = $request->form5_end;

        $time->form6_start = $request->form6_start;
        $time->form6_end = $request->form6_end;

        $time->form7_start = $request->form7_start;
        $time->form7_end = $request->form7_end;

        $time->update();
        return ['result' => 'ok'];
    }

    public function deleteTime($id)
    {
        $time = Time::where(["id" => $id])->first();
        $time->delete();
        return ['result' => 'ok'];
    }

    //Vistas
    public function viewTimes() {
        return view("time.view");
    }

    public function listTimes() {
        return view("time.list");
    }
    
    public function newTime() {
        return view("time.new");
    }

    public function editTime($id) {
        return view('time.edit', ["id" => $id]);
    }
}
