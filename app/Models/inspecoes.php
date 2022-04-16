<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inspecoes extends Model
{
    use HasFactory;
    
     protected $guarded = [];

    public function locais(){

               return $this->hasOne(locais::class, 'id', 'locais_id');

     }

    public function objeto(){

               return $this->hasOne(objetos::class, 'id', 'objetos_id');

     }

    public function user(){

               return $this->hasOne(User::class, 'id', 'user_id');

     }

    public function status(){

               return $this->hasOne(status::class, 'id', 'status_id');

     }
}
