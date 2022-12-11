
-- Base de datos: proyecto --

CREATE TABLE `tareas` (
  `tarea_id` int(6) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `telefono` int(12) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `poblacion` varchar(45) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `provincia` varchar(45) NOT NULL,
  `estado_tarea` varchar(45) NOT NULL,
  `fecha_creacion` varchar(45) NOT NULL,
  `operario_encargado` varchar(45) NOT NULL,
  `fecha_realizacion` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `anotacion_inicio` varchar(45) DEFAULT NULL,
  `anotacion_final` varchar(45) DEFAULT NULL,
  PRIMARY KEY (tarea_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `usuarios`(
  `usuario_id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `rol` varchar(45) NOT NULL,
  PRIMARY KEY (usuario_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;