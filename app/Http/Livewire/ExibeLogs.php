<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\check_logs;
use App\Models\inspecoes;

class ExibeLogs extends Component
{

    public $post;
    public $inspecoes;
    public $objeto;
    public $titulos;

    public function mount($post)
    {
        $this->objeto = $post;
    }

    public function render()
    {
        $this->inspecoes = check_logs::where('inspecao_id',$this->objeto)->get(); 
        $this->titulos = inspecoes::findOrfail($this->objeto); 
        return view('livewire.exibe-logs');
    }
}
