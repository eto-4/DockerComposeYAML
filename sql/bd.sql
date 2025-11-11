-- Example data
DROP USER IF EXISTS 'pepito'@'localhost';
DROP USER IF EXISTS 'juanito'@'%';
FLUSH PRIVILEGES;
CREATE USER 'pepito'@'localhost' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON *.* TO 'pepito'@'localhost' WITH GRANT OPTION;
CREATE USER 'juanito'@'%' IDENTIFIED BY '1234';
GRANT ALL PRIVILEGES ON *.* TO 'juanito'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;

DROP DATABASE IF EXISTS p1docker;

CREATE DATABASE p1docker;

USE p1docker;

DROP TABLE IF EXISTS `productes`;
CREATE TABLE `productes` (
  `idp` int NOT NULL,
  `nomarticle` varchar(45) NOT NULL,
  `preu` float DEFAULT NULL,
  PRIMARY KEY (`idp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `productes` VALUES (1,'Cargol del 7',0.1),(2,'Auriculars trencats',1.5),(3,'Somachigun',650.8),(4,'Plasters',5.99),(5,'Paquet Celtas',3.6);