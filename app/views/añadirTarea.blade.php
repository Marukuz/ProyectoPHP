<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/añadirTarea.css" />
    <title>Añadir tarea</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../views/listatareas.php">Ver lista</a>
                    <a class="nav-link active" href="../controllers/filtroAñadirTarea.php">Añadir tarea</a>
                    <a class="nav-link" href="../controllers/modificarTarea.php">Modificar tarea</a>
                    <a class="nav-link" href="#">Eliminar tarea</a>
                    <a class="nav-link" href="#">Cambiar estado</a>
                    <a class="nav-link" href="#">Buscar tarea</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <h1 style="text-align: center;">Añadir tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            DNI: <br> 
            <input type="text" class="form-control" name="dni" ><br>

            Nombre: 
            <br><input type="text" class="form-control" name="nombre" ><br>

            Apellido: <br>
            <input type="text" class="form-control" name="apellido" ><br>

            Correo Electronico: <br>
            <input type="text" class="form-control" name="correo" ><br>

            Telefono: <br>
            <input type="text" class="form-control" name="telefono" ><br>

            Direccion: <br>
            <input type="text" class="form-control" name="direccion" ><br>

            Poblacion: <br>
            <input type="text" class="form-control" name="poblacion" ><br>

            Codigo Postal: <br>
            <input type="text" class="form-control" name="codigop" ><br>

            Provincia: <br>
            <select class="form-select" name="provincia">
                <option disabled selected>Selecciona</option>
                <option> Huelva</option>
            </select><br>
            <!-- FECHA DE CREACION AUTOMATICA?-->
            <!-- Los operarios los cojeremos de la BBDD o otro lugar.-->
            Operario encargado: <br>
            <select class="form-select" name="operario">
                <option disabled selected>Selecciona</option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            Fecha: <br>
            <input type="date" class="form-control" name="fecha"><br>

            Descripcion: <br>
            <textarea class="form-control" name="descripcion"></textarea>

            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
</body>
</html>