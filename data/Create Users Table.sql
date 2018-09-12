drop database if exists gamingportal;

CREATE database gamingportal;

USE gamingportal; 
 
 CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE game (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name NVARCHAR(50) NOT NULL,
    description nvarchar(500) NOT NULL,
    picture_directory nvarchar(100)
);