-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2024 at 02:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(10) NOT NULL,
  `ime` varchar(25) NOT NULL,
  `prezime` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `email`, `username`, `password`) VALUES
(23, 'Aca', 'Akic', 'aca@gmail.com', 'aca123', '$2y$10$n/8qWOnmfsbrzfNt2OdEL.rRR/6MI7RLywrA2/ASgvrorvla1/bBS');

-- --------------------------------------------------------

--
-- Table structure for table `restoran`
--

CREATE TABLE `restoran` (
  `id` int(100) NOT NULL,
  `naziv` varchar(100) NOT NULL,
  `lokacija` varchar(100) NOT NULL,
  `telefon` int(30) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restoran`
--

INSERT INTO `restoran` (`id`, `naziv`, `lokacija`, `telefon`, `email`) VALUES
(4, 'palas', 'kg', 611122, 'palas@gmail.com'),
(5, 'tradicija', 'bulevar', 68921, 'tradicija@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `rezervacije`
--

CREATE TABLE `rezervacije` (
  `id` int(100) NOT NULL,
  `ime` int(255) NOT NULL,
  `datum` date NOT NULL,
  `vreme` time(6) NOT NULL,
  `rezervacija_sto` int(100) NOT NULL,
  `rezervacija_korisnik` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stolovi`
--

CREATE TABLE `stolovi` (
  `id` int(100) NOT NULL,
  `broj` int(100) NOT NULL,
  `kapacitet` int(30) NOT NULL,
  `fk_restoran` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stolovi`
--

INSERT INTO `stolovi` (`id`, `broj`, `kapacitet`, `fk_restoran`) VALUES
(2, 1, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restoran`
--
ALTER TABLE `restoran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rezervacija_sto` (`rezervacija_sto`),
  ADD KEY `rezervacija_korisnik` (`rezervacija_korisnik`);

--
-- Indexes for table `stolovi`
--
ALTER TABLE `stolovi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_restoran` (`fk_restoran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `restoran`
--
ALTER TABLE `restoran`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rezervacije`
--
ALTER TABLE `rezervacije`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stolovi`
--
ALTER TABLE `stolovi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rezervacije`
--
ALTER TABLE `rezervacije`
  ADD CONSTRAINT `rezervacija_korisnik` FOREIGN KEY (`rezervacija_korisnik`) REFERENCES `korisnici` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `rezervacija_sto` FOREIGN KEY (`rezervacija_sto`) REFERENCES `stolovi` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `stolovi`
--
ALTER TABLE `stolovi`
  ADD CONSTRAINT `fk_restoran` FOREIGN KEY (`fk_restoran`) REFERENCES `restoran` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
