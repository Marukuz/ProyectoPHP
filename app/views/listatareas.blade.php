@extends('plantilla')
@section('contenido')
  <div> 
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Telefono</th>
          <th scope="col">Poblacion</th>
          <th scope="col">Provincia</th>
          <th scope="col">Estado</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Anotacion Inicial</th>
          <th scope="col">Fecha de realizacion</th>
        </tr>
      </thead>
          @foreach($mostrarTareas as $tareas) 
        <tr>
          <td>{{ $tareas['tarea_id'] }}</td>
          <td>{{ $tareas['nombre'] }}</td>
          <td>{{ $tareas['apellido'] }}</td>
          <td>{{ $tareas['telefono'] }}</td>
          <td>{{ $tareas['poblacion'] }}</td>
          <td>{{ $tareas['provincia'] }}</td>
          <td>{{ $tareas['estado_tarea'] }}</td>
          <td>{{ $tareas['descripcion'] }}</td>
          <td>{{ $tareas['anotacion_inicio'] }}</td>
          <td>{{ $tareas['fecha_realizacion'] }}</td>
        </tr>
        @endforeach
      <tbody>
      <tr>
      </tbody>
    </table>
  </div>
@endsection