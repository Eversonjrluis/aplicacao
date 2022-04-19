 <x-jet-form-section submit="create" method="post">
    <x-slot name="title">
        {{ __('Cadastro de Usuários') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Cadastre os usuarios na plataforma!') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="nome" value="{{ __('Nome') }}" />
            <x-jet-input id="nome" wire:model="nome" type="text" class="mt-1 block w-full"/>
            <x-jet-input-error for="nome" class="mt-2" />        
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="login" value="{{ __('login') }}" />
            <x-jet-input id="login" wire:model="login" type="text" class="mt-1 block w-full"/>
            <x-jet-input-error for="login" class="mt-2" />        
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="role_id" value="{{ __('Acesso') }}" />
            <select class="form-control" wire:model="role_id" id="role_id">
                <option></option>
                <option value="2">Inspetor</option>
                <option value="1">Administrador</option>
            </select>
            <x-jet-input-error for="role_id" class="mt-2" />        
        </div>




    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Salvo com sucesso!') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="item">
            {{ __('Salvar') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>