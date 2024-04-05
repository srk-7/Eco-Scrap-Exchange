-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 08:20 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- Database:`ecoscrapexchange`


-- Table structure for table `booking`


CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `category` varchar(150) DEFAULT NULL,
  `mobile` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `logid` varchar(150) DEFAULT NULL,
  `status` varchar(110) DEFAULT '0',
  `kg` varchar(110) DEFAULT NULL,
  `date` varchar(150) DEFAULT NULL,
  `price` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `category`, `mobile`, `address`, `logid`, `status`, `kg`, `date`, `price`) VALUES
(2, 'Kundan Singh', 'Plastic', '7542857907', 'gola road', '11', '2', '10', '2023-08-19', '20'),
(13, 'Kundan Singh', 'NewsPapers', '9898989899', 'pATNA', '11', '0', '5', '2023-08-16', '10'),
(14, 'Test Name', 'Magazines', '8787878787', 'Patna', '12', '1', '5', '2023-08-16', '20');

-- --------------------------------------------------------

-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `category` varchar(150) DEFAULT NULL,
  `mobile` varchar(150) DEFAULT NULL,
  `address` varchar(150) DEFAULT NULL,
  `logid` varchar(150) DEFAULT NULL,
  `status` varchar(110) DEFAULT '0',
  `item` varchar(110) DEFAULT NULL,
  `price` varchar(110) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `category`, `mobile`, `address`, `logid`, `status`, `item`, `price`) VALUES
(2, 'Kundan Singh', 'Novels', '7542857907', 'gola road', '11', '2', '2', '20'),
(3, 'Shriya', 'Cardboards', '9070878665', 'city road', '12', '2', '1', '120'),
(4, 'Shreya', 'Recycled-Papers', '9080955645', 'hyderabad', '13', '2', '20', '60');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `password` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(11, 'Kundan Singh', 'kdandeveloper@gmail.com', '123'),
(12, 'Test Name', 'test@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;