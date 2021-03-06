<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pré Cadastros') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


                <x-jet-section-border />
           
                <div class="mt-10 sm:mt-0">
                    @livewireStyles
                     @livewire('cadastro-tipos-objetos')                      
                </div>
            
        </div>
    </div>






     <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


                <x-jet-section-border />
           
                <div class="mt-10 sm:mt-0">
                    @livewireStyles   
                     @livewire('cadastro-locais')                  
                </div>
            
        </div>
    </div>

 


</x-app-layout>
