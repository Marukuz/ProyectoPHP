
<?php $__env->startSection('contenido'); ?>
    <h1 style="text-align: center;">Modificar tarea</h1><br>
    <div id="formulario" >
        <form method="post">
            ID Tarea: <br>
            <input type="text" class="form-control" name="id" value="<?php echo e($tarea['tarea_id'] ?? ''); ?>" readonly><br>

            DNI: <?php echo $error->ErrorFormateado("dni"); ?> <br>
            <input type="text" class="form-control" name="dni" value="<?php echo e($tarea['dni'] ?? ''); ?>"><br>

            Nombre: <br>
            <input type="text" class="form-control" name="nombre" value="<?php echo e($tarea['nombre'] ?? ''); ?>"><br>

            Apellido: <br>
            <input type="text" class="form-control" name="apellido" value="<?php echo e($tarea['apellido'] ?? ''); ?>"><br>

            Telefono: <br>
            <input type="text" class="form-control" name="telefono" value="<?php echo e($tarea['telefono'] ?? ''); ?>"><br>

            Correo Electronico: <br>
            <input type="text" class="form-control" name="correo" value="<?php echo e($tarea['correo'] ?? ''); ?>"><br>

            Direccion: <br>
            <input type="text" class="form-control" name="direccion" value="<?php echo e($tarea['direccion'] ?? ''); ?>"><br>

            Poblacion: <br>
            <input type="text" class="form-control" name="poblacion" value="<?php echo e($tarea['poblacion'] ?? ''); ?>"><br>

            Codigo Postal: <br>
            <input type="text" class="form-control" name="codigop" value="<?php echo e($tarea['codigo_postal'] ?? ''); ?>"><br>

            Provincia: <br>
            <select class="form-select" name="provincia" >
                <option selected><?php echo e($tarea['provincia']); ?></option>
                <?php $__currentLoopData = $provincias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provincia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option><?php echo e($provincia['nombre']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select><br>

            Estado Tarea: <br>
            <input type="text" class="form-control" name="estado" value="<?php echo e($tarea['estado_tarea'] ?? ''); ?>"><br>

            Fecha creacion: <br>
            <input type="date" class="form-control" name="fechac" value="<?php echo e($tarea['fecha_creacion'] ?? ''); ?>" readonly><br>

            Operario encargado: <br>
            <select class="form-select" name="operario">
                <option selected><?php echo e($tarea['operario_encargado']); ?></option>
                <option>Marc</option>
                <option>Kike</option>
                <option>Lara</option>
                <option>Jesus</option>
                <option>David</option>
            </select><br>

            Fecha Realizacion: <br>
            <input type="date" class="form-control" name="fecha"  value="<?php echo e($tarea['fecha_realizacion'] ?? ''); ?>"><br>

            Descripcion: <br>
            <textarea class="form-control" name="descripcion"><?php echo e($tarea['descripcion']); ?></textarea>

            Anotacion inicial: <br>
            <textarea class="form-control" name="anotacioni" ><?php echo e($tarea['anotacion_inicio']); ?></textarea>

            Anotacion final: <br>
            <textarea class="form-control" name="anotacionf" ><?php echo e($tarea['anotacion_final']); ?></textarea>

            <button type="submit" class="btn btn-primary">Modificar</button>
        </form>
    </div>
</body>
</html>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('plantilla', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\marcc\OneDrive\Escritorio\ProyectoPHP_blade\app\views/modificarTarea.blade.php ENDPATH**/ ?>