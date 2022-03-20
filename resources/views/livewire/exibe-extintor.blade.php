
<h3>Extintores</h3>
<div class='card card-sm'>
<table  class="table table-sm table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Descrição</th>
      <th scope="col">Observação</th>
      <th scope="col">Validade</th>
      <th scope="col">Capacidade</th>
      <th scope="col">Neblina</th>
      <th scope="col">Sólido</th>
      <th scope="col">Storz</th>
      <th scope="col">Local</th>
      <th scope="col">Responsavel</th>
      <th scope="col">Status</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
@foreach($objetos as $objeto)
    <tr>
      <th scope="row">{{$objeto->id}}</th>
      <td>{{$objeto->descricao}}</td>
      <td>{{$objeto->obs}}</td>
      <td>{{$objeto->validade}}</td>
      <td>{{$objeto->capacidade}}</td>
      <td>{{$objeto->neblina}}</td>
      <td>{{$objeto->solido}}</td>
      <td>{{$objeto->storz}}</td>
      <td>{{$objeto->locais->descricao}}</td>
      <td>{{$objeto->user->name}}</td>
      <td>{{$objeto->status_id}}</td>
      <td>

        <img onClick="window.print()" src="{{route('objetos.geraQR',$objeto->id)}}" id='qrcode1' alt="" width="50%" height="50%">
      
      </td>
      <td>               
                    <x-jet-nav-link href="{{ route('inspecao.efetuar',$objeto->id) }}" :active="request()->routeIs('inspecao.efetuar')">
                        {{ __('Inspecionar') }}
                    </x-jet-nav-link>
      </td>
    </tr>
@endforeach
  </tbody>
</table>

</div>




