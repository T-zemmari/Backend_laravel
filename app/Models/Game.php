<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    protected $fillable = 
    [
    'name', 
    'studio',
    'releaseYear',
    'about',
    ];


    public function grupo()
    {
        return $this->hasMany('App\Models\Grupo','gameid');
    }

    
}


