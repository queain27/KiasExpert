-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 09:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

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
-- Table structure for table `awarding`
--

CREATE TABLE `awarding` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `name_awd` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `conferring` varchar(255) NOT NULL,
  `title_invention` varchar(255) NOT NULL,
  `event` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `link_award` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `awarding`
--

INSERT INTO `awarding` (`staff_id`, `staff_name`, `faculty`, `name_awd`, `type`, `level`, `conferring`, `title_invention`, `event`, `date`, `link_award`) VALUES
(1067, 'AMRAN BIN AYOB                          ', 'J24-FAKULTI KEJURUTERAAN MEKANIKAL ', 'dfgh', 'award', 'University', 'aas', 'sdfg', 'sdfg', '2024-07-26', 'as'),
(1274, 'HAMDANI BIN AHMAD                       ', 'J46-FAKULTI KEJURUTERAAN KIMIA DAN KEJURUTERAAN TENAGA', 'dfgh', 'award', 'National', 'aas', 'sdfg', 'sdfg', '2024-07-25', 'dfvgbn');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `industrial` varchar(255) NOT NULL,
  `international` varchar(255) NOT NULL,
  `national` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_editor` varchar(255) NOT NULL,
  `chapter_title` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `isbn` int(11) NOT NULL,
  `book_status` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`staff_id`, `staff_name`, `authors`, `industrial`, `international`, `national`, `book_title`, `book_editor`, `chapter_title`, `publisher`, `isbn`, `book_status`, `link_evidence`, `remarks`) VALUES
(1067, 'AMRAN BIN AYOB                          ', 'sfg', 'N', 'Y', 'N', 'asd', 'rty', '467', 'jhkg', 0, 'dwd', 'fbh', 'add');

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
-- Table structure for table `other_publication`
--

CREATE TABLE `other_publication` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `source_title` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `page_start` int(11) NOT NULL,
  `page_end` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `issn_isbn` int(11) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `cgpa_deg_actual` varchar(255) NOT NULL,
  `cgpa_master` varchar(255) NOT NULL,
  `cgpa_phd` varchar(255) NOT NULL,
  `university_degree` varchar(255) NOT NULL,
  `university_master` varchar(255) NOT NULL,
  `degree_registered` varchar(255) NOT NULL,
  `mixedmode_ratio` varchar(255) NOT NULL,
  `st` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `intake_year` varchar(255) NOT NULL,
  `aca_year` varchar(255) NOT NULL,
  `numsem` varchar(255) NOT NULL,
  `student_time` varchar(255) NOT NULL,
  `study_mode` varchar(255) NOT NULL,
  `citizen` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `entry_date` date NOT NULL,
  `senate` date NOT NULL,
  `duration` int(5) NOT NULL,
  `got` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `status_active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pg_student`
--

INSERT INTO `pg_student` (`matric_no`, `student_name`, `faculty`, `cgpa`, `cgpa_degree`, `cgpa_deg_actual`, `cgpa_master`, `cgpa_phd`, `university_degree`, `university_master`, `degree_registered`, `mixedmode_ratio`, `st`, `area`, `sponsor`, `intake_year`, `aca_year`, `numsem`, `student_time`, `study_mode`, `citizen`, `country`, `entry_date`, `senate`, `duration`, `got`, `link`, `remarks`, `status_active`) VALUES
(2021156055, 'AFIFAH BINTI HASSAN', 'Al-Quran & Hadis', 'No', 2.96, '2.96', 'No', 'No', 'Usim', 'UiTM', 'post-Doctoral', '70:30', 'NON S&T', 'DAKWAH', 'SELF-FINANCE', '2015', '2016/2017', '4', 'Full-Time', 'Mix Mode', 'Local', 'Malaysia', '2024-07-21', '2024-07-21', 2, 'Yes', 'https://github.com/queain27', 'Active', 'Graduate'),
(2021156056, 'ABBAS SANI DAHIRU', 'Al-Quran & Hadis', 'Yes', 3.33, '10', 'Yes', 'Yes', 'Université De Toulouse', 'USMANU DANFODIYO UNIVERSITY SOKOTO', 'PhD', '70:30', 'NON S&T', 'DAKWAH', 'SELF-FINANCE', '2015', '2016/2017', '4', 'Part-Time', 'Research', 'Foreign', 'Nigeria', '2015-11-02', '2017-12-30', 4, 'Yes', 'https://github.com/queain27', 'Active', 'Graduate'),
(2021156057, 'Nur Athirah Binti Mohammad', 'Al-Quran & Hadis', 'Yes', 3.33, '3.33', 'Yes', 'Yes', 'Usim', 'UiTM', 'Master', '70:30', 'NON S&T', 'al-quran', 'SELF-FINANCE', '2015', '2016/2017', '4', 'Full-Time', 'Research', 'Local', 'Malaysia', '2024-07-15', '2024-07-23', 2, 'Yes', 'https://github.com/queain27', 'Active', 'Graduate');

-- --------------------------------------------------------

--
-- Table structure for table `policy_paper`
--

CREATE TABLE `policy_paper` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `title_paper` varchar(255) NOT NULL,
  `stake_holder` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL,
  `year_published` int(11) NOT NULL,
  `isbn` int(11) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy_paper`
--

INSERT INTO `policy_paper` (`staff_id`, `staff_name`, `authors`, `title_paper`, `stake_holder`, `level`, `year_published`, `isbn`, `link_evidence`, `remarks`) VALUES
(1067, 'AMRAN BIN AYOB                          ', 'dg', 'ggt', 'aert', 'State Government', 325, 467, 'fsaa', 'DSJDSH');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `article_no` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `authors` varchar(255) NOT NULL,
  `industrial` varchar(255) NOT NULL,
  `international` varchar(255) NOT NULL,
  `national` varchar(255) NOT NULL,
  `document_title` varchar(255) NOT NULL,
  `source_title` varchar(255) NOT NULL,
  `document_type` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `issue` varchar(255) NOT NULL,
  `page_start` int(11) NOT NULL,
  `page_end` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `issn_isbn` int(11) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `quartile1` varchar(255) NOT NULL,
  `quartile2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`article_no`, `staff_id`, `staff_name`, `authors`, `industrial`, `international`, `national`, `document_title`, `source_title`, `document_type`, `volume`, `issue`, `page_start`, `page_end`, `year`, `issn_isbn`, `link_evidence`, `remarks`, `quartile1`, `quartile2`) VALUES
(123, 1067, 'AMRAN BIN AYOB                          ', 'dg', 'Y', 'N', 'N', 'dcfgh', 'dfgh', 'sdfg', '12345', '12', 456, 234, 2024, 245, 'fbh', 'fgh', '1234', '345');

-- --------------------------------------------------------

--
-- Table structure for table `research`
--

CREATE TABLE `research` (
  `project_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `research_title` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `sponsor_cat` varchar(255) NOT NULL,
  `grant_name` varchar(255) NOT NULL,
  `amtpled_act` int(11) NOT NULL,
  `amtpled_new` int(11) NOT NULL,
  `amt_rec` int(11) NOT NULL,
  `remarks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research`
--

INSERT INTO `research` (`project_id`, `staff_id`, `staff_name`, `research_title`, `start_date`, `end_date`, `sponsor`, `sponsor_cat`, `grant_name`, `amtpled_act`, `amtpled_new`, `amt_rec`, `remarks`) VALUES
(123, 1067, '', 'djsakdh', '', '', 'hdjhdh', 'University', 'jgjg', 800, 8000, 799, 80),
(125, 1274, 'HAMDANI BIN AHMAD                       ', 'djsakdh', '2024-07-23', '2024-07-26', 'hdjhdh', 'University', 'gjnhnb', 800, 8000, 799, 800),
(1638, 958, 'JALIL BIN OMAR                          ', 'djsakdh', '2024-07-25', '2024-07-26', 'eghjk', 'National', 'fdghj', 801, 8000, 7999, 80);

-- --------------------------------------------------------

--
-- Table structure for table `research_grant`
--

CREATE TABLE `research_grant` (
  `project_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `st` varchar(255) NOT NULL,
  `staff_status` varchar(255) NOT NULL,
  `research_title` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` int(11) NOT NULL,
  `page_end` int(11) NOT NULL,
  `duration_project` int(11) NOT NULL,
  `status_project` varchar(255) NOT NULL,
  `project_extension` varchar(255) NOT NULL,
  `project_extend` int(11) NOT NULL,
  `sponsor_cat` varchar(255) NOT NULL,
  `grant_name` varchar(255) NOT NULL,
  `amt_pledge` int(11) NOT NULL,
  `amt_receive` int(11) NOT NULL,
  `amt_spent` int(11) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `research_project`
--

CREATE TABLE `research_project` (
  `project_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `st` varchar(255) NOT NULL,
  `status_staff` varchar(255) NOT NULL,
  `research_title` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `page_end` int(11) NOT NULL,
  `duration_project` int(11) NOT NULL,
  `status_project` varchar(255) NOT NULL,
  `project_extension` varchar(255) NOT NULL,
  `project_extend` varchar(255) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `sponsor_cat` varchar(255) NOT NULL,
  `grant_name` varchar(255) NOT NULL,
  `amt_pledge` int(11) NOT NULL,
  `amt_receive` int(11) NOT NULL,
  `amt_spent` int(11) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `first_appointment` varchar(255) NOT NULL,
  `current_appointment` varchar(255) NOT NULL,
  `serve_date` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
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
(743, 'ALI BIN AHMAD                   ', 'VK06', '', '2024-07-10', '2024-07-24', '2024-07-10', '2024-07-10', 56, 'A', 'MASTER', 'Askar', 'IR', 'BEM 123', 'Al-Quran & Hadis', 'S&T', 'Study', 'Permanent', 'Full-Time', 'Local', 'MALAYSIA', 'https://rgbacolorpicker.com/', 'Staff'),
(958, 'JALIL BIN OMAR                          ', 'DS52', 'SENIOR LECTURER', '26-APR-76', '', '12-JUL-15', '12-Jul-55', 3, 'A', 'PHD', '', '', '', 'J22-FAKULTI KEJURUTERAAN AWAM ', '', 'ACTIVE', 'PERMANENT', 'FULL TIME', 'LOCAL', 'MALAYSIA', 'HYPERLINK', ''),
(992, 'ANIE BTE ATTAN                          ', 'KQ54', 'Professor', '2024-07-04', '2024-07-10', '2024-07-04', '2024-07-10', 55, 'A', 'PHD', '', 'ETC', '', 'Al-Quran & Hadis', 'NON S&T', 'Sabbatical', 'Contract', 'Full-Time', 'Local', 'MALAYSIA', 'HYPERLINK', 'STAF DILANTIK SEMULA'),
(1067, 'AMRAN BIN AYOB                          ', 'DS53', 'ASSOCIATE PROFESSOR', '03-Sep-76', '', '10-Oct-16', '11-Oct-52', 0, 'A', 'PHD', '', '', '', 'J24-FAKULTI KEJURUTERAAN MEKANIKAL ', '', 'ACTIVE', 'CONTRACT', 'FULL TIME', 'LOCAL', 'MALAYSIA', 'HYPERLINK', ''),
(1274, 'HAMDANI BIN AHMAD                       ', 'VK05', 'PROFESSOR', '09-Nov-97', '', '06-Feb-16', '28-Jan-70', 17, 'A', 'PHD', '', '', '', 'J46-FAKULTI KEJURUTERAAN KIMIA DAN KEJURUTERAAN TENAGA', '', 'ACTIVE', 'CONTRACT', 'FULL TIME', 'LOCAL', 'MALAYSIA', 'HYPERLINK', ''),
(11234, 'ROBERT', 'VK06', 'PROFESSOR', '01-Nov-74', '', '10-Oct-16', '09-Oct-52', 0, 'A', 'PHD', '', 'IR', 'BEM 123', 'J23-FAKULTI KEJURUTERAAN ELEKTRIK ', 'S&T', 'ACTIVE', 'CONTRACT', 'FULL TIME', 'FOREIGN', 'INDIA', 'HYPERLINK', ''),
(12345, 'Hannan Binti Zulkafli', 'VK09', 'Professor', '2024-07-04', '2024-07-18', '2024-07-11', '2024-07-17', 55, 'A', 'PHD', 'u', 'ACCA', 'BEM 123', 'Pengajian Muamalat', 'S&T', 'Leaves', 'Permanent', 'Full-Time', 'Foreign', 'Indonesia', 'LINK', 'STAFF');

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
-- Indexes for table `awarding`
--
ALTER TABLE `awarding`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`staff_id`);

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
-- Indexes for table `policy_paper`
--
ALTER TABLE `policy_paper`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`article_no`);

--
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`project_id`);

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
  MODIFY `matric_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021156058;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12346;

--
-- AUTO_INCREMENT for table `ug_student`
--
ALTER TABLE `ug_student`
  MODIFY `matric_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021156077;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
