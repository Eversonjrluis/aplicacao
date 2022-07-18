<div>
     <div class="container-fluid">
          <div class="alert alert-secondary">
              <div class="row">
                 <div class="col-sm-1">
                     ID
                 </div>
                 <div class="col-sm-1">
                     Descri.
                 </div>
                 <div class="col-sm-2">
                     Local
                 </div>
                 <div class="col-sm-8">
                     Ciclos {{ date('Y') }}
                 </div>
              </div>    
          </div>
    @foreach($objetos as $objeto)
         <div class="alert alert-info">
              <div class="row">
                 <div class="col-sm-1">
                     {{$objeto->id}}
                 </div>
                 <div class="col-sm-1">
                     {{$objeto->descricao}}
                 </div>
                 <div class="col-sm-2">
                     {{$objeto->locais->descricao}}
                 </div>
                 <div class="col-sm-8">
                    @php $data_ciclo = 0; @endphp
                  
                    @for($i = 1; $i <= (floor(365 / $objeto->validade)) ;$i++)
                        @php 

                            $data_anterior = $data_ciclo;
                            $data_ciclo = $objeto->validade + $data_ciclo ;
                            $data_ini = "01-01-".date('Y');

                            $data_prox = date('d/m/Y', strtotime("+$data_ciclo days",strtotime($data_ini)));

                            foreach($objeto->inspecoes as $insp){
                                 if($insp->dt_efetuado <= $data_prox && $insp->dt_efetuado >= $data_anterior){
                                    $resp = "<div class='btn btn-info'>".$insp->dt_efetuado."</div>";
                                    echo $resp;
                                 }

                            }

                        @endphp
                       
      
                    
                    @endfor
                 </div>
              </div>    
          </div>
    @endforeach
    </div>
</div>
