<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-8">


                <x-jet-section-border />
           
                <div class="mt-10 sm:mt-0">
                  <div class="card">
                   <table class="table">
                     <thead class="thead-dark">
                       <tr><th>Id</th><th>Usuário</th><th>Nome</th><th>Acesso</th></tr>
                     </thead>
                     <tbody>
                       @foreach($users as $user)
                        <tr><td>{{$user->id}}</td><td>{{$user->email}}</td><td>{{$user->name}}</td><td>
                            @if($user->role_id == 1) Administrador  @endif
                            @if($user->role_id == 2) Inspetor       @endif
                        </td></tr>
                       @endforeach
                     </tbody>  
                   </table> 
                  </div>       

                </div>
            
        </div>
    </div>
</x-app-layout>
