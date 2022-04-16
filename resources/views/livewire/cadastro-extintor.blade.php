 <x-jet-form-section submit="create" method="post">
    <x-slot name="title">
        {{ __('Cadastros de itens') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Cadastre o item de inspeção a onde ele se encontra e qual o responsavel que deverá fazer sua verificação. ') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="tipo_item" value="{{ __('Tipo do item') }}" />

            <select id="tipo_objetos_id"  class="block mt-1 w-full" wire:model="tipo_objetos_id" name="tipo_objetos_id">
                <option>
                </option>
@foreach($tipos as $tipo)
                <option value="{{$tipo->id}}"  >
                    {{$tipo->descricao}}
                </option>
@endforeach              

            </select>         
            <x-jet-input-error for="tipo_objetos_id" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="descricao" value="{{ __('Descrição') }}" />
            <x-jet-input id="descricao" wire:model="descricao" type="text"  class="mt-1 block w-full"/>
            <x-jet-input-error for="descricao" class="mt-2" />
                          
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Observação" value="{{ __('Observação') }}" />
            <x-jet-input id="Observação" wire:model="obs" type="text" class="mt-1 block w-full"/>
            <x-jet-input-error for="obs_error" class="mt-2" />

        </div>  

       <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Validade" value="{{ __('Inspecionar a cada quantos dias?') }}" />
            <x-jet-input id="Validade"  type="number"  wire:model="validade" class="mt-1 block w-full"/>
            <x-jet-input-error for="Validade" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Capacidade" value="{{ __('Capacidade') }}" />
            <x-jet-input id="Capacidade" type="text" wire:model="capacidade" class="mt-1 block w-full"/>
            <x-jet-input-error for="Capacidade" class="mt-2" />
        </div>

      <div class="col-span-6 sm:col-span-4">
      
            <x-jet-checkbox id="Neblina" type="checkbox" wire:model="neblina" class="form-checkbox h-5 w-5 text-gray-600"/>{{ __('Neblina') }}

       &nbsp;&nbsp;&nbsp;&nbsp; 
            <x-jet-checkbox id="Solido" type="checkbox" wire:model="solido" class="form-checkbox h-5 w-5 text-gray-600"/>{{ __('Sólido') }}

       &nbsp;&nbsp;&nbsp;&nbsp; 
            <x-jet-checkbox id="Stors" type="checkbox" wire:model="storz" class="form-checkbox h-5 w-5 text-gray-600"/>{{ __('Stors') }}

       </div>
  

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Local" value="{{ __('Local') }}" />

            <select id="locais_id"  class="block mt-1 w-full" wire:model="locais_id" name="locais_id">

                <option>
                </option>
                
@foreach($locais as $local)
                <option value="{{$local->id}}"  >
                    {{$local->descricao}}
                </option>
@endforeach

            </select>         
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="Responsavel" value="{{ __('Responsavel') }}" />

            <select id="responsavel_id"  class="block mt-1 w-full" wire:model="responsavel_id" name="responsavel_id">

                <option>
                </option>

@foreach($users as $user)
                <option value="{{$user->id}}" >
                    {{$user->name}}
                </option>
@endforeach
            </select>         
             <x-jet-input-error for="responsavel_id" class="mt-2" /> 
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="ativo" value="{{ __('Status') }}" />

            <select id="ativo"  class="block mt-1 w-full" wire:model="ativo" name="ativo">
<option></option>
                <option value="1">
                    Ativo
                </option>

                <option value="2">
                    Inativo
                </option>


            </select>    
            <x-jet-input-error for="ativo" class="mt-2" />     
        </div>


        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="qtd_mangueiras" value="{{ __('Mangueiras') }}" />

            <select id="qtd_mangueiras"  class="block mt-1 w-full" wire:model="qtd_mangueiras" name="qtd_mangueiras">

                <option value="0"  >
                    0
                </option>
                <option value="1" >
                    1
                </option>
                <option value="2" >
                    2
                </option>                
                <option value="3" >
                    3    
                </option>
                <option value="4" >
                    4
                </option>
                <option value="5" >
                    5
                </option>
            </select>         
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