<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class DashboardGrafStatusObjetos extends Component
{

    public $dados;

    public function mount()
    {
      $this->dados = DB::select('select s.descricao , count(o.id) as qtd 
        from objetos o 
        inner join statuses s on o.status_id = s.id 
        where o.ativo = 1 
        group by s.descricao ,s.id
        order by s.id');
    }

    public function render()
    {
        return view('livewire.dashboard-graf-status-objetos');
    }
}
