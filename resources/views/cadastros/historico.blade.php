<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Histórico de Inspeções') }}
        </h2>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">


                <x-jet-section-border />
           
                <div class="mt-10 sm:mt-0">
                    @livewireStyles
                     @livewire('historico',['post' => $objeto])                     
                </div>

        </div>
    </div>
</x-app-layout>
