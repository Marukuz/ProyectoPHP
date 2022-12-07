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
        <a class="nav-link active" href="listatareas.php">Ver lista</a>
        <a class="nav-link" href="../controllers/filtroAñadirTarea.php">Añadir tarea</a>
        <a class="nav-link" href="../controllers/modificarTarea.php">Modificar tarea</a>
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
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Telefono</th>
          <th scope="col">Poblacion</th>
          <th scope="col">Provincia</th>
          <th scope="col">Estado</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Fecha de realizacion</th>
        </tr>
      </thead>
        <?php foreach($mostrarTareas as $tareas) :?>
        <tr>
          <td><?= $tareas['tarea_id']?></td>
          <td><?= $tareas['nombre']?></td>
          <td><?= $tareas['apellido']?></td>
          <td><?= $tareas['telefono']?></td>
          <td><?= $tareas['poblacion']?></td>
          <td><?= $tareas['provincia']?></td>
          <td><?= $tareas['estado_tarea']?></td>
          <td><?= $tareas['anotacion_inicio']?></td>
          <td><?= $tareas['fecha_realizacion']?></td>
        </tr>
        <?php endforeach;?>
      <tbody>
      <tr>
      </tbody>
    </table>
  </div>
</body>
</html>