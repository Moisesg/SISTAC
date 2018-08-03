<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="icon" type="image/png" href="{!! URL::asset('images/cpsLogo.png') !!}">      
      <title> | @yield('page_heading')</title>
      {!!Html::style('ve2ndors/bootstrap/css/bootstrap.min.css') !!}
      {!!Html::style('vendors/datatables/media/css/dataTables.bootstrap.css')!!}   
      {!!Html::style('vendors/datatables/extensions/Buttons/css/buttons.bootstrap.min.css')!!}     
      {!!Html::style('vendors/font-awesome/css/font-awesome.min.css') !!}    
      <style type="text/css">
      </style>
   </head>
   <body>
      <div id="wrapper">
         <!-- Navigation -->
         <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button> 
               <a class="site_title" href="javascript:void(0)" style="width: 250px; background-color: #2a3f54;">
               {!! Html::image('images/cpsLogo.png', 'logoCPS', array('width' => '19%')) !!} @yield('sysName')
               </a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
               <!-- /.dropdown -->
               <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                  <?php $userName = explode(' ', Auth::user()->name); $name = ucwords(strtolower($userName[0])); ?> 
                  <i class="fa fa-user fa-fw"></i> {!! $name !!} <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-user">
                     <li><a href="javascript:void(0);" id="btnUserInfo"><i class="fa fa-user fa-fw"></i> Perfil</a>
                     </li>
                     @if(Auth::user()->tipo == "ADMINISTRADOR")
                        <li><a href="{!! URL::to('users') !!}"><i class="fa fa-gear fa-fw"></i> Configuraciòn</a>
                        </li>
                     @endif
                     <li class="divider"></li>
                     <li><a href="{!! URL::to('/logout') !!}"><i class="fa fa-sign-out fa-fw"></i> Salir</a>
                     </li>
                  </ul>
                  <!-- /.dropdown-user -->
               </li>
               <!-- /.dropdown --> 
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
               <div class="sidebar-nav navbar-collapse">
                  <ul class="nav" id="side-menu">
                     <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                           <div class="profile">
                              <div class="profile_pic">
                                 {!! Html::image('images/user.png', 'imagaeUser', array('class' => 'img-circle profile_img')) !!} 
                              </div>
                              <div class="profile_info">
                                 <span>Bienvenido,</span>
                                 <?php  $name = ucwords(strtolower(Auth::user()->name)); ?>
                                 <h2>{!! $name !!}</h2>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <a href="javascript:void(0);" class="active"><i class="fa fa-home fa-fw"></i> Principal</a>
                     </li>
                     <li>
                        <a href="{!! route('correspondence.index') !!}"><i class="fa fa-envelope fa-fw"></i> Correspondencia</a>
                     </li>
                     <li>
                        <a href="{!! route('population.index') !!}" ><i class="fa fa-cubes fa-fw"></i> Poblacion</a>        
                     </li>
                     <li>
                        <a href="{!! route('visits.index') !!}" ><i class="fa fa-handshake-o" aria-hidden="true"></i> Visitas</a>        
                     </li>
                  </ul>
               </div>
               <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
         </nav>
         <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-12">
                  <h1 class="page-header">@yield('page_heading')</h1>
               </div>
            </div>
            <div class="row">  
               @yield('section')
            </div>
            <!-- /#page-wrapper -->
            <hr>
            <footer>
               <p class="text-info pull-right">Powered by <a href="http://ceprossa.com" target="_blank" >CEPROSSA</a> </p>
               <p class="text-muted">© 2017 - CNS | SEGOB</p>
               <div class="clearfix"></div>
            </footer>
         </div>
      </div>
      <!-- /#wrapper -->
       @include('users.message.info')          
   </body>
</html>