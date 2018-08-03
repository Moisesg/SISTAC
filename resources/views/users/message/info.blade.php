<!-- Modal -->
<div class="modal" tabindex="-1" role="dialog" id="modalUserInfo" >
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Información del usuario</h4>
         </div>
         <div class="modal-body">
            <div class="alert alert-warning" role="alert">
               <i class="fa fa-info-circle" aria-hidden="true"></i>
               <span class="sr-only">Error:</span>
               A continuacion se muestra los datos del usuario.
            </div>
            <div class="row">
              <dl class=" dl-horizontal">
                  <dt>Nombre: </dt>  <dd> {{ Auth::user()->name }} </dd>            
                  <dt>Password: </dt> <dd>************</dd>            
                  <dt>E-mail: </dt> <dd> {{ Auth::user()->email }} </dd>            
                  <dt>Área y/o dirección: </dt> <dd> {{ Auth::user()->direccion }} </dd>   
              </dl>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default"  data-dismiss="modal">Cerrar</button> 
               <div id="controlEdit"></div>
               <div id="controlDelete"></div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- -->
<script type="text/javascript">
  $( "#btnUserInfo" ).on( "click", function() {
     $("#modalUserInfo").modal();  
  });
</script>