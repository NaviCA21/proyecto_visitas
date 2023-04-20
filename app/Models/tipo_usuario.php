<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipo_usuario extends Model
{
    use HasFactory;
    //relacion uno a muchos
    public function users(){
        return $this->hasMany(user::class);
    }
}
