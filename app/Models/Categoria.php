<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function producto(){
        return $this->hasMany('App\Models\Preoducto');
    }

    protected $fillable =['nombre','descripcion'];
}
