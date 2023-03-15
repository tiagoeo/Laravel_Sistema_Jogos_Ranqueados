<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paginas extends Model
{
    use HasFactory;

    public function grids(){
        return $this->hasMany('App\Models\Grids');
    }
}
