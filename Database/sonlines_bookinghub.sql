-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2024 at 04:35 PM
-- Server version: 5.7.44-cll-lve
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sonlines_bookinghub`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(11) NOT NULL,
  `usid` varchar(11) NOT NULL,
  `seid` varchar(5) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(10) NOT NULL,
  `busid` varchar(11) NOT NULL,
  `b_from` varchar(20) NOT NULL,
  `b_to` varchar(20) NOT NULL,
  `price` varchar(12) NOT NULL,
  `type` varchar(10) NOT NULL,
  `buusid` varchar(11) NOT NULL,
  `get_set` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `usid`, `seid`, `date`, `time`, `busid`, `b_from`, `b_to`, `price`, `type`, `buusid`, `get_set`) VALUES
(123, '8', '07 ', ' 2024-04-08 ', '00:20 ', '24', 'Badulla', 'Anuradhapura', '350 ', 'Normal ', '2 ', 0),
(124, '8', '01 ', ' 2024-04-08 ', '00:20 ', '24', 'Badulla', 'Anuradhapura', '350 ', 'Normal ', '2 ', 0),
(125, '8', '10 ', ' 2024-04-08 ', '00:20 ', '24', 'Badulla', 'Anuradhapura', '350 ', 'Normal ', '2 ', 0),
(126, '8', '08 ', ' 2024-04-08 ', '00:20 ', '24', 'Badulla', 'Anuradhapura', '350 ', 'Normal ', '2 ', 0),
(127, '8', '12 ', ' 2024-04-08 ', '00:20 ', '24', 'Badulla', 'Anuradhapura', '350 ', 'Normal ', '2 ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `b_from` varchar(20) NOT NULL,
  `b_to` varchar(20) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(8) NOT NULL,
  `type` varchar(8) NOT NULL,
  `price` int(6) NOT NULL,
  `adid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `b_from`, `b_to`, `date`, `time`, `type`, `price`, `adid`) VALUES
(19, 'Ampara', 'Anuradhapura', '2024-02-17', '18:05', 'Highway', 2500, 2),
(23, 'Anuradhapura', 'Badulla', '2024-03-31', '22:18', 'Highway', 450, 2),
(24, 'Badulla', 'Anuradhapura', '2024-04-08', '00:20', 'Normal', 350, 2),
(25, 'Matara', 'Ambalangoda', '2024-04-03', '00:54', 'Normal', 420, 11);

-- --------------------------------------------------------

--
-- Table structure for table `count`
--

CREATE TABLE `count` (
  `id` int(11) NOT NULL,
  `field_name` varchar(11) NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `count`
--

INSERT INTO `count` (`id`, `field_name`, `counter`) VALUES
(1, 'sms_count', 100010),
(2, 'bus_book_id', 127);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `number` int(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `type` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `number`, `email`, `pass`, `type`) VALUES
(2, 'sridhara', 'sridhara', 716121589, 'sri@gamil.com', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 1),
(8, 'text1', 'sri', 703205732, 'sridharaaryush@gmail.com', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 0),
(10, 'Sasmitha', 'jgkgfD', 7323030, 'sasmithadilmith884@gmail.com', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 0),
(11, 'Rathnayaka Geegana  Arachchige', 'Victor', 703205732, 'sri@gmail.com', '2e8c0277e396fabf683e56c8b7fa7e6dad68c679', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `count`
--
ALTER TABLE `count`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `count`
--
ALTER TABLE `count`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
