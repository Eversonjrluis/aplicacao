<div>
<div class="card">    

   <div class="row">
       <div class="col-md-12"><center><h3> {{$titulos->objeto->tipo->titulo}} </h3></center></div>
   </div>
   <div class="row">
       <div class="col-md-9"><h4>Local:{{$titulos->locais->descricao}}</h4></div>
       <div class="col-md-3"></div>
   </div>
   <div class="row">
       <div class="col-md-9"><h4>Colaborador: {{$titulos->user->name}}</h4></div>
       <div class="col-md-3"><h4>{{$titulos->objeto->descricao}}</h4></div>
   </div>

  <div class="row">
       <div class="col-md-6"><h4>Data da Inspeção:{{$titulos->created_at}}</h4></div>

   </div>



<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Inspeção</th>
      <th scope="col">Conclusão</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>

   @foreach($inspecoes as $insp) 
    <tr>
      <th scope="row">{{$insp->id}}</th>
      <td>{{$insp->pergunta}}</td>
      <td>{{$insp->resposta}}</td>
    </tr>
   @endforeach 

  </tbody>
</table>

</div>
</div>
