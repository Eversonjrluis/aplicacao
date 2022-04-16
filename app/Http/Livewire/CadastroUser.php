<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class CadastroUser extends Component
{

    public $nome;
    public $login;

            protected $rules = [
              'nome' => 'required',
              'login' => 'required',
           ];

    public function create(){
                     
                     $this->validate();

                     $user = User::create([
                                  'name'  => $this->nome,
                                  'email' => $this->login,
                                  'password' => '$2y$10$AQMqTby.f/mjYYAgftRqWugEyORJRKxHzMym3olypkYiUuSxU.cx2',
                             ]);

                     $this->emit('saved');
    }

    public function render()
    {
        return view('livewire.cadastro-user');
    }
}
