CREATE DATABASE icsitter;

USE icsitter;

CREATE TABLE user (
    id INT(11) AUTO_INCREMENT,
    userName VARCHAR(20) NOT NULL,
    `name` VARCHAR(20) NOT NULL,
    first_surname VARCHAR(50) NOT NULL,
    birthday date NOT NULL, 
    mail VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    password varchar(10) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE msg (
    id INT(11) AUTO_INCREMENT,
    msg TEXT(1000) NOT NULL,
    `user_id` int(11),
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES user(id) ON UPDATE CASCADE
);