<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;


class Post extends Model
{   
    
    protected $fillable = [

        'name',
        'email',
        'message'


    ];
        

}


