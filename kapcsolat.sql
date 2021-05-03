CREATE DATABASE `kapcsolat`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `kapcsolat`;

CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `email` varchar(42) NOT NULL default '',
  `uzenet` varchar(46) NOT NULL default '',  
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `messages` (`id`,`csaladi_nev`,`uto_nev`,`email`,`uzenet`) VALUES 
 (1,'Családi_1','Utónév_1','jani@gmail.com','Köszönöm szépen, nagyon jó!')