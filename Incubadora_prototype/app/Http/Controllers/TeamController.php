<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Team;

class TeamController extends Controller
{
    //
    public function getTeams()
    {
        $teams = Team::all();
        return $teams;
    }
    public function getTeam($id)
    {
        $team = Team::find($id);
        return $team;
    }
    public function postTeam(Request $request)
    {
        Team::create([
            'teamName' => $request->teamName,
            'teamProgress' => $request->teamProgress,
        ]);
    }
    public function putTeam(Request $request)
    {
        $team = Team::where(["id" => $request->id])->first();
        $team->teamName = $request->firstName;
        //Tambien se editara a los estudiantes
        //
        $team->update();
        return ['result' => 'ok'];
    }
    public function deleteTeam($id)
    {
        $student = Team::where(["id" => $id])->first();
        $student->delete();
        return ['result' => 'ok'];
    }
    public function editTeam($id)
    {
        return view('team.edit', ["id" => $id]);
    }
}
