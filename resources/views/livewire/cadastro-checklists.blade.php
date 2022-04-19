 <x-jet-form-section submit="create" method="post">
    <x-slot name="title">
        {{ __('Cadastro Checklist') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Cadastre o que deverá ser verificado na inspeção.') }}
    </x-slot>

    <x-slot name="form">
 <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tipo_item" value="{{ __('Tipo do item') }}" />

            <select id="tipo_objeto_id"  class="block mt-1 w-full" wire:model="tipo_objeto_id" name="tipo_objeto_id">
                <option>
                </option>
@foreach($tipos as $tipo)
                <option value="{{$tipo->id}}"  >
                    {{$tipo->descricao}}
                </option>
@endforeach              

            </select>         
            <x-jet-input-error for="tipo_objeto_id" class="mt-2" />
        </div>


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
            <x-jet-label for="tipo_resp_id" value="{{ __('Tipo de resposta permitida') }}" />

            <select id="tipo_resp_id"  class="block mt-1 w-full" wire:model="tipo_resp_id" name="tipo_resp_id">

                <option>
            
                </option>
@foreach($tipo_respostas as $tipo_resposta)
                <option value="{{$tipo_resposta->id}}"  >
                    {{$tipo_resposta->html}}
                </option>
@endforeach

            </select>    
            <x-jet-input-error for="tipo_resp_id" class="mt-2" />     
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Status" value="{{ __('Status') }}" />

            <select id="ativo"  class="block mt-1 w-full" wire:model="ativo" name="ativo">

                <option>
                </option>

                <option value="1"  >
                    Ativo
                </option>
                <option value="2"  >
                    Inativo
                </option>

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
