@extends('plantillaTareas')
@section('contenido')
    <h1 style="text-align: center;">Completar tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            ID Tarea: <br>
            <input readonly type="text" class="form-control" name="id" value="{{$tarea['tarea_id'] ?? ''}}" readonly><br>

            DNI: <br>
            <input readonly type="text" class="form-control" name="dni" value="{{$tarea['dni'] ?? ''}}"><br>

            Nombre: <br>
            <input readonly type="text" class="form-control" name="nombre" value="{{$tarea['nombre'] ?? ''}}"><br>

            Apellido:<br>
            <input readonly type="text" class="form-control" name="apellido" value="{{$tarea['apellido'] ?? ''}}"><br>

            Telefono: <br>
            <input readonly type="text" class="form-control" name="telefono" value="{{$tarea['telefono'] ?? ''}}"><br>

            Correo Electronico: <br>
            <input readonly type="text" class="form-control" name="correo" value="{{$tarea['correo'] ?? ''}}"><br>

            Direccion: <br>
            <input readonly type="text" class="form-control" name="direccion" value="{{$tarea['direccion'] ?? ''}}"><br>

            Poblacion: <br>
            <input readonly type="text" class="form-control" name="poblacion" value="{{$tarea['poblacion'] ?? ''}}"><br>

            Codigo Postal: <br>
            <input readonly type="text" class="form-control" name="codigop" value="{{$tarea['codigo_postal'] ?? ''}}"><br>

            Provincia: <br>
            <select disabled class="form-select" name="provincia">
                <option selected>{{$tarea['provincia']}}</option>
                @foreach ($provincias as $provincia)
                <option>{{$provincia['nombre']}}</option>
                @endforeach
            </select><br>

            Estado Tarea: <br>
            <input class="form-check-input" type="radio" name="estado" value="B"> B |
            <input class="form-check-input" type="radio" name="estado" value="P"> P |
            <input class="form-check-input" type="radio" name="estado" value="R"> R |
            <input class="form-check-input" type="radio" name="estado" value="C"> C
            <br><br>
            Fecha creacion: <br>
            <input readonly type="date" class="form-control" name="fechac" value="{{$tarea['fecha_creacion'] ?? ''}}" readonly><br>

            Operario encargado: <br>
            <select disabled class="form-select" name="operario">
                <option selected>{{$tarea['operario_encargado']}}</option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            Fecha Realizacion: <br>
            <input readonly type="date" class="form-control" name="fecha"  value="{{$tarea['fecha_realizacion'] ?? ''}}"><br>

            Descripcion: <br>
            <textarea readonly class="form-control" name="descripcion">{{$tarea['descripcion']}}</textarea><br>

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