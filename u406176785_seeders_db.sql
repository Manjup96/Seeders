-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2022 at 04:17 PM
-- Server version: 10.5.13-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u406176785_seeders_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_Name` varchar(255) DEFAULT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `company_Name`, `message`) VALUES
(1, 'bhagath', 'koduri.bhagath@gmail.com', NULL, 'hello seeders,glad to work with your team'),
(2, 'Bhargav', 'ssy.balu@gmail.com', 'iiiQbets', 'hi seeders'),
(3, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(4, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(5, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(6, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(7, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(8, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(9, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(10, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(11, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(12, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(13, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(14, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(15, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(16, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(17, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(18, 'iiiQ bets', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(19, 'Jonas', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(20, 'Jonas', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
