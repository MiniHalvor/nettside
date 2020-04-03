-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28. Jan, 2020 08:23 AM
-- Tjener-versjon: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dykking`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `dykk`
--

CREATE TABLE `dykk` (
  `dykkID` int(11) NOT NULL,
  `dato` date NOT NULL,
  `sted` varchar(45) NOT NULL,
  `dybde` int(11) NOT NULL,
  `luftforbruk` int(11) NOT NULL,
  `kommentarer` mediumtext NOT NULL,
  `siktID` int(11) NOT NULL,
  `dykkerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `dykk`
--

INSERT INTO `dykk` (`dykkID`, `dato`, `sted`, `dybde`, `luftforbruk`, `kommentarer`, `siktID`, `dykkerID`) VALUES
(1, '2014-02-10', 'Trondheimsfjorden', 30, 100, 'Det var fisk der nede. ', 1, 1),
(2, '2014-02-01', 'Hitra', 40, 150, 'Så både fisk og korallrev', 3, 4),
(3, '2014-02-11', 'Hitra', 25, 90, 'Jeg så ingenting. ', 2, 5),
(4, '2014-02-04', 'Frøya', 32, 120, 'Fant vraket av en kano. ', 1, 4),
(5, '2014-01-02', 'Trondheimsfjorden', 40, 160, 'Fullt av fisk', 1, 1),
(6, '2014-01-02', 'Trondheimsfjorden', 40, 150, 'Mye fisk, ja. ', 1, 2),
(7, '2014-01-05', 'Råkvåg', 20, 90, 'Her var det korallrev. ', 3, 3),
(8, '2014-01-08', 'Hitra', 35, 160, 'Jeg så ingenting. ', 2, 5),
(9, '2014-01-02', 'Trondheimsfjorden', 40, 180, 'Jeg så fisk. ', 1, 4),
(10, '2014-01-15', 'Trondheimsfjorden', 15, 50, 'Jeg så både fisk og korallrev. ', 1, 6),
(11, '2014-02-02', 'Frøya', 30, 100, 'Mye fisk og korallrev. ', 3, 2),
(12, '2014-02-03', 'Trondheimsfjorden', 45, 160, 'Jeg så ingenting. ', 2, 3),
(13, '2014-02-06', 'Hitra', 20, 80, 'Fin dykketur. Så en hval. ', 1, 5),
(14, '2014-02-06', 'Hitra', 20, 80, 'Jeg så også en hval. ', 1, 1);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `dykker`
--

CREATE TABLE `dykker` (
  `dykkerID` int(11) NOT NULL,
  `fornavn` varchar(45) NOT NULL,
  `etternavn` varchar(45) NOT NULL,
  `medlemSiden` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `dykker`
--

INSERT INTO `dykker` (`dykkerID`, `fornavn`, `etternavn`, `medlemSiden`) VALUES
(1, 'David', 'McGoldrick', '2011-03-01'),
(2, 'Mick', 'Stockwell', '2013-02-05'),
(3, 'Anne', 'Olsen', '2009-05-17'),
(4, 'Marie', 'Dypvik', '2014-02-04'),
(5, 'Kåre', 'Kåringen', '2007-09-03'),
(6, 'Sissel', 'Jølsrud', '2012-10-01');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `sikt`
--

CREATE TABLE `sikt` (
  `siktID` int(11) NOT NULL,
  `kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dataark for tabell `sikt`
--

INSERT INTO `sikt` (`siktID`, `kategori`) VALUES
(1, 'god'),
(2, 'dårlig'),
(3, 'begrenset');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dykk`
--
ALTER TABLE `dykk`
  ADD PRIMARY KEY (`dykkID`);

--
-- Indexes for table `dykker`
--
ALTER TABLE `dykker`
  ADD PRIMARY KEY (`dykkerID`);

--
-- Indexes for table `sikt`
--
ALTER TABLE `sikt`
  ADD PRIMARY KEY (`siktID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dykk`
--
ALTER TABLE `dykk`
  MODIFY `dykkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `dykker`
--
ALTER TABLE `dykker`
  MODIFY `dykkerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sikt`
--
ALTER TABLE `sikt`
  MODIFY `siktID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
