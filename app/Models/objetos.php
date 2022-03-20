<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class objetos extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function locais(){

               return $this->hasOne(locais::class, 'id', 'locais_id');

     }

    public function user(){

               return $this->hasOne(User::class, 'id', 'responsavel_id');

     }
}


