@extends('layouts.mainAuth')
@section('sysName','SIGES')
@section('page_heading','Agregar usuario')
@section('section')

  @if (Auth::user()->tipo == "ADMINISTRADOR" )
     @include('users.contentAdd.form')                   
   @else
     @include('alerts.noPrivileges')   
  @endif

<!-- scripts -->
{!!Html::script('vendors/jquery/jquery-1.12.0.min.js') !!}   
{!!Html::script('vendors/bootstrap/js/bootstrap.min.js')!!}

<script type="text/javascript">
   getUserLevels();
   getDirections();
   
   var password, password2;
   password = document.getElementById('password');
   password2 = document.getElementById('repeatPassword');
   password.onchange = password2.onkeyup = passwordMatch;
   
   function passwordMatch() {
       if(password.value !== password2.value)
           password2.setCustomValidity('Las contraseñas no coinciden.');
       else
           password2.setCustomValidity('');
   }
   
   function getUserLevels(){
     $.getJSON('../dist/config/userLevels.json', {param1: 'value1'}, function(jsonUsers, textStatusUsers) {
        if(textStatusUsers=="success"){
            users = jsonUsers;
         }
           var obj = users;
           var selectTipoUsuario = $("#tipo"); 
           $.each( obj, function( key, val ) {   
           selectTipoUsuario.append("<option value='"+val+"'>"+val+"</option>");            
          });          
       }); 
   }
   
   function getDirections(){
     $.getJSON('../dist/config/directions.json', {param1: 'value1'}, function(jsonDirections, textStatusDirections) {
        if(textStatusDirections=="success"){
            directions = jsonDirections;
         }
           var obj = directions;
           var selectDirections = $("#direccion"); 
           $.each( obj, function( key, val ) {   
           selectDirections.append("<option value='"+val+"'>"+val+"</option>");            
          });          
       }); 
   }
   
   $('[data-toggle="popover"]').popover({ 
       title : false,
       placement : 'right',
       trigger : 'hover',
       html : true
   });
   
   $('.form-control').on('input', function(evt) { 
       $(this).not('input[name=email],input[name=password],input[name=repeatPassword]').val(function (_, val) {
        return val.toUpperCase();
       });
    });
   
   $("#blockPassInput").change(function (e) {
     e.preventDefault();
     if ($('#blockPassInput').is(':checked') == true){
          $("#password").attr('readonly', true).attr('required', false);  
          $("#repeatPassword").attr('readonly', true).attr('required', false).val('');  
          $("#password").val('a12345');
          $("#primeraVez").val('1');
     } else {
          $("#password").attr('readonly', false).attr('required',true); 
          $("#repeatPassword").attr('readonly', false).attr('required',true); 
          $("#password").val('');          
          $("#primeraVez").val('0');
   
     }
   });
   
   
   $('#tipo').change(function (e) {
     e.preventDefault();
        var option = $("#tipo option:selected").val();
       // console.log(option);   
        if (option =="ADMINISTRADOR") {
           $('#direccion option').remove();      
           $("select[name=direccion]").attr("readonly", true).attr('required',false ); 
       //    $("#hiddenDireccion").val("All");
        }else{       
           $('#direccion option').remove();    
           getDirections();
           $("select[name=direccion]").attr("readonly", false).attr('required',true ); 
        }
   });
   /*
   $("#direccion").click(function (e) {
     e.preventDefault();
     $("#hiddenDireccion").val($(this).val());
   });
   */
    
</script>
@stop