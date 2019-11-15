-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2019 at 07:28 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oracooli`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` mediumblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('n9cftp4e2on53no0qlld05une5uolq2c', '::1', 1573796101, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739363130313b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('4b97ek9bqmffcp9nmk0bd8j2fvfi5lha', '::1', 1573797283, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739373238333b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('bqfobkgmd69adkma9hlq3i7alh287hs2', '::1', 1573796735, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739363733353b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('23aitcvgufnr7p9k7gqv7esaktlne80c', '::1', 1573796430, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739363433303b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('3svupho8h3klv53bvol3osep4hd40ldp', '::1', 1573795685, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739353638353b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a3339303b),
('jd8v0ao3ro933ivvqtutjg931eq736gs', '::1', 1573794691, ''),
('c0n33h0p3i1b015s2ps1vr2stbhkige6', '::1', 1573794996, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739343939363b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('tdg3umld8ir1icqt87vrc593d1bs2rht', '::1', 1573795350, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739353335303b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('68fteljhvrc8gatsjl87m6vp8m0ltjcc', '::1', 1573794681, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739343532333b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('to26cus5ftpbq3vc8tcvgjdepiqqjq8k', '::1', 1573794523, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739343532333b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('8ar509kj0ottoq9erppd1c1aldq0ug43', '::1', 1573797718, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739373731383b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('sr7asb7amrgk1l7a7ttpdpv0fqjmilo4', '::1', 1573798127, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739383132373b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('v4h6jdsbu612slamvnahoivjlp4cf9g3', '::1', 1573798784, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739383738343b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b),
('0o92256a8m98qebiu3oudkrbgbarrf2a', '::1', 1573799304, 0x5f5f63695f6c6173745f726567656e65726174657c693a313537333739383738343b7573657269647c733a313a2231223b757365726e616d657c733a363a22476175726176223b656d61696c7c733a32333a226761757261762e73616764656f40676d61696c2e636f6d223b6f66667365747c693a353b);

-- --------------------------------------------------------

--
-- Table structure for table `user_chat`
--

CREATE TABLE `user_chat` (
  `id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL COMMENT 'Group Id',
  `group_user_id` int(11) DEFAULT NULL,
  `user_id1` int(11) DEFAULT NULL COMMENT 'User_id 1',
  `user_id2` int(11) DEFAULT NULL COMMENT 'User Id 2',
  `message` text DEFAULT NULL COMMENT 'Chat Messages',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `read_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_following`
--

CREATE TABLE `user_following` (
  `id` int(11) NOT NULL,
  `user_id1` int(11) NOT NULL,
  `user_id2` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_notification`
--

CREATE TABLE `user_notification` (
  `id` int(11) NOT NULL,
  `notification_type` varchar(100) NOT NULL,
  `notify_user_id` int(12) NOT NULL,
  `notification_text` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_notification`
--

INSERT INTO `user_notification` (`id`, `notification_type`, `notify_user_id`, `notification_text`, `created_at`) VALUES
(1, 'like', 1, 'Gaurav likes your post Hydrangeas', '2019-11-07 08:02:16'),
(2, 'like', 1, 'Gaurav likes your post Hydrangeas', '2019-11-15 05:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_notify_status`
--

CREATE TABLE `user_notify_status` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `notification_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post`
--

CREATE TABLE `user_post` (
  `post_id` int(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_description` varchar(300) NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `image_ids` varchar(255) NOT NULL,
  `as_mentor` tinyint(1) NOT NULL DEFAULT 0,
  `as_mentee` tinyint(1) NOT NULL DEFAULT 0,
  `friends` tinyint(1) NOT NULL DEFAULT 0,
  `global` tinyint(1) NOT NULL DEFAULT 0,
  `private` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post`
--

INSERT INTO `user_post` (`post_id`, `user_id`, `post_title`, `post_description`, `post_tags`, `image_ids`, `as_mentor`, `as_mentee`, `friends`, `global`, `private`, `created_at`) VALUES
(1, 1, 'Hydrangeas', '', 'Hydrangeas', '', 1, 0, 0, 1, 0, '2019-10-27 13:03:47'),
(2, 1, 'Hydrangeas', '', 'Hydrangeas', '', 1, 0, 1, 0, 0, '2019-10-27 13:03:50'),
(3, 1, '', '', '', '', 0, 0, 1, 0, 0, '2019-11-15 05:45:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_post_bookmark`
--

CREATE TABLE `user_post_bookmark` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_post_comment`
--

CREATE TABLE `user_post_comment` (
  `parent_comment` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post_comment`
--

INSERT INTO `user_post_comment` (`parent_comment`, `id`, `user_id`, `post_id`, `comment`, `created_at`) VALUES
(0, 1, 1, 2, 'g', '2019-11-15 05:27:48'),
(0, 2, 1, 3, 'g', '2019-11-15 05:45:40'),
(0, 3, 1, 3, 'd', '2019-11-15 05:46:07'),
(0, 4, 1, 3, 'Hello', '2019-11-15 06:02:31'),
(0, 5, 1, 3, 'hello', '2019-11-15 06:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_post_like`
--

CREATE TABLE `user_post_like` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_post_like`
--

INSERT INTO `user_post_like` (`id`, `user_id`, `post_id`, `status`, `created_at`) VALUES
(1, 1, 2, 0, '2019-11-07 08:02:16'),
(2, 1, 2, 0, '2019-11-15 05:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `user_reg_id` int(10) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `languages_know` varchar(255) DEFAULT NULL,
  `mobile_number` bigint(15) DEFAULT NULL,
  `current_qualification` varchar(255) DEFAULT NULL,
  `desired_job` varchar(255) DEFAULT NULL,
  `desired_skills` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `jobs` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `expertise` int(11) DEFAULT NULL,
  `achievement` int(11) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `followers` varchar(255) DEFAULT NULL,
  `following` varchar(255) DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`id`, `user_reg_id`, `first_name`, `last_name`, `languages_know`, `mobile_number`, `current_qualification`, `desired_job`, `desired_skills`, `education`, `jobs`, `experience`, `designation`, `expertise`, `achievement`, `country`, `university`, `about`, `followers`, `following`, `profile_image`) VALUES
(1, 1, 'Gaurav', 'Sagdeo', '', 0, '', '', '', '', '', '2', '', 0, 0, '', NULL, '                                                   Tell something about yourself\r\n                                                                        ', NULL, NULL, '1_Vasanti.jpg'),
(2, 2, 'Ajay ', 'Chaudhari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(250) NOT NULL,
  `is_activated` tinyint(1) NOT NULL DEFAULT 0,
  `code` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `username`, `email`, `password`, `is_activated`, `code`) VALUES
(1, 'Gaurav', 'gaurav.sagdeo@gmail.com', '$2y$12$aFq/Dc0vUZE8Q4bOjmikVeclLARIK5a3a1We7N9/3us.p/gz0fCJ.', 0, '5db582edeb476'),
(2, 'Ajay', 'ajaydgamer@yahoo.com', '$2y$12$eL7gSiVUT3DiWbANjCRM3O3iOgZEm3szOGI8kzNPC.RnOsb.C2/lS', 0, '5db5883f092af');

-- --------------------------------------------------------

--
-- Table structure for table `user_relations`
--

CREATE TABLE `user_relations` (
  `relation_id` int(11) NOT NULL,
  `user_id_1` int(11) NOT NULL,
  `user_id_2` int(11) NOT NULL,
  `friends` tinyint(1) NOT NULL DEFAULT 0,
  `chat_status` tinyint(1) NOT NULL DEFAULT 0,
  `user1_chat_status` tinyint(1) NOT NULL DEFAULT 0,
  `user2_chat_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_relations`
--

INSERT INTO `user_relations` (`relation_id`, `user_id_1`, `user_id_2`, `friends`, `chat_status`, `user1_chat_status`, `user2_chat_status`) VALUES
(1, 1, 2, 2, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `chat_minimize` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_settings`
--

INSERT INTO `user_settings` (`id`, `user_id`, `chat_minimize`) VALUES
(1, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_uploads`
--

CREATE TABLE `user_uploads` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `content_type` varchar(255) NOT NULL,
  `content_desc` varchar(255) NOT NULL,
  `content_link` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_uploads`
--

INSERT INTO `user_uploads` (`id`, `post_id`, `user_id`, `content_type`, `content_desc`, `content_link`) VALUES
(1, 1, 1, 'image/jpeg', 'descc', '1_Hydrangeas.jpg'),
(2, 2, 1, 'image/jpeg', 'descc', '1_Hydrangeas1.jpg'),
(3, 3, 1, 'image/jpeg', 'descc', '1_Desert.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `user_chat`
--
ALTER TABLE `user_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_following`
--
ALTER TABLE `user_following`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notification`
--
ALTER TABLE `user_notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notify_status`
--
ALTER TABLE `user_notify_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post`
--
ALTER TABLE `user_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user_post_bookmark`
--
ALTER TABLE `user_post_bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post_comment`
--
ALTER TABLE `user_post_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_post_like`
--
ALTER TABLE `user_post_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_UserRegId` (`user_reg_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_relations`
--
ALTER TABLE `user_relations`
  ADD PRIMARY KEY (`relation_id`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_uploads`
--
ALTER TABLE `user_uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_UserUploads` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_chat`
--
ALTER TABLE `user_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_following`
--
ALTER TABLE `user_following`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_notification`
--
ALTER TABLE `user_notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_notify_status`
--
ALTER TABLE `user_notify_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_post`
--
ALTER TABLE `user_post`
  MODIFY `post_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_post_bookmark`
--
ALTER TABLE `user_post_bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_post_comment`
--
ALTER TABLE `user_post_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_post_like`
--
ALTER TABLE `user_post_like`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_relations`
--
ALTER TABLE `user_relations`
  MODIFY `relation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_settings`
--
ALTER TABLE `user_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_uploads`
--
ALTER TABLE `user_uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
