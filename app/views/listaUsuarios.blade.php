@extends('plantillaUsuarios')
@section('contenido')
  <div> 
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Rol</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <!-- Generacion de la tabla -->
        @foreach($usuarios as $usuario) 
          <tr>
            <td>{{ $usuario['usuario_id'] }}</td>
            <td>{{ $usuario['nombre'] }}</td>
            <td>{{ $usuario['contraseña'] }}</td>
            <td>{{ $usuario['rol'] }}</td>
            <td><a href="index.php?controller=usuariosController&action=Usuarios::eliminarUsuarioVista&id={{$usuario['usuario_id']}}"><button class="btn btn-danger">Eliminar</button></a>
            <a href="index.php?controller=usuariosController&action=Usuarios::modificarUsuario&id={{$usuario['usuario_id']}}"><button class="btn btn-warning">Modificar</button></a></td>
          </tr>
          @endforeach
      </tbody>
    </table>
  </div>
@endsection