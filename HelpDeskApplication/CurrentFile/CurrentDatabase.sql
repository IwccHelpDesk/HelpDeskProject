-- MySQL Script generated by MySQL Workbench
-- Mon Apr  8 16:27:09 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering
DROP DATABASE IF EXISTS VerifyHelpDesk;
CREATE DATABASE VerifyHelpDesk;
USE VerifyHelpDesk;

 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema VerifyHelpDesk
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `VerifyHelpDesk`.`ReportingTable`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ReportingTable` (
  `userId` INT NULL,
  `startTime` DATETIME NULL DEFAULT NULL,
  `endTime` DATETIME NULL DEFAULT NULL,
  FOREIGN KEY (`userId`)
    REFERENCES `Users` (`userIndexId`)
    ON DELETE CASCADE
    ON UPDATE NO ACTION 
  )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `VerifyHelpDesk`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Users` (
  `userIndexId` INT NOT NULL AUTO_INCREMENT,
  `userName` VARCHAR(45) NULL,
  `firstName` VARCHAR(45) NULL,
  `lastName` VARCHAR(45) NULL,
  `UserRole` VARCHAR(45) NULL,
  PRIMARY KEY (`userIndexId`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `VerifyHelpDesk`.`Settings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Settings` (
  `settingName` VARCHAR(45) NULL,
  `settingValue` VARCHAR(45) NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
