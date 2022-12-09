@extends('plantilla')
@section('contenido')

<div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">DNI</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Direccion</th>
        <th scope="col">Poblacion</th>
        <th scope="col">Codigo Postal</th>
        <th scope="col">Provincia</th>
        <th scope="col">Estado</th>
        <th scope="col">Fecha de creacion</th>
        <th scope="col">Operario</th>
        <th scope="col">Fecha de realizacion</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Anotacion inicial</th>
        <th scope="col">Anotacion final</th>
      </tr>
    </thead>
    <tbody>
    @foreach($mostrarTareaCompleta as $tareas) 
        <tr>
          <td>{{ $tareas['tarea_id'] }}</td>
          <td>{{ $tareas['dni'] }}</td>
          <td>{{ $tareas['nombre'] }}</td>
          <td>{{ $tareas['apellido'] }}</td>
          <td>{{ $tareas['telefono'] }}</td>
          <td>{{ $tareas['correo'] }}</td>
          <td>{{ $tareas['direccion'] }}</td>
          <td>{{ $tareas['poblacion'] }}</td>
          <td>{{ $tareas['codigo_postal'] }}</td>
          <td>{{ $tareas['provincia'] }}</td>
          <td>{{ $tareas['estado_tarea'] }}</td>
          <td>{{ $tareas['fecha_creacion'] }}</td>
          <td>{{ $tareas['operario_encargado'] }}</td>
          <td>{{ $tareas['fecha_realizacion'] }}</td>
          <td>{{ $tareas['descripcion'] }}</td>
          <td>{{ $tareas['anotacion_inicio'] }}</td>
          <td>{{ $tareas['anotacion_final'] }}</td>
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
</body>
</html>
@endsection