-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 12:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
  `trading_type` varchar(20) NOT NULL,
  `currency_pair` varchar(20) NOT NULL,
  `lot_size` double(16,5) NOT NULL,
  `entry_price` double(16,5) NOT NULL,
  `stop_loss` double(16,5) NOT NULL,
  `take_profit` double(16,5) NOT NULL,
  `trading_action` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `live_trading`
--

INSERT INTO `live_trading` (`username`, `trading_type`, `currency_pair`, `lot_size`, `entry_price`, `stop_loss`, `take_profit`, `trading_action`) VALUES
('Raps', 'Forex', 'USDZAR', 25.00000, 25.00000, 25.00000, 24.00000, 'Sell');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
