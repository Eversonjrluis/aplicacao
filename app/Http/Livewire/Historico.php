<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\inspecoes;

class Historico extends Component
{

    public $post;
    public $inspecoes;
    public $objeto;


    public function mount($post)
    {
        $this->objeto = $post;
    }


    public function render()
    {

       $this->inspecoes = inspecoes::where('objetos_id',$this->objeto)->get(); 

       //dd($this->inspecoes);
        return view('livewire.historico');
    }
}
