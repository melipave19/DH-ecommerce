-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema der
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema der
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `der` DEFAULT CHARACTER SET utf8 ;
USE `der` ;

-- -----------------------------------------------------
-- Table `der`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`categoria` (
  `idCategoria` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreCategoria` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`marca` (
  `idMarca` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreMarca` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idMarca`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`proveedor` (
  `idProveedor` INT(11) NOT NULL AUTO_INCREMENT,
  `razonSocial` VARCHAR(45) NULL DEFAULT NULL,
  `direccion` VARCHAR(45) NULL DEFAULT NULL,
  `localidad` INT(11) NULL DEFAULT NULL,
  `contacto` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idProveedor`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`equipo` (
  `idEquipo` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreEquipo` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  `categoria` INT(11) NULL DEFAULT NULL,
  `marca` INT(11) NULL DEFAULT NULL,
  `precio` FLOAT NULL DEFAULT NULL,
  `tamañoPantalla` INT(11) NULL DEFAULT NULL,
  `discoDuro` INT(11) NULL DEFAULT NULL,
  `stockDisponible` INT(11) NULL DEFAULT NULL,
  `proveedor` INT(11) NULL DEFAULT NULL,
  `estaEnOferta` TINYINT(4) NULL DEFAULT NULL,
  `habilitado` TINYINT(4) NOT NULL,
  PRIMARY KEY (`idEquipo`),
  INDEX `fk_categoria_idx` (`categoria` ASC),
  INDEX `fk_marca_idx` (`marca` ASC),
  INDEX `fk_proveedor_idx` (`proveedor` ASC),
  CONSTRAINT `fk_categoria`
    FOREIGN KEY (`categoria`)
    REFERENCES `der`.`categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_marca`
    FOREIGN KEY (`marca`)
    REFERENCES `der`.`marca` (`idMarca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proveedor`
    FOREIGN KEY (`proveedor`)
    REFERENCES `der`.`proveedor` (`idProveedor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`proceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`proceso` (
  `idProceso` INT(11) NOT NULL AUTO_INCREMENT,
  `generalVenta` TINYINT(4) NULL DEFAULT NULL,
  `agregarEquipoNuevo` TINYINT(4) NULL DEFAULT NULL,
  `consultarProductos` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`idProceso`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`rol` (
  `idRol` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreRol` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idRol`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`permisosporroles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`permisosporroles` (
  `idPermisos Por Roles` INT(11) NOT NULL AUTO_INCREMENT,
  `idProceso` INT(11) NULL DEFAULT NULL,
  `idRol` INT(11) NULL DEFAULT NULL,
  `fechaVencimiento` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`idPermisos Por Roles`),
  INDEX `fk_proceso_idx` (`idProceso` ASC),
  INDEX `fk_rol_idx` (`idRol` ASC),
  CONSTRAINT `fk_proceso`
    FOREIGN KEY (`idProceso`)
    REFERENCES `der`.`proceso` (`idProceso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rol`
    FOREIGN KEY (`idRol`)
    REFERENCES `der`.`rol` (`idRol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`persona` (
  `idPersona` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `apellido` VARCHAR(45) NULL DEFAULT NULL,
  `edad` INT(11) NULL DEFAULT NULL,
  `mail` VARCHAR(45) NULL DEFAULT NULL,
  `dni` INT(11) NULL DEFAULT NULL,
  `usuario` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `fechaNacimiento` DATE NULL DEFAULT NULL,
  `permisos` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idPersona`),
  INDEX `fk_permisos_idx` (`permisos` ASC),
  CONSTRAINT `fk_permisos`
    FOREIGN KEY (`permisos`)
    REFERENCES `der`.`permisosporroles` (`idPermisos Por Roles`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`estado` (
  `idEstado` INT(11) NOT NULL,
  `nombreEstado` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idEstado`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`pais` (
  `idPais` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrePais` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idPais`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`provincia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`provincia` (
  `idProvincia` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreProvincia` VARCHAR(45) NULL DEFAULT NULL,
  `pais` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idProvincia`),
  INDEX `fk_pais_idx` (`pais` ASC),
  CONSTRAINT `fk_pais`
    FOREIGN KEY (`pais`)
    REFERENCES `der`.`pais` (`idPais`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`localidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`localidad` (
  `idLocalidad` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreLocalidad` VARCHAR(45) NULL DEFAULT NULL,
  `codigoPostal` INT(11) NULL DEFAULT NULL,
  `provincia` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idLocalidad`),
  INDEX `fk_provincia_idx` (`provincia` ASC),
  CONSTRAINT `fk_provincia`
    FOREIGN KEY (`provincia`)
    REFERENCES `der`.`provincia` (`idProvincia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`tiposdeenvio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`tiposdeenvio` (
  `idTiposDeEnvio` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreTipoEnvio` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTiposDeEnvio`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`tiposdepago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`tiposdepago` (
  `idTiposDePago` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreTipoDePago` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idTiposDePago`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`venta` (
  `idVenta` INT(11) NOT NULL AUTO_INCREMENT,
  `nombreEmpresa` VARCHAR(50) NULL DEFAULT NULL,
  `fechaVenta` DATETIME NULL DEFAULT NULL,
  `numeroVenta` INT(11) NULL DEFAULT NULL,
  `idCliente` INT(11) NULL DEFAULT NULL,
  `tiposPago` INT(11) NULL DEFAULT NULL,
  `descuento` DOUBLE NULL DEFAULT NULL,
  `tiposEnvio` INT(11) NULL DEFAULT NULL,
  `direccionEnvio` VARCHAR(50) NULL DEFAULT NULL,
  `localidad` INT(11) NULL DEFAULT NULL,
  `estado` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idVenta`),
  INDEX `fk_cliente_idx` (`idCliente` ASC),
  INDEX `fk_tiposPago_idx` (`tiposPago` ASC),
  INDEX `fk_tiposEnvio_idx` (`tiposEnvio` ASC),
  INDEX `fk_localidad_idx` (`localidad` ASC),
  INDEX `fk_estado_idx` (`estado` ASC),
  CONSTRAINT `fk_cliente`
    FOREIGN KEY (`idCliente`)
    REFERENCES `der`.`persona` (`idPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estado`
    FOREIGN KEY (`estado`)
    REFERENCES `der`.`estado` (`idEstado`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_localidad`
    FOREIGN KEY (`localidad`)
    REFERENCES `der`.`localidad` (`idLocalidad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tiposEnvio`
    FOREIGN KEY (`tiposEnvio`)
    REFERENCES `der`.`tiposdeenvio` (`idTiposDeEnvio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tiposPago`
    FOREIGN KEY (`tiposPago`)
    REFERENCES `der`.`tiposdepago` (`idTiposDePago`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`detalleventa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`detalleventa` (
  `idDetalleVenta` INT(11) NOT NULL AUTO_INCREMENT,
  `idVenta` INT(11) NOT NULL,
  `equipo` INT(11) NOT NULL,
  `oferta` FLOAT NOT NULL,
  `cantidad` INT(11) NULL DEFAULT NULL,
  `precioConOferta` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`idDetalleVenta`, `idVenta`),
  INDEX `fk_equipo_idx` (`equipo` ASC),
  INDEX `fk_venta_idx` (`idVenta` ASC),
  CONSTRAINT `fk_equipo`
    FOREIGN KEY (`equipo`)
    REFERENCES `der`.`equipo` (`idEquipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venta`
    FOREIGN KEY (`idVenta`)
    REFERENCES `der`.`venta` (`idVenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`sesion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`sesion` (
  `idSession` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` INT(11) NULL DEFAULT NULL,
  `fechaInicio` DATE NULL DEFAULT NULL,
  `horaInicio` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`idSession`),
  INDEX `fk_usuario_idx` (`usuario` ASC),
  CONSTRAINT `fk_usuario`
    FOREIGN KEY (`usuario`)
    REFERENCES `der`.`persona` (`idPersona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
