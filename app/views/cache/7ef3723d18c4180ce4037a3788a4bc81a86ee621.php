
<?php $__env->startSection('contenido'); ?>
  <div> 
    <table class="table">
      <thead>
      <h1 style="text-align: center;">Quiere eliminar al siguiente Usuario?</h1>
      <br>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Contraseña</th>
          <th scope="col">Rol</th>
        </tr>
      </thead>
        <tr>
          <td><?php echo e($usuario['usuario_id']); ?></td>
          <td><?php echo e($usuario['nombre']); ?></td>
          <td><?php echo e($usuario['contraseña']); ?></td>
          <td><?php echo e($usuario['rol']); ?></td>
        </tr>
    </table>
    <div style="text-align: center;">
        <a href="index.php?controller=usuariosController&action=Usuarios::eliminarUsuario&id=<?php echo e($usuario['usuario_id']); ?>"><button class="btn btn-danger">Si</button></a>
        <a href="index.php?controller=usuariosController&action=Usuarios::verUsuarios"><button class="btn btn-success">No</button></a>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillaUsuarios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/eliminarUsuario.blade.php ENDPATH**/ ?>