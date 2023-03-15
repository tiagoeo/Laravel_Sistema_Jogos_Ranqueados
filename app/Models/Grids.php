<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grids extends Model
{
    use HasFactory;
    
    public function paginas(){
        return $this->belongsTo('App\Models\Paginas');
    }
}
