               <div>

                   <x-jet-dialog-modal wire:model="FormTroca">
                        <x-slot name='title'>teste  </x-slot>
                        <x-slot name='content'>teste </x-slot>
                        <x-slot name='footer'> teste</x-slot>    
                   </x-jet-dialog-modal>


        
           


                    
                  <div class="card">
                   <table class="table">
                     <thead class="thead-dark">
                       <tr><th>Id</th><th>Usuário</th><th>Nome</th><th>Acesso</th><th>Status</th></tr>
                     </thead>
                     <tbody>
                       @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td><td>{{$user->email}}</td><td>{{$user->name}}</td>
                            <td>
                            @if($user->role_id == 1) 
                            <button wire:click="alterarNivelInspetor({{$user->id}})" class='btn btn-warning'>Administrador </button>  
                            @endif

                            @if($user->role_id == 2) 
                            <button wire:click="alterarNivelAdmin({{$user->id}})" class='btn btn-warning'> Inspetor </button>        
                            @endif
                            </td>

                            <td>
                            @if($user->ativo == 1)
                             <button wire:click="inativar({{$user->id}})"  class='btn btn-danger'>Inativar</button>
                            @endif
                            @if($user->ativo == 2)
                             <button wire:click="reativar({{$user->id}})" class='btn btn-success'>Reativar</button> 
                            @endif 
                            </td>

                        </tr>
                       @endforeach
                     </tbody>  
                   </table> 
</div>