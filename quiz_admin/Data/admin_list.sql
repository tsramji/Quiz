-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 02:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `administrator2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

CREATE TABLE `admin_details` (
  `Sno` int(11) NOT NULL,
  `Staff_ID` int(15) NOT NULL,
  `Staff_Name` varchar(100) NOT NULL,
  `Phone_No` int(10) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_details`
--

INSERT INTO `admin_details` (`Sno`, `Staff_ID`, `Staff_Name`, `Phone_No`, `Department`, `Password`, `Email`) VALUES
(32, 125, 'aRUN', 1265456456, 'BCA', 'Sample@123', 'arun@gmail.com'),
(1, 2001, 'Kumaresh', 1234567890, 'BCA', 'sm3llycat', 'Kumar@gmail.com'),
(2, 2002, 'Arunbabu', 1234567890, 'MCA', 'jelly22fi$h', 'Arun@gmail.com'),
(3, 2003, 'Nagaraj', 1234567890, 'MBA', 'SterlingGmail20.15', 'Sample@gmail.com'),
(4, 2004, 'Ramji', 1234567890, 'BCA', 'jelly22fi$h', 'Ram@gmail.com'),
(5, 2005, 'DineshBabu', 1234567890, 'Bsc(cs)', 'SterlingGmail20.15', 'Dinesh@gmail.com'),
(6, 2006, 'Bogyaan', 1234567890, 'MCA', 'sm3llycat', 'Bogyan@gmail.com'),
(7, 2007, 'Abhisheik', 1234567890, 'MCA', 'jelly22fi$h', 'Abhi@gmail.com'),
(8, 2008, 'Barath', 1234567890, 'BCA', 'SterlingGmail20.15', 'Bar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_details`
--
ALTER TABLE `admin_details`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD UNIQUE KEY `Sno` (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_details`
--
ALTER TABLE `admin_details`
  MODIFY `Sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
