-- -----------------------------------------------------
-- Script para base de datos peak_academy
-- -----------------------------------------------------

-- Eliminar la base si ya existe
DROP DATABASE IF EXISTS `peak_academy`;

-- Crear base de datos
CREATE DATABASE `peak_academy` 
  DEFAULT CHARACTER SET utf8mb4 
  COLLATE utf8mb4_general_ci;

-- Usar la base creada
USE `peak_academy`;

-- -----------------------------------------------------
-- Tabla: cursos (corregida)
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Tabla: cursos (corregida con campos reales)
-- -----------------------------------------------------
CREATE TABLE `cursos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `horarios` VARCHAR(100) DEFAULT NULL,
  `ubicacion` VARCHAR(100) DEFAULT NULL,
  `activo` TINYINT(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------------
-- Tabla: estudiantes (actualizada)
-- -----------------------------------------------------
CREATE TABLE `estudiantes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `correo_estudiantil` VARCHAR(100) NOT NULL,
  `cedula` VARCHAR(20) NOT NULL,
  `nombre` VARCHAR(50) NOT NULL,
  `apellido` VARCHAR(50) NOT NULL,
  `edad` INT,
  `carrera` VARCHAR(100),
  `sede` VARCHAR(100),
  `tareas` DECIMAL(5,2) DEFAULT 0,
  `examen` DECIMAL(5,2) DEFAULT 0,
  `proyecto` DECIMAL(5,2) DEFAULT 0,
  `activo` TINYINT(1) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------------
-- Tabla: actividades
-- -----------------------------------------------------
CREATE TABLE `actividades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) DEFAULT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `curso_id` INT DEFAULT NULL,
  `fecha_entrega` DATE DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `idx_actividades_curso_id` (`curso_id`),
  CONSTRAINT `fk_actividades_curso`
    FOREIGN KEY (`curso_id`)
    REFERENCES `cursos` (`id`)
    ON DELETE SET NULL
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------------
-- Tabla: practicas
-- -----------------------------------------------------
CREATE TABLE `practicas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) DEFAULT NULL,
  `descripcion` TEXT DEFAULT NULL,
  `curso_id` INT DEFAULT NULL,
  `fecha` DATE DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `idx_practicas_curso_id` (`curso_id`),
  CONSTRAINT `fk_practicas_curso`
    FOREIGN KEY (`curso_id`)
    REFERENCES `cursos` (`id`)
    ON DELETE SET NULL
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- -----------------------------------------------------
-- Tabla: notas
-- -----------------------------------------------------
CREATE TABLE `notas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `estudiante_id` INT DEFAULT NULL,
  `curso_id` INT DEFAULT NULL,
  `nota` DECIMAL(5,2) DEFAULT NULL,
  `fecha_registro` DATE,
  PRIMARY KEY (`id`),
  INDEX `idx_notas_estudiante_id` (`estudiante_id`),
  INDEX `idx_notas_curso_id` (`curso_id`),
  CONSTRAINT `fk_notas_estudiante`
    FOREIGN KEY (`estudiante_id`)
    REFERENCES `estudiantes` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_notas_curso`
    FOREIGN KEY (`curso_id`)
    REFERENCES `cursos` (`id`)
    ON DELETE SET NULL
    ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;