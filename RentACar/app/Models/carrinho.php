<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrinho extends Model
{
    use HasFactory;

    protected $table = 'carrinho';

     public function carros()
    {
        return $this->hasMany('App\Models\Carro','carro','id');
    }

    public function users()
    {
        return $this->hasMany('App\Models\User','user','id');
    }
}
