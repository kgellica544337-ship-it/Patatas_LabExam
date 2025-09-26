-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2025 at 03:55 PM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `programs` text DEFAULT NULL,
  `year_level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `gender`, `programs`, `year_level`) VALUES
(1, 'Karylle Mish Gellica', 'kgellica@gmail.com', 'capy', '$2y$10$eYFt5mv7gmt56NIU0XKJ7.WYiiArYiIwcjWL.6KBbLjkDhzklZe.2', 'Female', 'Music', 'Philippines'),
(2, 'Charlie Chaplin', 'c.chaplin@gmail.com', 'charlie', '$2y$10$rMQnfwFyPVwqBmNFVQa4/.NXeOTDJGC4FoJprKSjDvEtEj.ZsY71q', 'Male', 'Traveling', 'USA'),
(4, 'Lieza Tugonon', 'l.tugonon@gmail.com', 'lieza', '$2y$10$YtE5TqFlUJ.tmy/xuKD..OT/aKXAOs2KC92Wtyzrm3CuWuvquJ3Eu', 'Female', 'Crafts', 'Philippines'),
(5, 'Joana Bravo', 'j.bravo@gmail.com', 'joana', '$2y$10$lM5aou.N0BOsehHzM807ZOCD52vlPsKyvNjve./XlfwRAHM4vBa9.', 'Female', 'Sports, Music', 'Philippines'),
(6, 'Taylor Smith', 't.smith@gmail.com', 'taylor', '$2y$10$BH2R9M2BK5AhZ0n/gDBrUutuYWR8X6z5Uth8S32/zmey2c0V9Q5BO', 'Female', '', ''),
(7, 'Elizabeth Bennet', 'e.bennet@gmail.com', 'lizzie', '$2y$10$H1XyMFMBrnfoLbNctK7gTOCMLxg3xtzUBK8WDBWNUk6vkX1SGzb9O', 'Female', 'BS Information Technology', '3rd Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
