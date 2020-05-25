-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 11:32 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `help_desk`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_technician`
--

CREATE TABLE `assign_technician` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `request_id` int(11) NOT NULL,
  `assign_date` date NOT NULL,
  `remark` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assign_technician`
--

INSERT INTO `assign_technician` (`id`, `username`, `request_id`, `assign_date`, `remark`) VALUES
(1, 'belay', 12, '0000-00-00', 'bsnshdjhsjdhjh '),
(2, 'belay', 12, '0000-00-00', 'bsnshdjhsjdhjh '),
(3, 'belay', 12, '0000-00-00', 'bsnshdjhsjdhjh '),
(4, 'belay', 12, '2018-12-12', 'bsnshdjhsjdhjh '),
(5, 'belay', 4, '2018-12-12', ' nzbnbscjshjfdjs'),
(6, 'ermi', 9, '2018-01-10', ' ermi solve these'),
(7, 'elsabet', 8, '2018-09-20', ' elsa solve these'),
(8, 'belete', 8, '2018-11-11', ' belete solve these'),
(9, 'ermi', 5, '2017-01-21', ' solve these'),
(10, 'elsabet', 3, '2018-01-17', ' solvethese'),
(11, 'ermi', 31, '2018-01-19', ' do it'),
(12, 'belete', 62, '2018-09-19', ' belete solve this problem'),
(13, 'chanyalew', 56, '2018-09-20', ' aschenaki solve these'),
(14, 'beletet', 78, '2018-09-13', ' 5623'),
(15, 'beletet', 71, '2018-09-22', ' '),
(16, 'beletet', 71, '2018-09-22', ' '),
(17, 'chanyalew', 78, '2018-09-22', ' ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_technician`
--
ALTER TABLE `assign_technician`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_technician`
--
ALTER TABLE `assign_technician`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
