<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\objetos;
use App\Models\locais;

class ExibeExtintor extends Component
{

    public $objetos;
    public $locais;
    public $addItem = false;


    public function render()
    {   
        $this->locais = locais::get()->where('ativo','<>','2');
        $this->objetos = objetos::get()->where('ativo','<>','2');
        return view('livewire.exibe-extintor');
    }

        public function addingItem()
    {
        $this->addItem = true;
    }
        public function rmingItem()
    {
        $this->addItem = false;
    }
}
