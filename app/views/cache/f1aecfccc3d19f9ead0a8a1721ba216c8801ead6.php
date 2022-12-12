
<?php $__env->startSection('contenido'); ?>
  <div> 
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Telefono</th>
          <th scope="col">Poblacion</th>
          <th scope="col">Provincia</th>
          <th scope="col">Estado</th>
          <th scope="col">Operario</th>
          <th scope="col">Descripcion</th>
          <th scope="col">Anotacion Inicial</th>
          <th scope="col">Fecha de realizacion</th>
          <th scope="col"></th>

        </tr>
      </thead>
      <tbody>
          <!-- Generacion de la tabla -->
          <?php $__currentLoopData = $mostrarTareas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tareas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr>
          <td><?php echo e($tareas['tarea_id']); ?></td>
          <td><?php echo e($tareas['nombre']); ?></td>
          <td><?php echo e($tareas['apellido']); ?></td>
          <td><?php echo e($tareas['telefono']); ?></td>
          <td><?php echo e($tareas['poblacion']); ?></td>
          <td><?php echo e($tareas['provincia']); ?></td>
          <td><?php echo e($tareas['estado_tarea']); ?></td>
          <td><?php echo e($tareas['operario_encargado']); ?></td>
          <td><?php echo e($tareas['descripcion']); ?></td>
          <td><?php echo e($tareas['anotacion_inicio']); ?></td>
          <td><?php echo e($tareas['fecha_realizacion']); ?></td>
          <td><a href="index.php?controller=tareasController&action=Tareas::mostrarTareaCompleta&id=<?php echo e($tareas['tarea_id']); ?>"><button class="btn btn-success">Ver</button></a>
          <a href="index.php?controller=tareasController&action=Tareas::modificarTarea&id=<?php echo e($tareas['tarea_id']); ?>"><button class="btn btn-warning">Modificar</button></a>
          <a href="index.php?controller=tareasController&action=Tareas::eliminarTareaVista&id=<?php echo e($tareas['tarea_id']); ?>"><button class="btn btn-danger">Eliminar</button></a>
          <a href="index.php?controller=tareasController&action=Tareas::completarTarea&id=<?php echo e($tareas['tarea_id']); ?>"><button class="btn btn-info">Completar</button></a></td>
          
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillaTareas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\2DAW\Desktop\ProyectoPHP-1\app\views/listatareas.blade.php ENDPATH**/ ?>