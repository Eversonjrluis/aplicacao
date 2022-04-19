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
          $dmenos4 = date('Y-m-d', strtotime("+4 days",strtotime(date("Y-m-d"))));
          $aguardando = objetos::whereDate('data_validade','<',$dmenos4)->update(['status_id' => 3]);
          $atrasados  = objetos::whereDate('data_validade','<',date("Y-m-d"))->update(['status_id' => 5,'status_insp' => 3]);
          

    }

    public function create()
    {

         if(auth()->user()->role_id <> 1){return "Acesso não permitido!";};
         return view('cadastros.cadastro');

    }

    public function exibeExtintor()
    { 
          if(auth()->user()->role_id <> 1){return "Acesso não permitido!";};
          return view('cadastros.listas');
    }

    public function inspecionar($objeto)
    {
          return view('cadastros.inspecionar',compact('objeto'));
    }

    public function inativarObjt($objeto)
    {     
      if(auth()->user()->role_id <> 1){return "Acesso não permitido!";};
          $objs = objetos::findOrfail($objeto);
          $objs->ativo = 2;
          $objs->save();
          return view('cadastros.listas');
    }
 
    public function editarobjt($objeto)
    {
      if(auth()->user()->role_id <> 1){return "Acesso não permitido!";};
          return view('cadastros.editar',compact('objeto'));
    }

    public function historicobjt($objeto)
    {
       if(auth()->user()->role_id <> 1){return "Acesso não permitido!";};
          return view('cadastros.historico',compact('objeto'));
    }

    public function ExibeLogs($objeto)
    {

          return view('cadastros.exibeLogs',compact('objeto'));
    }
    
    public function geraQR($objeto)
    {
              return  QRCode::url('http://megabrigada.systemja.com.br/inspecionar/'.$objeto)
                  ->setSize(8)
                  ->setMargin(2)
                  ->png();
    }

    public function inspecaoConcluida()
    {
      
         return view('livewire.inspecao-concluida');
    }

}
