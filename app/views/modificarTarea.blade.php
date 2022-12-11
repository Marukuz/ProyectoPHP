@extends('plantillaTareas')
@section('contenido')
    <h1 style="text-align: center;">Modificar tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            ID Tarea: <br>
            <input type="text" class="form-control" name="id" value="{{$tarea['tarea_id'] ?? ''}}" readonly><br>

            DNI: {!!$error->ErrorFormateado("dni")!!} <br>
            <input type="text" class="form-control" name="dni" value="{{$tarea['dni'] ?? ''}}"><br>

            Nombre:  {!!$error->ErrorFormateado("nombre")!!}<br>
            <input type="text" class="form-control" name="nombre" value="{{$tarea['nombre'] ?? ''}}"><br>

            Apellido: {!!$error->ErrorFormateado("apellido")!!}<br>
            <input type="text" class="form-control" name="apellido" value="{{$tarea['apellido'] ?? ''}}"><br>

            Telefono: {!!$error->ErrorFormateado("telefono")!!}<br>
            <input type="text" class="form-control" name="telefono" value="{{$tarea['telefono'] ?? ''}}"><br>

            Correo Electronico: {!!$error->ErrorFormateado("correo")!!}<br>
            <input type="text" class="form-control" name="correo" value="{{$tarea['correo'] ?? ''}}"><br>

            Direccion: {!!$error->ErrorFormateado("direccion")!!}<br>
            <input type="text" class="form-control" name="direccion" value="{{$tarea['direccion'] ?? ''}}"><br>

            Poblacion: {!!$error->ErrorFormateado("poblacion")!!}<br>
            <input type="text" class="form-control" name="poblacion" value="{{$tarea['poblacion'] ?? ''}}"><br>

            Codigo Postal: {!!$error->ErrorFormateado("codigop")!!}<br>
            <input type="text" class="form-control" name="codigop" value="{{$tarea['codigo_postal'] ?? ''}}"><br>

            Provincia: {!!$error->ErrorFormateado("provincia")!!} <br>
            <select class="form-select" name="provincia">
                <option selected>{{$tarea['provincia']}}</option>
                @foreach ($provincias as $provincia)
                <option>{{$provincia['nombre']}}</option>
                @endforeach
            </select><br>

            Estado Tarea: {!!$error->ErrorFormateado("estado")!!}<br>
            <select class="form-select" name="estado">
                <option selected>{{$tarea['estado_tarea']}}</option>
                <option>B</option>
                <option>P</option>
                <option>R</option>
                <option>C</option>
            </select><br>

            Fecha creacion: <br>
            <input type="date" class="form-control" name="fechac" value="{{$tarea['fecha_creacion'] ?? ''}}" readonly><br>

            Operario encargado: {!!$error->ErrorFormateado("operario")!!} <br>
            <select class="form-select" name="operario">
                <option selected>{{$tarea['operario_encargado']}}</option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            Fecha Realizacion: {!!$error->ErrorFormateado("fecha")!!}<br>
            <input type="date" class="form-control" name="fecha"  value="{{$tarea['fecha_realizacion'] ?? ''}}"><br>

            Descripcion: {!!$error->ErrorFormateado("descripcion")!!}<br>
            <textarea class="form-control" name="descripcion">{{$tarea['descripcion']}}</textarea><br>

            Anotacion inicial: {!!$error->ErrorFormateado("anotacioni")!!}<br>
            <textarea class="form-control" name="anotacioni" >{{$tarea['anotacion_inicio'] }}</textarea><br>

            Anotacion final: <br>
            <textarea class="form-control" name="anotacionf" >{{$tarea['anotacion_final']}}</textarea>

            <input type="submit" class="btn btn-primary" value="Modificar">
        </form>
    </div>
</body>
</html>
@endsection