CREATE TABLE usuario (
  id_usuario INT(11) PRIMARY KEY,
  username varchar(255) NOT NULL,
  clave varchar(255) NOT NULL,
  tipo_usuario  int(1) NOT NULL,
  nombre varchar(100) NOT NULL,
  paterno varchar(50) DEFAULT 'APaterno',
  materno varchar(50) DEFAULT 'AMaterno',
  email varchar(50) DEFAULT 'alguien@example.com',
  telefono varchar(20) DEFAULT '0000000000',
) ENGINE=InnoDB
