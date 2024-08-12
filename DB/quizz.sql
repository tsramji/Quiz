-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2024 at 05:30 PM
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
-- Database: `quizz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `dept`, `contact`, `password`, `user_type`) VALUES
(104, 'ramji', 'ramji@gmail.com', 'admin', '8765431201', '20774c63e56c9c175de2a53c978c8db2', 'admin'),
(114, 'dinesh', 'dinesh@gmail.com', 'admin', '9876543210', '72ea9b10ad081b41a57c4982649ee7fd', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ece`
--

CREATE TABLE `ece` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ece`
--

INSERT INTO `ece` (`id`, `name`, `email`, `dept`, `contact`, `password`, `user_type`) VALUES
(106, 'arun', 'arun@gmail.com', 'ece', '4565464565', 'Arunbabu123', 'staff'),
(112, 'siva', 'siva@gmail.com', 'ECE', '3453453454', 'Siva123@#', 'staff'),
(113, 'nagaraj', 'nagaraj@gmail.com', 'ECE', '4654654655', 'b5a7f1b876110f8b116e52beb5280d21', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `eee`
--

CREATE TABLE `eee` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eee`
--

INSERT INTO `eee` (`id`, `name`, `email`, `dept`, `contact`, `password`, `user_type`) VALUES
(105, 'arun babu', 'arun@gmail.com', 'EEE', '4654654655', 'e09c49c6c423e1a334e9f0db6942ac6f', 'staff'),
(106, 'arunbabu', 'arun@gmail.com', 'EEE', '3534534453', 'f360dca905d0a4429a444ccdbc1f76b7', 'staff'),
(123, 'abishek', 'abi@gmail.com', 'eee', '9825728194', '7c39330e69adcb0c52372d3b3d20e5c9', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `mba`
--

CREATE TABLE `mba` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mba`
--

INSERT INTO `mba` (`id`, `name`, `email`, `dept`, `contact`, `password`, `user_type`) VALUES
(131, 'akash', 'akash@gmail.com', 'MBA', '5645654454', 'cb7c5f69ff356ecca55b7d08df877991', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `mech`
--

CREATE TABLE `mech` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `dept` varchar(100) DEFAULT NULL,
  `contact` varchar(10) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mech`
--

INSERT INTO `mech` (`id`, `name`, `email`, `dept`, `contact`, `password`, `user_type`) VALUES
(106, 'arun', 'arun@gmail.com', 'MECH', '4565464565', '39a7f2b53318931c2d15506a7b312c0f', 'staff');

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
(106, 'arunbabu', 'arun@gmail.com', 'EEE', '3534534453', 'f360dca905d0a4429a444ccdbc1f76b7', 'staff'),
(113, 'nagaraj', 'nagaraj@gmail.com', 'ECE', '4654654655', 'b5a7f1b876110f8b116e52beb5280d21', 'staff'),
(114, 'dinesh', 'dinesh@gmail.com', 'admin', '9876543210', '72ea9b10ad081b41a57c4982649ee7fd', 'admin'),
(123, 'abishek', 'abi@gmail.com', 'eee', '9825728194', '7c39330e69adcb0c52372d3b3d20e5c9', 'staff'),
(131, 'akash', 'akash@gmail.com', 'MBA', '5645654454', 'cb7c5f69ff356ecca55b7d08df877991', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `students_details`
--

CREATE TABLE `students_details` (
  `rollno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dept` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `batch` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students_details`
--

INSERT INTO `students_details` (`rollno`, `name`, `dept`, `year`, `email`, `password`, `batch`) VALUES
(238113, 'nagaraj', 'mca', '2023-2025', 'nagaraj@gmail.com', 'nagaraj', 'B'),
(238123, 'abishek', 'mca', '2023-2025', 'abi@gmail.', 'abishek', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ece`
--
ALTER TABLE `ece`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eee`
--
ALTER TABLE `eee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mba`
--
ALTER TABLE `mba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mech`
--
ALTER TABLE `mech`
  ADD PRIMARY KEY (`id`);

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
