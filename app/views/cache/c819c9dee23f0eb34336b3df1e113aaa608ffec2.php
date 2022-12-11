
<?php $__env->startSection('contenido'); ?>
    <h1 style="text-align: center;">Modificar tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            ID Tarea: <br>
            <input type="text" class="form-control" name="id" value="<?php echo e($usuario['usuario_id'] ?? ''); ?>" readonly><br>
            
            Nombre:  <?php echo $error->ErrorFormateado("nombre"); ?><br>
            <input type="text" class="form-control" name="nombre" value="<?php echo e($usuario['nombre'] ?? ''); ?>"><br>

            
            Contraseña:  <?php echo $error->ErrorFormateado("contraseña"); ?><br>
            <input type="text" class="form-control" name="contraseña" value="<?php echo e($usuario['contraseña'] ?? ''); ?>"><br>

            Rol: <?php echo $error->ErrorFormateado("rol"); ?><br>
            <select class="form-select" name="rol">
                <option selected><?php echo e($usuario['rol'] ?? ''); ?></option>
                <option>Admin</option>
                <option>Operario</option>
            </select><br>
            <div style="text-align: center;">
                <input type="submit" class="btn btn-primary" value="Modificar">
            </div>
        </form>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillaUsuarios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/modificarUsuario.blade.php ENDPATH**/ ?>