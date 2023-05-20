-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 05:22 PM
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
-- Database: `attendance`
--
CREATE DATABASE IF NOT EXISTS `attendance` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `attendance`;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `AttID` int(11) NOT NULL,
  `AttDate` date NOT NULL,
  `CourseID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `AttStatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`AttID`, `AttDate`, `CourseID`, `StudentID`, `AttStatus`) VALUES
(1, '2023-05-17', 1, 1, 'có '),
(2, '2023-05-15', 1, 2, 'vắng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`AttID`);
--
-- Database: `classes`
--
CREATE DATABASE IF NOT EXISTS `classes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `classes`;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `ClassID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `IntroductorID` int(11) NOT NULL,
  `Time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ClassID`, `CourseID`, `IntroductorID`, `Time`) VALUES
(1, 1, 1, '12:50:00'),
(2, 2, 2, '15:40:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`ClassID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `ClassID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `courses`
--
CREATE DATABASE IF NOT EXISTS `courses` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `courses`;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `CourseID` int(11) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Descript` text NOT NULL,
  `Course code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`CourseID`, `Title`, `Descript`, `Course code`) VALUES
(1, 'lập trình c++', 'học từ cơ bản đến nâng cao', '62th2'),
(2, 'nền tảng web', 'viết một trang web cơ bản', '62th2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`CourseID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `CourseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `introductors`
--
CREATE DATABASE IF NOT EXISTS `introductors` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `introductors`;

-- --------------------------------------------------------

--
-- Table structure for table `introductors`
--

CREATE TABLE `introductors` (
  `IntroductorID` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `introductors`
--

INSERT INTO `introductors` (`IntroductorID`, `FullName`, `Email`, `Phone`) VALUES
(1, 'Lê Thị Ngọc Ánh', 'ngocanh@gmail.com', '0965245420'),
(2, 'Nguyễn Văn B', 'B@gmail.com', '0456564466');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `introductors`
--
ALTER TABLE `introductors`
  ADD PRIMARY KEY (`IntroductorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `introductors`
--
ALTER TABLE `introductors`
  MODIFY `IntroductorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `reports`
--
CREATE DATABASE IF NOT EXISTS `reports` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `reports`;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `ReportID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Participants` float NOT NULL,
  `Absent` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`ReportID`, `CourseID`, `StudentID`, `Participants`, `Absent`) VALUES
(1, 1, 1, 75, 1),
(2, 2, 2, 100, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`ReportID`);
--
-- Database: `students`
--
CREATE DATABASE IF NOT EXISTS `students` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `students`;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentID` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `BirthDay` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentID`, `FullName`, `BirthDay`, `Email`, `Phone`) VALUES
(1, 'Nguyen Van A', '2002-01-13', 'A@gmail.com', 312646454),
(2, 'Nguyễn Thị B', '2002-10-17', 'Bbb@gmail.com', 454564568);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Database: `user`
--
CREATE DATABASE IF NOT EXISTS `user` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `user`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Email`, `Password`, `Role`) VALUES
(1, 'Admin', 'admin@gmail.com', '12335', 'quản trị viên'),
(2, 'giảng viên A', 'gva@gmail.com', '123456', 'giảng viên'),
(3, 'sinh viên A', 'sva@gmail.com', '123456', 'sinh viên');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
