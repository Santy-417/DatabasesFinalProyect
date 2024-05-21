CREATE TABLE vuelos (
    id_vuelo INT AUTO_INCREMENT PRIMARY KEY,
    numero_vuelo VARCHAR(20),
    aerolinea VARCHAR(100),
    origen VARCHAR(100),
    destino VARCHAR(100),
    fecha_salida DATE,
    hora_salida TIME,
    estado VARCHAR(20),
    puerta_embarque VARCHAR(10)
);
CREATE TABLE personal (
    id_personal INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    puesto VARCHAR(100),
    departamento VARCHAR(100)
);
CREATE TABLE pasajeros (
    id_pasajero INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    apellido VARCHAR(100),
    fecha_nacimiento DATE,
    documento_identidad VARCHAR(20)
);
CREATE TABLE equipajes (
    id_equipaje INT AUTO_INCREMENT PRIMARY KEY,
    id_pasajero INT,
    numero_vuelo INT,
    estado VARCHAR(20)
    
);
CREATE TABLE servicios_aeroportuarios (
    id_servicio INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    tipo VARCHAR(50),
    ubicacion VARCHAR(100)
);