-- MySQL Script generated by MySQL Workbench
-- 11/28/18 20:11:31
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema clinica
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema clinica
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `clinica` DEFAULT CHARACTER SET utf8 ;
USE `clinica` ;

-- -----------------------------------------------------
-- Table `clinica`.`medico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`medico` (
  `id_medico` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_medico` VARCHAR(255) NULL DEFAULT NULL,
  `crm_medico` VARCHAR(10) NULL DEFAULT NULL,
  `especialidade_medico` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id_medico`));


-- -----------------------------------------------------
-- Table `clinica`.`paciente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`paciente` (
  `id_paciente` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_paciente` VARCHAR(255) NULL DEFAULT NULL,
  `cpf_paciente` VARCHAR(11) NULL DEFAULT NULL,
  `dt_nasc_paciente` DATE NULL DEFAULT NULL,
  `genero_paciente` CHAR(1) NULL DEFAULT NULL,
  `fone_paciente` VARCHAR(20) NULL DEFAULT NULL,
  `endereco_paciente` VARCHAR(40) NULL DEFAULT NULL,
  `cidade_paciente` VARCHAR(20) NULL DEFAULT NULL,
  `uf_paciente` CHAR(2) NULL DEFAULT NULL,
  PRIMARY KEY (`id_paciente`));


-- -----------------------------------------------------
-- Table `clinica`.`prontuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clinica`.`prontuario` (
  `id_prontuario` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `medico_id_medico` INT UNSIGNED NOT NULL,
  `paciente_id_paciente` INT UNSIGNED NOT NULL,
  `obs_prontuario` TEXT NULL DEFAULT NULL,
  `data_prontuario` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id_prontuario`),
  INDEX `prontuario_FKIndex1` (`paciente_id_paciente` ASC),
  INDEX `prontuario_FKIndex2` (`medico_id_medico` ASC));


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;