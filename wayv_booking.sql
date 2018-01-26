-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 26, 2018 at 01:47 AM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wayv_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `wayv_traveller`
--

CREATE TABLE `wayv_traveller` (
  `traveller_id` int(11) NOT NULL,
  `traveller_fname` varchar(100) NOT NULL,
  `traveller_lname` varchar(100) NOT NULL,
  `traveller_dob_year` int(11) NOT NULL,
  `traveller_dob_month` int(11) NOT NULL,
  `traveller_dob_day` int(11) NOT NULL,
  `traveller_age` int(11) NOT NULL,
  `traveller_email` varchar(100) NOT NULL,
  `traveller_phone` varchar(15) NOT NULL,
  `traveller_address` varchar(100) NOT NULL,
  `traveller_city` varchar(50) NOT NULL,
  `traveller_pc_zip` varchar(15) NOT NULL,
  `traveller_province` varchar(50) NOT NULL,
  `traveller_nationality` varchar(50) NOT NULL,
  `traveller_gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wayv_traveller`
--

INSERT INTO `wayv_traveller` (`traveller_id`, `traveller_fname`, `traveller_lname`, `traveller_dob_year`, `traveller_dob_month`, `traveller_dob_day`, `traveller_age`, `traveller_email`, `traveller_phone`, `traveller_address`, `traveller_city`, `traveller_pc_zip`, `traveller_province`, `traveller_nationality`, `traveller_gender`) VALUES
(1, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(2, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(3, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(4, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(5, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(6, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(7, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(8, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(9, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(10, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(11, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(12, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(13, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(14, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(15, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(16, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(17, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male'),
(18, 'Cameron', 'Farquharson', 2014, 1, 1, 28, 'fuller.igames@gmail.com', '9058651669', '777 Garner Road East', 'Ancaster', 'L9K1j4', 'ON', 'albanian', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `wayv_trips`
--

CREATE TABLE `wayv_trips` (
  `w_id` int(11) NOT NULL,
  `w_trip_name` varchar(75) NOT NULL,
  `w_date` date NOT NULL,
  `w_number_people` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wayv_traveller`
--
ALTER TABLE `wayv_traveller`
  ADD PRIMARY KEY (`traveller_id`);

--
-- Indexes for table `wayv_trips`
--
ALTER TABLE `wayv_trips`
  ADD PRIMARY KEY (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wayv_traveller`
--
ALTER TABLE `wayv_traveller`
  MODIFY `traveller_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `wayv_trips`
--
ALTER TABLE `wayv_trips`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
