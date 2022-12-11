@extends('plantilla')
@section('contenido')   
    <br>
    <h1 style="text-align: center;">Añadir tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            DNI: {!!$error->ErrorFormateado("dni")!!} <br> 
            <input type="text" class="form-control" name="dni" value="{{$tareas[0] ?? ''}}"><br>

            Nombre: {!!$error->ErrorFormateado("nombre")!!}
            <br><input type="text" class="form-control" name="nombre" value="{{$tareas[1] ?? ''}}" ><br>

            Apellido: {!!$error->ErrorFormateado("apellido")!!}<br>
            <input type="text" class="form-control" name="apellido" value="{{$tareas[2] ?? ''}}"><br>

            Correo Electronico: {!!$error->ErrorFormateado("correo")!!}<br>
            <input type="text" class="form-control" name="correo" value="{{$tareas[3] ?? ''}}"><br>

            Telefono: {!!$error->ErrorFormateado("telefono")!!}<br>
            <input type="text" class="form-control" name="telefono" value="{{$tareas[4] ?? ''}}"><br>

            Direccion: {!!$error->ErrorFormateado("direccion")!!}<br>
            <input type="text" class="form-control" name="direccion" value="{{$tareas[5] ?? ''}}"><br>

            Poblacion: {!!$error->ErrorFormateado("poblacion")!!}<br>
            <input type="text" class="form-control" name="poblacion" value="{{$tareas[6] ?? ''}}" ><br>

            Codigo Postal: {!!$error->ErrorFormateado("codigop")!!}<br>
            <input type="text" class="form-control" name="codigop" value="{{$tareas[7] ?? ''}}"><br>

            Provincia: {!!$error->ErrorFormateado("provincia")!!}<br>
            <select class="form-select" name="provincia">
                <option disabled selected>Selecciona</option>
                @foreach ($provincias as $provincia)
                <option>{{$provincia['nombre']}}</option>
                @endforeach
            </select><br>
            <!-- FECHA DE CREACION AUTOMATICA?-->
            <!-- Los operarios los cojeremos de la BBDD o otro lugar.-->
            Operario encargado: {!!$error->ErrorFormateado("operario")!!}<br>
            <select class="form-select" name="operario">
                <option disabled selected>Selecciona</option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            Fecha Realizacion: {!!$error->ErrorFormateado("fecha")!!}<br>
            <input type="date" class="form-control" name="fecha" value="{{$tareas[10] ?? ''}}"><br>

            Descripcion: {!!$error->ErrorFormateado("descripcion")!!}<br>
            <textarea class="form-control" name="descripcion" value="{{$tareas[11] ?? ''}}"></textarea><br>
            
            Anotacion Inicial: {!!$error->ErrorFormateado("anotacioni")!!}<br>
            <textarea class="form-control" name="anotacioni" value="{{$tareas[12] ?? ''}}"></textarea><br>
            
            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
@endsection

