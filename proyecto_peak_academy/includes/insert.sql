INSERT INTO cursos (nombre, descripcion, horarios, ubicacion) VALUES
('Ambiente Web', '25 Estudiantes', 'Lunes 6-9 PM', 'San Pedro'),
('Bases de Datos', '15 Estudiantes', 'Martes 2-5 PM', 'Virtual'),
('Estructura de Datos', '30 Estudiantes', 'Jueves 6-9 PM', 'Heredia'),
('Programacion Basica', '35 Estudiantes', 'Lunes 8-11 AM', 'Heredia');

-- Insertar registros de ejemplo en la tabla estudiantes
INSERT INTO `estudiantes` 
(`correo_estudiantil`, `cedula`, `nombre`, `apellido`, `edad`, `carrera`, `sede`, `tareas`, `examen`, `proyecto`, `activo`) 
VALUES
('juan.perez@academia.com', 'V-12345678', 'Juan', 'Pérez', 20, 'Ingeniería de Sistemas', 'Sede Central', 90.50, 85.00, 88.00, 1),
('maria.gomez@academia.com', 'V-87654321', 'María', 'Gómez', 22, 'Arquitectura', 'Sede Norte', 92.00, 80.50, 91.00, 1),
('carlos.lopez@academia.com', 'V-23456789', 'Carlos', 'López', 19, 'Derecho', 'Sede Sur', 85.00, 78.00, 82.50, 1),
('lucia.martinez@academia.com', 'V-34567890', 'Lucía', 'Martínez', 21, 'Medicina', 'Sede Oeste', 87.00, 90.50, 85.00, 1),
('pedro.sanchez@academia.com', 'V-45678901', 'Pedro', 'Sánchez', 23, 'Economía', 'Sede Este', 88.00, 92.00, 89.00, 1),
('sofia.ramirez@academia.com', 'V-56789012', 'Sofía', 'Ramírez', 20, 'Biología', 'Sede Central', 91.50, 85.00, 93.00, 1),
('josephina.diaz@academia.com', 'V-67890123', 'Josephina', 'Díaz', 22, 'Psicología', 'Sede Sur', 89.00, 84.00, 86.50, 1),
('luis.morales@academia.com', 'V-78901234', 'Luis', 'Morales', 24, 'Física', 'Sede Norte', 78.50, 92.00, 80.00, 1);


CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    contrasena VARCHAR(255) NOT NULL,
    rol ENUM('admin', 'editor', 'estudiante') DEFAULT 'estudiante',
    activo TINYINT(1) DEFAULT 1
);

--contraseña para todos 123456
-- Usuario administrador
INSERT INTO usuarios (nombre, usuario, contrasena, rol, activo)
VALUES ('Administrador General', 'admin', '$2y$10$Vsm8g2vGoGJgbpnhX1Go5eHV9HbGZ7AzG2Ex1cVwWzqdrdV7FeZEO', 'admin', 1);

-- Usuario editor
INSERT INTO usuarios (nombre, usuario, contrasena, rol, activo)
VALUES ('Editor de Contenido', 'editor1', '$2y$10$Vsm8g2vGoGJgbpnhX1Go5eHV9HbGZ7AzG2Ex1cVwWzqdrdV7FeZEO', 'editor', 1);

-- Usuario estudiante
INSERT INTO usuarios (nombre, usuario, contrasena, rol, activo)
VALUES ('Estudiante Ejemplo', 'estudiante1', '$2y$10$Vsm8g2vGoGJgbpnhX1Go5eHV9HbGZ7AzG2Ex1cVwWzqdrdV7FeZEO', 'estudiante', 1);


CREATE TABLE activos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    cantidad INT NOT NULL
);

INSERT INTO activos (nombre, cantidad) VALUES 
('Laptop Dell', 5),
('Proyector Epson', 2),
('Mouse inalámbrico', 20),
('Teclado mecánico', 10),
('Router WiFi', 3),
('Monitor 24 pulgadas', 4),
('parlantes', 7);

ALTER TABLE estudiantes
ADD COLUMN curso_id INT,
ADD CONSTRAINT fk_curso_id FOREIGN KEY (curso_id) REFERENCES cursos(id);
