<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\status;
use App\Models\locais;

class CadastroLocais extends Component
{


    public $descricao;
    public $obs;
    public $ativo;

    protected $rules = [
          'descricao' => 'required|min:2',
          'ativo' =>  'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create(){

         $this->validate();

         locais::create([
            'descricao' => $this->descricao,
            'obs' => $this->obs,
            'ativo' => $this->ativo,

        ]);
              $this->obs = $this->descricao = $this->ativo  = null;

              $this->emit('saved');


    }


    public function render()
    {
        $status = status::get();
        return view('livewire.cadastro-locais',compact('status'));
    }
}
