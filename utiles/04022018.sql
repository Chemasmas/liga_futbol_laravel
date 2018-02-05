-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema ligabd
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `ligabd` ;

-- -----------------------------------------------------
-- Schema ligabd
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `ligabd` DEFAULT CHARACTER SET utf8 ;
USE `ligabd` ;

-- -----------------------------------------------------
-- Table `ligabd`.`usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`usuarios` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(20) NOT NULL,
  `password` VARCHAR(500) NOT NULL,
  `createdAt` DATE NULL DEFAULT NULL,
  `active` TINYINT(4) NOT NULL,
  `level` INT(11) NOT NULL,
  `remember_token` VARCHAR(600) NULL DEFAULT NULL,
  `updated_at` TIMESTAMP NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`administradores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`administradores` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`administradores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsr` INT(11) NOT NULL,
  `isSuper` TINYINT(4) NOT NULL DEFAULT '0',
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `correo` VARCHAR(45) NULL DEFAULT NULL,
  `telefono` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `idUsr`),
  INDEX `fk_Admins_Usuarios_idx` (`idUsr` ASC),
  CONSTRAINT `fk_Admins_Usuarios`
    FOREIGN KEY (`idUsr`)
    REFERENCES `ligabd`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`arbitros`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`arbitros` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`arbitros` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsr` INT(11) NOT NULL,
  `nombre` VARCHAR(100) NULL DEFAULT NULL,
  `telefono` VARCHAR(15) NULL DEFAULT NULL,
  `foto` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `idUsr`),
  INDEX `fk_Arbitros_Usuarios1_idx` (`idUsr` ASC),
  CONSTRAINT `fk_Arbitros_Usuarios1`
    FOREIGN KEY (`idUsr`)
    REFERENCES `ligabd`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`division`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`division` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`division` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL DEFAULT NULL,
  `genero` VARCHAR(45) NULL DEFAULT NULL,
  `orden` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 7
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`instituciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`instituciones` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`instituciones` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `dir` VARCHAR(200) NOT NULL,
  `mapa` TEXT NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`equipos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`equipos` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`equipos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idIst` INT(11) NOT NULL DEFAULT '0',
  `nombre` VARCHAR(100) NOT NULL,
  `foto` VARCHAR(100) NULL DEFAULT NULL,
  `idDivt` INT(11) NOT NULL,
  `nombreCoach` VARCHAR(100) NULL DEFAULT NULL,
  `nombreCoachAsistente` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `idIst`, `idDivt`),
  INDEX `fk_Equipos_Instituciones1_idx` (`idIst` ASC),
  INDEX `fk_equipos_categorias1_idx` (`idDivt` ASC),
  CONSTRAINT `fk_Equipos_Instituciones1`
    FOREIGN KEY (`idIst`)
    REFERENCES `ligabd`.`instituciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_equipos_categorias1`
    FOREIGN KEY (`idDivt`)
    REFERENCES `ligabd`.`division` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`jugadores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`jugadores` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`jugadores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsr` INT(11) NOT NULL,
  `idInst` INT(11) NOT NULL DEFAULT '0',
  `nombre` VARCHAR(100) NULL DEFAULT NULL,
  `fechaNac` DATE NULL DEFAULT NULL,
  `documento_identidad` VARCHAR(50) NULL DEFAULT NULL,
  `numero` INT(11) NULL DEFAULT NULL,
  `foto` VARCHAR(100) NULL DEFAULT NULL,
  `equipos_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`, `idUsr`, `idInst`),
  INDEX `fk_Jugadores_Usuarios1_idx` (`idUsr` ASC),
  INDEX `fk_Jugadores_Instituciones1_idx` (`idInst` ASC),
  INDEX `fk_jugadores_equipos1_idx` (`equipos_id` ASC),
  CONSTRAINT `fk_Jugadores_Instituciones1`
    FOREIGN KEY (`idInst`)
    REFERENCES `ligabd`.`instituciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Jugadores_Usuarios1`
    FOREIGN KEY (`idUsr`)
    REFERENCES `ligabd`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_jugadores_equipos1`
    FOREIGN KEY (`equipos_id`)
    REFERENCES `ligabd`.`equipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`estadisticas_jugador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`estadisticas_jugador` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`estadisticas_jugador` (
  `id` INT(11) NOT NULL,
  `idJugador` INT(11) NOT NULL,
  `goles` INT(10) UNSIGNED ZEROFILL NULL DEFAULT NULL,
  `t_rojas` INT(11) NULL DEFAULT NULL,
  `t_amarillas` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `idJugador`),
  INDEX `fk_estadisticas_jugador_jugadores1_idx` (`idJugador` ASC),
  CONSTRAINT `fk_estadisticas_jugador_jugadores1`
    FOREIGN KEY (`idJugador`)
    REFERENCES `ligabd`.`jugadores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`eventos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`eventos` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`eventos` (
  `id` INT(11) NOT NULL,
  `titulo` VARCHAR(45) NULL DEFAULT NULL,
  `descripcion` TEXT NULL DEFAULT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`torneo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`torneo` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`torneo` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(100) NOT NULL,
  `tipo_torneo` INT(11) NULL DEFAULT NULL,
  `id_division` INT(11) NOT NULL,
  `activo` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `id_division`),
  INDEX `fk_torneo_categorias1_idx` (`id_division` ASC),
  CONSTRAINT `fk_torneo_categorias1`
    FOREIGN KEY (`id_division`)
    REFERENCES `ligabd`.`division` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`participantes_torneo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`participantes_torneo` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`participantes_torneo` (
  `Torneo_id` INT(11) NOT NULL,
  `Equipos_id` INT(11) NOT NULL,
  `PartidosJugados` INT(11) NULL DEFAULT NULL,
  `PartidosGanados` INT(11) NULL DEFAULT NULL,
  `PartidosEmpatados` INT(11) NULL DEFAULT NULL,
  `GolesFavor` INT(11) NULL DEFAULT NULL,
  `GolesContra` INT(11) NULL DEFAULT NULL,
  `DiferenciaGoles` INT(11) NULL DEFAULT NULL,
  `Puntos` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`Torneo_id`, `Equipos_id`),
  INDEX `fk_Torneo_has_Equipos_Equipos1_idx` (`Equipos_id` ASC),
  INDEX `fk_Torneo_has_Equipos_Torneo1_idx` (`Torneo_id` ASC),
  CONSTRAINT `fk_Torneo_has_Equipos_Equipos1`
    FOREIGN KEY (`Equipos_id`)
    REFERENCES `ligabd`.`equipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Torneo_has_Equipos_Torneo1`
    FOREIGN KEY (`Torneo_id`)
    REFERENCES `ligabd`.`torneo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`partidos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`partidos` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`partidos` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `Torneo_id` INT(11) NOT NULL,
  `Local` INT(11) NOT NULL,
  `Visitante` INT(11) NOT NULL,
  `marcadorLocal` INT(11) NULL DEFAULT NULL,
  `marcadorVisitante` INT(11) NULL DEFAULT NULL,
  `horaDeJuego` DATETIME NULL DEFAULT NULL,
  `notas` TEXT NULL DEFAULT NULL,
  `campo` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `Torneo_id`, `Local`, `Visitante`),
  INDEX `fk_Partidos_Torneo1_idx` (`Torneo_id` ASC),
  INDEX `fk_Partidos_Equipos1_idx` (`Local` ASC),
  INDEX `fk_Partidos_Equipos2_idx` (`Visitante` ASC),
  CONSTRAINT `fk_Partidos_Equipos1`
    FOREIGN KEY (`Local`)
    REFERENCES `ligabd`.`equipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Partidos_Equipos2`
    FOREIGN KEY (`Visitante`)
    REFERENCES `ligabd`.`equipos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Partidos_Torneo1`
    FOREIGN KEY (`Torneo_id`)
    REFERENCES `ligabd`.`torneo` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `ligabd`.`programadores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `ligabd`.`programadores` ;

CREATE TABLE IF NOT EXISTS `ligabd`.`programadores` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `idUsr` INT(11) NOT NULL,
  `idInst` INT(11) NOT NULL DEFAULT '0',
  `nombre` VARCHAR(100) NULL DEFAULT NULL,
  `correo` VARCHAR(100) NULL DEFAULT NULL,
  `telefono` VARCHAR(20) NULL DEFAULT NULL,
  PRIMARY KEY (`id`, `idUsr`, `idInst`),
  INDEX `fk_Programadores_Usuarios1_idx` (`idUsr` ASC),
  INDEX `fk_Programadores_Instituciones1_idx` (`idInst` ASC),
  CONSTRAINT `fk_Programadores_Instituciones1`
    FOREIGN KEY (`idInst`)
    REFERENCES `ligabd`.`instituciones` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Programadores_Usuarios1`
    FOREIGN KEY (`idUsr`)
    REFERENCES `ligabd`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
