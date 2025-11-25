-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2025 at 06:54 AM
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
-- Database: `class`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(55) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `marks` int(11) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `city`, `phone`, `marks`, `course`) VALUES
(1, 'Ritwik', 'Mandal', 'ritwik@gmail.com', 'Purbamedinipur', '9775674623', 84, 'Python'),
(2, 'Suman', 'jana', 'suman20@gmail.com', 'Purbamedinipur', '5776378383', 65, 'PHP'),
(3, 'Disha', 'Parua', 'disha@gmail.com', 'kolkata', '8972236674', 90, 'Python'),
(4, 'Sonam', 'Das', 'sona@gmail.com', 'delhi', '1234567890', 80, 'Java'),
(5, 'Raja', 'Karmakar', 'raja@gmail.com', 'kolkata', '9876543218', 78, 'Python'),
(6, 'Ritu', 'Adak', 'ritu@gmail.com', 'Mumbai', '5776378383', 89, 'C#'),
(7, 'Atanu ', 'Jana', 'atanu@gmail.com', 'purulia', '8976537480', 78, 'PHP'),
(8, 'Nilanjona', 'Adak', 'nila20@gmail.com', 'Kolkata', '9775674623', 56, 'Java'),
(9, 'Suraj', 'Bhakta', 'suraj30@gmail.com', 'Kolkata', '8976537480', 76, 'Java'),
(10, 'Soumitra', 'Bag', 'soumitra40@gmail.com', 'Kolkata', '4563882903', 65, 'C#'),
(11, 'Soumik', 'Sinha', 'soumik@gmail.com', 'Rajasthan', '8972236674', 85, 'C#'),
(12, 'Sulogna', 'Ghosh', 'sulogna@gmail.com', 'Kolkata', '8734256780', 79, 'Java'),
(13, 'Anurag', 'Bose', 'anu@gmail.com', 'Bihar', '7890567342', 44, 'Java'),
(14, 'Papan', 'Pal', 'papan@gamil.com', 'Kolkata', '8972236674', 34, 'Python');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
