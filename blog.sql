-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 12:08 PM
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
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `phone`, `course`) VALUES
(1, 'John Smith', 'john.smith@example.com', '1234567890', 'Computer Science'),
(2, 'Emma Johnson', 'emma.johnson@example.com', '9876543210', 'Business Administration'),
(3, 'Michael Davis', 'michael.davis@example.com', '4567890123', 'Psychology'),
(4, 'Sophia Wilson', 'sophia.wilson@example.com', '7890123456', 'English Literature'),
(5, 'Daniel Taylor', 'daniel.taylor@example.com', '2345678901', 'Physics'),
(6, 'Olivia Anderson', 'olivia.anderson@example.com', '9012345678', 'Chemistry'),
(7, 'David Martinez', 'david.martinez@example.com', '5678901234', 'Mathematics'),
(8, 'Isabella Brown', 'isabella.brown@example.com', '0123456789', 'History'),
(9, 'Ethan Thomas', 'ethan.thomas@example.com', '3456789012', 'Political Science'),
(10, 'Ava Garcia', 'ava.garcia@example.com', '8901234567', 'Sociology'),
(11, 'Matthew Moore', 'matthew.moore@example.com', '6789012345', 'Economics'),
(12, 'Mia Clark', 'mia.clark@example.com', '1234509876', 'Biology'),
(13, 'James Lee', 'james.lee@example.com', '5432167890', 'Engineering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
