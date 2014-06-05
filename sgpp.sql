drop table if exists alumno;

drop table if exists bitacora;

drop table if exists carrera;

drop table if exists comuna;

drop table if exists coordinador;

drop table if exists destino_eventos;

drop table if exists empresa;

drop table if exists eventos;

drop table if exists giro;

drop table if exists giro_empresas;

drop table if exists oferta_practica;

drop table if exists pais;

drop table if exists practica;

drop table if exists provincia;

drop table if exists region;

drop table if exists rubro;

drop table if exists secretaria;

drop table if exists supervisor;

drop table if exists tipo_practica;

/*==============================================================*/
/* Table: alumno                                                */
/*==============================================================*/
create table alumno
(
   ALU_RUT              varchar(12) not null,
   CAR_ID               int,
   ALU_PASSWORD         text,
   ALU_NOMBRES          varchar(30),
   ALU_APELLIDO_P       varchar(20),
   ALU_APELLIDO_M       varchar(20),
   ALU_EMAIL            varchar(30),
   ALU_CELULAR          varchar(11),
   ALU_TELEFONO         varchar(15),
   ALU_AGNIO_INGRESO    date,
   ALU_PERIODOS_CURSADOS int,
   ALU_DIRECCION        varchar(50),
   ALU_ESTADO           varchar(20),
   primary key (ALU_RUT)
);

/*==============================================================*/
/* Table: bitacora                                              */
/*==============================================================*/
create table bitacora
(
   BIT_ID               int not null auto_increment,
   BIT_FECHA            date not null,
   ALU_RUT              varchar(12) not null,
   PRA_ID               int,
   BIT_HORA             date,
   BIT_DESCRIPCION      text,
   BIT_ESTADO           varchar(10) default 'no leido',
   primary key (BIT_ID)
);

/*==============================================================*/
/* Table: carrera                                               */
/*==============================================================*/
create table carrera
(
   CAR_ID               int not null,
   CAR_NOMBRE           varchar(100),
   CAR_SEDE             varchar(10),
   primary key (CAR_ID)
);

/*==============================================================*/
/* Table: comuna                                                */
/*==============================================================*/
create table comuna
(
   COM_ID               int not null,
   PRO_ID               int not null,
   COM_NOMBRE           varchar(30) not null,
   primary key (COM_ID)
);

/*==============================================================*/
/* Table: coordinador                                           */
/*==============================================================*/
create table coordinador
(
   COO_RUT              varchar(12) not null,
   CAR_ID               int,
   COO_PASSWORD         text,
   COO_NOMBRES          varchar(30),
   COO_APELLIDO_P       varchar(20),
   COO_APELLIDO_M       varchar(20),
   COO_EMAIL            varchar(30),
   COO_TELEFONO         varchar(15),
   COO_CELULAR          varchar(11),
   COO_CARGO            varchar(20),
   COO_ESTADO           varchar(20),
   primary key (COO_RUT)
);

/*==============================================================*/
/* Table: destino_eventos                                       */
/*==============================================================*/
create table destino_eventos
(
   DES_ID               int not null auto_increment,
   EVE_ID               int not null,
   TPP_ID               int,
   primary key (DES_ID)
);

/*==============================================================*/
/* Table: empresa                                               */
/*==============================================================*/
create table empresa
(
   EMP_RUT              varchar(13) not null,
   COM_ID               int,
   EMP_NOMBRE           varchar(100),
   EMP_DIRECCION        varchar(50),
   EMP_TELEFONO         varchar(15),
   EMP_CELULAR          varchar(11),
   EMP_DESCRIPCION      varchar(100),
   EMP_EMAIL            varchar(30),
   EMP_WEB              varchar(50),
   primary key (EMP_RUT)
);

/*==============================================================*/
/* Table: eventos                                               */
/*==============================================================*/
create table eventos
(
   EVE_ID               int not null auto_increment,
   EVE_NOMBRE           varchar(50),
   EVE_DESCRIPCION      text,
   EVE_FECHA_PUBLICACION date,
   EVE_FECHA_CADUCA     date,
   EVE_HORA             time,
   EVE_ESTADO           varchar(20),
   primary key (EVE_ID)
);

/*==============================================================*/
/* Table: giro                                                  */
/*==============================================================*/
create table giro
(
   GIR_ID               int not null auto_increment,
   RUB_ID               int not null,
   GIR_CODIGO           VARCHAR(10),
   GIR_NOMBRE           VARCHAR(150),
   primary key (GIR_ID)
);

/*==============================================================*/
/* Table: giro_empresas                                         */
/*==============================================================*/
create table giro_empresas
(
   GIR_ID               int not null,
   EMP_RUT              VARCHAR(13) not null,
   primary key (GIR_ID, EMP_RUT)
);

/*==============================================================*/
/* Table: oferta_practica                                       */
/*==============================================================*/
create table oferta_practica
(
   OFE_ID               int not null auto_increment,
   EMP_RUT              varchar(13),
   SUP_ID               int,
   COO_RUT              varchar(12),
   TPP_ID               int,
   OFE_NOMBRE           varchar(50),
   OFE_DESCRIPCION      text,
   OFE_ESTADO           varchar(20),
   OFE_CUPOS            int,
   OFE_FECHA_PUBLICACION date,
   OFE_FECHA_CADUCA     date,
   OFE_TAREAS           text,
   OFE_AREA_TRABAJO     varchar(50),
   primary key (OFE_ID)
);

/*==============================================================*/
/* Table: pais                                                  */
/*==============================================================*/
create table pais
(
   PAIS_ID              int not null,
   PAIS_NOMBRE          varchar(20) not null,
   primary key (PAIS_ID)
);

/*==============================================================*/
/* Table: practica                                              */
/*==============================================================*/
create table practica
(
   PRA_ID               int not null auto_increment,
   ALU_RUT              varchar(12) not null,
   OFE_ID               int not null,
   PRA_FECHA_INI        date,
   PRA_FECHA_FIN        date,
   PRA_INF_EVALUACION   text,
   PRA_INF_ALUMNO       text,
   PRA_NOTA             float,
   PRA_CANT_HORAS       int,
   PRA_ESTADO           varchar(20),
   primary key (PRA_ID)
);

/*==============================================================*/
/* Table: provincia                                             */
/*==============================================================*/
create table provincia
(
   PRO_ID               int not null,
   REG_ID               int not null,
   PRO_NOMBRE           varchar(30) not null,
   primary key (PRO_ID)
);

/*==============================================================*/
/* Table: region                                                */
/*==============================================================*/
create table region
(
   REG_ID               int not null,
   PAIS_ID              int,
   REG_NOMBRE           varchar(30) not null,
   REG_SIMBOLO          varchar(5) not null,
   primary key (REG_ID)
);

/*==============================================================*/
/* Table: rubro                                                 */
/*==============================================================*/
create table rubro
(
   RUB_ID               int not null auto_increment,
   RUB_NOMBRE           VARCHAR(150),
   RUB_PADRE            int,
   primary key (RUB_ID)
);

/*==============================================================*/
/* Table: secretaria                                            */
/*==============================================================*/
create table secretaria
(
   SEC_RUT              varchar(12) not null,
   SEC_PASSWORD         text,
   SEC_NOMBRES          varchar(30),
   SEC_APELLIDO_P       varchar(20),
   SEC_APELLIDO_M       varchar(20),
   SEC_EMAIL            varchar(30),
   SEC_TELEFONO         varchar(15),
   SEC_CELULAR          varchar(11),
   SEC_ESTADO           varchar(20),
   primary key (SEC_RUT)
);

/*==============================================================*/
/* Table: supervisor                                            */
/*==============================================================*/
create table supervisor
(
   SUP_ID               int not null auto_increment,
   SUP_RUT              varchar(12) not null,
   EMP_RUT              varchar(13) not null,
   SUP_PASSWORD         text,
   SUP_NOMBRES          varchar(30),
   SUP_APELLIDO_P       varchar(20),
   SUP_APELLIDO_M       varchar(20),
   SUP_EMAIL            varchar(30),
   SUP_TELEFONO         varchar(15),
   SUP_CELULAR          varchar(11),
   SUP_ESTADO           varchar(20),
   SUP_PROFESION        varchar(50),
   SUP_CARGO            varchar(30),
   primary key (SUP_ID)
);

/*==============================================================*/
/* Table: tipo_practica                                         */
/*==============================================================*/
create table tipo_practica
(
   TPP_ID               int not null auto_increment,
   TPP_CODIGO           int not null,
   CAR_ID               int,
   TTP_NOMBRE           varchar(30),
   primary key (TPP_ID)
);


/*
   Cruge Data Model
   ----------------

   lista de tablas de Cruge.

   aqui van dos grupos:

      1. aquellas propias de Cruge.

      2. aquellas del paquete de autenticacion oficial del Yii, pero con una modificacion minima.

   tablas:
      cruge_system, cruge_user, cruge_session, cruge_field, cruge_fieldvalue
         @author: Christian Salazar H. <christiansalazarh@gmail.com> @salazarchris74

      cruge_authitem, cruge_authitemchild, cruge_authassignment
         paquete original de Yii, pero con modificaciones en cruge_authassignment
         para relacionarla con cruge_user (foregin key on delete cascade), ademas
         de cambiarle el tipo de clave del iduser de VARCHAR(64) a INT
*/
CREATE TABLE `cruge_system` (
  `idsystem` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NULL ,
  `largename` VARCHAR(45) NULL ,
  `sessionmaxdurationmins` INT(11) NULL DEFAULT 30 ,
  `sessionmaxsameipconnections` INT(11) NULL DEFAULT 10 ,
  `sessionreusesessions` INT(11) NULL DEFAULT 1 COMMENT '1yes 0no' ,
  `sessionmaxsessionsperday` INT(11) NULL DEFAULT -1 ,
  `sessionmaxsessionsperuser` INT(11) NULL DEFAULT -1 ,
  `systemnonewsessions` INT(11) NULL DEFAULT 0 COMMENT '1yes 0no' ,
  `systemdown` INT(11) NULL DEFAULT 0 ,
  `registerusingcaptcha` INT(11) NULL DEFAULT 0 ,
  `registerusingterms` INT(11) NULL DEFAULT 0 ,
  `terms` BLOB NULL ,
  `registerusingactivation` INT(11) NULL DEFAULT 1 ,
  `defaultroleforregistration` VARCHAR(64) NULL ,
  `registerusingtermslabel` VARCHAR(100) NULL ,
  `registrationonlogin` INT(11) NULL DEFAULT 1 ,
  PRIMARY KEY (`idsystem`) )
ENGINE = InnoDB;


CREATE TABLE `cruge_session` (
  `idsession` INT NOT NULL AUTO_INCREMENT ,
  `iduser` INT NOT NULL ,
  `created` BIGINT(30) NULL ,
  `expire` BIGINT(30) NULL ,
  `status` INT(11) NULL DEFAULT 0 ,
  `ipaddress` VARCHAR(45) NULL ,
  `usagecount` INT(11) NULL DEFAULT 0 ,
  `lastusage` BIGINT(30) NULL ,
  `logoutdate` BIGINT(30) NULL ,
  `ipaddressout` VARCHAR(45) NULL ,
  PRIMARY KEY (`idsession`) ,
  INDEX `crugesession_iduser` (`iduser` ASC) )
ENGINE = InnoDB;

CREATE  TABLE `cruge_user` (
  `iduser` INT NOT NULL AUTO_INCREMENT ,
  `regdate` BIGINT(30) NULL ,
  `actdate` BIGINT(30) NULL ,
  `logondate` BIGINT(30) NULL ,
  `username` VARCHAR(64) NULL ,
  `email` VARCHAR(45) NULL ,
  `password` VARCHAR(64) NULL COMMENT 'Hashed password' ,
  `authkey` VARCHAR(100) NULL COMMENT 'llave de autentificacion' ,
  `state` INT(11) NULL DEFAULT 0 ,
  `totalsessioncounter` INT(11) NULL DEFAULT 0 ,
  `currentsessioncounter` INT(11) NULL DEFAULT 0 ,
  PRIMARY KEY (`iduser`) )
ENGINE = InnoDB;

delete from `cruge_user`;
ALTER TABLE `cruge_user` AUTO_INCREMENT = 1;
insert into `cruge_user`(username, email, password, state) values
 ('admin', 'admin@tucorreo.com','admin',1)
 ,('invitado', 'invitado','nopassword',1)
;
ALTER TABLE `cruge_user` AUTO_INCREMENT = 10;
delete from `cruge_system`;
INSERT INTO `cruge_system` (`idsystem`,`name`,`largename`,`sessionmaxdurationmins`,`sessionmaxsameipconnections`,`sessionreusesessions`,`sessionmaxsessionsperday`,`sessionmaxsessionsperuser`,`systemnonewsessions`,`systemdown`,`registerusingcaptcha`,`registerusingterms`,`terms`,`registerusingactivation`,`defaultroleforregistration`,`registerusingtermslabel`,`registrationonlogin`) VALUES
 (1,'default',NULL,30,10,1,-1,-1,0,0,0,0,'',0,'','',1);



CREATE  TABLE `cruge_field` (
  `idfield` INT NOT NULL AUTO_INCREMENT ,
  `fieldname` VARCHAR(20) NOT NULL ,
  `longname` VARCHAR(50) NULL ,
  `position` INT(11) NULL DEFAULT 0 ,
  `required` INT(11) NULL DEFAULT 0 ,
  `fieldtype` INT(11) NULL DEFAULT 0 ,
  `fieldsize` INT(11) NULL DEFAULT 20 ,
  `maxlength` INT(11) NULL DEFAULT 45 ,
  `showinreports` INT(11) NULL DEFAULT 0 ,
  `useregexp` VARCHAR(512) NULL ,
  `useregexpmsg` VARCHAR(512) NULL ,
  `predetvalue` MEDIUMBLOB NULL ,
  PRIMARY KEY (`idfield`) )
ENGINE = InnoDB;

CREATE  TABLE `cruge_fieldvalue` (
  `idfieldvalue` INT NOT NULL AUTO_INCREMENT ,
  `iduser` INT NOT NULL ,
  `idfield` INT NOT NULL ,
  `value` BLOB NULL ,
  PRIMARY KEY (`idfieldvalue`) ,
  INDEX `fk_cruge_fieldvalue_cruge_user1` (`iduser` ASC) ,
  INDEX `fk_cruge_fieldvalue_cruge_field1` (`idfield` ASC) ,
  CONSTRAINT `fk_cruge_fieldvalue_cruge_user1`
    FOREIGN KEY (`iduser` )
    REFERENCES `cruge_user` (`iduser` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_fieldvalue_cruge_field1`
    FOREIGN KEY (`idfield` )
    REFERENCES `cruge_field` (`idfield` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE `cruge_authitem` (
  `name` VARCHAR(64) NOT NULL ,
  `type` INT(11) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `bizrule` TEXT NULL DEFAULT NULL ,
  `data` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`name`) )
ENGINE = InnoDB;

CREATE TABLE `cruge_authassignment` (
  `userid` INT NOT NULL ,
  `bizrule` TEXT NULL DEFAULT NULL ,
  `data` TEXT NULL DEFAULT NULL ,
  `itemname` VARCHAR(64) NOT NULL ,
  PRIMARY KEY (`userid`, `itemname`) ,
  INDEX `fk_cruge_authassignment_cruge_authitem1` (`itemname` ASC) ,
  INDEX `fk_cruge_authassignment_user` (`userid` ASC) ,
  CONSTRAINT `fk_cruge_authassignment_cruge_authitem1`
    FOREIGN KEY (`itemname` )
    REFERENCES `cruge_authitem` (`name` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cruge_authassignment_user`
    FOREIGN KEY (`userid` )
    REFERENCES `cruge_user` (`iduser` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


CREATE TABLE `cruge_authitemchild` (
  `parent` VARCHAR(64) NOT NULL ,
  `child` VARCHAR(64) NOT NULL ,
  PRIMARY KEY (`parent`, `child`) ,
  INDEX `child` (`child` ASC) ,
  CONSTRAINT `crugeauthitemchild_ibfk_1`
    FOREIGN KEY (`parent` )
    REFERENCES `cruge_authitem` (`name` )
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `crugeauthitemchild_ibfk_2`
    FOREIGN KEY (`child` )
    REFERENCES `cruge_authitem` (`name` )
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;

alter table alumno add constraint fk_alumno_carrera foreign key (CAR_ID)
      references carrera (CAR_ID) on delete cascade on update cascade;

alter table bitacora add constraint fk_bitacora_alumno foreign key (ALU_RUT)
      references alumno (ALU_RUT) on delete cascade on update cascade;

alter table bitacora add constraint fk_bitacora_practica foreign key (PRA_ID)
      references practica (PRA_ID) on delete cascade on update cascade;

alter table comuna add constraint fk_comuna_provincia foreign key (PRO_ID)
      references provincia (PRO_ID) on delete cascade on update cascade;

alter table coordinador add constraint fk_coordinador_carrera foreign key (CAR_ID)
      references carrera (CAR_ID) on delete cascade on update cascade;

alter table destino_eventos add constraint fk_destino_eventos_tipo_practica foreign key (TPP_ID)
      references tipo_practica (TPP_ID) on delete cascade on update cascade;

alter table destino_eventos add constraint fk_destino_eventos_eventos foreign key (EVE_ID)
      references eventos (EVE_ID) on delete cascade on update cascade;

alter table empresa add constraint fk_empresa_comuna foreign key (COM_ID)
      references comuna (COM_ID) on delete cascade on update cascade;

alter table giro add constraint fk_giro_rubro foreign key (RUB_ID)
      references rubro (RUB_ID) on delete cascade on update cascade;

alter table giro_empresas add constraint fk_giro_empresas_empresa foreign key (EMP_RUT)
      references empresa (EMP_RUT) on delete cascade on update cascade;

alter table giro_empresas add constraint fk_giro_empresas_giro foreign key (GIR_ID)
      references giro (GIR_ID) on delete cascade on update cascade;

alter table oferta_practica add constraint fk_oferta_practica_empresa foreign key (EMP_RUT)
      references empresa (EMP_RUT) on delete cascade on update cascade;

alter table oferta_practica add constraint fk_oferta_practica_supervisor foreign key (SUP_ID)
      references supervisor (SUP_ID) on delete cascade on update cascade;

alter table oferta_practica add constraint fk_oferta_practica_coordinador foreign key (COO_RUT)
      references coordinador (COO_RUT) on delete cascade on update cascade;

alter table oferta_practica add constraint fk_oferta_practica_tipo_practica foreign key (TPP_ID)
      references tipo_practica (TPP_ID) on delete cascade on update cascade;

alter table practica add constraint fk_practica_alumno foreign key (ALU_RUT)
      references alumno (ALU_RUT) on delete cascade on update cascade;

alter table practica add constraint fk_practica_oferta_practica foreign key (OFE_ID)
      references oferta_practica (OFE_ID) on delete cascade on update cascade;

alter table provincia add constraint fk_provincia_region foreign key (REG_ID)
      references region (REG_ID) on delete cascade on update cascade;

alter table region add constraint fk_region_pais foreign key (PAIS_ID)
      references pais (PAIS_ID) on delete restrict on update restrict;

alter table supervisor add constraint fk_supervisor_empresa foreign key (EMP_RUT)
      references empresa (EMP_RUT) on delete restrict on update restrict;

alter table tipo_practica add constraint fk_tipo_practica_carrera foreign key (CAR_ID)
      references carrera (CAR_ID) on delete cascade on update cascade;


INSERT INTO pais (PAIS_ID, PAIS_NOMBRE)VALUES
(1, 'CHILE');

INSERT INTO region (REG_ID, PAIS_ID, REG_NOMBRE, REG_SIMBOLO) VALUES
( 1, 1, 'ARICA Y PARINACOTA' , 'XV' ),
( 2, 1, 'TARAPACA' , 'I' ),
( 3, 1, 'ANTOFAGASTA' , 'II' ),
( 4, 1, 'ATACAMA' , 'III' ),
( 5, 1, 'COQUIMBO' , 'IV' ),
( 6, 1, 'VALPARAISO' , 'V' ),
( 7, 1, 'METROPOLITANA' , 'RM' ),
( 8, 1, 'OHIGGINS' , 'VI' ),
( 9, 1, 'MAULE' , 'VII' ),
( 10, 1, 'BIO-BIO' , 'VIII' ),
( 11, 1, 'LA ARAUCANIA' , 'IX' ),
( 12, 1, 'LOS RIOS' , 'XIV' ),
( 13, 1, 'LOS LAGOS' , 'X' ),
( 14, 1, 'AYSEN' , 'XI' ),
( 15, 1, 'MAGALLANES Y ANTARTICA' , 'XII' );


INSERT INTO provincia (PRO_ID, REG_ID, PRO_NOMBRE) VALUES
( 1, 1, 'Arica'),
( 2, 1, 'Parinacota'),
( 3, 2, 'Iquique'),
( 4, 2, 'Tamarugal'),
( 5, 3, 'Tocopilla'),
( 6, 3, 'El Loa'),
( 7, 3, 'Antofagasta'),
( 8, 4, 'Chañaral'),
( 9, 4, 'Copiapó'),
( 10, 4, 'Huasco'),
( 11, 5, 'Elqui'),
( 12, 5, 'Limarí'),
( 13, 5, 'Choapa'),
( 14, 6, 'Petorca'),
( 15, 6, 'Los Andes'),
( 16, 6, 'San Felipe de Aconcagua'),
( 17, 6, 'Quillota'),
( 18, 6, 'Valparaíso'),
( 19, 6, 'San Antonio'),
( 20, 6, 'Isla de Pascua'),
( 21, 6, 'Marga Marga'),
( 22, 7, 'Chacabuco'),
( 23, 7, 'Santiago'),
( 24, 7, 'Cordillera'),
( 25, 7, 'Maipo'),
( 26, 7, 'Melipilla'),
( 27, 7, 'Talagante'),
( 28, 8, 'Cachapoal'),
( 29, 8, 'Colchagua'),
( 30, 8, 'Cardenal Caro'),
( 31, 9, 'Curicó'),
( 32, 9, 'Talca'),
( 33, 9, 'Linares'),
( 34, 9, 'Cauquenes'),
( 35, 10, 'Ñuble'),
( 36, 10, 'Biobío'),
( 37, 10, 'Concepción'),
( 38, 10, 'Arauco'),
( 39, 11, 'Malleco'),
( 40, 11, 'Cautín'),
( 41, 12, 'Valdivia'),
( 42, 12, 'Ranco'),
( 43, 13, 'Osorno'),
( 44, 13, 'Llanquihue'),
( 45, 13, 'Chiloé'),
( 46, 13, 'Palena'),
( 47, 14, 'Coyhaique'),
( 48, 14, 'Aysén'),
( 49, 14, 'General Carrera'),
( 50, 14, 'Capitán Prat'),
( 51, 15, 'Última Esperanza'),
( 52, 15, 'Magallanes'),
( 53, 15, 'Tierra del Fuego'),
( 54, 15, 'Antártica Chilena');

INSERT INTO comuna (COM_ID, PRO_ID, COM_NOMBRE) VALUES
( 1,1,'Arica'),
( 2,1,'Camarones'),
( 3,2,'Putre'),
( 4,2,'General Lagos'),
( 5,3,'Iquique'),
( 6,3,'Alto Hospicio'),
( 7,4,'Pozo Almonte'),
( 8,4,'Camiña'),
( 9,4,'Colchane'),
( 10,4,'Huara'),
( 11,4,'Pica'),
( 12,5,'Tocopilla'),
( 13,5,'María Elena'),
( 14,6,'Calama'),
( 15,6,'Ollagüe'),
( 16,6,'San Pedro de Atacama'),
( 17,7,'Antofagasta'),
( 18,7,'Mejillones'),
( 19,7,'Sierra Gorda'),
( 20,7,'Taltal'),
( 21,8,'Chañaral'),
( 22,8,'Diego de Almagro'),
( 23,9,'Copiapó'),
( 24,9,'Caldera'),
( 25,9,'Tierra Amarilla'),
( 26,10,'Vallenar'),
( 27,10,'Alto del Carmen'),
( 28,10,'Freirina'),
( 29,10,'Huasco'),
( 30,11,'La Serena'),
( 31,11,'Coquimbo'),
( 32,11,'Andacollo'),
( 33,11,'La Higuera'),
( 34,11,'Paiguano'),
( 35,11,'Vicuña'),
( 36,12,'Ovalle'),
( 37,12,'Combarbalá'),
( 38,12,'Monte Patria'),
( 39,12,'Punitaqui'),
( 40,12,'Río Hurtado'),
( 41,13,'Illapel'),
( 42,13,'Canela'),
( 43,13,'Los Vilos'),
( 44,13,'Salamanca'),
( 45,14,'La Ligua'),
( 46,14,'Cabildo'),
( 47,14,'Papudo'),
( 48,14,'Petorca'),
( 49,14,'Zapallar'),
( 50,15,'Los Andes'),
( 51,15,'Calle Larga'),
( 52,15,'Rinconada'),
( 53,15,'San Esteban'),
( 54,16,'San Felipe'),
( 55,16,'Catemu'),
( 56,16,'Llaillay'),
( 57,16,'Panquehue'),
( 58,16,'Putaendo'),
( 59,16,'Santa María'),
( 60,17,'Quillota'),
( 61,17,'Calera'),
( 62,17,'Hijuelas'),
( 63,17,'La Cruz'),
( 64,17,'Nogales'),
( 65,18,'Valparaíso'),
( 66,18,'Casablanca'),
( 67,18,'Concón'),
( 68,18,'Juan Fernández'),
( 69,18,'Puchuncaví'),
( 70,18,'Quintero'),
( 71,18,'Viña del Mar'),
( 72,19,'San Antonio'),
( 73,19,'Algarrobo'),
( 74,19,'Cartagena'),
( 75,19,'El Quisco'),
( 76,19,'El Tabo'),
( 77,19,'Santo Domingo'),
( 78,20,'Isla de Pascua'),
( 79,21,'Quilpué'),
( 80,21,'Limache'),
( 81,21,'Olmué'),
( 82,21,'Villa Alemana'),
( 83,22,'Colina'),
( 84,22,'Lampa'),
( 85,22,'Tiltil'),
( 86,23,'Santiago'),
( 87,23,'Cerrillos'),
( 88,23,'Cerro Navia'),
( 89,23,'Conchalí'),
( 90,23,'El Bosque'),
( 91,23,'Estación Central'),
( 92,23,'Huechuraba'),
( 93,23,'Independencia'),
( 94,23,'La Cisterna'),
( 95,23,'La Florida'),
( 96,23,'La Granja'),
( 97,23,'La Pintana'),
( 98,23,'La Reina'),
( 99,23,'Las Condes'),
( 100,23,'Lo Barnechea'),
( 101,23,'Lo Espejo'),
( 102,23,'Lo Prado'),
( 103,23,'Macul'),
( 104,23,'Maipú'),
( 105,23,'Ñuñoa'),
( 106,23,'Pedro Aguirre Cerda'),
( 107,23,'Peñalolén'),
( 108,23,'Providencia'),
( 109,23,'Pudahuel'),
( 110,23,'Quilicura'),
( 111,23,'Quinta Normal'),
( 112,23,'Recoleta'),
( 113,23,'Renca'),
( 114,23,'San Joaquín'),
( 115,23,'San Miguel'),
( 116,23,'San Ramón'),
( 117,23,'Vitacura'),
( 118,24,'Puente Alto'),
( 119,24,'Pirque'),
( 120,24,'San José de Maipo'),
( 121,25,'San Bernardo'),
( 122,25,'Buin'),
( 123,25,'Calera de Tango'),
( 124,25,'Paine'),
( 125,26,'Melipilla'),
( 126,26,'Alhué'),
( 127,26,'Curacaví'),
( 128,26,'María Pinto'),
( 129,26,'San Pedro'),
( 130,27,'Talagante'),
( 131,27,'El Monte'),
( 132,27,'Isla de Maipo'),
( 133,27,'Padre Hurtado'),
( 134,27,'Peñaflor'),
( 135,28,'Rancagua'),
( 136,28,'Codegua'),
( 137,28,'Coinco'),
( 138,28,'Coltauco'),
( 139,28,'Doñihue'),
( 140,28,'Graneros'),
( 141,28,'Las Cabras'),
( 142,28,'Machalí'),
( 143,28,'Malloa'),
( 144,28,'Mostazal'),
( 145,28,'Olivar'),
( 146,28,'Peumo'),
( 147,28,'Pichidegua'),
( 148,28,'Quinta de Tilcoco'),
( 149,28,'Rengo'),
( 150,28,'Requínoa'),
( 151,28,'San Vicente'),
( 152,29,'San Fernando'),
( 153,29,'Chépica'),
( 154,29,'Chimbarongo'),
( 155,29,'Lolol'),
( 156,29,'Nancagua'),
( 157,29,'Palmilla'),
( 158,29,'Peralillo'),
( 159,29,'Placilla'),
( 160,29,'Pumanque'),
( 161,29,'Santa Cruz'),
( 162,30,'Pichilemu'),
( 163,30,'La Estrella'),
( 164,30,'Litueche'),
( 165,30,'Marchihue'),
( 166,30,'Navidad'),
( 167,30,'Paredones'),
( 168,31,'Curicó'),
( 169,31,'Hualañé'),
( 170,31,'Licantén'),
( 171,31,'Molina'),
( 172,31,'Rauco'),
( 173,31,'Romeral'),
( 174,31,'Sagrada Familia'),
( 175,31,'Teno'),
( 176,31,'Vichuquén'),
( 177,32,'Talca'),
( 178,32,'Constitución'),
( 179,32,'Curepto'),
( 180,32,'Empedrado'),
( 181,32,'Maule'),
( 182,32,'Pelarco'),
( 183,32,'Pencahue'),
( 184,32,'Río Claro'),
( 185,32,'San Clemente'),
( 186,32,'San Rafael'),
( 187,33,'Linares'),
( 188,33,'Colbún'),
( 189,33,'Longaví'),
( 190,33,'Parral'),
( 191,33,'Retiro'),
( 192,33,'San Javier'),
( 193,33,'Villa Alegre'),
( 194,33,'Yerbas Buenas'),
( 195,34,'Cauquenes'),
( 196,34,'Chanco'),
( 197,34,'Pelluhue'),
( 198,35,'Chillán'),
( 199,35,'Bulnes'),
( 200,35,'Cobquecura'),
( 201,35,'Coelemu'),
( 202,35,'Coihueco'),
( 203,35,'Chillán Viejo'),
( 204,35,'El Carmen'),
( 205,35,'Ninhue'),
( 206,35,'Ñiquén'),
( 207,35,'Pemuco'),
( 208,35,'Pinto'),
( 209,35,'Portezuelo'),
( 210,35,'Quillón'),
( 211,35,'Quirihue'),
( 212,35,'Ránquil'),
( 213,35,'San Carlos'),
( 214,35,'San Fabián'),
( 215,35,'San Ignacio'),
( 216,35,'San Nicolás'),
( 217,35,'Treguaco'),
( 218,35,'Yungay'),
( 219,36,'Los Ángeles'),
( 220,36,'Antuco'),
( 221,36,'Cabrero'),
( 222,36,'Laja'),
( 223,36,'Mulchén'),
( 224,36,'Nacimiento'),
( 225,36,'Negrete'),
( 226,36,'Quilaco'),
( 227,36,'Quilleco'),
( 228,36,'San Rosendo'),
( 229,36,'Santa Bárbara'),
( 230,36,'Tucapel'),
( 231,36,'Yumbel'),
( 232,36,'Alto Biobío'),
( 233,37,'Concepción'),
( 234,37,'Coronel'),
( 235,37,'Chiguayante'),
( 236,37,'Florida'),
( 237,37,'Hualqui'),
( 238,37,'Lota'),
( 239,37,'Penco'),
( 240,37,'San Pedro de La Paz'),
( 241,37,'Santa Juana'),
( 242,37,'Talcahuano'),
( 243,37,'Tomé'),
( 244,37,'Hualpén'),
( 245,38,'Lebu'),
( 246,38,'Arauco'),
( 247,38,'Cañete'),
( 248,38,'Contulmo'),
( 249,38,'Curanilahue'),
( 250,38,'Los Álamos'),
( 251,38,'Tirúa'),
( 252,39,'Angol'),
( 253,39,'Collipulli'),
( 254,39,'Curacautín'),
( 255,39,'Ercilla'),
( 256,39,'Lonquimay'),
( 257,39,'Los Sauces'),
( 258,39,'Lumaco'),
( 259,39,'Purén'),
( 260,39,'Renaico'),
( 261,39,'Traiguén'),
( 262,39,'Victoria'),
( 263,40,'Temuco'),
( 264,40,'Carahue'),
( 265,40,'Cunco'),
( 266,40,'Curarrehue'),
( 267,40,'Freire'),
( 268,40,'Galvarino'),
( 269,40,'Gorbea'),
( 270,40,'Lautaro'),
( 271,40,'Loncoche'),
( 272,40,'Melipeuco'),
( 273,40,'Nueva Imperial'),
( 274,40,'Padre Las Casas'),
( 275,40,'Perquenco'),
( 276,40,'Pitrufquén'),
( 277,40,'Pucón'),
( 278,40,'Saavedra'),
( 279,40,'Teodoro Schmidt'),
( 280,40,'Toltén'),
( 281,40,'Vilcún'),
( 282,40,'Villarrica'),
( 283,40,'Cholchol'),
( 284,41,'Valdivia'),
( 285,41,'Corral'),
( 286,41,'Lanco'),
( 287,41,'Los Lagos'),
( 288,41,'Máfil'),
( 289,41,'Mariquina'),
( 290,41,'Paillaco'),
( 291,41,'Panguipulli'),
( 292,42,'La Unión'),
( 293,42,'Futrono'),
( 294,42,'Lago Ranco'),
( 295,42,'Río Bueno'),
( 296,43,'Osorno'),
( 297,43,'Puerto Octay'),
( 298,43,'Purranque'),
( 299,43,'Puyehue'),
( 300,43,'Río Negro'),
( 301,43,'San Juan de la Costa'),
( 302,43,'San Pablo'),
( 303,44,'Puerto Montt'),
( 304,44,'Calbuco'),
( 305,44,'Cochamó'),
( 306,44,'Fresia'),
( 307,44,'Frutillar'),
( 308,44,'Los Muermos'),
( 309,44,'Llanquihue'),
( 310,44,'Maullín'),
( 311,44,'Puerto Varas'),
( 312,45,'Castro'),
( 313,45,'Ancud'),
( 314,45,'Chonchi'),
( 315,45,'Curaco de Vélez'),
( 316,45,'Dalcahue'),
( 317,45,'Puqueldón'),
( 318,45,'Queilén'),
( 319,45,'Quellón'),
( 320,45,'Quemchi'),
( 321,45,'Quinchao'),
( 322,46,'Chaitén'),
( 323,46,'Futaleufú'),
( 324,46,'Hualaihué'),
( 325,46,'Palena'),
( 326,47,'Coyhaique'),
( 327,47,'Lago Verde'),
( 328,48,'Aysén'),
( 329,48,'Cisnes'),
( 330,48,'Guaitecas'),
( 331,49,'Chile Chico'),
( 332,49,'Río Ibáñez'),
( 333,50,'Cochrane'),
( 334,50,'O''Higgins'),
( 335,50,'Tortel'),
( 336,51,'Natales'),
( 337,51,'Torres del Paine'),
( 338,52,'Punta Arenas'),
( 339,52,'Laguna Blanca'),
( 340,52,'Río Verde'),
( 341,52,'San Gregorio'),
( 342,53,'Porvenir'),
( 343,53,'Primavera'),
( 344,53,'Timaukel'),
( 345,54,'Cabo de Hornos'),
( 346,54,'Antártica');



INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29001', 'Arquitectura', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29004', 'Diseño Industrial', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29005', 'Ingeniería en Construcción', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29010', 'Trabajo Social', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29015', 'Bachillerato en Ciencias', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29018', 'Ingeniería Estadística', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29019', 'Ingeniería Civil Química', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29020', 'Ingeniería Civil Industrial', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29021', 'Ingeniería Civil', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29024', 'Ingeniería Civil en Industrias de la Madera', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29026', 'Ingeniería Civil Mecánica', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29027', 'Ingeniería Civil en Informática', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29028', 'Ingeniería Civil en Automatización', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29029', 'Ingeniería Civil Eléctrica', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29030', 'Ingeniería de Ejecución en Electricidad', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29032', 'Ingeniería de Ejecución en Mecánica', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29035', 'Ingeniería de Ejecución en Electrónica', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29037', 'Ingeniería de Ejecución en Computación e Informática', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29045', 'Contador Público y Auditor', 'Concepción');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29049', 'Ingeniería Comercial', 'Concepción');


INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29051', 'Ingeniería en Alimentos', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29052', 'Enfermería', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29054', 'Nutrición y Dietética', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29055', 'Fonoaudiología', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29057', 'Ingeniería Civil en Informática', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29059', 'Ingeniería Comercial', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29063', 'Contador Público y Auditor', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29064', 'Diseño Gráfico', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29066', 'Trabajo Social', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29067', 'Psicología', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29068', 'Bachillerato en Ciencias', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29069', 'Ingeniería en Recursos Naturales', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29071', 'Pedagogía en Educación Física', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29072', 'Pedagogía en Castellano y Comunicación', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29073', 'Pedagogía en Ciencias Naturales', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29076', 'Pedagogía en Inglés', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29078', 'Pedagogía en Historia y Geografía', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29080', 'Pedagogía en Educación Parvularia', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29082', 'Pedagogía en Educación General Básica', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29083', 'Pedagogía en Educación Básica con especialidad en Lenguaje y Comunicación o Educación Matemática', 'Chillán');

INSERT INTO carrera(CAR_ID, CAR_NOMBRE, CAR_SEDE)
VALUES('29086', 'Pedagogía en Educación Matemática', 'Chillán');





INSERT INTO `tipo_practica` (`TPP_ID`, `TPP_CODIGO`, `CAR_ID`, `TTP_NOMBRE`) VALUES
(1, 1, 29037, 'Practica Profesional I');



DELIMITER |

CREATE TRIGGER descontar_cupo BEFORE INSERT ON practica
FOR EACH
ROW
BEGIN
UPDATE oferta_practica SET OFE_CUPOS = OFE_CUPOS -1 WHERE OFE_ID = new.OFE_ID;

END ;
|

DELIMITER ;

INSERT INTO rubro (rub_id, rub_nombre, rub_padre) VALUES
(1,'AGRICULTURA, GANADERÍA, CAZA Y SILVICULTURA ',NULL),
(19,'CULTIVOS EN GENERAL; CULTIVO DE PRODUCTOS DE MERCADO; HORTICULTURA' ,1),
(20,'CRÍA DE ANIMALES',1),
(21,'CULTIVO PROD. AGRÍCOLAS EN COMBINACIÓN CON CRÍA DE ANIMALES' ,1),
(22,'ACTIVIDADES DE SERVICIOS AGRÍCOLAS Y GANADEROS' ,1),
(23,'CAZA ORDINARIA Y MEDIANTE TRAMPAS, REPOBLACIÓN, ACT. SERVICIO CONEXAS',1),
(24,'SILVICULTURA, EXTRACCIÓN DE MADERA Y ACTIVIDADES DE SERVICIOS CONEXAS',1),
(2,'PESCA' ,NULL),
(25,'EXPLT. DE CRIADEROS DE PECES Y PROD. DEL MAR; SERVICIOS RELACIONADOS' ,2),
(26,'PESCA EXTRACTIVA: Y SERVICIOS RELACIONADOS' ,2),
(3,'EXPLOTACIÓN DE MINAS Y CANTERAS' ,NULL),
(27,'EXTRACCIÓN, AGLOMERACIÓN DE CARBÓN DE PIEDRA, LIGNITO Y TURBA ',3),
(28,'EXTRACCIÓN DE PETRÓLEO CRUDO Y GAS NATURAL; ACTIVIDADES RELACIONADAS' ,3),
(29,'EXTRACCIÓN DE MINERALES METALÍFEROS' ,3),
(30,'EXPLOTACIÓN DE MINAS Y CANTERAS' ,3),
(4,'INDUSTRIAS MANUFACTURERAS NO METÁLICAS' ,NULL),
(31,'PRODUCCIÓN, PROCESAMIENTO Y CONSERVACIÓN DE ALIMENTOS ',4),
(32,'ELABORACIÓN DE PRODUCTOS LÁCTEOS' ,4),
(33,'ELAB. DE PROD. DE MOLINERÍA, ALMIDONES Y PROD. DERIVADOS DEL ALMIDÓN ',4),
(34,'ELABORACIÓN DE OTROS PRODUCTOS ALIMENTICIOS' ,4),
(35,'ELABORACIÓN DE BEBIDAS' ,4),
(36,'ELABORACIÓN DE PRODUCTOS DEL TABACO' ,4),
(37,'HILANDERÍA, TEJEDURA Y ACABADO DE PRODUCTOS TEXTILES ',4),
(38,'FABRICACIÓN DE OTROS PRODUCTOS TEXTILES' ,4),
(39,'FABRICACIÓN DE TEJIDOS Y ARTÍCULOS DE PUNTO Y GANCHILLO' ,4),
(40,'FABRICACIÓN DE PRENDAS DE VESTIR; EXCEPTO PRENDAS DE PIEL' ,4),
(41,'PROCESAMIENTO Y FABRICACIÓN DE ARTÍCULOS DE PIEL Y CUERO' ,4),
(42,'FABRICACIÓN DE CALZADO' ,4),
(43,'ASERRADO Y ACEPILLADURA DE MADERAS' ,4),
(44,'FAB. DE PRODUCTOS DE MADERA Y CORCHO,  PAJA Y DE MATERIALES TRENZABLES ',4),
(45,'FABRICACIÓN DE PAPEL Y PRODUCTOS DEL PAPEL' ,4),
(46,'ACTIVIDADES DE EDICIÓN' ,4),
(47,'ACTIVIDADES DE IMPRESIÓN Y DE SERVICIOS CONEXOS' ,4),
(48,'FABRICACIÓN DE PRODUCTOS DE HORNOS COQUE Y DE REFINACIÓN DE PETRÓLEO' ,4),
(49,'ELABORACIÓN DE COMBUSTIBLE NUCLEAR' ,4),
(50,'FABRICACIÓN DE SUSTANCIAS QUÍMICAS BÁSICAS' ,4),
(51,'FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS' ,4),
(52,'FABRICACIÓN DE FIBRAS MANUFACTURADAS' ,4),
(53,'FABRICACIÓN DE PRODUCTOS DE CAUCHO' ,4),
(54,'FABRICACIÓN DE PRODUCTOS DE PLÁSTICO' ,4),
(55,'FABRICACIÓN DE VIDRIOS Y PRODUCTOS DE VIDRIO' ,4),
(56,'FABRICACIÓN DE PRODUCTOS MINERALES NO METÁLICOS N.C.P.' ,4),
(5,'INDUSTRIAS MANUFACTURERAS METÁLICAS' ,NULL),
(57,'INDUSTRIAS BÁSICAS DE HIERRO Y ACERO' ,5),
(58,'FAB. DE PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y METALES NO FERROSOS' ,5),
(59,'FUNDICIÓN DE METALES' ,5),
(60,'FAB. DE PROD. METÁLICOS PARA USO ESTRUCTURAL' ,5),
(61,'FAB. DE OTROS PROD. ELABORADOS DE METAL; ACT. DE TRABAJO DE METALES' ,5),
(62,'FABRICACIÓN DE MAQUINARIA DE USO GENERAL' ,5),
(63,'FABRICACIÓN DE MAQUINARIA DE USO ESPECIAL' ,5),
(64,'FABRICACIÓN DE APARATOS DE USO DOMÉSTICO N.C.P.' ,5),
(65,'FABRICACIÓN DE MAQUINARIA DE OFICINA, CONTABILIDAD E INFORMÁTICA ',5),
(66,'FAB. Y REPARACIÓN DE MOTORES, GENERADORES Y TRANSFORMADORES ELÉCTRICOS ',5),
(67,'FABRICACIÓN DE APARATOS DE DISTRIBUCIÓN Y CONTROL; SUS REPARACIONES' ,5),
(68,'FABRICACIÓN DE HILOS Y CABLES AISLADOS' ,5),
(69,'FABRICACIÓN DE ACUMULADORES DE PILAS Y BATERÍAS PRIMARIAS' ,5),
(70,'FABRICACIÓN Y REPARACIÓN DE LÁMPARAS Y EQUIPO DE ILUMINACIÓN' ,5),
(71,'FABRICACIÓN Y REPARACIÓN DE OTROS TIPOS DE EQUIPO ELÉCTRICO N.C.P.' ,5),
(72,'FABRICACIÓN DE COMPONENTES ELECTRÓNICOS; SUS REPARACIONES' ,5),
(73,'FAB. Y REPARACIÓN DE TRANSMISORES DE RADIO, TELEVISIÓN, TELEFONÍA ',5),
(74,'FAB. DE RECEPTORES DE RADIO, TELEVISIÓN, APARATOS DE AUDIO/VÍDEO ',5),
(75,'FAB. DE APARATOS E INSTRUMENTOS MÉDICOS Y PARA REALIZAR MEDICIONES' ,5),
(76,'FAB. Y REPARACIÓN DE INSTRUMENTOS DE ÓPTICA Y EQUIPO FOTOGRÁFICO' ,5),
(77,'FABRICACIÓN DE RELOJES' ,5),
(78,'FABRICACIÓN DE VEHÍCULOS AUTOMOTORES' ,5),
(79,'CONSTRUCCIÓN Y REPARACIÓN DE BUQUES Y OTRAS EMBARCACIONES' ,5),
(80,'FAB. DE LOCOMOTORAS Y MATERIAL RODANTE PARA FERROCARRILES Y TRANVÍAS' ,5),
(81,'FABRICACIÓN DE AERONAVES Y NAVES ESPACIALES; SUS REPARACIONES' ,5),
(82,'FABRICACIÓN DE OTROS TIPOS DE EQUIPO DE TRANSPORTE N.C.P.' ,5),
(83,'FABRICACIÓN DE MUEBLES' ,5),
(84,'INDUSTRIAS MANUFACTURERAS N.C.P.' ,5),
(85,'RECICLAMIENTO DE DESPERDICIOS Y DESECHOS' ,5),
(6,'SUMINISTRO DE ELECTRICIDAD, GAS Y AGUA ',NULL),
(86,'GENERACIÓN, CAPTACIÓN Y DISTRIBUCIÓN DE ENERGÍA ELÉCTRICA ',6),
(87,'FABRICACIÓN DE GAS; DISTRIBUCIÓN DE COMBUSTIBLES GASEOSOS POR TUBERÍAS' ,6),
(88,'SUMINISTRO DE VAPOR Y AGUA CALIENTE' ,6),
(89,'CAPTACIÓN, DEPURACIÓN Y DISTRIBUCIÓN DE AGUA ',6),
(7,'CONSTRUCCIÓN' ,NULL),
(90,'CONSTRUCCIÓN' ,7),
(8,'COMERCIO AL POR MAYOR Y MENOR; REP. VEH.AUTOMOTORES/ENSERES DOMÉSTICOS' ,NULL),
(91,'VENTA DE VEHÍCULOS AUTOMOTORES' ,8),
(92,'MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS AUTOMOTORES' ,8),
(93,'VENTA DE PARTES, PIEZAS Y ACCESORIOS DE VEHÍCULOS AUTOMOTORES ',8),
(94,'VENTA, MANTENIMIENTO Y REPARACIÓN DE MOTOCICLETAS Y SUS PARTES ',8),
(95,'VENTA AL POR MENOR DE COMBUSTIBLE PARA AUTOMOTORES' ,8),
(96,'VENTA AL POR MAYOR A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATA' ,8),
(97,'VENTA AL POR MAYOR DE MATERIAS PRIMAS AGROPECUARIAS' ,8),
(98,'VENTA AL POR MAYOR DE ENSERES DOMÉSTICOS' ,8),
(99,'VENTA AL POR MAYOR DE PRODUCTOS INTERMEDIOS, DESECHOS NO AGROPECUARIOS ',8),
(100,'VENTA AL POR MAYOR DE MAQUINARIA, EQUIPO Y MATERIALES CONEXOS ',8),
(101,'VENTA AL POR MAYOR DE OTROS PRODUCTOS' ,8),
(102,'COMERCIO AL POR MENOR NO ESPECIALIZADO EN ALMACENES' ,8),
(103,'VENTA POR MENOR DE ALIMENTOS, BEBIDAS, TABACOS EN ALMC. ESPECIALIZADOS ',8),
(104,'COMERCIO AL POR MENOR DE OTROS PROD. NUEVOS EN ALMC. ESPECIALIZADOS' ,8),
(105,'VENTA AL POR MENOR EN ALMACENES DE ARTÍCULOS USADOS' ,8),
(106,'COMERCIO AL POR MENOR NO REALIZADO EN ALMACENES' ,8),
(107,'REPARACIÓN DE EFECTOS PERSONALES Y ENSERES DOMÉSTICOS' ,8),
(9,'HOTELES Y RESTAURANTES' ,NULL),
(108,'HOTELES; CAMPAMENTOS Y OTROS TIPOS DE HOSPEDAJE TEMPORAL' ,9),
(109,'RESTAURANTES, BARES Y CANTINAS ',9),
(10,'TRANSPORTE, ALMACENAMIENTO Y COMUNICACIONES ',NULL),
(110,'TRANSPORTE POR FERROCARRILES' ,10),
(111,'OTROS TIPOS DE TRANSPORTE POR VÍA TERRESTRE' ,10),
(112,'TRANSPORTE POR TUBERÍAS' ,10),
(113,'TRANSPORTE MARÍTIMO Y DE CABOTAJE' ,10),
(114,'TRANSPORTE POR VÍAS DE NAVEGACIÓN INTERIORES' ,10),
(115,'TRANSPORTE POR VÍA AÉREA',10),
(116,'ACT. DE TRANSPORTE COMPLEMENTARIAS Y AUXILIARES; AGENCIAS DE VIAJE' ,10),
(117,'ACTIVIDADES POSTALES Y DE CORREO' ,10),
(118,'TELECOMUNICACIONES' ,10),
(11,'INTERMEDIACIÓN FINANCIERA' ,NULL),
(119,'INTERMEDIACIÓN MONETARIA' ,11),
(120,'OTROS TIPOS DE INTERMEDIACIÓN FINANCIERA' ,11),
(121,'FINANCIACIÓN PLANES DE SEG. Y DE PENSIONES, EXCEPTO AFILIACIÓN OBLIG. ',11),
(122,'ACT. AUX. DE LA INTERMEDIACIÓN FINANCIERA, EXCEPTO PLANES DE SEGUROS ',11),
(123,'ACT. AUXILIARES DE FINANCIACIÓN DE PLANES DE SEGUROS Y DE PENSIONES' ,11),
(12,'ACTIVIDADES INMOBILIARIAS, EMPRESARIALES Y DE ALQUILER ',NULL),
(124,'ACTIVIDADES INMOBILIARIAS REALIZADAS CON BIENES PROPIOS O ARRENDADOS' ,12),
(125,'ACT. INMOBILIARIAS REALIZADAS A CAMBIO DE RETRIBUCIÓN O POR CONTRATA' ,12),
(126,'ALQUILER EQUIPO DE TRANSPORTE' ,12),
(127,'ALQUILER DE OTROS TIPOS DE MAQUINARIA Y EQUIPO' ,12),
(128,'ALQUILER DE EFECTOS PERSONALES Y ENSERES DOMÉSTICOS N.C.P.' ,12),
(129,'SERVICIOS INFORMÁTICOS' ,12),
(130,'MANTENIMIENTO Y REPARACIÓN DE MAQUINARIA DE OFICINA' ,12),
(131,'ACTIVIDADES DE INVESTIGACIONES Y DESARROLLO EXPERIMENTAL' ,12),
(132,'ACTIVIDADES JURÍDICAS Y DE ASESORAMIENTO EMPRESARIAL EN GENERAL' ,12),
(133,'ACTIVIDADES DE ARQUITECTURA E INGENIERÍA Y OTRAS ACTIVIDADES TÉCNICAS' ,12),
(134,'PUBLICIDAD' ,12),
(135,'ACT. EMPRESARIALES Y DE PROFESIONALES PRESTADAS A EMPRESAS N.C.P.' ,12),
(13,'ADM. PUBLICA Y DEFENSA; PLANES DE SEG. SOCIAL AFILIACIÓN OBLIGATORIA' ,NULL),
(136,'GOBIERNO CENTRAL Y ADMINISTRACIÓN PÚBLICA' ,13),
(137,'ACTIVIDADES DE PLANES DE SEGURIDAD SOCIAL DE AFILIACIÓN OBLIGATORIA' ,13),
(14,'ENSEÑANZA' ,NULL),
(138,'ENSEÑANZA PREESCOLAR, PRIMARIA, SECUNDARIA Y SUPERIOR ; PROFESORES ',14),
(15,'SERVICIOS SOCIALES Y DE SALUD' ,NULL),
(139,'ACTIVIDADES RELACIONADAS CON LA SALUD HUMANA' ,15),
(140,'ACTIVIDADES VETERINARIAS' ,15),
(141,'ACTIVIDADES DE SERVICIOS SOCIALES' ,15),
(16,'OTRAS ACTIVIDADES DE SERVICIOS COMUNITARIAS, SOCIALES Y PERSONALES ',NULL),
(142,'ELIMINACIÓN DE DESPERDICIOS Y AGUAS RESIDUALES, SANEAMIENTO ',16),
(143,'ACT. DE ORGANIZACIONES EMPRESARIALES, PROFESIONALES Y DE EMPLEADORES ',16),
(144,'ACTIVIDADES DE SINDICATOS Y DE OTRAS ORGANIZACIONES' ,16),
(145,'ACT. DE CINEMATOGRAFÍA, RADIO Y TV Y OTRAS ACT. DE ENTRETENIMIENTO ',16),
(146,'ACTIVIDADES DE AGENCIAS DE NOTICIAS Y SERVICIOS PERIODÍSTICOS' ,16),
(147,'ACTIVIDADES DE BIBLIOTECAS, ARCHIVOS Y MUSEOS Y OTRAS ACT. CULTURALES ',16),
(148,'ACTIVIDADES DEPORTIVAS Y OTRAS ACTIVIDADES DE ESPARCIMIENTO' ,16),
(149,'OTRAS ACTIVIDADES DE SERVICIOS' ,16),
(17,'CONSEJO DE ADMINISTRACIÓN DE EDIFICIOS Y CONDOMINIOS' ,NULL),
(150,'CONSEJO DE ADMINISTRACIÓN DE EDIFICIOS Y CONDOMINIOS' ,17),
(18,'ORGANIZACIONES Y ÓRGANOS EXTRATERRITORIALES' ,NULL),
(151,'ORGANIZACIONES Y ÓRGANOS EXTRATERRITORIALES' ,18);


INSERT INTO giro(gir_id, rub_id, gir_codigo, gir_nombre) VALUES
(1,19,11111,'CULTIVO DE TRIGO'),
(2,19,11112,'CULTIVO DE MAIZ'),
(3,19,11113,'CULTIVO DE AVENA'),
(4,19,11114,'CULTIVO DE ARROZ'),
(5,19,11115,'CULTIVO DE CEBADA'),
(6,19,11119,'CULTIVO DE OTROS CEREALES'),
(7,19,11121,'CULTIVO FORRAJEROS EN PRADERAS NATURALES'),
(8,19,11122,'CULTIVO FORRAJEROS EN PRADERAS MEJORADAS O SEMBRADAS'),
(9,19,11131,'CULTIVO DE POROTOS O FRIJOL'),
(10,19,11132,'CULTIVO, PRODUCCIÓN DE LUPINO'),
(11,19,11139,'CULTIVO DE OTRAS LEGUMBRES'),
(12,19,11141,'CULTIVO DE PAPAS'),
(13,19,11142,'CULTIVO DE CAMOTES O BATATAS'),
(14,19,11149,'CULTIVO DE OTROS TUBÉRCULOS N.C.P'),
(15,19,11151,'CULTIVO DE RAPS'),
(16,19,11152,'CULTIVO DE MARAVILLA'),
(17,19,11159,'CULTIVO DE OTRAS OLEAGINOSAS N.C.P.'),
(18,19,11160,'PRODUCCIÓN DE SEMILLAS DE CEREALES, LEGUMBRES, OLEAGINOSAS'),
(19,19,11191,'CULTIVO DE REMOLACHA'),
(20,19,11192,'CULTIVO DE TABACO'),
(21,19,11193,'CULTIVO DE FIBRAS VEGETALES INDUSTRIALES'),
(22,19,11194,'CULTIVO DE PLANTAS AROMÁTICAS O MEDICINALES'),
(23,19,11199,'OTROS CULTIVOS N.C.P.'),
(24,19,11211,'CULTIVO TRADICIONAL DE HORTALIZAS FRESCAS'),
(25,19,11212,'CULTIVO DE HORTALIZAS EN INVERNADEROS Y CULTIVOS HIDROPONICOS'),
(26,19,11213,'CULTIVO ORGÁNICO DE HORTALIZAS'),
(27,19,11220,'CULTIVO DE PLANTAS VIVAS Y PRODUCTOS DE LA FLORICULTURA'),
(28,19,11230,'PRODUCCIÓN DE SEMILLAS DE FLORES, PRADOS, FRUTAS Y HORTALIZAS'),
(29,19,11240,'PRODUCCIÓN EN VIVEROS; EXCEPTO ESPECIES FORESTALES'),
(30,19,11250,'CULTIVO Y RECOLECCIÓN DE HONGOS, TRUFAS Y SAVIA; PRODUCCIÓN DE JARABE DE ARCE DE AZÚCAR Y AZÚCAR'),
(31,19,11311,'CULTIVO DE UVA DESTINADA A PRODUCCIÓN DE PISCO Y AGUARDIENTE'),
(32,19,11312,'CULTIVO DE UVA DESTINADA A PRODUCCIÓN DE VINO'),
(33,19,11313,'CULTIVO DE UVA DE MESA'),
(34,19,11321,'CULTIVO DE FRUTALES EN ÁRBOLES O ARBUSTOS CON CICLO DE VIDA MAYOR A UNA TEMPORADA'),
(35,19,11322,'CULTIVO DE FRUTALES MENORES EN PLANTAS CON CICLO DE VIDA DE UNA TEMPORADA'),
(36,19,11330,'CULTIVO DE PLANTAS CUYAS HOJAS O FRUTAS SE UTILIZAN PARA PREPARAR BEBIDAS'),
(37,19,11340,'CULTIVO DE ESPECIAS'),
(38,20,12111,'CRÍA DE GANADO BOVINO PARA LA PRODUCCIÓN LECHERA'),
(39,20,12112,'CRÍA DE GANADO PARA PRODUCCIÓN DE CARNE, O COMO GANADO REPRODUCTOR'),
(40,20,12120,'CRÍA DE GANADO OVINO Y/O EXPLOTACIÓN LANERA'),
(41,20,12130,'CRÍA DE EQUINOS (CABALLARES, MULARES)'),
(42,20,12210,'CRÍA DE PORCINOS'),
(43,20,12221,'CRÍA DE AVES DE CORRAL PARA LA PRODUCCIÓN DE CARNE'),
(44,20,12222,'CRÍA DE AVES DE CORRAL PARA LA PRODUCCIÓN DE HUEVOS'),
(45,20,12223,'CRÍA DE AVES FINAS O NO TRADICIONALES'),
(46,20,12230,'CRÍA DE ANIMALES DOMÉSTICOS; PERROS Y GATOS'),
(47,20,12240,'APICULTURA'),
(48,20,12250,'RANICULTURA, HELICICULTURA U OTRA ACTIVIDAD CON ANIMALES MENORES O INSECTOS'),
(49,20,12290,'OTRAS EXPLOTACIONES DE ANIMALES NO CLASIFICADOS EN OTRA PARTE, INCLUIDO SUS SUBPRODUCTOS'),
(50,21,13000,'EXPLOTACIÓN MIXTA'),
(51,22,14011,'SERVICIO DE CORTE Y ENFARDADO DE FORRAJE'),
(52,22,14012,'SERVICIO DE RECOLECCIÓN, EMPACADO, TRILLA, DESCASCARAMIENTO Y DESGRANE; Y SIMILARES'),
(53,22,14013,'SERVICIO DE ROTURACIÓN SIEMBRA Y SIMILARES'),
(54,22,14014,'DESTRUCCIÓN DE PLAGAS; PULVERIZACIONES, FUMIGACIONES U OTRAS'),
(55,22,14015,'COSECHA, PODA, AMARRE Y LABORES DE ADECUACIÓN DE LA PLANTA U OTRAS'),
(56,22,14019,'OTROS SERVICIOS AGRÍCOLAS N.C.P.'),
(57,22,14021,'SERVICIOS DE ADIESTRAMIENTO, GUARDERÍA Y CUIDADOS DE MASCOTAS; EXCEPTO ACTIVIDADES VETERINARIAS'),
(58,22,14022,'SERVICIOS GANADEROS, EXCEPTO ACTIVIDADES VETERINARIAS'),
(59,23,15010,'CAZA DE MAMÍFEROS MARINOS; EXCEPTO BALLENAS'),
(60,23,15090,'CAZA ORDINARIA Y MEDIANTE TRAMPAS, Y ACTIVIDADES DE SERVICIOS CONEXAS'),
(61,24,20010,'EXPLOTACIÓN DE BOSQUES'),
(62,24,20020,'RECOLECCIÓN DE PRODUCTOS FORESTALES SILVESTRES'),
(63,24,20030,'EXPLOTACIÓN DE VIVEROS DE ESPECIES FORESTALES'),
(64,24,20041,'SERVICIOS DE FORESTACIÓN'),
(65,24,20042,'SERVICIOS DE CORTA DE MADERA'),
(66,24,20043,'SERVICIOS DE CONTROL DE INCENDIOS FORESTALES'),
(67,24,20049,'OTRAS ACTIVIDADES DE SERVICIOS CONEXAS A LA SILVICULTURA N.C.P.'),
(68,25,51010,'CULTIVO DE ESPECIES ACUÁTICAS EN CUERPO DE AGUA DULCE'),
(69,25,51020,'REPRODUCCIÓN Y CRIANZAS DE PECES MARINOS'),
(70,25,51030,'CULTIVO, REPRODUCCIÓN Y CRECIMIENTOS DE VEGETALES ACUÁTICOS'),
(71,25,51040,'REPRODUCCIÓN Y CRÍA DE MOLUSCOS Y CRUSTACEOS.'),
(72,25,51090,'SERVICIOS RELACIONADOS CON LA ACUICULTURA, NO INCLUYE SERVICIOS PROFESIONALES Y DE EXTRACCIÓN'),
(73,26,52010,'PESCA INDUSTRIAL'),
(74,26,52020,'ACTIVIDAD PESQUERA DE BARCOS FACTORÍAS'),
(75,26,52030,'PESCA ARTESANAL. EXTRACCIÓN DE RECURSOS ACUÁTICOS EN GENERAL; INCLUYE BALLENAS'),
(76,26,52040,'RECOLECCIÓN DE PRODUCTOS MARINOS, COMO PERLAS NATURALES, ESPONJAS, CORALES Y ALGAS.'),
(77,26,52050,'SERVICIOS RELACIONADOS CON LA PESCA, NO INCLUYE SERVICIOS PROFESIONALES'),
(78,27,100000,'EXTRACCIÓN, AGLOMERACIÓN DE CARBÓN DE PIEDRA, LIGNITO Y TURBA'),
(79,28,111000,'EXTRACCIÓN DE PETRÓLEO CRUDO Y GAS NATURAL'),
(80,28,112000,'ACTIVIDADES DE SERVICIOS RELACIONADAS CON LA EXTRACCIÓN DE PETRÓLEO Y GAS'),
(81,29,120000,'EXTRACCIÓN DE MINERALES DE URANIO Y TORIO'),
(82,29,131000,'EXTRACCIÓN DE MINERALES DE HIERRO'),
(83,29,132010,'EXTRACCIÓN DE ORO Y PLATA'),
(84,29,132020,'EXTRACCIÓN DE ZINC Y PLOMO'),
(85,29,132030,'EXTRACCIÓN DE MANGANESO'),
(86,29,132090,'EXTRACCIÓN DE OTROS MINERALES METALÍFEROS N.C.P.'),
(87,29,133000,'EXTRACCIÓN DE COBRE'),
(88,30,141000,'EXTRACCIÓN DE PIEDRA, ARENA Y ARCILLA'),
(89,30,142100,'EXTRACCIÓN DE NITRATOS Y YODO'),
(90,30,142200,'EXTRACCIÓN DE SAL'),
(91,30,142300,'EXTRACCIÓN DE LITIO Y CLORUROS, EXCEPTO SAL'),
(92,30,142900,'EXPLOTACIÓN DE OTRAS MINAS Y CANTERAS N.C.P.'),
(93,31,151110,'PRODUCCIÓN, PROCESAMIENTO DE CARNES ROJAS Y PRODUCTOS CÁRNICOS'),
(94,31,151120,'CONSERVACIÓN DE CARNES ROJAS (FRIGORÍFICOS)'),
(95,31,151130,'PRODUCCIÓN, PROCESAMIENTO Y CONSERVACIÓN DE CARNES DE AVE Y OTRAS CARNES DISTINTAS A LAS ROJAS'),
(96,31,151140,'ELABORACIÓN DE CECINAS, EMBUTIDOS Y CARNES EN CONSERVA.'),
(97,31,151210,'PRODUCCIÓN DE HARINA DE PESCADO'),
(98,31,151221,'FABRICACIÓN DE PRODUCTOS ENLATADOS DE PESCADO Y MARISCOS'),
(99,31,151222,'ELABORACIÓN DE CONGELADOS DE PESCADOS Y MARISCOS'),
(100,31,151223,'ELABORACIÓN DE PRODUCTOS AHUMADOS, SALADOS, DESHIDRATADOS Y OTROS PROCESOS SIMILARES'),
(101,31,151230,'ELABORACIÓN DE PRODUCTOS EN BASE A VEGETALES ACUÁTICOS'),
(102,31,151300,'ELABORACIÓN Y CONSERVACIÓN DE FRUTAS, LEGUMBRES Y HORTALIZAS'),
(103,31,151410,'ELABORACIÓN DE ACEITES Y GRASAS DE ORIGEN VEGETAL'),
(104,31,151420,'ELABORACIÓN DE ACEITES Y GRASAS DE ORIGEN ANIMAL, EXCEPTO LAS MANTEQUILLAS'),
(105,31,151430,'ELABORACIÓN DE ACEITES Y GRASAS DE ORIGEN MARINO'),
(106,32,152010,'ELABORACIÓN DE LECHE, MANTEQUILLA, PRODUCTOS LÁCTEOS Y DERIVADOS'),
(107,32,152020,'ELABORACIÓN DE QUESOS'),
(108,32,152030,'FABRICACIÓN DE POSTRES A BASE DE LECHE (HELADOS, SORBETES Y OTROS SIMILARES)'),
(109,33,153110,'ELABORACIÓN DE HARINAS DE TRIGO'),
(110,33,153120,'ACTIVIDADES DE MOLIENDA DE ARROZ'),
(111,33,153190,'ELABORACIÓN DE OTRAS MOLINERAS Y ALIMENTOS A BASE DE CEREALES'),
(112,33,153210,'ELABORACIÓN DE ALMIDONES Y PRODUCTOS DERIVADOS DEL ALMIDÓN'),
(113,33,153220,'ELABORACIÓN DE GLUCOSA Y OTROS AZÚCARES DIFERENTES DE LA REMOLACHA'),
(114,33,153300,'ELABORACIÓN DE ALIMENTOS PREPARADOS PARA ANIMALES'),
(115,34,154110,'FABRICACIÓN DE PAN, PRODUCTOS DE PANADERÍA Y PASTELERÍA'),
(116,34,154120,'FABRICACIÓN DE GALLETAS'),
(117,34,154200,'ELABORACIÓN DE AZÚCAR DE REMOLACHA O CANA'),
(118,34,154310,'ELABORACIÓN DE CACAO Y CHOCOLATES'),
(119,34,154320,'FABRICACIÓN DE PRODUCTOS DE CONFITERÍA'),
(120,34,154400,'ELABORACIÓN DE MACARRONES, FIDEOS, ALCUZCUZ Y PRODUCTOS FARINACEOS SIMILARES'),
(121,34,154910,'ELABORACIÓN DE TE, CAFÉ, INFUSIONES'),
(122,34,154920,'ELABORACIÓN DE LEVADURAS NATURALES O ARTIFICIALES'),
(123,34,154930,'ELABORACIÓN DE VINAGRES, MOSTAZAS, MAYONESAS Y CONDIMENTOS EN GENERAL'),
(124,34,154990,'ELABORACIÓN DE OTROS PRODUCTOS ALIMENTICIOS NO CLASIFICADOS EN OTRA PARTE'),
(125,35,155110,'ELABORACIÓN DE PISCOS (INDUSTRIAS PISQUERAS)'),
(126,35,155120,'ELABORACIÓN DE BEBIDAS ALCOHÓLICAS Y DE ALCOHOL ETÍLICO A PARTIR DE SUSTANCIAS FERMENTADAS Y OTROS'),
(127,35,155200,'ELABORACIÓN DE VINOS'),
(128,35,155300,'ELABORACIÓN DE BEBIDAS MALTEADAS, CERVEZAS Y MALTAS'),
(129,35,155410,'ELABORACIÓN DE BEBIDAS NO ALCOHÓLICAS'),
(130,35,155420,'ENVASADO DE AGUA MINERAL NATURAL, DE MANANTIAL Y POTABLE PREPARADA'),
(131,35,155430,'ELABORACIÓN DE HIELO'),
(132,36,160010,'FABRICACIÓN DE CIGARROS Y CIGARRILLOS'),
(133,36,160090,'FABRICACIÓN DE OTROS PRODUCTOS DEL TABACO'),
(134,37,171100,'PREPARACIÓN DE HILATURA DE FIBRAS TEXTILES; TEJEDURA PROD. TEXTILES'),
(135,37,171200,'ACABADO DE PRODUCTOS TEXTIL'),
(136,38,172100,'FABRICACIÓN DE ARTÍCULOS CONFECCIONADOS DE MATERIAS TEXTILES, EXCEPTO PRENDAS DE VESTIR'),
(137,38,172200,'FABRICACIÓN DE TAPICES Y ALFOMBRA'),
(138,38,172300,'FABRICACIÓN DE CUERDAS, CORDELES, BRAMANTES Y REDES'),
(139,38,172910,'FABRICACIÓN DE TEJIDOS DE USO INDUSTRIAL COMO TEJIDOS IMPREGNADOS, MOLTOPRENE, BATISTA, ETC.'),
(140,38,172990,'FABRICACIÓN DE OTROS PRODUCTOS TEXTILES N.C.P.'),
(141,39,173000,'FABRICACIÓN DE TEJIDOS DE PUNTO'),
(142,40,181010,'FABRICACIÓN DE PRENDAS DE VESTIR TEXTILES Y SIMILARES'),
(143,40,181020,'FABRICACIÓN DE PRENDAS DE VESTIR DE CUERO NATURAL, ARTIFICIAL, PLÁSTICO'),
(144,40,181030,'FABRICACIÓN DE ACCESORIOS DE VESTIR'),
(145,40,181040,'FABRICACIÓN DE ROPA DE TRABAJO'),
(146,41,182000,'ADOBO Y TENIDOS DE PIELES; FABRICACIÓN DE ARTÍCULOS DE PIEL'),
(147,41,191100,'CURTIDO Y ADOBO DE CUEROS'),
(148,41,191200,'FABRICACIÓN DE MALETAS, BOLSOS DE MANO Y SIMILARES; ARTÍCULOS DE TALABARTERÍA Y GUARNICIONERÍA'),
(149,42,192000,'FABRICACIÓN DE CALZADO'),
(150,43,201000,'ASERRADO Y ACEPILLADURA DE MADERAS'),
(151,44,202100,'FABRICACIÓN DE TABLEROS, PANELES Y HOJAS DE MADERA PARA ENCHAPADO'),
(152,44,202200,'FABRICACIÓN DE PARTES Y PIEZAS DE CARPINTERÍA PARA EDIFICIOS Y CONSTRUCCIONES'),
(153,44,202300,'FABRICACIÓN DE RECIPIENTES DE MADERA'),
(154,44,202900,'FABRICACIÓN DE OTROS PRODUCTOS DE MADERA; ARTÍCULOS DE CORCHO, PAJA Y MATERIALES TRENZABLES'),
(155,45,210110,'FABRICACIÓN DE CELULOSA Y OTRAS PASTAS DE MADERA'),
(156,45,210121,'FABRICACIÓN DE PAPEL DE PERIÓDICO'),
(157,45,210129,'FABRICACIÓN DE PAPEL Y CARTÓN N.C.P.'),
(158,45,210200,'FABRICACIÓN DE PAPEL Y CARTÓN ONDULADO Y DE ENVASES DE PAPEL Y CARTÓN'),
(159,45,210900,'FABRICACIÓN DE OTROS ARTÍCULOS DE PAPEL Y CARTÓN'),
(160,46,221101,'EDICIÓN PRINCIPALMENTE DE LIBROS'),
(161,46,221109,'EDICIÓN DE FOLLETOS, PARTITURAS Y OTRAS PUBLICACIONES'),
(162,46,221200,'EDICIÓN DE PERIÓDICOS, REVISTAS Y PUBLICACIONES PERIÓDICAS'),
(163,46,221300,'EDICIÓN DE GRABACIONES'),
(164,46,221900,'OTRAS ACTIVIDADES DE EDICIÓN'),
(165,47,222101,'IMPRESIÓN PRINCIPALMENTE DE LIBROS'),
(166,47,222109,'OTRAS ACTIVIDADES DE IMPRESIÓN N.C.P.'),
(167,47,222200,'ACTIVIDADES DE SERVICIO RELACIONADA CON LA IMPRESIÓN'),
(168,47,223000,'REPRODUCCIÓN DE GRABACIONES'),
(169,48,231000,'FABRICACIÓN DE PRODUCTOS DE HORNOS COQUE'),
(170,48,232000,'FABRICACIÓN DE PRODUCTOS DE REFINACIÓN DE PETRÓLEO'),
(171,49,233000,'ELABORACIÓN DE COMBUSTIBLE NUCLEAR'),
(172,50,241110,'FABRICACIÓN DE CARBÓN VEGETAL, Y BRIQUETAS DE CARBÓN VEGETAL'),
(173,50,241190,'FABRICACIÓN DE SUSTANCIAS QUÍMICAS BÁSICAS, EXCEPTO ABONOS Y COMPUESTOS DE NITRÓGENO'),
(174,50,241200,'FABRICACIÓN DE ABONOS Y COMPUESTOS DE NITRÓGENO'),
(175,50,241300,'FABRICACIÓN DE PLÁSTICOS EN FORMAS PRIMARIAS Y DE CAUCHO SINTÉTICO'),
(176,51,242100,'FABRICACIÓN DE PLAGUICIDAS Y OTROS PRODUCTOS QUÍMICOS DE USO AGROPECUARIO'),
(177,51,242200,'FABRICACIÓN DE PINTURAS, BARNICES Y PRODUCTOS DE REVESTIMIENTO SIMILARES'),
(178,51,242300,'FABRICACIÓN DE PRODUCTOS FARMACEUTICOS, SUSTANCIAS QUÍMICAS MEDICINALES Y PRODUCTOS BOTÁNICOS'),
(179,51,242400,'FABRICACIONES DE JABONES Y DETERGENTES, PREPARADOS PARA LIMPIAR, PERFUMES Y PREPARADOS DE TOCADOR'),
(180,51,242910,'FABRICACIÓN DE EXPLOSIVOS Y PRODUCTOS DE PIROTECNIA'),
(181,51,242990,'FABRICACIÓN DE OTROS PRODUCTOS QUÍMICOS N.C.P.'),
(182,52,243000,'FABRICACIÓN DE FIBRAS MANUFACTURADAS'),
(183,53,251110,'FABRICACIÓN DE CUBIERTAS Y CÁMARAS DE CAUCHO'),
(184,53,251120,'RECAUCHADO Y RENOVACIÓN DE CUBIERTAS DE CAUCHO'),
(185,53,251900,'FABRICACIÓN DE OTROS PRODUCTOS DE CAUCHO'),
(186,54,252010,'FABRICACIÓN DE PLANCHAS, LÁMINAS, CINTAS, TIRAS DE PLÁSTICO'),
(187,54,252020,'FABRICACIÓN DE TUBOS, MANGUERAS PARA LA CONSTRUCCIÓN'),
(188,54,252090,'FABRICACIÓN DE OTROS ARTÍCULOS DE PLÁSTICO'),
(189,55,261010,'FABRICACIÓN, MANIPULADO Y TRANSFORMACIÓN DE VIDRIO PLANO'),
(190,55,261020,'FABRICACIÓN DE VIDRIO HUECO'),
(191,55,261030,'FABRICACIÓN DE FIBRAS DE VIDRIO'),
(192,55,261090,'FABRICACIÓN DE ARTÍCULOS DE VIDRIO N.C.P.'),
(193,56,269101,'FABRICACIÓN DE PRODUCTOS DE CERÁMICA NO REFRACTARIA PARA USO NO ESTRUCTURAL CON FINES ORNAMENTALES'),
(194,56,269109,'FABRICACIÓN DE PRODUCTOS DE CERÁMICA NO REFRACTARIA PARA USO NO ESTRUCTURAL N.C.P.'),
(195,56,269200,'FABRICACIÓN DE PRODUCTOS DE CERÁMICAS REFRACTARIA'),
(196,56,269300,'FABRICACIÓN DE PRODUCTOS DE ARCILLA Y CERÁMICAS NO REFRACTARIAS PARA USO ESTRUCTURAL'),
(197,56,269400,'FABRICACIÓN DE CEMENTO, CAL Y YESO'),
(198,56,269510,'ELABORACIÓN DE HORMIGÓN, ARTÍCULOS DE HORMIGÓN Y MORTERO (MEZCLA PARA CONSTRUCCIÓN)'),
(199,56,269520,'FABRICACIÓN DE PRODUCTOS DE FIBROCEMENTO Y ASBESTOCEMENTO'),
(200,56,269530,'FABRICACIÓN DE PANELES DE YESO PARA LA CONSTRUCCIÓN'),
(201,56,269590,'FABRICACIÓN DE ARTÍCULOS DE CEMENTO Y YESO N.C.P.'),
(202,56,269600,'CORTE, TALLADO Y ACABADO DE LA PIEDRA'),
(203,56,269910,'FABRICACIÓN DE MEZCLAS BITUMINOSAS A BASE DE ASFALTO, DE BETUNES NATURALES, Y PRODUCTOS SIMILARES'),
(204,56,269990,'FABRICACIÓN DE OTROS PRODUCTOS MINERALES NO METÁLICOS N.C.P'),
(205,57,271000,'INDUSTRIAS BASICAS DE HIERRO Y ACERO'),
(206,58,272010,'ELABORACIÓN DE PRODUCTOS DE COBRE EN FORMAS PRIMARIAS.'),
(207,58,272020,'ELABORACIÓN DE PRODUCTOS DE ALUMINIO EN FORMAS PRIMARIAS'),
(208,58,272090,'FABRICACIÓN DE PRODUCTOS PRIMARIOS DE METALES PRECIOSOS Y DE OTROS METALES NO FERROSOS N.C.P.'),
(209,59,273100,'FUNDICIÓN DE HIERRO Y ACERO'),
(210,59,273200,'FUNDICIÓN DE METALES NO FERROSOS'),
(211,60,281100,'FABRICACIÓN DE PRODUCTOS METÁLICOS DE USO ESTRUCTURAL'),
(212,60,281211,'FABRICACIÓN DE RECIPIENTES DE GAS COMPRIMIDO O LICUADO'),
(213,60,281219,'FABRICACIÓN DE TANQUES, DEPÓSITOS Y RECIPIENTES DE METAL N.C.P.'),
(214,60,281280,'REPARACIÓN DE TANQUES, DEPÓSITOS Y RECIPIENTES DE METAL'),
(215,60,281310,'FABRICACIÓN DE GENERADORES DE VAPOR, EXCEPTO CALDERAS DE AGUA CALIENTE PARA CALEFACCIÓN'),
(216,60,281380,'REPARACIÓN DE GENERADORES DE VAPOR, EXCEPTO CALDERAS DE AGUA CALIENTE PARA CALEFACCIÓN CENTRAL'),
(217,61,289100,'FORJA, PRENSADO, ESTAMPADO Y LAMINADO DE METAL; INCLUYE PULVIMETALURGIA'),
(218,61,289200,'TRATAMIENTOS Y REVESTIMIENTOS DE METALES; OBRAS DE INGENIERÍA MECÁNICA EN GENERAL'),
(219,61,289310,'FABRICACIÓN DE ARTÍCULOS DE CUCHILLERÍA'),
(220,61,289320,'FABRICACIÓN DE HERRAMIENTAS DE MANO Y ARTÍCULOS DE FERRETERÍA'),
(221,61,289910,'FABRICACIÓN DE CABLES, ALAMBRES Y PRODUCTOS DE ALAMBRE'),
(222,61,289990,'FABRICACIÓN DE OTROS PRODUCTOS ELABORADOS DE METAL N.C.P.'),
(223,62,291110,'FABRICACIÓN DE MOTORES Y TURBINAS, EXCEPTO PARA AERONAVES, VEHÍCULOS AUTOMOTORES Y MOTOCICLETAS'),
(224,62,291180,'REPARACIÓN DE MOTORES Y TURBINAS, EXCEPTO PARA AERONAVES, VEHÍCULOS AUTOMOTORES Y MOTOCICLETAS'),
(225,62,291210,'FABRICACIÓN DE BOMBAS, GRIFOS, VÁLVULAS, COMPRESORES, SISTEMAS HIDRÁULICOS'),
(226,62,291280,'REPARACIÓN DE BOMBAS, COMPRESORES, SISTEMAS HIDRÁULICOS, VÁLVULAS Y ARTÍCULOS DE GRIFERÍA'),
(227,62,291310,'FABRICACIÓN DE COJINETES, ENGRANAJES, TRENES DE ENGRANAJES Y PIEZAS DE TRANSMISIÓN'),
(228,62,291380,'REPARACIÓN DE COJINETES, ENGRANAJES, TRENES DE ENGRANAJES Y PIEZAS DE TRANSMISIÓN'),
(229,62,291410,'FABRICACIÓN DE HORNOS, HOGARES Y QUEMADORES'),
(230,62,291480,'REPARACIÓN DE HORNOS, HOGARES Y QUEMADORES'),
(231,62,291510,'FABRICACIÓN DE EQUIPO DE ELEVACIÓN Y MANIPULACIÓN'),
(232,62,291580,'REPARACIÓN DE EQUIPO DE ELEVACIÓN Y MANIPULACIÓN'),
(233,62,291910,'FABRICACIÓN DE OTRO TIPO DE MAQUINARIAS DE USO GENERAL'),
(234,62,291980,'REPARACIÓN OTROS TIPOS DE MAQUINARIA Y EQUIPOS DE USO GENERAL'),
(235,63,292110,'FABRICACIÓN DE MAQUINARIA AGROPECUARIA Y FORESTAL'),
(236,63,292180,'REPARACIÓN DE MAQUINARIA AGROPECUARIA Y FORESTAL'),
(237,63,292210,'FABRICACIÓN DE MÁQUINAS HERRAMIENTAS'),
(238,63,292280,'REPARACIÓN DE MÁQUINAS HERRAMIENTAS'),
(239,63,292310,'FABRICACIÓN DE MAQUINARIA METALÚRGICA'),
(240,63,292380,'REPARACIÓN DE MAQUINARIA PARA LA INDUSTRIA METALÚRGICA'),
(241,63,292411,'FABRICACIÓN DE MAQUINARIA PARA MINAS Y CANTERAS Y PARA OBRAS DE CONSTRUCCIÓN'),
(242,63,292412,'FABRICACIÓN DE PARTES PARA MÁQUINAS DE SONDEO O PERFORACIÓN'),
(243,63,292480,'REPARACIÓN DE MAQUINARIA PARA LA EXPLOTACIÓN DE PETRÓLEO, MINAS, CANTERAS, Y OBRAS DE CONSTRUCCIÓN'),
(244,63,292510,'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE ALIMENTOS, BEBIDAS Y TABACOS'),
(245,63,292580,'REPARACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE ALIMENTOS, BEBIDAS Y TABACOS'),
(246,63,292610,'FABRICACIÓN DE MAQUINARIA PARA LA ELABORACIÓN DE PRENDAS TEXTILES, PRENDAS DE VESTIR Y CUEROS'),
(247,63,292680,'REPARACIÓN DE MAQUINARIA PARA LA INDUSTRIA TEXTIL, DE LA CONFECCIÓN, DEL CUERO Y DEL CALZADO'),
(248,63,292710,'FABRICACIÓN DE ARMAS Y MUNICIONES'),
(249,63,292780,'REPARACIÓN DE ARMAS'),
(250,63,292910,'FABRICACIÓN DE OTROS TIPOS DE MAQUINARIAS DE USO ESPECIAL'),
(251,63,292980,'REPARACIÓN DE OTROS TIPOS DE MAQUINARIA DE USO ESPECIAL'),
(252,64,293000,'FABRICACIÓN DE APARATOS DE USO DOMÉSTICO N.C.P.'),
(253,65,300010,'FABRICACIÓN Y ARMADO DE COMPUTADORES Y HARDWARE EN GENERAL'),
(254,65,300020,'FABRICACIÓN DE MAQUINARIA DE OFICINA, CONTABILIDAD, N.C.P.'),
(255,66,311010,'FABRICACIÓN DE MOTORES, GENERADORES Y TRANSFORMADORES ELÉCTRICOS'),
(256,66,311080,'REPARACIÓN DE MOTORES, GENERADORES Y TRANSFORMADORES ELÉCTRICOS'),
(257,67,312010,'FABRICACIÓN DE APARATOS DE DISTRIBUCIÓN Y CONTROL'),
(258,67,312080,'REPARACIÓN DE APARATOS DE DISTRIBUCIÓN Y CONTROL'),
(259,68,313000,'FABRICACIÓN DE HILOS Y CABLES AISLADOS'),
(260,69,314000,'FABRICACIÓN DE ACUMULADORES DE PILAS Y BATERÍAS PRIMARIAS'),
(261,70,315010,'FABRICACIÓN DE LÁMPARAS Y EQUIPO DE ILUMINACIÓN'),
(262,70,315080,'REPARACIÓN DE EQUIPO DE ILUMINACIÓN'),
(263,71,319010,'FABRICACIÓN DE OTROS TIPOS DE EQUIPO ELÉCTRICO N.C.P.'),
(264,71,319080,'REPARACIÓN DE OTROS TIPOS DE EQUIPO ELÉCTRICO N.C.P.'),
(265,72,321010,'FABRICACIÓN DE COMPONENTES ELECTRÓNICOS'),
(266,72,321080,'REPARACIÓN DE COMPONENTES ELECTRÓNICOS'),
(267,73,322010,'FABRICACIÓN DE TRANSMISORES DE RADIO Y TELEVISIÓN, APARATOS PARA TELEFONÍA Y TELEGRAFÍA CON HILOS'),
(268,73,322080,'REPARACIÓN DE TRANSMISORES DE RADIO Y TELEVISIÓN, APARATOS PARA TELEFONÍA Y TELEGRAFÍA CON HILOS'),
(269,74,323000,'FABRICACIÓN DE RECEPTORES (RADIO Y TV); APARATOS DE GRABACIÓN Y REPRODUCCIÓN (AUDIO Y VIDEO)'),
(270,75,331110,'FABRICACIÓN DE EQUIPO MÉDICO Y QUIRÚRGICO, Y DE APARATOS ORTOPÉDICOS'),
(271,75,331120,'LABORATORIOS DENTALES'),
(272,75,331180,'REPARACIÓN DE EQUIPO MÉDICO Y QUIRÚRGICO, Y DE APARATOS ORTOPÉDICOS'),
(273,75,331210,'FABRICACIÓN DE INSTRUMENTOS Y APARATOS PARA MEDIR, VERIFICAR, ENSAYAR, NAVEGAR Y OTROS FINES'),
(274,75,331280,'REPARACIÓN DE INSTRUMENTOS Y APARATOS PARA MEDIR, VERIFICAR, ENSAYAR, NAVEGAR Y OTROS FINES'),
(275,75,331310,'FABRICACIÓN DE EQUIPOS DE CONTROL DE PROCESOS INDUSTRIALES'),
(276,75,331380,'REPARACIÓN DE EQUIPOS DE CONTROL DE PROCESOS INDUSTRIALES'),
(277,76,332010,'FABRICACIÓN Y/O REPARACIÓN DE LENTES Y ARTÍCULOS OFTALMOLÓGICOS'),
(278,76,332020,'FABRICACIÓN DE INSTRUMENTOS DE OPTICA N.C.P. Y EQUIPOS FOTOGRÁFICOS'),
(279,76,332080,'REPARACIÓN DE INSTRUMENTOS DE OPTICA N.C.P Y EQUIPO FOTOGRÁFICOS'),
(280,77,333000,'FABRICACIÓN DE RELOJES'),
(281,78,341000,'FABRICACIÓN DE VEHÍCULOS AUTOMOTORES'),
(282,78,342000,'FABRICACIÓN DE CARROCERÍAS PARA VEHÍCULOS AUTOMOTORES; FABRICACIÓN DE REMOLQUES Y SEMI REMOLQUES'),
(283,78,343000,'FABRICACIÓN DE PARTES Y ACCESORIOS PARA VEHÍCULOS AUTOMOTORES Y SUS MOTORES'),
(284,79,351110,'CONSTRUCCIÓN Y REPARACIÓN DE BUQUES; ASTILLEROS'),
(285,79,351120,'CONSTRUCCIÓN DE EMBARCACIONES MENORES'),
(286,79,351180,'REPARACIÓN DE EMBARCACIONES MENORES'),
(287,79,351210,'CONSTRUCCIÓN DE EMBARCACIONES DE RECREO Y DEPORTE'),
(288,79,351280,'REPARACIÓN DE EMBARCACIONES DE RECREO Y DEPORTES'),
(289,80,352000,'FABRICACIÓN DE LOCOMOTORAS Y DE MATERIAL RODANTE PARA FERROCARRILES Y TRANVÍAS'),
(290,81,353010,'FABRICACIÓN DE AERONAVES Y NAVES ESPACIALES'),
(291,81,353080,'REPARACIÓN DE AERONAVES Y NAVES ESPACIALES'),
(292,82,359100,'FABRICACIÓN DE MOTOCICLETAS'),
(293,82,359200,'FABRICACIÓN DE BICICLETAS Y DE SILLONES DE RUEDAS PARA INVALIDOS'),
(294,82,359900,'FABRICACIÓN DE OTROS EQUIPOS DE TRANSPORTE N.C.P.'),
(295,83,361010,'FABRICACIÓN DE MUEBLES PRINCIPALMENTE DE MADERA'),
(296,83,361020,'FABRICACIÓN DE OTROS MUEBLES N.C.P., INCLUSO COLCHONES'),
(297,84,369100,'FABRICACIÓN DE JOYAS Y PRODUCTOS CONEXOS'),
(298,84,369200,'FABRICACIÓN DE INSTRUMENTOS DE MÚSICA'),
(299,84,369300,'FABRICACIÓN DE ARTÍCULOS DE DEPORTE'),
(300,84,369400,'FABRICACIÓN DE JUEGOS Y JUGUETES'),
(301,84,369910,'FABRICACIÓN DE PLUMAS Y LÁPICES DE TODA CLASE Y ARTÍCULOS DE ESCRITORIO EN GENERAL'),
(302,84,369920,'FABRICACIÓN DE BROCHAS, ESCOBAS Y CEPILLOS'),
(303,84,369930,'FABRICACIÓN DE FÓSFOROS'),
(304,84,369990,'FABRICACIÓN DE ARTÍCULOS DE OTRAS INDUSTRIAS N.C.P.'),
(305,85,371000,'RECICLAMIENTO DE DESPERDICIOS Y DESECHOS METÁLICOS'),
(306,85,372010,'RECICLAMIENTO DE PAPEL'),
(307,85,372020,'RECICLAMIENTO DE VIDRIO'),
(308,85,372090,'RECICLAMIENTO DE OTROS DESPERDICIOS Y DESECHOS N.C.P.'),
(309,86,401011,'GENERACIÓN HIDROELÉCTRICA'),
(310,86,401012,'GENERACIÓN EN CENTRALES TERMOELÉCTRICA DE CICLOS COMBINADOS'),
(311,86,401013,'GENERACIÓN EN OTRAS CENTRALES TERMOELÉCTRICAS'),
(312,86,401019,'GENERACIÓN EN OTRAS CENTRALES N.C.P.'),
(313,86,401020,'TRANSMISIÓN DE ENERGÍA ELÉCTRICA'),
(314,86,401030,'DISTRIBUCIÓN DE ENERGIA ELÉCTRICA'),
(315,87,402000,'FABRICACIÓN DE GAS; DISTRIBUCIÓN DE COMBUSTIBLES GASEOSOS POR TUBERÍAS'),
(316,88,403000,'SUMINISTRO DE VAPOR Y AGUA CALIENTE'),
(317,89,410000,'CAPTACIÓN, DEPURACIÓN Y DISTRIBUCIÓN DE AGUA'),
(318,90,451010,'PREPARACIÓN DEL TERRENO, EXCAVACIONES Y MOVIMIENTOS DE TIERRAS'),
(319,90,451020,'SERVICIOS DE DEMOLICIÓN Y EL DERRIBO DE EDIFICIOS Y OTRAS ESTRUCTURAS'),
(320,90,452010,'CONSTRUCCIÓN DE EDIFICIOS COMPLETOS O DE PARTES DE EDIFICIOS'),
(321,90,452020,'OBRAS DE INGENIERÍA'),
(322,90,453000,'ACONDICIONAMIENTO DE EDIFICIOS'),
(323,90,454000,'OBRAS MENORES EN CONSTRUCCIÓN (CONTRATISTAS, ALBANILES, CARPINTEROS)'),
(324,90,455000,'ALQUILER DE EQUIPO DE CONSTRUCCIÓN O DEMOLICIÓN DOTADO DE OPERARIOS'),
(325,91,501010,'VENTA AL POR MAYOR DE VEHÍCULOS AUTOMOTORES (IMPORTACIÓN, DISTRIBUCIÓN) EXCEPTO MOTOCICLETAS'),
(326,91,501020,'VENTA O COMPRAVENTA AL POR MENOR DE VEHÍCULOS AUTOMOTORES NUEVOS O USADOS; EXCEPTO MOTOCICLETAS'),
(327,92,502010,'SERVICIO DE LAVADO DE VEHÍCULOS AUTOMOTORES'),
(328,92,502020,'SERVICIOS DE REMOLQUE DE VEHÍCULOS (GRUAS)'),
(329,92,502080,'MANTENIMIENTO Y REPARACIÓN DE VEHÍCULOS AUTOMOTORES'),
(330,93,503000,'VENTA DE PARTES, PIEZAS Y ACCESORIOS DE VEHÍCULOS AUTOMOTORES'),
(331,94,504010,'VENTA DE MOTOCICLETAS'),
(332,94,504020,'VENTA DE PIEZAS Y ACCESORIOS DE MOTOCICLETAS'),
(333,94,504080,'REPARACIÓN DE MOTOCICLETAS'),
(334,95,505000,'VENTA AL POR MENOR DE COMBUSTIBLE PARA AUTOMOTORES'),
(335,96,511010,'CORRETAJE DE PRODUCTOS AGRÍCOLAS'),
(336,96,511020,'CORRETAJE DE GANADO (FERIAS DE GANADO)'),
(337,96,511030,'OTROS TIPOS DE CORRETAJES O REMATES N.C.P. (NO INCLUYE SERVICIOS DE MARTILLERO)'),
(338,97,512110,'VENTA AL POR MAYOR DE ANIMALES VIVOS'),
(339,97,512120,'VENTA AL POR MAYOR DE PRODUCTOS PECUARIOS (LANAS, PIELES, CUEROS SIN PROCESAR); EXCEPTO ALIMENTOS'),
(340,97,512130,'VENTA AL POR MAYOR DE MATERIAS PRIMAS AGRÍCOLAS'),
(341,97,512210,'MAYORISTA DE FRUTAS Y VERDURAS'),
(342,97,512220,'MAYORISTAS DE CARNES'),
(343,97,512230,'MAYORISTAS DE PRODUCTOS DEL MAR (PESCADO, MARISCOS, ALGAS)'),
(344,97,512240,'MAYORISTAS DE VINOS Y BEBIDAS ALCOHÓLICAS Y DE FANTASÍA'),
(345,97,512250,'VENTA AL POR MAYOR DE CONFITES'),
(346,97,512260,'VENTA AL POR MAYOR DE TABACO Y PRODUCTOS DERIVADOS'),
(347,97,512290,'VENTA AL POR MAYOR DE HUEVOS, LECHE, ABARROTES, Y OTROS ALIMENTOS N.C.P.'),
(348,98,513100,'VENTA AL POR MAYOR DE PRODUCTOS TEXTILES, PRENDAS DE VESTIR Y CALZADO'),
(349,98,513910,'VENTA AL POR MAYOR DE MUEBLES'),
(350,98,513920,'VENTA AL POR MAYOR DE ARTÍCULOS ELÉCTRICOS Y ELECTRÓNICOS PARA EL HOGAR'),
(351,98,513930,'VENTA AL POR MAYOR DE ARTÍCULOS DE PERFUMERÍA, COSMÉTICOS, JABONES Y PRODUCTOS DE LIMPIEZA'),
(352,98,513940,'VENTA AL POR MAYOR DE PAPEL Y CARTÓN'),
(353,98,513951,'VENTA AL POR MAYOR DE LIBROS'),
(354,98,513952,'VENTA AL POR MAYOR DE REVISTAS Y PERIÓDICOS'),
(355,98,513960,'VENTA AL POR MAYOR DE PRODUCTOS FARMACEUTICOS'),
(356,98,513970,'VENTA AL POR MAYOR DE INSTRUMENTOS CIENTÍFICOS Y QUIRÚRGICOS'),
(357,98,513990,'VENTA AL POR MAYOR DE OTROS ENSERES DOMÉSTICOS N.C.P.'),
(358,99,514110,'VENTA AL POR MAYOR DE COMBUSTIBLES LÍQUIDOS'),
(359,99,514120,'VENTA AL POR MAYOR DE COMBUSTIBLES SÓLIDOS'),
(360,99,514130,'VENTA AL POR MAYOR DE COMBUSTIBLES GASEOSOS'),
(361,99,514140,'VENTA AL POR MAYOR DE PRODUCTOS CONEXOS A LOS COMBUSTIBLES'),
(362,99,514200,'VENTA AL POR MAYOR DE METALES Y MINERALES METALÍFEROS'),
(363,99,514310,'VENTA AL POR MAYOR DE MADERA NO TRABAJADA Y PRODUCTOS RESULTANTES DE SU ELABORACIÓN PRIMARIA'),
(364,99,514320,'VENTA AL POR MAYOR DE MATERIALES DE CONSTRUCCIÓN, ARTÍCULOS DE FERRETERÍA Y RELACIONADOS'),
(365,99,514910,'VENTA AL POR MAYOR DE PRODUCTOS QUÍMICOS'),
(366,99,514920,'VENTA AL POR MAYOR DE DESECHOS METÁLICOS (CHATARRA)'),
(367,99,514930,'VENTA AL POR MAYOR DE INSUMOS VETERINARIOS'),
(368,99,514990,'VENTA AL POR MAYOR DE OTROS PRODUCTOS INTERMEDIOS, DESPERDICIOS Y DESECHOS N.C.P.'),
(369,100,515001,'VENTA AL POR MAYOR DE MAQUINARIA AGRÍCOLA Y FORESTAL'),
(370,100,515002,'VENTA AL POR MAYOR DE MAQUINARIA METALÚRGICA'),
(371,100,515003,'VENTA AL POR MAYOR DE MAQUINARIA PARA LA MINERÍA'),
(372,100,515004,'VENTA AL POR MAYOR DE MAQUINARIA PARA LA CONSTRUCCIÓN'),
(373,100,515005,'VENTA AL POR MAYOR DE MAQUINARIA PARA LA ELABORACIÓN DE ALIMENTOS, BEBIDAS Y TABACO'),
(374,100,515006,'VENTA AL POR MAYOR DE MAQUINARIA PARA TEXTILES Y CUEROS'),
(375,100,515007,'VENTA AL POR MAYOR DE MÁQUINAS Y EQUIPOS DE OFICINA; INCLUYE MATERIALES CONEXOS'),
(376,100,515008,'VENTA AL POR MAYOR DE MAQUINARIA Y EQUIPO DE TRANSPORTE EXCEPTO VEHÍCULOS AUTOMOTORES'),
(377,100,515009,'VENTA AL POR MAYOR DE MAQUINARIA, HERRAMIENTAS, EQUIPO Y MATERIALES N.C.P.'),
(378,101,519000,'VENTA AL POR MAYOR DE OTROS PRODUCTOS N.C.P.'),
(379,102,521111,'GRANDES ESTABLECIMIENTOS (VENTA DE ALIMENTOS); HIPERMERCADOS'),
(380,102,521112,'ALMACENES MEDIANOS (VENTA DE ALIMENTOS); SUPERMERCADOS, MINIMARKETS'),
(381,102,521120,'ALMACENES PEQUENOS (VENTA DE ALIMENTOS)'),
(382,102,521200,'GRANDES TIENDAS - PRODUCTOS DE FERRETERÍA Y PARA EL HOGAR'),
(383,102,521300,'GRANDES TIENDAS - VESTUARIO Y PRODUCTOS PARA EL HOGAR'),
(384,102,521900,'VENTA AL POR MENOR DE OTROS PRODUCTOS EN PEQUENOS ALMACENES NO ESPECIALIZADOS'),
(385,103,522010,'VENTA AL POR MENOR DE BEBIDAS Y LICORES (BOTILLERÍAS)'),
(386,103,522020,'VENTA AL POR MENOR DE CARNES (ROJAS, BLANCAS, OTRAS) PRODUCTOS CÁRNICOS Y SIMILARES'),
(387,103,522030,'COMERCIO AL POR MENOR DE VERDURAS Y FRUTAS (VERDULERÍA)'),
(388,103,522040,'VENTA AL POR MENOR DE PESCADOS, MARISCOS Y PRODUCTOS CONEXOS'),
(389,103,522050,'VENTA AL POR MENOR DE PRODUCTOS DE PANADERÍA Y PASTELERÍA'),
(390,103,522060,'VENTA AL POR MENOR DE ALIMENTOS PARA MASCOTAS Y ANIMALES EN GENERAL'),
(391,103,522070,'VENTA AL POR MENOR DE AVES Y HUEVOS'),
(392,103,522090,'VENTA AL POR MENOR DE PRODUCTOS DE CONFITERÍAS, CIGARRILLOS, Y OTROS'),
(393,104,523111,'FARMACIAS - PERTENECIENTES A CADENA DE ESTABLECIMIENTOS'),
(394,104,523112,'FARMACIAS INDEPENDIENTES'),
(395,104,523120,'VENTA AL POR MENOR DE PRODUCTOS MEDICINALES'),
(396,104,523130,'VENTA AL POR MENOR DE ARTÍCULOS ORTOPÉDICOS'),
(397,104,523140,'VENTA AL POR MENOR DE ARTÍCULOS DE TOCADOR Y COSMÉTICOS'),
(398,104,523210,'VENTA AL POR MENOR DE CALZADO'),
(399,104,523220,'VENTA AL POR MENOR DE PRENDAS DE VESTIR EN GENERAL, INCLUYE ACCESORIOS'),
(400,104,523230,'VENTA AL POR MENOR DE LANAS, HILOS Y SIMILARES'),
(401,104,523240,'VENTA AL POR MENOR DE MALETERÍAS, TALABARTERÍAS Y ARTÍCULOS DE CUERO'),
(402,104,523250,'VENTA AL POR MENOR DE ROPA INTERIOR Y PRENDAS DE USO PERSONAL'),
(403,104,523290,'COMERCIO AL POR MENOR DE TEXTILES PARA EL HOGAR Y OTROS PRODUCTOS TEXTILES N.C.P.'),
(404,104,523310,'VENTA AL POR MENOR DE ARTÍCULOS ELECTRODOMÉSTICOS Y ELECTRÓNICOS PARA EL HOGAR'),
(405,104,523320,'VENTA AL POR MENOR DE CRISTALES, LOZAS, PORCELANA, MENAJE (CRISTALERÍAS)'),
(406,104,523330,'VENTA AL POR MENOR DE MUEBLES; INCLUYE COLCHONES'),
(407,104,523340,'VENTA AL POR MENOR DE INSTRUMENTOS MUSICALES (CASA DE MÚSICA)'),
(408,104,523350,'VENTA AL POR MENOR DE DISCOS, CASSETTES, DVD Y VIDEOS'),
(409,104,523360,'VENTA AL POR MENOR DE LÁMPARAS, APLIQUÉS Y SIMILARES'),
(410,104,523390,'VENTA AL POR MENOR DE APARATOS, ARTÍCULOS, EQUIPO DE USO DOMÉSTICO N.C.P.'),
(411,104,523410,'VENTA AL POR MENOR DE ARTÍCULOS DE FERRETERÍA Y MATERIALES DE CONSTRUCCIÓN'),
(412,104,523420,'VENTA AL POR MENOR DE PINTURAS, BARNICES Y LACAS'),
(413,104,523430,'COMERCIO AL POR MENOR DE PRODUCTOS DE VIDRIO'),
(414,104,523911,'COMERCIO AL POR MENOR DE ARTÍCULOS FOTOGRÁFICOS'),
(415,104,523912,'COMERCIO AL POR MENOR DE ARTÍCULOS ÓPTICOS'),
(416,104,523921,'COMERCIO POR MENOR DE JUGUETES'),
(417,104,523922,'COMERCIO AL POR MENOR DE LIBROS'),
(418,104,523923,'COMERCIO AL POR MENOR DE REVISTAS Y DIARIOS'),
(419,104,523924,'COMERCIO DE ARTÍCULOS DE SUMINISTROS DE OFICINAS Y ARTÍCULOS DE ESCRITORIO EN GENERAL'),
(420,104,523930,'COMERCIO AL POR MENOR DE COMPUTADORAS, SOFTWARES Y SUMINISTROS'),
(421,104,523941,'COMERCIO AL POR MENOR DE ARMERÍAS, ARTÍCULOS DE CAZA Y PESCA'),
(422,104,523942,'COMERCIO AL POR MENOR DE BICICLETAS Y SUS REPUESTOS'),
(423,104,523943,'COMERCIO AL POR MENOR DE ARTÍCULOS DEPORTIVOS'),
(424,104,523950,'COMERCIO AL POR MENOR DE ARTÍCULOS DE JOYERÍA, FANTASÍAS Y RELOJERÍAS'),
(425,104,523961,'VENTA AL POR MENOR DE GAS LICUADO EN BOMBONAS'),
(426,104,523969,'VENTA AL POR MENOR DE CARBÓN, LENA Y OTROS COMBUSTIBLES DE USO DOMÉSTICO'),
(427,104,523991,'COMERCIO AL POR MENOR DE ARTÍCULOS TÍPICOS (ARTESANÍAS)'),
(428,104,523992,'VENTA AL POR MENOR DE FLORES, PLANTAS, ÁRBOLES, SEMILLAS, ABONOS'),
(429,104,523993,'VENTA AL POR MENOR DE MASCOTAS Y ACCESORIOS'),
(430,104,523999,'VENTAS AL POR MENOR DE OTROS PRODUCTOS EN ALMACENES ESPECIALIZADOS N.C.P.'),
(431,105,524010,'COMERCIO AL POR MENOR DE ANTIGUEDADES'),
(432,105,524020,'COMERCIO AL POR MENOR DE ROPA USADA'),
(433,105,524090,'COMERCIO AL POR MENOR DE ARTÍCULOS Y ARTEFACTOS USADOS N.C.P.'),
(434,106,525110,'VENTA AL POR MENOR EN EMPRESAS DE VENTA A DISTANCIA POR CORREO'),
(435,106,525120,'VENTA AL POR MENOR EN EMPRESAS DE VENTA A DISTANCIA VÍA TELEFÓNICA'),
(436,106,525130,'VENTA AL POR MENOR EN EMPRESAS DE VENTA A DISTANCIA VÍA INTERNET; COMERCIO ELECTRÓNICO'),
(437,106,525200,'VENTA AL POR MENOR EN PUESTOS DE VENTA Y MERCADOS'),
(438,106,525911,'VENTA AL POR MENOR REALIZADA POR INDEPENDIENTES EN TRANSPORTE PÚBLICO (LEY 20.388)'),
(439,106,525919,'VENTA AL POR MENOR NO REALIZADA EN ALMACENES DE PRODUCTOS PROPIOS N.C.P.'),
(440,106,525920,'MÁQUINAS EXPENDEDORAS'),
(441,106,525930,'VENTA AL POR MENOR A CAMBIO DE UNA RETRIBUCIÓN O POR CONTRATA'),
(442,106,525990,'OTROS TIPOS DE VENTA AL POR MENOR NO REALIZADA EN ALMACENES N.C.P.'),
(443,107,526010,'REPARACIÓN DE CALZADO Y OTROS ARTÍCULOS DE CUERO'),
(444,107,526020,'REPARACIONES ELÉCTRICAS Y ELECTRÓNICAS'),
(445,107,526030,'REPARACIÓN DE RELOJES Y JOYAS'),
(446,107,526090,'OTRAS REPARACIONES DE EFECTOS PERSONALES Y ENSERES DOMÉSTICOS N.C.P.'),
(447,108,551010,'HOTELES'),
(448,108,551020,'MOTELES'),
(449,108,551030,'RESIDENCIALES'),
(450,108,551090,'OTROS TIPOS DE HOSPEDAJE TEMPORAL COMO CAMPING, ALBERGUES, POSADAS, REFUGIOS Y SIMILARES'),
(451,109,552010,'RESTAURANTES'),
(452,109,552020,'ESTABLECIMIENTOS DE COMIDA RÁPIDA (BARES, FUENTES DE SODA, GELATERÍAS, PIZZERÍAS Y SIMILARES)'),
(453,109,552030,'CASINOS Y CLUBES SOCIALES'),
(454,109,552040,'SERVICIOS DE COMIDA PREPARADA EN FORMA INDUSTRIAL'),
(455,109,552050,'SERVICIOS DE BANQUETES, BODAS Y OTRAS CELEBRACIONES'),
(456,109,552090,'SERVICIOS DE OTROS ESTABLECIMIENTOS QUE EXPENDEN COMIDAS Y BEBIDAS'),
(457,110,601001,'TRANSPORTE INTERURBANO DE PASAJEROS POR FERROCARRILES'),
(458,110,601002,'TRANSPORTE DE CARGA POR FERROCARRILES'),
(459,111,602110,'TRANSPORTE URBANO DE PASAJEROS VÍA FERROCARRIL (INCLUYE METRO)'),
(460,111,602120,'TRANSPORTE URBANO DE PASAJEROS VÍA AUTOBUS (LOCOMOCIÓN COLECTIVA)'),
(461,111,602130,'TRANSPORTE INTERURBANO DE PASAJEROS VÍA AUTOBUS'),
(462,111,602140,'TRANSPORTE URBANO DE PASAJEROS VÍA TAXI COLECTIVO'),
(463,111,602150,'SERVICIOS DE TRANSPORTE ESCOLAR'),
(464,111,602160,'SERVICIOS DE TRANSPORTE DE TRABAJADORES'),
(465,111,602190,'OTROS TIPOS DE TRANSPORTE REGULAR DE PASAJEROS POR VÍA TERRESTRE N.C.P.'),
(466,111,602210,'TRANSPORTES POR TAXIS LIBRES Y RADIOTAXIS'),
(467,111,602220,'SERVICIOS DE TRANSPORTE A TURISTAS'),
(468,111,602230,'TRANSPORTE DE PASAJEROS EN VEHÍCULOS DE TRACCIÓN HUMANA Y ANIMAL'),
(469,111,602290,'OTROS TIPOS DE TRANSPORTE NO REGULAR DE PASAJEROS N.C.P.'),
(470,111,602300,'TRANSPORTE DE CARGA POR CARRETERA'),
(471,112,603000,'TRANSPORTE POR TUBERÍAS'),
(472,113,611001,'TRANSPORTE MARÍTIMO Y DE CABOTAJE DE PASAJEROS'),
(473,113,611002,'TRANSPORTE MARÍTIMO Y DE CABOTAJE DE CARGA'),
(474,114,612001,'TRANSPORTE DE PASAJEROS POR VÍAS DE NAVEGACIÓN INTERIORES'),
(475,114,612002,'TRANSPORTE DE CARGA POR VÍAS DE NAVEGACIÓN INTERIORES'),
(476,115,621010,'TRANSPORTE REGULAR POR VÍA AÉREA DE PASAJEROS'),
(477,115,621020,'TRANSPORTE REGULAR POR VÍA AÉREA DE CARGA'),
(478,115,622001,'TRANSPORTE NO REGULAR POR VÍA AÉREA DE PASAJEROS'),
(479,115,622002,'TRANSPORTE NO REGULAR POR VÍA AÉREA DE CARGA'),
(480,116,630100,'MANIPULACIÓN DE LA CARGA'),
(481,116,630200,'SERVICIOS DE ALMACENAMIENTO Y DEPÓSITO'),
(482,116,630310,'TERMINALES TERRESTRES DE PASAJEROS'),
(483,116,630320,'ESTACIONAMIENTO DE VEHÍCULOS Y PARQUÍMETROS'),
(484,116,630330,'PUERTOS Y AEROPUERTOS'),
(485,116,630340,'SERVICIOS PRESTADOS POR CONCESIONARIOS DE CARRETERAS'),
(486,116,630390,'OTRAS ACTIVIDADES CONEXAS AL TRANSPORTE N.C.P.'),
(487,116,630400,'AGENCIAS Y ORGANIZADORES DE VIAJES; ACTIVIDADES DE ASISTENCIA A TURISTAS N.C.P.'),
(488,116,630910,'AGENCIAS DE ADUANAS'),
(489,116,630920,'AGENCIAS DE TRANSPORTE'),
(490,117,641100,'ACTIVIDADES POSTALES NACIONALES'),
(491,117,641200,'ACTIVIDADES DE CORREO DISTINTAS DE LAS ACTIVIDADES POSTALES NACIONALES'),
(492,118,642010,'SERVICIOS DE TELEFONÍA FIJA'),
(493,118,642020,'SERVICIOS DE TELEFONÍA MÓVIL'),
(494,118,642030,'PORTADORES TELEFÓNICOS (LARGA DISTANCIA NACIONAL E INTERNACIONAL)'),
(495,118,642040,'SERVICIOS DE TELEVISIÓN NO ABIERTA'),
(496,118,642050,'PROVEEDORES DE INTERNET'),
(497,118,642061,'CENTROS DE LLAMADOS; INCLUYE ENVÍO DE FAX'),
(498,118,642062,'CENTROS DE ACCESO A INTERNET'),
(499,118,642090,'OTROS SERVICIOS DE TELECOMUNICACIONES N.C.P.'),
(500,119,651100,'BANCA CENTRAL'),
(501,119,651910,'BANCOS'),
(502,119,651920,'FINANCIERAS'),
(503,119,651990,'OTROS TIPOS DE INTERMEDIACIÓN MONETARIA N.C.P.'),
(504,120,659110,'LEASING FINANCIERO'),
(505,120,659120,'LEASING HABITACIONAL'),
(506,120,659210,'FINANCIAMIENTO DEL FOMENTO DE LA PRODUCCIÓN'),
(507,120,659220,'ACTIVIDADES DE CRÉDITO PRENDARIO'),
(508,120,659231,'FACTORING'),
(509,120,659232,'SECURITIZADORAS'),
(510,120,659290,'OTROS INSTITUCIONES FINANCIERAS N.C.P.'),
(511,120,659911,'ADMINISTRADORAS DE FONDOS DE INVERSIÓN'),
(512,120,659912,'ADMINISTRADORAS DE FONDOS MUTUOS'),
(513,120,659913,'ADMINISTRADORAS DE FICES (FONDOS DE INVERSIÓN DE CAPITAL EXTRANJERO)'),
(514,120,659914,'ADMINISTRADORAS DE FONDOS PARA LA VIVIENDA'),
(515,120,659915,'ADMINISTRADORAS DE FONDOS PARA OTROS FINES Y/O GENERALES'),
(516,120,659920,'SOCIEDADES DE INVERSIÓN Y RENTISTAS DE CAPITALES MOBILIARIOS EN GENERAL'),
(517,121,660101,'PLANES DE SEGURO DE VIDA'),
(518,121,660102,'PLANES DE REASEGUROS DE VIDA'),
(519,121,660200,'ADMINISTRADORAS DE FONDOS DE PENSIONES (AFP)'),
(520,121,660301,'PLANES DE SEGUROS GENERALES'),
(521,121,660302,'PLANES DE REASEGUROS GENERALES'),
(522,121,660400,'ISAPRES'),
(523,122,671100,'ADMINISTRACIÓN DE MERCADOS FINANCIEROS'),
(524,122,671210,'CORREDORES DE BOLSA'),
(525,122,671220,'AGENTES DE VALORES'),
(526,122,671290,'OTROS SERVICIOS DE CORRETAJE'),
(527,122,671910,'CÁMARA DE COMPENSACIÓN'),
(528,122,671921,'ADMINISTRADORA DE TARJETAS DE CRÉDITO'),
(529,122,671929,'EMPRESAS DE ASESORÍA, CONSULTORÍA FINANCIERA Y DE APOYO AL GIRO'),
(530,122,671930,'CLASIFICADORES DE RIESGOS'),
(531,122,671940,'CASAS DE CAMBIO Y OPERADORES DE DIVISA'),
(532,122,671990,'OTRAS ACTIVIDADES AUXILIARES DE LA INTERMEDIACIÓN FINANCIERA N.C.P.'),
(533,123,672010,'CORREDORES DE SEGUROS'),
(534,123,672020,'AGENTES Y LIQUIDADORES DE SEGUROS'),
(535,123,672090,'OTRAS ACTIVIDADES AUXILIARES DE LA FINANCIACIÓN DE PLANES DE SEGUROS Y DE PENSIONES N.C.P.'),
(536,124,701001,'ARRIENDO DE INMUEBLES AMOBLADOS O CON EQUIPOS Y MAQUINARIAS'),
(537,124,701009,'COMPRA, VENTA Y ALQUILER (EXCEPTO AMOBLADOS) DE INMUEBLES PROPIOS O ARRENDADOS'),
(538,125,702000,'CORREDORES DE PROPIEDADES'),
(539,126,711101,'ALQUILER DE AUTOS Y CAMIONETAS SIN CHOFER'),
(540,126,711102,'ALQUILER DE OTROS EQUIPOS DE TRANSPORTE POR VÍA TERRESTRE SIN OPERARIOS'),
(541,126,711200,'ALQUILER DE TRANSPORTE POR VÍA ACUÁTICA SIN TRIPULACIÓN'),
(542,126,711300,'ALQUILER DE EQUIPO DE TRANSPORTE POR VÍA AÉREA SIN TRIPULANTES'),
(543,127,712100,'ALQUILER DE MAQUINARIA Y EQUIPO AGROPECUARIO'),
(544,127,712200,'ALQUILER DE MAQUINARIA Y EQUIPO DE CONSTRUCCIÓN E INGENIERÍA CIVIL'),
(545,127,712300,'ALQUILER DE MAQUINARIA Y EQUIPO DE OFICINA (SIN OPERARIOS NI SERVICIO ADMINISTRATIVO)'),
(546,127,712900,'ALQUILER DE OTROS TIPOS DE MAQUINARIAS Y EQUIPOS N.C.P.'),
(547,128,713010,'ALQUILER DE BICICLETAS Y ARTÍCULOS PARA DEPORTES'),
(548,128,713020,'ARRIENDO DE VIDEOS, JUEGOS DE VIDEO, Y EQUIPOS REPRODUCTORES DE VIDEO, MÚSICA Y SIMILARES'),
(549,128,713030,'ALQUILER DE MOBILIARIO PARA EVENTOS (SILLAS, MESAS, MESONES, VAJILLAS, TOLDOS Y RELACIONADOS)'),
(550,128,713090,'ALQUILER DE OTROS EFECTOS PERSONALES Y ENSERES DOMÉSTICOS N.C.P.'),
(551,129,722000,'ASESORES Y CONSULTORES EN INFORMÁTICA (SOFTWARE)'),
(552,129,724000,'PROCESAMIENTO DE DATOS Y ACTIVIDADES RELACIONADAS CON BASES DE DATOS'),
(553,129,726000,'EMPRESAS DE SERVICIOS INTEGRALES DE INFORMÁTICA'),
(554,130,725000,'MANTENIMIENTO Y REPARACIÓN DE MAQUINARIA DE OFICINA, CONTABILIDAD E INFORMÁTICA'),
(555,131,731000,'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LAS CIENCIAS NATURALES Y LA INGENIERÍA'),
(556,131,732000,'INVESTIGACIONES Y DESARROLLO EXPERIMENTAL EN EL CAMPO DE LAS CIENCIAS SOCIALES Y LAS HUMANIDADES'),
(557,132,741110,'SERVICIOS JURÍDICOS'),
(558,132,741120,'SERVICIO NOTARIAL'),
(559,132,741130,'CONSERVADOR DE BIENES RAICES'),
(560,132,741140,'RECEPTORES JUDICIALES'),
(561,132,741190,'ARBITRAJES, SÍNDICOS, PERITOS Y OTROS'),
(562,132,741200,'ACTIVIDADES DE CONTABILIDAD, TENEDURÍA DE LIBROS Y AUDITORÍA; ASESORAMIENTOS TRIBUTARIOS'),
(563,132,741300,'INVESTIGACIÓN DE MERCADOS Y REALIZACIÓN DE ENCUESTAS DE OPINIÓN PÚBLICA'),
(564,132,741400,'ACTIVIDADES DE ASESORAMIENTO EMPRESARIAL Y EN MATERIA DE GESTIÓN'),
(565,133,742110,'SERVICIOS DE ARQUITECTURA Y TÉCNICO RELACIONADO'),
(566,133,742121,'EMPRESAS DE SERVICIOS GEOLÓGICOS Y DE PROSPECCIÓN'),
(567,133,742122,'SERVICIOS PROFESIONALES EN GEOLOGÍA Y PROSPECCIÓN'),
(568,133,742131,'EMPRESAS DE SERVICIOS DE TOPOGRAFÍA Y AGRIMENSURA'),
(569,133,742132,'SERVICIOS PROFESIONALES DE TOPOGRAFÍA Y AGRIMENSURA'),
(570,133,742141,'SERVICIOS DE INGENIERÍA PRESTADOS POR EMPRESAS N.C.P.'),
(571,133,742142,'SERVICIOS DE INGENIERÍA PRESTADOS POR PROFESIONALES N.C.P.'),
(572,133,742190,'OTROS SERVICIOS DESARROLLADOS POR PROFESIONALES'),
(573,133,742210,'SERVICIO DE REVISIÓN TÉCNICA DE VEHÍCULOS AUTOMOTORES'),
(574,133,742290,'OTROS SERVICIOS DE ENSAYOS Y ANALISIS TÉCNICOS'),
(575,134,743001,'EMPRESAS DE PUBLICIDAD'),
(576,134,743002,'SERVICIOS PERSONALES EN PUBLICIDAD'),
(577,135,749110,'SERVICIOS SUMINISTRO DE PERSONAL; EMPRESAS SERVICIOS TRANSITORIOS'),
(578,135,749190,'SERVICIOS DE RECLUTAMIENTO DE PERSONAL'),
(579,135,749210,'ACTIVIDADES DE INVESTIGACIÓN'),
(580,135,749221,'SERVICIOS INTEGRALES DE SEGURIDAD'),
(581,135,749222,'TRANSPORTE DE VALORES'),
(582,135,749229,'SERVICIOS PERSONALES RELACIONADOS CON SEGURIDAD'),
(583,135,749310,'EMPRESAS DE LIMPIEZA DE EDIFICIOS RESIDENCIALES Y NO RESIDENCIALES'),
(584,135,749320,'DESRATIZACIÓN Y FUMIGACIÓN NO AGRÍCOLA'),
(585,135,749401,'SERVICIOS DE REVELADO, IMPRESIÓN, AMPLIACIÓN DE FOTOGRAFÍAS'),
(586,135,749402,'ACTIVIDADES DE FOTOGRAFÍA PUBLICITARIA'),
(587,135,749409,'SERVICIOS PERSONALES DE FOTOGRAFÍA'),
(588,135,749500,'SERVICIOS DE ENVASADO Y EMPAQUE'),
(589,135,749911,'SERVICIOS DE COBRANZA DE CUENTAS'),
(590,135,749912,'EVALUACIÓN Y CALIFICACIÓN DEL GRADO DE SOLVENCIA'),
(591,135,749913,'ASESORÍAS EN LA GESTIÓN DE LA COMPRA O VENTA DE PEQUENAS Y MEDIANAS EMPRESAS'),
(592,135,749921,'DISENADORES DE VESTUARIO'),
(593,135,749922,'DISENADORES DE INTERIORES'),
(594,135,749929,'OTROS DISENADORES N.C.P.'),
(595,135,749931,'EMPRESAS DE TAQUIGRAFÍA, REPRODUCCIÓN, DESPACHO DE CORRESPONDENCIA, Y OTRAS LABORES DE OFICINA'),
(596,135,749932,'SERVICIOS PERSONALES DE TRADUCCIÓN, INTERPRETACIÓN Y LABORES DE OFICINA'),
(597,135,749933,'EMPRESAS DE TRADUCCIÓN E INTERPRETACIÓN'),
(598,135,749934,'SERVICIOS DE FOTOCOPIAS'),
(599,135,749940,'AGENCIAS DE CONTRATACIÓN DE ACTORES'),
(600,135,749950,'ACTIVIDADES DE SUBASTA (MARTILLEROS)'),
(601,135,749961,'GALERÍAS DE ARTE'),
(602,135,749962,'FERIAS DE EXPOSICIONES CON FINES EMPRESARIALES'),
(603,135,749970,'SERVICIOS DE CONTESTACIÓN DE LLAMADAS (CALL CENTER)'),
(604,135,749990,'OTRAS ACTIVIDADES EMPRESARIALES N.C.P.'),
(605,136,751110,'GOBIERNO CENTRAL'),
(606,136,751120,'MUNICIPALIDADES'),
(607,136,751200,'ACTIVIDADES DEL PODER JUDICIAL'),
(608,136,751300,'ACTIVIDADES DEL PODER LEGISLATIVO'),
(609,136,752100,'RELACIONES EXTERIORES'),
(610,136,752200,'ACTIVIDADES DE DEFENSA'),
(611,136,752300,'ACTIVIDADES DE MANTENIMIENTO DEL ORDEN PÚBLICO Y DE SEGURIDAD'),
(612,137,753010,'ACTIVIDADES DE PLANES DE SEGURIDAD SOCIAL DE AFILIACIÓN OBLIGATORIA RELACIONADOS CON SALUD'),
(613,137,753020,'CAJAS DE COMPENSACIÓN'),
(614,137,753090,'OTRAS ACTIVIDADES DE PLANES DE SEGURIDAD SOCIAL DE AFILIACIÓN OBLIGATORIA'),
(615,138,801010,'ESTABLECIMIENTOS DE ENSEÑANZA PREESCOLAR'),
(616,138,801020,'ESTABLECIMIENTOS DE ENSEÑANZA PRIMARIA'),
(617,138,802100,'ESTABLECIMIENTOS DE ENSEÑANZA SECUNDARIA DE FORMACIÓN GENERAL'),
(618,138,802200,'ESTABLECIMIENTOS DE ENSEÑANZA SECUNDARIA DE FORMACIÓN TÉCNICA Y PROFESIONAL'),
(619,138,803010,'UNIVERSIDADES'),
(620,138,803020,'INSTITUTOS PROFESIONALES'),
(621,138,803030,'CENTROS DE FORMACIÓN TÉCNICA'),
(622,138,809010,'ESTABLECIMIENTOS DE ENSEÑANZA PRIMARIA Y SECUNDARIA PARA ADULTOS'),
(623,138,809020,'ESTABLECIMIENTOS DE ENSEÑANZA PREUNIVERSITARIA'),
(624,138,809030,'EDUCACIÓN EXTRAESCOLAR (ESCUELA DE CONDUCCIÓN, MÚSICA, MODELAJE, ETC.)'),
(625,138,809041,'EDUCACIÓN A DISTANCIA (INTERNET, CORRESPONDENCIA, OTRAS)'),
(626,138,809049,'SERVICIOS PERSONALES DE EDUCACIÓN'),
(627,139,851110,'HOSPITALES Y CLÍNICAS'),
(628,139,851120,'CLÍNICAS PSIQUIATRICAS, CENTROS DE REHABILITACIÓN, ASILOS Y CLÍNICAS DE REPOSO'),
(629,139,851211,'SERVICIOS DE MÉDICOS EN FORMA INDEPENDIENTE'),
(630,139,851212,'ESTABLECIMIENTOS MÉDICOS DE ATENCIÓN AMBULATORIA (CENTROS MÉDICOS)'),
(631,139,851221,'SERVICIOS DE ODONTÓLOGOS EN FORMA INDEPENDIENTE'),
(632,139,851222,'CENTROS DE ATENCIÓN ODONTOLÓGICA'),
(633,139,851910,'LABORATORIOS CLÍNICOS; INCLUYE BANCOS DE SANGRE'),
(634,139,851920,'OTROS PROFESIONALES DE LA SALUD'),
(635,139,851990,'OTRAS ACTIVIDADES EMPRESARIALES RELACIONADAS CON LA SALUD HUMANA'),
(636,140,852010,'ACTIVIDADES DE CLÍNICAS VETERINARIAS'),
(637,140,852021,'SERVICIOS DE MÉDICOS VETERINARIOS EN FORMA INDEPENDIENTE'),
(638,140,852029,'SERVICIOS DE OTROS PROFESIONALES INDEPENDIENTES EN EL ÁREA VETERINARIA'),
(639,141,853100,'SERVICIOS SOCIALES CON ALOJAMIENTO'),
(640,141,853200,'SERVICIOS SOCIALES SIN ALOJAMIENTO'),
(641,142,900010,'SERVICIOS DE VERTEDEROS'),
(642,142,900020,'BARRIDO DE EXTERIORES'),
(643,142,900030,'RECOGIDA Y ELIMINACIÓN DE DESECHOS'),
(644,142,900040,'SERVICIOS DE EVACUACIÓN DE RILES Y AGUAS SERVIDAS'),
(645,142,900050,'SERVICIOS DE TRATAMIENTO DE RILES Y AGUAS SERVIDAS'),
(646,142,900090,'OTRAS ACTIVIDADES DE MANEJO DE DESPERDICIOS'),
(647,143,911100,'ACTIVIDADES DE ORGANIZACIONES EMPRESARIALES Y DE EMPLEADORES'),
(648,143,911210,'COLEGIOS PROFESIONALES'),
(649,143,911290,'ACTIVIDADES DE OTRAS ORGANIZACIONES PROFESIONALES'),
(650,144,912000,'ACTIVIDADES DE SINDICATOS'),
(651,144,919100,'ACTIVIDADES DE ORGANIZACIONES RELIGIOSAS'),
(652,144,919200,'ACTIVIDADES DE ORGANIZACIONES POLÍTICAS'),
(653,144,919910,'CENTROS DE MADRES Y UNIDADES VECINALES Y COMUNALES'),
(654,144,919920,'CLUBES SOCIALES'),
(655,144,919930,'SERVICIOS DE INSTITUTOS DE ESTUDIOS, FUNDACIONES, CORPORACIONES DE DESARROLLO (EDUCACIÓN, SALUD)'),
(656,144,919990,'ACTIVIDADES DE OTRAS ASOCIACIONES N.C.P.'),
(657,145,921110,'PRODUCCIÓN DE PELÍCULAS CINEMATOGRÁFICAS'),
(658,145,921120,'DISTRIBUIDORA CINEMATOGRÁFICAS'),
(659,145,921200,'EXHIBICIÓN DE FILMES Y VIDEOCINTAS'),
(660,145,921310,'ACTIVIDADES DE TELEVISIÓN'),
(661,145,921320,'ACTIVIDADES DE RADIO'),
(662,145,921411,'SERVICIOS DE PRODUCCIÓN DE RECITALES Y OTROS EVENTOS MUSICALES MASIVOS'),
(663,145,921419,'SERVICIOS DE PRODUCCIÓN TEATRAL Y OTROS N.C.P.'),
(664,145,921420,'ACTIVIDADES EMPRESARIALES DE ARTISTAS'),
(665,145,921430,'ACTIVIDADES ARTÍSTICAS; FUNCIONES DE ARTISTAS, ACTORES, MÚSICOS, CONFERENCISTAS, OTROS'),
(666,145,921490,'AGENCIAS DE VENTA DE BILLETES DE TEATRO, SALAS DE CONCIERTO Y DE TEATRO'),
(667,145,921911,'INSTRUCTORES DE DANZA'),
(668,145,921912,'ACTIVIDADES DE DISCOTECAS, CABARET, SALAS DE BAILE Y SIMILARES'),
(669,145,921920,'ACTIVIDADES DE PARQUES DE ATRACCIONES Y CENTROS SIMILARES'),
(670,145,921930,'ESPECTÁCULOS CIRCENSES, DE TÍTERES U OTROS SIMILARES'),
(671,145,921990,'OTRAS ACTIVIDADES DE ENTRETENIMIENTO N.C.P.'),
(672,146,922001,'AGENCIAS DE NOTICIAS'),
(673,146,922002,'SERVICIOS PERIODÍSTICOS PRESTADO POR PROFESIONALES'),
(674,147,923100,'ACTIVIDADES DE BIBLIOTECAS Y ARCHIVOS'),
(675,147,923200,'ACTIVIDADES DE MUSEOS Y PRESERVACIÓN DE LUGARES Y EDIFICIOS HISTÓRICOS'),
(676,147,923300,'ACTIVIDADES DE JARDINES BOTÁNICOS Y ZOOLÓGICOS Y DE PARQUES NACIONALES'),
(677,148,924110,'EXPLOTACIÓN DE INSTALACIONES ESPECIALIZADAS PARA LAS PRACTICAS DEPORTIVAS'),
(678,148,924120,'ACTIVIDADES DE CLUBES DE DEPORTES Y ESTADIOS'),
(679,148,924131,'FUTBOL PROFESIONAL'),
(680,148,924132,'FUTBOL AMATEUR'),
(681,148,924140,'HIPÓDROMOS'),
(682,148,924150,'PROMOCIÓN Y ORGANIZACIÓN DE ESPECTÁCULOS DEPORTIVOS'),
(683,148,924160,'ESCUELAS PARA DEPORTES'),
(684,148,924190,'OTRAS ACTIVIDADES RELACIONADAS AL DEPORTE N.C.P.'),
(685,148,924910,'SISTEMAS DE JUEGOS DE AZAR MASIVOS.'),
(686,148,924920,'ACTIVIDADES DE CASINO DE JUEGOS'),
(687,148,924930,'SALAS DE BILLAR, BOWLING, POOL Y JUEGOS ELECTRÓNICOS'),
(688,148,924940,'CONTRATACIÓN DE ACTORES PARA CINE, TV, Y TEATRO'),
(689,148,924990,'OTROS SERVICIOS DE DIVERSIÓN Y ESPARCIMIENTOS N.C.P.'),
(690,149,930100,'LAVADO Y LIMPIEZA DE PRENDAS DE TELA Y DE PIEL, INCLUSO LAS LIMPIEZAS EN SECO'),
(691,149,930200,'PELUQUERÍAS Y SALONES DE BELLEZA'),
(692,149,930310,'SERVICIOS FUNERARIOS'),
(693,149,930320,'SERVICIOS EN CEMENTERIOS'),
(694,149,930330,'SERVICIOS DE CARROZAS FÚNEBRES (TRANSPORTE DE CADÁVERES)'),
(695,149,930390,'OTRAS ACTIVIDADES DE SERVICIOS FUNERARIOS Y OTRAS ACTIVIDADES CONEXAS'),
(696,149,930910,'ACTIVIDADES DE MANTENIMIENTO FÍSICO CORPORAL (BAÑOS, TURCOS, SAUNAS)'),
(697,150,950001,'HOGARES PRIVADOS INDIVIDUALES CON SERVICIO DOMÉSTICO'),
(698,150,950002,'CONSEJO DE ADMINISTRACIÓN DE EDIFICIOS Y CONDOMINIOS'),
(699,151,990000,'ORGANIZACIONES Y ÓRGANOS EXTRATERRITORIALES');



INSERT INTO `empresa` (`EMP_RUT`, `COM_ID`, `EMP_NOMBRE`, `EMP_DIRECCION`, `EMP_TELEFONO`, `EMP_CELULAR`, `EMP_DESCRIPCION`, `EMP_EMAIL`, `EMP_WEB`) VALUES
('79.853.470-K', 233, 'Automotriz Cordillera Ltda.', 'Paicavi 533', '041-2495968', NULL, NULL, NULL, NULL),
('87.019.000-K', 240, 'Crecic S.A.', 'Janequeo 454', NULL, NULL, NULL, 'info@crecic.cl', 'www.crecic.cl'),
('87.674.400-7', 233, 'Laboratorio Pasteur', 'Serrano 568', NULL, NULL, NULL, 'info@lpasteur.cl', 'www.lpasteur.cl'),
('91.510.000-7', 242, 'Edyce Metalúrgica S.A.', 'Calle Algarrobo 159', NULL, NULL, NULL, 'info@edyce.cl', 'www.edyce.cl'),
('94.637.000-2', 242, 'CAP Siderúrgica Huachipato S.A.', 'Gran Bretaña 2910', NULL, NULL, NULL, 'info@cap.cl', 'www.cap.cl'),
('99.999.999-8', 3, 'INFORMATICA OCHO LTDA.', 'Collao 888', '041-2888888', '09-88888888', 'Servicios Informáticos', 'email@info_ocho.cl', 'www.informaticaocho.cl');




INSERT INTO `supervisor` (`SUP_ID`, `SUP_RUT`, `EMP_RUT`, `SUP_PASSWORD`, `SUP_NOMBRES`, `SUP_APELLIDO_P`, `SUP_APELLIDO_M`, `SUP_EMAIL`, `SUP_TELEFONO`, `SUP_CELULAR`, `SUP_ESTADO`, `SUP_PROFESION`, `SUP_CARGO`) VALUES
(1, '17.345.718-9', '99.999.999-8', '12345', 'Pedro', 'Perez', 'Pereira', 'pedropp@hotmail.com', '569-5555555', '+56922222222', 'Inactivo', 'Ingeniero (E) Computación e Informática', 'Diseñador - Programador'),
(2, '16.545.313-1', '79.853.470-K', '12345', 'Francisco Eduardo', 'Perez', 'Quezada', 'fquezada@acordillera.cl', NULL, NULL, 'activo', 'Ingenierio Mecánico', 'Jefe Planta'),
(3, '16.651.099-6', '87.019.000-K', '12345', 'Pablo Humberto', 'Garcés', 'Alvarez', 'pgarces@crecic.cl', NULL, NULL, 'activo', 'Ingenierio Informático', 'Jefe de Redes'),
(4, '17.394.373-3', '87.674.400-7', '12345', 'Romina del Carmen', 'Espinoza', 'Cerna', 'respinoza@lpasteur.cl', NULL, NULL, 'activo', 'Químico Farmaceutico', 'Jefe Laboratorio'),
(5, '17.569.207-K', '94.637.000-2', '12345', 'Francisca Isidora', 'González', 'Urrutia', 'fgonzalez@edyce.cl', NULL, NULL, 'activo', 'Ingeniero Constructor', 'Supervisor de Obra'),
(6, '18.684.775-K', '94.637.000-2', '12345', 'Katherine Valentina', 'Barrientos', 'Arriagada', 'kbarrientos@hotmail.com', '333-3333333', '+56911111111', 'Inactivo', 'Ingeniero Industrial', 'Jefe de Procesos Industriales'),
(7, '16.976.132-9', '79.853.470-K', '12345', 'Jose', 'Roa', 'Roa', 'jose@hotmail.com', '041-2432311', '+56982828282', 'Activo', 'Informático', 'Ingeniero');





INSERT INTO `alumno` (`ALU_RUT`, `CAR_ID`, `ALU_PASSWORD`, `ALU_NOMBRES`, `ALU_APELLIDO_P`, `ALU_APELLIDO_M`, `ALU_EMAIL`, `ALU_CELULAR`, `ALU_TELEFONO`, `ALU_AGNIO_INGRESO`, `ALU_PERIODOS_CURSADOS`, `ALU_DIRECCION`, `ALU_ESTADO`) VALUES
('17.571.601-7', 29037, '12345', 'Pablo Andrés', 'Lara', 'Cofré', 'pablara@alumnos.ubiobio.cl', NULL, NULL, '2010-03-03', 8, NULL, 'activo'),
('17.853.564-1', 29037, '12345', 'Ariel Alfredo', 'Andia', 'Roa', 'aandia@alumnos.ubiobio.cl', NULL, NULL, '2010-03-03', 8, NULL, 'activo'),
('17.853.699-0', 29037, '12345', 'Ronald Sebastián', 'Pinto', 'Vergara', 'ronpinto@alumnos.ubiobio.cl', NULL, NULL, '2010-03-03', 8, NULL, 'activo'),
('18.107.501-5', 29037, '12345', 'Camilo Ignacio', 'Alarcón ', 'Palma', 'cialarco@alumnos.ubiobio.cl', '56988825459', '041-2651237', '2010-03-03', 8, NULL, 'activo');



INSERT INTO `coordinador` (`COO_RUT`, `CAR_ID`, `COO_PASSWORD`, `COO_NOMBRES`, `COO_APELLIDO_P`, `COO_APELLIDO_M`, `COO_EMAIL`, `COO_TELEFONO`, `COO_CELULAR`, `COO_CARGO`, `COO_ESTADO`) VALUES
('15.191.637-6', 29037, '12345', 'Patricio', 'Galvez', 'Glavez', 'pgalvez@ubiobio.cl', NULL, NULL, 'Coordinador', 'activo'),
('16.153.872-8', 29037, '12345', 'Roberto', 'Mercado', 'Cuevas', 'rmercado@ubiobio.cl', NULL, NULL, 'Coordinador', 'activo');



INSERT INTO `secretaria` (`SEC_RUT`, `SEC_PASSWORD`, `SEC_NOMBRES`, `SEC_APELLIDO_P`, `SEC_APELLIDO_M`, `SEC_EMAIL`, `SEC_TELEFONO`, `SEC_CELULAR`, `SEC_ESTADO`) VALUES
('16.157.426-0', '12345', 'Andrea', 'Vidal', 'Riveros', 'avidal@ubiobio.cl', NULL, NULL, 'activo');