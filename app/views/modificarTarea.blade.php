@extends('plantilla')
@section('contenido')
    <h1 style="text-align: center;">Modificar tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            ID Tarea: <br>
            <input type="text" class="form-control" name="id" value="{{$tarea['tarea_id'] ?? ''}}" readonly><br>

            DNI: {!!$error->ErrorFormateado("dni")!!} <br>
            <input type="text" class="form-control" name="dni" value="{{$tarea['dni'] ?? ''}}"><br>

            Nombre:  <br>
            <input type="text" class="form-control" name="nombre" value="{{$tarea['nombre'] ?? ''}}"><br>

            Apellido: <br>
            <input type="text" class="form-control" name="apellido" value="{{$tarea['apellido'] ?? ''}}"><br>

            Telefono: <br>
            <input type="text" class="form-control" name="telefono" value="{{$tarea['telefono'] ?? ''}}"><br>

            Correo Electronico: <br>
            <input type="text" class="form-control" name="correo" value="{{$tarea['correo'] ?? ''}}"><br>

            Direccion: <br>
            <input type="text" class="form-control" name="direccion" value="{{$tarea['direccion'] ?? ''}}"><br>

            Poblacion: <br>
            <input type="text" class="form-control" name="poblacion" value="{{$tarea['poblacion'] ?? ''}}"><br>

            Codigo Postal: <br>
            <input type="text" class="form-control" name="codigop" value="{{$tarea['codigo_postal'] ?? ''}}"><br>

            Provincia: <br>
            <select class="form-select" name="provincia">
                <option selected disabled>{{$tarea['provincia']}}</option>
                @foreach ($provincias as $provincia)
                <option>{{$provincia['nombre']}}</option>
                @endforeach
            </select><br>

            Estado Tarea: <br>
            <select class="form-select" name="estado">
            <option selected disabled>{{$tarea['estado_tarea']}}</option>
                <option>B</option>
                <option>P</option>
                <option>R</option>
                <option>C</option>
            </select><br>

            Fecha creacion: <br>
            <input type="date" class="form-control" name="fechac" value="{{$tarea['fecha_creacion'] ?? ''}}" readonly><br>

            Operario encargado: <br>
            <select class="form-select" name="operario">
                <option selected>{{$tarea['operario_encargado']}}</option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            Fecha Realizacion: <br>
            <input type="date" class="form-control" name="fecha"  value="{{$tarea['fecha_realizacion'] ?? ''}}"><br>

            Descripcion: <br>
            <textarea class="form-control" name="descripcion">{{$tarea['descripcion']}}</textarea><br>

            Anotacion inicial: <br>
            <textarea class="form-control" name="anotacioni" >{{$tarea['anotacion_inicio'] }}</textarea><br>

            Anotacion final: <br>
            <textarea class="form-control" name="anotacionf" >{{$tarea['anotacion_final']}}</textarea>

            <input type="submit" class="btn btn-primary" value="Modificar">
        </form>
    </div>
</body>
</html>
@endsection