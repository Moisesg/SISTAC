<div class="row" role="users">
   <div class="col-lg-12">
      <div class="panel panel-default" style="background-color: transparent;">
         <div class="panel-heading">Agregar nuevo registro de usuario</div>
         <div class="panel-body" >
            <div class="alert alert-info" role="alert" style="margin-top:10px;">
               <i class="fa fa-info-circle fa-fw"></i>
               <span class="sr-only">Error:</span>
               Ingrese la información solicitada en el formulario, al finalizar de clic en el boton <b>Agregar usuario </b>
            </div>
            <div align="right"> <span  class="label label-danger">** Todos los campos son requeridos</span> </div>
            <span class="clearfix"> &nbsp;</span>   
            @include('alerts.request')
            {!! Form::open(['route'=>'users.store','method'=>'POST','class' => 'form-horizontal']) !!}
            <div class="col-lg-12">
               <div class="form-group">
                  <div class="col-lg-6">
                     {!!Form::label("name","Nombre completo",["class"=>"col-sm-4 control-label"] )!!}
                     <div class="col-lg-8">
                        {!!Form::text("name",null,["class"=>"form-control","placeholder"=>"Introduzca nombre completo","required"=>"required"])!!}
                     </div>
                  </div>
                  <div class="col-lg-6">
                     {!!Form::label("email","Email",["class"=>"col-sm-4 control-label"] )!!}
                     <div class="col-lg-8">
                        {!!Form::email("email",null,["class"=>"form-control","placeholder"=>"Introduzca email","required"=>"required"])!!}
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                  <div class="col-lg-6">
                     {!!Form::label("password","Contraseña",["class"=>"col-sm-4 control-label"]) !!}
                     <div class="col-lg-6">
                        <div class="input-group" >
                           <div class="input-group-addon">
                              {!! Form::checkbox('blockPassInput',"",null, ["id"=>"blockPassInput"]) !!} 
                           </div>
                           {!!Form::password("password", ["class"=>"form-control","id"=>"password","placeholder"=>"Indique contraseña","required"=>"required","pattern"=>"^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$"] )!!} 
                           <span class="input-group-btn">
                           <button type="button" id="btnPassword" class="btn btn-default" data-container="body" data-toggle="popover" data-content="Habilite el checkbox si dejará por defecto la contraseña <b>a12345</b> (el usuario tendra la oportunidad de cambiar la contraseña al ingresar por primera vez a la aplicación), de lo contrario deshabilite el campo si cambiará la contraseña con un minimo de 6 carcateres (letras y numeros)">
                           <i class="fa fa-question-circle fa-fw text-info" ></i>
                           </button>
                           </span> 
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     {!!Form::label("repeatPassword","Repetir contraseña",["class"=>"col-sm-4 control-label"] )!!}                  
                     <div class="col-lg-8">
                        {!!Form::password("repeatPassword", ["class"=>"form-control","id"=>"repeatPassword","placeholder"=>"Indique nuevamente la contraseña","required"=>"required"] )!!} 
                        {!!Form::hidden("primeraVez",0,["id"=>"primeraVez"])!!}
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="form-group">
                  <div class="col-lg-6">
                     {!!Form::label("tipo","Tipo usuario",["class"=>"col-sm-4 control-label"] )!!}                                     
                     <div class="col-lg-8">
                        {!! Form::select('tipo', [], null, array('id'=>'tipo','class' => 'form-control', "size"=>"6","required"=>"required" )) !!}
                     </div>
                  </div>
                  <div class="col-lg-6">
                     {!!Form::label("direccion","Direccion",["class"=>"col-sm-4 control-label"] )!!}                                                   
                     <div class="col-lg-8">
                        {!! Form::select('direccion', [],null, array('id'=>'direccion','class' => 'form-control', "size"=>"6","required"=>"required" )) !!}
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12 text-right">
               <a href="{!! URL::to ('users/') !!}"  class="btn btn-default"> Cancelar</a>
               {!!Form::submit("Agregar Usuario",["class"=>"btn btn-primary "])!!}        
            </div>
            {!!Form::close()!!}   
         </div>
      </div>
   </div>
</div>