<x-app-layout>
  <br><br><br>  <br><br><br>
<div class='row'> 
  <div class='col-sm-3'>
  </div> 
<div class='col-sm-6'>   
<div class="card">
  <div class="card-header">
    <center>
     <h4>Verificação Concluída!</h4>
    </center> 
  </div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text"> Existem mais  {{$objs->count()}} itens para verificar. </p>
      
     
      @foreach($objs as $obj)
         <div class="alert alert-{{$obj->status->class}}">Local:{{$obj->locais->descricao}} - Tipo:{{$obj->descricao}}</div>       
      @endforeach
     

  </div>
</div>
</div>
</div>

</x-app-layout>