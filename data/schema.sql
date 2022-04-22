-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 22. Apr 2022 um 17:19
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Datenbank: `main`
--
CREATE DATABASE IF NOT EXISTS `main` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `main`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Note` decimal(6,0) NOT NULL,
  `Date` date NOT NULL,
  `userID` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `note`
--

INSERT INTO `note` (`id`, `Note`, `Date`, `userID`) VALUES
(1, '5', '0000-00-00', 3),
(2, '6', '2022-04-22', 3),
(4, '5', '2022-04-22', 4),
(6, '6', '2022-04-22', 4);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstName` varchar(64) NOT NULL,
  `lastName` varchar(64) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(3, 'Michael', 'Stocker', 'gahtdich@nuet.ah', '33c5ebbb01d608c254b3b12413bdb03e46c12797e591770ccf20f5e2819929b2'),
(4, 'asdasdasd', 'asdasdasd', 'asdasdasd', '33c5ebbb01d608c254b3b12413bdb03e46c12797e591770ccf20f5e2819929b2');

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `fk_userID` FOREIGN KEY (`userID`) REFERENCES `user` (`id`);
COMMIT;
