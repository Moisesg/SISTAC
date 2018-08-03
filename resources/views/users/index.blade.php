@extends('layouts.mainAuth')
@section('sysName','SIGES')
@section('page_heading','Usuarios')
@section('section')
  @if (Auth::user()->tipo == "ADMINISTRADOR" )
     @include('users.contentIndex.fullTable')                   
   @else
     @include('alerts.noPrivileges')   
  @endif

{!!Html::script('vendors/jquery/jquery-1.12.0.min.js')!!}
{!!Html::script('vendors/bootstrap/js/bootstrap.min.js')!!}
{!!Html::script('vendors/datatables/media/js/jquery.dataTables.min.js')!!}        
{!!Html::script('vendors/datatables/media/js/dataTables.bootstrap.js')!!}    
<!-- -->
{!!Html::script('vendors/pnotify/pnotify.custom.min.js')!!}      
<!-- -->
{!!Html::script('vendors/datatables/extensions/Buttons/js/dataTables.buttons.min.js')!!}
{!!Html::script('vendors/datatables/extensions/Buttons/js/buttons.html5.js')!!}
{!!Html::script('vendors/datatables/extensions/Buttons/js/buttons.print.min.js')!!}
<script type="text/javascript">  
   PNotify.prototype.options.styling = "bootstrap3";
   <?php
      $message = Session::get('message'); 
      switch ($message) {        
        case 'store': ?>                  
     new PNotify({
      title: 'Registro exitoso',
      text: 'El nuevo registro del Usuario ha sido agregado <strong>satisfactoriamente</strong>',
      type: 'success',
      width: "390px",
      delay: 2500
    });
     <?php break; case 'duplicate': ?>
     new PNotify({
      title: 'Registro duplicado',
      text: 'El registro del Usuario se encuentra <strong>duplicado</strong>, no se guardaron los datos, verifiquelos e intentelo de nuevo.',
      type: 'warning',
      width: "390px",
      delay: 2500
    });            
     <?php break; case 'error': ?>
     new PNotify({
      title: 'Error encontrado',
      text: 'Ocurrió un <strong>error</strong>, al guardar los datos, verifique su conexión de red o llame al admin del sistema...',
      type: 'danger',
      width: "390px",
      delay: 2500
    });
     <?php break; case 'update': ?>
     new PNotify({
      title: 'Actualización exitosa',
      text: 'El registro del Usuario ha sido actualizado <strong>satisfactoriamente</strong>',
      type: 'success',
      width: "390px",
      delay: 2500
    });     
     <?php break; } ?>
   
     <?php 
      $deleteMessage = Session::get('deleteMessage');
      if ($deleteMessage == 'delete') {
        ?>
       new PNotify({
        title: 'Registro eliminado',
        text: 'El registro del Usuario ha sido eliminado <strong>satisfactoriamente</strong>',
        type: 'success',
        width: "390px",
        delay: 2500
      });
       <?php } ?>
   
       var table = $('#usersTable').DataTable({
        "processing": true,
        "serverSide": false,
        "aoColumnDefs": [                            
        { "bSortable": false, "searchable": false, "targets": 5 },      
        { "bSortable": false, "searchable": false, "targets": 6 }      
        ],          
        dom: 'lrtip',
        "language": {
          "url": "./dist/config/Spanish.json"
        }
      });
   
       $("#txtSearchUsers").keyup( function () {
         table.search($(this).val()).draw();
       });
   
        function ConfirmDelete(nombreUsuario){
        var x = confirm("¿Esta seguro de eliminar el usuario: "+nombreUsuario+" ?");
        if (x)
          return true;
        else
          return false;
        }
   
</script>
@stop