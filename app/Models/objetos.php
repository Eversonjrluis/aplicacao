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

    public function tipo(){

               return $this->hasOne(tipo_objetos::class, 'id', 'tipo_objetos_id');

     }

    public function user(){

               return $this->hasOne(User::class, 'id', 'responsavel_id');

     }

    public function status(){

               return $this->hasOne(status::class, 'id', 'status_id');

     }

    public function status_ins(){

               return $this->hasOne(status::class, 'id', 'status_insp');

     }

    public function inspecoes(){

               return $this->hasMany(inspecoes::class, 'objetos_id', 'id');

     }
}


