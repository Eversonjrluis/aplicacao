<?php

namespace Laravel\Jetstream\Http\Controllers\Livewire;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelQRCode\Facades\QRCode;
use App\Models\objetos;

class ObjetosController extends Controller
{
    /**
     * Show the user profile screen.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */

    public function __construct(){
    
          $objs = objetos::whereDate('data_validade','<',date("Y-m-d"))->update(['status_id' => 5]);

    }

    public function create()
    {
         return view('cadastros.cadastro');

    }

    public function exibeExtintor()
    { 
          return view('cadastros.listas');
    }

    public function inspecionar($objeto)
    {
          return view('cadastros.inspecionar',compact('objeto'));
    }

    public function inativarObjt($objeto)
    {     
          $objs = objetos::findOrfail($objeto);
          $objs->ativo = 2;
          $objs->save();
          return view('cadastros.listas');
    }
 
    public function editarobjt($objeto)
    {
          return view('cadastros.editar',compact('objeto'));
    }

    public function historicobjt($objeto)
    {
          return view('cadastros.historico',compact('objeto'));
    }

    public function ExibeLogs($objeto)
    {
          return view('cadastros.exibeLogs',compact('objeto'));
    }
    
    public function geraQR($objeto)
    {
              return  QRCode::url('http://megatech.systemja.com.br/inspecionar/'.$objeto)
                  ->setSize(8)
                  ->setMargin(2)
                  ->png();
    }

    public function inspecaoConcluida()
    {
         return view('livewire.inspecao-concluida');
    }

}
