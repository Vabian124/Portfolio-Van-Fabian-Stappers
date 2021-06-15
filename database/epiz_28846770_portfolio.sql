-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql205.epizy.com
-- Generation Time: Jun 15, 2021 at 07:53 AM
-- Server version: 5.6.48-88.0
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_28846770_portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `naam` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `bedrijfsnaam` varchar(50) NOT NULL,
  `adres` varchar(50) NOT NULL,
  `vestegingsplaats` varchar(50) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `telefoonnummer` varchar(14) NOT NULL,
  `ondewerp` varchar(100) NOT NULL,
  `bericht` varchar(5000) NOT NULL,
  `datum` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`naam`, `email`, `bedrijfsnaam`, `adres`, `vestegingsplaats`, `postcode`, `telefoonnummer`, `ondewerp`, `bericht`, `datum`) VALUES
('f', 'a', 'b', 'b', 'v', 'i', '2', 'b', 'i', '0000-00-00'),
('f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', '06/11/2021 03:44:43 '),
('f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', '06/11/2021 03-1:45:5'),
('f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', 'f', '06/11/2021 02:47:28 '),
('Fabian', 'fcsta@g.co', 'lidl', 'haarlemstraat 3', 'haarlem', '2038WB', '0611', 'hallo, ow', 'hdjehd\r\ndhhdehdie\r\nhdiehdiehdiheihd', '06/11/2021 11:29:30 '),
('Fabian', 'F.c.@qejfn', 'Bd', 'B', 'Hd', 'Bd', 'B', 'H', 'Bdbdbdb', '06/14/2021 01:16:00 ');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(5) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `naam`, `type`) VALUES
(1, 'ahk Fabian.jpeg', 'jpeg'),
(2, 'Banner.png', 'png'),
(3, 'BINGO.jpeg', 'jpeg'),
(4, 'vomar.jpeg', 'jpeg'),
(5, 'spotta.jpeg', 'jpeg'),
(6, 'ibm.jpeg', 'jpeg'),
(7, 'profile-1.jpeg', 'jpeg'),
(8, 'profile-2.jpeg', 'jpeg'),
(9, 'profile-3.jpeg', 'jpeg'),
(10, 'profile-4.jpeg', 'jpeg'),
(11, 'profile-5.jpeg', 'jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `projecten`
--

CREATE TABLE `projecten` (
  `projectId` int(5) NOT NULL,
  `kopje` varchar(100) NOT NULL,
  `beschrijving` varchar(500) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projecten`
--

INSERT INTO `projecten` (`projectId`, `kopje`, `beschrijving`, `image`) VALUES
(1, 'Bingo', 'Het spel Bingo', 'BINGO.png'),
(2, 'AutoHotKey', 'Software geschreven in AutoHotKey om een spel te besturen met een DJ set', ''),
(3, 'Ik heb mijn fiets gerepareerd', 'ja, inderdaad', '');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `taal` varchar(50) NOT NULL,
  `procent` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`taal`, `procent`) VALUES
('C#', 90),
('Python', 60),
('JavaScript', 10),
('PHP', 20),
('MySQL', 20);

-- --------------------------------------------------------

--
-- Table structure for table `werkervaring`
--

CREATE TABLE `werkervaring` (
  `kopje` varchar(50) NOT NULL,
  `beschrijving` varchar(200) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `werkervaring`
--

INSERT INTO `werkervaring` (`kopje`, `beschrijving`, `image`) VALUES
('Vomar Voordeelmarkt', 'Dit is mijn huidige baan als vulploegmedewerker', 'vomar.jpeg'),
('Spotta', 'Hier was ik krantenbezorger', 'spotta.jpeg'),
('FBI', 'Ik werkte bij de FBI', ''),
('Vomar', 'Ik heb bij 2 vomars gewerkt', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projecten`
--
ALTER TABLE `projecten`
  ADD PRIMARY KEY (`projectId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projecten`
--
ALTER TABLE `projecten`
  MODIFY `projectId` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
