-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2021 at 06:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `memories_chronicel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `name`, `username`, `password`, `user_type`) VALUES
(1, 'admin@gmail.com', 'Super Admin', 'admin', 'admin', 'super-admin'),
(3, 'hasanpranto1@gmail.com', 'Mahmudul Hasan', 'mhpranto', '123456789', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client_msg`
--

CREATE TABLE `client_msg` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `number` varchar(50) NOT NULL,
  `event` varchar(255) NOT NULL,
  `message` varchar(700) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_msg`
--

INSERT INTO `client_msg` (`id`, `name`, `email`, `number`, `event`, `message`, `user_name`, `user_id`, `event_status`) VALUES
(1, 'Mahmudul Hasan Pranto', 'hasanpranto1@gmail.com', '01234567890', 'Business Conference', 'hi first use ', 'Mahmudul Hasan', 2, 1),
(2, 'Mahmudul Hasan', 'hasanpranto1@gmail.com', '0123456789', 'Wedding', 'Hi this is second event', 'Mahmudul Hasan', 2, 2),
(3, 'Mahmudul Hasan', 'hasanpranto1@gmail.com', '0123456789', 'Birthday', 'hi contact me soon', 'Mahmudul Hasan', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `c_msg_id` int(11) NOT NULL,
  `c_number` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `to_be_paid` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `e_confirmed_by` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `confirm_date` varchar(255) NOT NULL,
  `payment_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `c_msg_id`, `c_number`, `c_name`, `c_email`, `event_type`, `event_date`, `to_be_paid`, `paid`, `e_confirmed_by`, `role`, `confirm_date`, `payment_status`) VALUES
(1, 3, '0123456789', 'Mahmudul Hasan', 'hasanpranto1@gmail.com', 'Birthday', '2021-08-15', 10000, 10000, 'admin', 'super-admin', 'August 15, 2021, 4:50 pm', 2);

-- --------------------------------------------------------

--
-- Table structure for table `event_dlt_log`
--

CREATE TABLE `event_dlt_log` (
  `id` int(11) NOT NULL,
  `c_msg_id` int(11) NOT NULL,
  `deleted_by` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_dlt_log`
--

INSERT INTO `event_dlt_log` (`id`, `c_msg_id`, `deleted_by`, `role`, `date`) VALUES
(1, 2, 'admin', 'super-admin', 'August 15, 2021, 8:04 pm');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` text NOT NULL,
  `image` text NOT NULL,
  `post_by` varchar(255) NOT NULL,
  `admin_role` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `updated_by` varchar(255) NOT NULL,
  `u_admin_role` varchar(255) NOT NULL,
  `updated_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `caption`, `image`, `post_by`, `admin_role`, `date`, `updated_by`, `u_admin_role`, `updated_date`) VALUES
(1, 'Neha & Sumit\'s Wedding', 'It\'s a great wedding.', 'IMG-6118d180ac6439.35675848.jpg', 'admin', 'super-admin', 'August 7, 2021, 6:23 pm', 'admin', 'super-admin', 'August 15, 2021, 2:34 pm'),
(2, 'Adrita\'s 5th Birthday', 'We are very Happy to make this event amazing. The smile is priceless.', 'IMG-610ed453bd2b22.49224642.jpg', 'admin', 'super-admin', 'August 7, 2021, 8:43 pm', '', '', ''),
(3, 'Hina & Althaf\'s Nikaah', 'The Wedding was so beautiful.', 'IMG-610ed6b9df15c6.52518630.jpg', 'admin', 'super-admin', 'August 7, 2021, 8:53 pm', '', '', ''),
(4, 'Joy Bangla Concert 2018 ', 'We are very grateful to be part of this kind of grand event. ', 'IMG-610f741d7ccfa8.43614457.jpg', 'admin', 'super-admin', 'August 8, 2021, 8:05 am', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `turnover`
--

CREATE TABLE `turnover` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `event_date` varchar(255) NOT NULL,
  `to_be_paid` int(11) NOT NULL,
  `paid` int(11) NOT NULL,
  `p_add_by` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `p_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `turnover`
--

INSERT INTO `turnover` (`id`, `event_id`, `c_name`, `event_type`, `event_date`, `to_be_paid`, `paid`, `p_add_by`, `role`, `p_date`) VALUES
(1, 1, 'Mahmudul Hasan', 'Birthday', '2021-08-15', 10000, 10000, 'admin', 'super-admin', 'August 16, 2021, 4:56 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `image`, `name`, `email`, `number`, `password`) VALUES
(1, 'IMG-611112c573ca20.55814070.jpg', 'Abdullah Ibne Mojib', 'abdullah@gmail.com', '0123456789', '123456789'),
(2, 'IMG-6111295213cdd3.00563417.jpg', 'Mahmudul Hasan', 'hasanpranto1@gmail.com', '013456789', '13456789');

-- --------------------------------------------------------

--
-- Table structure for table `user_blog`
--

CREATE TABLE `user_blog` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_blog`
--

INSERT INTO `user_blog` (`id`, `title`, `image`, `date`, `time`, `user_id`, `user_name`) VALUES
(1, 'Adrita\'s Birthday', 'IMG-61112496a13a70.79501096.jpg', '2021-08-09', '06:50:30pm', 1, 'Abdullah Ibne Mojib'),
(2, 'Nice wedding', 'IMG-61112726b8fc62.34298837.jpg', '2021-08-09', '07:01:26pm', 1, 'Abdullah Ibne Mojib'),
(3, 'Amazing Concert ', 'IMG-61112a093d3b45.90313973.jpg', '2021-08-09', '07:13:45pm', 2, 'Mahmudul Hasan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_msg`
--
ALTER TABLE `client_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_dlt_log`
--
ALTER TABLE `event_dlt_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `turnover`
--
ALTER TABLE `turnover`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_blog`
--
ALTER TABLE `user_blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `client_msg`
--
ALTER TABLE `client_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `event_dlt_log`
--
ALTER TABLE `event_dlt_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `turnover`
--
ALTER TABLE `turnover`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_blog`
--
ALTER TABLE `user_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
