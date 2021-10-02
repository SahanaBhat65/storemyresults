-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2021 at 03:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storemyresult`
--

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `rollno` varchar(10) NOT NULL,
  `course` varchar(15) NOT NULL,
  `semester` int(11) NOT NULL,
  `subject1` text NOT NULL,
  `subject2` text NOT NULL,
  `subject3` text NOT NULL,
  `subject4` text NOT NULL,
  `subject5` text NOT NULL,
  `subject6` text NOT NULL,
  `subject7` text NOT NULL,
  `subject8` text NOT NULL,
  `mark1` int(11) NOT NULL,
  `mark2` int(11) NOT NULL,
  `mark3` int(11) NOT NULL,
  `mark4` int(11) NOT NULL,
  `mark5` int(11) NOT NULL,
  `mark6` int(11) NOT NULL,
  `mark7` int(11) NOT NULL,
  `mark8` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`rollno`, `course`, `semester`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `subject6`, `subject7`, `subject8`, `mark1`, `mark2`, `mark3`, `mark4`, `mark5`, `mark6`, `mark7`, `mark8`) VALUES
('18cs001', 'CSE', 5, 'OS', 'DAA', 'DBMS', 'JAVA', 'PYTHON', 'AI', 'WEB', 'ML', 34, 56, 78, 89, 67, 89, 90, 89),
('18cs097', 'dsdfsg', 4, 'dfsg', 'fgd', 'trhs', 'dbg', 'fryghj', 'tu', 'tuy', 'tuy', 12, 34, 45, 67, 78, 89, 90, 98),
('18cs111', 'dfgfra', 6, 'dfg', 'gfsfs', 'fsg', 'fsg', 'fsg', 'fg', 'fsg', 'the', 56, 45, 56, 67, 89, 90, 89, 87);

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `username` varchar(100) NOT NULL,
  `USN` varchar(10) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`username`, `USN`, `pass`) VALUES
('', '', ''),
('newuser', '18cs0003', '123'),
('Adithya ', '18cs001', '135'),
('fresh', '18cs002', '123'),
('raksha', '18cs003', '123'),
('Adithya ', '18cs01', '123'),
('krishna', '18cs03', '123'),
('raksha', '18cs091', '123'),
('susi', '18cs097', '123'),
('goobe', '18cs111', '123'),
('raksha', '18cs91', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`USN`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `marks_ibfk_1` FOREIGN KEY (`rollno`) REFERENCES `result` (`USN`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
