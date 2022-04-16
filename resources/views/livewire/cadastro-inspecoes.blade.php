
<div>
 <form wire:submit.prevent="create" method="post" >    
<h3></h3>
<div class='card card-sm'>
   <div class="row">
       <div class="col-md-12"><center><h3> {{$tipos->titulo}} </h3></center></div>
   </div>
   <div class="row">
       <div class="col-md-9"><h4>Local:{{$objetos->locais->descricao}}</h4></div>
       <div class="col-md-3"></div>
   </div>
   <div class="row">
       <div class="col-md-9"><h4>Colaborador: {{ auth()->user()->name }}</h4></div>
       <div class="col-md-3"><h4>{{$objetos->descricao}}</h4></div>
   </div>

  <div class="row">
       <div class="col-md-6"><h4>Data da Inspeção: {{ date('d/m/Y') }}</h4></div>
       <div class="col-md-6"><h4>Horário:  {{ date('H:i:s') }}<h4></div>
   </div>



   <div class="row">
       <div class="col-md-12"></div>
   </div>
 <div class="row">
    <div class="col-md-12"> 
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col" colspan="4"><center>Checklist</center></th>
    </tr>
  </thead>
  <tbody>

@foreach($checklists as $check)
    <tr>
      <td>{{$check->descricao}}</td>
   @if($check->tipo_resp_id == 1)   
      <td><input type="radio" wire:model="respostas.{{$check->id}}"  value="SIM">SIM</td>
      <td><input type="radio" wire:model="respostas.{{$check->id}}"  value="NÃO">NÃO</td>
      <td><input type="radio" wire:model="respostas.{{$check->id}}"  value="N/A">N/A
          <x-jet-input-error for="respostas" class="mt-2" />
      </td>
   @endif

   @if($check->tipo_resp_id == 2)   
      <td colspan="3">
        <input type="text" name="respostas" wire:model="respostas.{{$check->id}}" class="form-control">
        <x-jet-input-error for="respostas" class="mt-2" />
      </td>
   @endif

   @if($check->tipo_resp_id == 3)   
      <td><input type="radio" wire:model="respostas.{{$check->id}}" value='Vermelho'>Vermelho</td>
      <td><input type="radio" wire:model="respostas.{{$check->id}}" value='Verde'>Verde </td>
      <td><input type="radio" wire:model="respostas.{{$check->id}}" value='Branco'>Branco 

      <x-jet-input-error for="respostas" class="mt-2" />
  </td>
   @endif
   @if($check->tipo_resp_id == 4)   
     <td colspan="3"><input type="date" wire:model="respostas.{{$check->id}}"  class="form-control">
       <x-jet-input-error for="respostas" class="mt-2" />
     </td>

   @endif
    </tr>
@endforeach
     <tr>
        <td colspan="4">
        <select name="respostas_conforme" required wire:model="respostas_conforme" class=" alert alert-primary form-control">
            <option></option>
           <option value="6">
               CONFORME
           </option>
           <option value="7">
               NÃO CONFORME
           </option>
        </select>    
        <x-jet-input-error for="respostas_conforme" class="mt-2" />
      </td>
     </tr>

  </tbody>
</table>
   <input class='alert form-control btn btn-success'  type="submit" >
 </div>
</div>
</div>

</form>



</div>

