<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checklists extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tipo_resp(){

               return $this->hasOne(tipo_respostas::class, 'id', 'tipo_resp_id');

     }
}
