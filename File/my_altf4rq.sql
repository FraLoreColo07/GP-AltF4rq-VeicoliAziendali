-- phpMyAdmin SQL Dump
-- version 4.1.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 04, 2021 alle 18:35
-- Versione del server: 8.0.21
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_altf4rq`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_admin`
--

CREATE TABLE IF NOT EXISTS `altf4_admin` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_auto`
--

CREATE TABLE IF NOT EXISTS `altf4_auto` (
  `TARGA` varchar(32) NOT NULL,
  `modello` varchar(32) NOT NULL,
  `marca` varchar(32) NOT NULL,
  `DataAcquisto` date NOT NULL,
  `DataRevisione` date NOT NULL,
  PRIMARY KEY (`TARGA`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_prenotazione`
--

CREATE TABLE IF NOT EXISTS `altf4_prenotazione` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `IDUtente` int NOT NULL,
  `TargaAuto` varchar(32) NOT NULL,
  `data` date NOT NULL,
  `oraIn` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_storico`
--

CREATE TABLE IF NOT EXISTS `altf4_storico` (
  `ID` int NOT NULL,
  `data` date NOT NULL,
  `oraIn` time NOT NULL,
  `oraOut` time NOT NULL,
  `IDUtente` int NOT NULL,
  `TargaAuto` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_utenti`
--

CREATE TABLE IF NOT EXISTS `altf4_utenti` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(64) NOT NULL,
  `cognome` varchar(64) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `dataNascita` date NOT NULL,
  `cell` varchar(16) NOT NULL,
  `isEsterno` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_utilizzo`
--

CREATE TABLE IF NOT EXISTS `altf4_utilizzo` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `oraIn` time NOT NULL,
  `oraOut` time NOT NULL,
  `IDUtente` int NOT NULL,
  `TargaAuto` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
