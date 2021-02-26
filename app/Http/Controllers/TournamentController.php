<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tournament;
use App\Game;
use App\teamTournament;
use App\User;
use Auth;
class TournamentController extends Controller
{

    

    public function index()
    {
        $games = Game::all();
        return view('tournaments.create', compact('games'));
    }
  
   
  
    public function save(Request $request){
        $data = [
            'name' => $request->input('name'),
            'user_id' => Auth::user()->_id,
            'game_id' => $request->input('game_id'),
            'description' => $request->input('description'),
            'regstartdate' => $request->input('regstartdate'),
            'regenddate' => $request->input('regenddate'),
            'tourstartdate' => $request->input('tourstartdate'),
            'tourenddate' => $request->input('tourenddate'),
            'prize' => $request->input('prize'),
            'totalplayers' => $request->input('totalplayers'),
            'platforms' => $request->input('platforms'),
            'rules' => $request->input('rules'),
            'bans' => $request->input('bans'),



        ]; 
        $tournament = Tournament::create($data);

        return redirect()->route('games.show');

       
    }
    
        
        
    public function showtour($id){
        $tournaments = Tournament::where('game_id', $id)->get();
        
        return view('tournaments.show', compact('tournaments'));

    }
    

    public function mytour(){
        $tournaments = Tournament::where('user_id', Auth::user()->_id)->get();
        
        return view('tournaments.mytour', compact('tournaments'));

    }


    public function join($id){
        
        $tournament = Tournament::find($id);
        return view('tournaments.join', compact('tournament'));
    }

    public function view($id){
        
        $tournament = Tournament::find($id);
        $teams = teamTournament::where('tournament_id', $id)->get();

        return view('tournaments.view', compact('tournament','teams'));
    }




    
    public function edit(Request $request, $id ){
        $games = Game::all();
        $tournaments = Tournament::find($id);
      return view('tournaments.edit', compact('tournaments','games'));

       
    }
     
    public function update(Request $request, $id ){
        $data =  Tournament::find($id);
        $data->name = $request->name;
        $data->user_id = Auth::user()->_id;
        $data->game_id = $request->game_id;
        $data->description = $request->description;
        $data->regstartdate = $request->regstartdate;
        $data->regenddate = $request->regenddate;
        $data->tourstartdate = $request->tourstartdate;
        $data->prize = $request->prize;
        $data->totalplayers = $request->totalplayers;
        $data->conditions = $request->conditions;
        $data->platforms = $request->platforms;
        $data->rules = $request->rules;
        $data->bans = $request->bans;  
        $data->save();

        return redirect()->route('games.show');
      

       
    } 
     
    public function delete(Request $request, $id ){
        $data = Tournament::destroy($id);
        
        return redirect()->back();

      

       
    } 
     


}
    

