@extends('layouts.mainLogin')
@section('sysName','SIGES')
@section('page_heading','Login')
@section('section')       
<div class="animate form login_form">
   <section class="login_content">
      {!! Form::open(['route' => 'login.store', 'class' => 'form','method'=>'POST']) !!}
      <h1>Iniciar sesión</h1>
      <div>
         {!!Form::email("email",null,["id"=>"email","class"=>"form-control","placeholder"=>"Introduzca email","required"=>"required"])!!}                        
      </div>
      <div>
         {!!Form::password("password", ["id"=>"password","class"=>"form-control","placeholder"=>"Introduzca contraseña","required"=>"required"] )!!}                       
      </div>
      <div>
         {!!Form::submit("Log in",["class"=>"btn btn-default submit"])!!}   
         <!--   <a class="reset_pass" href="#">¿Olvidaste tu contraseña?</a>-->
      </div>
      <div class="clearfix"></div>
      <div class="separator">
         <p class="change_link">
            <b>¿No tiene cuenta? </b> <span>Debe solicitarla con el área de <b>Soporte Técnico</b> para que le otorguen la misma.</span>
            <!--  <a href="#signup" class="to_register"> Crea una ahora </a>-->
         </p>
         <div class="clearfix"></div>
         <br />
         <div>
            <p class="text-muted">© 2017 - CNS | SEGOB </p>
         </div>
      </div>
      {!!Form::close()!!}   
   </section>
</div>
@stop