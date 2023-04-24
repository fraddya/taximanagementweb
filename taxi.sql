-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 08:20 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxi`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderr`
--

CREATE TABLE `orderr` (
  `Invoice_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  `passeng` int(11) DEFAULT NULL,
  `picadd` varchar(100) DEFAULT NULL,
  `dropadd` varchar(100) DEFAULT NULL,
  `datee` varchar(40) DEFAULT NULL,
  `timee` varchar(40) DEFAULT NULL,
  `v_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderr`
--

INSERT INTO `orderr` (`Invoice_id`, `name`, `email`, `passeng`, `picadd`, `dropadd`, `datee`, `timee`, `v_type`) VALUES
(8, 'Fraddy', 'sdsd@sdfd.vom', 5, 'sadadasd', 'asdadfsdgv gfsdfg', '2022-12-15', '12:03', '6'),
(12, 'fraddy', 'Fraddy@gmail.com', 2, 'matara', 'matara', '2022-12-19', '14:05', '1'),
(13, 'Fraddy', 'ssisithasiranga@gmail.com', 2, 'matara', 'matara', '2022-12-18', '06:09', '1'),
(14, 'Appolo', 'appolo@gmail.com', 30, 'hakmana', 'colombo', '2022-12-18', '05:00', '4'),
(15, 'sdfsdf', 'dfdf@fdsf.df', 2, 'dfsfs', 'dfdfs', '2022-12-19', '05:07', 'suv');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(70) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `ps` varchar(20) DEFAULT NULL,
  `cps` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `address`, `Email`, `ps`, `cps`, `gender`) VALUES
('', '', '', '', '', ''),
('Appolo', 'matara', 'appolo@info.com', '123', '123', 'male'),
('Fraddy', 'matara', 'gg@gg.com', 'Fraddy', 'Fraddy', 'male'),
('sdsad', 'asdasd', 'gtg@gfg.com', '1213', '22', 'female'),
('Fraddy', 'matara', 'Sisithasiranga@gmail.com', '123', '2222', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderr`
--
ALTER TABLE `orderr`
  ADD PRIMARY KEY (`Invoice_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderr`
--
ALTER TABLE `orderr`
  MODIFY `Invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
