-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 03:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batch3`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `st_id` int(11) NOT NULL,
  `st_fname` varchar(50) NOT NULL,
  `st_lname` varchar(100) NOT NULL,
  `st_color` varchar(200) NOT NULL,
  `st_gender` varchar(6) NOT NULL,
  `st_password` varchar(100) NOT NULL,
  `st_address` varchar(200) NOT NULL,
  `st_product` varchar(100) NOT NULL,
  `st_photo` varchar(100) NOT NULL,
  `st_price` varchar(100) NOT NULL,
  `st_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`st_id`, `st_fname`, `st_lname`, `st_color`, `st_gender`, `st_password`, `st_address`, `st_product`, `st_photo`, `st_price`, `st_date`) VALUES
(4, 'Makwana', 'Nilesh', '#0fb3a8', '', '111', 'Surat', 'Food', 'upload/food1.jpg', '20000', '2022-10-12'),
(5, 'Yadav', 'Akash', '#2fab0d', '', '111', '', 'Mobile', 'upload/mobile.jpg', '20000', '2022-10-12'),
(6, 'Yadav', 'Akash', '#c12525', 'Male', '111', 'Surat', 'Mobile', 'upload/mobile.jpg', '20000', '2022-10-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
