
<?php $__env->startSection('contenido'); ?>
    <h1 style="text-align: center;">Modificar tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            ID Tarea: <br>
            <input type="text" class="form-control" name="id" value="<?php echo e($tarea['tarea_id'] ?? ''); ?>" readonly><br>
            
            <!-- Filtrado de errores -->
            DNI: <?php echo $error->ErrorFormateado("dni"); ?> <br>
            <input type="text" class="form-control" name="dni" value="<?php echo e($tarea['dni'] ?? ''); ?>"><br>

            <!-- Filtrado de errores -->
            Nombre:  <?php echo $error->ErrorFormateado("nombre"); ?><br>
            <input type="text" class="form-control" name="nombre" value="<?php echo e($tarea['nombre'] ?? ''); ?>"><br>
            <!-- Filtrado de errores -->
            Apellido: <?php echo $error->ErrorFormateado("apellido"); ?><br>
            <input type="text" class="form-control" name="apellido" value="<?php echo e($tarea['apellido'] ?? ''); ?>"><br>
            <!-- Filtrado de errores -->
            Telefono: <?php echo $error->ErrorFormateado("telefono"); ?><br>
            <input type="text" class="form-control" name="telefono" value="<?php echo e($tarea['telefono'] ?? ''); ?>"><br>
            <!-- Filtrado de errores -->
            Correo Electronico: <?php echo $error->ErrorFormateado("correo"); ?><br>
            <input type="text" class="form-control" name="correo" value="<?php echo e($tarea['correo'] ?? ''); ?>"><br>
            <!-- Filtrado de errores -->
            Direccion: <?php echo $error->ErrorFormateado("direccion"); ?><br>
            <input type="text" class="form-control" name="direccion" value="<?php echo e($tarea['direccion'] ?? ''); ?>"><br>
            <!-- Filtrado de errores -->
            Poblacion: <?php echo $error->ErrorFormateado("poblacion"); ?><br>
            <input type="text" class="form-control" name="poblacion" value="<?php echo e($tarea['poblacion'] ?? ''); ?>"><br>
            <!-- Filtrado de errores -->
            Codigo Postal: <?php echo $error->ErrorFormateado("codigop"); ?><br>
            <input type="text" class="form-control" name="codigop" value="<?php echo e($tarea['codigo_postal'] ?? ''); ?>"><br>
            <!-- Filtrado de errores -->
            Provincia: <?php echo $error->ErrorFormateado("provincia"); ?> <br>
            <select class="form-select" name="provincia">
                <option selected><?php echo e($tarea['provincia']); ?></option>
                <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option><?php echo e($provincia['nombre']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>
            <!-- Filtrado de errores -->
            Estado Tarea: <?php echo $error->ErrorFormateado("estado"); ?><br>
            <select class="form-select" name="estado">
                <option selected><?php echo e($tarea['estado_tarea']); ?></option>
                <option>B</option>
                <option>P</option>
                <option>R</option>
                <option>C</option>
            </select><br>

            Fecha creacion: <br>
            <input type="date" class="form-control" name="fechac" value="<?php echo e($tarea['fecha_creacion'] ?? ''); ?>" readonly><br>
            <!-- Filtrado de errores -->
            Operario encargado: <?php echo $error->ErrorFormateado("operario"); ?> <br>
            <select class="form-select" name="operario">
                <option selected><?php echo e($tarea['operario_encargado']); ?></option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>
            <!-- Filtrado de errores -->
            Fecha Realizacion: <?php echo $error->ErrorFormateado("fecha"); ?><br>
            <input type="date" class="form-control" name="fecha"  value="<?php echo e($tarea['fecha_realizacion'] ?? ''); ?>"><br>
            <!-- Filtrado de errores -->
            Descripcion: <?php echo $error->ErrorFormateado("descripcion"); ?><br>
            <textarea class="form-control" name="descripcion"><?php echo e($tarea['descripcion']); ?></textarea><br>
            <!-- Filtrado de errores -->
            Anotacion inicial: <?php echo $error->ErrorFormateado("anotacioni"); ?><br>
            <textarea class="form-control" name="anotacioni" ><?php echo e($tarea['anotacion_inicio']); ?></textarea><br>

            Anotacion final: <br>
            <textarea class="form-control" name="anotacionf" ><?php echo e($tarea['anotacion_final']); ?></textarea>
            <br>
            <div style="text-align: center;">
                <input type="submit" class="btn btn-primary" value="Modificar">
            </div><br><br>
        </form>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantillaTareas', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP\app\views/modificarTarea.blade.php ENDPATH**/ ?>