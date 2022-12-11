
<?php $__env->startSection('contenido'); ?>   
    <br>
    <h1 style="text-align: center;">Añadir tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            <!-- Filtrado de errores -->    
            DNI: <?php echo $error->ErrorFormateado("dni"); ?> <br> 
            <input type="text" class="form-control" name="dni" value="<?php echo e($tareas[0] ?? ''); ?>"><br>

            <!-- Filtrado de errores -->
            Nombre: <?php echo $error->ErrorFormateado("nombre"); ?>

            <br><input type="text" class="form-control" name="nombre" value="<?php echo e($tareas[1] ?? ''); ?>" ><br>

            <!-- Filtrado de errores -->
            Apellido: <?php echo $error->ErrorFormateado("apellido"); ?><br>
            <input type="text" class="form-control" name="apellido" value="<?php echo e($tareas[2] ?? ''); ?>"><br>

            <!-- Filtrado de errores -->
            Correo Electronico: <?php echo $error->ErrorFormateado("correo"); ?><br>
            <input type="text" class="form-control" name="correo" value="<?php echo e($tareas[3] ?? ''); ?>"><br>

            <!-- Filtrado de errores -->
            Telefono: <?php echo $error->ErrorFormateado("telefono"); ?><br>
            <input type="text" class="form-control" name="telefono" value="<?php echo e($tareas[4] ?? ''); ?>"><br>

            <!-- Filtrado de errores -->
            Direccion: <?php echo $error->ErrorFormateado("direccion"); ?><br>
            <input type="text" class="form-control" name="direccion" value="<?php echo e($tareas[5] ?? ''); ?>"><br>
            
            <!-- Filtrado de errores -->
            Poblacion: <?php echo $error->ErrorFormateado("poblacion"); ?><br>
            <input type="text" class="form-control" name="poblacion" value="<?php echo e($tareas[6] ?? ''); ?>" ><br>

            <!-- Filtrado de errores -->
            Codigo Postal: <?php echo $error->ErrorFormateado("codigop"); ?><br>
            <input type="text" class="form-control" name="codigop" value="<?php echo e($tareas[7] ?? ''); ?>"><br>

            <!-- Filtrado de errores -->
            Provincia: <?php echo $error->ErrorFormateado("provincia"); ?><br>
            <select class="form-select" name="provincia">
                <option disabled selected>Selecciona</option>
                <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option><?php echo e($provincia['nombre']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
     
            <!-- Filtrado de errores -->
            Operario encargado: <?php echo $error->ErrorFormateado("operario"); ?><br>
            <select class="form-select" name="operario">
                <option disabled selected>Selecciona</option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            <!-- Filtrado de errores -->
            Fecha Realizacion: <?php echo $error->ErrorFormateado("fecha"); ?><br>
            <input type="date" class="form-control" name="fecha" value="<?php echo e($tareas[10] ?? ''); ?>"><br>

            <!-- Filtrado de errores -->
            Descripcion: <?php echo $error->ErrorFormateado("descripcion"); ?><br>
            <textarea class="form-control" name="descripcion" value="<?php echo e($tareas[11] ?? ''); ?>"></textarea><br>
            
            <!-- Filtrado de errores -->
            Anotacion Inicial: <?php echo $error->ErrorFormateado("anotacioni"); ?><br>
            <textarea class="form-control" name="anotacioni" value="<?php echo e($tareas[12] ?? ''); ?>"></textarea><br>
            
            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div><br><br>
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('plantillaTareas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP\app\views/añadirTarea.blade.php ENDPATH**/ ?>