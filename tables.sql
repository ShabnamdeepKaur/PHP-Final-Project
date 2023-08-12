CREATE TABLE users (
    id INT AUTO_INCREMENT UNIQUE KEY,
    username VARCHAR(100) NOT NULL PRIMARY KEY,
    password VARCHAR(100) NOT NULL
);

CREATE TABLE register (
    id INT AUTO_INCREMENT PRIMARY KEY,
    namee VARCHAR(255) NOT NULL,
    contact VARCHAR(20) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE KEY,
    city VARCHAR(50) NOT NULL,
    addresss VARCHAR(255) NOT NULL,
    category VARCHAR(50) NOT NULL,
    experience INT NOT NULL,
    firm VARCHAR(100) NOT NULL,
    workdone TEXT NOT NULL,
    picpath VARCHAR(255) NOT NULL,
    idproofpath VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
