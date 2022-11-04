<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;
use DB;

class FormController extends Controller
{

    //get user team id
    

    //
    public function getForms()
    {
        $forms = Form::all();
        return $forms;
    }
    //function to get the teamId from the user table
    // public function getTeamId($id)
    // {
    //     $teamId = User::where('users', )->where('id', $id)->value('teamId');
    //     return $teamId;
    // }
    public function getForm1($id)
    {
        if (Form::where('teamId', $id)->where('formName', 'form1')->first() != null) {
            $form = Form::where('teamId', $id)->where('formName', 'form1')->first();
            return $form;
        } else {
            Form::create([
                'formName' => 'form1',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;1;',
                'teamId' => $id
            ]);
            return $this->getForm1($id);
        }
    }
    public function getForm2($id)
    {
        if (Form::where('teamId', $id)->where('formName', 'form2')->first() != null) {
            $form = Form::where('teamId', $id)->where('formName', 'form2')->first();
            return $form;
        } else {
            Form::create([
                'formName' => 'form2',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;',
                'teamId' => $id
            ]);
            return $this->getForm2($id);
        }
    }
    public function getForm3($id)
    {
        if (Form::where('teamId', $id)->where('formName', 'form3')->first() != null) {
            $form = Form::where('teamId', $id)->where('formName', 'form3')->first();
            return $form;
        } else {
            Form::create([
                'formName' => 'form3',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;',
                'teamId' => $id
            ]);
            return $this->getForm3($id);
        }
    }
    public function getForm4($id)
    {
        if (Form::where('teamId', $id)->where('formName', 'form4')->first() != null) {
            $form = Form::where('teamId', $id)->where('formName', 'form4')->first();
            return $form;
        } else {
            Form::create([
                'formName' => 'form4',
                'formText' => ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;',
                'teamId' => $id
            ]);
            return $this->getForm4($id);
        }
    }
    public function getForm5($id)
    {
        if (Form::where('teamId', $id)->where('formName', 'form5')->first() != null) {
            $form = Form::where('teamId', $id)->where('formName', 'form5')->first();
            return $form;
        } else {
            Form::create([
                'formName' => 'form5',
                'formText' => ' ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ;', 
                'teamId' => $id
            ]);
            return $this->getForm5($id);
        }
    }
    public function getForm6($id)
    {
        if (Form::where('teamId', $id)->where('formName', 'form6')->first() != null) {
            $form = Form::where('teamId', $id)->where('formName', 'form6')->first();
            return $form;
        } else {
            Form::create([
                'formName' => 'form6',
                'formText' =>' ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ;', 
                'teamId' => $id
            ]);
            return $this->getForm6($id);
        }
    }
    public function getForm7($id)
    {
        if (Form::where('teamId', $id)->where('formName', 'form7')->first() != null) {
            $form = Form::where('teamId', $id)->where('formName', 'form7')->first();
            return $form;
        } else {
            Form::create([
                'formName' => 'form7',
                'formText' => ' ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ; ;', 
                'teamId' => $id
            ]);
            return $this->getForm7($id);
        }
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
    public function putForm2(Request $request)
    {
        $form = Form::where('teamId', $request->teamId)->where('formName', 'form2')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm3(Request $request)
    {
        $form = Form::where('teamId', $request->teamId)->where('formName', 'form3')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm4(Request $request)
    {
        $form = Form::where('teamId', $request->teamId)->where('formName', 'form4')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm5(Request $request)
    {
        $form = Form::where('teamId', $request->teamId)->where('formName', 'form5')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm6(Request $request)
    {
        $form = Form::where('teamId', $request->teamId)->where('formName', 'form6')->first();
        $form->formText = $request->formText;
        $form->save();
    }
    public function putForm7(Request $request)
    {
        $form = Form::where('teamId', $request->teamId)->where('formName', 'form7')->first();
        $form->formText = $request->formText;
        $form->save();
    }
}
