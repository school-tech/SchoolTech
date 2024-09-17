-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2024 at 03:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooltech`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_year`
--

CREATE TABLE `academic_year` (
  `id` int(11) NOT NULL,
  `batch` varchar(125) NOT NULL,
  `start_date` varchar(125) NOT NULL,
  `end_date` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academic_year`
--

INSERT INTO `academic_year` (`id`, `batch`, `start_date`, `end_date`, `date`, `month`, `year`) VALUES
(1, '2023-2024', '07 September, 2023', '29 July, 2024', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `teacher_id` varchar(125) NOT NULL,
  `teachername` varchar(125) NOT NULL,
  `student_id` varchar(125) NOT NULL,
  `student_name` varchar(125) NOT NULL,
  `class_id` varchar(125) NOT NULL,
  `class_name` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL,
  `time_in` varchar(125) NOT NULL,
  `time_out` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `batch` varchar(125) NOT NULL,
  `classname` varchar(125) NOT NULL,
  `department` varchar(125) NOT NULL,
  `stage` varchar(125) NOT NULL,
  `level` varchar(125) NOT NULL,
  `classmaster` varchar(125) NOT NULL,
  `location` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `school_id`, `schoolname`, `batch`, `classname`, `department`, `stage`, `level`, `classmaster`, `location`, `date`, `month`, `year`) VALUES
(1, '6041352', 'Holy Family Junior Secondary School', '2023-2024	', 'JSS 1 Blue', '', '', 'JSS1', '', '', '', '', ''),
(2, '6041352', 'Holy Family Junior Secondary School', '2023-2024	', 'JSS 1 Yellow', 'Science', '', 'JSS 1', '', 'Room 1', 'February 29, 2024', 'February', '2024'),
(3, '6038726', 'Annie Walsh Memorial Senior Secondary School', '2023-2024	', 'Science 1', 'Science', '', 'SSS1', 'Mr Saffa', 'Room 1', 'April 17, 2024', 'April', '2024'),
(4, '6038726', 'Annie Walsh Memorial Seniorr Secondary School', '2023-2024	', 'Science 2', 'Science', '', 'SSS2', 'Mr Mansaray', 'Room 2', 'April 17, 2024', 'April', '2024'),
(5, '6038726', 'Annie Walsh Memorial Senior Secondary School', '', 'Science 2', '', '', 'SSS 2', 'Mr Mansaray', 'Room 2', 'April 18, 2024', 'April', '2024'),
(6, '6038726', 'Annie Walsh Memorial Senior Secondary School', '', 'Science 4', '', '', 'SSS 2', 'Mr John Kamara', 'Room 1', 'July 20, 2024', 'July', '2024'),
(7, '6038726', 'Annie Walsh Memorial Senior Secondary School', '', 'Commercial 2', '', '', 'SSS 1', 'John Kamara', 'Room 2', 'July 20, 2024', 'July', '2024'),
(8, '6038726', 'Annie Walsh Memorial Senior Secondary School', '', 'Commercial 1', '', '', 'SSS 1', 'John Kamara', 'Room 3', 'July 20, 2024', 'July', '2024'),
(9, '6038726', 'Annie Walsh Memorial Senior Secondary School', '', 'SSS1 Arts 1', '', '', 'SSS 1', 'John Kamara', 'Room 1', 'July 21, 2024', 'July', '2024'),
(10, '789092', 'Methodist Boys High School', '', '1 Alpha', '', '', 'JSS 1', '', 'Room 1', 'July 21, 2024', 'July', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

CREATE TABLE `curriculum` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `teacher_id` varchar(125) NOT NULL,
  `teachername` varchar(125) NOT NULL,
  `day` varchar(125) NOT NULL,
  `due_date` varchar(125) NOT NULL,
  `topic` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`id`, `school_id`, `schoolname`, `teacher_id`, `teachername`, `day`, `due_date`, `topic`, `date`, `month`, `year`) VALUES
(1, '6038726', 'Annie Walsh Memorial Senior Secondary School', '9', ' Dauda', 'Thursday', '2024-07-15', 'What is Agricultural Science', 'September 15, 2024', 'September', '2024'),
(2, '6038726', 'Annie Walsh Memorial Senior Secondary School', '9', ' Dauda', 'Thursday', '2024-09-15', 'What is Social Studies', 'September 15, 2024', 'September', '2024'),
(3, '6038726', 'Annie Walsh Memorial Senior Secondary School', '9', ' Dauda', 'Thursday', '2024-09-15', 'What is Social Studies', 'September 15, 2024', 'September', '2024'),
(4, '6038726', 'Annie Walsh Memorial Senior Secondary School', '9', ' Dauda', 'Thursday', '2024-09-15', 'What is Social Studies', 'September 15, 2024', 'September', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `mbsse`
--

CREATE TABLE `mbsse` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `admin_images` varchar(125) NOT NULL,
  `emailaddress` varchar(125) NOT NULL,
  `phonenumber` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mbsse`
--

INSERT INTO `mbsse` (`id`, `name`, `admin_images`, `emailaddress`, `phonenumber`, `password`, `status`, `date`, `month`, `year`) VALUES
(1, 'Alimamy N.D Macfoy', '', 'nurudeen@gmail.com', '+23278911382', 'mac', 'Active', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `schoolname` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `dob` date NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `phonenumber` varchar(20) NOT NULL,
  `homeaddress` text NOT NULL,
  `relationship` enum('Father','Mother','Guardian') NOT NULL,
  `nin` varchar(50) DEFAULT NULL,
  `date` date NOT NULL,
  `month` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `school_id`, `schoolname`, `firstname`, `lastname`, `gender`, `dob`, `occupation`, `emailaddress`, `phonenumber`, `homeaddress`, `relationship`, `nin`, `date`, `month`, `year`, `student_id`) VALUES
(1, 6041352, 'Holy Family Junior Secondary School', 'John', 'Turay', 'Male', '2002-11-11', 'Nurse', 'downjayload1432@gmail.com', '074380058', 'Allen Town', 'Father', '3204589944', '0000-00-00', 'September', 2024, 2),
(2, 6041352, 'Holy Family Junior Secondary School', 'James Bella', 'Turay', 'Male', '2001-11-28', 'Nurse', 'downjayload1432@gmail.com', '077889983', '16 blackhall road ashobi corner kissy freetown', 'Father', '3204589944', '0000-00-00', 'September', 2024, 2);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `batch` varchar(125) NOT NULL DEFAULT '2023-2024',
  `school_id` varchar(11) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `person_reported` varchar(125) NOT NULL,
  `pr_gender` varchar(100) NOT NULL,
  `pr_rank` varchar(125) NOT NULL,
  `pr_ano` varchar(125) NOT NULL,
  `pr_class` varchar(125) NOT NULL,
  `sender` varchar(125) NOT NULL,
  `sender_rank` varchar(125) NOT NULL,
  `receiver` varchar(125) NOT NULL,
  `receiver_rank` varchar(125) NOT NULL,
  `title` varchar(125) NOT NULL,
  `content` varchar(255) NOT NULL,
  `reply` varchar(125) NOT NULL,
  `repliedby` varchar(125) NOT NULL,
  `reply_date` varchar(125) NOT NULL,
  `show_identity` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL,
  `date` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `batch`, `school_id`, `schoolname`, `person_reported`, `pr_gender`, `pr_rank`, `pr_ano`, `pr_class`, `sender`, `sender_rank`, `receiver`, `receiver_rank`, `title`, `content`, `reply`, `repliedby`, `reply_date`, `show_identity`, `status`, `date`, `month`, `year`) VALUES
(1, '2022-2023', '6041352', 'Holy Family Senior Secondary School', 'Emmanuel Sahr Dauda', 'Male', 'Student', '849302', 'SSS 1 Science', 'Augustine M Kamara', 'Teacher', 'Amie Dauda', 'Parent', 'Suspension From School', 'Dear parent, your child has been suspended from school for two weeks due to misconduct. ', 'Your child has been suspended for misconduct. Make sure to come with him to my office after two weeks. Failure to do so will ', 'Principal', 'April 11, 2024', '', 'Replied', '', '', ''),
(2, '2023-2024', '', 'Holy Family Senior Secondary School', 'Mamoud Saffa', 'Male', 'Teacher', 'MD-378289', 'SSS 1 Science', 'Mariama Jalloh', 'Parent', 'Augustine M Kamara', 'Principal', 'No lesson notes', 'It has been two weeks now since this teacher taught my child', 'Pay your childs fees or he will not take this examination', 'Principal', 'April 11, 2024', '', 'Replied', '', '', ''),
(3, '2023-2024', '6041352', 'Holy Family Senior Secondary School', 'John Kamara', 'Male', 'Student', '123456', 'JSS 2 Science', 'Augustine M Kamara', 'Principal', 'receiver', 'Parent', 'Misconduct', 'Your child has been suspended for misconduct. Make sure to come with him to my office after two weeks. Failure to do so will lead to him being driven from school.', '', 'Principal', 'April 11, 2024', '', 'Replied', 'April 11, 2024', 'April', '2024'),
(4, '2023-2024', '6041352', 'Holy Family Senior Secondary School', 'Mohamed Bangura', 'Male', 'Student', '123456', 'JSS 2 Blue', 'Augustine M Kamara', 'Parent', 'receiver', 'Teacher', 'Fees Payment', 'Your child has been suspended for misconduct. Make sure to come with him to my office after two weeks. Failure to do so will lead to him being driven from school.', '', 'Principal', 'April 11, 2024', '', 'Pending', 'April 11, 2024', 'April', '2024'),
(5, '2023-2024', '6041352', 'Holy Family Senior Secondary School', 'Kadie Bonga', 'Female', 'Student', '123456', 'JSS 2 Blue', 'Mamoud Exodos Saffa', 'Teacher', 'receiver', 'Parent', 'Attendance', 'Your child has not been attending classes for two weeks now', '', '', '', '', 'Pending', 'April 11, 2024', 'April', '2024'),
(6, '2023-2024', '6041352', 'Holy Family Senior Secondary School', 'Kadie Bonga', 'Female', 'Student', '123456', 'JSS 2 Science', 'Augustine M Kamara', 'Principal', 'receiver', 'Parent', '', 'Your child has not been attending classes for two weeks now', '', '', '', '', 'Pending', 'April 12, 2024', 'April', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `school_name` varchar(125) NOT NULL,
  `district` varchar(125) NOT NULL,
  `schooladdress` varchar(125) NOT NULL,
  `stage` varchar(125) NOT NULL,
  `type` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`id`, `school_id`, `school_name`, `district`, `schooladdress`, `stage`, `type`, `status`, `date`, `month`, `year`) VALUES
(1, '6041352', 'Holy Family ', 'Bo', 'Mayinkeneh', 'Junior Secondary', 'Government Assisted', 'Active', 'April 15, 2024', 'April', '2024'),
(5, '6041353', 'Holy Family ', 'Bo', 'Mayinkeneh', 'Primary', 'Government', 'Active', 'April 15, 2024', 'April', '2024'),
(7, '7289292', 'Holy Family Junior Secondary School', 'Freetown', 'Mayinkeneh', 'Junior Secondary', 'Government Assisted', 'Active', 'April 15, 2024', 'April', '2024'),
(8, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Freetown', 'Eastern Police', 'Senior Secondary', 'Private', 'Active', 'April 17, 2024', 'April', '2024'),
(9, '6041352', 'Holy Family ', 'Freetown', 'Mayinkeneh', 'Primary', 'Government Assisted', 'Active', 'April 21, 2024', 'April', '2024'),
(10, '789098', 'Umukoro Junior Secondary School', 'Freetown', 'Allen Town', 'Junior Secondary', 'Government', 'Active', 'July 17, 2024', 'July', '2024'),
(12, '6041332', 'Umukoro Junior Secondary School', 'Kenema', 'Allen Town', 'Junior Secondary', 'Government Assisted', 'Active', 'July 19, 2024', 'July', '2024'),
(14, '789091', 'Methodist Boys High School', 'Freetown', 'Kissi Mess Mess', 'Senior Secondary', 'Government', 'Active', 'July 20, 2024', 'July', '2024'),
(16, '789095', 'Methodist Boys High School', 'Freetown', 'Kissi Mess Mess', 'Junior Secondary', 'Government', 'Active', 'July 20, 2024', 'July', '2024'),
(17, '789092', 'Methodist Boys High School', 'Freetown', 'Kissi Mess Mess', 'Junior Secondary', 'Government', 'Active', 'July 21, 2024', 'July', '2024'),
(18, '789096', 'Methodist Boys High School', 'Freetown', 'Kissi Mess Mess', 'Junior Secondary', 'Government', 'Active', 'July 21, 2024', 'July', '2024'),
(19, '6041334', 'Methodist Girls High School', 'Makeni', '16 blackhall road ashobi corner kissy freetown', 'Primary', 'Government Assisted', 'Active', 'September 12, 2024', 'September', '2024'),
(20, '789098', 'Methodist Girls High School', 'Freetown', '16 blackhall road ashobi corner kissy freetown', 'Junior Secondary', 'Government Assisted', 'Active', 'September 12, 2024', 'September', '2024'),
(21, '789088', 'Methodist Girls High School', 'Freetown', '16 blackhall road ashobi corner kissy freetown', 'Senior Secondary', 'Government', 'Active', 'September 13, 2024', 'September', '2024'),
(22, '789088', 'Methodist Girls High School', 'Freetown', '16 blackhall road ashobi corner kissy freetown', 'Senior Secondary', 'Government', 'Active', 'September 13, 2024', 'September', '2024'),
(23, '789099', 'Community School', 'Freetown', '16 blackhall road ashobi corner kissy freetown', 'Junior Secondary', 'Government', 'Active', 'September 13, 2024', 'September', '2024'),
(24, '789099', 'Community School', 'Freetown', '16 blackhall road ashobi corner kissy freetown', 'Junior Secondary', 'Government', 'Active', 'September 13, 2024', 'September', '2024'),
(25, '789099', 'Community School', 'Freetown', '16 blackhall road ashobi corner kissy freetown', 'Junior Secondary', 'Government', 'Active', 'September 13, 2024', 'September', '2024'),
(26, '789099', 'Community School', 'Freetown', '16 blackhall road ashobi corner kissy freetown', 'Junior Secondary', 'Government', 'Active', 'September 13, 2024', 'September', '2024'),
(27, '1224124', 'St Edwards', 'Freetown', 'Forth Street ', 'Primary', 'Government Assisted', 'Active', 'September 13, 2024', 'September', '2024'),
(28, '1224124', 'St Edwards', 'Freetown', 'Forth Street ', 'Primary', 'Government Assisted', 'Active', 'September 13, 2024', 'September', '2024'),
(29, '1224124', 'St Edwards', 'Freetown', 'Forth Street ', 'Primary', 'Government Assisted', 'Active', 'September 13, 2024', 'September', '2024'),
(30, '1224124', 'St Edwards', 'Freetown', 'Forth Street ', 'Primary', 'Government Assisted', 'Active', 'September 13, 2024', 'September', '2024'),
(31, '1224124', 'St Edwards', 'Freetown', 'Forth Street ', 'Primary', 'Government Assisted', 'Active', 'September 13, 2024', 'September', '2024'),
(32, '789094', 'Community School', 'Bo', '16 blackhall road ashobi corner kissy freetown', 'Primary', 'Government Assisted', 'Active', 'September 13, 2024', 'September', '2024'),
(33, '7890933', 'Methodist Boys High School', 'Kenema', '16 blackhall road ashobi corner kissy freetown', 'Junior Secondary', 'Government', 'Active', 'September 13, 2024', 'September', '2024'),
(34, '123456', 'Christex foundation', 'Select District', 'Fourah Bay College', 'Select Level', 'Select Category', 'Active', 'September 17, 2024', 'September', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `schooladmin`
--

CREATE TABLE `schooladmin` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `adminname` varchar(125) NOT NULL,
  `admin_images` varchar(125) NOT NULL,
  `gender` varchar(125) NOT NULL,
  `dob` varchar(125) NOT NULL,
  `nationality` varchar(125) NOT NULL,
  `pincode` varchar(125) NOT NULL,
  `emailaddress` varchar(125) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `homeaddress` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schooladmin`
--

INSERT INTO `schooladmin` (`id`, `school_id`, `schoolname`, `adminname`, `admin_images`, `gender`, `dob`, `nationality`, `pincode`, `emailaddress`, `phonenumber`, `homeaddress`, `password`, `status`, `date`, `month`, `year`) VALUES
(1, 6041352, 'Holy Family Junior Secondary School', 'Augustine M Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', 'December 25, 1972', 'Sierra Leonean', '2145676574', 'augustinemkamara@gmail.com', '+23273468738', 'Allentown', 'aug', 'Active', '24-02-2023', 'February', '2023'),
(8, 7289292, 'Holy Family Junior Secondary School', 'Augustine M Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1967-12-21', 'Sierra Leonean', '21456765742', 'emmanuelsahrdauda17@gmail.com', '+23299487375', 'Allen Town', '1550847804', 'Active', 'April 15, 2024', 'April', '2024'),
(9, 6038726, 'Annie Walsh Memorial Senior Secondary School', 'Afolabe Dickson', 'assets/img/school_admin/66e3dc91795f0.png', 'Female', '1978-02-12', 'Sierra Leonean', '2556738989', 'afolabe@gmail.com', '+23277890987', 'Allen Town', '1847220110', 'Active', 'April 17, 2024', 'April', '2024'),
(10, 6041352, 'Holy Family ', 'Augustine M Kamara', '', 'Male', '2000-12-12', 'Sierra Leonean', '2145676574', 'emmanuelsahrdauda17@gmail.com', '+23299487375', 'Allen Town', '285668753', 'Active', 'April 21, 2024', 'April', '2024'),
(11, 789098, 'Umukoro Junior Secondary School', 'Mohamed Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1997-11-10', 'Sierra Leonean', '3945843218', 'mohamedkamara@gmail.com', '+23274380058', 'Allen Town', '1523097355', 'Active', 'July 17, 2024', 'July', '2024'),
(12, 789099, 'Umukoro Senior Secondary School', 'Umu Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Female', '2000-11-11', 'Please Select Nationality', '39458778643', 'umukamara@gmail.com', '+23274380058', 'Allen Town', '1759224702', 'Active', 'July 19, 2024', 'July', '2024'),
(13, 6041332, 'Umukoro Junior Secondary School', 'John Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '2024-07-19', 'Sierra Leonean', '3945843218', 'johnkamara@gmail.com', '+23274380058', 'Allen Town', '28650373', 'Active', 'July 19, 2024', 'July', '2024'),
(14, 789093, 'Methodist Boys High School', 'John Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1986-11-11', 'Sierra Leonean', '3945843214', 'johnkamara01@gmail.com', '+23274380058', 'Allen Town', '644339059', 'Active', 'July 20, 2024', 'July', '2024'),
(17, 789095, 'Methodist Boys High School', 'Umu Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Female', '1987-11-10', 'Sierra Leonean', '3945843215', 'umukamara01@gmail.com', '+23274380058', 'Allen Town', '1651202565', 'Active', 'July 20, 2024', 'July', '2024'),
(18, 789092, 'Methodist Boys High School', 'John Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1987-11-11', 'Sierra Leonean', '3945843215', 'johnkamara01@gmail.com', '+23274380058', 'Allen Town', '1400402449', 'Active', 'July 21, 2024', 'July', '2024'),
(19, 789096, 'Methodist Boys High School', 'John Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1987-11-11', 'Sierra Leonean', '3945843216', 'johnkamara021@gmail.com', '+23274380058', 'Allen Town', '1058012270', 'Active', 'July 21, 2024', 'July', '2024'),
(20, 6041334, 'Methodist Girls High School', 'John Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1111-11-11', 'Sierra Leonean', '3945843210', 'emmanuelsahrdauda17@gmail.com', '+23274380058', '16 blackhall road ashobi corner kissy freetown', '905230740', 'Active', 'September 12, 2024', 'September', '2024'),
(21, 789098, 'Methodist Girls High School', 'Mohamed Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1111-11-11', 'Sierra Leonean', '39458432129', 'emmanuelsahrdauda17@gmail.com', '+23274380058', '16 blackhall road ashobi corner kissy freetown', '1106232842', 'Active', 'September 12, 2024', 'September', '2024'),
(22, 789088, 'Methodist Girls High School', 'Mohamed Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1111-11-11', 'Sierra Leonean', '394584321944', 'emmanuelsahrdauda17@gmail.com', '+23274380058', '16 blackhall road ashobi corner kissy freetown', '1991549189', 'Active', 'September 13, 2024', 'September', '2024'),
(23, 789088, 'Methodist Girls High School', 'Mohamed Kamara', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '1111-11-11', 'Sierra Leonean', '394584321944', 'emmanuelsahrdauda17@gmail.com', '+23274380058', '16 blackhall road ashobi corner kissy freetown', '1033025326', 'Active', 'September 13, 2024', 'September', '2024'),
(24, 1224124, 'St Edwards', 'Mr. Ibrahim Sorie Kamara ', 'assets/img/school_admin/66e3dc91795f0.png', 'Male', '4455-03-12', 'Sierra Leonean', '355255434', 'mohamedtajukay@gmail.com', '+23231044880', '16 Mellon Street', '1634147570', 'Active', 'September 13, 2024', 'September', '2024'),
(25, 789094, 'Community School', 'Ibrahim Sorie Kamara ', '', 'Male', '2000-11-11', 'Sierra Leonean', '39458432191', 'mohamedtajukay@gmail.com', '+23231044880', '16 blackhall road ashobi corner kissy freetown', '653993585', 'Active', 'September 13, 2024', 'September', '2024'),
(26, 7890933, 'Methodist Boys High School', 'Mohamed Kamara', '', 'Male', '4333-12-31', 'Sierra Leonean', '39458432194', 'emmanuelsahrdauda17@gmail.com', '+23274380058', '16 blackhall road ashobi corner kissy freetown', '1143222526', 'Active', 'September 13, 2024', 'September', '2024'),
(27, 123456, 'Christex foundation', 'Collins Mitch', '', 'Male', '1976-10-17', 'Sierra Leonean', '39458432192', 'christexfoundation@gmail.com', '+232380058', 'Fourah Bay College', '207006416', 'Active', 'September 17, 2024', 'September', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `school_period`
--

CREATE TABLE `school_period` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `period_name` varchar(125) NOT NULL,
  `start_time` varchar(125) NOT NULL,
  `end_time` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `school_period`
--

INSERT INTO `school_period` (`id`, `school_id`, `schoolname`, `period_name`, `start_time`, `end_time`, `date`, `month`, `year`) VALUES
(1, '6041352', 'Holy Family', 'Period 1', '08:18', '08:18', '2024-09-14', '09', '2024'),
(2, '6041352', 'Holy Family', 'Period 2', '08:22', '08:22', '2024-09-14', '09', '2024'),
(3, '6041352', 'Holy Family', 'Period 3', '08:22', '08:22', '2024-09-14', '09', '2024'),
(4, '6041352', 'Holy Family', 'Period 4', '10:50', '11:50', '2024-09-14', '09', '2024'),
(5, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Period 1', '05:14', '05:14', '2024-09-15', '09', '2024'),
(6, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Period 2', '06:22', '07:22', '2024-09-15', '09', '2024'),
(7, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Period 2', '06:22', '07:22', '2024-09-15', '09', '2024'),
(8, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Period 4', '08:23', '09:23', '2024-09-15', '09', '2024'),
(9, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Period 5', '05:36', '08:34', '2024-09-15', '09', '2024'),
(10, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Period 5', '05:36', '08:34', '2024-09-15', '09', '2024'),
(11, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Period 5', '05:36', '08:34', '2024-09-15', '09', '2024'),
(12, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Period 6', '05:36', '09:36', '2024-09-15', '09', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `school_id` varchar(15) NOT NULL,
  `adm_no` varchar(15) NOT NULL,
  `id_no` varchar(15) NOT NULL,
  `schoolname` varchar(100) NOT NULL,
  `photo` blob NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `bgroup` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `faculty` varchar(125) NOT NULL,
  `level` varchar(125) NOT NULL,
  `homeaddress` varchar(100) NOT NULL,
  `phonenumber` varchar(100) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `nin` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `disability` varchar(100) NOT NULL,
  `disability_type` varchar(100) NOT NULL,
  `sick` varchar(100) NOT NULL,
  `sick_type` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `month` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `school_id`, `adm_no`, `id_no`, `schoolname`, `photo`, `firstname`, `lastname`, `dob`, `gender`, `bgroup`, `class`, `faculty`, `level`, `homeaddress`, `phonenumber`, `emailaddress`, `nin`, `religion`, `nationality`, `disability`, `disability_type`, `sick`, `sick_type`, `date`, `month`, `year`) VALUES
(1, '6041352', '8656543143', '', '6041352', '', 'Emmanuel Sahr', 'Dauda', '2001-11-07', 'Male', 'O+', 'SSS3 Science', '', '', 'Allen Town', '074380058', 'emmanuelsahrdauda17@gmail.com', '62780327429842', 'Christianity', 'Sierra Leonean', 'No', '', 'No', '', 'February 29, 2024', 'February', '2024'),
(2, '6041352', '8656543144', '', '6041352', '', 'James Bella ', 'Turay', '2001-11-28', 'Male', 'B+', 'SSS3 Science', '', '', 'Allen Town', '074380058', 'bellajayturay@gmail.com', '2145769832844', 'Christianity', 'Sierra Leonean', 'No', '', 'No', '', 'February 29, 2024', 'February', '2024'),
(4, '6038726', '293029332', '', 'Annie Walsh Memorial Senior Secondary School', '', 'John', 'Muthough', '2000-02-11', 'Male', 'A+', 'Science 1', '', '', 'Allen Town', '+23277890987', '', '', 'Christianity', 'Sierra Leonean', 'Yes', '', 'No', '', 'April 17, 2024', 'April', '2024'),
(5, '6041352', '98755457680', '', 'Holy Family Junior Secondary School', '', 'John', 'Kamara', '2024-07-02', 'Male', 'O+', 'SSS3 Scence', '', '', 'Allen Town', '+23274380058', 'nurudeen@gmail.com', '', 'Christianity', 'Sierra Leonean', 'No', '', 'No', '', 'July 16, 2024', 'July', '2024'),
(6, '6041352', '98755457685', '', 'Holy Family Junior Secondary School', '', 'Evian', 'Kamara', '2024-07-19', 'Female', 'O+', 'JSS 1 Blue', '', '', 'Allen Town', '+23274380058', '', '', 'Christianity', 'Sierra Leonean', 'Yes', '', 'hide', '', 'July 19, 2024', 'July', '2024'),
(7, '6041352', '98755457680', '', 'Holy Family Junior Secondary School', '', 'daddy', 'Kay', '2024-07-08', 'Select Gender', 'Select Blood Group', 'JSS 1 Blue', '', '', 'Allen Town', '', '', '', 'Please Select Religion', 'Please Select Nationality', 'Yes', '', 'show', '', 'July 20, 2024', 'July', '2024'),
(8, '6041352', '98755457680', '', 'Holy Family Junior Secondary School', '', 'John', 'Kamara', '2024-07-20', 'Female', 'O+', 'JSS 1 Blue', '', '', 'Allen Town', '+23274380058', 'mohamedkamara@gmail.com', '', 'Christianity', 'Sierra Leonean', 'No', '', 'show', '', 'July 20, 2024', 'July', '2024'),
(9, '6038726', '98755457683', '', 'Annie Walsh Memorial Senior Secondary School', '', 'John', 'Kamara', '2006-10-09', 'Male', 'O+', 'Science 1', '', '', 'Allen Town', '+23274380058', 'johnkamara@gmail.com', '', 'Christianity', 'Sierra Leonean', 'Select', '', 'show', '', 'July 20, 2024', 'July', '2024'),
(10, '6038726', '98755457689', '', 'Annie Walsh Memorial Senior Secondary School', '', 'John', 'Kamara', '2008-10-09', 'Male', 'O+', 'Commercial 2', '', '', 'Allen Town', '+23274380058', 'johnkamara@gmail.com', '', 'Islam', 'Sierra Leonean', 'Select', '', 'show', '', 'July 20, 2024', 'July', '2024'),
(11, '6038726', '98755457686', '', 'Annie Walsh Memorial Senior Secondary School', '', 'Evian', 'Kamara', '2008-11-09', 'Female', 'O+', 'Commercial 1', '', '', 'Allen Town', '+23274380058', 'afolabe@gmail.com', '', 'Islam', 'Sierra Leonean', 'Select', '', 'show', '', 'July 20, 2024', 'July', '2024'),
(12, '6038726', '98755457688', '', 'Annie Walsh Memorial Senior Secondary School', '', 'John', 'Kamara', '2000-11-11', 'Select Gender', 'O+', 'Science 1', '', '', 'Allen Town', '+23274380058', 'nurudeen@gmail.com', '', 'Christianity', 'Sierra Leonean', 'Select', '', 'show', '', 'July 20, 2024', 'July', '2024'),
(13, '6038726', '98755457684', '', 'Annie Walsh Memorial Senior Secondary School', '', 'John', 'Kamara', '1998-11-10', 'Male', 'Not Known', 'SSS1 Arts 1', '', '', 'Allen Town', '+23274380058', '', '', 'Please Select Religion', 'Sierra Leonean', 'Select', '', 'show', '', 'July 21, 2024', 'July', '2024'),
(14, '6041352', '98755457680', '', 'Holy Family Junior Secondary School', '', 'Evian', 'Kamara', '2001-11-11', 'Select Gender', 'Not Known', 'JSS 1 Blue', '', '', 'Allen Town', '+23274380058', 'evakamara@gmail.com', '', 'Christianity', 'Sierra Leonean', 'Select', '', 'show', 'Epileptic seizures', 'July 21, 2024', 'July', '2024'),
(15, '6041352', '98755457689', '', 'Holy Family Junior Secondary School', '', 'Evian', 'Kamara', '1999-11-11', 'Female', 'Not Known', 'JSS 1 Blue', '', '', 'Allen Town', '+23274380058', '', '', 'Please Select Religion', 'Sierra Leonean', 'Select', '', 'show', 'Sickle cell disease', 'July 21, 2024', 'July', '2024'),
(16, '789092', '98755457683', '', 'Methodist Boys High School', '', 'Mary', 'Kamara', '1999-11-19', 'Female', 'Not Known', '1 Alpha', '', '', 'Allen Town', '+23274380058', 'nurudeen@gmail.com', '', 'Islam', 'Sierra Leonean', 'Select', '', 'show', 'Tuberculosis', 'July 21, 2024', 'July', '2024'),
(17, '789092', '672283338', '', 'Methodist Boys High School', '', 'Mbalu', 'Kamara ', '1999-08-02', 'Female', 'O+', '1 Alpha', '', '', '11 Aberdeen ', '31044880', 'mbalu01@gmail.com', '', 'Islam', 'Sierra Leonean', 'Select', '', 'hide', 'Select', 'August 3, 2024', 'August', '2024'),
(18, '6041352', '98755457686', '', 'Holy Family Junior Secondary School', 0x6173736574732f696d672f73747564656e742f363665336531316361326333642e706e67, 'Evian', 'Kamara', '1111-11-11', 'Female', 'B+', 'JSS 1 Blue', '', '', '16 blackhall road ashobi corner kissy freetown', '+23274380058', 'emmanuelsahrdauda17@gmail.com', '', 'Islam', 'Sierra Leonean', 'Select', '', 'hide', 'Select', 'September 13, 2024', 'September', '2024'),
(19, '6041352', '98755457686', '', 'Holy Family Junior Secondary School', 0x6173736574732f696d672f73747564656e742f363665336662396435353032332e6a706567, 'John', 'Kamara', '1111-11-11', 'Select Gender', 'A+', 'JSS 1 Blue', '', '', '16 blackhall road ashobi corner kissy freetown', '+23231044880', '', '', 'Islam', 'Sierra Leonean', 'Select', '', 'show', 'Diabetes', 'September 13, 2024', 'September', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `student_transfer`
--

CREATE TABLE `student_transfer` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `school_name` varchar(125) NOT NULL,
  `transfer_school` varchar(125) NOT NULL,
  `transfer_school_id` varchar(125) NOT NULL,
  `student_nin` varchar(125) NOT NULL,
  `student_name` varchar(125) NOT NULL,
  `gender` varchar(125) NOT NULL,
  `transfer_reason` varchar(125) NOT NULL,
  `principal_remarks` varchar(125) NOT NULL,
  `remarks_date` varchar(125) NOT NULL,
  `status` varchar(125) NOT NULL,
  `approval_date` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `school_id` varchar(125) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `teacher_name` varchar(125) NOT NULL,
  `teacher_id` varchar(11) NOT NULL,
  `subject_title` varchar(125) NOT NULL,
  `class` varchar(125) NOT NULL,
  `faculty` varchar(125) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `school_id`, `schoolname`, `teacher_name`, `teacher_id`, `subject_title`, `class`, `faculty`, `date`, `month`, `year`) VALUES
(6, '6041352', '6041352', 'John Kamara', '0', 'Social Studies', 'JSS 1 Yellow', '', 'July 17, 2024', 'July', '2024'),
(7, '6041352', '6041352', 'Mamoud Exodos Saffa', '1', 'Agricultural Science', 'JSS 1 Blue', '', 'July 17, 2024', 'July', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id` int(11) NOT NULL,
  `school_id` varchar(11) NOT NULL,
  `schoolname` varchar(125) NOT NULL,
  `firstname` varchar(125) NOT NULL,
  `lastname` varchar(125) NOT NULL,
  `gender` varchar(125) NOT NULL,
  `dob` varchar(125) NOT NULL,
  `pincode` varchar(125) NOT NULL,
  `nationality` varchar(125) NOT NULL,
  `homeaddress` varchar(125) NOT NULL,
  `contactcode` varchar(125) NOT NULL,
  `phonenumber` varchar(125) NOT NULL,
  `nin` varchar(125) NOT NULL,
  `religion` varchar(125) NOT NULL,
  `emailaddress` varchar(125) NOT NULL,
  `class` varchar(125) NOT NULL,
  `faculty` varchar(125) NOT NULL,
  `level` varchar(125) NOT NULL,
  `password` varchar(125) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` varchar(125) NOT NULL,
  `month` varchar(125) NOT NULL,
  `year` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `school_id`, `schoolname`, `firstname`, `lastname`, `gender`, `dob`, `pincode`, `nationality`, `homeaddress`, `contactcode`, `phonenumber`, `nin`, `religion`, `emailaddress`, `class`, `faculty`, `level`, `password`, `status`, `date`, `month`, `year`) VALUES
(1, '6041352', 'Holy Family Senior Secondary School', 'Mamoud Exodos', 'Saffa', 'Male', '05-21-2980', '13423243', 'Sierra Leonean', 'Mayenkineh', '+232', '87990990', '2343546534242', '0', 'mamoudsaffa@gmail.com', 'JSS 1 Blue', '', '', 'saff', 'Active', '', '', ''),
(2, '6041352', 'Holy Family Junior Secondary School', 'John', 'Kamara', 'Male', '2024-07-17', '3945843212', 'Sierra Leonean', 'Allen Town', '+232', '+232+23274380058', '32045897', 'Christianity', 'nurudeen@gmail.com', 'SSS3 Scence', '', 'JSS 1', 'mac', 'Active', 'July 17, 2024', 'July', '2024'),
(3, '6041352', 'Holy Family Junior Secondary School', 'Evian', 'Kay', 'Female', '2006-07-08', '312435464', 'Sierra Leonean', 'Allen Town', '+232', '+232+23274380058', '32045897', 'Islam', 'nurudeen@gmail.com', 'JSS 1 Yellow', '', 'JSS 2', '', 'Active', 'July 19, 2024', 'July', '2024'),
(4, '6041352', 'Holy Family Junior Secondary School', 'Evian', 'Kay', 'Female', '2024-07-19', '39458432129', 'Sierra Leonean', 'Allen Town', '+232', '+232+23274380058', '320458978', 'Islam', 'augustinekamara@gmail.com', 'JSS 1 Blue', '', 'JSS 1', '', 'Active', 'July 19, 2024', 'July', '2024'),
(5, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Evian', 'Kamara', 'Female', '2000-11-11', '3945843219', 'Sierra Leonean', 'Allen Town', '+232', '+232+23274380058', '32045899', 'Please Select Religion', 'umukamara@gmail.com', 'Science 1', 'Science', 'SSS 2', '1234', 'Active', 'July 20, 2024', 'July', '2024'),
(6, '789092', 'Methodist Boys High School', 'John', 'Kamara', 'Male', '1997-11-12', '3945843215', 'Sierra Leonean', 'Allen Town', '+232', '+232+23274380058', '32045897', 'Christianity', 'johnkamara01@gmail.com', '1 Alpha', '', 'JSS 2', '', 'Active', 'July 21, 2024', 'July', '2024'),
(9, '', 'Annie Walsh Memorial Senior Secondary School', 'Emmanuel Sahr', 'Dauda', 'Male', '', '', '', '', '', '', '', '', 'emmanuelsahrdauda17@gmail.com', '', '', '', '$2y$10$MErLoRe7U4DaHjR8SnS0euoYn3nraxhff8KFg20cLvuQGTsO88Jgi', '', '', '', ''),
(20, '6038726', 'Annie Walsh Memorial Senior Secondary School', 'Evian', 'Kamara', 'Female', '2024-09-12', '3945843212', 'Sierra Leonean', '16 blackhall road ashobi corner kissy freetown', '+232', '+232+23274380058', '32045897', 'Islam', 'nurudeen@gmail.com', 'Commercial 2', 'Commercial', 'SSS 1', '', 'Active', 'September 12, 2024', 'September', '2024'),
(21, '', '', '', 'Borbor Turay', '', '', '', '', '', '', '', '', '', 'turayadikalie01@gmail.com', '', '', '', '$2y$10$5bEGprq6KM4IYab5Ik3sz.2RqrwB2BjNY8.pXM1WTShz53KfkVbZu', '', '', '', ''),
(22, '6041352', 'Holy Family Junior Secondary School', 'John', 'Turay', 'Male', '1987-12-13', '39458432129', 'Sierra Leonean', '16 blackhall road ashobi corner kissy freetown', '+232', '+232+23231044880', '32045897', 'Christianity', 'mohamedtajukay@gmail.com', 'JSS 1 Blue', '', 'JSS 1', '', 'Active', 'September 13, 2024', 'September', '2024'),
(23, '6041352', 'Holy Family Junior Secondary School', 'Mary', 'Kamara', 'Female', '2024-09-13', '39458432150', 'Sierra Leonean', '16 blackhall road ashobi corner kissy freetown', '+232', '+232+23274380058', '320458999', 'Christianity', 'mohamedtajukay@gmail.com', 'JSS 1 Yellow', '', 'JSS 1', '', 'Active', 'September 13, 2024', 'September', '2024'),
(24, '6041352', 'Holy Family Junior Secondary School', 'Mary', 'Borbor Turay', 'Female', '1778-12-21', '39458432129', 'Sierra Leonean', '16 blackhall road ashobi corner kissy freetown', '+232', '+232+23274380058', '32045897', 'Islam', 'emmanuelsahrdauda17@gmail.com', 'JSS 1 Blue', '', 'JSS 1', '', 'Active', 'September 13, 2024', 'September', '2024'),
(25, '6041352', 'Holy Family Junior Secondary School', 'Emmanuel Sahr', 'Dauda', 'Male', '2009-12-23', '3945843215', 'Sierra Leonean', '16 blackhall road ashobi corner kissy freetown', '+232', '+232+23274380058', '320458993', 'Christianity', 'emmanuelsahrdauda17@gmail.com', 'JSS 1 Blue', '', 'JSS 1', '', 'Active', 'September 13, 2024', 'September', '2024'),
(26, '6041352', 'Holy Family Junior Secondary School', 'Emmanuel Sahr', 'Dauda', 'Male', '1998-12-19', '39458432129', 'Sierra Leonean', '16 blackhall road ashobi corner kissy freetown', '+232', '+232+23274380058', '320458990', 'Christianity', 'emmanuelsahrdauda17@gmail.com', 'JSS 1 Yellow', '', 'JSS 1', '', 'Active', 'September 13, 2024', 'September', '2024');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_year`
--
ALTER TABLE `academic_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mbsse`
--
ALTER TABLE `mbsse`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schooladmin`
--
ALTER TABLE `schooladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `school_period`
--
ALTER TABLE `school_period`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_transfer`
--
ALTER TABLE `student_transfer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academic_year`
--
ALTER TABLE `academic_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `curriculum`
--
ALTER TABLE `curriculum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mbsse`
--
ALTER TABLE `mbsse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `schooladmin`
--
ALTER TABLE `schooladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `school_period`
--
ALTER TABLE `school_period`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `student_transfer`
--
ALTER TABLE `student_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
