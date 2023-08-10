-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2022 at 07:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystudents`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `sid` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `ssub` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `sadd` varchar(200) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`sid`, `fname`, `lname`, `fathername`, `email`, `gender`, `ssub`, `country`, `city`, `dob`, `sadd`, `picture`) VALUES
(1, 'Faisal', 'zamir', 'zamir hussain', 'jafri@gamil.com', 'male', 'Computer', 'pak', 'Paharpur', '2022-12-02', 'Street 4, Paharpur, DIKHAN', 'man.png'),
(2, 'XYZ', 'Ali', 'Father...', 'Faisal123@gamil.com', 'male', 'Computer', 'pak', 'Paharpur', '2022-11-23', '                                                            SADKKJSADKJLF                                                            ', '205-2059350_safe-black-and-white-verified.png'),
(6, 'Alishab', 'Fatima', 'xyz', 'alishba@gmail.com', 'female', 'Computer', 'ind', 'Peshawar', '2022-06-08', 'Street no 3,,', 'woman.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
