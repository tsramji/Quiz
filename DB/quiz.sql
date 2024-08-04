-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2024 at 01:25 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff_admin_details`
--

CREATE TABLE `staff_admin_details` (
  `id` int(25) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff_admin_details`
--

INSERT INTO `staff_admin_details` (`id`, `name`, `email`, `dept`, `contact`, `password`, `user_type`) VALUES
(104, 'ramji', 'ramji@gmail.com', 'admin', '8765431201', '20774c63e56c9c175de2a53c978c8db2', 'admin'),
(114, 'dinesh', 'dinesh@gmail.com', 'admin', '9876543210', '72ea9b10ad081b41a57c4982649ee7fd', 'admin'),
(123, 'abishek', 'abi@gmail.com', 'eee', '9825728194', '7c39330e69adcb0c52372d3b3d20e5c9', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `students_details`
--

CREATE TABLE `students_details` (
  `rollno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `batch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_details`
--

INSERT INTO `students_details` (`rollno`, `name`, `dept`, `year`, `password`, `batch`) VALUES
(238113, 'nagaraj', 'mca', '2023-2025', 'nagaraj', 'B'),
(238123, 'abishek', 'mca', '2023-2025', 'abishek', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff_admin_details`
--
ALTER TABLE `staff_admin_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students_details`
--
ALTER TABLE `students_details`
  ADD PRIMARY KEY (`rollno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students_details`
--
ALTER TABLE `students_details`
  MODIFY `rollno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
