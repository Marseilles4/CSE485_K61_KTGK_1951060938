-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2022 at 09:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1951060938_university`
--

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `mamh` int(11) NOT NULL,
  `ten_ mh` text NOT NULL,
  `sotinchi` int(11) NOT NULL,
  `sotiet_lt` int(11) NOT NULL,
  `sotiet_bt` int(11) NOT NULL,
  `sotiet_thtn` int(11) NOT NULL,
  `sogio_tuhoc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamh`, `ten_ mh`, `sotinchi`, `sotiet_lt`, `sotiet_bt`, `sotiet_thtn`, `sogio_tuhoc`) VALUES
(1, 'công nghệ Web', 3, 25, 25, 25, 25),
(2, 'Hệ Quản Trị Cơ Sở Dữ Liệu', 3, 25, 20, 25, 14),
(3, 'Mạng Máy Tính', 3, 25, 25, 16, 8),
(4, 'Thiết kế Web', 3, 20, 10, 13, 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`mamh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
