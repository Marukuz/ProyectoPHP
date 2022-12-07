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
        <a class="nav-link active" href="../controllers/mostrarControlador.php">Ver lista</a>
        <a class="nav-link" href="">Añadir tarea</a>
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
          <?php $__currentLoopData = $mostrarTareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tareas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
          <td><?php echo e($tareas['tarea_id']); ?></td>
          <td><?php echo e($tareas['nombre']); ?></td>
          <td><?php echo e($tareas['apellido']); ?></td>
          <td><?php echo e($tareas['telefono']); ?></td>
          <td><?php echo e($tareas['poblacion']); ?></td>
          <td><?php echo e($tareas['provincia']); ?></td>
          <td><?php echo e($tareas['estado_tarea']); ?></td>
          <td><?php echo e($tareas['anotacion_inicio']); ?></td>
          <td><?php echo e($tareas['fecha_realizacion']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <tbody>
      <tr>
      </tbody>
    </table>
  </div>
</body>
</html><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/listatareas.blade.php ENDPATH**/ ?>