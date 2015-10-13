-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`MANUFACTURER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`MANUFACTURER` (
  `ID_MANU` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name_MANU` NVARCHAR(100) NOT NULL COMMENT '',
  `Website_MANU` NVARCHAR(50) NULL COMMENT '',
  `Email_MANU` NVARCHAR(50) NULL COMMENT '',
  `Logo_MANU` NVARCHAR(256) NULL COMMENT '',
  PRIMARY KEY (`ID_MANU`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CATEGORY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CATEGORY` (
  `ID_CATE` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name_CATE` NVARCHAR(50) NOT NULL COMMENT '',
  `Description_CATE` LONGTEXT NULL COMMENT '',
  PRIMARY KEY (`ID_CATE`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PRODUCT`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PRODUCT` (
  `ID_PROD` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `Name_PROD` NVARCHAR(100) NOT NULL COMMENT '',
  `Description_PROD` LONGTEXT NULL COMMENT 'Multiline descriptions ????',
  `Picture_PROD` NVARCHAR(256) NULL COMMENT 'Path to image. Multiple images should be supported.\nConsider changing into a separate entity.',
  `UnitPrice_PROD` DECIMAL(10,2) NULL COMMENT '',
  `Discount_PROD` DECIMAL(5,3) NULL COMMENT '',
  `UnitMRP_PROD` DECIMAL(10,2) NULL COMMENT '',
  `Stock_PROD` INT NULL COMMENT '',
  `Sizes_PROD` NVARCHAR(100) NULL COMMENT 'available sizes has to be a list.\nConsider changing into an entity.',
  `Colours_PROD` NVARCHAR(100) NULL COMMENT 'Has to be a list.\nConsider changing into an entity.',
  `AvgRating_PROD` DECIMAL(3,2) NULL COMMENT '',
  `MANUFACTURER_ID_MANU` INT NOT NULL COMMENT '',
  `CATEGORY_ID_CATE` INT NOT NULL COMMENT '',
  PRIMARY KEY (`ID_PROD`)  COMMENT '',
  INDEX `FK_PRODUCT_MANUFACTURER_idx` (`MANUFACTURER_ID_MANU` ASC)  COMMENT '',
  INDEX `FK_PRODUCT_CATEGORY1_idx` (`CATEGORY_ID_CATE` ASC)  COMMENT '',
  CONSTRAINT `FK_PRODUCT_MANUFACTURER`
    FOREIGN KEY (`MANUFACTURER_ID_MANU`)
    REFERENCES `mydb`.`MANUFACTURER` (`ID_MANU`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_PRODUCT_CATEGORY1`
    FOREIGN KEY (`CATEGORY_ID_CATE`)
    REFERENCES `mydb`.`CATEGORY` (`ID_CATE`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CUSTOMER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CUSTOMER` (
  `UserName_CUST` NVARCHAR(50) NOT NULL COMMENT '',
  `Email_CUST` VARCHAR(50) NOT NULL COMMENT '',
  `PassHash_CUST` NVARCHAR(512) NOT NULL COMMENT '',
  `PassSalt_CUST` NVARCHAR(512) NOT NULL COMMENT '',
  `FName_CUST` VARCHAR(50) NULL COMMENT '',
  `LNAME_CUST` VARCHAR(100) NULL COMMENT '',
  `DOB_CUST` DATETIME NULL COMMENT '',
  `Gender_CUST` ENUM('Male', 'Female', 'Other') NULL COMMENT '',
  `Phone_CUST` INT(10) NULL COMMENT '',
  `DateCreated_CUST` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `LastAccessed_CUST` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  PRIMARY KEY (`UserName_CUST`)  COMMENT '',
  UNIQUE INDEX `UserName_CUST_UNIQUE` (`UserName_CUST` ASC)  COMMENT '',
  UNIQUE INDEX `Email_CUST_UNIQUE` (`Email_CUST` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`REVIEW`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`REVIEW` (
  `Rating_REVI` DECIMAL(3,2) NOT NULL COMMENT '',
  `Title_REVI` NVARCHAR(100) NULL COMMENT '',
  `Text_REVI` LONGTEXT NULL COMMENT '',
  `Date_REVI` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `PRODUCT_ID_PROD` INT NOT NULL COMMENT '',
  `CUSTOMER_UserName_CUST` NVARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`PRODUCT_ID_PROD`, `CUSTOMER_UserName_CUST`)  COMMENT '',
  INDEX `FK_REVIEW_CUSTOMER1_idx` (`CUSTOMER_UserName_CUST` ASC)  COMMENT '',
  CONSTRAINT `FK_REVIEW_PRODUCT1`
    FOREIGN KEY (`PRODUCT_ID_PROD`)
    REFERENCES `mydb`.`PRODUCT` (`ID_PROD`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_REVIEW_CUSTOMER1`
    FOREIGN KEY (`CUSTOMER_UserName_CUST`)
    REFERENCES `mydb`.`CUSTOMER` (`UserName_CUST`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ADMIN`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ADMIN` (
  `ID_ADMIN` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `UserName_ADMIN` NVARCHAR(50) NOT NULL COMMENT '',
  `PassHash_ADMIN` NVARCHAR(512) NOT NULL COMMENT '',
  `PassSalt_ADMIN` NVARCHAR(512) NOT NULL COMMENT '',
  `FName_ADMIN` NVARCHAR(50) NULL COMMENT '',
  `LName_ADMIN` NVARCHAR(100) NULL COMMENT '',
  `Email_ADMIN` NVARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`ID_ADMIN`)  COMMENT '',
  UNIQUE INDEX `UserName_ADMIN_UNIQUE` (`UserName_ADMIN` ASC)  COMMENT '',
  UNIQUE INDEX `Email_ADMIN_UNIQUE` (`Email_ADMIN` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ADDRESS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ADDRESS` (
  `Line1_ADDR` NVARCHAR(100) NOT NULL COMMENT '',
  `Line2_ADDR` NVARCHAR(100) NOT NULL COMMENT '',
  `Line3_ADDR` NVARCHAR(100) NOT NULL COMMENT '',
  `City_ADDR` NVARCHAR(30) NOT NULL COMMENT '',
  `PinCode_ADDR` INT(6) NOT NULL COMMENT '',
  `State_ADDR` NVARCHAR(50) NOT NULL COMMENT '',
  `Country_ADDR` NVARCHAR(50) NOT NULL COMMENT '',
  `CUSTOMER_UserName_CUST` NVARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`CUSTOMER_UserName_CUST`)  COMMENT '',
  CONSTRAINT `FK_ADDRESS_CUSTOMER1`
    FOREIGN KEY (`CUSTOMER_UserName_CUST`)
    REFERENCES `mydb`.`CUSTOMER` (`UserName_CUST`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ORDER`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ORDER` (
  `ID_ORDR` INT NOT NULL COMMENT '',
  `Date_ORDR` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT '',
  `BillingName_ORDR` NVARCHAR(150) NOT NULL COMMENT '',
  `Status_ORDR` ENUM('Placed', 'Processing', 'Accepted', 'Shipping', 'Delivered') NOT NULL COMMENT '',
  `OrderNumber_ORDR` INT NOT NULL COMMENT '',
  `Amount_ORDR` DECIMAL(10,2) NOT NULL COMMENT '',
  `CUSTOMER_UserName_CUST` NVARCHAR(50) NOT NULL COMMENT '',
  `ADDRESS_CUSTOMER_UserName_CUST` NVARCHAR(50) NOT NULL COMMENT '',
  UNIQUE INDEX `OrderNumber_ORDR_UNIQUE` (`OrderNumber_ORDR` ASC)  COMMENT '',
  PRIMARY KEY (`ID_ORDR`, `CUSTOMER_UserName_CUST`, `ADDRESS_CUSTOMER_UserName_CUST`)  COMMENT '',
  INDEX `FK_ORDER_ADDRESS1_idx` (`ADDRESS_CUSTOMER_UserName_CUST` ASC)  COMMENT '',
  CONSTRAINT `FK_ORDER_CUSTOMER1`
    FOREIGN KEY (`CUSTOMER_UserName_CUST`)
    REFERENCES `mydb`.`CUSTOMER` (`UserName_CUST`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `FK_ORDER_ADDRESS1`
    FOREIGN KEY (`ADDRESS_CUSTOMER_UserName_CUST`)
    REFERENCES `mydb`.`ADDRESS` (`CUSTOMER_UserName_CUST`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CART`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CART` (
  `NumOfItems_CART` INT NOT NULL COMMENT '',
  `TotalPrice_CART` DECIMAL(10,2) NOT NULL COMMENT '',
  `ORDER_CUSTOMER_UserName_CUST` NVARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`ORDER_CUSTOMER_UserName_CUST`)  COMMENT '',
  CONSTRAINT `FK_CART_ORDER1`
    FOREIGN KEY (`ORDER_CUSTOMER_UserName_CUST`)
    REFERENCES `mydb`.`ORDER` (`CUSTOMER_UserName_CUST`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CART_ITEM`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CART_ITEM` (
  `Quantity_ITEM` INT NOT NULL DEFAULT 1 COMMENT '',
  `CART_ORDER_CUSTOMER_UserName_CUST` NVARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`CART_ORDER_CUSTOMER_UserName_CUST`)  COMMENT '',
  CONSTRAINT `FK_CART_ITEM_CART1`
    FOREIGN KEY (`CART_ORDER_CUSTOMER_UserName_CUST`)
    REFERENCES `mydb`.`CART` (`ORDER_CUSTOMER_UserName_CUST`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
