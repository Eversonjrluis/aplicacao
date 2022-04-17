<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class CadastroUser extends Component
{

    public $nome;
    public $login;
    public $role_id;

            protected $rules = [
              'nome'    => 'required',
              'login'   => 'required',
              'role_id' => 'required',
           ];

    public function create(){
                     
                     $this->validate();

                     $user = User::create([
                                  'name'     => $this->nome,
                                  'email'    => $this->login,
                                  'password' => '$2y$10$AQMqTby.f/mjYYAgftRqWugEyORJRKxHzMym3olypkYiUuSxU.cx2',
                                  'role_id'  => $this->role_id,
                             ]);

                     $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.cadastro-user');
    }
}
