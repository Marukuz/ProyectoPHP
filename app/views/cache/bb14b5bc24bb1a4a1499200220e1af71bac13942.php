
<?php $__env->startSection('contenido'); ?>   
    <br>
    <h1 style="text-align: center;">Añadir Usuario</h1><br>
    <div id="formulario" >
        <form method="post">
            Usuario: <?php echo $error->ErrorFormateado("nombre"); ?> <br> 
            <input type="text" class="form-control" name="usuario" value="<?php echo e($usuario[0] ?? ''); ?>"><br>

            Contraseña: <?php echo $error->ErrorFormateado("contraseña"); ?><br>
            <input type="password" class="form-control" name="password" value="<?php echo e($usuario[1] ?? ''); ?>"><br>

            Rol: <?php echo $error->ErrorFormateado("rol"); ?><br>
            <select class="form-select" name="rol">
                <option disabled selected>Selecciona</option>
                <option>Admin</option>
                <option>Operario</option>
            </select><br>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('plantillaUsuarios', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/añadirusuario.blade.php ENDPATH**/ ?>