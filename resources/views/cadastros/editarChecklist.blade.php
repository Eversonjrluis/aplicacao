<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Checklist') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


                <x-jet-section-border />
           
                <div class="mt-10 sm:mt-0">
                	
              	
                 @livewireStyles
                    @foreach($tipo_objetos as $tipo)
                    <div class='card'>
                        <div class='card-title'>
                             <h4> {{$tipo->descricao}}: </h4>
                        </div>
                        <div class='card-body'> 
                                @livewire('editar-checklist',['post' => $tipo->id])
                        </div> 
                        <div class='card-footer'> 
                               
                        </div> 
                    </div>   
                    @endforeach
   
                                           
                </div>
            
        </div>
    </div>




</x-app-layout>
