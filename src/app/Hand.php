<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hand extends Model
{
    //
    protected $fillable = [
        'id','user_id', 'pokemon_id',
    ];
}
