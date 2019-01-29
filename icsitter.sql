CREATE DATABASE icsitter;

USE icsitter;

CREATE TABLE user (
    id INT(11) AUTO_INCREMENT,
    userName VARCHAR(20) NOT NULL UNIQUE,
    `name` VARCHAR(20) NOT NULL,
    first_surname VARCHAR(50) NOT NULL,
    birthday date NOT NULL, 
<<<<<<< HEAD
    mail VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    password varchar(10) NOT NULL,
=======
    mail VARCHAR(50) NOT NULL UNIQUE,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `password` varchar(50) NOT NULL,
>>>>>>> b8f13608a64f92764530b652837795a340407e6d
    PRIMARY KEY (id)
);

CREATE TABLE msg (
    id INT(11) AUTO_INCREMENT,
    msg TEXT(1000) NOT NULL,
    `user_id` int(11),
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES user(id) ON UPDATE CASCADE
);