-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema jobflow
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema jobflow
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `jobflow` DEFAULT CHARACTER SET utf8 ;
USE `jobflow` ;

-- -----------------------------------------------------
-- Table `jobflow`.`entreprise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`entreprise` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`annonces`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`annonces` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `imageEntreprise` VARCHAR(255) NULL,
  `date` DATETIME NOT NULL,
  `description` TEXT NOT NULL,
  `ville` VARCHAR(255) NOT NULL,
  `typeEmploi` TEXT NOT NULL,
  `salaire` INT NULL,
  `entreprise_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_annonces_entreprise_idx` (`entreprise_id` ASC),
  CONSTRAINT `fk_annonces_entreprise`
    FOREIGN KEY (`entreprise_id`)
    REFERENCES `jobflow`.`entreprise` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`cv`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`cv` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name_cv` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(255) NOT NULL,
  `lastname` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `cv_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_cv1_idx` (`cv_id` ASC),
  CONSTRAINT `fk_user_cv1`
    FOREIGN KEY (`cv_id`)
    REFERENCES `jobflow`.`cv` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`type` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `type_langage` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`technologie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`technologie` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `langage` VARCHAR(255) NOT NULL,
  `type_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_technologie_type1_idx` (`type_id` ASC),
  CONSTRAINT `fk_technologie_type1`
    FOREIGN KEY (`type_id`)
    REFERENCES `jobflow`.`type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`annonces_has_user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`annonces_has_user` (
  `annonces_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`annonces_id`, `user_id`),
  INDEX `fk_annonces_has_user_user1_idx` (`user_id` ASC),
  INDEX `fk_annonces_has_user_annonces1_idx` (`annonces_id` ASC),
  CONSTRAINT `fk_annonces_has_user_annonces1`
    FOREIGN KEY (`annonces_id`)
    REFERENCES `jobflow`.`annonces` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_annonces_has_user_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `jobflow`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`technologie_has_annonces`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`technologie_has_annonces` (
  `technologie_id` INT NOT NULL,
  `annonces_id` INT NOT NULL,
  PRIMARY KEY (`technologie_id`, `annonces_id`),
  INDEX `fk_technologie_has_annonces_annonces1_idx` (`annonces_id` ASC),
  INDEX `fk_technologie_has_annonces_technologie1_idx` (`technologie_id` ASC),
  CONSTRAINT `fk_technologie_has_annonces_technologie1`
    FOREIGN KEY (`technologie_id`)
    REFERENCES `jobflow`.`technologie` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_technologie_has_annonces_annonces1`
    FOREIGN KEY (`annonces_id`)
    REFERENCES `jobflow`.`annonces` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`profilEntreprise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`profilEntreprise` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `logo` VARCHAR(255) NOT NULL,
  `nameEntreprise` VARCHAR(255) NOT NULL,
  `descriptionEntreprise` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`conseils`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`conseils` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NULL,
  `descriptionConseils` TEXT NOT NULL,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
