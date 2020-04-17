-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 01:50 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_mplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_db`
--

CREATE TABLE `book_db` (
  `No` double NOT NULL,
  `Title` varchar(256) NOT NULL,
  `Author` varchar(256) NOT NULL,
  `date_published` date NOT NULL,
  `Number_Page` int(11) NOT NULL,
  `Type_book` text NOT NULL COMMENT 'Novel, Documentation, Other'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_db`
--

INSERT INTO `book_db` (`No`, `Title`, `Author`, `date_published`, `Number_Page`, `Type_book`) VALUES
(2, 'buku bukuan aja', 'wiguna', '2020-04-12', 1213, 'Other'),
(3, 'iseng2', 'hera3', '2020-04-17', 1, 'Novel'),
(7, 'asdasd', 'dddd', '2020-04-18', 100, 'Other');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_db`
--
ALTER TABLE `book_db`
  ADD PRIMARY KEY (`No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_db`
--
ALTER TABLE `book_db`
  MODIFY `No` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
