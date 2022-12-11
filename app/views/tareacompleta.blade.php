@extends('plantillaTareas')
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
        <tr>
          <td>{{ $mostrarTareaCompleta['tarea_id'] }}</td>
          <td>{{ $mostrarTareaCompleta['dni'] }}</td>
          <td>{{ $mostrarTareaCompleta['nombre'] }}</td>
          <td>{{ $mostrarTareaCompleta['apellido'] }}</td>
          <td>{{ $mostrarTareaCompleta['telefono'] }}</td>
          <td>{{ $mostrarTareaCompleta['correo'] }}</td>
          <td>{{ $mostrarTareaCompleta['direccion'] }}</td>
          <td>{{ $mostrarTareaCompleta['poblacion'] }}</td>
          <td>{{ $mostrarTareaCompleta['codigo_postal'] }}</td>
          <td>{{ $mostrarTareaCompleta['provincia'] }}</td>
          <td>{{ $mostrarTareaCompleta['estado_tarea'] }}</td>
          <td>{{ $mostrarTareaCompleta['fecha_creacion'] }}</td>
          <td>{{ $mostrarTareaCompleta['operario_encargado'] }}</td>
          <td>{{ $mostrarTareaCompleta['fecha_realizacion'] }}</td>
          <td>{{ $mostrarTareaCompleta['descripcion'] }}</td>
          <td>{{ $mostrarTareaCompleta['anotacion_inicio'] }}</td>
          <td>{{ $mostrarTareaCompleta['anotacion_final'] }}</td>
        </tr>
    </tbody>
  </table>
</div>
</body>
</html>
@endsection