<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\objetos;

class CadastroEditar extends Component
{

    public $objetos;


    public function render()
    {

        $this->objetos = objetos::get()->where('ativo','<>','2');
        return view('livewire.cadastro-editar');
    }
}
