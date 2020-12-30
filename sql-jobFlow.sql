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
-- Table `jobflow`.`profilEntreprise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`profilEntreprise` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `logo` VARCHAR(255) NOT NULL,
  `nameEntreprise` VARCHAR(255) NOT NULL,
  `descriptionEntreprise` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`entreprise`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`entreprise` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `profilEntreprise_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `fk_entreprise_profilEntreprise1_idx` (`profilEntreprise_id` ASC) VISIBLE,
  CONSTRAINT `fk_entreprise_profilEntreprise1`
    FOREIGN KEY (`profilEntreprise_id`)
    REFERENCES `jobflow`.`profilEntreprise` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
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
  `technologie` TEXT NOT NULL,
  `ville` VARCHAR(255) NOT NULL,
  `typeEmploi` TEXT NOT NULL,
  `salaire` INT NULL,
  `entreprise_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_annonces_entreprise_idx` (`entreprise_id` ASC) VISIBLE,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
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
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `jobflow`.`lettreDeMotivation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`lettreDeMotivation` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `lettre` TEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
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
  `lettreDeMotivation_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_cv1_idx` (`cv_id` ASC) VISIBLE,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE,
  INDEX `fk_user_lettreDeMotivation1_idx` (`lettreDeMotivation_id` ASC) VISIBLE,
  CONSTRAINT `fk_user_cv1`
    FOREIGN KEY (`cv_id`)
    REFERENCES `jobflow`.`cv` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_lettreDeMotivation1`
    FOREIGN KEY (`lettreDeMotivation_id`)
    REFERENCES `jobflow`.`lettreDeMotivation` (`id`)
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
  INDEX `fk_annonces_has_user_user1_idx` (`user_id` ASC) VISIBLE,
  INDEX `fk_annonces_has_user_annonces1_idx` (`annonces_id` ASC) VISIBLE,
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
-- Table `jobflow`.`conseils`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `jobflow`.`conseils` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(255) NOT NULL,
  `image` VARCHAR(255) NULL,
  `descriptionConseils` TEXT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
