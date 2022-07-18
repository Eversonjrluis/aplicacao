<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\objetos;

class DashboardGrafItemCiclo extends Component
{

    public $data_ini;
    public function render()
    {
        $this->objetos = objetos::where('ativo',1)->get();
        return view('livewire.dashboard-graf-item-ciclo');
    }
}
