-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2024 at 11:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rave`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinginfo`
--

CREATE TABLE `bookinginfo` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `schedule` date NOT NULL,
  `pax` int(11) NOT NULL,
  `pasigueno` varchar(50) NOT NULL,
  `comments` varchar(100) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `imgDir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookinginfo`
--

INSERT INTO `bookinginfo` (`id`, `fname`, `lname`, `email`, `contact`, `schedule`, `pax`, `pasigueno`, `comments`, `payment`, `imgDir`) VALUES
(17, 'tester231', 'ves23', 'tester@gmail.com', '0923-254-3422', '2024-01-16', 1, 'You\'re a Pasigueño!', 'fsdfewafdsfret', 'GCash', ''),
(18, 'tester231', 'ves23', 'tester@gmail.com', '0923-254-3422', '2024-03-24', 1, 'You\'re a Pasigueño!', 'fsdfewafdsfret', 'GCash', ''),
(19, 'testeE', 'TEST', 'tester32134@gmail.com', '0923-231-3423', '2024-03-24', 3, 'You\'re a Pasigueño!', 'HRYUJHFDBCTRY', 'GCash', ''),
(21, 'Kristian', 'Sandaga', 'Kris@gmail.com', '0923-254-3422', '2024-03-24', 1, 'You\'re not a Pasigueño!', 'dsadwerdft', 'GCash', ''),
(22, 'test', '12', 'tester@gmail.com', '0923-231-3423', '2024-03-24', 2, 'You\'re not a Pasigueño!', 'dasdewfdsftre', 'GCash', ''),
(23, 'test', '12', 'tester@gmail.com', '0923-231-3423', '2024-03-25', 2, 'You\'re not a Pasigueño!', 'dasdewfdsftre', 'GCash', ''),
(24, 'testsadweqdf', '12', 'tester@gmail.com', '0923-231-3423', '2024-03-24', 2, 'You\'re not a Pasigueño!', 'dasdewfdsftre', 'GCash', ''),
(25, 'testsadweqdf', '12', 'tester@gmail.com', '0923-231-3423', '2024-03-24', 2, 'You\'re not a Pasigueño!', 'dasdewfdsftre', 'GCash', ''),
(26, 'testsadweqdf', '12', 'tester@gmail.com', '0923-231-3423', '2024-03-24', 2, 'You\'re not a Pasigueño!', 'dasdewfdsftre', 'GCash', ''),
(27, 'testsadweqdf', '12', 'tester@gmail.com', '0923-231-3423', '2024-03-24', 2, 'You\'re not a Pasigueño!', 'dasdewfdsftre', 'GCash', ''),
(28, 'test', 'tuesday', 'tue@gmail.com', '09232313423', '2024-03-25', 2, 'You\'re not a Pasigueño!', 'fsdfweqdsdfrgjty', 'GCash', ''),
(29, 'Kristian', 'Sandaga', 'tester@gmail.com', '09232313423', '2024-03-25', 3, 'You\'re not a Pasigueño!', 'fserewfdswr', 'Paypal', ''),
(30, 'Justine', 'Malaks', 'justine@gmail.com', '09232313423', '2024-03-25', 2, 'You\'re not a Pasigueño!', 'gtrgersdafwer', 'GCash', ''),
(31, 'Justine', 'Malaks', 'justine@gmail.com', '09232313423', '2024-03-25', 2, 'You\'re not a Pasigueño!', 'gtrgersdafwer', 'GCash', ''),
(32, 'John', 'Smith', 'John@gmail.com', '09232543422', '2024-03-26', 2, 'You\'re a Pasigueño!', 'gdfsgresadfvtrythuiyjk', 'Paypal', ''),
(33, 'sdfsdfwe', 'fdstrewt', 'test@gmail.com', '09239321234', '2024-03-07', 2, 'You\'re not a Pasigueño!', 'sgdgtersgsd', 'GCash', ''),
(34, 'sdfsdfwe', 'fdstrewt', 'test@gmail.com', '09239321234', '2024-02-29', -2, 'You\'re not a Pasigueño!', 'saddasd', 'Paymaya', ''),
(35, 'sdfsdfwe', 'fdstrewt', 'test@gmail.com', '09239321234', '2024-02-28', 1, 'You\'re not a Pasigueño!', 'dasdweq', 'Paypal', ''),
(36, 'sdfsdfwe', 'fdstrewt', 'test@gmail.com', '09239321234', '2024-02-28', 1, 'You\'re not a Pasigueño!', 'dasdweq', 'Paypal', ''),
(37, 'sdfsdfwe', 'fdstrewt', 'test@gmail.com', '09239321234', '2024-02-28', 1, 'You\'re not a Pasigueño!', 'dasdweq', 'Paypal', ''),
(38, 'sdfsdfwe', 'fdstrewt', 'test@gmail.com', '09239321234', '2024-02-28', 1, 'You\'re not a Pasigueño!', 'dasdweq', 'Paypal', ''),
(39, 'sdfsdfwe', 'fdstrewt', 'test@gmail.com', '09239321234', '2024-03-30', 4, 'You\'re not a Pasigueño!', '', 'Paypal', ''),
(40, 'test', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gdfgdf', 'Paypal', ''),
(41, 'test', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gdfgdf', 'Paypal', ''),
(42, 'test', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-30', 1, 'You\'re a Pasigueño!', 'ghdfg', 'GCash', ''),
(43, 'fdsf', 'fdsfew', 'e@fsdf', '09171245678', '2024-11-27', 1, 'You\'re a Pasigueño!', 'fdsfsd', 'GCash', ''),
(44, 'fdsf', 'fdsfew', 'e@fsdf', '09171245678', '2024-11-27', 1, 'You\'re a Pasigueño!', 'fdsfsd', 'GCash', ''),
(45, 'fdsf', 'fdsfew', 'e@fsdf', '09171245678', '2024-11-27', 1, 'You\'re a Pasigueño!', 'fdsfsd', 'GCash', ''),
(46, 'fdsf', 'fsd', 'fewfs@e', '', '2024-11-22', 1, 'You\'re a Pasigueño!', 'fdsfs', 'Paypal', ''),
(47, 'jhg', 'jhgj', 'sdfe@df', '09171245678', '2024-11-19', 1, 'You\'re not a Pasigueño!', 'fdsrfsd', 'GCash', ''),
(48, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(49, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(50, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(1).jpg'),
(51, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(52, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(2).jpg'),
(53, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(54, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(3).jpg'),
(55, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(56, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(4).jpg'),
(57, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(58, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(5).jpg'),
(59, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(60, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(6).jpg'),
(61, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(62, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(7).jpg'),
(63, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(64, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(8).jpg'),
(65, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(66, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(9).jpg'),
(67, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(68, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(10).jpg'),
(69, 'fds', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-21', 1, 'You\'re a Pasigueño!', 'gfd', 'Paypal', ''),
(70, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(11).jpg'),
(71, 'test', 'fdsfs', 'KristianItan@gmail.com', '09171245678', '2024-11-19', 1, 'You\'re a Pasigueño!', 'gvbcbfdg', 'Paypal', ''),
(72, '', '', '', '', '0000-00-00', 0, '', '', '', 'images/important(12).jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinginfo`
--
ALTER TABLE `bookinginfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
