<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\checklists;
use App\Models\tipo_respostas;

class EditarLinhaChecklist extends Component
{

    public $objeto;
    public $respostas;
    public $novo_tipo;
    public $salvo = false;

    public function mount($post)
    {
        $this->objeto = $post;
        $this->checklists =  checklists::findOrfail($this->objeto);
        $this->novo_tipo = $this->checklists->tipo_resp_id;
    }

    public function reativar()
    {
                     $insp = checklists::where('ativo',2)->where('id',$this->objeto)->update(['ativo' => 1]);
                     $this->salvo = true; 
    }

    public function inativar()
    {
                    $insp = checklists::where('ativo',1)->where('id',$this->objeto)->update(['ativo' => 2]);
                     $this->salvo = true; 
    }

    public function alterar()
    {
                    $insp = checklists::where('id',$this->objeto)->update(['tipo_resp_id' => $this->novo_tipo]);
                    $this->salvo = true; 
    }

    public function render()
    {
        $this->checklists =  checklists::findOrfail($this->objeto);
        $this->respostas = tipo_respostas::where('active',1)->get();
        return view('livewire.editar-linha-checklist');
    }
}
