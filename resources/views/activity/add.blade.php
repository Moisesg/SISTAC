@extends('layouts.main')
@section('sysName','SISTAC')
@section('page_heading','Agregar Tarea')
@section('section')
<!-- /.row -->          
 <div  class="" id="sectionTables">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">@yield('page_heading')</h3>
    </div>
    <div class="panel-body">
      <div class="row">
        <div class="col-lg-12">
           <div class="alert alert-info" role="alert" style="margin-top:10px;">
             <i class="fa fa-info-circle fa-fw"></i>
             <span class="sr-only">Error:</span>
             Ingrese la información solicitada en el formulario, al finalizar de clic en el boton <b>Agregar a Tarea </b>
          </div>
        </div>
        <div class="clearfix">&nbsp;</div>
        <div class="col-lg-9 col-lg-offset-2">  
           <form class="form-horizontal">
            <!--
              <div class="form-group">
                <label for="folio" class="col-lg-3 control-label">Consecutivo</label>
                <div class="col-lg-6">
                  {!!Form::hidden("id",null,["class"=>"form-control input-sm","onfocus"=>"this.blur();","required"=>"required", "style"=>"color:#d9534f;" ])!!}    
                </div>
              </div>
            -->
              <div class="form-group">
                <label for="personalAsignado" class="col-lg-3 control-label">Personal asignado</label>
                <div class="col-lg-6">
                 {!! Form::select('personalAsignado', [ ], null, array('id '=>'idPersonalAsignado ','class ' => 'form-control input-sm ',"required"=>"required" )) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="asignador" class="col-lg-3 control-label">Personal que asigna</label>
                <div class="col-lg-6">
                 {!! Form::select('asignador', [ ], null, array('id '=>'idAsignador ','class ' => 'form-control input-sm ',"required"=>"required" )) !!}
                </div>
              </div>     
               <div class="form-group">
                <label for="asignador" class="col-lg-3 control-label">Tarea</label>
                <div class="col-lg-6">
              {!!Form::textarea("tarea",null,["class"=>"form-control input-sm","placeholder"=>"Introduzca tarea a asignar","rows"=>"6","style"=>"resize:none","required"=>"required" ])!!}
                </div>
              </div>       
              <div class="form-group">
                <label for="ticketReferencia" class="col-lg-3 control-label">ticket Referencia</label>
                 <div class="col-lg-6">
                     <div class='input-group' id="date-container">
                        <div class="input-group-addon" data-toggle="tooltip" data-placement="top" title="Marque esta casilla sino existe ticket referencia" >
                           <input name="blockTicketInput" type="checkbox" id="blockTicketInput"  checked="checked">
                        </div>                        
                        {!!Form::text("ticketReferencia",null,["class"=>"form-control input-sm","id"=>"ticketReferencia","placeholder"=>"Introduzca ticket referencia","required"=>"required","disabled"=>"disabled"])!!}   
                      </div>                                   
                 </div>                  
                </div>
              <div class="form-group">
                <label for="fechaInicioTarea" class="col-lg-3 control-label">Fecha inicio tarea</label>
                <div class="col-lg-6">
                  <?php $dateNow = new DateTime(); $date = $dateNow->format('Y-m-d H:i:s'); ?>    
                  {!!Form::text("fechaInicioTarea",$date,["class"=>"form-control","required"=>"required","readonly"=>true,])!!}  
                </div>
              </div>         
              <div class="form-group">
                <div class="col-lg-9 text-right">
                   <a href="{!! URL::to('dashboard ') !!}" class="btn btn-default"> Cancelar</a>
                      {!!Form::submit("Agregar Tarea",["class"=>"btn btn-primary "])!!}   
                   </div>  
              </div>
           </form> 
        </div>  
      </div>
      <div class="clearfix">&nbsp;</div>
    </div>
  </div>
 </div>
   <!-- /.row -->  
   {!!Html::script('vendors/jquery/jquery-1.12.0.min.js')!!}
   {!!Html::script('vendors/bootstrap/js/bootstrap.min.js')!!}
   {!!Html::script('vendors/datatables/media/js/jquery.dataTables.min.js')!!}        
   {!!Html::script('vendors/datatables/media/js/dataTables.bootstrap.js')!!}    
   <!-- -->
   {!!Html::script('vendors/pnotify/pnotify.custom.min.js')!!}  
   {!!Html::script('vendors/moment/moment.js')!!}        
   <!-- -->
   {!!Html::script('vendors/datatables/extensions/Buttons/js/dataTables.buttons.min.js')!!}
   {!!Html::script('vendors/datatables/extensions/Buttons/js/buttons.html5.js')!!}
   {!!Html::script('vendors/datatables/extensions/Buttons/js/buttons.print.min.js')!!}

   <script type="text/javascript">
   
   $("#blockTicketInput").change(function (e) {
     e.preventDefault();
     if ($('#blockTicketInput').is(':checked') == true){
         $("#ticketReferencia").attr("disabled", true).attr('required',false ); 
     } else {
         $("#ticketReferencia").attr("disabled", false).attr('required', true); 
     }     
   });

    $('[data-toggle="tooltip"]').tooltip();

  
   </script>
@stop
 