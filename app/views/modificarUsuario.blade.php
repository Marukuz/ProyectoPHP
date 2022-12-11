@extends('plantillaUsuarios')
@section('contenido')
    <h1 style="text-align: center;">Modificar tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            ID Tarea: <br>
            <input type="text" class="form-control" name="id" value="{{$usuario['usuario_id'] ?? ''}}" readonly><br>
            
            Nombre:  {!!$error->ErrorFormateado("nombre")!!}<br>
            <input type="text" class="form-control" name="nombre" value="{{$usuario['nombre'] ?? ''}}"><br>

            
            Contraseña:  {!!$error->ErrorFormateado("contraseña")!!}<br>
            <input type="text" class="form-control" name="contraseña" value="{{$usuario['contraseña'] ?? ''}}"><br>

            Rol: {!!$error->ErrorFormateado("rol")!!}<br>
            <select class="form-select" name="rol">
                <option selected>{{$usuario['rol'] ?? ''}}</option>
                <option>Admin</option>
                <option>Operario</option>
            </select><br>
            <div style="text-align: center;">
                <input type="submit" class="btn btn-primary" value="Modificar">
            </div>
        </form>
    </div>
</body>
</html>
@endsection