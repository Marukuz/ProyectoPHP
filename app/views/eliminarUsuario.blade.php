@extends('plantillaUsuarios')
@section('contenido')
  <div> 
    <table class="table">
      <thead class="table-dark">
      <h1 style="text-align: center;">Quiere eliminar al siguiente Usuario?</h1>
      <br>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Rol</th>
        </tr>
      </thead>
        <tr>
          <!-- Generacion de la tabla -->
          <td>{{ $usuario['usuario_id'] }}</td>
          <td>{{ $usuario['nombre'] }}</td>
          <td>{{ $usuario['contraseña'] }}</td>
          <td>{{ $usuario['rol'] }}</td>
        </tr>
    </table>
    <div style="text-align: center;">
        <a href="index.php?controller=usuariosController&action=Usuarios::eliminarUsuario&id={{$usuario['usuario_id']}}"><button class="btn btn-danger">Si</button></a>
        <a href="index.php?controller=usuariosController&action=Usuarios::verUsuarios"><button class="btn btn-success">No</button></a>
    </div>
  </div>
@endsection