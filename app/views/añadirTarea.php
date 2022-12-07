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
        <form action="../controllers/filtroAñadirTarea.php" method="post">

            DNI: <?= $error->ErrorFormateado("dni") ?><br> 
            <input type="text" class="form-control" name="dni" value="<?php echo $_POST['dni'] ?? '';?>"><br>

            Nombre: <?= $error->ErrorFormateado("nombre") ?>
            <br><input type="text" class="form-control" name="nombre" value="<?php echo $_POST['nombre'] ?? '';?>"><br>

            Apellido: <?= $error->ErrorFormateado("apellido") ?><br>
            <input type="text" class="form-control" name="apellido" value="<?php echo $_POST['apellido'] ?? '';?>"><br>

            Correo Electronico: <?= $error->ErrorFormateado("correo") ?><br>
            <input type="text" class="form-control" name="correo" value="<?php echo $_POST['correo'] ?? '';?>"><br>

            Telefono: <?= $error->ErrorFormateado("telefono") ?><br>
            <input type="text" class="form-control" name="telefono" value="<?php echo $_POST['telefono'] ?? '';?>"><br>

            Direccion: <?= $error->ErrorFormateado("direccion") ?><br>
            <input type="text" class="form-control" name="direccion" value="<?php echo $_POST['direccion'] ?? '';?>"><br>

            Poblacion: <?= $error->ErrorFormateado("poblacion") ?><br>
            <input type="text" class="form-control" name="poblacion" value="<?php echo $_POST['poblacion'] ?? '';?>"><br>

            Codigo Postal: <?= $error->ErrorFormateado("codigop") ?><br>
            <input type="text" class="form-control" name="codigop" value="<?php echo $_POST['codigop'] ?? '';?>"><br>

            Provincia: <?= $error->ErrorFormateado("provincia") ?><br>
            <select class="form-select" name="provincia">
                <option disabled selected>Selecciona</option>
                <?php mostrarProvincias()?>
            </select><br>
            <!-- FECHA DE CREACION AUTOMATICA?-->
            <!-- Los operarios los cojeremos de la BBDD o otro lugar.-->
            Operario encargado: <?= $error->ErrorFormateado("operario") ?><br>
            <select class="form-select" name="operario">
                <option disabled selected>Selecciona</option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            Fecha: <?= $error->ErrorFormateado("fecha") ?><br>
            <input type="date" class="form-control" name="fecha"><br>

            Descripcion: <?= $error->ErrorFormateado("descripcion") ?><br>
            <textarea class="form-control" name="descripcion"></textarea>

            <button type="submit" class="btn btn-primary">Añadir</button>
        </form>
    </div>
</body>

</html>