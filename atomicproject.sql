-- phpMyAdmin SQL Dump
-- version 4.5.5.1deb2.trusty~ppa.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 10, 2016 at 01:11 AM
-- Server version: 5.6.28-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atomicproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthdays`
--

CREATE TABLE `birthdays` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `birthdays`
--

INSERT INTO `birthdays` (`id`, `title`, `birthday`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'zaman tauhid', '2016-04-14', '2016-09-04 12:04:45', NULL, NULL),
(2, 'new data', '2016-04-05', '2016-09-04 12:04:37', NULL, NULL),
(3, 'new data', '2016-04-20', '2016-09-04 12:04:24', NULL, NULL),
(6, 'new data updated', '2016-04-22', '2016-09-04 12:04:49', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checkbox`
--

CREATE TABLE `checkbox` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `checkbox` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `checkbox`
--

INSERT INTO `checkbox` (`id`, `title`, `checkbox`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '', 'on', '2016-09-04 20:04:33', NULL, NULL),
(2, '', 'on', '2016-09-04 20:04:51', NULL, NULL),
(3, '', 'on', '2016-09-04 20:04:57', NULL, NULL),
(4, '', 'on', '2016-10-04 00:04:33', NULL, NULL),
(5, '', 'on', '2016-10-04 01:04:18', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `title`, `city`, `created_at`, `updated_at`, `deleted_at`) VALUES
(15, 'zaman tauhid', 'dhaka', '2016-09-04 18:04:13', NULL, NULL),
(16, 'noor alam ', 'comilla', '2016-09-04 18:04:25', '2016-04-10 01:04:14', NULL),
(17, 'hasan', 'sylhet', '2016-09-04 18:04:39', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `title`, `gender`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'zaman tauhid', 'male', '2016-09-04 16:04:38', NULL, NULL),
(2, 'scarlet', 'female', '2016-09-04 16:04:56', '2016-04-10 01:04:32', NULL),
(3, 'campbel', 'female', '2016-09-04 16:04:12', NULL, NULL),
(4, 'naomi', 'female', '2016-09-04 16:04:20', NULL, NULL),
(5, 'de caprio', 'male', '2016-09-04 16:04:28', '2016-04-09 16:04:58', NULL),
(6, 'christian bale', 'male', '2016-09-04 16:04:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'fortran,java,php,javascript', '2016-09-04 08:04:13', '2016-04-09 09:04:15', NULL),
(3, 'java,php,javascript', '2016-09-04 08:04:07', '2016-04-09 09:04:20', NULL),
(5, 'java ,php ,javascript ,assembly', '2016-09-04 08:04:24', NULL, NULL),
(6, 'java ,php ,python ,javascript', '2016-09-04 08:04:32', NULL, NULL),
(8, 'ruby ,python ,assembly', '2016-09-04 08:04:58', NULL, NULL),
(9, 'java,php,ruby,scala', '2016-09-04 09:04:24', '2016-04-09 09:04:41', NULL),
(10, 'java ,php ,python ,javascript', '2016-09-04 09:04:37', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'moto droid v2', 'non shuttered phone', '2016-08-04 22:04:18', NULL, NULL),
(14, 'nokia 1100', 'antic phone', '2016-08-04 22:04:32', '2016-04-09 01:04:43', NULL),
(27, 'galaxy s6', 'best phone ever', '2016-09-04 01:04:27', NULL, NULL),
(28, 'galaxy s7', 'bad phone', '2016-09-04 01:04:43', '2016-04-09 08:04:14', NULL),
(29, 'new phone', 'good phone', '2016-09-04 01:04:36', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `title`, `profile_pic`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, 'birds', '1460226161birds.jpg', '2016-10-04 00:04:41', '2016-04-10 01:04:00', NULL),
(21, 'hen', '1460228011hen.jpg', '2016-10-04 00:04:31', NULL, NULL),
(23, 'everest', '1460228960everest.jpg', '2016-10-04 00:04:52', '2016-04-10 01:04:20', NULL),
(24, 'green', '1460228047green.jpg', '2016-10-04 00:04:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `title`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'zaman tauhid', 'hello@gmail.com', '2016-09-04 12:04:22', NULL, NULL),
(2, 'zaman tauhid', 'new@gmail.com', '2016-09-04 13:04:53', NULL, NULL),
(3, 'alam jilon', 'jilon.hasan@gmail.com', '2016-09-04 13:04:14', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `summaries`
--

CREATE TABLE `summaries` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `summary` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `summaries`
--

INSERT INTO `summaries` (`id`, `title`, `summary`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'new company name', 'some dummy text goes here', '2016-09-04 20:04:17', NULL, NULL),
(3, 'a plus group', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2016-09-04 20:04:30', '2016-04-09 20:04:20', NULL),
(4, 'new company', 'new data goes here', '2016-09-04 20:04:37', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birthdays`
--
ALTER TABLE `birthdays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkbox`
--
ALTER TABLE `checkbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summaries`
--
ALTER TABLE `summaries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birthdays`
--
ALTER TABLE `birthdays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `checkbox`
--
ALTER TABLE `checkbox`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `summaries`
--
ALTER TABLE `summaries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
