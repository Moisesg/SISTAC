<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="{!! URL::asset('images/cpsLogo.png') !!}">      
      <title>TAC | Iniciar sesión </title>
      {!!Html::style('vendors/bootstrap/css/bootstrap.min.css') !!}
      {!!Html::style('vendors/font-awesome/css/font-awesome.min.css') !!}
      {!!Html::style('vendors/animate/animate.min.css') !!}
      {!!Html::style('dist/css/custom.css') !!}
      <style type="text/css">
         /** login other features **/
         .page-header { padding-bottom: 9px; margin: 20px; border-bottom: 1px solid #eee; }
         .container { width: auto; max-width: 780px; padding: 0 15px; }
         .container .text-muted { margin: 10px 0;  }
         .logo{margin: 25px auto;}
         footer{margin: 25% 0 0 0; background-color: transparent;}
      </style>
   </head>
   <body class="login">
      <div class="container">
         <div class="row">
            <div class="page-header">
               {!! Html::image('images/letterhead.png','EncabezadoSegob', array('width'=>'45%','class'=>'img-responsive center-block')) !!} 
            </div>
            <div class="col-lg-12 sipat-login-message" align="center">
               <h1>SISTEMA DE GESTIÓN INSTITUCIONAL</h1>
            </div>
         </div>
         <div class="row">
            @include('alerts.errors')    
            @include('alerts.request')     
            @include('alerts.session')        
         </div>
         <div class="row">
            <div class="col-md-6">
               <div class="login_wrapper">            
                  @yield('section')
               </div>
            </div>
            <div class="col-md-6">
               {!! Html::image('images/cpsLogo.png','CPS16-Logo', array('class'=>'img-responsive logo')) !!} 
            </div>
         </div>
      </div>
   </body>
</html>
<!-- scripts -->
{!!Html::script('vendors/jquery/jquery-1.12.0.min.js')!!}
{!!Html::script('vendors/bootstrap/js/bootstrap.min.js')!!}
<script type="text/javascript">
   setTimeout(function(){$('.alert').delay(1000).hide(250)},5000);
</script>