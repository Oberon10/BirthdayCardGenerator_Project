-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 04:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `birthday_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `celebrant`
--

CREATE TABLE `celebrant` (
  `celebrant_id` int(11) NOT NULL,
  `celebrant` varchar(225) NOT NULL,
  `sender` varchar(225) NOT NULL,
  `greeting` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `celebrant`
--

INSERT INTO `celebrant` (`celebrant_id`, `celebrant`, `sender`, `greeting`, `date`) VALUES
(45, 'Peter', '1', '2', '2023-12-11 15:13:02'),
(46, 'Peter', '1', '2', '2023-12-11 15:13:45'),
(47, 'Mercy', '1', '3', '2023-12-11 15:24:32');

-- --------------------------------------------------------

--
-- Table structure for table `greetings`
--

CREATE TABLE `greetings` (
  `id` int(11) NOT NULL,
  `greetings` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `greetings`
--

INSERT INTO `greetings` (`id`, `greetings`, `date`) VALUES
(1, 'Another year older, wiser, and more fabulous! May this year bring you growth, joy, and all the amazing things you deserve. Happy birthday!', '2023-12-11 06:36:34'),
(2, 'As you blow out the candles, may all your wishes come true. Happy birthday and here\'s to chasing your dreams!', '2023-12-11 06:36:34'),
(3, 'Sending you the warmest birthday wishes and hoping your day is as special as you are. Happy birthday!', '2023-12-11 06:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `zip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `address`, `city`, `state`, `email`, `password`, `zip`) VALUES
(1, 'Oluwaseun', 'Okunola', 'plot r247 phase iv Nyanya', 'abuja', 'abuja', 'oluwaseunokunola@gmail.com', 'peter14re', '8999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `celebrant`
--
ALTER TABLE `celebrant`
  ADD PRIMARY KEY (`celebrant_id`);

--
-- Indexes for table `greetings`
--
ALTER TABLE `greetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `celebrant`
--
ALTER TABLE `celebrant`
  MODIFY `celebrant_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `greetings`
--
ALTER TABLE `greetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
