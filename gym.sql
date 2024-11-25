DROP SCHEMA IF EXISTS `gymweb`;

-- Crear la base de datos
CREATE SCHEMA IF NOT EXISTS `gymweb` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE `gymweb`;

-- Crear la tabla de usuarios
CREATE TABLE `usuariogym` (
    `nombre_usuario` VARCHAR(50) NOT NULL,
    `numero_cuenta` VARCHAR(4) NOT NULL,
    `tipo_membresia` INT NOT NULL,
    `direccion` TEXT NOT NULL,
    `telefono` VARCHAR(8) NOT NULL,
    `email` TEXT NOT NULL,
    `contraseña` VARCHAR(15) NOT NULL,
    `fecha_registro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `permisos` INT NOT NULL DEFAULT `2`,
    PRIMARY KEY (`numero_cuenta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Insertar datos en la tabla usuariogym
INSERT INTO `usuariogym` (
    `nombre_usuario`, `numero_cuenta`, `tipo_membresia`, `direccion`, `telefono`, `email`, `contraseña`, `fecha_registro`, `permisos`
) VALUES
    ('juan perez', '1234', 1, 'Calle Ficticia 123, CDMX, México', '12345678', 'juanperez@email.com', 'password123', NOW(), 2),
    ('maria lopez', '5678', 2, 'Avenida Ejemplo 456, CDMX, México', '87654321', 'maria_lopez@email.com', 'mypassword', NOW(), 1),
    ('pedro garcia', '9101', 3, 'Plaza Real 789, CDMX, México', '11223344', 'pedro_garcia@email.com', 'pedropass', NOW(), 2),
    ('ana sanchez', '1122', 1, 'Calle Mayor 101, CDMX, México', '99887766', 'ana_sanchez@email.com', 'ana12345', NOW(), 2),
    ('luis fernandez', '2233', 2, 'Avenida Libertad 202, CDMX, México', '55667788', 'luis_fernandez@email.com', 'luispassword', NOW(), 1),
    ('laura martinez', '3344', 1, 'Callejón del Sol 303, CDMX, México', '66778899', 'laura_martinez@email.com', 'laura456', NOW(), 2),
    ('jose rodriquez', '4455', 3, 'Calle Luna 404, CDMX, México', '44556677', 'jose_rodriquez@email.com', 'josepassword', NOW(), 2),
    ('carla diaz', '5566', 1, 'Calle del Mar 505, CDMX, México', '33445566', 'carla_diaz@email.com', 'carla1234', NOW(), 2),
    ('pedro moreno', '6677', 2, 'Calle de la Paz 606, CDMX, México', '22334455', 'pedro_moreno@email.com', 'pedromoreno', NOW(), 1),
    ('rosa juarez', '7788', 3, 'Calle del Sol 707, CDMX, México', '55443322', 'rosa_juarez@email.com', 'rosajpassword', NOW(), 2),
    ('miguel rivas', '8899', 1, 'Calle Estrella 808, CDMX, México', '66554433', 'miguel_rivas@email.com', 'miguel321', NOW(), 2),
    ('lucia torres', '9900', 2, 'Avenida Central 909, CDMX, México', '44332211', 'lucia_torres@email.com', 'luciatpass', NOW(), 1),
    ('antonio gomez', '1001', 3, 'Calle Nuevo 1001, CDMX, México', '11223355', 'antonio_gomez@email.com', 'antoniogomezc', NOW(), 2),
    ('marta paredes', '1112', 1, 'Calle Real 2002, CDMX, México', '22334488', 'marta_paredes@email.com', 'martapass', NOW(), 2),
    ('francisco hernandez', '1213', 2, 'Avenida Larga 3003, CDMX, México', '33445577', 'francisco_hernandez@email.com', 'francisco123', NOW(), 1);
