<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon_user extends Model
{
    //
    protected $fillable = [
        'user_id', 'pokemon_id', 'hour',
    ];
    protected $table = "pokemon_user";
}
