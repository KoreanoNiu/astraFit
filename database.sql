CREATE TABLE usuarios(
    idUsuario INT NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    tipoUsuario ENUM('admin', 'usuario', 'coach'),
    srcFotoPerfil VARCHAR(255) NOT NULL DEFAULT '../users/perfil-image/user-default.png',
    stravaIdAthlete VARCHAR(30),
    PRIMARY KEY(idUsuario),
    CONSTRAINT email UNIQUE (email)
)ENGINE InnoDB;

CREATE TABLE coaches(
    idCoach INT NOT NULL,   
    tipoCoach ENUM('Nutriologo', 'Entrenador'),
    descripcion VARCHAR(200) NOT NULL,
    PRIMARY KEY (idCoach),
    FOREIGN KEY (idCoach) REFERENCES usuarios(idUsuario)
)ENGINE InnoDB;

CREATE TABLE clientes(
    idUsuario INT NOT NULL,
    unidadAltura VARCHAR(2),
    unidadPeso VARCHAR(2),
    edad INT,
    altura INT,
    peso INT,
    genero VARCHAR(20),
    objetivo VARCHAR(30),
    nivel VARCHAR(40),
    lesiones INT,
    porcentajeGrasa INT,
    tipoDieta ENUM('Alta en carbohidratos', 'Baja en carbohidratos', 'Alta en proteína'),
    tipoFormula ENUM('Con grasa corporal', 'Sin grasa corporal'),
    idCoachNutriologo INT,
    idCoachEntrenador INT,
    PRIMARY KEY (idUsuario),
    FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario),
    FOREIGN KEY (idCoachNutriologo) REFERENCES coaches(idCoach),
    FOREIGN KEY (idCoachEntrenador) REFERENCES coaches(idCoach)
)ENGINE InnoDB;

CREATE TABLE imagenes(
    idImagen INT NOT NULL AUTO_INCREMENT,
    idUsuario INT NOT NULL,
    src VARCHAR(60) NOT NULL,
    fechaCreacion VARCHAR(30) NOT NULL,
    PRIMARY KEY (idImagen),
    FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
)ENGINE InnoDB;

CREATE TABLE niveles_posibles(
    id INT NOT NULL AUTO_INCREMENT,
    nivel VARCHAR(40) NOT NULL,
    PRIMARY KEY(id)
)ENGINE = INNODB;

CREATE TABLE objetivos(
    id INT NOT NULL AUTO_INCREMENT, 
    objetivo VARCHAR(15) NOT NULL, 
    PRIMARY KEY(id) 
)ENGINE = INNODB;

CREATE TABLE dietas(
    id INT NOT NULL AUTO_INCREMENT, 
    tipoDieta ENUM('Alta en carbohidratos', 'Baja en carbohidratos', 'Alta en proteína'),
    tipoFormula ENUM('Con grasa corporal', 'Sin grasa corporal'),
    PRIMARY KEY(id) 
)ENGINE = INNODB;

INSERT INTO usuarios VALUES(1, 'admin', 'admin@astrafit.com', 'c3284d0f94606de1fd2af172aba15bf3', 'admin', '../users/perfil-image/user-default.png');
INSERT INTO usuarios VALUES (2, 'Carlitos', 'carlitos@gmail.com', 'c3284d0f94606de1fd2af172aba15bf3', 'usuario', '../users/perfil-image/user-default.png'), 
                            (3, 'niquito', 'niquito@gmail.com', 'c3284d0f94606de1fd2af172aba15bf3', 'usuario', '../users/perfil-image/user-default.png'), 
                            (4, 'Juan', 'juan@gmail.com', 'c3284d0f94606de1fd2af172aba15bf3', 'coach', '../users/perfil-image/user-default.png'), 
                            (5, 'Luis', 'luis@gmail.com', 'c3284d0f94606de1fd2af172aba15bf3', 'coach', '../users/perfil-image/user-default.png');

INSERT INTO coaches VALUES (3, 'nutriologo', 'Hola soy juan bananas'), 
                            (4, 'entrenador', 'Hola soy luis');

insert into clientes VALUES(1, 'cm', 'kg', 17, 170, 70, 'admin', 'Tonificar', 'Atleta avanzado', 0, 12, 'Alta en carbohidratos', 'Con grasa corporal', null, null);
INSERT INTO clientes VALUES (2, 'cm', 'kg', 18, 165, 62, 'masculino', 'Tonificar', 'Atleta avanzado', 0, 12, 'Alta en carbohidratos', 'Con grasa corporal', 3, 4), 
                            (3, 'cm', 'kg', 23, 160, 65, 'masculino', 'Reducir peso', 'Atleta intermedio', 0, 11, 'Alta en carbohidratos', 'Con grasa corporal', 3, 4);
