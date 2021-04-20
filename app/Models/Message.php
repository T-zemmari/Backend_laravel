<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = ['from','message','userid','grupoid'];

    public function user()
    {
        return $this->belongsTo('App\Models\User','userid','id');
    }

    public function grupo()
    {
        return $this->belongsTo('App\Models\Grupo','grupoid','id');
    }
}
