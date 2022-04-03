<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tipo_objetos;
use App\Models\checklists;
use App\Models\tipo_respostas;

class CadastroChecklists extends Component
{

    public $tipo_objeto_id;
    public $descricao;
    public $obs;
    public $ativo;
    public $tipo_resp_id;

    protected $rules = [
          'tipo_objeto_id' => 'required',
          'tipo_resp_id' => 'required',
          'descricao' => 'required|min:2',
          'ativo' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create(){

         $this->validate();

         checklists::create([
            'tipo_objeto_id' =>  $this->tipo_objeto_id,
            'descricao' =>       $this->descricao,
            'obs' =>             $this->obs,
            'ativo' =>           $this->ativo,
            'tipo_resp_id' =>    $this->tipo_resp_id,
           
        ]);
              $this->tipo_objeto_id = $this->descricao = $this->obs  = null;

              $this->emit('saved');


    }


    public function render()
    {
        $tipo_respostas = tipo_respostas::get();
        $tipos = tipo_objetos::get();
        return view('livewire.cadastro-checklists',compact('tipos','tipo_respostas'));
    }
}
