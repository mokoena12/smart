-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 12:10 PM
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
-- Table structure for table `live_trading`
--

CREATE TABLE `live_trading` (
  `username` varchar(255) NOT NULL,
  `currency_type` varchar(20) NOT NULL,
  `currency_pair` varchar(20) NOT NULL,
  `lot_size` int(20) NOT NULL,
  `entry_price` int(20) NOT NULL,
  `stop_loss` int(20) NOT NULL,
  `take_profit` int(20) NOT NULL,
  `action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_trading`
--

INSERT INTO `live_trading` (`username`, `currency_type`, `currency_pair`, `lot_size`, `entry_price`, `stop_loss`, `take_profit`, `action`) VALUES
('bel', '', 'USDZAR', 12, 5, 3, 20, 'Buy'),
('Raps', 'Forex', 'USDJPY', 25, 36, 58, 25, 'Sell');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
