-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 12:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagementsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminblock`
--

CREATE TABLE `adminblock` (
  `adminId` int(11) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `adminName` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminblock`
--

INSERT INTO `adminblock` (`adminId`, `password`, `adminName`) VALUES
(10122, '1234', 'Saadii');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `username` varchar(50) DEFAULT NULL,
  `fathername` varchar(50) DEFAULT NULL,
  `RGno` int(11) NOT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `dateofbirth` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`username`, `fathername`, `RGno`, `subject`, `dateofbirth`, `gender`, `email`, `mobile`, `password`) VALUES
('fahad', 'shakeel', 18, 'Pre-Medical', '2005-03-28', 'Male', 'fahadii123@gmail.com', '03115307530', '78910'),
('SAAD', 'SHAKEEL', 10122, 'Computer Science', '2003-10-12', 'Male', 'mr.saadii926@gmail.com', '03401965553', '1234'),
('Saifullah Sadiq khan', 'Mr.Khan', 10123, 'Pre-Medical', '2004-03-10', 'Female', 'virus1234@gamil.com', '0000200202', '123456'),
('Haji', 'Ziaullah', 10157, 'Computer Science', '1990-12-12', 'Male', 'hajisb@gmail.com', '0345123456', 'haji ');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacherID` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `t_DOB` date DEFAULT NULL,
  `t_gender` varchar(20) DEFAULT NULL,
  `t_email` varchar(50) DEFAULT NULL,
  `t_mobile` varchar(15) DEFAULT NULL,
  `t_subject` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Discription` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacherID`, `firstname`, `lastname`, `t_DOB`, `t_gender`, `t_email`, `t_mobile`, `t_subject`, `password`, `Discription`) VALUES
(99, 'MR.', 'SAADI', '2003-10-10', 'Male', 'muhammadsaadii1210@gamil.com', '03401965553', 'Computer Science', '12345', 'hello World'),
(10138, 'moshin ali shah', 'circuit', '2003-11-25', 'others', 'mohsin1234@gmail.com', '0333123123123', 'Computer Science', '11111', 'hello world i am circuit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminblock`
--
ALTER TABLE `adminblock`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`RGno`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacherID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
