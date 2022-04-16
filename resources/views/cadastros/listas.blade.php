<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Relatórios') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-full mx-auto py-10 sm:px-6 lg:px-8">


                <x-jet-section-border />
           
                <div class="mt-10 sm:mt-0">
                    @livewireStyles
                     @livewire('exibe-extintor')                     
                </div>
            
        </div>
    </div>
</x-app-layout>
