-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2024 at 03:28 AM
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
-- Table structure for table `abroad`
--

CREATE TABLE `abroad` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `no_days` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abroad`
--

INSERT INTO `abroad` (`staff_id`, `staff_name`, `faculty`, `organisation`, `country`, `type`, `sponsor`, `start_date`, `end_date`, `no_days`, `link_evidence`, `remarks`) VALUES
(1067, 'AMRAN BIN AYOB                          ', 'Teknologi Maklumat & Multimedia', 'asdd', 'USA ', 'Research', 'hdjhdh', '2024-08-14', '2024-08-29', '15 days', 'FD', 'addk');

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
  `isbn` varchar(255) NOT NULL,
  `book_status` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`staff_id`, `staff_name`, `authors`, `industrial`, `international`, `national`, `book_title`, `book_editor`, `chapter_title`, `publisher`, `isbn`, `book_status`, `link_evidence`, `remarks`) VALUES
(958, 'JALIL BIN OMAR                          ', 'dg', 'Y', 'Y', 'N', 'asd', 'gj', 'tyu', 'yjuu', '467', 'INDEX', 'fsaa', 'gh'),
(1067, 'AMRAN BIN AYOB                          ', 'dg', 'Y', 'N', 'Y', 'asd', 'gj', 'dwd', 'yjuu', '467', 'INDEX', 'FD', '341');

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
('P001', 11234, 'ROBERT', 'PRODUCT X', '2014-07-07', '2016-09-15', 'SYKT ABC', '24000', 'Hyperlink', 'Hyperlink', 'No'),
('P002', 1274, 'HAMDANI BIN AHMAD                       ', 'SYKT ABC', '2015-02-02', '2015-02-02', 'SYKT ABC', '12000', 'Hyperlink', 'Hyperlink', 'STAFF');

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
-- Table structure for table `consultancies`
--

CREATE TABLE `consultancies` (
  `reference_no` varchar(255) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `gross_income` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consultancies`
--

INSERT INTO `consultancies` (`reference_no`, `staff_id`, `staff_name`, `faculty`, `tittle`, `client_name`, `start_date`, `end_date`, `gross_income`, `link`, `remarks`) VALUES
('VR1234', 1274, 'HAMDANI BIN AHMAD                       ', 'Dakwah & Pembangunan Insan', 'PROJEK EIA DI LABUAN ', 'AMSTEEL MILLS SDN. BHD.', '2016-01-19', '2018-01-20', '', 'HYPERLINK', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `endownment`
--

CREATE TABLE `endownment` (
  `id` int(11) NOT NULL,
  `name_contributor` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `inc_dividen` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `dividen` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `endownment`
--

INSERT INTO `endownment` (`id`, `name_contributor`, `detail`, `type`, `inc_dividen`, `year`, `amount`, `dividen`, `link`, `remark`) VALUES
(1, 'Tanah 3 Hektar', 'Sumbangan bagi penanaman pokok herba', 'Asset', 'No', '2018', '3400000', '-', 'HYPERLINK', 'No'),
(2, 'Fakulti Pendidikan ', 'Sumbangan Tabung endowmen', 'Crowd Funding', 'yes', '2018', '90500', '2715.00', 'HYPERLINK', '-');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `reference_no` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `gift` varchar(255) NOT NULL,
  `donor` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date_receive` date NOT NULL,
  `value` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`reference_no`, `faculty`, `gift`, `donor`, `type`, `date_receive`, `value`, `link`, `remarks`) VALUES
('kew10/2018', 'Pengurusan Al-Syariah', 'Bahan Kimia', 'Sykt ABC Sdn Bhd', 'Equipment', '2018-01-01', '200000.00', 'HYPERLINK', 'no'),
('KEW18/2018', 'Dakwah & Pembangunan Insan', 'Keynote speaker ', 'NUS', 'Etc', '2018-08-06', '10000.00', 'HYPERLINK', '-');

-- --------------------------------------------------------

--
-- Table structure for table `hosp_lab`
--

CREATE TABLE `hosp_lab` (
  `reference_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `gross_income` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hosp_lab`
--

INSERT INTO `hosp_lab` (`reference_no`, `name`, `type`, `gross_income`, `link`, `remarks`) VALUES
('INV00100', 'Clinical Services', 'Hospital', '25000', 'HYPERLINK', 'no'),
('kew10/2018', 'Clinical Services', 'Hospital', '1,007.00', 'HYPERLINK', 'no'),
('RJ201601089736', 'INSTITUT BAHAN KIMIA', 'Lab Service', '6260.00', 'HYPERLINK', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `impact_journal`
--

CREATE TABLE `impact_journal` (
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
-- Dumping data for table `impact_journal`
--

INSERT INTO `impact_journal` (`article_no`, `staff_id`, `staff_name`, `authors`, `industrial`, `international`, `national`, `document_title`, `source_title`, `document_type`, `volume`, `issue`, `page_start`, `page_end`, `year`, `issn_isbn`, `link_evidence`, `remarks`, `quartile1`, `quartile2`) VALUES
(123, 1067, 'AMRAN BIN AYOB                          ', 'dg', 'Y', 'N', 'N', 'dcfgh', 'dfgh', 'sdfgk', '12345', '12', 456, 234, 2024, 245, 'fbh', 'fgh', 'ghhgh', 'jggj');

-- --------------------------------------------------------

--
-- Table structure for table `index_journal`
--

CREATE TABLE `index_journal` (
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
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `index_journal`
--

INSERT INTO `index_journal` (`article_no`, `staff_id`, `staff_name`, `authors`, `industrial`, `international`, `national`, `document_title`, `source_title`, `document_type`, `volume`, `issue`, `page_start`, `page_end`, `year`, `issn_isbn`, `link_evidence`, `remarks`) VALUES
(123, 1067, 'AMRAN BIN AYOB                          ', 'dg', 'Y', 'N', 'N', 'dcfgh', 'dfgh', 'sdfg', '12345', '12', 456, 234, 2024, 245, 'fbhkg', 'fghlk');

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
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `regis_no` varchar(255) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `awarding` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`regis_no`, `facility`, `faculty`, `type`, `awarding`, `start_date`, `end_date`, `link`, `remarks`) VALUES
('IEC 17025', 'Pusat Ujian Sampel ', 'Teknologi Maklumat & Multimedia', 'ISO/IEC 17025 International Standard for Laboratories', 'World Anti-Doping Agency (WADA)', '2011-01-01', '2016-12-31', 'HYPERLINK', 'No');

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
(1, 'ALI BIN AHMAD', '743', '743', 'user1.jpg'),
(2, 'Hannan Binti Zulkafli', '12345', '12345', 'user3.jpg'),
(3, 'HAMDANI BIN AHMAD ', '1274', '1274', 'user1.jpg'),
(4, 'AMRAN BIN AYOB ', '992', '992', 'user.jpg'),
(5, 'JALIL BIN OMAR', '958', '958', ''),
(6, 'ROBERT', '11234', '11234', 'user1.jpg'),
(7, 'ANIE BTE ATTAN', '992', '760702031234', 'IMG_20230107_003037.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`id`, `type`, `name`, `title`, `volume`, `link`) VALUES
(1, 'Online Book', 'Online Database', '81', '81', 'No'),
(2, 'Online Book', 'Online Database 2', '100', '100', 'No'),
(3, 'Physical Book', 'Book', '125', '1000', '- ');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `member` varchar(255) NOT NULL,
  `type_appointment` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`staff_id`, `staff_name`, `faculty`, `member`, `type_appointment`, `start_date`, `end_date`, `link_evidence`, `remarks`) VALUES
(1067, 'AMRAN BIN AYOB                          ', 'Teknologi Maklumat & Multimedia', 'ajfdfhf', 'Committe', '2024-08-14', '2024-08-25', 'FDkkk', 'addk');

-- --------------------------------------------------------

--
-- Table structure for table `nationalorganisation`
--

CREATE TABLE `nationalorganisation` (
  `id` int(11) NOT NULL,
  `organisation_name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `programme_title` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nationalorganisation`
--

INSERT INTO `nationalorganisation` (`id`, `organisation_name`, `type`, `category`, `amount`, `start_date`, `end_date`, `period`, `programme_title`, `link_evidence`, `remarks`) VALUES
(2, 'SIRIM', 'LoA', 'Industry', 100, '2024-08-15', '2024-09-05', '21 days', 'Research Collaboration', 'KiasExpert/pages/sectionG/addnational.php', '8001');

-- --------------------------------------------------------
--
-- Table structure for table `oe`
--

CREATE TABLE `oe` (
  `reference_no` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oe`
--

INSERT INTO `oe` (`reference_no`, `type`, `value`, `link`, `remarks`) VALUES
('KEW.PA-2  J28/BDC/H/15/1', 'Penggajian penyelidik / pengurusan penyelidikan (Tidak termasuk gaji staf akademik)', '10 000.00', 'HYPERLINK', '-'),
('KEW.PA-2  J28/BDC/H/15/2', 'Pembelian peralatan penyelidikan (Buku, Bahan Guna Habis,dll) ', '10 000.00', 'HYPERLINK', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `organisation`
--

CREATE TABLE `organisation` (
  `id` int(11) NOT NULL,
  `organisation_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `programme_title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `period` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organisation`
--

INSERT INTO `organisation` (`id`, `organisation_name`, `country`, `programme_title`, `type`, `activity`, `category`, `amount`, `start_date`, `expiry_date`, `period`, `link_evidence`, `remarks`) VALUES
(2, 'gsfdff', 'USA ', 'rty', 'MoU', 'jbjg', 'Community', 100, '2024-08-14', '2024-08-25', '11 days', 'dsd', 'fgj'),
(3, 'asfsg', 'malaysia', 'dsjdhfh', 'MoA', '', 'Industry', 100, '2024-08-16', '2024-08-25', '35', 'fbh', 'add'),
(4, 'gsfdff', 'malaysia', 'bbb', 'MoA', '', 'Industry', 100, '2024-08-15', '2024-08-31', '16 days', 'fbh', '800'),
(5, 'sjdkhd', 'malaysia', 'dasa', 'MoU', 'jbjg', 'Industry', 100, '2024-08-16', '2024-08-24', '8 days', 'FD', 'gh');

-- --------------------------------------------------------

--
-- Table structure for table `other_journal`
--

CREATE TABLE `other_journal` (
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
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other_journal`
--

INSERT INTO `other_journal` (`article_no`, `staff_id`, `staff_name`, `authors`, `industrial`, `international`, `national`, `document_title`, `source_title`, `document_type`, `volume`, `issue`, `page_start`, `page_end`, `year`, `issn_isbn`, `link_evidence`, `remarks`) VALUES
(12345, 1067, 'AMRAN BIN AYOB                          ', 'dg', 'Y', 'N', 'Y', 'hn', 'ghh', 'hk', '124', 'jgugu', 12356, 6778, 2024, 3456, 'hjkll', '3413');

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

--
-- Dumping data for table `other_publication`
--

INSERT INTO `other_publication` (`staff_id`, `staff_name`, `document_type`, `document_title`, `source_title`, `volume`, `issue`, `page_start`, `page_end`, `year`, `issn_isbn`, `link_evidence`, `remarks`) VALUES
(958, 'JALIL BIN OMAR                          ', 'OTHER JOURNALS', 'hn', 'ghh', '124', 'ghjy', 234, 12445, 23456, 32, 'dsd', 'ghkl');

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
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prod_tech`
--

INSERT INTO `prod_tech` (`staff_id`, `staff_name`, `prod_name`, `Type`, `faculty`, `year`, `comp_name`, `reference_no`, `gross_income`, `link`, `remarks`) VALUES
(124, 'Ahmad Roslan', 'Tongkat Ali Phyto Plus ', 'product commercial', 'Al-Quran & Hadis', '2009', 'Phyto Biznet Sdn.Bhd.', 'A12298', '93011.12', 'Hyperlink', 'No'),
(958, 'Ali', 'Tongkat Ali Phyto Plus ', 'licensing', 'Pengajian Bahasa Arab', '2010', 'SYKT ABC', 'JB1806178', '9,000.00', 'HYPERLINK', 'No');

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
(124, 11234, 'ROBERT', 'djsakdh', '2024-07-23', '2024-07-26', 'hdjhdh', 'National', 'gjnhnb', 800, 8000, 799, 80),
(125, 1274, 'HAMDANI BIN AHMAD                       ', 'djsakdh', '2024-07-23', '2024-07-26', 'hdjhdh', 'University', 'gjnhnb', 800, 8000, 799, 80),
(1324, 1067, '', 'djsakdh', '2024-07-24', '2024-07-28', 'hdjhdh', 'University', 'gjnhnb', 800, 8000, 799, 80);

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
  `end_date` varchar(255) NOT NULL,
  `page_end` int(11) NOT NULL,
  `duration_project` int(11) NOT NULL,
  `status_project` varchar(255) NOT NULL,
  `project_extension` varchar(255) NOT NULL,
  `project_extend` varchar(255) NOT NULL,
  `sponsor_cat` varchar(255) NOT NULL,
  `sponsor` varchar(255) NOT NULL,
  `grant_name` varchar(255) NOT NULL,
  `amt_pledge` int(11) NOT NULL,
  `amt_rec` int(11) NOT NULL,
  `amt_spent` int(11) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research_grant`
--

INSERT INTO `research_grant` (`project_id`, `staff_id`, `staff_name`, `faculty`, `st`, `staff_status`, `research_title`, `start_date`, `end_date`, `page_end`, `duration_project`, `status_project`, `project_extension`, `project_extend`, `sponsor_cat`, `sponsor`, `grant_name`, `amt_pledge`, `amt_rec`, `amt_spent`, `link_evidence`, `remarks`) VALUES
(123, 1067, 'AMRAN BIN AYOB                          ', 'J24-FAKULTI KEJURUTERAAN MEKANIKAL ', 'NON S&T', 'FULL TIME', 'djsakdh', '2024-08-06', '2024-08-16', 2345, 8009, 'ONGOING', 'YES', 'complete', 'NATIONAL', 'eghjk', 'gjnhnb', 13083, 3345, 2345, 'dsd', 'DSJDSH');

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
  `staff_status` varchar(255) NOT NULL,
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
  `amt_rec` int(11) NOT NULL,
  `amt_spent` int(11) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `research_project`
--

INSERT INTO `research_project` (`project_id`, `staff_id`, `staff_name`, `faculty`, `st`, `staff_status`, `research_title`, `start_date`, `end_date`, `page_end`, `duration_project`, `status_project`, `project_extension`, `project_extend`, `sponsor`, `sponsor_cat`, `grant_name`, `amt_pledge`, `amt_rec`, `amt_spent`, `link_evidence`, `remarks`) VALUES
(123, 958, 'JALIL BIN OMAR                          ', 'Pengajian Bahasa Arab', 'S&T', 'FULL TIME', 'djsakdh', '2024-08-06', '2024-08-10', 2345, 8009, 'COMPLETE', 'YES', 'complete', 'hdjhdh', 'UNIVERSITY', 'fdghj', 13083, 7999, 2345, 'juii', 'gh'),
(125, 1067, 'AMRAN BIN AYOB                          ', 'Teknologi Maklumat & Multimedia', 'S&T', 'FULL TIME', 'djsakdh', '2024-08-07', '2024-08-17', 89, 8009, 'ONGOING', 'YES', 'complete', 'hdjhdh', 'NATIONAL', 'gjnhnb', 13083, 791, 2345, 'fbh', 'add');

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
-- Table structure for table `staffinternational`
--

CREATE TABLE `staffinternational` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `programme_title` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffinternational`
--

INSERT INTO `staffinternational` (`staff_id`, `staff_name`, `programme_title`, `faculty`, `link_evidence`, `remarks`) VALUES
(1067, 'AMRAN BIN AYOB                          ', 'dsjdhfh', 'Teknologi Maklumat & Multimedia', 'hj', 'DSJDSH');

-- --------------------------------------------------------

--
-- Table structure for table `staffnational`
--

CREATE TABLE `staffnational` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `programme_title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `organisation_name` varchar(255) NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `expiry_date` varchar(255) NOT NULL,
  `link_evidence` varchar(255) NOT NULL,
  `remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `abroad`
--
ALTER TABLE `abroad`
  ADD PRIMARY KEY (`staff_id`);

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
-- Indexes for table `consultancies`
--
ALTER TABLE `consultancies`
  ADD PRIMARY KEY (`reference_no`);

--
-- Indexes for table `endownment`
--
ALTER TABLE `endownment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`reference_no`);

--
-- Indexes for table `hosp_lab`
--
ALTER TABLE `hosp_lab`
  ADD PRIMARY KEY (`reference_no`);

--
-- Indexes for table `impact_journal`
--
ALTER TABLE `impact_journal`
  ADD PRIMARY KEY (`article_no`);

--
-- Indexes for table `index_journal`
--
ALTER TABLE `index_journal`
  ADD PRIMARY KEY (`article_no`);

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
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`regis_no`);

--
-- Indexes for table `lect_form`
--
ALTER TABLE `lect_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `nationalorganisation`
--
ALTER TABLE `nationalorganisation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oe`
--
ALTER TABLE `oe`
  ADD PRIMARY KEY (`reference_no`);

--
-- Indexes for table `organisation`
--
ALTER TABLE `organisation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_journal`
--
ALTER TABLE `other_journal`
  ADD PRIMARY KEY (`article_no`);

--
-- Indexes for table `other_publication`
--
ALTER TABLE `other_publication`
  ADD PRIMARY KEY (`staff_id`);
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
-- Indexes for table `policy_paper`
--
ALTER TABLE `policy_paper`
  ADD PRIMARY KEY (`staff_id`);

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
-- Indexes for table `research`
--
ALTER TABLE `research`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `research_grant`
--
ALTER TABLE `research_grant`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `research_project`
--
ALTER TABLE `research_project`
  ADD PRIMARY KEY (`project_id`);


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
-- Indexes for table `staffinternational`
--
ALTER TABLE `staffinternational`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staffnational`
--
ALTER TABLE `staffnational`
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
-- AUTO_INCREMENT for table `endownment`
--
ALTER TABLE `endownment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lect_form`
--
ALTER TABLE `lect_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nationalorganisation`
--
ALTER TABLE `nationalorganisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `organisation`
--
ALTER TABLE `organisation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
