-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 15, 2024 alle 16:37
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestione_libreria`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `libri`
--

CREATE TABLE `libri` (
  `id` int(11) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `autore` varchar(100) NOT NULL,
  `anno_pubblicazione` int(4) NOT NULL,
  `genere` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `libri`
--

INSERT INTO `libri` (`id`, `titolo`, `autore`, `anno_pubblicazione`, `genere`) VALUES
(25, 'La felicità è una storia semplice', ' Lorenza Gentile', 2024, 'Narrativa Italiana'),
(33, 'I pesci non chiudono gli occhi', 'Erri De Luca', 2023, 'Narrativa italiana'),
(34, 'La banalità del male. Eichmann a Gerusalemme', ' Hannah Arendt', 2003, ' Società, politica e comunicazione'),
(43, 'La banalità del male. Eichmann a Gerusalemme. ', ' Hannah Arendt', 2009, ' Società, politica e comunicazione'),
(44, 'Vita in vendita', ' Yukio Mishima', 1999, ' Narrativa straniera'),
(45, 'Un sabato, con gli amici', 'Andrea Camilleri', 2018, ' Narrativa italiana'),
(46, "Un\' ultima cosa", ' Concita De Gregorio', 2024, ' Narrativa italiana');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `libri`
--
ALTER TABLE `libri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `libri`
--
ALTER TABLE `libri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
