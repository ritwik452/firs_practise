-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2025 at 03:06 PM
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
-- Database: `new_prakashani`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `book_file` varchar(255) DEFAULT NULL,
  `cover_image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `author_id`, `category_id`, `title`, `price`, `book_file`, `cover_image`, `created_at`) VALUES
(1, 6, 6, 'PHP Tuitorial', 500.00, '../uploads/pdf/php_cookbook.pdf', '../uploads/cover/images.jfif', '2025-12-15 16:22:08'),
(2, 7, 7, 'PYTHON Tuitorial', 650.00, '../uploads/pdf/Python Programming.pdf', '../uploads/cover/download.jfif', '2025-12-15 17:38:21'),
(3, 8, 5, 'C Programing', 330.00, '../uploads/pdf/[Kernighan-Ritchie]The_C_Programming_Language.pdf', '../uploads/cover/c-programming.jpg', '2025-12-15 17:57:15'),
(4, 12, 4, 'C# Tuitorial', 630.00, '../uploads/pdf/csharp_tutorial.pdf', '../uploads/cover/c##.png', '2025-12-23 11:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`) VALUES
(1, 'Novel', '2025-12-15 11:39:10'),
(2, 'Fiction', '2025-12-15 11:39:10'),
(3, 'Non-Fiction', '2025-12-15 11:39:10'),
(4, 'Programming', '2025-12-15 11:39:10'),
(5, 'Web Development', '2025-12-15 11:39:10'),
(6, 'PHP', '2025-12-15 11:39:10'),
(7, 'Python', '2025-12-15 11:39:10'),
(8, 'Database', '2025-12-15 11:39:10'),
(9, 'Computer Science', '2025-12-15 11:39:10'),
(10, 'Education', '2025-12-15 11:39:10'),
(11, 'School Books', '2025-12-15 11:39:10'),
(12, 'Competitive Exams', '2025-12-15 11:39:10'),
(13, 'Self Help', '2025-12-15 11:39:10'),
(14, 'Motivation', '2025-12-15 11:39:10'),
(15, 'Biography', '2025-12-15 11:39:10'),
(16, 'Autobiography', '2025-12-15 11:39:10'),
(17, 'History', '2025-12-15 11:39:10'),
(18, 'Bengali Literature', '2025-12-15 11:39:10'),
(19, 'English Literature', '2025-12-15 11:39:10'),
(20, 'Children Books', '2025-12-15 11:39:10'),
(21, 'Comics', '2025-12-15 11:39:10'),
(22, 'Business', '2025-12-15 11:39:10'),
(23, 'Marketing', '2025-12-15 11:39:10'),
(24, 'Finance', '2025-12-15 11:39:10'),
(25, 'Health & Fitness', '2025-12-15 11:39:10');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `book_id`, `comment`, `created_at`) VALUES
(1, 1, 1, 'nice', '2025-12-16 17:10:46'),
(2, 1, 2, 'Very nice', '2025-12-16 17:20:30'),
(3, 1, 3, 'Wow Great', '2025-12-16 18:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `download_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','author','user') NOT NULL,
  `status` enum('active','pending','blocked') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `profile_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `created_at`, `profile_photo`) VALUES
(1, 'Ritwik Mandal', 'ritwik@gmail.com', '$2y$10$BsabCU/qT5tY1XoLQh7hGO2CbKGDEnzsBT/otqOOA0E1Bi1oJ2DVW', 'user', 'active', '2025-12-15 06:18:41', NULL),
(2, 'Suman Jana', 'suman20@gmail.com', '$2y$10$XOlsAjvluGe5MGwQRPzP6OSEIB3GZe/1Le.u1EgvFDHw0F7sh7.oG', 'user', 'active', '2025-12-15 06:42:42', NULL),
(3, 'Khaled Hosseini', 'k@gmail.com', '$2y$10$oQoL.scWKgIUV8HM8VT9Wu4.HSzWcxTRi9FKdLMtrYpHpuYSWxLpe', 'author', 'active', '2025-12-15 07:25:01', '../uploads/cover/khaled-hosseini.png'),
(5, 'Admin', 'admin@gmail.com', '$2y$10$6CP0xVMa2LDbP38RlhK2XefL8Bp1XhfMQczjwXzkopxfp8ugWxBhG', 'admin', 'active', '2025-12-15 08:46:56', NULL),
(6, 'Josh Lockhart', 'josh@gmail.com', '$2y$10$LoAeLil/W3KMGYrmoDgmH.Ocgv6etwe1cCeMrlBN1A33fD9AEPGXO', 'author', 'active', '2025-12-15 16:19:54', '../uploads/cover/lockhart.jpg'),
(7, 'David Beazley', 'david@gmail.con', '$2y$10$5x4XOIbsju2ZXiOIrKBJuuyfJ/PrDMa7FBxlZ0uXfcuGqGDCpS17S', 'author', 'active', '2025-12-15 17:36:25', '../uploads/cover/David Beazley.jpg'),
(8, 'Stephen Prata', 'prata@gmail.com', '$2y$10$THNYpGIqtst43wCnDKFvSOWLJJN6k8cAy0aGz54zyoWK223cRM8p6', 'author', 'active', '2025-12-15 17:55:56', '..uploads/cover/prata.jpg'),
(9, 'Jon Skeet', 'jon@gmail.com', '$2y$10$ev1IrZ0hbwfMysD6d1NJ3eFo/2blAzALwLzA0TUBlF/7L75py4fei', 'author', 'active', '2025-12-15 19:33:48', '../uploads/cover/jon.jpg'),
(10, 'Nila Adak', 'nila@gmail.com', '$2y$10$T3si.d.o1UU07jyZ47fbD.PcFTdX9OtzVZrDksZcAssXzmwUsgING', 'user', 'active', '2025-12-18 09:43:31', NULL),
(11, 'Rohit Sen', 'rohit@gmail.com', '$2y$10$dbj/TL3sHf8tXesctZpWruDYvqoacl/yMMJLZsr20ICVXMjhqxOB6', 'user', 'active', '2025-12-23 11:09:03', NULL),
(12, 'Bill Wagner', 'bill@gmail.com', '$2y$10$QFkuH.DHA5cVjLNsZB4nMe1ZkjYyj8UYdNb0Pem.Oli/c7RHkTjO.', 'author', 'active', '2025-12-23 11:18:55', '../uploads/cover/bill.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `user_reads`
--

CREATE TABLE `user_reads` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `read_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_reads`
--
ALTER TABLE `user_reads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_reads`
--
ALTER TABLE `user_reads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `downloads`
--
ALTER TABLE `downloads`
  ADD CONSTRAINT `downloads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `downloads_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);

--
-- Constraints for table `user_reads`
--
ALTER TABLE `user_reads`
  ADD CONSTRAINT `user_reads_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_reads_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
