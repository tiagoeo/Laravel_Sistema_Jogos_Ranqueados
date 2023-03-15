<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pontuacoes extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsToMany('App\Models\User');
    }

    public function games(){
        return $this->belongsToMany('App\Models\Games');
    }
}
