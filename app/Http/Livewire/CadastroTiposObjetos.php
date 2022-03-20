<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tipo_objetos;

class CadastroTiposObjetos extends Component
{

    public $descricao;
    public $titulo;

    protected $rules = [
          'descricao' => 'required',
          'titulo' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create(){

         $this->validate();

         tipo_objetos::create([
            'descricao' => $this->descricao,
            'titulo' => $this->titulo,
        ]);
              $this->descricao = $this->titulo = null;

              $this->emit('saved');


    }




    public function render()
    {

        return view('livewire.cadastro-tipos-objetos');
    }
}
