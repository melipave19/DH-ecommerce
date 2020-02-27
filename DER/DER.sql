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
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`proceso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`proceso` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `generar_venta` TINYINT(4) NULL DEFAULT NULL,
  `agregar_equipo` TINYINT(4) NULL DEFAULT NULL,
  `consultar_productos` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`rol` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_rol` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`permisos_x_roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`permisos_x_roles` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_proceso` INT(11) NULL DEFAULT NULL,
  `id_rol` INT(11) NULL DEFAULT NULL,
  `fecha_vencimiento` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_proceso` (`id_proceso` ASC),
  INDEX `id_rol` (`id_rol` ASC),
  CONSTRAINT `permisos_x_roles_ibfk_1`
    FOREIGN KEY (`id_proceso`)
    REFERENCES `der`.`proceso` (`id`),
  CONSTRAINT `permisos_x_roles_ibfk_2`
    FOREIGN KEY (`id_rol`)
    REFERENCES `der`.`rol` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`imagen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`imagen` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_archivo` VARCHAR(50) NULL DEFAULT NULL,
  `extension_archivo` VARCHAR(15) NULL DEFAULT NULL,
  `tamaño_archivo` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`persona` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `apellido` VARCHAR(45) NULL DEFAULT NULL,
  `edad` INT(11) NULL DEFAULT NULL,
  `mail` VARCHAR(45) NULL DEFAULT NULL,
  `dni` INT(11) NULL DEFAULT NULL,
  `usuario` VARCHAR(45) NULL DEFAULT NULL,
  `password` VARCHAR(45) NULL DEFAULT NULL,
  `fecha_nacimiento` DATE NULL DEFAULT NULL,
  `id_permisos` INT(11) NULL DEFAULT NULL,
  `id_imagen` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_permisos` (`id_permisos` ASC),
  INDEX `id_imagen` (`id_imagen` ASC),
  CONSTRAINT `persona_ibfk_1`
    FOREIGN KEY (`id_permisos`)
    REFERENCES `der`.`permisos_x_roles` (`id`),
  CONSTRAINT `persona_ibfk_2`
    FOREIGN KEY (`id_imagen`)
    REFERENCES `der`.`imagen` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`tipo_pago`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`tipo_pago` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_pago` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`tipo_envio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`tipo_envio` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_envio` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`pais` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_pais` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`provincia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`provincia` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_provincia` VARCHAR(45) NULL DEFAULT NULL,
  `id_pais` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_pais` (`id_pais` ASC),
  CONSTRAINT `provincia_ibfk_1`
    FOREIGN KEY (`id_pais`)
    REFERENCES `der`.`pais` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`localidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`localidad` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_localidad` VARCHAR(45) NULL DEFAULT NULL,
  `codigo_postal` INT(11) NULL DEFAULT NULL,
  `id_provincia` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_provincia` (`id_provincia` ASC),
  CONSTRAINT `localidad_ibfk_1`
    FOREIGN KEY (`id_provincia`)
    REFERENCES `der`.`provincia` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`estado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`estado` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`venta` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_empresa` VARCHAR(50) NULL DEFAULT NULL,
  `fecha_venta` DATETIME NULL DEFAULT NULL,
  `numero_venta` INT(11) NULL DEFAULT NULL,
  `id_cliente` INT(11) NULL DEFAULT NULL,
  `id_tipoPago` INT(11) NULL DEFAULT NULL,
  `descuento` DOUBLE NULL DEFAULT NULL,
  `id_tipoEnvio` INT(11) NULL DEFAULT NULL,
  `direccionEnvio` VARCHAR(50) NULL DEFAULT NULL,
  `id_localidad` INT(11) NULL DEFAULT NULL,
  `id_estado` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_cliente` (`id_cliente` ASC),
  INDEX `id_tipoPago` (`id_tipoPago` ASC),
  INDEX `id_tipoEnvio` (`id_tipoEnvio` ASC),
  INDEX `id_localidad` (`id_localidad` ASC),
  INDEX `id_estado` (`id_estado` ASC),
  CONSTRAINT `venta_ibfk_1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `der`.`persona` (`id`),
  CONSTRAINT `venta_ibfk_2`
    FOREIGN KEY (`id_tipoPago`)
    REFERENCES `der`.`tipo_pago` (`id`),
  CONSTRAINT `venta_ibfk_3`
    FOREIGN KEY (`id_tipoEnvio`)
    REFERENCES `der`.`tipo_envio` (`id`),
  CONSTRAINT `venta_ibfk_4`
    FOREIGN KEY (`id_localidad`)
    REFERENCES `der`.`localidad` (`id`),
  CONSTRAINT `venta_ibfk_5`
    FOREIGN KEY (`id_estado`)
    REFERENCES `der`.`estado` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`marca` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_marca` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`proveedor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`proveedor` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `razon_social` VARCHAR(45) NULL DEFAULT NULL,
  `direccion` VARCHAR(45) NULL DEFAULT NULL,
  `id_localidad` INT(11) NULL DEFAULT NULL,
  `id_contacto` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `proveedor_ibfk_1` (`id_contacto` ASC),
  INDEX `proveedor_ibfk_2` (`id_localidad` ASC),
  CONSTRAINT `proveedor_ibfk_1`
    FOREIGN KEY (`id_contacto`)
    REFERENCES `der`.`persona` (`id`),
  CONSTRAINT `proveedor_ibfk_2`
    FOREIGN KEY (`id_localidad`)
    REFERENCES `der`.`localidad` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`equipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`equipo` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre_equipo` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` VARCHAR(45) NULL DEFAULT NULL,
  `id_categoria` INT(11) NULL DEFAULT NULL,
  `id_marca` INT(11) NULL DEFAULT NULL,
  `precio` FLOAT NULL DEFAULT NULL,
  `tamaño_pantalla` INT(11) NULL DEFAULT NULL,
  `disco_duro` INT(11) NULL DEFAULT NULL,
  `stock_disponible` INT(11) NULL DEFAULT NULL,
  `id_proveedor` INT(11) NULL DEFAULT NULL,
  `esta_en_oferta` TINYINT(4) NULL DEFAULT NULL,
  `habilitado` TINYINT(4) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_categoria` (`id_categoria` ASC),
  INDEX `id_marca` (`id_marca` ASC),
  INDEX `id_proveedor` (`id_proveedor` ASC),
  CONSTRAINT `equipo_ibfk_1`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `der`.`categoria` (`id`),
  CONSTRAINT `equipo_ibfk_2`
    FOREIGN KEY (`id_marca`)
    REFERENCES `der`.`marca` (`id`),
  CONSTRAINT `equipo_ibfk_3`
    FOREIGN KEY (`id_proveedor`)
    REFERENCES `der`.`proveedor` (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 14
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`detalleventa`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`detalleventa` (
  `id_detalleVenta` INT(11) NOT NULL AUTO_INCREMENT,
  `id_venta` INT(11) NOT NULL,
  `id_equipo` INT(11) NOT NULL,
  `oferta` FLOAT NOT NULL,
  `cantidad` INT(11) NULL DEFAULT NULL,
  `precio_con_oferta` FLOAT NULL DEFAULT NULL,
  PRIMARY KEY (`id_detalleVenta`, `id_venta`),
  INDEX `id_venta` (`id_venta` ASC),
  INDEX `id_equipo` (`id_equipo` ASC),
  CONSTRAINT `detalleventa_ibfk_1`
    FOREIGN KEY (`id_venta`)
    REFERENCES `der`.`venta` (`id`),
  CONSTRAINT `detalleventa_ibfk_2`
    FOREIGN KEY (`id_equipo`)
    REFERENCES `der`.`equipo` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`galeria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`galeria` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_equipo` INT(11) NULL DEFAULT NULL,
  `id_imagen` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_equipo` (`id_equipo` ASC),
  INDEX `id_imagen` (`id_imagen` ASC),
  CONSTRAINT `galeria_ibfk_1`
    FOREIGN KEY (`id_equipo`)
    REFERENCES `der`.`equipo` (`id`),
  CONSTRAINT `galeria_ibfk_2`
    FOREIGN KEY (`id_imagen`)
    REFERENCES `der`.`imagen` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `der`.`sesion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `der`.`sesion` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` INT(11) NULL DEFAULT NULL,
  `fecha_inicio` DATE NULL DEFAULT NULL,
  `hora_inicio` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `id_usuario` (`id_usuario` ASC),
  CONSTRAINT `sesion_ibfk_1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `der`.`persona` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
