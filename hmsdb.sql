-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 10:58 AM
-- Server version: 8.0.18
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hmsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(11) NOT NULL,
  `appoinment` varchar(50) NOT NULL,
  `availability` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `appoinment`, `availability`) VALUES
(1, 'Dr. Jain From 5 to 7 pm', 1),
(2, 'Dr. Mehara From 2 to 3 pm', 0),
(3, 'Dr. JAY From 9 to 10 am', 0),
(4, 'Dr. Agarwal From 1 to 2 pm', 0),
(5, 'Dr. Agarwal From 2 to 3 pm', 0),
(6, 'Dr. Mehta From 11 to 12 am', 0),
(7, 'Dr. Patel From 11 to 12 am', 0),
(8, 'Dr. xyz From 12 to  am', 0),
(9, 'Dr. Agarwal 6 to 7 PM', 1),
(10, 'Dr. Agarwal From 5 to 7 pm', 1),
(11, 'Dr. Agarwal 6 to 7 PM', 1),
(12, 'Dr. Jain From 5 to 7 pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `covid`
--

CREATE TABLE `covid` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `pincode` int(11) NOT NULL,
  `travelled_outside` tinyint(1) NOT NULL,
  `symptoms` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `covid`
--

INSERT INTO `covid` (`fname`, `lname`, `adress`, `age`, `gender`, `email`, `contact`, `city`, `state`, `pincode`, `travelled_outside`, `symptoms`) VALUES
('vidit', 'naik', 'noida', 19, 'Male', 'vidit123@gmail.com', 96852658742, 'noida', 'Uttar Pradesh', 166352, 1, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

CREATE TABLE `doctorapp` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `docapp` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`fname`, `lname`, `email`, `contact`, `docapp`) VALUES
('nandan', 'b', 'nandanvinodbhai.b2019@vitstudent.ac.in', '8401733801', 'Dr. Jain From 10am to 2pm'),
(' knk kkm', ' n  m ,', 'baldhanandan@gmail.com', '8401733801', 'Dr. Jain From 10am to 2pm'),
('Priyank ', 'Sharma', 'priyank@gmail.com', '96852658742', 'Dr. Mehra From 2pm to 8pm'),
('vidit', 'Nail', 'vidit123@gmail.com', '65266623665', 'Dr. Mehra From 2pm to 8pm'),
('divyansh', 'srivastava', 'div123@gmail.com', '8456931254', 'Dr. Mehra From 2pm to 8pm'),
('nandan', 'Nail', 'xyz@gmail.com', '8456931254', 'Dr. Jain From 10am to 2pm'),
('arvind', 'kejariwal', 'ak@gmail.com', '74236598241', 'Dr. Agarwal From 2pm to 8pm'),
('nandan', 'baldha', 'nandanvinodbhai.b2019@vitstudent.ac.in', '8401733801', 'Dr. Chauhan From 2pm to 8pm'),
('rahul', 'Patel', 'rahul123@gmail.com', '8963254123', 'Dr. Mehta From 2pm to 8pm'),
('kartik', 'patel', 'kartik@gmail.com', '8963254185', 'Dr. Agarwal From 2pm to 8pm'),
('vidit', 'naik', 'vidit123@gmail.com', '74236598241', 'Dr. Jain From 10am to 2pm'),
('vidit', 'naik', 'vidit123@gmail.com', '74236598241', 'Dr. Jain From 10am to 2pm'),
('vidit', 'naik', 'vidit123@gmail.com', '74236598241', 'Dr. Agarwal From 2pm to 8pm'),
('div', 's', 'div123@gmail.com', '896532458', 'rajesh 4 to 5 PM'),
('Nandan', 'Baldha', 'baldhanandan@gmail.com', '8456931254', 'Dr. Agarwal From 1 to 2 pm'),
('Nandan', 'Baldha', 'baldhanandan@gmail.com', '8456931254', 'Dr. Agarwal From 1 to 2 pm'),
('Nandan', 'Baldha', 'baldhanandan@gmail.com', '8401733801', 'Dr. Patel From 11 to 12 am'),
('Nandan', 'Baldha', 'baldhanandan@gmail.com', '8401733801', 'Dr. Jain From 5 to 7 pm'),
('', 'Baldha', 'baldhanandan@gmail.com', '65266623665', 'Dr. Agarwal 6 to 7 PM'),
('Raj', 'Patel', 'raj@gmail.com', '74236598241', 'Dr. Agarwal From 5 to 7 pm'),
('Nandan', 'Baldha', 'nandanvinodbhai.b2019@vitstudent.ac.in', '8401733801', 'Dr. Agarwal 6 to 7 PM'),
('rohan', 'm', 'rohan@gmail.com', '74236598241', 'Dr. Jain From 5 to 7 pm');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `id` int(11) NOT NULL,
  `full name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`id`, `full name`, `username`, `password`) VALUES
(1001, 'dr.jain', 'jain123@gmail.com', 'jainabc'),
(1002, 'dr.mehra', 'mehra123@gmail.com', 'mehraabc'),
(1003, 'dr.patil', 'patil123@gmail.com', 'patilabc'),
(1004, 'dr.kumar', 'kumar123@gmail.com', 'kumarabc'),
(1005, 'dr.agarwal', 'agarwal123@gmail.com', 'agarwalabc'),
(1006, 'dr.mehta', 'mehta123@gmail.com', 'mehtaabc'),
(1007, 'dr.chauhan', 'chauhan123@gmail.com', 'chauhababc'),
(1008, 'dr.axank', 'axankpatel@gmail.com', 'axank123');

-- --------------------------------------------------------

--
-- Table structure for table `doctorprofile`
--

CREATE TABLE `doctorprofile` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `specialisation` varchar(60) NOT NULL,
  `experience` varchar(60) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `doctorprofile`
--

INSERT INTO `doctorprofile` (`id`, `name`, `specialisation`, `experience`, `image`) VALUES
(1, 'Dr. Aanad Kumar', 'Genral Physician', '7 Years', 'd1.PNG'),
(2, 'Dr. Krishana Patil', 'ENT', '5 Years', 'd2.PNG'),
(3, 'Dr. Jatin Mehara', 'Dermatologist', '9 Years', 'd3.PNG'),
(4, 'Dr. Nitya Agarwak', 'Dentist', '12 Years', 'd4,PNG'),
(5, 'Dr. Shristi Mehta', 'Cardiologist', '8 Years', 'd5.PNG'),
(6, 'Dr.Shreyas Chauhan', 'Orthopaedic Surgeon', ' 9 Years', 'd6.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `exp`
--

CREATE TABLE `exp` (
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `drname` varchar(40) NOT NULL,
  `disease` varchar(50) NOT NULL,
  `exper` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `exp`
--

INSERT INTO `exp` (`name`, `email`, `drname`, `disease`, `exper`) VALUES
('vidit naik', 'vidit123@gmail.com', 'naana', 'nana', 'nknkn'),
('Divyansh', 'div@gmail.com', 'Dr. Jain', 'Asthma', 'treatment was good'),
('xyz', 'div123@gmail.com', 'abc', '123', 'good'),
('nandan', 'baldhanandan@gmail.com', 'dr. patel', 'abc', 'nice'),
('deep', 'deep@gmail.com', 'dr.jain', 'Asthma', 'good'),
('deep123', 'deep123@gmail.com', 'drjain', 'cancer', 'good'),
('Nandan', 'nandanvinodbhai.b2019@vitstudent.ac.in', 'dr.jain', 'Asthma', 'good'),
('divyansh', 'div@gmail.com', 'dr.jain', 'feaver', 'i was nice treatment.');

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `dname` varchar(40) NOT NULL,
  `rating` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`dname`, `rating`, `count`) VALUES
('Dr. Anand Kumar', 0, 0),
('Dr. Krishna Patil', 0, 0),
('Dr. Jatin Mehra', 0, 0),
('Dr. Nitya Agarwal', 0, 0),
('Dr. Shrishti Mehta', 0, 0),
('Dr. Shreyash Chauhan', 0, 0),
('Dr. Raj Kulkarni', 0, 0),
('Dr. Krishna Patil', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('m','f','o') NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `gender`, `email`, `password`, `number`) VALUES
(1, 'Nandan', 'Baldha', 'm', 'baldhanandan@gmail.com', 'Nandan2001', 8401733801),
(2, 'vidit', 'naik', 'm', 'vidit@gmail.com', 'vidit13', 840175501),
(3, 'riya', 'chakroverty', 'f', 'riya@gmail.com', 'riya123', 45687235),
(4, 'rohan', 'mehara', 'm', 'r@gmail.com', 'r123', 8965412358),
(5, 'rahil', 'bandi', 'm', 'rahil@gmail.com', 'rahil123', 8963215478),
(6, 'mahi', 'pandya', 'f', 'mahi@gmail.com', 'mahi123', 8965423157),
(7, 'raj', 'kaneria', 'f', 'raj@gmail.com', 'raj123', 8745216398),
(8, 'rahul', 'patel', 'm', 'rahul123@gmail.com', 'rahulabc', 8963254175);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
