@extends('layouts.main')
@section('sysName','SISTAC')
@section('page_heading','Principal')
@section('section')
<!-- /.row -->          
  <div id="sectionTables">
    <div class="alert alert-info" role="alert">
       <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
         <span class="sr-only">Error:</span>
          A continuacion se muestra la información actualmente registrada en el sistema ...
        </div>
     <span class="clearfix"> &nbsp;</span>   
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="taskTableTab">
        <li role="task" class="active"><a href="#tasksInProcess" aria-controls="tasksInProcess" role="tab" data-toggle="tab">Tareas en Proceso</a></li>
        <li role="task"><a href="#finishedTasks" aria-controls="finishedTasks" role="tab" data-toggle="tab">Tareas finalizadas</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="tasksInProcess">
          <span class="clearfix"> &nbsp;</span>   
          <div class="row">
             <div class="col-lg-5">
                <div class="form-group">
                   <label class="sr-only" for="txtSearch"></label>
                   <div class="input-group input-group-sm">
                      <div class="input-group-addon"><i class="fa fa-search fa-fw"></i></div>
                      <input type="text" class="form-control col-lg-6" name="txtSearchTask" id="txtSearchTask" placeholder="Iniciar búsqueda" autofocus>
                   </div>
                </div>
             </div>
             <!--
             <div class="col-lg-7 text-right">  
                <i class="fa fa-question-circle fa-3x" data-toggle="popover" style="color:#31708f;"></i>
             </div>                 
           -->
          </div>    
          <div class="row">
            <div class="col-lg-12">
              <div class="table-responsive">
                <table width="100%" class="table table-hover table-condensed table-bordered" id="tasksInProcessTable"  >
                   <thead>
                      <tr>
                         <th  width="1%">#</th>
                         <th width="10%">Personal Asignado</th>
                         <th width="10%">Asignador</th>
                         <th width="25%">Tarea</th>
                         <th width="10%">Ticket referencia</th>
                         <th width="15%">Fecha inico Act.</th>
                         <th width="5%">% Avance</th>
                     </tr>
                   </thead>
                   <tbody>  
                    @foreach ($unfinishedActivities as $unfinishedActivity)
                   <tr>
                      <td>{!! $unfinishedActivity->id !!}</td>
                      <td>{!! $unfinishedActivity->personalAsignado !!}</td>
                      <td>{!! $unfinishedActivity->persAsignador !!} </td>
                      <td>{!! $unfinishedActivity->tarea !!} </td>
                      <td>{!! $unfinishedActivity->ticketReferencia !!} </td>
                      <td>{!! $unfinishedActivity->fechaInicioTarea !!} </td>
                      <td>{!! $unfinishedActivity->porcentaje !!} </td>
                   </tr>
                    @endforeach                                                             
                   </tbody>
                </table>
              </div>
            </div>             
          </div>        
        </div>
        <div role="tabpanel" class="tab-pane" id="finishedTasks">
          <span class="clearfix"> &nbsp;</span>   
          <div class="row">
             <div class="col-lg-5">
                <div class="form-group">
                   <label class="sr-only" for="txtSearch"></label>
                   <div class="input-group input-group-sm">
                      <div class="input-group-addon"><i class="fa fa-search fa-fw"></i></div>
                      <input type="text" class="form-control col-lg-6" name="txtSearchTaskFinished" id="txtSearchTaskFinished" placeholder="Iniciar búsqueda" autofocus>
                   </div>
                </div>
             </div>
             <!--
             <div class="col-lg-7 text-right">  
                <i class="fa fa-question-circle fa-3x" data-toggle="popover" style="color:#31708f;"></i>
             </div>                 
           -->
          </div>            
          <div class="table-responsive">
            <table width="100%" class="table table-hover table-condensed" id="tasksFinishedTable"  >
               <thead>
                  <tr>
                     <th  width="1%">#</th>
                     <th width="15%">Personal Asignado </th>
                     <th width="15%" >Asignador </th>
                     <th width="25%">Tarea </th>
                     <th width="15%">Ticket referencia</th>
                     <th width="15%">Fecha inici Act.</th>
                     <th width="20%">Status</th>
                  </tr>
               </thead>

            </table>
          </div>              
        </div>
      </div>            
  </div>
   <!-- /.row -->  
   {!!Html::script('vendors/jquery/jquery-1.12.3.js')!!}
   {!!Html::script('vendors/bootstrap/js/bootstrap.min.js')!!}
   {!!Html::script('vendors/datatables//media/js/jquery.dataTables.js')!!}        
   {!!Html::script('vendors/datatables//media/js/dataTables.bootstrap.js')!!}    
   <!-- -->
   {!!Html::script('vendors/datatables//extensions/Buttons/js/dataTables.buttons.js')!!}
   {!!Html::script('vendors/datatables//extensions/Buttons/js/buttons.bootstrap.js')!!}
   {!!Html::script('vendors/datatables/extensions/Buttons/js/complements/jszip.min.js')!!} 
   {!!Html::script('vendors/datatables/extensions/Buttons/js/complements/pdfmake.min.js')!!}
   {!!Html::script('vendors/datatables/extensions/Buttons/js/complements/vfs_fonts.js')!!}
   {!!Html::script('vendors/datatables//extensions/Buttons/js/buttons.html5.js')!!}
   {!!Html::script('vendors/datatables//extensions/Buttons/js/buttons.print.js')!!}
   {!!Html::script('vendors/datatables//extensions/Buttons/js/buttons.colVis.js')!!}

   <!-- -->   
   {!!Html::script('vendors/pnotify/pnotify.custom.min.js')!!}  
   {!!Html::script('vendors/moment/moment.js')!!}        

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

     var table = $('#tasksInProcessTable').DataTable({
              "processing": false,
              /*
              "aoColumnDefs": [                            
                 { "bSortable": false, "searchable": false, "targets": 7 },   
                 { "bSortable": false, "searchable": false, "targets": 8 },   
                 { "bSortable": false, "searchable": false, "targets": 9 }   

                ],             */
                "columns": [
                      {"data": 'id', "name": 'id'},
                      {"data": 'personalAsignado', "name": 'personalAsignado'},
                      {"data": 'persAsignador', "name": 'persAsignador'},
                      {"data": 'tarea', "name": 'tarea'},
                      {"data": 'ticketReferencia', "name": 'ticketReferencia'},   
                      {"data": 'fechaInicioTarea', "name": 'fechaInicioTarea'},   
                      {"data": 'porcentaje', "name": 'porcentaje'}
                  ],
                "language": {
                    "url": "{{ URL::to('/dist/config/Spanish.json') }}"
                 },        
                 dom: "<'row'<'col-sm-6'l><'pull-right'B>>" +
                      "<'row'<'col-sm-12'tr>>" +
                      "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                 buttons: {
                      buttons: [
                          { extend: 'pdf', text:'<i class="fa fa-print"></i> PDF', className: 'btn btn-primary btn-sm' },
                          { extend: 'excel', text:'<i class="fa fa-download"></i> Excel', className: 'btn btn-primary btn-sm' }
                      ]
                 }                                              
             });

       $("#txtSearchTask").keyup( function () {
         table.search($(this).val()).draw();
       });
   </script>
@stop