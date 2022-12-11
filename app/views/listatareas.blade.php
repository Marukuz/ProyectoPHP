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
          <th scope="col">Operario</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Anotacion Inicial</th>
          <th scope="col">Fecha de realizacion</th>
          <th scope="col"></th>

        </tr>
      </thead>
      <tbody>
          @foreach($mostrarTareas as $tareas) 
        <tr>
          <td>{{ $tareas['tarea_id'] }}</td>
          <td>{{ $tareas['nombre'] }}</td>
          <td>{{ $tareas['apellido'] }}</td>
          <td>{{ $tareas['telefono'] }}</td>
          <td>{{ $tareas['poblacion'] }}</td>
          <td>{{ $tareas['provincia'] }}</td>
          <td>{{ $tareas['estado_tarea'] }}</td>
          <td>{{ $tareas['operario_encargado'] }}</td>
          <td>{{ $tareas['descripcion'] }}</td>
          <td>{{ $tareas['anotacion_inicio'] }}</td>
          <td>{{ $tareas['fecha_realizacion'] }}</td>
          <td><a href="index.php?controller=tareasController&action=mostrarTareaCompleta&id={{$tareas['tarea_id']}}"><button>Ver</button></a>
          <a href="index.php?controller=tareasController&action=modificarTarea&id={{$tareas['tarea_id']}}"><button>Modificar</button></a>
          <a href="index.php?controller=tareasController&action=eliminarTareaVista&id={{$tareas['tarea_id']}}"><button>Eliminar</button></a>
          <a href="index.php?controller=tareasController&action=completarTarea&id={{$tareas['tarea_id']}}"><button>Completar</button></a></td>
          
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection