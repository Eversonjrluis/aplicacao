<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\user;

class EditarUsuarios extends Component
{


    public $users;
    public $FormTroca;
 

    public function reativar($id)
    {
                     $insp = user::where('ativo',2)->where('id',$id)->update(['ativo' => 1]);
                     $this->salvo = true; 
    }

    public function inativar($id)
    {
                    $insp = user::where('ativo',1)->where('id',$id)->update(['ativo' => 2]);
                    $this->salvo = true; 
    }

    public function alterarNivelAdmin($id)
    {
                    $insp = user::where('ativo',1)->where('id',$id)->update(['role_id' => 1]);
                    $this->salvo = true; 
    }

    public function alterarNivelInspetor($id)
    {
                    $insp = user::where('ativo',1)->where('id',$id)->update(['role_id' => 2]);
                    $this->salvo = true; 
    }

    public function render()
    {
                    
                    $this->users = user::all();
        return view('livewire.editar-usuarios');
    }
}
