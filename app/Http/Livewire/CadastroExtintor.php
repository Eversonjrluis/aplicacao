<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\objetos;
use App\Models\tipo_objetos;
use App\Models\status;
use App\Models\User;
use App\Models\locais;

class CadastroExtintor extends Component
{

    public $tipo_objetos_id;
    public $descricao;
    public $obs;
    public $validade;
    public $capacidade;
    public $un;
    public $class;
    public $neblina;
    public $solido;
    public $storz;
    public $locais_id;
    public $responsavel_id;
    public $data_disp;
    public $data_validade;
    public $status_id;
    public $ativo;
    public $cod_barra;
    public $qr_code;
    public $qtd_mangueiras;

    protected $rules = [
          'tipo_objetos_id' => 'required',
          'descricao' => 'required|min:2',
          'ativo' =>  'required',
          'responsavel_id' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function create(){

         $this->validate();

         objetos::create([
            'tipo_objetos_id' => $this->tipo_objetos_id,
            'descricao' => $this->descricao,
            'obs' => $this->obs,
            'validade' => $this->validade,
            'capacidade' => $this->capacidade,
            'neblina' => $this->neblina,
            'solido' => $this->solido,
            'storz' => $this->storz,
            'locais_id' => $this->locais_id,
            'ativo' => $this->ativo,
            'status_id' => $this->status_id,
            'qtd_mangueiras' => $this->qtd_mangueiras,
            'responsavel_id' => $this->responsavel_id,
        ]);
              $this->tipo_objetos_id = $this->descricao = $this->obs  = null;

              $this->emit('saved');


    }

    public function render()
    {
       $locais = locais::get();
       $users = User::get();
       $status = status::get();
       $tipos = tipo_objetos::get();
        return view('livewire.cadastro-extintor',compact('tipos','status','users','locais'));
    }

}
