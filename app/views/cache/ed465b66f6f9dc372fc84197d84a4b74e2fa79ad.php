
<?php $__env->startSection('contenido'); ?>
  <div> 
    <table class="table">
      <thead>
      <h1 style="text-align: center;">Quiere eliminar la siguiente tarea?</h1>
      <br>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Telefono</th>
          <th scope="col">Poblacion</th>
          <th scope="col">Provincia</th>
          <th scope="col">Estado</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Anotacion Inicial</th>
          <th scope="col">Fecha de realizacion</th>
        </tr>
      </thead>
        <tr>
          <td><?php echo e($tarea['tarea_id']); ?></td>
          <td><?php echo e($tarea['nombre']); ?></td>
          <td><?php echo e($tarea['apellido']); ?></td>
          <td><?php echo e($tarea['telefono']); ?></td>
          <td><?php echo e($tarea['poblacion']); ?></td>
          <td><?php echo e($tarea['provincia']); ?></td>
          <td><?php echo e($tarea['estado_tarea']); ?></td>
          <td><?php echo e($tarea['descripcion']); ?></td>
          <td><?php echo e($tarea['anotacion_inicio']); ?></td>
          <td><?php echo e($tarea['fecha_realizacion']); ?></td>
        </tr>
    </table>
    <div style="text-align: center;">
        <a href="index.php?controller=tareasController&action=eliminarTarea&id=<?php echo e($tarea['tarea_id']); ?>"><button class="btn btn-danger">Si</button></a>
        
        <a href="index.php?controller=tareasController&action=mostrarTareas"><button class="btn btn-success">No</button></a>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/eliminarTarea.blade.php ENDPATH**/ ?>