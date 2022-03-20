 <x-jet-form-section submit="create" method="post">
    <x-slot name="title">
        {{ __('Cadastro família de inspeção') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Cadastre qual é o tipo do objeto que sera inspecionado como por exemplo "Inspeção de Hidrante" ou "Inspeção de Extintores"') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="descricao" value="{{ __('Descrição') }}" />
            <x-jet-input id="descricao" wire:model="descricao" type="text" class="mt-1 block w-full"/>
            <x-jet-input-error for="descricao" class="mt-2" />
                          
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="titulo" value="{{ __('Titulo de Inspeção') }}" />
            <x-jet-input id="titulo" wire:model="titulo" type="text" class="mt-1 block w-full"/>
            <x-jet-input-error for="titulo" class="mt-2" />

        </div>  

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Salvo com sucesso!') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="item">
            {{ __('Savar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>