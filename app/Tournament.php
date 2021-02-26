<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Tournament extends Model
{
    protected $fillable = [
            'name',
            'user_id',
            'game_id',
            'description',
            'regstartdate',
            'regenddate',
            'tourstartdate',
            'tourenddate',
            'prize',
            'totalplayers',
            'platforms',
            'rules',
            'bans'




    ];

    public function game(){
        return $this->belongsTo('App\Game', 'game_id');
    }
   
}
