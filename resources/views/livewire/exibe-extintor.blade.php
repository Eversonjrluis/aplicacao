<style>
td { 
word-wrap: break-word; max-width: 100px;
font-size:13px;
 };
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.4.1/jspdf.debug.js" integrity="sha384-THVO/sM0mFD9h7dfSndI6TS0PgAGavwKvB5hAxRRvc0o9cPLohB0wb/PTA7LdUHs" crossorigin="anonymous"></script>
<script type="text/javascript">

    function imprimiQr(){

        let images = document.querySelectorAll('img');
var doc = new jsPDF();

        for (let i of images){
    let a = document.createElement('a');
    a.href = i.src;
    console.log(i);
    doc.addImage(i,'JPEG',15,40,180,180);
    doc.text(i.alt, 50, 220);
    doc.addPage();
                             }



doc.save('QrCode.pdf');

    }


    function imprimiQr2(){
    var elementos = document.getElementById('QrCode').innerHTML;

    console.log(elementos);
    tela_impressao = window.open('about:blank');
    tela_impressao.document.write(elementos);
    tela_impressao.window.print();
    tela_impressao.window.close();
    }
</script>
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
      <th >Status Prazo</th>
      <th >Status Inspeção</th>
      <th> <p style="font-size: 10px"  onclick="imprimiQr()">Salvar Todos em PDF</p>QrCode</th>
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
      <td class="alert btn-{{$objeto->status->class}}">{{$objeto->status->descricao}}</td>
      <td class="alert btn-{{$objeto->status_ins->class}}">{{$objeto->status_ins->descricao }}</td>
      

      <td class='QrCode'style="font-size: 10px;">
                    <a   download='QrCode{{$objeto->id}}.png' href="{{route('objetos.geraQR',$objeto->id)}}">
                         <img  id='QrCode'  src="{{route('objetos.geraQR',$objeto->id)}}"  alt="Nº {{$objeto->id}} Tipo: {{$objeto->descricao}} Local: {{$objeto->locais->descricao}}" width="100%" height="100%">

                    </a>  
                    {{$objeto->id}}-{{$objeto->descricao}}-{{$objeto->locais->descricao}}
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
                        {{ __('Excluir') }}
                    </x-jet-nav-link>
</div>      
            
      </td>

    </tr>
@endforeach
  </tbody>
</table>
</div>
</div>




