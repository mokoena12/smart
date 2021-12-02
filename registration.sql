-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 12:11 PM
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
  `re_enter_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `middle_name`, `lastname`, `country`, `email`, `cellphone`, `username`, `passwords`, `re_enter_pass`) VALUES
('kamo', 'raps', 'mab', 'SA', 'r@c.com', 726695810, 'RAps', 'Bel1', '125'),
('Belmiro', 'nhek', 'mol', 'SA', 'gh@g.com', 12365555, 'bel', 'new', 'bel'),
('bel', 'bel1', 'mol', 'Aruba', 'dfcg@rf.com', 728108533, 'dhjhgjuy', 'rrr', 'rrr'),
('bel', 'bel1', 'mol', 'Aruba', 'dfcg@rf.com', 728108533, 'dhjhgjuy', 'rrr', 'rrr'),
('testinng', '', 'last', 'Aruba', 'hgvhg@b.com', 728108533, 'dhjhgjuy', 'rrr', 'bbb'),
('testinng', '', 'last', 'Aruba', 'hgvhg@b.com', 728108533, 'dhjhgjuy', 'rrr', 'bbb'),
('Raps', 'kt', 'yu', 'Australia', 'a@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'kt', 'yu', 'Australia', 'a@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'bbb', 'bbb'),
('Belmiro', 'Belmiro', 'Mohlala', 'Austria', 'belmiromohlala34@gmail.com', 2147483647, 'Belmiro', 'bbbbbb', 'bbbbbb'),
('sannyboy', '', 'mohlala', 'Azerbaijan', 'sannyoboy.98@gmail.com', 792525630, 'sannyboy', 'asdfgh;1', 'asdfgh;1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
