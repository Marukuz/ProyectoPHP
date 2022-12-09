
<?php $__env->startSection('contenido'); ?>

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
        <th scope="col">Descripcion</th>
        <th scope="col">Anotacion inicial</th>
        <th scope="col">Anotacion final</th>
      </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $mostrarTareaCompleta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tareas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
          <td><?php echo e($tareas['tarea_id']); ?></td>
          <td><?php echo e($tareas['dni']); ?></td>
          <td><?php echo e($tareas['nombre']); ?></td>
          <td><?php echo e($tareas['apellido']); ?></td>
          <td><?php echo e($tareas['telefono']); ?></td>
          <td><?php echo e($tareas['correo']); ?></td>
          <td><?php echo e($tareas['direccion']); ?></td>
          <td><?php echo e($tareas['poblacion']); ?></td>
          <td><?php echo e($tareas['codigo_postal']); ?></td>
          <td><?php echo e($tareas['provincia']); ?></td>
          <td><?php echo e($tareas['estado_tarea']); ?></td>
          <td><?php echo e($tareas['fecha_creacion']); ?></td>
          <td><?php echo e($tareas['operario_encargado']); ?></td>
          <td><?php echo e($tareas['fecha_realizacion']); ?></td>
          <td><?php echo e($tareas['descripcion']); ?></td>
          <td><?php echo e($tareas['anotacion_inicio']); ?></td>
          <td><?php echo e($tareas['anotacion_final']); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
  </table>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/tareacompleta.blade.php ENDPATH**/ ?>