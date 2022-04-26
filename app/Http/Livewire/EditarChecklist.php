<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\checklists;
use App\Models\tipo_respostas;

class EditarChecklist extends Component
{
    public $objeto;
    public $respostas;
    public $nova_resp;
    public $tipo_form;

    public function mount($post)
    {
        $this->objeto = $post;
    }



    public function render()
    {
        $this->checklists =  checklists::where('tipo_objeto_id',$this->objeto)->get();
        $this->respostas = tipo_respostas::where('active',1)->get();
        return view('livewire.editar-checklist');
    }
}
