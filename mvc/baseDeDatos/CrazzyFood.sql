SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `CrazzyFood` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `CrazzyFood` ;

-- -----------------------------------------------------
-- Table `CrazzyFood`.`Tipo_Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Tipo_Cliente` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Cliente` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  `Apellido` VARCHAR(100) NOT NULL,
  `Email` VARCHAR(70) NOT NULL,
  `Numero_tarjeta` VARCHAR(45) NOT NULL,
  `Tipo_Cliente_Id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Cliente_Tipo_Cliente_idx` (`Tipo_Cliente_Id` ASC),
  CONSTRAINT `fk_Cliente_Tipo_Cliente`
    FOREIGN KEY (`Tipo_Cliente_Id`)
    REFERENCES `CrazzyFood`.`Tipo_Cliente` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Horario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Horario` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Hora_Entrada` DATE NOT NULL,
  `Hora_Cierre` DATE NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Marca` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Sucursal`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Sucursal` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Ruc` VARCHAR(13) NOT NULL,
  `Nombre` VARCHAR(100) NOT NULL,
  `Horario_ID` INT NOT NULL,
  `Marca_Id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Sucursal_Horario1_idx` (`Horario_ID` ASC),
  INDEX `fk_Sucursal_Marca1_idx` (`Marca_Id` ASC),
  CONSTRAINT `fk_Sucursal_Horario1`
    FOREIGN KEY (`Horario_ID`)
    REFERENCES `CrazzyFood`.`Horario` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Sucursal_Marca1`
    FOREIGN KEY (`Marca_Id`)
    REFERENCES `CrazzyFood`.`Marca` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Categoria` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Plato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Plato` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  `Precio` DOUBLE NOT NULL,
  `Descripcion` VARCHAR(200) NOT NULL,
  `imagen` BLOB NULL,
  `Categoria_Id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Plato_Categoria1_idx` (`Categoria_Id` ASC),
  CONSTRAINT `fk_Plato_Categoria1`
    FOREIGN KEY (`Categoria_Id`)
    REFERENCES `CrazzyFood`.`Categoria` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Menu`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Menu` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Id_sucursal` INT NOT NULL,
  `Id_plato` INT NOT NULL,
  `Sucursal_Id` INT NOT NULL,
  `Plato_Id` INT NOT NULL,
  PRIMARY KEY (`Id`, `Id_sucursal`, `Id_plato`),
  INDEX `fk_Menu_Sucursal1_idx` (`Sucursal_Id` ASC),
  INDEX `fk_Menu_Plato1_idx` (`Plato_Id` ASC),
  CONSTRAINT `fk_Menu_Sucursal1`
    FOREIGN KEY (`Sucursal_Id`)
    REFERENCES `CrazzyFood`.`Sucursal` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Menu_Plato1`
    FOREIGN KEY (`Plato_Id`)
    REFERENCES `CrazzyFood`.`Plato` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Ciudad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Ciudad` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Usuario` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Usuario` VARCHAR(100) NOT NULL,
  `Contraseña` VARCHAR(100) NOT NULL,
  `Cliente_Id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Usuario_Cliente1_idx` (`Cliente_Id` ASC),
  CONSTRAINT `fk_Usuario_Cliente1`
    FOREIGN KEY (`Cliente_Id`)
    REFERENCES `CrazzyFood`.`Cliente` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Marca` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Direccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Direccion` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `secuencia` INT NOT NULL,
  `Parroquia` VARCHAR(100) NOT NULL,
  `Calle_principal` VARCHAR(100) NOT NULL,
  `numero_domicilio` VARCHAR(100) NOT NULL,
  `descripcion` VARCHAR(300) NULL,
  `Cliente_Id` INT NOT NULL,
  `Ciudad_id` INT NOT NULL,
  `Sucursal_Id` INT NOT NULL,
  PRIMARY KEY (`Id`, `secuencia`),
  INDEX `fk_Direccion_Cliente1_idx` (`Cliente_Id` ASC),
  INDEX `fk_Direccion_Ciudad1_idx` (`Ciudad_id` ASC),
  INDEX `fk_Direccion_Sucursal1_idx` (`Sucursal_Id` ASC),
  CONSTRAINT `fk_Direccion_Cliente1`
    FOREIGN KEY (`Cliente_Id`)
    REFERENCES `CrazzyFood`.`Cliente` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Direccion_Ciudad1`
    FOREIGN KEY (`Ciudad_id`)
    REFERENCES `CrazzyFood`.`Ciudad` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Direccion_Sucursal1`
    FOREIGN KEY (`Sucursal_Id`)
    REFERENCES `CrazzyFood`.`Sucursal` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Telefono`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Telefono` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Secuencia` INT NOT NULL,
  `Numero` VARCHAR(10) NOT NULL,
  `Tipo` VARCHAR(45) NOT NULL,
  `Descripcion` VARCHAR(45) NOT NULL,
  `Cliente_Id` INT NOT NULL,
  `Sucursal_Id` INT NOT NULL,
  PRIMARY KEY (`id`, `Secuencia`),
  INDEX `fk_Telefono_Cliente1_idx` (`Cliente_Id` ASC),
  INDEX `fk_Telefono_Sucursal1_idx` (`Sucursal_Id` ASC),
  CONSTRAINT `fk_Telefono_Cliente1`
    FOREIGN KEY (`Cliente_Id`)
    REFERENCES `CrazzyFood`.`Cliente` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Telefono_Sucursal1`
    FOREIGN KEY (`Sucursal_Id`)
    REFERENCES `CrazzyFood`.`Sucursal` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Cabecera_Orden`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Cabecera_Orden` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Direccion_Entrega` VARCHAR(300) NOT NULL,
  `Referencia` VARCHAR(100) NOT NULL,
  `Telefono` VARCHAR(10) NOT NULL,
  `Usuario_Id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Cabecera_Orden_Usuario1_idx` (`Usuario_Id` ASC),
  CONSTRAINT `fk_Cabecera_Orden_Usuario1`
    FOREIGN KEY (`Usuario_Id`)
    REFERENCES `CrazzyFood`.`Usuario` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Detalle_Orden`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Detalle_Orden` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Linea` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `Total` DOUBLE NOT NULL,
  `Cabecera_Orden_Id` INT NOT NULL,
  `Plato_Id` INT NOT NULL,
  PRIMARY KEY (`Id`),
  INDEX `fk_Detalle_Orden_Cabecera_Orden1_idx` (`Cabecera_Orden_Id` ASC),
  INDEX `fk_Detalle_Orden_Plato1_idx` (`Plato_Id` ASC),
  CONSTRAINT `fk_Detalle_Orden_Cabecera_Orden1`
    FOREIGN KEY (`Cabecera_Orden_Id`)
    REFERENCES `CrazzyFood`.`Cabecera_Orden` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Detalle_Orden_Plato1`
    FOREIGN KEY (`Plato_Id`)
    REFERENCES `CrazzyFood`.`Plato` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `CrazzyFood`.`Ayuda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `CrazzyFood`.`Ayuda` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NOT NULL,
  `Email` VARCHAR(100) NOT NULL,
  `Mensaje` VARCHAR(500) NOT NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
