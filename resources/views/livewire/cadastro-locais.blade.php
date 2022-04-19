 <x-jet-form-section submit="create" method="post">
    <x-slot name="title">
        {{ __('Cadastro de locais') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Cadastre qual local deve possuir um item a ser inspecionado.') }}
    </x-slot>

    <x-slot name="form">

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="descricao" value="{{ __('Descrição') }}" />
            <x-jet-input id="descricao" wire:model="descricao" type="text" class="mt-1 block w-full"/>
            <x-jet-input-error for="descricao" class="mt-2" />
                          
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="obs" value="{{ __('Observação') }}" />
            <x-jet-input id="obs" wire:model="obs" type="text" class="mt-1 block w-full"/>
            <x-jet-input-error for="obs" class="mt-2" />

        </div>  

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ativo" value="{{ __('Status') }}" />

            <select id="ativo"  class="block mt-1 w-full" wire:model="ativo" name="ativo">]

                <option>
            
                </option>
@foreach($status as $stat)
                <option value="{{$stat->id}}"  >
                    {{$stat->descricao}}
                </option>
@endforeach

            </select>    
            <x-jet-input-error for="ativo" class="mt-2" />     
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