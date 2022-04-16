<div>
<div class="card">    
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descricação</th>
      <th scope="col">Usuário</th>
      <th scope="col">Data</th>
      <th scope="col">Local</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

   @foreach($inspecoes as $insp) 
    <tr class="alert alert-{{$insp->status->class}}">
      <th scope="row">{{$insp->id}}</th>
      <td>{{$insp->objeto->descricao}}</td>
      <td>{{$insp->user->name}}</td>
      <td>{{$insp->dt_efetuado }}</td>
      <td>{{$insp->locais->descricao}}</td>
      <td>{{$insp->status->descricao}}</td>
      <td>
        <div style="width: 100%;" class="btn btn-sm btn-info ">
                    <x-jet-nav-link href="{{ route('objt.ExibeLogs',$insp->id) }}" :active="request()->routeIs('objt.ExibeLogs')">
                        {{ __('Documento') }}
                    </x-jet-nav-link>
        </div> 
      </td>
    </tr>
   @endforeach 

  </tbody>
</table>

</div>
</div>
