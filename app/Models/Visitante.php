<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    use HasFactory;
    //relacion uno a muchos
    public function visitas(){
        return $this->hasMany(Visita::class);
    }
         //relacion de muchos a uno
    public function visitante(){
        return $this->belongsTo(Visitante::class);
    }
    public function periodo(){
        return $this->belongsTo(Periodo::class);
    }
    

}


