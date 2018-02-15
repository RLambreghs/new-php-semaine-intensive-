create database yokubo_sushi

USE yokubo_sushi;

CREATE TABLE `reservation` (
  `id` INT UNSIGNED NOT NULL INCREMENT,
  `date` DATE NOT NULL,
  `horaire` TIME NOT NULL,
  `nombreDePersonne` TINYINT UNSIGNED NOT NULL,
  `nom` VARCHAR(50) NOT NULL,
  `prenom` VARCHAR(50) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `telephone` VARCHAR(30),
  PRIMARY KEY  (`id`)
);
