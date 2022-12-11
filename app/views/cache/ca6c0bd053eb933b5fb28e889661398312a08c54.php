
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
        <tr>
          <td><?php echo e($mostrarTareaCompleta['tarea_id']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['dni']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['nombre']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['apellido']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['telefono']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['correo']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['direccion']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['poblacion']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['codigo_postal']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['provincia']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['estado_tarea']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['fecha_creacion']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['operario_encargado']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['fecha_realizacion']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['descripcion']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['anotacion_inicio']); ?></td>
          <td><?php echo e($mostrarTareaCompleta['anotacion_final']); ?></td>
        </tr>
    </tbody>
  </table>
</div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillaTareas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/tareacompleta.blade.php ENDPATH**/ ?>