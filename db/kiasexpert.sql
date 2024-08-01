-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 09:05 AM
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
-- Table structure for table `commercial`
--

CREATE TABLE `commercial` (
  `product_id` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `date_com` date NOT NULL,
  `date_ach` date NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `gross_income` decimal(11,0) NOT NULL,
  `link_licen` varchar(255) NOT NULL,
  `link_com` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commercial`
--

INSERT INTO `commercial` (`product_id`, `staff_id`, `staff_name`, `product_name`, `date_com`, `date_ach`, `comp_name`, `gross_income`, `link_licen`, `link_com`, `remarks`) VALUES
('P001', 11234, 'ROBERT', 'PRODUCT X', '2014-07-07', '2016-09-15', 'SYKT ABC', '24000', 'Hyperlink', 'Hyperlink', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `conference`
--

CREATE TABLE `conference` (
  `id` int(50) NOT NULL,
  `name_organizer` varchar(255) NOT NULL,
  `name_title` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `gross_income` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `conference`
--

INSERT INTO `conference` (`id`, `name_organizer`, `name_title`, `start_date`, `end_date`, `gross_income`, `link`, `remark`) VALUES
(1, 'Process Systems Engineering Center (PROSPECT)', 'BENGKEL COURSE ON ENERGY AUDIT ON MECHANICAL EQUIPMENT', '2016-01-20', '2016-01-21', '1,007.00', 'HYPERLINK', 'No Remark'),
(2, 'PUSAT KALAM', 'SEMINAR WACANA ILMU KALAM KE-34 SENIBINA MELAYU NUSANTARA', '2016-07-03', '2016-07-05', '9,000.00', 'HYPERLINK', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `iprs`
--

CREATE TABLE `iprs` (
  `ip_id` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `ip_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `iprs`
--

INSERT INTO `iprs` (`ip_id`, `staff_id`, `staff_name`, `ip_name`, `type`, `link`, `remarks`) VALUES
('IP/CR/2016/0001', 11234, 'ROBERT', 'Documents and guideline of the implementation of Iskandar Malaysia Ecolife Challenge', 'Copyright', 'HYPERLINK', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `know_licen`
--

CREATE TABLE `know_licen` (
  `tech_id` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `tech_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `date_achv` date NOT NULL,
  `licensing` varchar(255) NOT NULL,
  `gross_incom` decimal(11,0) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `know_licen`
--

INSERT INTO `know_licen` (`tech_id`, `staff_id`, `staff_name`, `tech_name`, `type`, `start_date`, `end_date`, `date_achv`, `licensing`, `gross_incom`, `link`, `remarks`) VALUES
('C002', 11234, 'ROBERT', 'TECHNOLOGY A', 'Outright', '2016-10-22', '2017-10-22', '2016-10-22', 'UTM HOLDING', '15', 'HYPERLINK', 'No');

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
-- Table structure for table `patent`
--

CREATE TABLE `patent` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `patent_id` varchar(255) NOT NULL,
  `patent_name` varchar(255) NOT NULL,
  `date_filed` date NOT NULL,
  `date_granted` date NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `expiry_date` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patent`
--

INSERT INTO `patent` (`staff_id`, `staff_name`, `patent_id`, `patent_name`, `date_filed`, `date_granted`, `faculty`, `country`, `expiry_date`, `link`, `remarks`) VALUES
(1274, 'HAMDANI BIN AHMAD                       ', 'EU999', 'PRODUK AAA', '2015-01-01', '2024-02-04', 'Dakwah & Pembangunan Insan', 'MALAYSIA', '2030-01-30', 'no', 'done'),
(11234, 'ROBERT', 'MY2016-001', 'PRODUK AAA', '2009-02-02', '2016-12-30', 'Pengurusan Al-Syariah', 'INDIA', '2020-05-20', 'HYPERLINK', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `patent_filed`
--

CREATE TABLE `patent_filed` (
  `fill_id` varchar(255) NOT NULL,
  `fill_name` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `date_filed` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patent_filed`
--

INSERT INTO `patent_filed` (`fill_id`, `fill_name`, `staff_id`, `staff_name`, `date_filed`, `country`, `faculty`, `link`, `remarks`) VALUES
('P12016987', 'SYSTEM Q', 1067, 'AMRAN BIN AYOB                          ', '2016-09-03', 'MALAYSIA', 'Teknologi Maklumat & Multimedia', 'No', 'Active'),
('PI2016111', 'PRODUCT XYZ', 958, 'JALIL BIN OMAR                          ', '2016-01-05', 'MALAYSIA', 'Pengajian Bahasa Arab', 'No', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `pg_student`
--

CREATE TABLE `pg_student` (
  `matric_no` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `prog_code` varchar(50) NOT NULL,
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
  `first_appointment` date NOT NULL,
  `current_appointment` date NOT NULL,
  `serve_date` date NOT NULL,
  `app_dur` int(10) NOT NULL,
  `year_awd` varchar(10) NOT NULL,
  `awd_inst` varchar(255) NOT NULL,
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

INSERT INTO `pg_student` (`matric_no`, `student_name`, `faculty`, `prog_code`, `cgpa`, `cgpa_degree`, `cgpa_deg_actual`, `cgpa_master`, `cgpa_phd`, `university_degree`, `university_master`, `degree_registered`, `mixedmode_ratio`, `st`, `area`, `sponsor`, `intake_year`, `aca_year`, `numsem`, `student_time`, `study_mode`, `citizen`, `country`, `first_appointment`, `current_appointment`, `serve_date`, `app_dur`, `year_awd`, `awd_inst`, `entry_date`, `senate`, `duration`, `got`, `link`, `remarks`, `status_active`) VALUES
('GS35697', 'AFIFAH BINTI HASSAN', 'Al-Quran & Hadis', '', 'No', 2.96, '2.96', 'No', 'No', 'Usim', 'UiTM', 'PhD', '70:30', 'NON S&T', 'DAKWAH', 'SELF-FINANCE', '2015', '2016/2017', '4', 'Full-Time', 'Mix Mode', 'Local', 'Malaysia', '0000-00-00', '0000-00-00', '0000-00-00', 0, '2015', '', '2024-07-21', '2024-07-21', 2, 'No', 'https://github.com/queain27', '-', 'Active'),
('GS38336', 'ABBAS SANI DAHIRU', 'Al-Quran & Hadis', '', 'Yes', 3.33, '10', 'Yes', 'Yes', 'Université De Toulouse', 'USMANU DANFODIYO UNIVERSITY SOKOTO', 'PhD', '70:30', 'NON S&T', 'DAKWAH', 'SELF-FINANCE', '2015', '2016/2017', '4', 'Part-Time', 'Research', 'Foreign', 'Nigeria', '0000-00-00', '0000-00-00', '0000-00-00', 0, '', '', '2015-11-02', '2017-12-30', 4, 'Yes', 'https://github.com/queain27', 'Active', 'Graduate'),
('GS44903', 'Nur Athirah Binti Mohammad', 'Al-Quran & Hadis', 'AH112', 'Yes', 3.33, '3.33', 'Yes', 'Yes', 'Usim', 'UiTM', 'Master', '70:30', 'NON S&T', 'al-quran', 'SELF-FINANCE', '2015', '2016/2017', '4', 'Full-Time', 'Research', 'Local', 'Malaysia', '0000-00-00', '0000-00-00', '0000-00-00', 0, '', '', '2024-07-15', '2024-07-23', 2, 'Yes', 'https://github.com/queain27', 'Active', 'Graduate'),
('PD123', 'Mohammad', 'Teknologi Maklumat & Multimedia', '', 'No', 2.96, '2.96', 'Yes', 'No', 'uitm', 'UiTM', 'Doctoral', '60:40', 'S&T', 'IT', 'No', '2023', '2023/2024', '5', 'Full-Time', 'Mix Mode', 'Local', 'Malaysia', '2015-01-01', '2016-06-30', '2016-12-31', 12, '2012', 'UNIVERSITI TEKNOLOGI MALAYSIA', '2015-01-01', '2016-12-31', 12, 'Yes', 'https://github.com/queain27', '-', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `post_fee`
--

CREATE TABLE `post_fee` (
  `reference_no` varchar(255) NOT NULL,
  `matric_no` varchar(255) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `prog_code` varchar(255) NOT NULL,
  `study_mode` varchar(255) NOT NULL,
  `aca_year` varchar(255) NOT NULL,
  `payment_date` date NOT NULL,
  `gross_income` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_fee`
--

INSERT INTO `post_fee` (`reference_no`, `matric_no`, `student_name`, `faculty`, `prog_code`, `study_mode`, `aca_year`, `payment_date`, `gross_income`, `link`, `remarks`) VALUES
('BILJB1806178', 'GS44903', 'Nur Athirah Binti Mohammad', 'Al-Quran & Hadis', 'AH112', 'Research', '', '2016-12-20', '12', 'HYPERLINK', 'No'),
('JB1806178', 'GS38336', 'ABBAS SANI DAHIRU', 'Al-Quran & Hadis', '', 'Research', '2016/2017', '2016-02-15', '50', 'HYPERLINK', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `prod_tech`
--

CREATE TABLE `prod_tech` (
  `staff_id` int(50) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `prod_name` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `year` varchar(50) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `gross_income` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(123, 1067, '', 'djsakdh', '2024', '2024', 'hdjhdh', 'University', 'jgjg', 800, 8000, 799, 80),
(1324, 1067, '', 'djsakdh', '2024-07-24', '2024-07-28', 'hdjhdh', 'University', 'gjnhnb', 800, 8000, 799, 80),
(124, 11234, 'ROBERT', 'djsakdh', '2024-07-23', '2024-07-26', 'hdjhdh', 'National', 'gjnhnb', 800, 8000, 799, 80),
(125, 1274, 'HAMDANI BIN AHMAD                       ', 'djsakdh', '2024-07-23', '2024-07-26', 'hdjhdh', 'University', 'gjnhnb', 800, 8000, 799, 80);

-- --------------------------------------------------------

--
-- Table structure for table `spinn_off`
--

CREATE TABLE `spinn_off` (
  `project_id` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `regis_comp` varchar(255) NOT NULL,
  `comp_name` varchar(255) NOT NULL,
  `date_corp` date NOT NULL,
  `equity` int(11) NOT NULL,
  `desc_research` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spinn_off`
--

INSERT INTO `spinn_off` (`project_id`, `staff_id`, `staff_name`, `regis_comp`, `comp_name`, `date_corp`, `equity`, `desc_research`, `link`, `remarks`) VALUES
('1J192', 1274, 'HAMDANI BIN AHMAD                       ', 'RE566', 'SHE EMPIRES SDN BHD', '2016-12-01', 2, 'Providing cosmestic natural product and service', 'HYPERLINK', 'No'),
('4H300', 11234, 'ROBERT', 'MX123', 'CSNANO TECHNOLOGIES SDN. BHD.', '2016-05-04', 1, 'Providing lab equipment service and maintenance', 'HYPERLINK', 'no');

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
(958, 'JALIL BIN OMAR                          ', 'DS52', 'SENIOR LECTURER', '26-APR-76', '', '12-JUL-15', '12-Jul-55', 3, 'A', 'PHD', '', '', '', 'Pengajian Bahasa Arab', '', 'ACTIVE', 'PERMANENT', 'FULL TIME', 'LOCAL', 'MALAYSIA', 'HYPERLINK', ''),
(992, 'ANIE BTE ATTAN                          ', 'KQ54', 'Professor', '2024-07-04', '2024-07-10', '2024-07-04', '2024-07-10', 55, 'A', 'PHD', '', 'ETC', '', 'Al-Quran & Hadis', 'NON S&T', 'Sabbatical', 'Contract', 'Full-Time', 'Local', 'MALAYSIA', 'HYPERLINK', 'STAF DILANTIK SEMULA'),
(1067, 'AMRAN BIN AYOB                          ', 'DS53', 'ASSOCIATE PROFESSOR', '03-Sep-76', '', '10-Oct-16', '11-Oct-52', 0, 'A', 'PHD', '', '', '', 'Teknologi Maklumat & Multimedia', '', 'ACTIVE', 'CONTRACT', 'FULL TIME', 'LOCAL', 'MALAYSIA', 'HYPERLINK', ''),
(1274, 'HAMDANI BIN AHMAD                       ', 'VK05', 'PROFESSOR', '09-Nov-97', '', '06-Feb-16', '28-Jan-70', 17, 'A', 'PHD', '', '', '', 'Dakwah & Pembangunan Insan', '', 'ACTIVE', 'CONTRACT', 'FULL TIME', 'LOCAL', 'MALAYSIA', 'HYPERLINK', ''),
(11234, 'ROBERT', 'VK06', 'PROFESSOR', '01-Nov-74', '', '10-Oct-16', '09-Oct-52', 0, 'A', 'PHD', '', 'IR', 'BEM 123', 'J23-FAKULTI KEJURUTERAAN ELEKTRIK ', 'S&T', 'ACTIVE', 'CONTRACT', 'FULL TIME', 'FOREIGN', 'INDIA', 'HYPERLINK', ''),
(12345, 'Hannan Binti Zulkafli', 'VK09', 'Professor', '2024-07-04', '2024-07-18', '2024-07-11', '2024-07-17', 55, 'A', 'PHD', 'u', 'ACCA', 'BEM 123', 'Pengajian Muamalat', 'S&T', 'Leaves', 'Permanent', 'Full-Time', 'Foreign', 'Indonesia', 'LINK', 'STAFF');

-- --------------------------------------------------------

--
-- Table structure for table `training_courses`
--

CREATE TABLE `training_courses` (
  `coordinator_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `training_course_title` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `gross_income_generated` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `training_courses`
--

INSERT INTO `training_courses` (`coordinator_name`, `faculty`, `training_course_title`, `venue`, `start_date`, `end_date`, `reference_no`, `gross_income_generated`, `link`, `remarks`) VALUES
('INSTITUTE OF BIOPRODUCT DEVELOPMENT (IBD)', 'Dakwah & Pembangunan Insan', 'A 3 DAYS TRAINING ON COSMETIC FORMULATIONS AND EVALUATIONS', 'Dewan Johor', '2018-10-23', '2018-10-25', 'BILJB1806178', '20000', 'HYPERLINK', 'No');

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
-- Indexes for table `commercial`
--
ALTER TABLE `commercial`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `conference`
--
ALTER TABLE `conference`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iprs`
--
ALTER TABLE `iprs`
  ADD PRIMARY KEY (`ip_id`);

--
-- Indexes for table `know_licen`
--
ALTER TABLE `know_licen`
  ADD PRIMARY KEY (`tech_id`);

--
-- Indexes for table `lect_form`
--
ALTER TABLE `lect_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patent`
--
ALTER TABLE `patent`
  ADD PRIMARY KEY (`patent_id`);

--
-- Indexes for table `patent_filed`
--
ALTER TABLE `patent_filed`
  ADD PRIMARY KEY (`fill_id`);

--
-- Indexes for table `pg_student`
--
ALTER TABLE `pg_student`
  ADD PRIMARY KEY (`matric_no`);

--
-- Indexes for table `post_fee`
--
ALTER TABLE `post_fee`
  ADD PRIMARY KEY (`reference_no`);

--
-- Indexes for table `prod_tech`
--
ALTER TABLE `prod_tech`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `spinn_off`
--
ALTER TABLE `spinn_off`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `training_courses`
--
ALTER TABLE `training_courses`
  ADD PRIMARY KEY (`reference_no`);

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
-- AUTO_INCREMENT for table `conference`
--
ALTER TABLE `conference`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lect_form`
--
ALTER TABLE `lect_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
