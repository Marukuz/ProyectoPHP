@extends('plantillaTareas')
@section('contenido')
  <div> 
    <table class="table">
      <thead>
      <h1 style="text-align: center;">Quiere eliminar la siguiente tarea?</h1>
      <br>
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
        <tr>
          <td>{{ $tarea['tarea_id'] }}</td>
          <td>{{ $tarea['nombre'] }}</td>
          <td>{{ $tarea['apellido'] }}</td>
          <td>{{ $tarea['telefono'] }}</td>
          <td>{{ $tarea['poblacion'] }}</td>
          <td>{{ $tarea['provincia'] }}</td>
          <td>{{ $tarea['estado_tarea'] }}</td>
          <td>{{ $tarea['descripcion'] }}</td>
          <td>{{ $tarea['anotacion_inicio'] }}</td>
          <td>{{ $tarea['fecha_realizacion'] }}</td>
        </tr>
    </table>
    <div style="text-align: center;">
        <a href="index.php?controller=tareasController&action=Tareas::eliminarTarea&id={{$tarea['tarea_id']}}"><button class="btn btn-danger">Si</button></a>
        <a href="index.php?controller=tareasController&action=Tareas::mostrarTareas"><button class="btn btn-success">No</button></a>
    </div>
  </div>
@endsection