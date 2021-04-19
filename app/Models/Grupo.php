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
    'gameid'
    ];


    public function membresia()
    {
        return $this->hasMany('App\Models\Membresia','grupoid');
    }

    public function game()
    {
        return $this->belongsTo('App\Models\Game','gameid', 'id');
    }

    public function messages()
    {
        return $this->hasMany('App\Models\Message','grupoid');
    }
}

