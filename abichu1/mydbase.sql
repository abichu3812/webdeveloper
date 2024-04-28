-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 07:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydbase`
--

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `NAME` varchar(50) NOT NULL,
  `ID_NUMBER` varchar(50) NOT NULL,
  `SEX` varchar(40) NOT NULL,
  `AGE` varchar(55) NOT NULL,
  `COLLEGE` varchar(30) NOT NULL,
  `DEPARTMENT` varchar(50) NOT NULL,
  `YEAR` varchar(100) NOT NULL,
  `SEMISTER` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`NAME`, `ID_NUMBER`, `SEX`, `AGE`, `COLLEGE`, `DEPARTMENT`, `YEAR`, `SEMISTER`) VALUES
('mamaru', 'ru3213/12', 'male', '22', 'informatics', 'software', '3', '2'),
('jregna', 'ru5423/12', 'm', '24', 'informatics', 'IT', '3', '2'),
('alemu', 'ru0012/12', 'm', '20', 'informatics', 'informatoin scinces', '3', '2'),
('ayele', 'ru0051/12]', 'm', '23', 'informatics', 'CS', '3', '2'),
('barie', 'ru1851/12', 'm', '25', 'informatics', 'software', '3', '2'),
('kebede', 'ru6556/12', 'female', '22', 'inf', 'cs', '5', '2'),
('mamaru', 'ru1234/12', 'M', '22', 'informatics', 'software', '3', '2'),
('tgest', 'ru0120/12', 'Fm', '22', 'informatics', 'software', '3', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
