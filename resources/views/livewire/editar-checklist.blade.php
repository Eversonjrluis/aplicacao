
<div>
    
<h3></h3>
<div class='card card-sm'>



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
    <tr><th scope="col">ID</th><th>Verificação</th><th><center>Tipo Resposta</center></th><th><center>Ações</center></th></tr>
  </thead>
  <tbody>

@foreach($checklists as $check)

                    @livewireStyles
                     @livewire('editar-linha-checklist',['post' => $check->id]) 

@endforeach


  </tbody>
</table>
  
 </div>
</div>
</div>





</div>

