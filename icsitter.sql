CREATE DATABASE icsitter;

USE icsitter;

CREATE TABLE information (
    id INT(11) AUTO_INCREMENT,
    userName VARCHAR(20) NOT NULL,
    msg TEXT(1000) NOT NULL,
    PRIMARY KEY (id)
);