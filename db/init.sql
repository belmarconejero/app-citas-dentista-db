DROP DATABASE IF EXISTS app_citas_dentista;
CREATE DATABASE app_citas_dentista DEFAULT CHARACTER SET = 'utf8mb4';
USE app_citas_dentista;
CREATE TABLE citas(
    id INT PRIMARY KEY AUTO_INCREMENT,
    paciente VARCHAR(100) NOT NULL,
    telefono VARCHAR(11) NOT NULL,
    email VARCHAR(99),
    fecha_cita DATETIME NOT NULL,
    observaciones VARCHAR(300) NULL,
    fecha_solicitud DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    fecha_actualizacion DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP 
);
INSERT INTO citas (paciente,telefono,email,fecha_cita,observaciones) 
VALUES
 ('Jose','66565666','cahome@gmail.com','2022-03-15 18:00:00','tengo mucho miedito'),
  ('Mario','66775996','pelod @gmail.com','2022-04-15 10:00:00','gracias'),
   ('Genaro','60065666','gename@gmail.com','2022-05-15 10:00:00','adios'),
    ('Lupe','6654366','lupeme@gmail.com','2022-06-15 18:30:00','mañana llamo'),
     ('Milagros','665777666','mili@gmail.com','2022-07-15 11:00:00','hola manolito y carmencita');