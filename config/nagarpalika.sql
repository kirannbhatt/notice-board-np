-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2019 at 09:22 AM
-- Server version: 5.7.25-0ubuntu0.18.10.2
-- PHP Version: 7.2.15-0ubuntu0.18.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nagarpalika`
--

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_activities`
--

CREATE TABLE `tbl_activities` (
  `id` int(11) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8mb4 NOT NULL,
  `file` varchar(200) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_activities`
--

INSERT INTO `tbl_activities` (`id`, `description`, `file`) VALUES
(40, 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤²à¤®à¤¾ à¤«à¥ˆà¤²à¤¿à¤¦à¥‹ à¤¬à¤¿à¤°à¤¾à¤®à¥€à¤•à¥‹ à¤µà¥à¤¯à¤¾à¤ªà¤¾à¤°, à¤¸à¤°à¤•à¤¾à¤°à¥€à¤­à¤¨à¥à¤¦à¤¾ à¥§à¥« à¤—à¥à¤£à¤¾ à¤¬à¤¢à¥€ à¤¨à¤¿à¤œà¥€ ', 'Screenshot from 2019-03-08 08-25-26.png'),
(41, 'à¤µà¤¿à¤ªà¥à¤²à¤µà¤µà¤¿à¤ªà¥à¤²à¤µ à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤²à¤®à¤¾ à¤«à¥ˆà¤²à¤¿à¤¦à¥‹ à¤¬à¤¿à¤°à¤¾à¤®à¥€à¤•à¥‹ à¤µà¥à¤¯à¤¾à¤ªà¤¾à¤°, à¤¸à¤°à¤•à¤¾à¤°à¥€à¤­à¤¨à¥à¤¦à¤¾ à¥§à¥« à¤—à¥à¤£à¤¾ à¤¬à¤¢à¥€ à¤¨à¤¿à¤œà¥€ à¤®à¤¹à¤à¤—à¥‹	', 'Screenshot from 2019-03-08 07-26-24.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headlines`
--

CREATE TABLE `tbl_headlines` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_headlines`
--

INSERT INTO `tbl_headlines` (`id`, `description`) VALUES
(2, 'à¤¬à¤¢à¥à¤¦à¥‹ à¤Ÿà¤•à¤°à¤¾à¤µ : à¤•à¥‡à¤ªà¥€â€“à¤ªà¥à¤°à¤šà¤£à¥à¤¡ à¤­à¤°à¥à¤¸à¥‡à¤¸ à¤µà¤¿à¤ªà¥à¤²à¤µ à¤µà¤¿à¤ªà¥à¤²à¤µ '),
(3, 'à¤¬à¤¢à¥à¤¦à¥‹ à¤Ÿà¤•à¤°à¤¾à¤µ : à¤•à¥‡à¤ªà¥€â€“à¤ªà¥à¤°à¤šà¤£à¥à¤¡ à¤­à¤°à¥à¤¸à¥‡à¤¸ à¤µà¤¿à¤ªà¥à¤²à¤µ ! ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `Name`, `email`, `password`) VALUES
(1, 'Kiran Bhatt', 'kb_43@outlook.com', 'mekiran112'),
(2, 'Jeevan', 'jvan@google.com', 'kkiirraann');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_youtub`
--

CREATE TABLE `tbl_youtub` (
  `id` int(11) NOT NULL,
  `Description` varchar(300) DEFAULT NULL,
  `Url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_youtub`
--

INSERT INTO `tbl_youtub` (`id`, `Description`, `Url`) VALUES
(6, 'Youtube embed', 'https://www.youtube.com/embed/zvUqT-_QyiE?autoplay=1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_headlines`
--
ALTER TABLE `tbl_headlines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_youtub`
--
ALTER TABLE `tbl_youtub`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_activities`
--
ALTER TABLE `tbl_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tbl_headlines`
--
ALTER TABLE `tbl_headlines`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_youtub`
--
ALTER TABLE `tbl_youtub`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
