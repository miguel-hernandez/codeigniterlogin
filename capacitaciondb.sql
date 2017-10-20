CREATE TABLE usuario (
  id_usuario INT(11) PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) NOT NULL,
  clave VARCHAR(255) NOT NULL,
  tipo_usuario  INT(1) NOT NULL,
  nombre VARCHAR(100) NOT NULL,
  paterno VARCHAR(50) DEFAULT 'APaterno',
  materno VARCHAR(50) DEFAULT 'AMaterno',
  email VARCHAR(50) DEFAULT 'alguien@example.com',
  telefono VARCHAR(20) DEFAULT '0000000000'
)


INSERT INTO usuario(username, clave, tipo_usuario, nombre) VALUES ("admin",MD5("123456"),1,"ADMIN")
