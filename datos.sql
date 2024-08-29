create database if no exists proyecto1
Use proyecto1
CREATE TABLE usuario(
    id INT primary key auto_increment,
    nombre varchar(255),
    correo varchar(255),
    contraseña text,
);
INSERT INTO usuario (nombre, correo, contraseña) values ("Jimena","jimenalopezpy@gmail.com", "123")

CREATE TABLE articulos(
    id INT primary key auto_increment,
    nombre varchar(255),
    fecha date,
    contenido text,
    foto text,
    autor INT,
    FOREIGN KEY (autor) REFERENCES usuario(id)
);
INSERT INTO usuario(nombre, correo, contraseña) values ("Jimena", "jimenalopezpy@gmail.com", "12345");

INSERT INTO articulos(nombre, fecha, contenido, foto, autor) values("Desde la base de datos", "2024-08-08","Lorem ipsum", "https://encrypted-tbn0.gstatic.com/imagesq=tbn:ANd9GcSmFpeOa-R-WA1wD5bUe-5CY4M-lhIF44ch3g&s", 1);