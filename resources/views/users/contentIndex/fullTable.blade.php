<div class="row" role="users">
   <div class="col-lg-12">
      <div class="col-lg-10">
         <div class="alert alert-info" role="alert">
            <span class="glyphicon lyphicon glyphicon-info-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            A continuación se presenta la información de los usuarios que puedne acceder al sistema. Para editar, basta con dar clic en <i class="fa fa-pencil-square-o" aria-hidden="true"></i>, ó en su defecto de clic en <i class="fa fa-plus-circle" aria-hidden="true"></i>, para agregar un usuarioa al sistema.
         </div>
      </div> 
      <div class="col-lg-2">
         <div class="pull-right">
            <a href="{!! URL::to ('users/create') !!}"  title="Agregar Usuario">
            <span class="glyphicon lyphicon glyphicon-plus-sign" style="font-size: 52px; color: #1abb9c;" aria-hidden="true" id="btnAddNewUser"></span>
            </a>
         </div>
      </div>
   </div>
   <!-- <div class="col-lg-12"></div> -->
   <div class="col-lg-12">
      <div class="panel panel-default" style="background-color: transparent;">
         <div class="panel-heading">
            Registros
         </div>
         <!-- /.panel-heading -->
         <div class="panel-body" >
            <div class="row">
               <div class="col-lg-5">
                  <div class="form-group">
                     <label class="sr-only" for="txtSearch"></label>
                     <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-search fa-fw"></i></div>
                        <input type="text" class="form-control col-lg-6" name="txtSearchUsers" id="txtSearchUsers" placeholder="Iniciar búsqueda" autofocus>
                     </div>
                  </div>
               </div>
            </div>
            <div class="table-responsive">
               <table width="100%" class="table table-hover table-condensed" id="usersTable"  >
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Nombre completo </th>
                        <th>Email </th>
                        <th>Tipo </th>
                        <th>Dirección </th>
                        <th width="1%"></th>
                        <th width="1%"></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($users as $user)     
                     <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->tipo }}</td>
                        <td>{{ $user->direccion }}</td>
                        <td> <a href="{{ route('users.edit',$user->id) }}" class="btn btn-default" title="Editar Usuario" ><i class="fa fa-pencil-square-o textRow-warning" ></i></a></td>
                        <td>{!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id], 'onsubmit' => 'return ConfirmDelete("'.$user->name.'")' ]) !!} <button type="submit" id="btnDeletePerson" class="btn btn-default" title="Eliminar Usuario" > <i class="fa fa-trash text-danger"></i> </button>  {!! Form::close() !!}</td>
                     </tr>
                     @endforeach                            
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>