-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 04:18 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `construction`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `emailId` varchar(50) NOT NULL,
  `phoneNo` bigint(10) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `employeeType` varchar(100) NOT NULL,
  `uniqueNumber` int(4) NOT NULL,
  `employeeImage` varchar(500) NOT NULL,
  `employeeName` varchar(100) NOT NULL,
  `employeeAge` int(100) NOT NULL DEFAULT '0',
  `employeeSalary` int(100) NOT NULL DEFAULT '0',
  `employeeExperience` int(100) NOT NULL DEFAULT '0',
  `employeeGender` varchar(100) NOT NULL DEFAULT 'other'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`emailId`, `phoneNo`, `password`, `employeeType`, `uniqueNumber`, `employeeImage`, `employeeName`, `employeeAge`, `employeeSalary`, `employeeExperience`, `employeeGender`) VALUES
('abc@gmail.com', 8989898989, '$2y$10$CrZ0jBqT00KB834NUTxXjOu9YyaEJrx1TvFP6b.0cjqtMBh.zv5au', 'architect', 8787, 'employeeDetails/IMG_0128.JPG', 'aditi bhagwat', 21, 9009, 2, 'female'),
('amit.mahajan@somaiya.edu', 8828301921, '$2y$10$p1GOiz96TgN0yaJUC.q2/u9ofIpC6vEW6rN90X5gMaZzJ1GebmGxe', 'architect', 777, 'employeeDetails/IMG_4981.JPG', 'Amit Mahajan', 0, 0, 0, 'male'),
('amit_builder@gmail.com', 9999999999, '$2y$10$p1GOiz96TgN0yaJUC.q2/u9ofIpC6vEW6rN90X5gMaZzJ1GebmGxe', 'builder', 7777, 'employeeDetails/IMG_20161225_170930_HDR.jpg', 'Builder One', 54, 99999, 27, 'male'),
('sansare99@gmail.com', 9898767656, '$2y$10$cCd0XVb78EsiuLn/2BmALu7fZ3hQLp0A0FlhYh65rZt62zkl3ijVy', 'accountant', 8080, 'employeeDetails/IMG_0295.JPG', 'Shivam Sansare', 22, 90, 0, 'female'),
('tarun.lohana@somaiya.edu', 9702695960, '$2y$10$DTPOLJbwegUFpieJJUAXxuRr2Zsl/KioKxG76jZZPUTql.AmNYgKG', 'architect', 1011, 'employeeDetails/cd.jpg', 'Tarun Lohana', 34, 10000, 7, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`emailId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
