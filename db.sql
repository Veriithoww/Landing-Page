CREATE TABLE registro(
    cod INT NOT NULL AUTO_INCREMENT, 
    nombre VARCHAR (50) NOT NULL,
    apellido VARCHAR (50) NOT NULL,
    dirección VARCHAR  (100) NOT NULL,
    correo VARCHAR (70) NOT NULL,
    identificador INT (15) NOT NULL,
    PRIMARY KEY (cod)
)ENGINE= InnoDB
CHARACTER SET latin1 COLLATE latin1_spanish_ci;
