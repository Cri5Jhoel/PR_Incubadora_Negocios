<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    public function getTeams() {
        return Team::all();
    }
    
    public function getTeam($id) {
        return Team::where(["id" => $id])->first();

       
    }

    public function getMembers($id) {
       

        return User::rightJoin('userteams', 'users.id', '=', 'userteams.idUser')
        ->rightJoin('teams', 'userteams.idTeam', '=', 'teams.id')
        ->select('users.*')
        ->where([['userteams.idTeam', '=', $id], ['users.userType', '=', 'student']])
        ->orderBy('firstName','asc')
        ->get();
    }

    public function postTeam(Request $request) {
        Team::create([
            'teamName' => $request->teamName,
            'period' => 1
        ]);
    }

    public function putTeam(Request $request) {
        $team = Team::where(["id" => $request->id])->first();
        $team->teamName = $request->teamName;
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
        return view("team.list");
    }

    public function viewTeams() {
        return view("team.view");
    }

    public function teamMembers() {
        return view("team.members");
    }
    //
}
