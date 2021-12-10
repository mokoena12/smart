-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 05:49 AM
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
-- Table structure for table `banking_details`
--

CREATE TABLE `banking_details` (
  `bank_name` varchar(255) DEFAULT NULL,
  `account_holder` varchar(255) DEFAULT NULL,
  `account_number` int(20) DEFAULT NULL,
  `bitcoin_addres` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dashboard`
--

CREATE TABLE `dashboard` (
  `username` varchar(255) NOT NULL,
  `balance` int(20) NOT NULL,
  `profit_return` int(20) NOT NULL,
  `referral_bonus` int(20) NOT NULL,
  `invested_amount` int(20) NOT NULL,
  `total_withdrawal` int(20) NOT NULL,
  `deposit` int(20) NOT NULL,
  `equity` int(20) NOT NULL,
  `subscription` varchar(255) NOT NULL,
  `notifications` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dashboard`
--

INSERT INTO `dashboard` (`username`, `balance`, `profit_return`, `referral_bonus`, `invested_amount`, `total_withdrawal`, `deposit`, `equity`, `subscription`, `notifications`) VALUES
('RAPS', 462, 22, 0, 640, 0, 440, -178, 'no', '0');

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `username` varchar(255) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `deposit_date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`username`, `amount`, `method`, `deposit_date`) VALUES
('Raps', 100, 'BANK', '2021-12-09 18:03:12'),
('Raps', 100, 'BANK', '2021-12-09 23:05:16'),
('Raps', 100, 'BANK', '2021-12-09 23:37:24'),
('Raps', 200, 'BANK', '2021-12-09 23:41:13');

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE `investment` (
  `user` varchar(255) NOT NULL,
  `typeOfInv` varchar(255) NOT NULL,
  `periods` varchar(10000) NOT NULL,
  `amount` int(20) DEFAULT NULL,
  `date_inv` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`user`, `typeOfInv`, `periods`, `amount`, `date_inv`) VALUES
('Raps', 'Diamond', '1 week', 200, '2021-12-09 21:37:53'),
('Raps', 'Titanium', '2 weeks', 440, '2021-12-09 21:42:37');

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

-- --------------------------------------------------------

--
-- Table structure for table `refferals`
--

CREATE TABLE `refferals` (
  `username` varchar(100) DEFAULT NULL,
  `date_ref` timestamp NULL DEFAULT current_timestamp(),
  `friend_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cellphone` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL,
  `re_enter_pass` varchar(255) NOT NULL,
  `Date_reg` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `middle_name`, `lastname`, `country`, `email`, `cellphone`, `username`, `passwords`, `re_enter_pass`, `Date_reg`) VALUES
('Kamo', '', 'Mabelane', 'SA', 'a@b.com', 726695810, 'Raps', 'bbb', 'bbb', '2021-12-10 04:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `time_server`
--

CREATE TABLE `time_server` (
  `username` varchar(255) DEFAULT NULL,
  `times` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_server`
--

INSERT INTO `time_server` (`username`, `times`) VALUES
('Admin', 1639086778);

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `username` varchar(255) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
  `method` varchar(255) DEFAULT NULL,
  `date_w` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
