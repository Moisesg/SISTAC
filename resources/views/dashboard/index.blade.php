@section('sysName','SISTAC')
@section('page_heading','Principal')
@section('section')
<!-- /.row --> 
<div class="row">
   <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">
         <div class="panel-heading">
            <div class="row">
               <div class="col-xs-3">
                  <i class="fa fa-cubes fa-5x grey-icon" ></i>
               </div>
               <div class="col-xs-9 text-right">
                  <div class="huge">{{ $countPersons }}</div>
                  <div>Población</div>
               </div>
            </div>
         </div>
         <a href="{!! route('population.index') !!}">
            <div class="panel-footer">
               <span class="pull-left">Ver detalles</span>
               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
               <div class="clearfix"></div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">
         <div class="panel-heading">
            <div class="row">
               <div class="col-xs-3">
                  <i class="fa fa-envelope fa-5x grey-icon" ></i>
               </div>
               <div class="col-xs-9 text-right">
                  <div class="huge">{{ $countCorrespondence }} </div>
                  <div>Correspondencia</div>
               </div>
            </div>
         </div>
         <a href="{!! route('correspondence.index') !!}">
            <div class="panel-footer">
               <span class="pull-left">Ver detalles</span>
               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
               <div class="clearfix"></div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">
         <div class="panel-heading">
            <div class="row">
               <div class="col-xs-3">
                  <i class="fa fa fa-handshake-o fa-5x grey-icon" ></i>
               </div>
               <div class="col-xs-9 text-right">
                  <div class="huge">{{ $countVisits }}</div>
                  <div>Visitas</div>
               </div>
            </div>
         </div>
         <a href="{!! route('visits.index') !!}">
            <div class="panel-footer">
               <span class="pull-left">Ver detalles</span>
               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
               <div class="clearfix"></div>
            </div>
         </a>
      </div>
   </div>
   <div class="col-lg-3 col-md-6">
      <div class="panel panel-default">
         <div class="panel-heading">
            <div class="row">
               <div class="col-xs-3">
                  <i class="fa fa-square-o fa-5x grey-icon" ></i>
               </div>
               <div class="col-xs-9 text-right">
                  <div class="huge">0</div>
                  <div>undefined!</div>
               </div>
            </div>
         </div>
         <a href="javascript:void(0);">
            <div class="panel-footer">
               <span class="pull-left">Ver detalles</span>
               <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
               <div class="clearfix"></div>
            </div>
         </a>
      </div>
   </div>
</div>
<div class="row">
   <div class="col-lg-6">
      <div class="panel panel-success">
         <!-- Default panel contents -->
         <div class="panel-heading">Ultimos registros relacionados con la población</div>
         <!-- Table -->
         <table class="table table-hover " >
            <thead>
               <tr>
                  <th>#</th>
                  <th>No.Expediente </th>
                  <th>Nombre completo </th>
               </tr>
            </thead>
            <tbody>
               @foreach($tablePopulation as $person)
               <tr>
                  <td>{!! $person->id !!}</td>
                  <td>{!! $person->noExpediente !!}</td>
                  <td>{!! $person->apellidoPaterno !!} {!! $person->apellidoMaterno !!} {!! $person->nombreS !!}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
   <div class="col-lg-6">
      <div class="panel panel-success">
         <!-- Default panel contents -->
         <div class="panel-heading">Ultimos registros relacionados con correspondencia</div>
         <!-- Table -->
         <table class="table table-hover " >
            <thead>
               <tr>
                  <th>Folio</th>
                  <th>No.Oficio/Doc </th>
                  <th>Asunto </th>
                  <th>Nombre PPL </th>
               </tr>
            </thead>
            <tbody>
               @foreach($tableCorrespondence as $correspondence)
               <tr>
                  <td>{!! $correspondence->id !!}</td>
                  <td>{!! $correspondence->noOficioDoc !!}</td>
                  <td>{!! $correspondence->asunto !!}</td>
                  <td>{!! $correspondence->apellidoPaterno !!} {!! $correspondence->apellidoMaterno !!} {!! $correspondence->nombreS !!} </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
   <div class="col-lg-12">
      <div class="panel panel-success">
         <!-- Default panel contents -->
         <div class="panel-heading">Ultimos registros relacionados con las visitas</div>
         <!-- Table -->
         <table class="table table-hover " >
            <thead>
               <tr>
                  <th>#</th>
                  <th>No.Expediente </th>
                  <th>Nombre Completo Visitante</th>
                  <th>Tipo Visita</th>
                  <th>Parentesco </th>
               </tr>
            </thead>
            <tbody>
               @foreach($tableVisits as $visit)
               <tr>
                  <td>{!! $visit->id !!}</td>
                  <td>{!! $visit->noExpediente !!}</td>
                  <td>{!! $visit->nombreVisitante !!}</td>
                  <td>{!! $visit->parentesco !!}</td>
                  <td>{!! $visit->tipoVisita !!}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="modalChangePassword" data-backdrop="static" >
   <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Cambio de contraseña</h4>
         </div>
         <div class="modal-body">
            <div class="alert alert-warning" role="alert">
               <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
               <span class="sr-only">Error:</span>
               Por razones de seguridad debe cambiar su contraseña. Por favor indique su nueva contraseña en el siguiente formulario, algun cambio
            </div>
               {!! Form::model(Auth::user()->id, ['route' => [ 'dashboard.update', Auth::user()->id, ],'method' => 'PUT' ]) !!}
                    <div class="form-group">
                      <label for="password">Nueva contraseña</label>
                      {!!Form::password("password", ["id"=>"password","class"=>"form-control","placeholder"=>"Introduzca contraseña","required"=>"required"] )!!}                       
                    </div>
                    <div class="form-group">
                      <label for="confirmPassword">Confirme Nueva contraseña</label>
                     {!!Form::password("confirmPassword", ["id"=>"confirmPassword","class"=>"form-control","placeholder"=>"Confirme contraseña","required"=>"required"] )!!}                       
                    </div>
                     {!!Form::hidden("primeraVez",0,["id"=>"primeraVez"])!!}            
                    <div style="text-align:right">
                        {!!Form::submit("Cambiar contraseña",["class"=>"btn btn-primary "])!!}   
                    </div>
               <!-- <span class="clearfix"> &nbsp;</span> -->
               {!!Form::close()!!}   
         </div>
         <div class="modal-footer" style="text-align:left">
          <!--  <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button>  -->
         </div>
      </div>
   </div>
</div>
<!-- /.row -->
{!!Html::script('vendors/jquery/jquery-1.12.0.min.js')!!}
{!!Html::script('vendors/bootstrap/js/bootstrap.min.js')!!}
<!-- -->
{!!Html::script('vendors/pnotify/pnotify.custom.min.js')!!}    
<script type="text/javascript">

   var firstTime = {{ Auth::user()->primeraVez }};
   //console.log(firstTime);
   if (firstTime == 1) {
      $('#modalChangePassword').modal();
   };

   var password, password2;
   password = document.getElementById('password');
   password2 = document.getElementById('confirmPassword');
   password.onchange = password2.onkeyup = passwordMatch;
   
   function passwordMatch() {
       if(password.value !== password2.value)
           password2.setCustomValidity('Las contraseñas no coinciden.');
       else
           password2.setCustomValidity('');
   }

   PNotify.prototype.options.styling = "bootstrap3";
  <?php 
   $updatePassword = Session::get('message');
   if ($updatePassword == 'updatePassword') {
     ?>
    new PNotify({
     title: 'Notificación',
     text: 'La contraseña fue cambiada <strong>satisfactoriamente</strong>',
     type: 'info',
     width: "390px"
   });
    <?php } ?>

</script>

@stop