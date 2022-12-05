# Oppsett av DB til Portal

1. ```CREATE DATABASE `phplogin` /*!40100 DEFAULT CHARACTER SET utf8 */; ```
2. ```CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;```
3. Skriv inn hash passordet og brukernavn