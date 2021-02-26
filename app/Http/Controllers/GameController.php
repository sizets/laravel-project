<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use File;

use App\Game;
use App\Tournament;
use App\teamTournament;
use App\User;
use App\Contact;
use Auth;



class GameController extends Controller
{
    public function index()
    {   
        $users=User::all();
        $contacts=Contact::all();
      
        // if(Auth::user()->email=="lilsamy57@gmail.com")
        return view('games.create' ,compact('users','contacts'));
        // else
        // return redirect()->route('home');

    
    }


    public function view($id){
        $tournaments = Tournament::where('user_id', $id)->get();
       
        
        return view('usertournaments', compact('tournaments'));
    }


    public function teamview($id){
        $teams = teamTournament::where('tournament_id', $id)->get();
       
        
        return view('usertournamentteams', compact('teams'));
    }

    public function tournamentdelete(Request $request, $id ){
        $data = Tournament::destroy($id);
        
        return redirect()->route('admin');

      

       
    } 
     
    public function userdelete(Request $request, $id ){
        $data = User::destroy($id);
        
        return redirect()->route('admin');

      

       
    } 

    public function teamdelete(Request $request, $id ){
        $data = teamTournament::destroy($id);
        
        return redirect()->route('admin');

      

       
    } 

    public function save(Request $request){
        
        $data = [
            'game_name' => $request->input('game_name'),
        ];
        $game = Game::create($data);
        if($request->file('image')){
            $file = $request->file('image');
            
            // foreach ($files as $file) {
                $extension = $file->getClientOriginalExtension();
                $name = $file->getFilename().'.'.$extension;
                Storage::disk('public')->put($name,  File::get($file));
                $game->image = $name;
                $game->save();
            // }
        }

        return redirect()->route('games.show');
       
    }


    public function showgames(){
        $games = Game::all();
        
        return view('games.showgames', compact('games'));
    }

   
    
    public function makeAdmin($id){
        $user = User::find($id);
        $user->user_type = "admin";
        $user->save();
        return redirect()->back();
    }



}
