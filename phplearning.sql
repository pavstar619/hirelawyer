-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2020 at 05:55 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phplearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `asklawyer`
--

CREATE TABLE `asklawyer` (
  `id` int(6) UNSIGNED NOT NULL,
  `question` text DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asklawyer`
--

INSERT INTO `asklawyer` (`id`, `question`, `email`, `reg_date`) VALUES
(1, '', NULL, '2020-05-10 19:35:20'),
(2, '', NULL, '2020-05-10 19:35:45'),
(3, '', NULL, '2020-05-10 19:37:19'),
(4, NULL, NULL, '2020-05-10 19:41:23'),
(5, NULL, NULL, '2020-05-10 19:41:44'),
(6, NULL, NULL, '2020-05-10 19:46:14'),
(7, NULL, NULL, '2020-05-10 19:49:21'),
(8, '', '', '2020-05-10 20:41:55'),
(9, '', '', '2020-05-10 20:44:07'),
(10, '', '', '2020-05-10 20:45:12'),
(11, '', '', '2020-05-10 20:45:16'),
(12, '', '', '2020-05-10 20:45:35'),
(13, '', '', '2020-05-10 20:45:38'),
(14, NULL, NULL, '2020-05-10 20:45:45'),
(15, '', '', '2020-05-10 20:46:05'),
(16, '', '', '2020-05-10 20:46:22'),
(17, '', '', '2020-05-11 03:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `lawyers`
--

CREATE TABLE `lawyers` (
  `id` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `specialty` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyers`
--

INSERT INTO `lawyers` (`id`, `firstname`, `lastname`, `specialty`, `email`, `city`) VALUES
(1, 'Pavel', 'Rahman', 'Criminal', 'frank@gmail.com', 'Dhaka'),
(2, 'Trump', 'K', 'Corporate', 'trump@gmail.com', 'Sylhet'),
(3, 'Donald', 'L', 'International', 'donald@gmail.com', 'Khulna'),
(4, 'Fred', 'M', 'Commercial ', 'fred@gmail.com', 'Chattagram'),
(5, 'Jim', 'N', 'Corporate', 'jim@gmail.com', 'Rajshahi'),
(6, 'Jill', 'O', 'Criminal', 'jill@gmail.com', 'Dhaka'),
(7, 'Carla', 'P', 'International', 'carla@gmail.com', 'Sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created`) VALUES
(1, 'admin', 'admin', '2020-05-10 11:25:32'),
(2, 'root', 'root', '2020-05-10 07:32:50'),
(3, '123', '123', '2020-05-10 12:56:17'),
(4, '12345', '12345', '2020-05-10 14:23:11'),
(5, '123456', '123456', '2020-05-10 14:24:19'),
(6, 'das', 'das', '2020-05-10 15:05:56'),
(7, '', '', '2020-05-10 15:45:04'),
(8, 'ggqw', 'ggqw', '2020-05-10 16:49:38'),
(9, 'asd', 'asd', '2020-05-10 16:50:41'),
(10, 'asdf', 'asdf', '2020-05-10 23:34:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asklawyer`
--
ALTER TABLE `asklawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asklawyer`
--
ALTER TABLE `asklawyer`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
