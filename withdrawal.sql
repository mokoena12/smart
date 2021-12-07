-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 05:27 PM
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
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `username` varchar(255) DEFAULT NULL,
  `amount` int(20) DEFAULT NULL,
<<<<<<< HEAD
  `method` varchar(255) DEFAULT NULL
  `Date_w` DATETIME DEFAULT NOW();
=======

  `method` varchar(255) DEFAULT NULL,
  `with_date` datetime DEFAULT current_timestamp()
>>>>>>> 3715cb8379061c295a1d499dd1b97614249c2f7e
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawal`
--

<<<<<<< HEAD
INSERT INTO `withdrawal` (`username`, `amount`, `method`, `Date_w` ) VALUES
('Raps', 700, 'Bank', '2021-12-03 11:27:32');
=======
INSERT INTO `withdrawal` (`username`, `amount`, `method`, `with_date`) VALUES
('Raps', 700, 'Bank', '2021-12-03 10:13:36'),
('Raps', 5000, 'Bitcoin', '2021-12-03 10:13:36'),
('Raps', 4735, 'Bank', '2021-12-03 10:56:50'),
('Raps', 5000, 'EFT', '2021-12-03 10:58:58'),
('Raps', 650, 'EFT', '2021-12-03 11:22:37'),
('Raps', 670, 'Bitcoin', '2021-12-04 14:24:23');
>>>>>>> 3715cb8379061c295a1d499dd1b97614249c2f7e
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
