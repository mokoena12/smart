-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2021 at 08:56 AM
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
('Raps', 600, 'BITCOIN', '2021-12-03 11:27:32'),
('Raps', 70, 'BITCOIN', '2021-12-03 11:27:44'),
('Raps', 153, 'Instant EFT', '2021-12-04 14:07:46'),
('Raps', 500, 'Instant EFT', '2021-12-04 14:16:08'),
('Raps', 50, 'BITCOIN', '2021-12-04 14:19:03'),
('Raps', 1500, 'BITCOIN', '2021-12-04 14:23:18'),
('Raps', 1500, 'BANK', '2021-12-04 14:39:37');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
