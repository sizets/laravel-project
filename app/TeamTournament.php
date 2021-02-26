<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class TeamTournament extends Model
{
    protected $fillable = [
        'team_name',
        'user_id',
        'tournament_id',
        'player1_name',
        'player1_email',
        'player2_name',
        'player2_email',
        'player3_name',
        'player3_email',
        'player4_name',
        'player4_email',
        'player5_name',
        'player5_email',
        
];
public function team(){
    return $this->belongsTo('App\Tournament', 'tournament_id');
}
}
