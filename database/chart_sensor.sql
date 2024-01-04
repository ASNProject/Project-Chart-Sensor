-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 04, 2024 at 05:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chart_sensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `sensor1`
--

CREATE TABLE `sensor1` (
  `id` int(11) NOT NULL,
  `value` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sensor1`
--

INSERT INTO `sensor1` (`id`, `value`, `timestamp`) VALUES
(1, 10, '2024-01-03 11:49:26'),
(2, 12, '2024-01-03 11:49:34'),
(3, 15, '2024-01-03 11:49:42'),
(4, 13, '2024-01-03 11:49:47'),
(5, 15, '2024-01-03 11:49:52'),
(6, 16, '2024-01-03 11:49:56'),
(7, 18, '2024-01-03 11:50:01'),
(8, 20, '2024-01-03 11:50:05'),
(9, 17, '2024-01-03 11:50:09'),
(10, 19, '2024-01-03 11:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `sensor2`
--

CREATE TABLE `sensor2` (
  `id` int(11) NOT NULL,
  `value` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sensor2`
--

INSERT INTO `sensor2` (`id`, `value`, `timestamp`) VALUES
(1, 1, '2024-01-04 03:50:11'),
(2, 2, '2024-01-04 03:50:17'),
(3, 3, '2024-01-04 03:50:21'),
(4, 5, '2024-01-04 03:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `sensor3`
--

CREATE TABLE `sensor3` (
  `id` int(11) NOT NULL,
  `value` float NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sensor3`
--

INSERT INTO `sensor3` (`id`, `value`, `timestamp`) VALUES
(1, 4, '2024-01-04 04:03:06'),
(2, 7, '2024-01-04 04:03:18'),
(3, 2, '2024-01-04 04:03:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensor1`
--
ALTER TABLE `sensor1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor2`
--
ALTER TABLE `sensor2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sensor3`
--
ALTER TABLE `sensor3`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sensor1`
--
ALTER TABLE `sensor1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sensor2`
--
ALTER TABLE `sensor2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sensor3`
--
ALTER TABLE `sensor3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
