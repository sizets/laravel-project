<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;


class Contact extends Model
{   
    
    protected $fillable = [

        'name',
        'email',
        'message'


    ];
        

}


