<?php

namespace Laravel\Jetstream\Http\Controllers\Livewire;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelQRCode\Facades\QRCode;

class ObjetosController extends Controller
{
    /**
     * Show the user profile screen.
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
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
           return "ok";
    }
    
    public function geraQR($objeto)
    {
              return  QRCode::url('http://megatech.systemja.com.br/inspecionar/'.$objeto)
                  ->setSize(8)
                  ->setMargin(2)
                  ->png();
    }

}
