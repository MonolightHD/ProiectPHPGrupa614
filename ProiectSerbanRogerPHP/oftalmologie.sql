-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 08:08 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oftalmologie`
--

-- --------------------------------------------------------

--
-- Table structure for table `lentile`
--

CREATE TABLE `lentile` (
  `id` int(11) NOT NULL,
  `denumire` varchar(65) NOT NULL,
  `producator` varchar(65) NOT NULL,
  `pret` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lentile`
--

INSERT INTO `lentile` (`id`, `denumire`, `producator`, `pret`) VALUES
(1, 'Lentile convergente', 'Zeiss', 325),
(2, 'Lentile Divergente', 'Essilor', 200);

-- --------------------------------------------------------

--
-- Table structure for table `ochelari`
--

CREATE TABLE `ochelari` (
  `id` int(11) NOT NULL,
  `marca` varchar(65) NOT NULL,
  `model` varchar(65) NOT NULL,
  `pret` int(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ochelari`
--

INSERT INTO `ochelari` (`id`, `marca`, `model`, `pret`) VALUES
(1, 'Air Optix', 'Rama verde', 210),
(2, 'Alcon', 'Rosu', 550);

-- --------------------------------------------------------

--
-- Table structure for table `oftalmologi`
--

CREATE TABLE `oftalmologi` (
  `id` int(11) NOT NULL,
  `nume` varchar(65) NOT NULL,
  `adresa` varchar(65) NOT NULL,
  `telefon` varchar(65) NOT NULL,
  `program` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oftalmologi`
--

INSERT INTO `oftalmologi` (`id`, `nume`, `adresa`, `telefon`, `program`) VALUES
(1, 'Andrei', 'Strada Izvorul Rece', '07756341221', 'De la unu la zece'),
(2, 'Radu', 'Crisului', '07450545401', 'De la cinci la sapte');

-- --------------------------------------------------------

--
-- Table structure for table `servicii`
--

CREATE TABLE `servicii` (
  `id` int(11) NOT NULL,
  `denumire` varchar(65) NOT NULL,
  `pret` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicii`
--

INSERT INTO `servicii` (`id`, `denumire`, `pret`) VALUES
(1, 'Consultatie', 100),
(5, 'Retinofotografie', 500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(65) NOT NULL,
  `parola` varchar(42) NOT NULL,
  `email` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `parola`, `email`) VALUES
(1, 'Roger', 'admin', 'serbanroger@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lentile`
--
ALTER TABLE `lentile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ochelari`
--
ALTER TABLE `ochelari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oftalmologi`
--
ALTER TABLE `oftalmologi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicii`
--
ALTER TABLE `servicii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lentile`
--
ALTER TABLE `lentile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ochelari`
--
ALTER TABLE `ochelari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oftalmologi`
--
ALTER TABLE `oftalmologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `servicii`
--
ALTER TABLE `servicii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
