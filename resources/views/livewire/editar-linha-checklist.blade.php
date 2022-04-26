    <tr>
      <td>{{$checklists->id}}</td>
      <td>{{$checklists->descricao}}</td>
      <td>
        <select wire:model="novo_tipo">
          @foreach($this->respostas as $resp)
            <option  value='{{$resp->id}}'@if($checklists->tipo_resp->id == $resp->id) selected @endif>{{$resp->html}} </option>
          @endforeach
        </select>
      </td>
    <td>
          <button wire:click="alterar({{$checklists->id}})" class='btn btn-warning' >Salvar Alteração</button>
        @if($checklists->ativo == 1)
          <button wire:click="inativar({{$checklists->id}})" class='btn btn-danger'>Inativar</button>
        @endif
        @if($checklists->ativo == 2)
          <button wire:click="reativar({{$checklists->id}})" class='btn btn-success'>Reativar</button> 
        @endif 
        @if($salvo)
           <div  wire:model="salvo" class="btn alert-success">Salvo!</div>    
        @endif
    </td>
    </tr>