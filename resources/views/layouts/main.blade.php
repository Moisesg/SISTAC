<!DOCTYPE html>
  <html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{!! URL::asset('images/taskLogo.png') !!}">      
    <title> @yield('sysName') | @yield('page_heading')</title>
      {!!Html::style('vendors/bootstrap/css/bootstrap.min.css') !!}
      {!!Html::style('vendors/datatables/media/css/dataTables.bootstrap.min.css')!!}   
      {!!Html::style('vendors/datatables/extensions/Buttons/css/buttons.bootstrap.min.css')!!}   
      {!!Html::style('vendors/font-awesome/css/font-awesome.min.css') !!}
      {!!Html::style('dist/css/mainStyle.css') !!}
  </head>
  <body>

    <div class="container">
      <!-- Static navbar -->
      <!-- <nav class="navbar navbar-default"> -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0);"> <i class="fa fa-calendar fa-fw"></i> @yield('sysName')</a> 
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" >Menu <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{!! route('dashboard.index') !!}">Ver tareas</a></li>
                  <li><a href="{!! route('activity.create') !!}">Agregar/asignar tareas </a></li>
                </ul>
              </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Administrator  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="javascript:void(0);" id="btnUserInfo"><i class="fa fa-user fa-fw"></i> Perfil</a></li>
                        <li><a href="{!! URL::to('users') !!}"><i class="fa fa-gear fa-fw"></i> Configuraciòn</a></li>
                        <li class="divider"></li>
                        <li><a href="{!! URL::to('/logout') !!}"><i class="fa fa-sign-out fa-fw"></i> Salir</a></li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <div class="ccontainer">
        <div class="headerSistem">
          <div class="well well-sm">
            <span class="pull-right">
                {{ $dateMain }}
             </span>
            Bienvenido,  <b>Administrator</b>
           </div>         
            @yield('section')
        </div>
      </div>

    </div> <!-- /container -->

   <footer class="footer">
      <div class="container">
          <p class="text-muted pull-right">© 2018 | Powered by <a href="http://ceprossa.com" target="_blank" >CEPROSSA</a></p>
      </div>
    </footer>
  </body>
   <script type="text/javascript">
   
   </script>
</html>