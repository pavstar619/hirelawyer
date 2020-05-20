-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 08:30 PM
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
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `asklawyer`
--

INSERT INTO `asklawyer` (`id`, `question`, `email`) VALUES
(1, 'asdf', 'asdf'),
(3, 'dasdasd', 'asdasdas'),
(5, 'dasdasdd', 'asdasdasd'),
(6, 'eqw', 'qwe'),
(7, 'qwerr', 'rqwe'),
(8, 'rqw', 'tr'),
(9, 'tt', 'tt'),
(10, 'ttt', 'ttt');

-- --------------------------------------------------------

--
-- Table structure for table `incorporation`
--

CREATE TABLE `incorporation` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `incorporation` varchar(50) NOT NULL,
  `business_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incorporation`
--

INSERT INTO `incorporation` (`id`, `name`, `email`, `incorporation`, `business_type`) VALUES
(1, 'asd', 'asd', 'Chittagong', 'Small Company');

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
-- Table structure for table `make_appointment`
--

CREATE TABLE `make_appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make_appointment`
--

INSERT INTO `make_appointment` (`id`, `name`, `email`, `date`) VALUES
(1, '123', '123', '0000-00-00'),
(2, 'das', 'das', '2011-03-02'),
(3, 'asdsa', 'dasdsa', '1212-12-12'),
(4, 'zxc', 'zxc', '1212-12-12'),
(5, 'ads', 'ads', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `make_documents`
--

CREATE TABLE `make_documents` (
  `id` int(11) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `documents` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `make_documents`
--

INSERT INTO `make_documents` (`id`, `first`, `last`, `email`, `documents`) VALUES
(1, 'asd', 'asd', 'asd', 'asd'),
(2, 'dasd', 'dasdsa', 'asdsa', 'dasd');

-- --------------------------------------------------------

--
-- Table structure for table `sslcommerz`
--

CREATE TABLE `sslcommerz` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `name_on_card` varchar(50) NOT NULL,
  `card_number` int(16) NOT NULL,
  `day` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `cvv_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sslcommerz`
--

INSERT INTO `sslcommerz` (`id`, `email`, `first_name`, `name_on_card`, `card_number`, `day`, `year`, `cvv_number`) VALUES
(1, 'asdas', 'asd', 'asd', 1234, 6, 1988, 1234),
(2, 'das', 'das', 'das', 123, 6, 1988, 123);

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `incorporation`
--
ALTER TABLE `incorporation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `lawyers`
--
ALTER TABLE `lawyers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `make_appointment`
--
ALTER TABLE `make_appointment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `make_documents`
--
ALTER TABLE `make_documents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `sslcommerz`
--
ALTER TABLE `sslcommerz`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `incorporation`
--
ALTER TABLE `incorporation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lawyers`
--
ALTER TABLE `lawyers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `make_appointment`
--
ALTER TABLE `make_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `make_documents`
--
ALTER TABLE `make_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sslcommerz`
--
ALTER TABLE `sslcommerz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
