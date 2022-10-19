<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Form;
use DB;

class FormController extends Controller
{
    //
    public function getForms()
    {
        $forms = Form::all();
        return $forms;
    }
    public function getForm1($id)
    {
        if (Form::where('teamId', $id)->where('formName', 'form1')->first() != null) {
            $form = Form::where('teamId', $id)->where('formName', 'form1')->first();
            return $form;
        } else {
            Form::create([
                'formName' => 'form1',
                'formText' => ' ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ;',
                'teamId' => $id
            ]);
            return $this->getForm1($id);
        }
    }
    public function getForm2($id)
    {
        $form = Form::where('teamId', $id)->where('formName', 'form2')->first();
        return $form;
    }
    public function getForm3($id)
    {
        $form = Form::where('teamId', $id)->where('formName', 'form3')->first();
        return $form;
    }
    public function getForm4($id)
    {
        $form = Form::where('teamId', $id)->where('formName', 'form4')->first();
        return $form;
    }
    public function getForm5($id)
    {
        $form = Form::where('teamId', $id)->where('formName', 'form5')->first();
        return $form;
    }
    public function getForm6($id)
    {
        $form = Form::where('teamId', $id)->where('formName', 'form6')->first();
        return $form;
    }
    public function getForm7($id)
    {
        $form = Form::where('teamId', $id)->where('formName', 'form7')->first();
        return $form;
    }

    public function postForm(Request $request)
    {
        Form::create([
            'formName' => $request->formName,
            'formText' => $request->formText,
            'teamId' => $request->teamId
        ]);
    }
    public function putForm1(Request $request)
    {
        $form = Form::where('teamId', $request->teamId)->where('formName', 'form1')->first();
        $form->formText = $request->formText;
        $form->save();
    }
}
