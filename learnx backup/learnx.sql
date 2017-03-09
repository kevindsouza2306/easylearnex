-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2016 at 03:12 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `learnx`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`c_id` int(11) NOT NULL,
  `user_id` int(200) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `comments` text NOT NULL,
  `date_created` varchar(200) NOT NULL,
  `post_id` int(11) NOT NULL,
  `likes` int(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`c_id`, `user_id`, `u_name`, `comments`, `date_created`, `post_id`, `likes`) VALUES
(3, 11, 'shubham sharma', 'god of football', '18/02/16 : ', 20, 0),
(4, 11, 'shubham sharma', '1GB ram', '18/02/16 : 20:03:02', 17, 0),
(5, 11, 'shubham sharma', '1gb ram', '18/02/16 : 20:03:42', 17, 1),
(6, 11, 'shubham sharma', 'God of football after maradona', '19/02/16 : 03:50:59', 20, 1),
(7, 11, 'shubham sharma', 'God of football after maradona', '19/02/16 : 03:51:26', 20, 0),
(8, 9, 'vabhav shah', '8GB internal memory', '19/02/16 : 03:57:43', 17, 1),
(9, 9, 'vabhav shah', 'dont know', '19/02/16 : 04:02:22', 19, 0),
(10, 8, 'subham sarma', '25th december', '22/02/16 : 09:33:58', 41, 1),
(11, 9, 'vabhav shah', '3.2mp camera', '24/02/16 : 14:26:26', 17, 0),
(12, 9, 'vabhav shah', 'kllkm', '25/02/16 : 20:41:14', 21, 1);

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE IF NOT EXISTS `follow` (
`f_id` int(50) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `date_created` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `like`
--

CREATE TABLE IF NOT EXISTS `like` (
`l_id` int(50) NOT NULL,
  `c_id` int(11) NOT NULL,
  `user_id` int(200) NOT NULL,
  `u_name` varchar(200) NOT NULL,
  `date_created` varchar(200) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like`
--

INSERT INTO `like` (`l_id`, `c_id`, `user_id`, `u_name`, `date_created`, `post_id`) VALUES
(2, 4, 11, 'shubham sharma', '', 17),
(5, 4, 11, 'shubham sharma', '', 20),
(8, 5, 8, 'subham sarma', '25/02/16 : 19:59:53', 17),
(9, 5, 8, 'subham sarma', '25/02/16 : 20:01:07', 17),
(10, 5, 8, 'subham sarma', '25/02/16 : 20:01:08', 17),
(11, 5, 8, 'subham sarma', '25/02/16 : 20:01:10', 17),
(24, 10, 9, 'vabhav shah', '25/02/16 : 20:40:06', 41),
(26, 5, 9, 'vabhav shah', '25/02/16 : 20:40:30', 17),
(28, 12, 9, 'vabhav shah', '25/02/16 : 20:42:08', 21),
(29, 8, 9, 'vabhav shah', '25/02/16 : 20:42:19', 17),
(30, 6, 9, 'vabhav shah', '25/02/16 : 20:42:26', 20);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
`p_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `post` varchar(255) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `userip` varchar(200) NOT NULL,
  `st` tinyint(1) NOT NULL DEFAULT '0',
  `p` tinyint(1) NOT NULL DEFAULT '0',
  `edu` tinyint(1) NOT NULL DEFAULT '0',
  `ent` tinyint(1) NOT NULL DEFAULT '0',
  `following` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`p_id`, `user_id`, `username`, `post`, `date_created`, `userip`, `st`, `p`, `edu`, `ent`, `following`) VALUES
(17, 11, 'shubham sharma', 'what are the features of freedom251?', '18/02/16 : 18:18:09', '', 1, 1, 0, 0, 21),
(18, 11, 'shubham sharma', 'who is emila clark?', '18/02/16 : 18:20:56', '', 0, 0, 0, 1, 1),
(20, 11, 'shubham sharma', 'Who is lionel messi?', '18/02/16 : 18:47:04', '', 0, 0, 0, 1, 0),
(21, 9, 'vabhav shah', 'What can I learn/know right now in 10 minutes that will be useful for the rest of my life?', '19/02/16 : 05:13:59', '', 1, 1, 1, 1, 0),
(41, 8, 'subham sarma', 'when is chirstmas', '19/02/16 : 20:08:06', '', 0, 0, 1, 0, 0),
(42, 8, 'subham sarma', 'who invented the steam engine?', '19/02/16 : 20:47:20', '', 0, 0, 1, 0, 0),
(45, 8, 'subham sarma', 'Who is hosting the next fifa?', '19/02/16 : 20:51:29', '', 0, 0, 1, 1, 0),
(46, 8, 'subham sarma', 'Is Jhon Snow dead?', '19/02/16 : 20:56:49', '', 0, 0, 0, 1, 0),
(50, 8, 'subham sarma', 'what is the meaning of shubham??', '23/02/16 : 14:33:13', '', 0, 0, 0, 1, 0),
(51, 9, 'vabhav shah', 'mmbmngbv', '25/02/16 : 15:46:29', '', 0, 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userdetails`
--

CREATE TABLE IF NOT EXISTS `userdetails` (
`user_id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email_id` varchar(30) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `last_login` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `insert_date` varchar(30) NOT NULL,
  `insert_by` varchar(30) NOT NULL,
  `update_date` varchar(30) NOT NULL,
  `update_by` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

INSERT INTO `userdetails` (`user_id`, `first_name`, `last_name`, `contact_no`, `email_id`, `address`, `user_name`, `password`, `last_login`, `status`, `insert_date`, `insert_by`, `update_date`, `update_by`) VALUES
(6, 'NNN', 'MZMZ', '', 'AJAJA@GMAIL.COM', 'Student', '', 'azjzj', '0', 0, '13/02/16 : 08:24:58', 'Web Interface', '13/02/16 : 08:24:58', 'Web Interface'),
(7, 'NNN', 'MZMZ', '', 'AJAA@GMAIL.COM', 'Student', '', 'jzjzj', '0', 0, '13/02/16 : 08:25:30', 'Web Interface', '13/02/16 : 08:25:30', 'Web Interface'),
(8, 'subham', 'sarma', '', 'subham@gmail.com', 'Student', '', 'sarma', '28/02/16 : 13:03:57', 0, '13/02/16 : 08:27:44', 'Web Interface', '13/02/16 : 08:27:44', 'Web Interface'),
(9, 'vabhav', 'shah', '', 'vibhav@gmaol.com', 'Student1', '', 'abcd', '28/02/16 : 13:20:46', 1, '15/02/16 : 14:15:10', 'Web Interface', '15/02/16 : 14:15:10', 'Web Interface'),
(11, 'shubham', 'sharma', '', 'sharma@gmail.com', 'Student2', '', 'shubham', '23/02/16 : 14:34:56', 0, '15/02/16 : 14:42:41', 'Web Interface', '15/02/16 : 14:42:41', 'Web Interface');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
 ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `like`
--
ALTER TABLE `like`
 ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
 ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `userdetails`
--
ALTER TABLE `userdetails`
 ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `email_id` (`email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
MODIFY `f_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `like`
--
ALTER TABLE `like`
MODIFY `l_id` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `userdetails`
--
ALTER TABLE `userdetails`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
