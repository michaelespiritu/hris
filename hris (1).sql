-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2015 at 08:42 AM
-- Server version: 5.6.14
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL,
  `activity_title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `note` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity_title`, `start_date`, `end_date`, `note`, `created_at`) VALUES
(1, 'First Semester Examination', '2015-08-13', '2015-08-15', '<p>Good Luck!</p>', '2015-08-01 20:41:55'),
(2, 'No Classes', '2015-08-27', '2015-08-28', '<p>Congrats!</p>', '2015-08-01 20:49:12');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE IF NOT EXISTS `applicants` (
  `id` int(11) NOT NULL,
  `p_q_1` text NOT NULL,
  `p_q_2` text NOT NULL,
  `p_q_3` text NOT NULL,
  `p_q_4` text NOT NULL,
  `p_q_5` text NOT NULL,
  `p_q_6` text NOT NULL,
  `p_q_7` text NOT NULL,
  `p_q_8` text NOT NULL,
  `p_q_9` text NOT NULL,
  `p_q_10` text NOT NULL,
  `p_q_11` text NOT NULL,
  `p_q_12` text NOT NULL,
  `p_q_13` text NOT NULL,
  `p_q_14` text NOT NULL,
  `p_q_15` text NOT NULL,
  `p_q_16` text NOT NULL,
  `p_q_17` text NOT NULL,
  `p_q_18` text NOT NULL,
  `p_q_19` text NOT NULL,
  `p_q_20` text NOT NULL,
  `p_q_21` text NOT NULL,
  `p_q_22` text NOT NULL,
  `p_q_23` text NOT NULL,
  `p_q_24` text NOT NULL,
  `p_q_25` text NOT NULL,
  `p_q_26` text NOT NULL,
  `p_q_27` text NOT NULL,
  `p_q_28` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `p_q_1`, `p_q_2`, `p_q_3`, `p_q_4`, `p_q_5`, `p_q_6`, `p_q_7`, `p_q_8`, `p_q_9`, `p_q_10`, `p_q_11`, `p_q_12`, `p_q_13`, `p_q_14`, `p_q_15`, `p_q_16`, `p_q_17`, `p_q_18`, `p_q_19`, `p_q_20`, `p_q_21`, `p_q_22`, `p_q_23`, `p_q_24`, `p_q_25`, `p_q_26`, `p_q_27`, `p_q_28`, `created_at`) VALUES
(2, 't', 't', 't', 't', 't', 't', 't', 't', 't', '23-01-1985', 't', 'Male', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', '2015-08-14 05:17:24'),
(3, 's', 's', 's', 's', 's', 's', 's', 's', 's', '15-01-1985', 's', 'Male', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', '2015-08-14 05:18:31'),
(4, 's', 's', 's', 's', 's', 's', 's', 's', 's', '15-01-1985', 's', 'Male', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', 's', '2015-08-14 05:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `p_q_1` text NOT NULL,
  `p_q_2` text NOT NULL,
  `p_q_3` text NOT NULL,
  `p_q_4` text NOT NULL,
  `p_q_5` text NOT NULL,
  `p_q_6` text NOT NULL,
  `p_q_7` text NOT NULL,
  `p_q_8` text NOT NULL,
  `p_q_9` text NOT NULL,
  `p_q_10` text NOT NULL,
  `p_q_11` text NOT NULL,
  `p_q_12` text NOT NULL,
  `p_q_13` text NOT NULL,
  `p_q_14` text NOT NULL,
  `p_q_15` text NOT NULL,
  `p_q_16` text NOT NULL,
  `p_q_17` text NOT NULL,
  `p_q_18` text NOT NULL,
  `p_q_19` text NOT NULL,
  `p_q_20` text NOT NULL,
  `p_q_21` text NOT NULL,
  `p_q_22` text NOT NULL,
  `p_q_23` text NOT NULL,
  `p_q_24` text NOT NULL,
  `p_q_25` text NOT NULL,
  `p_q_26` text NOT NULL,
  `p_q_27` text NOT NULL,
  `p_q_28` text NOT NULL,
  `p_q_29` text NOT NULL,
  `p_q_30` text NOT NULL,
  `p_q_31` text NOT NULL,
  `p_q_32` text NOT NULL,
  `p_q_33` text NOT NULL,
  `p_q_34` text NOT NULL,
  `p_q_35` text NOT NULL,
  `p_q_36` text NOT NULL,
  `p_q_37` text NOT NULL,
  `p_q_38` text NOT NULL,
  `p_q_39` text NOT NULL,
  `p_q_40` text NOT NULL,
  `p_q_41` text NOT NULL,
  `p_q_42` text NOT NULL,
  `p_q_43` text NOT NULL,
  `p_q_44` text NOT NULL,
  `p_q_45` text NOT NULL,
  `p_q_46` text NOT NULL,
  `p_q_47` text NOT NULL,
  `p_q_48` text NOT NULL,
  `p_q_49` text NOT NULL,
  `p_q_50` text NOT NULL,
  `p_q_51` text NOT NULL,
  `p_q_52` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `applicant_id`, `p_q_1`, `p_q_2`, `p_q_3`, `p_q_4`, `p_q_5`, `p_q_6`, `p_q_7`, `p_q_8`, `p_q_9`, `p_q_10`, `p_q_11`, `p_q_12`, `p_q_13`, `p_q_14`, `p_q_15`, `p_q_16`, `p_q_17`, `p_q_18`, `p_q_19`, `p_q_20`, `p_q_21`, `p_q_22`, `p_q_23`, `p_q_24`, `p_q_25`, `p_q_26`, `p_q_27`, `p_q_28`, `p_q_29`, `p_q_30`, `p_q_31`, `p_q_32`, `p_q_33`, `p_q_34`, `p_q_35`, `p_q_36`, `p_q_37`, `p_q_38`, `p_q_39`, `p_q_40`, `p_q_41`, `p_q_42`, `p_q_43`, `p_q_44`, `p_q_45`, `p_q_46`, `p_q_47`, `p_q_48`, `p_q_49`, `p_q_50`, `p_q_51`, `p_q_52`, `created_at`) VALUES
(1, 2, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2015-08-14 05:17:24'),
(2, 3, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2015-08-14 05:18:31'),
(3, 4, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '2015-08-14 05:19:15');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_code`, `course_title`, `created_at`) VALUES
(1, 'BS IT', 'Bachelor of Science in Information Technology', '2015-07-21 17:43:43');

-- --------------------------------------------------------

--
-- Table structure for table `in_case_of_emergency`
--

CREATE TABLE IF NOT EXISTS `in_case_of_emergency` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `relationship` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_case_of_emergency`
--

INSERT INTO `in_case_of_emergency` (`id`, `user_id`, `first_name`, `last_name`, `relationship`, `contact_number`, `updated_at`, `create_at`) VALUES
(1, 1, 'John ', 'Doe SR', 'Father', '01293812', '2015-07-15 19:20:05', '2015-07-15 19:20:05'),
(3, 7, 'Father', 'Dear', 'Mother', '12345', '2015-07-16 15:32:51', '2015-07-16 15:32:51'),
(4, 8, 'Nick', 'Furry', 'Captain', '32423423423', '2015-07-21 15:55:36', '2015-07-21 15:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE IF NOT EXISTS `leaves` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `leave_type` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `approve` int(2) NOT NULL,
  `admin_comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `user_id`, `start_date`, `end_date`, `leave_type`, `comment`, `approve`, `admin_comment`, `created_at`) VALUES
(4, 8, '2015-07-28', '2015-07-30', 'Sick Leave', 'test', 2, '<p>no</p>', '2015-07-23 17:48:27'),
(5, 8, '2015-07-27', '2015-07-28', 'Vacation Leave', '&lt;script&gt;alert()&lt;/script&gt;', 2, '<p>NO!!!!</p>', '2015-07-23 17:49:44'),
(6, 8, '2015-08-19', '2015-08-20', 'Vacation Leave', '<p>Please</p><p>&lt;script&gt;alert()&lt;/script&gt;</p>', 1, '<p>test</p>', '2015-07-23 18:16:05'),
(7, 8, '2015-09-09', '2015-09-10', 'Vacation Leave', '<p>Please!</p>', 1, '<p>GO</p>', '2015-07-25 16:35:51'),
(8, 1, '2015-08-03', '2015-08-04', 'Vacation Leave', '<p>LEAVE!</p>', 1, '<p>GO!</p>', '2015-07-27 15:21:22'),
(9, 1, '2015-08-18', '2015-08-20', 'Vacation Leave', '<p>Please</p>', 1, '<p>Ok, enjoy!</p>', '2015-07-27 15:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL,
  `message_from_id` int(11) NOT NULL,
  `message_to_id` int(11) NOT NULL,
  `message_title` text NOT NULL,
  `message_body` text NOT NULL,
  `reply` int(2) NOT NULL,
  `open` int(2) NOT NULL,
  `date_sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `message_from_id`, `message_to_id`, `message_title`, `message_body`, `reply`, `open`, `date_sent`) VALUES
(10, 8, 1, 'MUST READ', '<p>TESTING !@#</p>', 0, 1, '2015-07-23 15:41:39'),
(11, 1, 8, 'MUST READ', '<p>123 TESTING</p><p>===== WRITE YOUR REPLY ABOVE THIS LINE ====</p><p>TESTING !@#</p>', 1, 1, '2015-07-23 15:42:01'),
(12, 1, 8, '<script>alert()</script>', '<p>&lt;script&gt;alert()&lt;/script&gt;</p>', 0, 1, '2015-07-23 15:43:27'),
(13, 1, 8, 'MUST READ', '<p>YEAH!</p><p>===== WRITE YOUR REPLY ABOVE THIS LINE ====</p><p>TESTING !@#</p>', 1, 1, '2015-07-23 18:54:42'),
(14, 1, 8, 'TEST', '<p>TEST</p>', 0, 1, '2015-07-25 16:34:48'),
(15, 8, 1, 'TEST', '<p>TESTTEST</p><p>&gt;&gt; On July 26, 2015 @ 12:34:48 Espiritu, Michael Gerald wrote:</p><p>TEST</p>', 1, 1, '2015-07-25 16:35:10'),
(16, 1, 8, '<script>alert()</script>', '<p>&lt;script&gt;alert()&lt;/script&gt;</p>', 0, 1, '2015-07-25 16:39:42'),
(17, 8, 1, '<script>alert()</script>', '<p>&lt;script&gt;alert()&lt;/script&gt;</p><p>&gt;&gt; On July 26, 2015 @ 12:39:42 Espiritu, Michael Gerald wrote:</p><p>&lt;script&gt;alert()&lt;/script&gt;</p>', 1, 1, '2015-07-25 16:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `udpated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `email`, `contact_number`, `role`, `address`, `profile_picture`, `udpated_at`, `created_at`) VALUES
(1, '1', 'Michael Gerald', 'Espiritu', 'michaelgeraldespiritu@gmail.com', '1234', '1', 'Blk. 1 L.7 Kamuning ave. Earth Philippines.', 'images/avatar/1234/unknown_man.jpg', '2015-07-15 18:49:10', '2015-07-15 18:49:10'),
(9, '7', 'Michael', 'Gerald', 'michaelgeraldespiritu@gmail.com', '123', '2', 'Earth', '', '2015-07-16 15:32:51', '2015-07-16 15:32:51'),
(10, '8', 'Natasha ', 'Romanov', 'nat@avengers.com', '123', '2', 'Earthlings Street', '', '2015-07-21 15:55:36', '2015-07-21 15:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `employee_id`, `password`, `join_date`) VALUES
(1, '0001', '93ff026b62de79c4940131bf92e9d2bd', '2015-07-15 18:22:04'),
(7, '0002', '52fcb03ecb0575c4d4591f479baf8317', '2015-07-16 15:32:51'),
(8, '0003', '52fcb03ecb0575c4d4591f479baf8317', '2015-07-21 15:55:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career`
--
ALTER TABLE `career`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_case_of_emergency`
--
ALTER TABLE `in_case_of_emergency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `career`
--
ALTER TABLE `career`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `in_case_of_emergency`
--
ALTER TABLE `in_case_of_emergency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
