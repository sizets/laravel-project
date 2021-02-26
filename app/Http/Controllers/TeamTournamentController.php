<?php

namespace App\Http\Controllers;
use App\teamTournament;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TeamTournamentController extends Controller
{
    public function save(Request $request){
        $data = [
            'team_name' => $request->input('team_name'),

            'user_id' => Auth::user()->_id,
            'tournament_id' => $request->input('tournament_id'),
            'player1_name' => $request->input('player1_name'),
            'player1_email' => $request->input('player1_email'),
            'player2_name' => $request->input('player2_name'),
            'player2_email' => $request->input('player2_email'),
            'player3_name' => $request->input('player3_name'),
            'player3_email' => $request->input('player3_email'),
            'player4_name' => $request->input('player4_name'),
            'player4_email' => $request->input('player4_email'),
            'player5_name' => $request->input('player5_name'),
            'player5_email' => $request->input('player5_email'),
            
            
            

        ];
        $tournament = teamTournament::create($data);
        return redirect()->route('home');

       
    }
   
}
