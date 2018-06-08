<?php

include 'db_connect.php';
$sql = "CREATE TABLE `user` (
 `id` int(25) NOT NULL AUTO_INCREMENT,
 `username` varchar(255) NOT NULL,
 `name` varchar(255) NOT NULL,
 `password` varchar(255) NOT NULL,
 `email` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `polls` (
 `id` int(25) NOT NULL,
 `creatorId` int(25) NOT NULL,
 `question` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `answers` (
 `id` int(25) NOT NULL AUTO_INCREMENT,
 `pollId` int(25) NOT NULL,
 `answer` varchar(255) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `votes` (
 `id` int(25) NOT NULL AUTO_INCREMENT,
 `userId` int(25) NOT NULL,
 `answerId` int(25) NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

$bdd->exec($sql);

$sql = "CREATE TABLE `poll`.`friends` (
 `id` INT NOT NULL AUTO_INCREMENT ,
 `friend1` INT NOT NULL ,
  `friend2` INT NOT NULL ,
   PRIMARY KEY (`id`)
) ENGINE = InnoDB DEFAULT CHARSET=latin1";

$bdd->exec($sql);




?>
