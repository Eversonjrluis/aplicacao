<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\tipo_objetos;
use App\Models\checklists;
use App\Models\tipo_respostas;
use App\Models\objetos;
use App\Models\check_logs;
use App\Models\inspecoes;


class CadastroInspecoes extends Component
{

     public $objeto;
     public $message;
     public $post;
     public $pergunta;
     public $respostas;
     public $status_id;
     public $inspecao_id;
     public $name;
     public $objetos;
     public $tipos;
     public $checklists;
     public $tipo_respostas;
     public $respostas_conforme;


    public function mount($post)
    {
        $this->objeto = $post;
    }


    public function render()
    {
       
     $this->objetos = objetos::findOrFail($this->objeto);
     $this->tipos =  tipo_objetos::findOrFail($this->objetos->tipo_objetos_id);
     $this->checklists = checklists::where('tipo_objeto_id',$this->tipos->id)->get();
     $this->tipo_respostas = tipo_respostas::get();

        return view('livewire.cadastro-inspecoes');
    }

        protected $rules = [
          'respostas' => 'required',
        ];


    public function create(){

              foreach ($this->checklists as $checklist) {
       
                          if (empty($this->respostas[$checklist->id])){

                                      dd('Por favor inspecionar todos itens!');

                                                                      };

                                                        }

$this->validate();
           $insp = inspecoes::create([
                                  'user_id'  => auth()->user()->id,
                                  'objetos_id' => $this->objeto,
                                  'dt_efetuado' => date('d/m/Y H:i:s'),
                                  'status_id' => $this->respostas_conforme,
                                  'tipo' =>      $this->objetos->tipo_objetos_id,
                                  'locais_id' => $this->objetos->locais_id,
                                  'ativo' => 1,
                             ]);

      foreach ($this->checklists as $checklist) {
       
       if (empty($this->respostas[$checklist->id])){
        dd('Por favor inspecionar todos itens!');
       };
            check_logs::create([
                                    
                                    'resposta' => $this->respostas[$checklist->id],
                                    'pergunta' => $checklist->descricao,
                                    'inspecao_id' => $insp->id,
                                    'checklist_id' => $checklist->id,
                                    'status_id' => $this->respostas_conforme,
                                    'user_id'  => auth()->user()->id,

                               ]);
       }


if($this->respostas_conforme == 6){$valor_result = "CONFORME";}
if($this->respostas_conforme == 7){$valor_result = "NÃO CONFORME";}
            check_logs::create([
                                    
                                    'resposta' => $valor_result,
                                    'pergunta' => 'Resultado Final',
                                    'inspecao_id' => $insp->id,
                                    'checklist_id' => 0,
                                    'status_id' => $this->respostas_conforme,
                                    'user_id'  => auth()->user()->id,

                               ]);
              // $this->emit('saved');

            $table = objetos::findOrFail($this->objeto);
            $dt = date('Y-m-d');
            $data_insp = date('Y-m-d', strtotime("+".$table->validade." days",strtotime($dt)));
            $table->data_validade = $data_insp;
            $table->status_insp = $this->respostas_conforme;
            $table->status_id  = 4;
            $table->save();

               return redirect()->to('/inspecao/concluida');
       }



}
