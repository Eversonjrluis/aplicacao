<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\objetos;

class InspecaoConcluida extends Component
{
    public $qtd_falta;
    public $objs;

    public function render()
    {
        $this->objs = objetos::where('responsavel_id',auth()->user()->id )->whereIn('status_id',[3,5])->get();
        
        return view('livewire.inspecao-concluida');
    }



}
