-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2023 at 02:30 AM
-- Server version: 10.5.19-MariaDB-cll-lve
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(20, 'Jonas', 'koduri.bhagath@gmail.com', 'iiiQbets', 'hi'),
(21, 'Yo', 'gasselot@gmail.com', 'Yo', 'Hey how are you?'),
(22, 'Bhargav', 'ssy.balu@gmail.com', 'Xyz', 'I want to tie up with your team'),
(23, 'Bhagath', 'koduri.bhagath@gmail.com', 'Hyderabad ', 'Hi'),
(24, 'B', 'KODURI.BHAGATH@GMAIL.COM', 'DSDS', 'AKJDDADJKD'),
(25, 'Bhargav', 'ssy.balu@gmail.com', 'Abc', 'Hello '),
(26, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(27, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(28, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(29, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(30, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(31, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(32, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(33, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(34, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(35, 'JDASJ', 'koduri.bhagath@gmail.com', 'ASKJAJ', 'IJDSOIA'),
(36, 'bh', 'KODURI.BHAGATH@gmail.com', 'JIK', 'NKJK'),
(37, 'bh', 'KODURI.BHAGATH@gmail.com', 'JIK', 'NKJK'),
(38, 'Yo', 'gasselot@gmail.com', 'Yo', 'Hey there !'),
(39, 'B', 'koduri.bhagath@gmail.com', 'Hjjk', 'Hdhbr'),
(40, 'Bhargav', 'ssy.balu@gmail.com', 'SDFG', 'SDRGSE'),
(41, 'B', 'koduri.bhagath@gmail.com', 'Hjjk', 'Hdhbr'),
(42, 'BH ', 'koduri.bhagath@gmail.com', 'Hdhd', 'Hshhs'),
(43, 'bh', 'KODURI.BHAGATH@gmail.com', 'JIK', 'NKJK'),
(44, 'soumya', 'soumyacn16@gmail.com', 'TEST', 'TEST MAIL'),
(45, 'bh', 'KODURI.BHAGATH@gmail.com', 'JIK', 'NKJK'),
(46, 'balu', 'ssy.balu@gmail.com', 'djd', 'djjkdfs'),
(47, 'dajs', 'chanduchandana460@gmail.com', 'abc', 'hello'),
(48, 'dajs', 'chanduchandana460@gmail.com', 'abc', 'hello'),
(49, 'dajs', 'chanduchandana460@gmail.com', 'abc', 'hello'),
(50, 'dajs', 'chanduchandana460@gmail.com', 'abc', 'hello'),
(51, 'Bhargav', 'ssy.balu@gmail.com', 'Abc', 'Hello '),
(52, 'Abhijith M K', 'abhijithmavatoor@gmail.com', 'iiiQbets', 'Hi\r\nPlease call me back'),
(53, 'Gy', 'gasselot@gmail.com', 'Khg', 'Hey show are you'),
(54, 'test', 'soumyacn16@gmail.com', 'TEST COMPANY', 'TEST MESSAGE'),
(55, 'TEST', 'soumyacn16@gmail.com', 'iiiQbets', 'TEST MESSAGE'),
(56, 'ddhf', 'koduri.bhagath@gmail.com', 'dfjkdj', 'djfdnkjs'),
(57, 'bhagath', 'koduri.bhagath@gmail.com', 'dhdhas', 'asjdajs'),
(58, 'vijay', 'koduri.bhagath@gmail.com', 'sa', 'sdjja'),
(59, 'bharagv', 'ssy.balu@gmail.com', 'gh', 'hgjh'),
(60, 'bhargav', 'ssybalu@gmail.com', 'dhj', 'djd');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
