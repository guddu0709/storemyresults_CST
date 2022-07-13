-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2021 at 11:03 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storemyresults`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `sem` varchar(10) NOT NULL,
  `subject1` varchar(10) NOT NULL,
  `subject2` varchar(10) NOT NULL,
  `subject3` varchar(10) NOT NULL,
  `subject4` varchar(10) NOT NULL,
  `subject5` varchar(10) NOT NULL,
  `subject6` varchar(10) NOT NULL,
  `subject7` varchar(10) NOT NULL,
  `subject8` varchar(10) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `usn` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`sem`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `cgpa`, `usn`) VALUES
('6', '6', '6', '6', '6', '6', '6', '66', '6', '6', '6'),
('3', '50', '50', '50', '50', '50', '50', '50', '50', '6', '1'),
('3', '50', '50', '50', '50', '50', '50', '50', '50', '6', '1');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(20) NOT NULL,
  `usn` varchar(10) NOT NULL,
  `college` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `usn`, `college`, `email`, `password`) VALUES
('aaa', '123', 'djkd', 'abcd', 'abcd'),
('ab', 'ab', 'ab', 'ab', 'ab'),
('anil', '1js18cs001', 'jssateb', 'anil@gmail.com', 'anil'),
('anvish', '1', 'jssateb', 'anvish@gmail.com', 'anvish');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
