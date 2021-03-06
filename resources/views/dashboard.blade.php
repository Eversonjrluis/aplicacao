<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class='row'>
            <div class="col-md-6">
               <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewireStyles
                     @livewire('dashboard-graf-status-objetos') 
                  </div>
               </div>
            </div>
            <div class="col-md-6">
                  <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        @livewireStyles
                         @livewire('dashboard-graf-inspecao-objetos') 
                      </div>
                  </div>
            </div>
        </div>    
    </div>  
        <div class="py-12">
        <div class='row'>
            <div class="col-md-12">
               <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                 <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @livewireStyles
                     @livewire('dashboard-graf-item-ciclo')
                  </div>
               </div>
            </div>
        </div>    
    </div>   
</x-app-layout>



