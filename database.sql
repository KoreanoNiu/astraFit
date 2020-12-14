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

CREATE TABLE notas(
    idNota INT NOT NULL AUTO_INCREMENT,
    idUsuario INT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    descripcion VARCHAR(255) NOT NULL,
    contenido VARCHAR(255) NOT NULL,
    PRIMARY KEY (idNota),
    FOREIGN KEY (idUsuario) REFERENCES usuarios(idUsuario)
)ENGINE InnoDB;


INSERT INTO usuarios VALUES(1, 'admin', 'admin@astrafit.com', 'c3284d0f94606de1fd2af172aba15bf3', 'admin', '../users/perfil-image/user-default.png', '');
insert into clientes VALUES(1, 'cm', 'kg', 17, 170, 70, 'admin', 'Tonificar', 'Atleta avanzado', 0, 12, 'Alta en carbohidratos', 'Con grasa corporal', null, null);

insert into niveles_posibles VALUES(1, 'Principiante'), (2, 'Atleta intermedio'), (3, 'Atleta avanzado');
insert into objetivos VALUES(1, 'Tonificar'), (2, 'Estar en forma'), (3, 'Perder peso');
insert into dietas VALUES(1, 'Alta en carbohidratos', 'Con grasa corporal'), (2, 'Baja en carbohidratos', 'Sin grasa corporal'), (3, 'Alta en proteína', null);