DROP DATABASE IF EXISTS bookflight;
CREATE DATABASE bookflight;
USE bookflight;
CREATE TABLE flightbooking (
    id INT AUTO_INCREMENT,
    firstname VARCHAR(30),
    surname VARCHAR(30),
    bagsUnderTenKG INT,
    bagsOverTenKG INT,
    PRIMARY KEY(id)
);
