-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2024 at 08:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@gmail.com', '4ff398ecdaff7e1d8e526ed9faedda54', '2024-06-24 09:55:09');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `comment` text NOT NULL,
  `registration_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0=Pending; 1=Confirmed; 2=Cancelled',
  `cancelled_by` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=User; 2=Admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `location`, `images`, `created_at`) VALUES
(1, 'Leh-Ladakh', '1.jpg, 2.jpg, 3.jpg', '2024-06-24 14:20:29'),
(2, 'Himachal', '4.jpg, 5.jpg, 6.jpg, 7.jpg, 8.jpg', '2024-06-23 14:55:19'),
(3, 'Kashmir', '9.jpg, 10.jpg', '2024-06-23 14:56:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_packagetype`
--

CREATE TABLE `tbl_packagetype` (
  `id` int(11) NOT NULL,
  `package_type` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_packagetype`
--

INSERT INTO `tbl_packagetype` (`id`, `package_type`, `created_at`) VALUES
(1, 'Corporates', '2024-06-22 03:30:13'),
(2, 'Family', '2024-06-22 03:30:32'),
(3, 'School/Colleges', '2024-06-22 03:30:43'),
(4, 'Couple', '2024-06-22 03:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscribe`
--

CREATE TABLE `tbl_subscribe` (
  `id` int(11) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tourpackage`
--

CREATE TABLE `tbl_tourpackage` (
  `id` int(11) NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `package_type` smallint(6) NOT NULL,
  `package_location` varchar(255) NOT NULL,
  `package_price` int(11) NOT NULL,
  `package_details` text NOT NULL,
  `package_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_tourpackage`
--

INSERT INTO `tbl_tourpackage` (`id`, `package_name`, `package_type`, `package_location`, `package_price`, `package_details`, `package_image`, `created_at`) VALUES
(1, 'Mesmerising Manali Package', 1, 'Manali', 9000, 'N/A', 'img1.jpg', '2024-06-24 14:56:04'),
(2, 'Stunning Kashmir Holiday Experience', 1, 'Kashmir', 12000, 'N/A', 'img2.jpg', '2024-06-24 15:30:31'),
(3, 'Amazing Ladakh with Nurba Valley', 2, 'Leh Ladakh', 11000, 'N/A', 'img3.jpg', '2024-06-24 15:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userquery`
--

CREATE TABLE `tbl_userquery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userregistration`
--

CREATE TABLE `tbl_userregistration` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registration_date` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_packagetype`
--
ALTER TABLE `tbl_packagetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_tourpackage`
--
ALTER TABLE `tbl_tourpackage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userquery`
--
ALTER TABLE `tbl_userquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userregistration`
--
ALTER TABLE `tbl_userregistration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_packagetype`
--
ALTER TABLE `tbl_packagetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_subscribe`
--
ALTER TABLE `tbl_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_tourpackage`
--
ALTER TABLE `tbl_tourpackage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_userquery`
--
ALTER TABLE `tbl_userquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_userregistration`
--
ALTER TABLE `tbl_userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
