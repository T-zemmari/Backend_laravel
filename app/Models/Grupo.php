<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable = 
    [
    'name',
    'owner',
    'userId',
    'gameId'
    ];


    public function membresia()
    {
        return $this->hasMany('App\Models\Membresia','grupoid');
    }
}

