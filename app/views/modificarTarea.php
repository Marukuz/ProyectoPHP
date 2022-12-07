<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/añadirTarea.css" />
    <title>Modificar tarea</title>
    <?php $tarea = selectTareaID($_POST['id']);?>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../views/listatareas.php">Ver lista</a>
                    <a class="nav-link" href="../controllers/filtroAñadirTarea.php">Añadir tarea</a>
                    <a class="nav-link active" href="../controllers/filtroModificarTarea.php">Modificar tarea</a>
                    <a class="nav-link" href="#">Eliminar tarea</a>
                    <a class="nav-link" href="#">Cambiar estado</a>
                    <a class="nav-link" href="#">Buscar tarea</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <h1 style="text-align: center;">Modificar tarea</h1><br>
    <div id="formulario" >
        <form action="subirTareaModificada.php" method="post">
            ID Tarea: <br>
            <input type="text" class="form-control" name="id" value="<?= $tarea['tarea_id'] ?>"><br>

            DNI: <br>
            <input type="text" class="form-control" name="dni" value="<?= $tarea['dni'] ?>"><br>

            Nombre: <br>
            <input type="text" class="form-control" name="nombre" value="<?= $tarea['nombre'] ?>"><br>

            Apellido: <br>
            <input type="text" class="form-control" name="apellido" value="<?= $tarea['apellido'] ?>"><br>

            Telefono: <br>
            <input type="text" class="form-control" name="telefono" value="<?= $tarea['telefono'] ?>"><br>

            Correo Electronico: <br>
            <input type="text" class="form-control" name="correo" value="<?= $tarea['correo'] ?>"><br>

            Direccion: <br>
            <input type="text" class="form-control" name="direccion" value="<?= $tarea['direccion'] ?>"><br>

            Poblacion: <br>
            <input type="text" class="form-control" name="poblacion" value="<?= $tarea['poblacion'] ?>"><br>

            Codigo Postal: <br>
            <input type="text" class="form-control" name="codigop" value="<?= $tarea['codigo_postal'] ?>"><br>

            Provincia: <br>
            <select class="form-select" name="provincia" >
                <option selected><?= $tarea['provincia'] ?></option>
                <?php mostrarProvincias()?>
            </select><br>

            Estado Tarea: <br>
            <input type="text" class="form-control" name="estado" value="<?= $tarea['estado_tarea'] ?>"><br>

            Fecha creacion: <br>
            <input type="date" class="form-control" name="fechac" value="<?= $tarea['fecha_creacion'] ?>"><br>

            Operario encargado: <br>
            <select class="form-select" name="operario">
                <option selected><?= $tarea['operario_encargado'] ?></option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            Fecha Realizacion: <br>
            <input type="date" class="form-control" name="fecha" value="<?= $tarea['fecha_realizacion'] ?>"><br>

            Descripcion inicial: <br>
            <textarea class="form-control" name="descripcion_inicial"><?= $tarea['anotacion_inicio'] ?></textarea>

            Descripcion final: <br>
            <textarea class="form-control" name="descripcion_final"><?= $tarea['anotacion_final'] ?></textarea>

            <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
    </div>
</body>

</html>