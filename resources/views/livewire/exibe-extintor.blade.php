<style>
td { 
word-wrap: break-word; max-width: 100px;
font-size:13px;
 };
</style>
<h3>Objetos de Inspeção:</h3>
<div class='card card-fluid'>
  <div style="overflow: auto; width: 100%">
<table  class="table  table-fluid table-sm table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th >ID</th>
      <th >Tipo</th>
      <th >Descrição</th>
      <th >Observação</th>
      <th >Validade</th>
      <th >Capacidade</th>
      <th >Neblina</th>
      <th >Sólido</th>
      <th >Storz</th>
      <th >Mangueiras</th>
      <th >Local</th>
      <th >Responsavel</th>
      <th >Dt.Prox.Insp.</th>
      <th >Situação</th>
      <th >Status</th>
      <th >QrCode</th>
      <th >Ações</th>

    </tr>
  </thead>
  <tbody>
@foreach($objetos as $objeto)
    <tr >
      <th scope="row">{{$objeto->id}}</th>
      <td >{{$objeto->tipo->descricao}}</td>
      <td >{{$objeto->descricao}}</td>
      <td >{{$objeto->obs}}</td>
      <td>{{$objeto->validade}}</td>
      <td>{{$objeto->capacidade}}</td>
      <td>{{$objeto->neblina}}</td>
      <td>{{$objeto->solido}}</td>
      <td>{{$objeto->storz}}</td>
      <td>{{$objeto->qtd_mangueiras}}</td>
      <td>{{$objeto->locais->descricao}}</td>
      <td>{{$objeto->user->name}}</td>
      <td>{{ date('d/m/Y', strtotime($objeto->data_validade))  }}</td>
      <td class="alert alert-{{$objeto->status->class}}">{{$objeto->status->descricao}}</td>
      <td >{{$objeto->status_insp}}</td>
      

      <td>
                    <a download='QrCode{{$objeto->id}}.png' href="{{route('objetos.geraQR',$objeto->id)}}">
                         <img  src="{{route('objetos.geraQR',$objeto->id)}}"  alt="" width="100%" height="100%">
                    </a>  
      </td>
      <td>                  
<div style="width: 100%;" class="btn btn-sm btn-success ">
                    <x-jet-nav-link href="{{ route('inspecao.efetuar',$objeto->id) }}" :active="request()->routeIs('inspecao.efetuar')">
                        {{ __('Inspecionar') }}
                    </x-jet-nav-link>
</div>                     
<div  style="width: 100%;"class="btn btn-sm btn-info ">
                    <x-jet-nav-link href="{{ route('objt.historico',$objeto->id) }}" :active="request()->routeIs('objt.historico')">
                        {{ __('Histórico') }}
                    </x-jet-nav-link>
</div>      
<div  style="width: 100%;" class="btn btn-sm btn-warning ">
                    <x-jet-nav-link href="{{ route('objt.editar',$objeto->id) }}" :active="request()->routeIs('objt.editar')">
                        {{ __('Editar') }}
                    </x-jet-nav-link>
</div>                    
<div style="width: 100%;" class="btn btn-sm btn-danger ">
                    <x-jet-nav-link href="{{ route('inspecao.inativarObjt',$objeto->id) }}" :active="request()->routeIs('inspecao.inativarObjt')">
                        {{ __('Inativar') }}
                    </x-jet-nav-link>
</div>      
            
      </td>

    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>




