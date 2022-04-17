<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DashboardGrafInspecaoObjetos extends Component
{
        public $dados;

    public function mount()
    {
      $this->dados = DB::select('select s.descricao , count(o.id) as qtd  
from objetos o 
inner join statuses s on o.status_insp = s.id 
where o.ativo = 1 
group by s.descricao ,s.id
order by s.id desc');
    }
    public function render()
    {
        return view('livewire.dashboard-graf-inspecao-objetos');
    }
}
