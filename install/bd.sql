
-- Base de datos: proyecto --

CREATE TABLE `tareas` (
  `tarea_id` int(6) NOT NULL AUTO_INCREMENT,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `telefono` int(12) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `poblacion` varchar(50) NOT NULL,
  `codigo_postal` int(5) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `estado_tarea` varchar(50) NOT NULL,
  `fecha_creacion` varchar(50) NOT NULL,
  `operario_encargado` varchar(50) NOT NULL,
  `fecha_realizacion` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `anotacion_inicio` varchar(50) DEFAULT NULL,
  `anotacion_final` varchar(50) DEFAULT NULL,
  PRIMARY KEY (tarea_id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `usuarios`(
  `usuario_id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(15) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `rol` varchar(15) NOT NULL,
  PRIMARY KEY (usuario_id)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;