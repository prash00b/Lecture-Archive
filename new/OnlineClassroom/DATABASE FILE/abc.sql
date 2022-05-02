-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 05:58 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` varchar(35) NOT NULL,
  `Apass` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `Apass`) VALUES
('admin', 'admin'),
('williams', 'williams');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(20) NOT NULL,
  `value` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examans`
--

CREATE TABLE `examans` (
  `EAnsID` int(50) NOT NULL,
  `ExamID` int(10) NOT NULL,
  `Senrl` varchar(50) NOT NULL,
  `Sname` varchar(50) NOT NULL,
  `Ans1` mediumtext NOT NULL,
  `Ans2` mediumtext NOT NULL,
  `Ans3` mediumtext NOT NULL,
  `Ans4` mediumtext NOT NULL,
  `Ans5` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examans`
--

INSERT INTO `examans` (`EAnsID`, `ExamID`, `Senrl`, `Sname`, `Ans1`, `Ans2`, `Ans3`, `Ans4`, `Ans5`) VALUES
(6, 12, '146891650', 'Robert Huffman', 'php script.php', 'Using special tags <?= and ?>', 'PHP 5 presents many additional OOP features', 'Final class means that this class cannot be extended and a final method cannot be overridden.', 'GD library'),
(7, 13, '146891654', 'John Greenwood', 'using &copy; or &#169;', 'No, we can use hyperlinks on text and images both.', 'A style sheet is used to build a consistent, transportable, and well-designed style template. It describes the look and formatting of a document written in markup language.', 'Yes, by using <font color =\"color\"> </font> for the specific texts.', 'HTML elements with no content are called empty elements.'),
(8, 14, '146891658', 'Francisca Ashley', 'Demo Answer 1', 'Demo Answer 2', 'Demo Answer 3', 'Demo Answer 4', 'Demo Answer 5'),
(9, 12, '146891650', 'Robert Huffman', 'php script.php', 'using a special tag <?= and ?>', 'ver5 has many additional OOP features', 'meaning class cannot be extended and a final method cannot be overridden', 'GD library');

-- --------------------------------------------------------

--
-- Table structure for table `examdetails`
--

CREATE TABLE `examdetails` (
  `ExamID` int(50) NOT NULL,
  `ExamName` varchar(50) NOT NULL,
  `Q1` varchar(10000) NOT NULL,
  `Q2` varchar(10000) NOT NULL,
  `Q3` varchar(10000) NOT NULL,
  `Q4` varchar(10000) NOT NULL,
  `Q5` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examdetails`
--

INSERT INTO `examdetails` (`ExamID`, `ExamName`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`) VALUES
(13, 'HTML', 'How to insert a copyright symbol on a browser page?', 'Does a hyperlink only apply to text?', 'What is a style sheet?', 'Can you create a multi-colored text on a web page?', 'What are empty elements?'),
(14, 'jQuery', 'Which built-in method returns the length of the string?', 'Which jQuery selector selects element with the given element id some-id?', 'Which jQuery method remove all or the specified class(es) from the set of matched elements?', 'Which jQuery method removes elements matching the specified selector from the set of matched elements?', 'Which jQuery method gets a set of elements containing all of the unique immediate children of each of the matched set of elements?'),
(15, 'Demo Assessment', 'Q1 Demo', 'Q2 Demo', 'Q3 Demo', 'Q4 Demo', 'Q5 Demo');

-- --------------------------------------------------------

--
-- Table structure for table `facutlytable`
--

CREATE TABLE `facutlytable` (
  `FID` int(10) NOT NULL,
  `FName` varchar(50) NOT NULL,
  `FaName` varchar(30) NOT NULL,
  `Addrs` text NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `JDate` date NOT NULL,
  `subjectid` int(11) NOT NULL,
  `Pass` varchar(10) NOT NULL,
  `PhNo` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facutlytable`
--

INSERT INTO `facutlytable` (`FID`, `FName`, `FaName`, `Addrs`, `Gender`, `JDate`, `subjectid`, `Pass`, `PhNo`) VALUES
(109, 'Yagya Shrestha', 'Yaman Shrestha', 'Kathmandu', 'Male', '1967-06-02', 0, '101010', 984382561),
(110, 'Yagya Shrestha', 'Yaman Shrestha', 'Kathmandu', 'Male', '1967-06-02', 0, 'md5(101010', 984382561),
(111, 'Bigyan Subedi', 'Hari Subedi', 'Kalanki', 'Male', '2022-02-23', 2, '101010', 9821312421);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `GuEid` varchar(35) NOT NULL,
  `Gname` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`GuEid`, `Gname`) VALUES
('guestd@gmail.com', 'Demo Name Guest'),
('avilakr@gmail.com', 'Karla Avila'),
('patrickla@gmail.com', 'Patrick M Larios\n'),
('shannonrgmu@gmail.com', 'Shannon R Hang\n');

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `Query` text NOT NULL,
  `Ans` text NOT NULL,
  `Eid` varchar(35) NOT NULL,
  `Qid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `RsID` bigint(20) NOT NULL,
  `Eno` varchar(20) NOT NULL,
  `Ex_ID` int(10) NOT NULL,
  `Marks` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`RsID`, `Eno`, `Ex_ID`, `Marks`) VALUES
(2384, '146891650', 12, 'Pass'),
(2385, '146891654', 13, 'Pass'),
(2386, '146891650', 12, 'Pass'),
(2387, '146891658', 14, 'Fail');

-- --------------------------------------------------------

--
-- Table structure for table `studenttable`
--

CREATE TABLE `studenttable` (
  `Eno` bigint(20) NOT NULL,
  `FName` varchar(30) NOT NULL,
  `LName` varchar(30) NOT NULL,
  `FaName` varchar(30) NOT NULL,
  `Addrs` text NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Course` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `PhNo` bigint(10) NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `Eid` varchar(50) NOT NULL,
  `subjectid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studenttable`
--

INSERT INTO `studenttable` (`Eno`, `FName`, `LName`, `FaName`, `Addrs`, `Gender`, `Course`, `Semester`, `DOB`, `PhNo`, `Pass`, `Eid`, `subjectid`) VALUES
(146891671, 'Prem', 'Karki', 'Pujan Karki', 'Kathmandu', 'Male', 'Computer', 'Second', '2022-05-20', 9843101525, 'password', 'prem12@gmail.com', 0),
(146891677, 'Aagya', 'Baral', 'Aron Baral', 'Lalitpur', 'Female', 'Computer', 'First', '2006-05-28', 9821340422, 'password', 'aagya123@gmail.com', 0),
(146891678, 'Shreya', 'Sharma', 'Pujan Sharma', 'Banesor', 'Male', 'Civil', 'Fourth', '2022-02-24', 980821547, 'password', 'shreya123@gmail.com', 1),
(146891679, 'Shreya', 'Sharma', 'Pujan Sharma', 'Banesor', 'Male', 'Civil', 'Fourth', '2022-02-24', 980821547, 'password', 'shreya123@gmail.com', 1),
(146891680, 'Shreya', 'Sharma', 'Pujan Sharma', 'Banesor', 'Male', 'Civil', 'Fourth', '2022-02-24', 980821547, 'password', 'shreya123@gmail.com', 1),
(146891681, 'Niruta', 'Baniya', 'Prem Baniya', 'Satdobato', 'Female', 'Computer', 'Fifth', '2021-12-22', 984382561, 'passord', 'niruta123@gmail.com', 1),
(146891682, 'Bimala', 'Neupane', 'Bimal Neupane', 'Kotesor', 'Female', '', '', '1976-06-17', 980214567, 'password', 'bimala123@gmail.com', 2),
(146891683, 'Priya', 'Rai', 'Prem Rai', 'Balaju', 'Female', '', '', '2000-03-01', 980526471, 'password', 'priya123@gmail.com', 2),
(146891684, 'Luna', 'Sharma', 'Kiran Sharma', 'Pulchowk', 'Female', '', '', '1987-03-24', 9821340422, 'password', 'luna123@gmail.com', 2),
(146891685, 'Mohan', 'Sharma', 'Manoj Sharma', 'Hetauda', 'Male', '', '', '1987-03-01', 980214567, 'password', 'mohan123@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `subjectid` int(20) NOT NULL,
  `subjectname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectid`, `subjectname`) VALUES
(1, 'Database Management System'),
(2, 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_assignment`
--

CREATE TABLE `uploaded_assignment` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_assignment`
--

INSERT INTO `uploaded_assignment` (`id`, `name`) VALUES
(0, 'LAN,MAN,WAN.pdf'),
(0, 'algod.docx');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_files`
--

CREATE TABLE `uploaded_files` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `new_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uploaded_files`
--

INSERT INTO `uploaded_files` (`id`, `name`, `new_name`) VALUES
(10, 'PERT-CPM PPT.pdf', ''),
(11, 'assessment for Computer.pdf', ''),
(12, 'Final-report-on-lecture-archive.docx', ''),
(13, 'dodge_the_carfinal.docx', ''),
(14, '274162135_705929367237594_6354921660460699688_n.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `V_id` int(10) NOT NULL,
  `V_Title` varchar(50) NOT NULL,
  `V_Url` longtext NOT NULL,
  `V_Remarks` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This table is used to store videos info.';

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`V_id`, `V_Title`, `V_Url`, `V_Remarks`) VALUES
(10, 'Daily Class', '', 'This is meeting for tomorrow class at 8 morning.'),
(11, 'daily class', '', 'Join class'),
(12, '', '', ''),
(13, '', '', ''),
(14, 'class', '', 'now'),
(15, 'class', '', 'yes now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examans`
--
ALTER TABLE `examans`
  ADD PRIMARY KEY (`EAnsID`);

--
-- Indexes for table `examdetails`
--
ALTER TABLE `examdetails`
  ADD PRIMARY KEY (`ExamID`),
  ADD UNIQUE KEY `ExamName` (`ExamName`);

--
-- Indexes for table `facutlytable`
--
ALTER TABLE `facutlytable`
  ADD PRIMARY KEY (`FID`);

--
-- Indexes for table `guest`
--
ALTER TABLE `guest`
  ADD PRIMARY KEY (`Gname`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`Qid`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`RsID`);

--
-- Indexes for table `studenttable`
--
ALTER TABLE `studenttable`
  ADD PRIMARY KEY (`Eno`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`V_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examans`
--
ALTER TABLE `examans`
  MODIFY `EAnsID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `examdetails`
--
ALTER TABLE `examdetails`
  MODIFY `ExamID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `facutlytable`
--
ALTER TABLE `facutlytable`
  MODIFY `FID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `Qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `RsID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2388;

--
-- AUTO_INCREMENT for table `studenttable`
--
ALTER TABLE `studenttable`
  MODIFY `Eno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146891686;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `subjectid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploaded_files`
--
ALTER TABLE `uploaded_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `V_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
