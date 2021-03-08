<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */- MySQL Script generated by MySQL Workbench
-- Mon Mar  8 11:14:38 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema Tasca8
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Tasca8` ;

-- -----------------------------------------------------
-- Schema Tasca8
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Tasca8` DEFAULT CHARACTER SET utf8 ;
SHOW WARNINGS;
USE `Tasca8` ;

-- -----------------------------------------------------
-- Table `producte`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `producte` ;

SHOW WARNINGS;
CREATE TABLE IF NOT EXISTS `producte` (
  `id_fila` VARCHAR(45) NOT NULL,
  `nom` VARCHAR(20) NULL,
  `prue` DECIMAL(5) NULL,
  `quantitat` INT NULL,
  `total1` DECIMAL(100) NULL,
  `total2` DECIMAL(100) NULL,
  PRIMARY KEY (`id_fila`))
ENGINE = InnoDB;

SHOW WARNINGS;

-- -----------------------------------------------------
-- Data for table `producte`
-- -----------------------------------------------------
START TRANSACTION;
USE `Tasca8`;
INSERT INTO `producte` (`id_fila`, `nom`, `prue`, `quantitat`, `total1`, `total2`) VALUES (DEFAULT, 'sal', 0.9, 2, NULL, NULL);
INSERT INTO `producte` (`id_fila`, `nom`, `prue`, `quantitat`, `total1`, `total2`) VALUES (DEFAULT, 'xocolata', 2, 2, NULL, NULL);

COMMIT;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


