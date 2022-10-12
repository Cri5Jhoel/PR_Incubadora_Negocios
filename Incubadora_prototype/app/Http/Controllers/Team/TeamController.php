<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function getTeams() {
        return Team::all();
    }
    
    public function getTeam($id) {
        return Team::where(["id" => $id])->first();
    }

    public function postTeam(Request $request) {
        Team::create([
            'teamName' => $request->teamName,
            'period' => 1
        ]);
    }

    public function putTeam(Request $request) {
        $team = Team::where(["id" => $request->id])->first();
        $team->teamName = $request->firstName;
        //Tambien se editara a los estudiantes
        //
        $team->update();
        return ['result' => 'ok'];
    }

    public function deleteTeam($id) {
        $student = Team::where(["id" => $id])->first();
        $student->delete();
        return ['result' => 'ok'];
    }

    //Vistas
    public function editTeam($id) {
        return view('team.edit', ["id" => $id]);
    }

    public function newTeam() {
        return view("team.new");
    }

    public function listTeams() {
        return view("team.list", ["teams" => Team::all()]);
    }
}
