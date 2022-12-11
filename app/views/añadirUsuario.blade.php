@extends('plantillaUsuarios')
@section('contenido')   
    <br>
    <h1 style="text-align: center;">Añadir Usuario</h1><br>
    <div id="formulario" >
        <form method="post">
            Usuario: {!!$error->ErrorFormateado("nombre")!!} <br> 
            <input type="text" class="form-control" name="usuario" value="{{$usuario[0] ?? ''}}"><br>

            Contraseña: {!!$error->ErrorFormateado("contraseña")!!}<br>
            <input type="password" class="form-control" name="password" value="{{$usuario[1] ?? ''}}"><br>

            Rol: {!!$error->ErrorFormateado("rol")!!}<br>
            <select class="form-select" name="rol">
                <option disabled selected>Selecciona</option>
                <option>Admin</option>
                <option>Operario</option>
            </select><br>

            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
@endsection

