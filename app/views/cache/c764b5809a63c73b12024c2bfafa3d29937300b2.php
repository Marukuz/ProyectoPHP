<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/modificarTarea.css" />
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="../views/listatareas.php">Ver lista</a>
                    <a class="nav-link" href="../controllers/filtroAñadirTarea.php">Añadir tarea</a>
                    <a class="nav-link active" href="../controllers/modificarTarea.php">Modificar tarea</a>
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
        <form method="post">
        Introduce el ID de la tarea:
            <input type="text" class="form-control" name="id"><br>
            <button type="submit" class="btn btn-primary">Introducir</button>
        </form>
    </div>  
</body>
</html><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/modificarTareaid.blade.php ENDPATH**/ ?>