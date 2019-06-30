-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 09:01 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_movie_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `a`
--

CREATE TABLE `a` (
  `booking_id` int(11) NOT NULL,
  `a1` varchar(1) NOT NULL DEFAULT 'e',
  `a2` varchar(1) NOT NULL DEFAULT 'e',
  `a3` varchar(1) NOT NULL DEFAULT 'e',
  `a4` varchar(1) NOT NULL DEFAULT 'e',
  `a5` varchar(1) NOT NULL DEFAULT 'e',
  `a6` varchar(1) NOT NULL DEFAULT 'e',
  `a7` varchar(1) NOT NULL DEFAULT 'e',
  `a8` varchar(1) NOT NULL DEFAULT 'e',
  `a9` varchar(1) NOT NULL DEFAULT 'e'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a`
--

INSERT INTO `a` (`booking_id`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `a7`, `a8`, `a9`) VALUES
(0, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(7, 'f', 'f', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(8, 'e', 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(9, 'e', 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(10, 'e', 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(11, 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `b`
--

CREATE TABLE `b` (
  `booking_id` int(11) NOT NULL,
  `b1` varchar(1) NOT NULL DEFAULT 'e',
  `b2` varchar(1) NOT NULL DEFAULT 'e',
  `b3` varchar(1) NOT NULL DEFAULT 'e',
  `b4` varchar(1) NOT NULL DEFAULT 'e',
  `b5` varchar(1) NOT NULL DEFAULT 'e',
  `b6` varchar(1) NOT NULL DEFAULT 'e',
  `b7` varchar(1) NOT NULL DEFAULT 'e',
  `b8` varchar(1) NOT NULL DEFAULT 'e',
  `b9` varchar(1) NOT NULL DEFAULT 'e'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `b`
--

INSERT INTO `b` (`booking_id`, `b1`, `b2`, `b3`, `b4`, `b5`, `b6`, `b7`, `b8`, `b9`) VALUES
(0, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(7, 'f', 'f', 'f', 'e', 'e', 'f', 'e', 'e', 'e'),
(8, 'e', 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(9, 'f', 'f', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(10, 'e', 'e', 'e', 'f', 'e', 'e', 'e', 'e', 'e'),
(11, 'e', 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(5) NOT NULL,
  `User_id` int(5) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL,
  `film` varchar(10) NOT NULL,
  `theatre_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `User_id`, `date`, `time`, `film`, `theatre_id`) VALUES
(7, 1, '2019-03-16', '08:00', '8', 4),
(8, 1, '2019-03-17', '08:00', '8', 4),
(9, 1, '2019-03-16', '08:00', '11', 4),
(10, 1, '2019-03-21', '18:00', '9', 4),
(11, 1, '2019-03-18', '08:00', '9', 4);

-- --------------------------------------------------------

--
-- Table structure for table `c`
--

CREATE TABLE `c` (
  `booking_id` int(11) NOT NULL,
  `c1` varchar(1) NOT NULL DEFAULT 'e',
  `c2` varchar(1) NOT NULL DEFAULT 'e',
  `c3` varchar(1) NOT NULL DEFAULT 'e',
  `c4` varchar(1) NOT NULL DEFAULT 'e',
  `c5` varchar(1) NOT NULL DEFAULT 'e',
  `c6` varchar(1) NOT NULL DEFAULT 'e',
  `c7` varchar(1) NOT NULL DEFAULT 'e',
  `c8` varchar(1) NOT NULL DEFAULT 'e',
  `c9` varchar(1) NOT NULL DEFAULT 'e'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c`
--

INSERT INTO `c` (`booking_id`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`, `c7`, `c8`, `c9`) VALUES
(0, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(7, 'f', 'f', 'f', 'e', 'f', 'e', 'e', 'e', 'e'),
(8, 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(9, 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(10, 'e', 'e', 'e', 'e', 'f', 'e', 'e', 'e', 'e'),
(11, 'e', 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `d`
--

CREATE TABLE `d` (
  `booking_id` int(11) NOT NULL,
  `d1` varchar(1) NOT NULL DEFAULT 'e',
  `d2` varchar(1) NOT NULL DEFAULT 'e',
  `d3` varchar(1) NOT NULL DEFAULT 'e',
  `d4` varchar(1) NOT NULL DEFAULT 'e',
  `d5` varchar(1) NOT NULL DEFAULT 'e',
  `d6` varchar(1) NOT NULL DEFAULT 'e',
  `d7` varchar(1) NOT NULL DEFAULT 'e',
  `d8` varchar(1) NOT NULL DEFAULT 'e',
  `d9` varchar(1) NOT NULL DEFAULT 'e'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `d`
--

INSERT INTO `d` (`booking_id`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`) VALUES
(0, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(7, 'f', 'f', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(8, 'e', 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(9, 'f', 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(10, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(11, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `e`
--

CREATE TABLE `e` (
  `booking_id` int(11) NOT NULL,
  `e1` varchar(1) NOT NULL DEFAULT 'e',
  `e2` varchar(1) NOT NULL DEFAULT 'e',
  `e3` varchar(1) NOT NULL DEFAULT 'e',
  `e4` varchar(1) NOT NULL DEFAULT 'e',
  `e5` varchar(1) NOT NULL DEFAULT 'e',
  `e6` varchar(1) NOT NULL DEFAULT 'e',
  `e7` varchar(1) NOT NULL DEFAULT 'e',
  `e8` varchar(1) NOT NULL DEFAULT 'e',
  `e9` varchar(1) NOT NULL DEFAULT 'e'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e`
--

INSERT INTO `e` (`booking_id`, `e1`, `e2`, `e3`, `e4`, `e5`, `e6`, `e7`, `e8`, `e9`) VALUES
(0, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(7, 'f', 'f', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(8, 'f', 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(9, 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(10, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(11, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(6) NOT NULL,
  `name` varchar(30) NOT NULL,
  `deptno` int(10) NOT NULL,
  `deptname` varchar(50) NOT NULL,
  `salary` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `name`, `deptno`, `deptname`, `salary`) VALUES
(2, 'sudip', 1, 'cse', 30000),
(3, 'sandip', 1, 'cse', 9000000),
(4, 'anil', 1, 'cse', 50000),
(5, 'anil', 1, 'cse', 50000),
(6, 'anil', 1, 'cse', 50000),
(7, 'anil', 1, 'cse', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `f`
--

CREATE TABLE `f` (
  `booking_id` int(11) NOT NULL,
  `f1` varchar(1) NOT NULL DEFAULT 'e',
  `f2` varchar(1) NOT NULL DEFAULT 'e',
  `f3` varchar(1) NOT NULL DEFAULT 'e',
  `f4` varchar(1) NOT NULL DEFAULT 'e',
  `f5` varchar(1) NOT NULL DEFAULT 'e',
  `f6` varchar(1) NOT NULL DEFAULT 'e',
  `f7` varchar(1) NOT NULL DEFAULT 'e',
  `f8` varchar(1) NOT NULL DEFAULT 'e',
  `f9` varchar(1) NOT NULL DEFAULT 'e'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f`
--

INSERT INTO `f` (`booking_id`, `f1`, `f2`, `f3`, `f4`, `f5`, `f6`, `f7`, `f8`, `f9`) VALUES
(0, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(7, 'f', 'f', 'f', 'e', 'e', 'e', 'e', 'e', 'e'),
(8, 'e', 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(9, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(10, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
(11, 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `film_id` int(5) NOT NULL,
  `film_name` varchar(30) NOT NULL,
  `poster` varchar(1000) NOT NULL,
  `trailer` varchar(1000) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`film_id`, `film_name`, `poster`, `trailer`, `start_date`, `end_date`) VALUES
(8, 'gully boy', 'https://www.hindustantimes.com/rf/image_size_960x540/HT/p2/2019/01/02/Pictures/_67950a70-0e4e-11e9-ac1e-a6f4b8823b62.JPG', 'https://www.youtube.com/watch?v=JfbxcD6biOk', '2019-03-01', '2019-04-01'),
(9, 'Total Dhamaal', 'https://cdn.dnaindia.com/sites/default/files/styles/full/public/2019/01/19/779898-total-dhamaal-poster.jpg', 'fghjj', '2019-02-15', '2019-03-28'),
(10, 'Badla', 'https://m.media-amazon.com/images/M/MV5BYjZiMzIzYTctNDViZi00OWNmLWFmN2YtMmI2OWJiZWViMmY3XkEyXkFqcGdeQXVyNTYwMzA0MTM@._V1_SY1000_SX750_AL_.jpg', 'fgr', '2019-03-11', '2019-03-27'),
(11, 'Captain Marvel', 'https://hdqwalls.com/download/captain-marvel-5k-poster-oy-1920x1080.jpg', 'jefhk', '2019-03-11', '2019-03-27'),
(12, 'avenger', 'dfghjkl;', 'dfghjkl.;', '0000-00-00', '0000-00-00'),
(13, 'anil1', 'dfghjkxbn', 'sdfghm,', '2019-03-05', '2019-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receipt_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `No_of_Seats` int(60) NOT NULL,
  `Seats` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Status` varchar(10) NOT NULL DEFAULT 'Sucessful'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receipt_id`, `user_id`, `No_of_Seats`, `Seats`, `Date`, `Status`) VALUES
(1, 1, 6, '', '0000-00-00', 'Sucessful'),
(2, 1, 6, '', '0000-00-00', 'Sucessful'),
(3, 1, 5, '', '0000-00-00', 'Sucessful'),
(4, 1, 2, '0', '0000-00-00', 'Sucessful'),
(5, 1, 4, '0', '0000-00-00', 'Sucessful'),
(6, 1, 2, '0', '0000-00-00', 'Sucessful'),
(7, 1, 2, ' ,b2,b3', '0000-00-00', 'Sucessful'),
(8, 1, 2, ' ,b6,c5', '0000-00-00', 'Sucessful'),
(9, 1, 3, ' ,a3,b4,c5', '2019-03-21', 'Sucessful'),
(10, 1, 3, ' ,a1,b3,c3', '2019-03-18', 'Sucessful');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatre_id` int(10) NOT NULL,
  `Theatre_name` varchar(50) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Total_seats` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theatre_id`, `Theatre_name`, `Location`, `Total_seats`) VALUES
(4, 'ertyuiknbv', 'edc', 150);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(5) NOT NULL,
  `User_Name` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile_No` bigint(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `User_Name`, `Password`, `Email`, `Mobile_No`, `Address`, `Pincode`) VALUES
(1, 'sudip', 'ramghosh', 'sudipghosh3838@gmail.com', 102101232, 'fghjxcvbhj', 742236);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a`
--
ALTER TABLE `a`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `b`
--
ALTER TABLE `b`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `c`
--
ALTER TABLE `c`
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `d`
--
ALTER TABLE `d`
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `e`
--
ALTER TABLE `e`
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f`
--
ALTER TABLE `f`
  ADD UNIQUE KEY `booking_id` (`booking_id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`film_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receipt_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theatre_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `film_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receipt_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theatre_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
