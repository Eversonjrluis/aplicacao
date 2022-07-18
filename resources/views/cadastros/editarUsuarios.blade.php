

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Usuários') }}
        </h2>
    </x-slot>


     <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


                <div class="mt-10 sm:mt-0">
                    @livewireStyles   
                     @livewire('cadastro-user')                  
                </div>
           
                <div class="mt-10 sm:mt-0">
                     @livewire('editar-usuarios')
                   @livewireScripts
                              
                </div>
            
        </div>
    </div>


</x-app-layout>
