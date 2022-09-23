-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2022 at 06:03 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `FullName`, `UserName`, `Password`) VALUES
(1, 'Mohammed Hussein Ali', 'Moha', 'moha'),
(2, 'Abdi Rizak ', 'Laafa', 'laafa'),
(3, 'Mahad Ali Siad', 'mahad', 'mahad'),
(4, 'Suleymaan Daacad', 'daacad', 'daacad'),
(5, 'Eng Dhuubow', 'dhuubow', 'dhuubow');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `empid` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `RegDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`empid`, `FullName`, `Phone`, `Address`, `RegDate`) VALUES
(1, 'Maryan Hussein ', 615100878, 'Hodan', '2022-01-12'),
(3, 'dhagax', 617677609, 'Wadajir', '2022-01-12'),
(6, 'Kulac', 615163585, 'Hodan', '2022-01-12'),
(7, 'Dalabey', 617677609, 'Kaaran', '2022-01-12'),
(9, 'Jimcaale ', 683778459, 'Hodan', '2022-01-12'),
(10, 'Batuulo Dagan', 61677609, 'Kaaran', '23 Jan 2022');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `empid` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Gendar` varchar(20) NOT NULL,
  `RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`empid`, `FullName`, `UserName`, `Password`, `Email`, `Phone`, `Gendar`, `RegDate`) VALUES
(4, 'dhagax', 'dhagax', 'dhagax', 'dhagax@gmail.com', 615355581, 'Male', '2022-01-08'),
(5, 'Dalabey', 'dalabka', 'dalab', 'dalab@gmail.com', 615163585, 'Male', '2022-01-08'),
(8, 'Faadumo Haryan', 'faadumo', '123', 'faadumo@gmail.com', 683778459, 'Female', '2022-01-08'),
(9, 'Haara', 'haara', '1234', 'haara@gmail.com', 610244797, 'Male', '2022-01-08'),
(15, 'Suleymaan Daacad', 'daacad', 'daacad', 'daacad@gmail.com', 615100878, 'Male', '2022-01-10'),
(19, 'Maryan Hussein', 'Maryan', 'maryan', 'maryan@gmail.com', 615100878, 'Female', '2022-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `empsalary`
--

CREATE TABLE `empsalary` (
  `empid` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Salary` varchar(50) NOT NULL,
  `RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empsalary`
--

INSERT INTO `empsalary` (`empid`, `FullName`, `Phone`, `Salary`, `RegDate`) VALUES
(1, 'dhagax', 615355581, '90', '2022-01-11'),
(2, 'Maryan Hussein', 615100878, '100', '2022-01-11'),
(3, 'Dalabey', 615163585, '90', '2022-01-11'),
(9, 'Faadumo Haryan', 683778459, '90', '2022-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `empid` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `KillowatHore` int(11) NOT NULL,
  `KillowatHada` int(11) NOT NULL,
  `TotalKillowat` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `RegDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`empid`, `FullName`, `Phone`, `Address`, `KillowatHore`, `KillowatHada`, `TotalKillowat`, `TotalAmount`, `RegDate`) VALUES
(23, 'Maryan Hussein ', 615100878, 'Hodan', 9, 20, 11, 4, '2022-01-12'),
(24, 'dhagax', 617677609, 'Wadajir', 20, 33, 13, 5, '2022-01-12'),
(26, 'Jimcaale ', 683778459, 'Hodan', 9, 21, 12, 4, '2022-01-23'),
(28, 'Kulac', 615163585, 'Hodan', 9, 29, 20, 7, '2022-01-23'),
(29, 'Batuulo Dagan', 61677609, 'Kaaran', 1, 9, 8, 3, '2022-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `paid`
--

CREATE TABLE `paid` (
  `empid` int(11) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Phone` int(11) NOT NULL,
  `TotalKillowat` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `rest` int(11) NOT NULL,
  `RegDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paid`
--

INSERT INTO `paid` (`empid`, `FullName`, `Phone`, `TotalKillowat`, `TotalAmount`, `paid`, `rest`, `RegDate`) VALUES
(31, 'Maryan Hussein ', 615100878, 11, 4, 4, 0, '22 Jan 2022 '),
(32, 'dhagax', 617677609, 13, 5, 4, 1, '23 Jan 2022 '),
(45, 'Jimcaale ', 683778459, 12, 4, 4, 0, '23 Jan 2022 '),
(46, 'Batuulo Dagan', 61677609, 8, 3, 3, 0, '23 Jan 2022 '),
(47, 'Kulac', 615163585, 20, 7, 7, 0, '23 Jan 2022 ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `empsalary`
--
ALTER TABLE `empsalary`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `paid`
--
ALTER TABLE `paid`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `empsalary`
--
ALTER TABLE `empsalary`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `paid`
--
ALTER TABLE `paid`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
