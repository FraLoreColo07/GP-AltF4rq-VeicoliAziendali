-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 14, 2021 alle 09:49
-- Versione del server: 10.4.6-MariaDB
-- Versione PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_altf4rq`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_auto`
--

CREATE TABLE `altf4_auto` (
  `TARGA` varchar(32) NOT NULL,
  `modello` varchar(32) NOT NULL,
  `marca` varchar(32) NOT NULL,
  `DataAcquisto` date NOT NULL,
  `DataRevisione` date NOT NULL,
  `img` text DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `altf4_auto`
--

INSERT INTO `altf4_auto` (`TARGA`, `modello`, `marca`, `DataAcquisto`, `DataRevisione`, `img`, `status`) VALUES
('Y77777', 's', 's', '2021-05-13', '2021-05-20', 'https://www.ansa.it/webimages/img_620x438/2018/11/28/18498eaa629a8901113de983e5dc2523.jpg', 0),
('AC567DC', 'g', 'o', '2019-04-30', '2021-06-01', 'https://www.pechini.it/wp-content/uploads/sites/369/2016/03/renault-clio-usata-milano-pavia.jpg', 0),
('XA444GB', 'm', 'n', '2020-02-19', '2021-01-15', 'https://www.ansa.it/webimages/img_620x438/2021/3/31/1bee2c803874cef8bcdf589607723749.jpg', 0),
('CH878LL', 'a', 'p', '2010-09-16', '2021-04-25', 'https://img2.stcrm.it/images/1029611/HOR_STD/1200x/fiat-500l-expo-2015.jpg', 0),
('RA000TE', 'y', 'z', '2021-01-09', '2021-05-06', 'https://www.fiat.it/content/dam/fiat/cross/models/500x-2020/family-page/design-gallery/mobile/Fiat-500X-MY21-arancio-sicilia-color-mobile-288x220.jpg', 0),
('JA234KR', 'v', 'v', '2021-03-09', '2021-06-08', 'https://www.fiat.it/content/dam/fiat/cross/models/panda-2020/opening/desktop/figurini/Panda-Model-page-Gelato-White-Car-Desktop-680x430.png', 0),
('MB009CH', 'l', 'p', '2020-12-19', '2021-05-14', 'https://cdn.euroncap.com/media/26660/toyota_c-hr_2017_uc-homepage.jpg?mode=crop&width=359&height=235', 0),
('GF699AA', 'd', 'h', '2020-11-03', '2021-05-10', 'https://www.mercedes-benz.it/passengercars/mercedes-benz-cars/models/a-class/hatchback-w177/_jcr_content/image.MQ6.2.2x.20201120182323.png', 0),
('DY073XX', 'm', 'a', '2021-01-13', '2021-05-15', 'https://www.lancia.it/PublishingImages/reskin-2018/submenu_img/maryne_header_2020_766x410.png', 0),
('BX567LA', 'z', 'o', '2019-12-17', '2021-02-15', 'https://www.casciolirent.com/wp-content/uploads/2021/02/ALFA-ROMEO-GIULIA-FOTO-SITO-2.jpg', 0),
('PV867PO', 'h', 'q', '2021-04-10', '2021-05-12', 'https://cdn.drivek.it/configurator-covermobile/cars/it/$original$/BMW/X1/38512_SUV-5-PORTE/bmw-x1-2019-facelift-cover-mobile.jpg', 0),
('AZ008KA', 'k', 'r', '2021-03-31', '2021-05-20', 'https://cdn.motor1.com/images/mgl/lpk2g/s1/peugeot-308-rendering.jpg', 0),
('DA365CY', 'c', 'l', '2020-09-26', '2021-05-16', 'https://cdn.motor1.com/images/mgl/KqwQA/s3/2019-alfa-romeo-giulietta.jpg', 0),
('XC579MA', 'a', 'v', '2020-08-15', '2021-05-11', 'https://www.motorionline.com/wp-content/uploads/2019/05/Volkswagen-T-Roc-1-1024x703.jpg', 0),
('KJ098NN', 'q', 'k', '2020-09-05', '2021-05-17', 'https://www.motorionline.com/wp-content/uploads/2019/07/renault-captur-2019-07_13.jpg', 0),
('ZA756DE', 'd', 't', '2020-07-31', '2021-05-21', 'https://cdn.motor1.com/images/mgl/y8J1l/s3/nuova-opel-corsa-ecco-quella-benzina-e-diesel.jpg', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_prenotazione`
--

CREATE TABLE `altf4_prenotazione` (
  `ID` int(11) NOT NULL,
  `IDUtente` int(11) NOT NULL,
  `TargaAuto` varchar(32) NOT NULL,
  `data` date NOT NULL,
  `oraIn` time NOT NULL,
  `Destinazione` varchar(64) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `altf4_prenotazione`
--

INSERT INTO `altf4_prenotazione` (`ID`, `IDUtente`, `TargaAuto`, `data`, `oraIn`, `Destinazione`) VALUES
(1, 1, 'Y77777', '2012-11-15', '00:00:12', 'dsa'),
(2, 1, 'Y77777', '2012-11-19', '11:00:00', 'sfd'),
(3, 1, 'Y77777', '2012-10-20', '12:00:00', 'Merone'),
(4, 3, 'Y77777', '2020-12-03', '13:00:00', 'f'),
(5, 1, 'Y77777', '2012-10-20', '12:00:00', 'Erba'),
(6, 3, 'Y77777', '2010-05-21', '16:00:00', 'Mariano'),
(7, 1, '1', '2021-05-05', '12:00:00', 'wasdf'),
(8, 6, 'JA234KR', '2021-05-15', '16:35:07', 'Lecco'),
(9, 20, 'KJ098NN', '2021-05-09', '12:00:00', 'Cantù'),
(10, 10, 'DY073XX', '2021-05-11', '10:57:18', 'Giussano'),
(11, 16, 'MB009CH', '2021-05-13', '11:21:45', 'Meda'),
(12, 32, 'XC579MA', '2021-05-03', '13:45:56', 'Inverigo'),
(13, 29, 'AZ008KA', '2021-05-05', '17:34:36', 'Como'),
(14, 25, 'CH878LL', '2021-05-09', '15:00:00', 'Sesto San Giovanni'),
(15, 15, 'XA444GB', '2021-05-02', '14:30:00', 'Carugate'),
(16, 8, 'PV867PO', '2021-05-17', '16:30:00', 'Pavia'),
(17, 22, 'JA234KR', '2021-05-12', '15:15:00', 'Cabiate'),
(18, 4, 'RA000TE', '2021-05-16', '09:45:00', 'Perticato'),
(19, 9, 'ZA756DE', '2021-05-20', '17:30:00', 'Alserio'),
(20, 11, 'DA365CY', '2021-05-23', '15:45:00', 'Milano'),
(21, 12, 'GF699AA', '2021-05-22', '16:00:00', 'Cologno Monzese'),
(22, 13, 'AC567DC', '2021-05-26', '21:00:00', 'Vimercate'),
(23, 15, 'DY073XX', '2021-05-27', '18:45:00', 'Bergamo');

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_utenti`
--

CREATE TABLE `altf4_utenti` (
  `ID` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `cognome` varchar(64) DEFAULT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `dataNascita` date NOT NULL,
  `cell` varchar(16) NOT NULL,
  `isEsterno` tinyint(1) DEFAULT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isFirstAccess` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `altf4_utenti`
--

INSERT INTO `altf4_utenti` (`ID`, `nome`, `cognome`, `username`, `password`, `dataNascita`, `cell`, `isEsterno`, `isAdmin`, `isFirstAccess`) VALUES
(1, 'prova', 'prova', 'prova', '189bbbb00c5f1fb7fba9ad9285f193d1', '2021-04-05', '111', 0, 0, 0),
(2, 'prova2', 'prova2', 'prova2', '189bbbb00c5f1fb7fba9ad9285f193d1', '2021-04-14', '1', 0, 0, 0),
(3, 'Mario', 'Rossi', 'rossimario', '2bf65275cb7f5dc95febd7d46cd7d0af', '2000-12-10', '2222222222', 0, 1, 0),
(4, 'Francesco', NULL, 'francescor', NULL, '1989-05-25', '3455669', NULL, 1, 1),
(5, 'Andrea', NULL, 'andreag', NULL, '1984-03-03', '1236789', NULL, 1, 1),
(6, 'Francesca', NULL, 'francesca', NULL, '1988-06-08', '4567812', NULL, 1, 1),
(7, 'Federico', NULL, 'federicop', NULL, '1992-09-12', '3338888', NULL, 0, 1),
(8, 'Alessandro', NULL, 'alessandrob', NULL, '1979-11-11', '4438080', NULL, 0, 1),
(9, 'Agnese', NULL, 'agnesed', NULL, '1996-07-07', '1212021', NULL, 0, 1),
(10, 'Nicolò', NULL, 'nicolom', NULL, '1965-01-19', '5459999', NULL, 0, 1),
(11, 'Andrea', NULL, 'andreac', NULL, '1969-02-07', '7772222', NULL, 0, 1),
(12, 'Alberto', NULL, 'albertob', NULL, '1977-10-17', '7531919', NULL, 0, 1),
(13, 'Emanuele', NULL, 'emanuelem', NULL, '1994-08-29', '7119898', NULL, 0, 1),
(14, 'Marco', NULL, 'marcob', NULL, '1987-12-12', '6547173', NULL, 0, 1),
(15, 'Nicolò', NULL, 'nicolod', NULL, '1997-04-30', '8712943', NULL, 0, 1),
(16, 'Alessandro', NULL, 'alessandror', NULL, '1980-09-25', '9871234', NULL, 0, 1),
(17, 'Tiziano', NULL, 'tizianob', NULL, '1964-08-31', '3562177', NULL, 0, 1),
(18, 'Gianluigi', NULL, 'gianluigis', NULL, '1970-03-27', '4329876', NULL, 0, 1),
(19, 'Claudio', NULL, 'claudios', NULL, '1974-10-30', '3908900', NULL, 0, 1),
(20, 'Girolamo', NULL, 'girolamof', NULL, '1985-07-14', '3788795', NULL, 0, 1),
(21, 'Giovanni', NULL, 'giovannil', NULL, '1991-09-26', '6459871', NULL, 1, 1),
(22, 'Marco', NULL, 'marcoc', NULL, '1967-12-12', '5679009', NULL, 0, 1),
(23, 'Kristian', NULL, 'kristiang', NULL, '1983-11-09', '3215678', NULL, 0, 1),
(24, 'Lorenzo', NULL, 'lorenzob', NULL, '1976-03-29', '6502345', NULL, 0, 1),
(25, 'Antonio', NULL, 'antonioa', NULL, '1971-08-03', '1115555', NULL, 0, 1),
(26, 'Piergiorgio', NULL, 'piergiorgiou', NULL, '1962-01-10', '9216688', NULL, 0, 1),
(27, 'Claudio', NULL, 'claudioa', NULL, '1967-11-16', '3719595', NULL, 0, 1),
(28, 'Mattia', NULL, 'mattiab', NULL, '1999-07-02', '7663456', NULL, 0, 1),
(29, 'Michele', NULL, 'michelec', NULL, '1992-09-05', '1235757', NULL, 0, 1),
(30, 'Michele', NULL, 'micheleg', NULL, '1993-12-07', '8881111', NULL, 0, 1),
(31, 'Francesco', NULL, 'francescom', NULL, '1973-12-04', '6435856', NULL, 0, 1),
(32, 'Giuseppe', NULL, 'giuseppep', NULL, '1972-11-13', '8975321', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `altf4_utilizzo`
--

CREATE TABLE `altf4_utilizzo` (
  `ID` int(11) NOT NULL,
  `data` date NOT NULL,
  `oraIn` time NOT NULL,
  `oraOut` time NOT NULL,
  `Destinazione` varchar(64) NOT NULL,
  `DescrizioneStato` longtext DEFAULT NULL,
  `IDUtente` int(11) NOT NULL,
  `TargaAuto` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `altf4_utilizzo`
--

INSERT INTO `altf4_utilizzo` (`ID`, `data`, `oraIn`, `oraOut`, `Destinazione`, `DescrizioneStato`, `IDUtente`, `TargaAuto`) VALUES
(7, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(5, '2021-04-06', '13:05:00', '14:00:00', '', NULL, 1, 'EC134VB'),
(8, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(9, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(10, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(11, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(12, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(13, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(14, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(15, '2021-04-06', '13:00:00', '14:00:00', '', NULL, 1, 'EC834VB'),
(23, '2021-05-04', '22:31:35', '00:00:00', 'dest', NULL, 1, 'Y77777'),
(19, '2021-05-04', '18:35:52', '00:00:00', 'dsa', NULL, 1, 'Y77777'),
(20, '2021-05-04', '18:37:21', '00:00:00', 'sa', NULL, 1, 'Y77777'),
(21, '2021-05-04', '18:38:16', '00:00:00', 'sa', NULL, 1, 'Y77777'),
(22, '2021-05-04', '18:41:46', '00:00:00', 'sad', NULL, 1, 'Y77777'),
(24, '2021-05-05', '11:27:29', '00:00:00', 'procva', NULL, 1, 'Y77777'),
(25, '2021-05-05', '11:40:24', '00:00:00', 'mariano comense', NULL, 3, 'Y77777'),
(26, '2021-05-05', '15:46:06', '00:00:00', 'Arosio', NULL, 3, 'Y77777'),
(27, '2021-05-06', '18:39:01', '00:00:00', 'livigno', NULL, 3, 'Y77777'),
(28, '2021-05-06', '18:41:32', '00:00:00', 'ao', NULL, 3, 'Y77777'),
(29, '2021-05-06', '18:44:24', '00:00:00', 's', NULL, 3, 'Y77777');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `altf4_auto`
--
ALTER TABLE `altf4_auto`
  ADD PRIMARY KEY (`TARGA`);

--
-- Indici per le tabelle `altf4_prenotazione`
--
ALTER TABLE `altf4_prenotazione`
  ADD PRIMARY KEY (`ID`);

--
-- Indici per le tabelle `altf4_utenti`
--
ALTER TABLE `altf4_utenti`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indici per le tabelle `altf4_utilizzo`
--
ALTER TABLE `altf4_utilizzo`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `altf4_prenotazione`
--
ALTER TABLE `altf4_prenotazione`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT per la tabella `altf4_utenti`
--
ALTER TABLE `altf4_utenti`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT per la tabella `altf4_utilizzo`
--
ALTER TABLE `altf4_utilizzo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
