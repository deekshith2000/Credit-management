-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2020 at 06:56 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`name`, `email`, `amount`) VALUES
('ajith', 'ajith@gmail.com', 400),
('arun', 'arun@gmail.com', 800),
('bhavith', 'bhavith@gmail.com', 700),
('chandan', 'chandan@gmail.com', 600),
('dhanu', 'dhanu@gmail.com', 1100),
('gowda', 'gowda@gmail.com', 450),
('harish', 'harish@gmail.com', 600),
('jagdish', 'jagdish@gmail.com', 760),
('lohith', 'lohith@gmail.com', 440);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Formuser` varchar(255) NOT NULL,
  `touser` varchar(255) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Formuser`, `touser`, `credits`) VALUES
('chandan@gmail.com', 'dhanu@gmail.com', 50),
('chandan@gmail.com', 'dhanu@gmail.com', 50),
('ajith@gmail.com', 'bhavith@gmail.com', 50),
('lohith@gmail.com', 'jagdish@gmail.com', 60);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
