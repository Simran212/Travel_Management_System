-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 11:43 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lakshita`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bId` int(3) NOT NULL,
  `cusId` int(3) NOT NULL,
  `pId` int(3) NOT NULL,
  `uName` varchar(50) NOT NULL,
  `members` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mob_no` varchar(255) NOT NULL,
  `addr` varchar(100) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bId`, `cusId`, `pId`, `uName`, `members`, `email`, `mob_no`, `addr`, `arrivals`, `leaving`) VALUES
(1, 2, 2, 'Archi', 5, 'archimathur@gmail.com', '8248294249', 'Chopasni , Jaipur', '2023-07-15', '2023-07-26'),
(2, 2, 2, 'Archi', 10, 'archimathur@gmail.com', '8248294249', 'Chopasni , Jaipur', '2023-07-21', '2023-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cId` int(3) NOT NULL,
  `cusName` varchar(50) NOT NULL,
  `cusMob` varchar(255) NOT NULL,
  `cusEmail` varchar(50) NOT NULL,
  `cusAdd` varchar(50) NOT NULL,
  `cusPwd` varchar(50) NOT NULL,
  `cusStatus` int(1) NOT NULL DEFAULT 1,
  `is_Admin` tinyint(3) UNSIGNED NOT NULL DEFAULT 0 COMMENT '1=Admin,0=User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cId`, `cusName`, `cusMob`, `cusEmail`, `cusAdd`, `cusPwd`, `cusStatus`, `is_Admin`) VALUES
(1, 'lakshita', '8905962364', 'lakshitasarika2014@gmail.com', 'city police, Jodhpur', '1245', 1, 1),
(2, 'Archi', '8248294249', 'archimathur@gmail.com', 'Chopasni , Jaipur', '4567', 0, 0),
(3, 'Abhisha', '9876543234', 'abhisha12@gmail.com', 'Ratanada , Jodhpur', 'abhi12', 1, 0),
(4, 'w3', '9680664428', 'kartik2503@gmail.com', 'Sojati gate, Jodhpur', 'k2503', 0, 0),
(5, 'Roshani', '6789345678', 'roshanisoni34@gmail.com', 'Vaishali Nagar, Jodhpur', 'roshani45', 0, 1),
(6, 'Dev', '7689456737', 'devmathur@gmail.com', 'Housing Board, Jaipur', 'd8905', 1, 0),
(7, 'Sarika', '9772644501', 'sarika2014@gmail.com', 'Makhupura, Nasirabad road , Ajmer', '5678s', 1, 0),
(8, 'Mayank', '6453298890', 'mayanksoni45@gmail.com', 'Police line , Jodhpur', 'may67', 0, 0),
(9, 'Charul', '7894563798', 'charulagarwal90@gmail.com', 'Gandhinagar, Jaipur', 'charul89', 1, 0),
(10, 'Harsh', '8957647386', 'harshsolanki@gmail.com', 'Sastri Nagar, Jodhpur', 'solanki00', 0, 0),
(11, 'Heena', '7997785776', 'heena345@gmail.com', '5th C road, Jodhpur', '5678', 0, 0),
(12, 'Azra ', '9896765667', 'azra34@gmail.com', 'Udai Mandir, Jodhpur', '9078', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `pId` int(4) NOT NULL,
  `pName` varchar(100) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `pFrom` date NOT NULL,
  `pTo` date NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `pCost` int(7) NOT NULL,
  `pStatus` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`pId`, `pName`, `p_image`, `pFrom`, `pTo`, `p_desc`, `pCost`, `pStatus`) VALUES
(1, 'Mumbai', 'p-1.jpg', '2023-06-25', '2023-06-30', 'Mumbai a pleasant area in the historical part of the city that’s home to major landmarks like the Gateway of India, the Taj Mahal Palace hotel, CSMT.', 20000, 0),
(2, 'Jammu & Kashmir', 'p-2.jpg', '2023-06-30', '2023-07-08', 'Jammu & Kashmir, a piece of heaven on earth, is the 19th largest state in India and it is located mostly all in the Himalayan mountains. Kashmir is an epitome of natural beauty.', 55000, 0),
(3, 'Paris', 'p-4.jpg', '2023-06-28', '2023-07-07', 'Europe\'s most enchanting city, Paris is known for its many monuments, especially the Eiffel Tower, Notre-Dame Cathedral, Arc de Triomphe, Opéra Garnier, Les Invalides, etc.', 20000, 1),
(4, 'Switzerland', 'p-3.jpg', '2023-07-07', '2023-07-17', 'Switzerland is arguably one of the most stunning countries in Europe. With dramatic alpine scenery, heartwarming local food, historic towns, and world-famous cities.', 60000, 0),
(5, 'Japan', 'p-5.jpg', '2023-07-01', '2023-07-09', 'Japan is an island nation with a tremendous amount of history and culture intertwined with is present fast-paced reputation. From the epic wilderness of Hokkaido.', 40000, 1),
(6, 'Ajmer-to-Kedarnath', 'p-6.jpg', '2023-07-02', '2023-07-11', '', 30000, 0),
(7, 'Punjab-to-Ladakh', 'p-6.jpg', '2023-07-08', '2023-07-17', '', 100000, 1),
(8, 'Haridwar-to-Manali', 'p-6.jpg', '2023-07-05', '2023-07-15', '', 44000, 0),
(9, 'Mumbai-to-Nepal', 'p-6.jpg', '2023-07-01', '2023-07-10', '', 70000, 1),
(13, 'test', 'uploads/DocScanner Dec 15, 2022 9-43 PM (1).jpg', '2023-07-11', '2023-07-13', ' test ttt', 21332, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`pId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `pId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
