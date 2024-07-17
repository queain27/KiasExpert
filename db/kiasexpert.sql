-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2024 at 05:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiasexpert`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_form`
--

CREATE TABLE `admin_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `adminid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_form`
--

INSERT INTO `admin_form` (`id`, `name`, `adminid`, `password`, `image`) VALUES
(1, 'Admin', '111', '1111', 'user3.jpg'),
(2, 'Admin', '123', '123', 'Logo2.png'),
(3, 'Admin', '1234', '1234', 'photo_2020-03-03_21-41-31.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lect_form`
--

CREATE TABLE `lect_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `staffid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lect_form`
--

INSERT INTO `lect_form` (`id`, `name`, `staffid`, `password`, `image`) VALUES
(1, 'Mohd Rosli Bin Hamat', '123455', '12345', 'user1.jpg'),
(2, 'Ahmad Maulana Bin Bakar', '1231', '1231', 'user3.jpg'),
(3, 'Muhammad Alif Bin Sanusi', '1232', '1232', 'user1.jpg'),
(4, 'Nur Anis Bin Khalid', '1233', '1233', 'user.jpg'),
(5, 'Siti Nor Binti Halim', '1222', '1222', ''),
(6, 'Alif Bin Abu', '1223', '1233', 'user1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pg_student`
--

CREATE TABLE `pg_student` (
  `matric_no` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `cgpa` varchar(255) NOT NULL,
  `cgpa_degree` double NOT NULL,
  `cgpa_master` varchar(255) NOT NULL,
  `cgpa_phd` varchar(255) NOT NULL,
  `university_degree` varchar(255) NOT NULL,
  `university_master` varchar(255) NOT NULL,
  `degree_registered` varchar(255) NOT NULL,
  `student_time` varchar(255) NOT NULL,
  `study_mode` varchar(255) NOT NULL,
  `citizen` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status_active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg_student`
--

INSERT INTO `pg_student` (`matric_no`, `student_name`, `faculty`, `cgpa`, `cgpa_degree`, `cgpa_master`, `cgpa_phd`, `university_degree`, `university_master`, `degree_registered`, `student_time`, `study_mode`, `citizen`, `country`, `status_active`) VALUES
(2021156055, 'Mohammad Ali Bin Mohammad Bakar', 'Al-Quran & Hadis', 'Yes', 3.55, 'Yes', 'Yes', '', 'UiTM', 'PhD', '', 'Research', 'Local', 'Malaysia', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `first_appointment` date NOT NULL,
  `current_appointment` date NOT NULL,
  `serve_date` date NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `cohort` char(1) NOT NULL,
  `aca_qua` varchar(255) NOT NULL,
  `name_prof` varchar(255) NOT NULL,
  `prof_qual` varchar(255) NOT NULL,
  `regis_prof` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `st` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `status_contract` varchar(255) NOT NULL,
  `status_time` varchar(255) NOT NULL,
  `citizen` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `grade`, `position`, `first_appointment`, `current_appointment`, `serve_date`, `dob`, `age`, `cohort`, `aca_qua`, `name_prof`, `prof_qual`, `regis_prof`, `faculty`, `st`, `status`, `status_contract`, `status_time`, `citizen`, `country`, `link_evidence`, `remarks`) VALUES
(743, 'Ali Bin Ahmad', 'VK06', 'Professor', '1974-11-01', '2024-06-23', '2016-10-10', '1952-10-09', 66, 'A', 'Master', '', 'IR', 'BEM 123', 'J23-Fakulti Kejuruteraan Elektrik', 'S&T', 'Active', 'Contract', 'Full-Time', 'Local', 'Malaysia', 'Hyperlink', 'Staff'),
(958, 'Ali Bin Omar', 'DS52', 'Senior Lecturer', '2024-07-03', '2024-07-04', '2024-07-10', '2024-07-18', 44, 'B', 'PHD', 'A', 'IR', 'BEM 123', 'Pengurusan Al-Syariah', 'S&T', 'Study', 'Permanent', 'Full-Time', 'Local', 'Malaysia', 'LINK', 'STAFF');

-- --------------------------------------------------------

--
-- Table structure for table `ug_student`
--

CREATE TABLE `ug_student` (
  `matric_no` int(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `year_enroll` date NOT NULL,
  `aca_year` date NOT NULL,
  `citizen` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status_active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ug_student`
--

INSERT INTO `ug_student` (`matric_no`, `student_name`, `faculty`, `year_enroll`, `aca_year`, `citizen`, `country`, `status_active`) VALUES
(2021156076, 'Nur Alia Batrisya Binti Mohammad', 'Pengajian Bahasa Arab', '2024-07-01', '2023-01-01', 'Local', 'Malaysia', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_form`
--
ALTER TABLE `admin_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lect_form`
--
ALTER TABLE `lect_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pg_student`
--
ALTER TABLE `pg_student`
  ADD PRIMARY KEY (`matric_no`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `ug_student`
--
ALTER TABLE `ug_student`
  ADD PRIMARY KEY (`matric_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_form`
--
ALTER TABLE `admin_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lect_form`
--
ALTER TABLE `lect_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pg_student`
--
ALTER TABLE `pg_student`
  MODIFY `matric_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021156056;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11235;

--
-- AUTO_INCREMENT for table `ug_student`
--
ALTER TABLE `ug_student`
  MODIFY `matric_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021156077;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
