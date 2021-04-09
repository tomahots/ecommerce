@extends('layouts.default')
@section('content')

 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="formempleados.php">Agregar Empleados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="formempresa.php">Agregar Empresa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
{{--     <div class='container'>
        <form action='index.php' method='POST'>
            <legend>Seleccion la empresa</legend>
            <div class="mb-3">
            <select class="form-select" name='prueba' aria-label="Default select example">
            <option selected>Seleccione empresa</option>
                    
                        <option></option>
                     
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
 --}}
    <div class='container'>
        <h4>Lista de usuarios</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <td>username</td>
                            <td>nombre</td>
                            <td>correo</td>
                            <td>telefono</td>
                            <td>direccion</td>
                            <td>contraseña</td>
                            <td>rol_id</td>
                        </tr>
                    </thead>

                    <tbody>
                      @foreach ($usuarios as $usuario )
                                <tr>
                                    <td>{{$usuario->username}}</td>
                                    <td>{{$usuario->nombre}}</td>
                                    <td>{{$usuario->correo}}</td>
                                    <td>{{$usuario->telefono}}</td>
                                    <td>{{$usuario->direccion}}</td>
                                    <td>{{$usuario->contraseña}}</td>
                                    <td>{{$usuario->rol_id}}</td>
                                    <td><a href="" class="btn btn-info">Editar</a></td>
                                    <td><a href="" class="btn btn-danger">Eliminar</a></td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
@stop