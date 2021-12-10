-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 04:40 PM
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
('kamo', 'raps', 'mab', 'SA', 'r@c.com', 726695810, 'RAps', '125', '125', '2021-12-07 11:40:25'),
('Belmiro', 'nhek', 'mol', 'SA', 'gh@g.com', 12365555, 'bel', 'bel', 'bel', '2021-12-07 11:40:25'),
('bel', 'bel1', 'mol', 'Aruba', 'dfcg@rf.com', 728108533, 'dhjhgjuy', 'nog', 'rrr', '2021-12-07 11:40:25'),
('bel', 'bel1', 'mol', 'Aruba', 'dfcg@rf.com', 728108533, 'dhjhgjuy', 'nog', 'rrr', '2021-12-07 11:40:25'),
('testinng', '', 'last', 'Aruba', 'hgvhg@b.com', 728108533, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('testinng', '', 'last', 'Aruba', 'hgvhg@b.com', 728108533, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'kt', 'yu', 'Australia', 'a@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'kt', 'yu', 'Australia', 'a@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Raps', 'Ka', 'La', 'Argentina', 'ma@g.com', 2147483647, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Kamo', '', 'Mab', 'Australia', 'a@b.com', 726696666, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Kamo', '', 'Mab', 'Australia', 'a@b.com', 726696666, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Kamo', '', 'Mab', 'Australia', 'a@b.com', 726696666, 'dhjhgjuy', 'nog', 'bbb', '2021-12-07 11:40:25'),
('Kamo', '', 'mab', 'South Africa', 'r@c.com', 726695810, 'RAps', '125', '125', '2021-12-07 11:40:25'),
('', '', '', '', '', 0, '', '', '', '2021-12-07 11:40:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
