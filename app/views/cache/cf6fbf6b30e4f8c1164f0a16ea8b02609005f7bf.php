
<?php $__env->startSection('contenido'); ?>
  <div> 
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Rol</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <!-- Generacion de la tabla -->
        <?php $__currentLoopData = $usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
          <tr>
            <td><?php echo e($usuario['usuario_id']); ?></td>
            <td><?php echo e($usuario['nombre']); ?></td>
            <td><?php echo e($usuario['contraseña']); ?></td>
            <td><?php echo e($usuario['rol']); ?></td>
            <td><a href="index.php?controller=usuariosController&action=Usuarios::eliminarUsuarioVista&id=<?php echo e($usuario['usuario_id']); ?>"><button class="btn btn-danger">Eliminar</button></a>
            <a href="index.php?controller=usuariosController&action=Usuarios::modificarUsuario&id=<?php echo e($usuario['usuario_id']); ?>"><button class="btn btn-warning">Modificar</button></a></td>
          </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillaUsuarios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\2DAW\Desktop\ProyectoPHP-1\app\views/listausuarios.blade.php ENDPATH**/ ?>