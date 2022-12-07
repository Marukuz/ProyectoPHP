<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">Inicio</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" href="../views/listatareas.php">Ver lista</a>
        <a class="nav-link" href="../controllers/filtroAñadirTarea.php">Añadir tarea</a>
        <a class="nav-link" href="#">Modificar tarea</a>
        <a class="nav-link" href="#">Eliminar tarea</a>
        <a class="nav-link" href="#">Cambiar estado</a>
        <a class="nav-link" href="#">Buscar tarea</a>
      </div>
    </div>
  </div>
</nav>
<div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">DNI</th>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido</th>
        <th scope="col">Telefono</th>
        <th scope="col">Correo</th>
        <th scope="col">Direccion</th>
        <th scope="col">Poblacion</th>
        <th scope="col">Codigo Postal</th>
        <th scope="col">Provincia</th>
        <th scope="col">Estado</th>
        <th scope="col">Fecha de creacion</th>
        <th scope="col">Operario</th>
        <th scope="col">Fecha de realizacion</th>
        <th scope="col">Descripcion inicial</th>
        <th scope="col">Descripcion final</th>
      </tr>
    </thead>
    <tbody>
      <?php include('../controllers/mostrarTareaCompleta.php');?>
    </tbody>
  </table>
</div>
</body>
</html>