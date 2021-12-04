-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2021 at 08:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `username` varchar(255) NOT NULL,
  `balance` int(20) NOT NULL,
  `profit_return` int(20) NOT NULL,
  `bonus` int(20) NOT NULL,
  `total_deposit` int(20) NOT NULL,
  `total_withdrawal` int(20) NOT NULL,
  `deposit` int(20) NOT NULL,
  `withdrawal` int(20) NOT NULL,
  `subscription` varchar(255) NOT NULL,
  `notifications` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`username`, `balance`, `profit_return`, `bonus`, `total_deposit`, `total_withdrawal`, `deposit`, `withdrawal`, `subscription`, `notifications`) VALUES
('Raps', 125, 0, 0, 0, 0, 100, 0, 'Not subscripted', '0');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
