CREATE DATABASE IF NOT EXISTS dbdocker;

USE dbdocker;

CREATE TABLE IF NOT EXISTS projects(
    id INT(11) AUTO_INCREMENT,
    title VARCHAR(255),
    description VARCHAR(255),
    year INT(11),
    PRIMARY KEY(id)
);

SET character_set_client = utf8;
SET character_set_connection = utf8;
SET character_set_results = utf8;
SET collation_connection = utf8_general_ci;

INSERT INTO projects VALUE(0, 'Docker projects','Expertises in Docker', 2020);
INSERT INTO projects VALUE(0, 'Kubernets projects', 'Training using Kubernets', 2022);
