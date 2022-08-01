-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 01, 2022 at 02:31 PM
-- Server version: 5.7.38-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doc_patient`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Sl.no` int(100) NOT NULL,
  `ID` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Sl.no`, `ID`, `password`) VALUES
(1, 'Srijnan', 'Srijnan123');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `doc_name` varchar(50) NOT NULL,
  `SSF_ID` int(11) NOT NULL,
  `Doctors_Registration_No` int(11) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Specialty` varchar(50) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Mobile` bigint(11) NOT NULL,
  `Availability` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`doc_name`, `SSF_ID`, `Doctors_Registration_No`, `Gender`, `Specialty`, `Address`, `Mobile`, `Availability`) VALUES
('Dr Prabir Chatterjee', 2, 43557, 'Male', 'GP', 'Bankura', 9433310060, 'Thursday: 3PM- 4PM'),
('Dr Punyabrata Gun', 1, 44157, 'Male', 'GP', 'Kolkata', 9830922194, 'Monday: 9AM - 1PM\r\nTuesday: 9AM - 1PM\r\nWednesday: 9AM - 1PM'),
('Dr. Mrinmoy Bera', 3, 72762, 'Male', 'GP', 'Kolkata', 8777050259, 'Monday: 9AM - 1PM\r\nTuesday: 9AM - 1PM\r\nWednesday: 9AM - 1PM');

-- --------------------------------------------------------

--
-- Table structure for table `family_registration`
--

CREATE TABLE `family_registration` (
  `ID` int(10) NOT NULL,
  `Chief_Earner_Name` varchar(50) DEFAULT NULL,
  `Family_Registration_No` varchar(50) NOT NULL,
  `Date_of_Registration` date DEFAULT NULL,
  `Mobile_No` bigint(10) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Location_Code` varchar(50) NOT NULL,
  `fam1` varchar(100) NOT NULL,
  `fam2` varchar(100) NOT NULL,
  `fam3` varchar(100) NOT NULL,
  `fam4` varchar(100) NOT NULL,
  `fam5` varchar(100) NOT NULL,
  `fam6` varchar(100) NOT NULL,
  `fam7` varchar(100) NOT NULL,
  `fam8` varchar(100) NOT NULL,
  `rel1` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rel2` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rel3` varchar(100) NOT NULL,
  `rel4` varchar(100) NOT NULL,
  `rel5` varchar(100) NOT NULL,
  `rel6` varchar(100) NOT NULL,
  `rel7` varchar(100) NOT NULL,
  `rel8` varchar(100) NOT NULL,
  `Additional_members_1` varchar(50) DEFAULT NULL,
  `add_mem2` varchar(50) NOT NULL,
  `add_mem3` varchar(50) NOT NULL,
  `add_mem4` varchar(50) NOT NULL,
  `add_mem5` varchar(50) NOT NULL,
  `add_mem6` varchar(50) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `Education` varchar(255) DEFAULT NULL,
  `Monthly_Family_Income` varchar(100) DEFAULT NULL,
  `Marital_status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family_registration`
--

INSERT INTO `family_registration` (`ID`, `Chief_Earner_Name`, `Family_Registration_No`, `Date_of_Registration`, `Mobile_No`, `Address`, `Location_Code`, `fam1`, `fam2`, `fam3`, `fam4`, `fam5`, `fam6`, `fam7`, `fam8`, `rel1`, `rel2`, `rel3`, `rel4`, `rel5`, `rel6`, `rel7`, `rel8`, `Additional_members_1`, `add_mem2`, `add_mem3`, `add_mem4`, `add_mem5`, `add_mem6`, `amount`, `Education`, `Monthly_Family_Income`, `Marital_status`) VALUES
(1, 'Kole Barla', 'D07220020', '2022-07-09', 6207722421, 'Dumartoli', 'D', 'Kole Barla', 'Amar Barla', 'Bimal Barla', 'Vijay Barla', 'Vinay Barla', 'Mangri Barla', '', '', 'CWE', '\0à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 5 à¤¤à¤•', 'Rs.2,000-5000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(2, 'Etwa Surin', 'G07220022', '2022-07-10', NULL, 'Gayatoli', 'G', 'Etwa Surin', 'Sirmani Surin', 'Sapira Surin', 'Samuel Surin', 'Santiel Surin', '', '', '', 'Self', '\0souse', 'daughter', 'son', 'son', '', '', '', NULL, '', '', '', '', '', '', NULL, NULL, NULL),
(3, 'Ajay Tapno', 'G07220024', '2022-07-12', 0, 'Gayatoli', 'G', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '70', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Rs.2,000-5000', ''),
(4, 'Marsalan surin', 'H07220018', '2022-07-12', 1234567890, 'Khijri, samtoli', 'H', 'Marsalan surin', 'Jilini surin', 'Abhishek surin', 'Shrishti surin', 'Jolen surin', '', '', '', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤ªà¤¿à¤¤à¤¾', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(29, 'Sukwan Surin', 'H07220029', '2022-07-28', 8987992101, 'Khijri', 'H', 'Sukwan Surin', 'Agneshiya Surin', 'Siblan Surin', 'Mariyam Surin', 'Gosnar Surin', 'Premi Surin', 'Vishwasi Surin', '', 'CWE', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤ªà¤¿à¤¤à¤¾', 'à¤®à¤¾à¤¤à¤¾', 'à¤­à¤‡à¤¯à¤¾', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Above Rs.10,000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(5, 'Dipak Naik', 'K07220001', '2022-07-08', 7420079490, 'Kkulburu', 'K', 'Dipak Naik', 'Shila Devi', 'Baby Kumari', 'Prince Naik', '', '', '', '', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 11-12, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(6, 'Digu Surin ', 'K07220002', '2022-07-04', 7464008202, 'Kulburu ', 'K', 'Digu Surin ', 'Suray Surin ', ' Shoshan Surin ', 'Biji Surin ', 'Moylen Surin ', 'Munika Surin ', 'Mangri Surin', 'Jivanti Barla', 'CWE', 'Spouse', 'Son', 'Daughter', 'Daughter', 'Daughter', 'Mother', 'Daughter-in-law', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Rs.2,000-5000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(7, 'Silash Surin', 'K07220003', '2022-07-06', 6200645197, 'kulburu', 'K', 'Silash Surin', 'Alexander Surin', 'Kolostika samad', 'Riyona Surin', 'Yamal Surin', '', '', '', 'CWE', '\0à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¤¹à¥‚', 'à¤ªà¥‹à¤¤à¥€', 'à¤ªà¥‹à¤¤à¤¾', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Above Rs.10,000', 'à¤µà¤¿à¤§à¤µà¤¾ / à¤…à¤²à¤— (Widow/ Separated)'),
(8, 'Jolen Surin', 'K07220004', '2022-07-04', 8084224687, 'Kulburu', 'K', 'Jolen Surin', 'Nimunti Surin', 'Sugandhit Surin', 'Saidan Surin', 'Snehlata Surin', 'Suman Surin', 'Rahil Surin', '', 'CWE', 'Spouse', 'Daughter', 'Daughter', 'Daughter', 'Daughter', 'Other', 'Realtionship', '', '', '', '', '', '', '50', '10 . à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'Rs.2,000-5000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(9, 'Baji Munda', 'K07220005', '2022-07-19', 7070131852, 'Kulburu', 'K', 'Baji Munda', '', '', '', '', '', '', '', 'CWE', '\0Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Above Rs.10,000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(10, 'Emanuel Surin', 'K07220006', '2022-07-05', 7033528240, 'Kulburu', 'K', 'Emanuel Surin', 'Jawanti Surin', 'Namani Surin', 'Emanuel Kongari', '', '', '', '', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤ªà¥‹à¤¤à¤¾', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 5 à¤¤à¤•', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(11, 'Sutughan Surin', 'K07220007', '2022-07-04', 7783873772, 'Kulburu', 'K', 'Sutughan Surin', 'Arsaliani Surin', 'Premdas Surin', 'Nirali Surin', 'Jaideep Surin', 'Sushila Surin', 'Sunaina Surin', '', 'CWE', 'Spouse', 'Son', 'Daughter', 'Son', 'Daughter', 'Grand Daughter', 'Realtionship', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(12, 'Soma Surin', 'K07220008', '2022-07-04', 0, 'Kulburu', 'K', 'Soma Surin', 'Helen Surin', 'Puran Surin', 'Pawan Surin', '', '', '', '', 'CWE', 'Spouse', 'Son', 'Son', 'Realtionship', 'Realtionship', 'Realtionship', 'Realtionship', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(13, 'Suleman Surin', 'K07220009', '2022-07-01', 9771061613, 'Kulburu', 'K', 'Suleman Surin', 'Priya Surin', 'Habil Surin', 'Bilasi Surin', 'Roshanti Surin', 'Ayush Surin', 'Smriti Surin', '', 'CWE', 'Spouse', 'Brother', 'Sister', 'Sister', 'son', 'Daughter', '', '', '', '', '', '', '', '70', 'à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'Rs.2,000-5000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(14, 'Junul Surin', 'K07220010', '2022-07-05', 9973983398, 'Kulburu', 'K', 'Junul Surin', 'Juliani Surin', 'Jyotish Surin', 'Munika Horo', 'Kiran Surin', 'Premi Surin', 'Ismail Surin', '', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¤¹à¥‚', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤ªà¥‹à¤¤à¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Rs.2,000-5000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(15, 'Santosh Surin', 'K07220011', '2022-07-01', 9162898204, 'Kulburu', 'K', 'Santosh Surin', 'Seteng Surin', 'Senen Surin', 'Akash Surin', '', '', '', '', 'CWE', 'Spouse', 'Daughter', 'Son', 'Realtionship', '', '', '', '', '', '', '', '', '', '50', 'à¤¨à¤¾à¤®à¤¾à¤‚à¤•à¤¿à¤¤ à¤¸à¥à¤¨à¤¾à¤¤à¤•', 'Above Rs.10,000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(16, 'Pawal Surin', 'K07220012', '2022-07-01', 7091124254, 'Kulburu', 'K', 'Pawal Surin', 'Ilisaba Surin', 'Ashish Surin', 'Atul Surin', 'Josinta Topno', 'Birjinia Bhenga', 'Praveen Surin', '', 'CWE', 'Spouse', 'Grandson', 'Grandson', 'Other', 'Other', 'Other', '', '', '', '', '', '', '', '50', 'à¤¨à¤¾à¤®à¤¾à¤‚à¤•à¤¿à¤¤ à¤¸à¥à¤¨à¤¾à¤¤à¤•', 'Above Rs.10,000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(17, 'Sugar Surin', 'K07220013', '2022-07-06', 8235953489, 'Kulburu', 'K', 'Sugar Surin', 'Jereni Surin', 'Martha Surin', 'Leveyani Surin', 'Aster Surin', 'Ribika Surin', 'Eaden Surin', '', 'CWE', 'Spouse', 'Daughter', 'Daughter', 'Daughter', 'Daughter', 'Daughter', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Above Rs.10,000', 'à¤µà¤¿à¤§à¤µà¤¾ / à¤…à¤²à¤— (Widow/ Separated)'),
(18, 'Saban Kalyan Topno', 'K07220014', '2022-07-09', 0, 'Kulburu', 'K', 'Saban Kalyan Topno', '', '', '', '', '', '', '', 'CWE', '', '', '', '', '', '', '', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Above Rs.10,000', 'à¤µà¤¿à¤§à¤µà¤¾ / à¤…à¤²à¤— (Widow/ Separated)'),
(19, 'Naimon Surin', 'K07220015', '2022-07-09', 9973772157, 'kulburu', 'K', 'Naimon Surin', 'Telani Surin', 'Uttam Surin', '', '', '', '', '', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Rs.2,000-5000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(20, 'Binodi Surin', 'K07220019', '2022-07-09', 9508215109, 'kulburu', 'K', 'binodi surin', 'Sifin Surin', 'Askeran Surin', 'Suman Surin', 'Parsant Surin', 'Matan Surin', '', '', 'CWE', '\0Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Rs.2,000-5000', 'à¤µà¤¿à¤§à¤µà¤¾ / à¤…à¤²à¤— (Widow/ Separated)'),
(21, 'Albis Surin', 'K07220021', '2022-07-02', 0, 'Kulburu', 'K', 'Albis Surin', 'Clara Surin', 'Shristi Surin', 'Anisa Surin', '', '', '', '', 'CWE', 'Spouse', 'Daughter', 'Daughter', '', '', 'Realtionship', 'Realtionship', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Rs.2,000-5000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(22, 'Salan Surin', 'K07220025', '2022-07-04', 8210166093, 'Kulburu', 'K', 'Salan Surin', 'Yakub Surin', 'Jiden Tiru', '', '', '', '', '', 'CWE', 'Father', 'Spouse', 'Realtionship', 'Realtionship', 'Realtionship', 'Realtionship', 'Realtionship', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 11-12, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(23, 'Dilip Ram ', 'K07220027', '2022-07-27', 8252100065, 'kulburu', 'K', 'Dilip Ram ', 'Muni Devi', 'Roshni Kumari', 'Reshmi Kumari', 'Nisha Kumari', 'Siwanand Ram', '', '', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 5 à¤¤à¤•', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(25, 'Bashanti Surin', 'S07220016', '2022-07-09', 9871966053, 'Kasatoli', 'S', 'Bashanti Surin', 'Rut Surin', 'Bilasi Surin', 'Harshit Surin', '', '', '', '', 'CWE', 'à¤ªà¥‹à¤¤à¥€', 'à¤ªà¥‹à¤¤à¥€', 'à¤ªà¥‹à¤¤à¤¾', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾ à¤¨à¤¹à¥€à¤‚', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(26, 'Rajesh kongadi', 'S07220017', '2022-07-12', 1234567890, 'kulburu', 'S', 'Rajesh kongadi', 'Susana kongadi', 'Parmod kongadi', 'Pardeep kongadi', 'Nisi guria', 'Manhem surin', '', '', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤…à¤¨à¥à¤¯', 'à¤…à¤¨à¥à¤¯', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', 'à¤•à¤•à¥à¤·à¤¾ 5 à¤¤à¤•', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(27, 'Niranjan surin', 'U07220023', '2022-07-13', 8830577631, 'kusumtoli', 'U', 'Niranjan surin', 'jasmanti surin', 'Sandeep surin', 'Dilbar surin', 'Asha surin', 'Ashma surin', 'Elya surin', 'Suleman surin', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¤¾', 'Manisha surin (bahu)', 'Anupriya surin (potii)', '', '', '', '', '70', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨à¤¹à¥€à¤‚', 'Rs.2,000-5000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married'),
(28, 'Junas surin', 'U07220026', '2022-07-13', 6202894115, 'kusumtoli', 'U', 'Junas surin', 'Margrate surin', 'Nirmala surin', 'Prame chand surin', 'Ranuka surin', 'Saroj surin', '', '', 'CWE', '\0à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¤¾', 'à¤¬à¥‡à¤Ÿà¥€', 'à¤¬à¥‡à¤Ÿà¥€', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', 'Realtionship (à¤°à¤¿à¤¶à¥à¤¤à¤¾)', '', '', '', '', '', '', '50', '10 . à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'Below 2000', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married');

-- --------------------------------------------------------

--
-- Table structure for table `hw_reg`
--

CREATE TABLE `hw_reg` (
  `hwname` varchar(100) NOT NULL,
  `User_ID` bigint(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hw_reg`
--

INSERT INTO `hw_reg` (`hwname`, `User_ID`, `pass`) VALUES
('Srijnan Sanyal', 426, 'Srijnan123'),
('Biji Surin', 10104, 'Biji123'),
('Saidan Surin', 30601, 'Saidan123');

-- --------------------------------------------------------

--
-- Table structure for table `medical_consultant`
--

CREATE TABLE `medical_consultant` (
  `date` date NOT NULL,
  `Day_Card_No` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Weight` int(11) NOT NULL,
  `Height` int(11) NOT NULL,
  `Pulse_Rate` int(11) NOT NULL,
  `Systolic_Blood_Pressure` varchar(50) NOT NULL,
  `Diastolic_Blood_Pressure` varchar(50) NOT NULL,
  `Temperature` varchar(100) NOT NULL,
  `SPO2` varchar(50) NOT NULL,
  `Blood_Sugar` varchar(10) NOT NULL,
  `Blood_Sugar_level` int(11) NOT NULL,
  `Remarks` varchar(255) NOT NULL,
  `current_problems` varchar(255) NOT NULL,
  `Other_comment` varchar(100) NOT NULL,
  `Type_of_Consulting` varchar(100) NOT NULL,
  `Assigned_Doctor` varchar(100) NOT NULL,
  `Consultation_Date` date NOT NULL,
  `Consultation_Time` time NOT NULL,
  `Patient_Registration_Number` varchar(100) DEFAULT NULL,
  `ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_consultant`
--

INSERT INTO `medical_consultant` (`date`, `Day_Card_No`, `Name`, `Age`, `Gender`, `Weight`, `Height`, `Pulse_Rate`, `Systolic_Blood_Pressure`, `Diastolic_Blood_Pressure`, `Temperature`, `SPO2`, `Blood_Sugar`, `Blood_Sugar_level`, `Remarks`, `current_problems`, `Other_comment`, `Type_of_Consulting`, `Assigned_Doctor`, `Consultation_Date`, `Consultation_Time`, `Patient_Registration_Number`, `ID`) VALUES
('2022-07-28', '0', 'Etwa Surin', 34, 'Female', 78, 67, 56, '45', '67', '98', '24', 'none', 0, 'à¤†à¤‚à¤– à¤•à¤¾ à¤«à¥‡à¤•à¤¾à¤ªà¤¾à¤¨', 'à¤•à¥‹à¤®à¤¾à¤° à¤¦à¤°à¥à¤¦,à¤«à¥‰à¤²à¥‹à¤…à¤ª à¤šà¥‡à¤• à¤…à¤ª ', '', 'Real time', 'Dr Punyabrata Gun', '2022-07-28', '18:30:00', 'G0722002201', 1),
('2022-07-10', '1', 'Shila Devi', 0, 'Female', 34, 0, 0, '', '', '', '', '', 0, '', '', '', '', 'Dr. Mrinmoy Bera', '2022-07-10', '11:00:00', 'K0722', 2),
('2022-07-10', '10', 'Arsaliani Surin', 47, 'Female', 45, 158, 96, '107', '68', '96.6', '96', '', 0, '', 'Headache, fever at night', '', '', 'Dr. Mrinmoy Bera', '2022-07-10', '12:00:00', 'K07220003302', 11),
('2022-07-23', '10002', 'Saidan Surin', 21, 'Female', 1, 1, 1, '1', '1', '1', '1', 'No', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤¬à¥à¤–à¤¾à¤°,à¤¸à¤°à¤¦à¤°à¥à¤¦', 'No', 'Real time', 'Dr Punyabrata Gun', '2022-07-23', '12:21:00', 'K0722000404', 27),
('2022-07-26', '1001', 'Nimunti Surin', 52, 'Female', 1, 1, 1, '1', '2', '2', '2', 'No', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤¨à¤¿à¤¯à¤®à¤¿à¤¤ à¤šà¥‡à¤• à¤…à¤ª', 'headache', 'Real time', 'Dr Punyabrata Gun', '2022-07-26', '18:24:00', 'K0722000402', 24),
('2022-07-26', '1002', 'Nimunti Surin', 52, 'Female', 22, 22, 22, '22', '22', '22', '22', 'No', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤«à¥‰à¤²à¥‹à¤…à¤ª à¤šà¥‡à¤• à¤…à¤ª ,à¤›à¤¾à¤¤à¥€ à¤®à¥‡à¤‚ à¤¦à¤°à¥à¤¦,à¤°à¤•à¥à¤¤à¤šà¤¾à¤ª', '', 'Real time', 'Dr Punyabrata Gun', '2022-07-26', '18:17:00', 'K0722000402', 25),
('2022-07-09', '11', 'Shutughan Surin', 58, 'Male', 50, 171, 67, '135', '79', '95.7', '97', 'no', 0, '', 'chest pain, stomach pain, breathing trouble', '', '', 'Dr. Mrinmoy Bera', '2022-07-10', '11:15:52', NULL, 12),
('2022-07-09', '12', 'Binodi Surin', 63, 'Female', 36, 146, 89, '142', '91', '96.5', '96', 'no', 0, '', 'Body ache, knee pain, backache ', '', 'Realtime', 'Dr. Mrinmoy Bera', '2022-07-10', '00:00:00', 'K07220001901', 13),
('2022-07-10', '13', 'Pawal Surin', 69, 'Male', 45, 158, 71, '118', '72', '', '98', '', 0, '', 'Headache, ', '', '', 'Dr. Mrinmoy Bera', '2022-07-10', '13:08:48', 'K0722', 14),
('2022-07-16', '14', 'Nimunti Surin', 52, 'Female', 51, 158, 74, '115', '77', '97.1', '95', 'None', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤¸à¤¾à¤‚à¤¸ à¤²à¥‡à¤¨à¥‡ à¤®à¥‡à¤‚ à¤¤à¤•à¤²à¥€à¤«,à¤›à¤¾à¤¤à¥€ à¤®à¥‡à¤‚ à¤¦à¤°à¥à¤¦,à¤¸à¤°à¤¦à¤°à¥à¤¦,à¤ªà¥€à¤  à¤¦à¤°à¥à¤¦,à¤œà¥‹à¤¡à¤¼à¥‹à¤‚ à¤•à¤¾ à¤¦à¤°à¥à¤¦', '', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-10', '12:30:00', 'K07220003102', 15),
('2022-07-16', '15', 'Shila Devi', 23, 'Female', 33, 147, 70, '100', '54', '97', '97', 'None', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤¦à¥à¤°à¥à¤¬à¤²à¤¤à¤¾', '', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-10', '11:15:00', 'K0722000402', 16),
('2022-07-09', '2', 'Emanuel Surin', 64, 'Male', 62, 166, 71, '147', '77', '', '96', 'NO', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'Old leg injury, infection', 'Purana Paw Ghaw ', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-10', '11:10:00', 'K07220004401', 3),
('2022-07-16', '20', 'Kolostika Samad', 24, 'Female', 44, 148, 77, '99', '63', '97', '96', 'None', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤¸à¤°à¤¦à¤°à¥à¤¦,à¤¦à¥à¤°à¥à¤¬à¤²à¤¤à¤¾', '', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-10', '01:45:00', 'K07220004903', 17),
('2022-07-18', '22', 'Naimon Surin', 70, 'Male', 49, 158, 100, '149', '76', '97', '98', 'None', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤œà¥‹à¤¡à¤¼à¥‹à¤‚ à¤•à¤¾ à¤¦à¤°à¥à¤¦,à¤¦à¥à¤°à¥à¤¬à¤²à¤¤à¤¾', '', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-10', '02:55:00', 'K07220001501', 18),
('2022-07-18', '23', 'Jolen Surin', 63, 'Male', 48, 163, 71, '120', '68', '98', '95', 'None', 0, 'à¤†à¤‚à¤– à¤•à¤¾ à¤«à¥‡à¤•à¤¾à¤ªà¤¾à¤¨,à¤¶à¤°à¥€à¤° à¤®à¥‡à¤‚ à¤¯à¤¾ à¤ªà¥ˆà¤° à¤®à¥‡à¤‚ à¤¸à¥‚à¤œà¤¨', 'à¤¸à¤¾à¤‚à¤¸ à¤²à¥‡à¤¨à¥‡ à¤®à¥‡à¤‚ à¤¤à¤•à¤²à¥€à¤«,à¤—à¤²à¥‡ à¤•à¥€ à¤ªà¤°à¥‡à¤¶à¤¾à¤¨à¥€,à¤›à¤¾à¤¤à¥€ à¤®à¥‡à¤‚ à¤¦à¤°à¥à¤¦,à¤—à¤°à¥à¤¦à¤¨ à¤¦à¤°à¥à¤¦,à¤†à¤à¤– à¤•à¥€ à¤ªà¤°à¥‡à¤¶à¤¾à¤¨à¥€,à¤—à¥ˆà¤¸ / à¤…à¤®à¥à¤²à¤¤à¤¾', '', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-10', '01:15:00', 'K07220003101', 19),
('2022-07-18', '24', 'Santosh Surin', 37, 'Male', 60, 166, 73, '133', '79', '96', '94', 'None', 0, 'à¤†à¤‚à¤– à¤•à¤¾ à¤«à¥‡à¤•à¤¾à¤ªà¤¾à¤¨', 'à¤­à¥‚à¤– à¤®à¥‡à¤‚ à¤•à¤®à¥€,à¤œà¥‹à¤¡à¤¼à¥‹à¤‚ à¤•à¤¾ à¤¦à¤°à¥à¤¦,à¤¦à¥à¤°à¥à¤¬à¤²à¤¤à¤¾,à¤†à¤‚à¤–à¥‹à¤‚ à¤•à¥€ à¤°à¥‹à¤¶à¤¨à¥€ à¤•à¥‡ à¤¸à¤¾à¤¥ à¤¸à¤®à¤¸à¥à¤¯à¤¾', '', 'Real time', 'Assigned Doctor', '2022-07-10', '02:35:00', 'K07220001101', 20),
('2022-07-16', '3', 'Sutughan Surin', 49, 'Male', 50, 171, 95, '126', '89', '95.7', '97', 'N0ne', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤¸à¤¾à¤‚à¤¸ à¤²à¥‡à¤¨à¥‡ à¤®à¥‡à¤‚ à¤¤à¤•à¤²à¥€à¤«,à¤›à¤¾à¤¤à¥€ à¤®à¥‡à¤‚ à¤¦à¤°à¥à¤¦,à¤ªà¥€à¤  à¤¦à¤°à¥à¤¦', '', 'Real time', 'Dr Prabir Chatterjee', '2022-07-13', '10:45:00', 'K07220003301', 4),
('2022-07-28', '30', 'Nimunti Surin', 52, 'Female', 52, 167, 67, '117', '80', '95', '96', 'No', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤«à¥‰à¤²à¥‹à¤…à¤ª à¤šà¥‡à¤• à¤…à¤ª ,à¤¸à¤¾à¤‚à¤¸ à¤²à¥‡à¤¨à¥‡ à¤®à¥‡à¤‚ à¤¤à¤•à¤²à¥€à¤«,à¤›à¤¾à¤¤à¥€ à¤®à¥‡à¤‚ à¤¦à¤°à¥à¤¦,à¤ªà¥€à¤  à¤¦à¤°à¥à¤¦,Other', 'Pet Dard. Kamar Dard.', 'Differed', 'Dr. Mrinmoy Bera', '2022-08-01', '11:00:00', 'K0722000402', 21),
('2022-07-28', '33', 'Nimunti Surin', 52, 'Female', 33, 33, 33, '33', '33', '33', '33', 'No', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤«à¥‰à¤²à¥‹à¤…à¤ª à¤šà¥‡à¤• à¤…à¤ª ,à¤¸à¤¾à¤‚à¤¸ à¤²à¥‡à¤¨à¥‡ à¤®à¥‡à¤‚ à¤¤à¤•à¤²à¥€à¤«,à¤›à¤¾à¤¤à¥€ à¤®à¥‡à¤‚ à¤¦à¤°à¥à¤¦', '', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-28', '12:12:00', 'K0722000402', 22),
('2022-07-09', '4', 'Telani Surin', 62, 'Female', 50, 147, 83, '148', '78', '97.1', '99', '', 0, '', 'Skin disease, high BP', 'Skin disease', '', 'Dr. Mrinmoy Bera', '2022-07-10', '12:00:00', 'K07220001502', 5),
('2022-07-28', '44', 'Nimunti Surin', 52, 'Female', 44, 44, 44, '44', '44', '44', '44', '', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤¸à¤¾à¤‚à¤¸ à¤²à¥‡à¤¨à¥‡ à¤®à¥‡à¤‚ à¤¤à¤•à¤²à¥€à¤«,à¤«à¤¿à¤Ÿà¤¨à¥‡à¤¸ à¤ªà¥à¤°à¤®à¤¾à¤£ à¤ªà¤¤à¥à¤°,à¤¤à¥à¤µà¤šà¤¾ à¤•à¥€ à¤à¤²à¤°à¥à¤œà¥€ à¤”à¤° à¤¸à¤‚à¤•à¥à¤°à¤®à¤£', '', 'Differed', 'Dr. Mrinmoy Bera', '2022-08-01', '12:18:00', 'K0722000402', 23),
('2022-07-09', '5', 'Soma Surin', 60, 'Male', 46, 168, 83, '100', '62', '96.4', '97', 'no', 0, '', 'Neck, breathing trouble, bad eye sight', '', '', 'Dr. Mrinmoy Bera', '2022-07-10', '11:30:00', 'K07220002701', 6),
('2022-07-26', '59002', 'Salan Surin', 24, 'Male', 78, 138, 76, '62', '67', '98', '10', 'none', 0, 'à¤¹à¤¾à¤¥ à¤•à¥‡ à¤¨à¤¾à¤–à¥à¤¨ à¤®à¥‡à¤°à¥‡ à¤¸à¥à¤œà¤¾à¤¨', 'à¤«à¥‰à¤²à¥‹à¤…à¤ª à¤šà¥‡à¤• à¤…à¤ª ,à¤¬à¥à¤–à¤¾à¤°', '', 'Real time', 'Dr Punyabrata Gun', '2022-07-27', '11:45:00', 'K0722002501', 28),
('2022-07-09', '6', 'Bashanti Devi', 60, 'Female', 34, 153, 80, '125', '73', '97.7', '95', '', 0, '', 'breathing trouble, cough, BP', '', '', 'Dr. Mrinmoy Bera', '2022-07-10', '11:45:00', 'S0722001601', 7),
('2022-07-09', '7', 'Uttam Surin', 27, 'Female', 35, 162, 115, '122', '80', '96.6', '99', 'no', 0, '', 'Eye sight problem, low hemoglobin, weakness, giddiness', 'Takes iron capsules', '', 'Dr. Mrinmoy Bera', '2022-07-10', '12:30:00', 'K0722001503', 8),
('2022-07-28', '7889', 'Etwa Surin', 34, 'Female', 78, 60, 98, '78', '89', '98', '65', 'none', 0, 'à¤†à¤‚à¤– à¤•à¤¾ à¤«à¥‡à¤•à¤¾à¤ªà¤¾à¤¨', 'à¤«à¥‰à¤²à¥‹à¤…à¤ª à¤šà¥‡à¤• à¤…à¤ª ', '', 'Real time', 'Dr Prabir Chatterjee', '2022-07-28', '16:08:00', 'G0722002201', 26),
('2022-07-09', '8', '<br /><b>Notice</b>:  Undefined variable: name in <b>/home/i2l2patp0m5w/public_html/medical_consulta', 0, '<br /><b>Notice</b>:  Undefined variable: gender i', 48, 160, 98, '136', '73', '97.2', '98', '', 0, 'à¤¶à¤°à¥€à¤° à¤®à¥‡à¤‚ à¤¯à¤¾ à¤ªà¥ˆà¤° à¤®à¥‡à¤‚ à¤¸à¥‚à¤œà¤¨', 'à¤ªà¥ˆà¤° / à¤˜à¥à¤Ÿà¤¨à¥‡ à¤•à¤¾ à¤¦à¤°à¥à¤¦,à¤—à¤°à¥à¤¦à¤¨ à¤¦à¤°à¥à¤¦,à¤ªà¥€à¤  à¤¦à¤°à¥à¤¦,à¤¹à¤¾à¤¥ à¤•à¤¾ à¤¦à¤°à¥à¤¦,à¤®à¤§à¥à¤®à¥‡à¤¹', 'Knee pain. Taking medicine', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-10', '12:30:00', '<br /><b>Notice</b>:  Undefined variable: reg_no in <b>/home/i2l2patp0m5w/public_html/medical_consul', 9),
('2022-07-09', '9', 'Jolen Surin', 63, 'Male', 48, 163, 71, '120', '68', '95.2', '95', 'no', 0, '', 'Cough, TB detected before', '', '', 'Dr. Mrinmoy Bera', '2022-07-10', '12:00:00', NULL, 10),
('2022-07-28', 'D07220011', 'Atul Surin', 18, 'Male', 55, 55, 55, '55', '55', '55', '55', '', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤¸à¤¾à¤‚à¤¸ à¤²à¥‡à¤¨à¥‡ à¤®à¥‡à¤‚ à¤¤à¤•à¤²à¥€à¤«,à¤›à¤¾à¤¤à¥€ à¤®à¥‡à¤‚ à¤¦à¤°à¥à¤¦', 'Bad dreams', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-28', '20:34:00', 'K0722001204', 32),
('2022-07-28', 'D07220033', 'Saidan Surin', 21, 'Female', 50, 50, 50, '50', '50', '50', '50', '', 0, 'à¤•à¥‹à¤ˆ à¤¨à¤¹à¥€à¤‚', 'à¤•à¥‹à¤®à¤¾à¤° à¤¦à¤°à¥à¤¦,à¤¬à¥à¤–à¤¾à¤°,à¤—à¤²à¥‡ à¤•à¥€ à¤ªà¤°à¥‡à¤¶à¤¾à¤¨à¥€', 'This is any other comment', 'Real time', 'Dr. Mrinmoy Bera', '2022-07-28', '21:20:00', 'K0722000404', 33);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_bank`
--

CREATE TABLE `medicine_bank` (
  `medicine_name` varchar(100) NOT NULL,
  `batch_no` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `pack_type` varchar(50) NOT NULL,
  `sell_unit` varchar(50) NOT NULL,
  `current_stock` int(11) NOT NULL,
  `reorder_level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine_storage`
--

CREATE TABLE `medicine_storage` (
  `Sl.no` int(11) NOT NULL,
  `Product_name` varchar(100) NOT NULL,
  `Generic_name` varchar(100) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Total_Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine_storage`
--

INSERT INTO `medicine_storage` (`Sl.no`, `Product_name`, `Generic_name`, `Quantity`, `Price`, `Total_Amount`) VALUES
(1, 'Xeroworn 400', 'Albendazole 400', 100, 0, 0),
(2, 'Biodipin 10', 'Amlodipine 10', 200, 0, 0),
(3, 'Biodipin 2.5', 'Amlodipine 2.5', 200, 0, 0),
(4, 'Amopress 5', 'Amlodipine 5', 600, 0, 0),
(5, 'Elmox-125', 'Amoxyxillin 125', 200, 0, 0),
(6, 'Elmox-250', 'Amoxyxillin 250', 300, 0, 0),
(7, 'Moxidal 500', 'Amoxyxillin 500', 200, 0, 0),
(8, 'Amtipax-10', 'Amytriptyline 10', 500, 0, 0),
(9, 'Amtipax-25', 'Amytriptyline 25', 200, 0, 0),
(10, 'Ecosprin-150', 'Aspirin 150', 350, 0, 0),
(11, 'Ecosprin-75', 'Aspirin 75', 350, 0, 0),
(12, 'Perten 25', 'ATENOLOL 25', 280, 0, 0),
(13, 'Perten 50', 'ATENOLOL 50', 280, 0, 0),
(14, 'Atoder 10', 'Atorvastatine 10', 400, 0, 0),
(15, 'Onazit 250', 'Azithromycine 250', 60, 0, 0),
(16, 'Azikm 500', 'Azythromycin 500', 60, 0, 0),
(17, 'BETNOVATE Oint', 'BETAMETHASONE VALERATE OINTMENT', 20, 0, 0),
(18, 'Bylax-5', 'Bisacodyl', 200, 0, 0),
(19, 'Cefixza 200', 'Cefixime 200', 200, 0, 0),
(20, 'Cetfast', 'CETRIZINE 10', 500, 0, 0),
(21, 'Ceequin 250', 'CHLOROQUIN 250', 200, 0, 0),
(22, 'Cinirone 25', 'CINNARIZINE 25', 200, 0, 0),
(23, 'Floxip 250', 'CIPROFLOXACIN 250', 200, 0, 0),
(24, 'Ciprodac 500', 'CIPROFLOXACIN 500', 200, 0, 0),
(25, 'Cipbid', 'CIPROFLOXACIN EYE DROP', 25, 0, 0),
(26, 'Lonipax', 'CLONAZEPAM 0.5', 200, 0, 0),
(27, 'CO-TRIMOXAZOLE DS', 'CO-TRIMOXAZOLE DS', 200, 0, 0),
(28, 'CO-TRIMOXAZOLE SS', 'CO-TRIMOXAZOLE SS', 200, 0, 0),
(29, 'DERIPHYLLIN RETARD 300', 'DERIPHYLLIN RETARD 300', 300, 0, 0),
(30, 'Vovefen 50', 'Diclofenac sodium 50', 200, 0, 0),
(31, 'Hetrazan 100', 'Diethylcarbamazine citrate 100', 300, 0, 0),
(32, 'Eldostal 10', 'Domperidone 10', 500, 0, 0),
(33, 'Doxy 100', 'Doxycycline 100', 160, 0, 0),
(34, 'Elpril 10', 'Enalapril 10', 200, 0, 0),
(35, 'Eopril 2.5', 'Enalapril 2.5', 200, 0, 0),
(36, 'Enalros-5', 'Enalapril 5', 400, 0, 0),
(37, 'Famonext 40', 'Famotidine 40', 490, 0, 0),
(38, 'Fenoday 160', 'Fenofibrate 160', 100, 0, 0),
(39, 'Ferrous Sulphate', 'Ferrous Sulphate', 2000, 0, 0),
(40, 'Foliquik 5', 'Folic acid', 600, 0, 0),
(41, 'Lasiwin 40 mg', 'Frusemide 40', 200, 0, 0),
(42, 'Gabavan 100', 'Gabapentine 100', 200, 0, 0),
(43, 'Gabavan 300', 'Gabapentine 300', 200, 0, 0),
(44, 'Gyentop', 'Gentamicin cream', 25, 0, 0),
(45, 'Glirum 5', 'Glipizide 5', 400, 0, 0),
(46, 'Aydrazide 12.5', 'Hydrochlorothyazide 12.5', 200, 0, 0),
(47, 'Hydronol 25', 'Hydrochlorothyazide 25', 200, 0, 0),
(48, 'Brufen 200', 'Ibuprofen 200', 600, 0, 0),
(49, 'Brifen 400 mg', 'Ibuprofen 400', 900, 0, 0),
(50, 'Indocap', 'Indomethacin-25', 200, 0, 0),
(51, 'Tetanus vaccine', 'Inj Tetanus toxoid', 50, 0, 0),
(52, 'Isobgul', 'Isabgul', 10, 0, 0),
(53, 'Itrofic 100', 'Itraconazole', 100, 0, 0),
(54, 'Elastran 25', 'Losartan 25', 200, 0, 0),
(55, 'Elsartan 50', 'Losartan 50', 200, 0, 0),
(56, 'Elcephase 1000', 'Metformin 1000', 400, 0, 0),
(57, 'Metros 500', 'Metformin 500', 400, 0, 0),
(58, 'Perinorm 10', 'Metoclopramide 10', 500, 0, 0),
(59, 'Flagyl 200', 'Metroniazole 200', 1, 0, 0),
(60, 'Flagyl 400', 'Metroniazole 400', 1, 0, 0),
(61, 'Laxific plus', 'Milk of Magnesia + sodium', 10, 0, 0),
(62, 'Monocare 10', 'Montelukast 10', 200, 0, 0),
(63, 'Nasivion 0.05%', 'Nasivion Adult', 10, 0, 0),
(64, 'Nasivion 0.025%', 'Nasivion Paed', 10, 0, 0),
(65, 'Martifur', 'Nitrofurantoin 100', 200, 0, 0),
(66, 'Norfol N', 'Norlut-N', 200, 0, 0),
(67, 'Eldeom 20', 'Omarpazole 20', 600, 0, 0),
(68, 'Parimol kid', 'Paracetamol 125', 200, 0, 0),
(69, 'Flumol 500', 'Paracetamol 500', 500, 0, 0),
(70, 'Pacmathrin lotion', 'Permethrin lotion', 20, 0, 0),
(71, 'El-pio-15', 'Pioglitazone-15', 200, 0, 0),
(72, 'Topovid solution', 'POVIDONE-IODINE SOLUTION', 10, 0, 0),
(73, 'Ridslone 10', 'Prednisolone 10', 200, 0, 0),
(74, 'Wysolone 5', 'Prednisolone 5', 200, 0, 0),
(76, 'Asthalin-2', 'Salbutamol-2', 200, 0, 0),
(77, 'Asthalin-4', 'Salbutamol-4', 200, 0, 0),
(79, 'Promasol Syp', 'Syrup Phenergan', 10, 0, 0),
(80, 'Tenebetic 20', 'Teneligliptin 20', 200, 0, 0),
(81, 'Urea-10', 'Urea-10', 10, 0, 0),
(82, 'Beplex', 'Vit. B-complex', 1000, 0, 0),
(83, 'Zinc 50', 'Zinc 50', 200, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `patient_registration`
--

CREATE TABLE `patient_registration` (
  `ID` int(100) NOT NULL,
  `Date_of_Enrollment` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `per_reg` varchar(100) NOT NULL,
  `pat_ticket_id` varchar(50) NOT NULL,
  `rel_cwe` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `edu` varchar(50) NOT NULL,
  `prof` varchar(50) NOT NULL,
  `mar_stat` varchar(50) NOT NULL,
  `height` varchar(50) NOT NULL,
  `weight` varchar(50) NOT NULL,
  `temp` varchar(50) NOT NULL,
  `pulse` varchar(50) NOT NULL,
  `s_bp` varchar(50) NOT NULL,
  `d_bp` varchar(50) NOT NULL,
  `spo2` varchar(50) NOT NULL,
  `diab` varchar(50) NOT NULL,
  `asthma` varchar(50) NOT NULL,
  `smoke` varchar(50) NOT NULL,
  `drink` varchar(50) NOT NULL,
  `f_ill` varchar(50) NOT NULL,
  `Other` varchar(100) NOT NULL,
  `pm_his` varchar(50) NOT NULL,
  `Other_pm` varchar(100) NOT NULL,
  `ad_hos` varchar(50) NOT NULL,
  `pat_con` varchar(50) NOT NULL,
  `accident` varchar(50) NOT NULL,
  `med` varchar(50) NOT NULL,
  `ch_no` varchar(50) NOT NULL,
  `del_no` varchar(50) NOT NULL,
  `delivery` varchar(50) NOT NULL,
  `others` varchar(50) NOT NULL,
  `Family_Registration_No` varchar(50) NOT NULL,
  `mob_no` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_registration`
--

INSERT INTO `patient_registration` (`ID`, `Date_of_Enrollment`, `name`, `per_reg`, `pat_ticket_id`, `rel_cwe`, `gender`, `dob`, `edu`, `prof`, `mar_stat`, `height`, `weight`, `temp`, `pulse`, `s_bp`, `d_bp`, `spo2`, `diab`, `asthma`, `smoke`, `drink`, `f_ill`, `Other`, `pm_his`, `Other_pm`, `ad_hos`, `pat_con`, `accident`, `med`, `ch_no`, `del_no`, `delivery`, `others`, `Family_Registration_No`, `mob_no`) VALUES
(1, '2022-07-01', 'Priya Surin', 'K0722000902', '220701010', 'Spouse', 'Female', '1994-07-23', 'Education', 'à¤¸à¤®à¤¾à¤œ à¤¸à¥‡à¤µà¤•', 'Married', '', '38', '98.2', '76', '89', '57', '', 'Dont Know', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'Family illness (à¤ªà¤¾à¤°à¤¿à¤µà¤¾à¤°à¤¿à¤• à¤¬à¥€', '', 'à¤‰à¤šà¥à¤š à¤°à¤•à¥à¤¤à¤šà¤¾à¤ª', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'none', 'none', '2', '2', '0', 'none', 'K07220009', 0),
(2, '2022-07-01', 'Santosh Surin', 'K0722001101', '220701012', 'Self', 'Male', '1985-06-18', 'à¤¨à¤¾à¤®à¤¾à¤‚à¤•à¤¿à¤¤ à¤¸à¥à¤¨à¤¾à¤¤à¤•', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'Married', '', '60', '97.6', '61', '121', '76', '', 'Yes', 'No', '5 à¤¸à¤¾à¤² à¤¸à¥‡ à¤…à¤§à¤¿à¤• à¤¸à¤®à¤¯ à¤ªà¤¹à¤', 'Occasionally ', 'Hypertension', '', 'à¤‰à¤šà¥à¤š à¤°à¤•à¥à¤¤à¤šà¤¾à¤ª,à¤®à¤§à¥à¤®à¥‡', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¸à¥à¤µà¤¾à¤¸à¥à¤¥à¥à¤¯ à¤•à¥€ à¤¸à¥à¤¥à¤¿à¤¤', 'none', 'none', '', '', '', '', 'K07220011', 0),
(3, '2022-07-01', 'Suleman Surin', 'K0722000901', '22070102', 'Self', 'Male', '1997-07-01', 'à¤•à¤•à¥à¤·à¤¾ 11-12, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤', 'à¤¦à¥ˆà¤¨à¤¿à¤• à¤¦à¤¾à¤‚à¤µ', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '166', '60', '98', '72', '54', '56', '20', 'Yes', 'No', 'à¤ªà¤¿à¤›à¤²à¥‡ 5 à¤µà¤°à¥à¤·à¥‹à¤‚ à¤®à¥‡à¤‚ à¤›', 'Often with heavy quantity (à¤…à¤•à¥à¤¸à¤° à¤­à¤¾à', 'Hypertension', '', 'à¤¹à¥ƒà¤¦à¤¯ à¤°à¥‹à¤—', '', 'à¤šà¤¿à¤•à¤¿à¤¤à¥à¤¸à¤¾', 'à¤…à¤šà¥à¤›à¤¾', 'no', 'no', '1', '1', '1', 'none', 'K07220009', 0),
(4, '2022-07-02', 'Seteng Surin', 'K0722001102', '220702018', 'Spouse', 'Female', '1982-06-25', 'Education', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '', '58', '', '97', '116', '79', '', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'Family illness (à¤ªà¤¾à¤°à¤¿à¤µà¤¾à¤°à¤¿à¤• à¤¬à¥€', '', 'à¤¹à¥ƒà¤¦à¤¯ à¤°à¥‹à¤—', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤…à¤šà¥à¤›à¤¾', 'none', 'none', '2', '4', '0', 'Problem after the birth of second child', 'K07220011', 0),
(5, '2022-07-04', 'Salan Surin', 'K0722002501', '220704026', 'Self', 'Male', '1998-10-20', 'à¤•à¤•à¥à¤·à¤¾ 11-12, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤', 'à¤•à¤¿à¤¸à¤¾à¤¨,à¤•à¥à¤¶à¤² à¤•à¤¾à¤®à¤—à¤¾à¤° (à', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '', '55', '', '', '', '', '', 'No', 'No', 'à¤…à¤¨à¤¿à¤¯à¤®à¤¿à¤¤ à¤°à¥‚à¤ª à¤¸à¥‡ à¤§à¥‚à¤®à¥', 'Occasionally (à¤•à¤­à¥€-à¤•à¤­à¥€)', 'Other (à¤…à¤¨à¥à¤¯)', 'there may be something unknown', 'à¤®à¤§à¥à¤®à¥‡à¤¹,à¤…à¤¨à¥à¤¯', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤‰à¤¤à¥à¤•à¥ƒà¤·à¥à¤Ÿ', 'none', 'none', '', '', '', '', 'K07220025', 0),
(6, '2022-07-04', 'Soma Surin', 'K0722000801', '220704029', 'Self', 'Male', '1962-01-01', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '', '48', '95.7', '81', '92', '50', '', 'No', 'Yes', 'à¤ªà¤¿à¤›à¤²à¥‡ 5 à¤µà¤°à¥à¤·à¥‹à¤‚ à¤®à¥‡à¤‚ à¤›', 'Often with heavy quantity (à¤…à¤•à¥à¤¸à¤° à¤­à¤¾à', 'Other (à¤…à¤¨à¥à¤¯)', 'TB', 'à¤…à¤¨à¥à¤¯', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'Yes. Lost right hand', 'Taking TB medicines', '', '', '', '', 'K07220008', 0),
(7, '2022-07-04', 'Jolen Surin', 'K0722000401', '220704032', 'Self', 'Male', '1959-05-17', '10 . à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '', '50', '', '98', '120', '75', '', 'No', 'Yes', 'à¤…à¤¨à¤¿à¤¯à¤®à¤¿à¤¤ à¤°à¥‚à¤ª à¤¸à¥‡ à¤§à¥‚à¤®à¥', 'Occasionally (à¤•à¤­à¥€-à¤•à¤­à¥€)', 'Other (à¤…à¤¨à¥à¤¯)', 'TB', 'à¤…à¤¨à¥à¤¯', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', '', '', '', '', '', '', 'K07220004', 0),
(8, '2022-07-04', 'Pawal Surin', 'K0722001201', '220704036', 'Self', 'Male', '2057-01-01', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '', '49', '', '58', '132', '71', '', 'Yes', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'Diabetes (à¤®à¤§à¥à¤®à¥‡à¤¹)', '', 'à¤…à¤¨à¥à¤¯', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'none', 'none', '', '', '', '', 'K07220012', 0),
(9, '2022-07-04', 'Saidan Surin', 'K0722000404', '220704037', 'Daughter', 'Female', '2001-06-03', 'à¤¨à¤¾à¤®à¤¾à¤‚à¤•à¤¿à¤¤ à¤¸à¥à¤¨à¤¾à¤¤à¤•', 'à¤•à¤¿à¤¸à¤¾à¤¨,à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤°à¥à¤¥à¥€', 'Not Married/ à¤…à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤', '', '45', '', '91', '129', '67', '', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'Other (à¤…à¤¨à¥à¤¯)', '', 'à¤…à¤¨à¥à¤¯', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¸à¥à¤µà¤¾à¤¸à¥à¤¥à¥à¤¯ à¤•à¥€ à¤¸à¥à¤¥à¤¿à¤¤', '', '', '', '', '', '', 'K07220004', 0),
(10, '2022-07-04', 'Biji Surin ', 'K0722000204', '220704038', 'Sister', 'Female', '2004-01-01', '12th Pass', 'Service', 'Not Married', '', '56', '', '83', '124', '68', '', 'No', 'Do you have asthma or any breathing trouble? (à¤•à', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'Other (à¤…à¤¨à¥à¤¯)', '', 'à¤…à¤¨à¥à¤¯', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¸à¥à¤µà¤¾à¤¸à¥à¤¥à¥à¤¯ à¤•à¥€ à¤¸à¥à¤¥à¤¿à¤¤', '', '', '', '', '', '', 'K07220000', 0),
(11, '2022-07-05', 'Emanuel Surin', 'K0722000601', '220705045', 'Relationship with CWE', 'Male', '1958-01-01', 'à¤•à¤•à¥à¤·à¤¾ 5 à¤¤à¤•', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '', '65', '', '79', '148', '80', '', 'Dont Know', 'No', '5 à¤¸à¤¾à¤² à¤¸à¥‡ à¤…à¤§à¤¿à¤• à¤¸à¤®à¤¯ à¤ªà¤¹à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤œà¥à¤žà¤¾à¤¤ à¤¨à¤¹à¥€à¤‚ à¤¹à¥ˆ', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', 'Old skin disease (right leg)', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¥à¤°à¤¾', 'deep cut on right foot damaged leg ', 'take medicine for skin disease ', '', '', '', '', 'K072200024', 0),
(12, '2022-07-05', 'Jyotish Surin', 'K0722001003', '220705047', 'à¤¬à¥‡à¤Ÿà¤¾', 'Male', '1986-04-20', '12 à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'à¤¬à¥‡à¤°à¥‹à¤œà¤—à¤¾à¤°', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '170', '72', '', '71', '133', '82', '', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤¸à¥‡à¤°à¥‡à¤¬à¥à¤°à¤² à¤…à¤Ÿà¥ˆà¤•', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤‰à¤¤à¥à¤•à¥ƒà¤·à¥à¤Ÿ', 'none', 'none', '', '', '', '', 'K07220010', 0),
(13, '2022-07-06', 'Kolostika Samad', 'K0722000303', '220706050', 'à¤¬à¤¹à¥‚', 'Female', '1998-10-23', '10 . à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '147', '43', '', '90', '101', '63', '', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', 'Cough', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤¬à¤šà¥à¤šà¥‡ à¤•à¤¾ à¤œà¤¨à¥à¤®', 'à¤…à¤šà¥à¤›à¤¾', 'none', 'none', '2', '2', '0', 'none', 'K07220003', 6200645197),
(14, '2022-07-09', 'Naimon Surin', 'K0722001501', '220709016', 'à¤–à¥à¤¦ (self)', 'Male', '1952-01-01', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨', 'किसान', 'Married', '160', '48', '', '95', '136', '73', '', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤¸à¥‡à¤°à¥‡à¤¬à¥à¤°à¤² à¤…à¤Ÿà¥ˆà¤•', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', 'Joint pain, knee pain', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¥à¤°à¤¾', '', 'knee pain medicine', '', '', '', '', 'K07220015', 9973772157),
(15, '2022-07-09', 'Shila Devi', 'K0722000102', '22070905', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '1999-05-14', '12 à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '146', '34', '', '', '', '', '', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', 'Under weight, weakness', 'à¤•à¥à¤› à¤¨à¤¹à¥€', 'Under weight, weakness', 'à¤šà¤¿à¤•à¤¿à¤¤à¥à¤¸à¤¾', 'à¤¬à¥à¤°à¤¾', 'none', 'Energy tabs', '2', '2', '0', '', 'K07220004', 9304040503),
(16, '2022-07-15', 'Jasmanti surin', 'U0722002302', '220715016', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '1970-01-01', 'à¤•à¤•à¥à¤·à¤¾ 6-10, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤¨', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '159', '46', '98', '72', '124', '79', '97', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤…à¤šà¥à¤›à¤¾', 'none', 'none', '6', '6', '0', 'none', 'U07220023', 8830577631),
(17, '2022-07-15', 'Nirmala surin', 'U0722002603', '220715017', 'à¤¬à¥‡à¤Ÿà¥€', 'Female', '1997-01-01', 'Education', 'à¤¬à¥‡à¤°à¥‹à¤œà¤—à¤¾à¤°', 'Not Married/ à¤…à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤', '156', '44', '97', '80', '105', '65', '99', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¥à¤°à¤¾', 'None', 'None', '', '', '', '', 'U07220026', 1234567890),
(18, '2022-07-15', 'Atul Surin', 'K0722001204', '220715018', 'à¤ªà¥‹à¤¤à¤¾', 'Male', '2004-01-01', '10 . à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤°à¥à¤¥à¥€', 'Not Married/ à¤…à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤', '177', '56', '98', '65', '138', '67', '98', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'None', 'None', '', '', '', '', 'K07220012', 9341928958),
(19, '2022-07-16', 'Sutughan Surin', 'K0722000701', '220716019', 'à¤–à¥à¤¦ (self)', 'Male', '1973-01-01', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '171', '50', '95.7', '95', '126', '89', '97', 'No', 'No', '5 à¤¸à¤¾à¤² à¤¸à¥‡ à¤…à¤§à¤¿à¤• à¤¸à¤®à¤¯ à¤ªà¤¹à¤', 'Occasionally (à¤•à¤­à¥€-à¤•à¤­à¥€)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤¹à¥ƒà¤¦à¤¯ à¤°à¥‹à¤—', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¥à¤°à¤¾', 'None', 'None', '', '', '', '', 'K07220007', 7783873772),
(20, '2022-07-16', 'Arsaliani Surin', 'K0722000702', '220716020', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '1975-01-01', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '158', '45', '96.6', '96', '107', '68', '96', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Occasionally (à¤•à¤­à¥€-à¤•à¤­à¥€)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'None', 'None', '4', '7', '0', 'None', 'K07220007', 7783873772),
(21, '2022-07-16', 'Ryona Surin', 'K0722000304', '220716021', 'à¤ªà¥‹à¤¤à¥€', 'Female', '2018-01-01', 'Education', 'à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤°à¥à¤¥à¥€', 'Not Married/ à¤…à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤', '98', '12', '95', '110', '79', '54', '99', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤…à¤šà¥à¤›à¤¾', 'NOne', 'None', '', '', '', '', 'K07220003', 6200645197),
(22, '2022-07-16', 'Telani Surin', 'K0722001502', '220716022', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '2060-11-01', 'à¤•à¤•à¥à¤·à¤¾ 5 à¤¤à¤•', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '147', '50', '97.1', '83', '148', '78', '99', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'None', 'None', '1', '1', '0', 'None', 'K07220015', 9973772157),
(23, '2022-07-16', 'Nimunti Surin', 'K0722000402', '220716023', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '1970-01-01', 'Education', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '158', '51', '97.1', '74', '115', '77', '95', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Alcohol drinking habit (à¤¶à¤°à¤¾à¤¬ à¤ªà¥€à¤¨à¥‡ ', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¥à¤°à¤¾', 'None', 'None', '1', '1', '0', 'None', 'K07220004', 9304428513),
(26, '2022-07-16', 'Shila Devi', 'K0722000102', '220716025', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '1999-11-01', 'à¤•à¤•à¥à¤·à¤¾ 11-12, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '147', '33', '97', '70', '100', '54', '97', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'None', 'None', '2', '2', '0', 'None', 'K07220001', 1234567890),
(28, '2022-07-16', 'Marsalan surin', 'H0722001801', '220716027', 'à¤–à¥à¤¦ (self)', 'Male', '1983-01-01', 'à¤•à¤•à¥à¤·à¤¾ 5 à¤¤à¤•', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '171', '62', '98', '59', '152', '86', '98', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Occasionally (à¤•à¤­à¥€-à¤•à¤­à¥€)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¥à¤°à¤¾', 'None', 'None', '', '', '', '', 'H07220018', 9693835939),
(29, '2022-07-16', 'Susana kongadi', 'S0722001702', '220716029', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '1982-11-01', 'à¤•à¥‹à¤ˆ à¤”à¤ªà¤šà¤¾à¤°à¤¿à¤• à¤¶à¤¿à¤•à¥à¤·à¤¾', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '157', '45', '97', '72', '126', '72', '99', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'None', 'None', '2', '2', '0', 'None', 'S07220017', 1234567890),
(30, '2022-07-16', 'Ilisabha Surin', 'K0722001202', '220716030', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '2062-01-01', '10 . à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '146', '50', '95.7', '70', '99', '58', '95', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¥à¤°à¤¾', 'None', 'None', '1', '1', '0', 'None', 'K07220012', 7091124254),
(31, '2022-07-18', 'Kole Barla', 'D0722002001', '220718031', 'self', 'Male', '1972-01-01', 'No formal education', 'Farming', 'Married', '166', '55', '96', '76', '140', '88', '98', 'No', 'No', 'Never', 'Occasionally', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¤¹à¥à¤¤ à¤¬à¥à¤°à¤¾', 'None', 'None', '', '', '', '', 'D07220018', 6207722421),
(32, '2022-07-19', 'Jivanti barla ', 'K07220001902', '220719032', 'à¤ªà¤¤à¤¿ à¤¯à¤¾ à¤ªà¤¤à¥à¤¨à¥€', 'Female', '1999-01-01', '12 à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤/ Married', '154', '44', '97.2', '75', '120', '65', '99', 'No', 'No', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¨à¤¿à¤·à¥à¤ªà¤•à¥à¤·', 'None', 'None', '1', '1', '0', 'None', 'K072200019', 9546961156),
(33, '2022-07-19', 'Yakub Surin', 'K0722002502', '220719033', 'à¤–à¥à¤¦ (self)', 'Male', '2052-11-01', 'à¤•à¤•à¥à¤·à¤¾ 5 à¤¤à¤•', 'à¤•à¤¿à¤¸à¤¾à¤¨', 'à¤µà¤¿à¤§à¤µà¤¾ / à¤…à¤²à¤— (Widow/ Separated)', '164', '55', '95.7', '83', '119', '75', '93', 'No', 'Yes', 'à¤•à¤­à¥€ à¤§à¥‚à¤®à¥à¤°à¤ªà¤¾à¤¨ à¤¨à¤¹à¥€à¤‚ à¤', 'Never (à¤•à¤­à¥€ à¤¨à¤¹à¥€à¤)', 'à¤•à¥à¤› à¤¨à¤¹à¥€à¤‚', '', 'à¤•à¥à¤› à¤¨à¤¹à¥€', '', 'à¤…à¤¸à¥à¤ªà¤¤à¤¾à¤² à¤®à¥‡à¤‚ à¤­à¤°à¥à¤¤à¥€', 'à¤¬à¥à¤°à¤¾', 'None', 'None', '', '', '', '', 'K07220025', 1234567890),
(35, '2022-07-28', 'Etwa Surin', 'G0722002201', '220728034', 'à¤¬à¥‡à¤Ÿà¥€', 'Female', '1988-07-21', 'à¤•à¤•à¥à¤·à¤¾ 11-12, à¤‰à¤¤à¥à¤¤à¥€à¤°à¥à¤£ à¤', 'à¤˜à¤°à¥‡à¤²à¥‚ à¤•à¤¾à¤°à¥à¤¯à¤•à¤°à¥à¤¤à¤¾', 'Not Married/ à¤…à¤µà¤¿à¤µà¤¾à¤¹à¤¿à¤¤', '66', '60', '98', '72', '90', '45', '20', 'No', 'No', 'à¤¦à¤¿à¤¨ à¤®à¥‡à¤‚ 10 à¤¸à¥‡ à¤•à¤®', 'Occasionally (à¤•à¤­à¥€-à¤•à¤­à¥€)', 'Hypertension (à¤‰à¤šà¥à¤š à¤°à¤•à¥à¤¤à¤šà¤¾à¤ª)', '', 'à¤¹à¥ƒà¤¦à¤¯ à¤°à¥‹à¤—', '', 'à¤¬à¤šà¥à¤šà¥‡ à¤•à¤¾ à¤œà¤¨à¥à¤®', 'à¤…à¤šà¥à¤›à¤¾', 'none', 'no', '0', '0', '0', 'none', 'D07220022', 9076289367);

-- --------------------------------------------------------

--
-- Table structure for table `pat_reg_no`
--

CREATE TABLE `pat_reg_no` (
  `pat1` varchar(50) NOT NULL,
  `fam1` varchar(100) NOT NULL,
  `pat2` varchar(50) NOT NULL,
  `fam2` varchar(100) NOT NULL,
  `pat3` varchar(50) NOT NULL,
  `fam3` varchar(100) NOT NULL,
  `pat4` varchar(50) NOT NULL,
  `fam4` varchar(100) NOT NULL,
  `pat5` varchar(50) NOT NULL,
  `fam5` varchar(100) NOT NULL,
  `pat6` varchar(100) NOT NULL,
  `fam6` varchar(100) NOT NULL,
  `pat7` varchar(100) NOT NULL,
  `fam7` varchar(100) NOT NULL,
  `pat8` varchar(100) NOT NULL,
  `fam8` varchar(100) NOT NULL,
  `add_pat1` varchar(50) NOT NULL,
  `add_pat2` varchar(50) NOT NULL,
  `add_pat3` varchar(50) NOT NULL,
  `add_pat4` varchar(50) NOT NULL,
  `add_pat5` varchar(50) NOT NULL,
  `add_pat6` varchar(50) NOT NULL,
  `Family_Registration_No` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pat_reg_no`
--

INSERT INTO `pat_reg_no` (`pat1`, `fam1`, `pat2`, `fam2`, `pat3`, `fam3`, `pat4`, `fam4`, `pat5`, `fam5`, `pat6`, `fam6`, `pat7`, `fam7`, `pat8`, `fam8`, `add_pat1`, `add_pat2`, `add_pat3`, `add_pat4`, `add_pat5`, `add_pat6`, `Family_Registration_No`) VALUES
('D0722002001', 'Kole Barla', 'D0722002002', 'Amar Barla', 'D0722002003', 'Bimal Barla', 'D0722002004', 'Vijay Barla', 'D0722002005', 'Vinay Barla', 'D0722002006', ' Mangri Barla', 'D0722002007', ' ', 'D0722002008', ' ', '', '', '', '', '', '', 'D07220020'),
('G0722002201', 'Etwa Surin', 'G0722002202', 'Sirmani Surin', 'G0722002203', 'Sapira Surin', 'G0722002204', 'Samuel Surin', 'G0722002205', 'Santinel Surin', '', '', '', ' ', '', ' ', '', '', '', '', '', '', 'D07220022'),
('K0722002401', 'Emanuel Surin', 'K0722002402', 'Jawanti Surin', 'K0722002403', 'Namomi Surin', 'K0722002404', 'Emanuel Kongari', '', '', '', '', '', ' ', '', ' ', '', '', '', '', '', '', 'D07220024'),
('H0722001801', 'Marsalan surin', 'H0722001802', 'Jilini surin', 'H0722001803', 'Abhishek surin', 'H0722001804', 'Shrishti surin', 'H0722001805', 'Jolen surin', 'H07220001906', ' ', 'H0722001807', ' ', 'H0722001808', ' ', 'H0722001811', 'H0722001812', 'H0722001813', 'H072200114', 'H0722001815', 'H0722001816', 'H07220018'),
('H0722002701', 'New Family Regn', 'H0722002702', 'Srijnan Sanyal', 'H0722002703', ' ', 'H0722002704', '', 'H0722002705', ' ', 'H0722002706', ' ', 'H0722002707', ' ', 'H0722002708', ' ', 'H0722002711', 'H0722002712', 'H0722002713', 'H0722002714', 'H0722002715', 'H0722002716', 'H07220027'),
('K0722000101', 'Dipak Naik', 'K0722000102', 'Shila Devi', 'K0722000103', 'Baby Kumari', 'K0722000104', 'Prince Nail', 'K0722000105', ' ', 'K0722000106', ' ', 'K0722000107', ' ', 'K0722000108', ' ', 'K0722000111', 'K0722000112', 'K0722000113', 'K0722000114', 'K0722000115', 'K0722000116', 'K07220001'),
('K07220001901', 'Roshan surin', 'K07220001902', 'Jivanti barla ', 'K07220001903', 'Anjel surin', 'K07220001904', '', 'K07220001905', ' ', 'K07220001906', ' ', 'K07220001907', ' ', 'K07220001908', ' ', 'K07220001911', 'K07220001912', 'K07220001913', 'K07220001914', 'K07220001915', 'K07220001916', 'K072200019'),
('K0722000201', 'Digu Surin ', 'K0722000002', 'Suray Surin ', 'K0722000203', 'Shoshan Surin ', 'K0722000204', 'Biji Surin ', 'K0722000205', 'Moylen Surin ', 'K0722000206', 'Munika Surin ', 'K0722000207', 'Mangri Surin', 'K0722000208', ' ', 'K0722000211', 'K0722000212', 'K0722000213', 'K0722000214', 'K0722000215', 'K0722000216', 'K07220002'),
('K0722000401', 'Jolen Surin', 'K0722000402', 'Nimunti Surin', 'K0722000403', 'Sugandhit Surin', 'K0722000404', 'Saidan Surin', 'K0722000405', 'Snehlata Surin', 'K07220003106', 'Suman Surin', 'K07220003107', 'Rahil Surin', 'K0722000408', ' ', 'K0722000411', 'K0722000412', 'K0722000413', 'K0722000414', 'K0722000415', 'K0722000416', 'K07220004'),
('K0722000501', 'Baji Munda', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', 'K0722000511', 'K0722000512', 'K0722000513', 'K0722000514', 'K0722000515', 'K0722000516', 'K07220005'),
('K0722000601', 'Emanuel Surin', 'K0722000602', 'Jawanti Surin', 'K0722000603', 'Namani Surin', 'K0722000604', 'Emanuel Kongari', 'K0722000605', ' ', 'K0722000606', ' ', 'K0722000607', ' ', 'K0722000608', ' ', 'K0722000611', 'K0722000612', 'K0722000613', 'K0722000614', 'K0722000615', 'K0722000616', 'K07220006'),
('K0722000701', 'Sutughan Surin', 'K0722000702', 'Arsaliani Surin', 'K0722000703', 'Premdas Surin', 'K0722000704', 'Nirali Surin', 'K0722000705', 'Jaideep Surin', 'K0722000706', 'Sushila Surin', 'K0722000707', 'Sunaina Surin', 'K0722000708', ' ', 'K0722000711', 'K0722000712', 'K0722000713', 'K0722000714', 'K0722000715', 'K0722000716', 'K07220007'),
('K0722000801', 'Soma Surin', 'K0722000802', 'Helen Surin', 'K0722000803', 'Puran Surin', 'K0722000804', 'Pawan Surin', 'K0722000805', ' ', 'K0722000806', ' ', 'K0722000807', ' ', 'K0722000808', ' ', 'K0722000811', 'K0722000812', 'K0722000813', 'K0722000814', 'K0722000815', 'K0722000816', 'K07220008'),
('K0722000901', 'Suleman Surin', 'K0722000902', 'Priya Surin', 'K0722000903', 'Habil Surin', 'K0722000904', 'Bilasi Surin', 'K0722000905', 'Roshanti Surin', '', '', '', '', '', '', 'K0722000911', 'K0722000912', 'K0722000913', 'K0722000914', 'K0722000915', 'K0722000916', 'K07220009'),
('K0722001001', 'Junul Surin', 'K0722001002', 'Juliani Surin', 'K0722001003', 'Jyotish Surin', 'K0722001004', 'Munika Horo', 'K0722001005', 'Kiran Surin', 'K07220010606', 'Premi Surin', 'K0722001007', 'Ismail Surin', 'K0722001008', ' ', 'K0722001011', 'K0722001012', 'K0722001013', 'K0722001014', 'K0722001015', 'K0722001016', 'K07220010'),
('K0722001101', 'Santosh Surin', 'K0722001102', 'Seteng Surin', 'K0722001103', 'Senen Surin', 'K0722001104', 'Akash Surin', 'K0722001105', ' ', '', '', '', '', '', '', 'K0722001111', 'K0722001112', 'K0722001113', 'K0722001114', 'K0722001115', 'K0722001116', 'K07220011'),
('K0722001201', 'Pawal Surin', 'K0722001202', 'Ilisabha Surin', 'K0722001203', 'Ashish Surin', 'K0722001204', 'Atul Surin', 'K0722001205', 'Josinta Topno', 'K0722001206', 'Birjinia Surin', 'K0722001207', ' Praveen Lugun', 'K0722001208', ' ', 'K0722001211', 'K0722001212', 'K0722001213', 'K0722001214', 'K0722001215', 'K0722001216', 'K07220012'),
('K0722001301', 'Sugar Surin', 'K0722001302', 'Jeren Surin', 'K0722001303', 'Martha Samad', 'K0722001304', 'Lebeyani Surin', 'K0722001305', 'Aster Surin', 'K0722001306', 'Ribika Surin', 'K0722001307', 'Eaden Surin', '', ' ', '', '', '', '', '', '', 'K07220013'),
('K0722001401', 'Saban Kalyan Topno', '', '', '', '', '', '', '', '', '', '', '', '', '', ' ', '', '', '', '', '', '', 'K07220014'),
('K0722001501', 'Naimon Surin', 'K0722001502', 'Telani Surin', 'K0722001503', 'Uttam Surin', 'K0722001504', '', 'K0722001505', ' ', 'K0722001506', ' ', 'K0722001507', ' ', 'K0722001508', ' ', 'K0722001511', 'K07220001512', 'K0722001513', 'K0722001514', 'K0722001515', 'K0722001516', 'K07220015'),
('K0722001701', 'Rajesh Kongadi', 'K0722001702', 'Susana Kongadi', 'K0722001703', 'Pramod Kongadi', 'K0722001704', 'Pradeep Kongadi', 'K0722001705', 'Nisi Kongadi', 'K0722001706', 'Manhem Kongadi', '', ' ', '', ' ', '', '', '', '', '', '', 'K07220017'),
('K0722001801', 'Marselan Surin', 'K0722001802', 'Jilini Surin', 'K0722001803', 'Abhishek Surin', 'K0722001804', 'Shristi Surin', 'K0722001805', 'Jolen Surin', '', '', '', ' ', '', ' ', '', '', '', '', '', '', 'K07220018'),
('K0722001901', 'Binodi Surin', 'K0722001902', 'Sifin Surin', 'K0722001903', 'Askeran Surin', 'K0722001904', 'Suman Surin', 'K0722001905', 'Prasant Surin', 'K0722001906', 'Matan Surin', '', ' ', '', ' ', '', '', '', '', '', '', 'K07220019'),
('K0722002101', 'Albis Surin', 'K0722002102', 'Clara Surin', 'K0722002103', 'Shristi Surin', 'K0722002104', 'Anisa Surin', '', '', '', '', '', ' ', '', ' ', '', '', '', '', '', '', 'K07220021'),
('K0722002501', 'Salan Surin', 'K0722002502', 'Yakub Surin', 'K0722002503', 'Jiden Tiru', 'K0722002504', '', 'K0722002505', ' ', 'K0722002506', ' ', 'K0722002507', ' ', 'K0722002508', ' ', 'K07220002511', 'K07220002512', 'K07220002513', 'K07220002514', 'K07220002515', 'K07220002516', 'K07220025'),
('K0722002701', 'Dilip Ram ', 'K0722002702', 'Muni Devi', 'K0722002703', 'Roshni Kumari', 'K0722002704', 'Reshmi Kumari', 'K0722002705', 'Nisha Kumari', 'K0722002706', 'Siwanand Ram', 'K0722002707', ' ', 'K0722002708', ' ', 'K0722002711', 'K0722002712', 'K0722002713', 'K0722002714', 'K0722002715', 'K0722002716', 'K07220027'),
('S0722001601', 'Bashanti Surin', 'S0722001602', 'Rut Surin', 'S0722001603', 'Bilasi Surin', 'S0722001604', 'Harshit Surin', 'S0722001605', ' ', 'S0722001606', ' ', 'S0722001607', ' ', 'S0722001608', ' ', 'S07220001511', 'S07220001512', 'S07220001513', 'S07220001514', 'S07220001515', 'S07220001516', 'S07220016'),
('S0722001701', 'Rajesh kongadi', 'S0722001702', 'Susana kongadi', 'S0722001703', 'Parmod kongadi', 'S0722001704', 'Pardeep kongadi', 'S0722001705', 'Nisi guria', 'S0722001706', 'Manhem surin', 'S0722001707', ' ', 'S0722001708', ' ', 'S07220001911', 'S07220001912', 'S07220001913', 'S07220001914', 'S07220001915', 'S07220001916', 'S07220017'),
('U0722002301', 'Niranjan surin', 'U0722002302', 'jasmanti surin', 'U0722002303', 'Sandeep surin', 'U0722002304', 'Dilbar surin', 'U0722002305', 'Asha surin', 'U0722002306', 'Ashma surin', 'U0722002307', 'Elya surin', 'U0722002308', 'Suleman surin', '', '', '', '', '', '', 'U07220023'),
('U0722002601', 'Junas surin', 'U0722002602', 'Margrate surin', 'U0722002603', 'Nirmala surin', 'U0722002604', 'Prame chand surin', 'U0722002605', 'Ranuka surin', 'U0722002606', 'Saroj surin', 'U0722002607', ' ', 'U0722002608', ' ', 'U07220002611', 'U07220002612', 'U07220002613', 'U07220002614', 'U07220002615', 'U07220002616', 'U07220026');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `ID` int(50) NOT NULL,
  `prescrip_ticket_id` varchar(100) NOT NULL,
  `Doctor_Name` varchar(100) NOT NULL,
  `Doctor_ID` varchar(100) NOT NULL,
  `Patient_Name` varchar(100) NOT NULL,
  `Patient_ID` varchar(100) NOT NULL,
  `age` int(50) NOT NULL,
  `m1` varchar(100) NOT NULL,
  `f1_1` varchar(255) CHARACTER SET utf8 NOT NULL,
  `d1` varchar(100) NOT NULL,
  `med_no1` int(50) NOT NULL,
  `m2` varchar(100) NOT NULL,
  `f1_2` varchar(100) NOT NULL,
  `d2` varchar(100) NOT NULL,
  `med_no2` int(50) NOT NULL,
  `m3` varchar(100) NOT NULL,
  `f1_3` varchar(100) NOT NULL,
  `d3` varchar(100) NOT NULL,
  `med_no3` int(50) NOT NULL,
  `m4` varchar(100) NOT NULL,
  `f1_4` varchar(100) NOT NULL,
  `d4` varchar(100) NOT NULL,
  `med_no4` int(50) NOT NULL,
  `m5` varchar(100) NOT NULL,
  `f1_5` varchar(100) NOT NULL,
  `d5` varchar(100) NOT NULL,
  `med_no5` int(50) NOT NULL,
  `m6` varchar(100) NOT NULL,
  `f1_6` varchar(100) NOT NULL,
  `d6` varchar(100) NOT NULL,
  `med_no6` int(50) NOT NULL,
  `Tests` varchar(100) NOT NULL,
  `Special_instruction` varchar(255) NOT NULL,
  `Next_recommended_Visit` varchar(100) NOT NULL,
  `diag` varchar(100) NOT NULL,
  `no_of_medicine` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`ID`, `prescrip_ticket_id`, `Doctor_Name`, `Doctor_ID`, `Patient_Name`, `Patient_ID`, `age`, `m1`, `f1_1`, `d1`, `med_no1`, `m2`, `f1_2`, `d2`, `med_no2`, `m3`, `f1_3`, `d3`, `med_no3`, `m4`, `f1_4`, `d4`, `med_no4`, `m5`, `f1_5`, `d5`, `med_no5`, `m6`, `f1_6`, `d6`, `med_no6`, `Tests`, `Special_instruction`, `Next_recommended_Visit`, `diag`, `no_of_medicine`) VALUES
(24, '', 'Dr. Mrinmoy Bera', '3', 'Nimunti Surin', 'K0722000402', 52, 'Azithromycine 250', '.,à¤¨à¤¾à¤¶à¥à¤¤à¥‡ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡,à¤¨à¤¾à¤¶à¥à¤¤à¥‡ à¤•à¥‡ à¤¬à¤¾à¤¦,à¤¦à¥‹à¤ªà¤¹à¤° à¤•à¥‡ à¤­à¥‹à¤œà¤¨ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡', '2 days', 6, 'Amlodipine 5', '.,à¤¦à¥‹à¤ªà¤¹à¤° à¤•à¥‡ à¤­à¥‹à¤œà¤¨ à¤•à¥‡ à¤¬à¤¾à¤¦,à¤°à¤¾à¤¤ à¤•à¥‡ à¤–à¤¾à¤¨à¥‡ à¤¸à¥‡ à¤ªà¤¹à¤', '7 days', 12, 'Azithromycine 250', '.,à¤œà¤¬ à¤œà¤°à¥à¤°à¤¤ à¤ªà¤¾à¤°à¥‡', 'One time', 1, 'Medicine 4', '.', '.', 0, 'Medicine 5', '.', '.', 0, 'Medicine 6', '.', '.', 0, 'No test', 'no another instruction', '', 'Heart enlargement', 3),
(25, 'P220728025', 'Dr. Mrinmoy Bera', '3', 'Atul Surin', 'K0722001204', 18, 'Amoxyxillin 500', '.,à¤¨à¤¾à¤¶à¥à¤¤à¥‡ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡,à¤¦à¥‹à¤ªà¤¹à¤° à¤•à¥‡ à¤­à¥‹à¤œà¤¨ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡,à¤°à¤¾à¤¤ à¤•à¥‡ à¤–à¤¾à¤¨à¥‡ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡', '7 days', 21, 'Xeroworn 401', '.,à¤–à¤¾à¤²à¥€ à¤ªà¥‡à¤Ÿ,à¤°à¤¾à¤¤ à¤•à¥‡ à¤–à¤¾à¤¨à¥‡ à¤•à¥‡ à¤¬à¤¾à¤¦', '3 Days', 6, 'Bisacodyl', '.,à¤œà¤¬ à¤œà¤°à¥à¤°à¤¤ à¤ªà¤¾à¤°à¥‡', '3 Days', 0, 'Medicine 4', '.', '.', 0, 'Medicine 5', '.', '.', 0, 'Medicine 6', '.', '.', 0, 'No test', 'Drink adequate liquid', '2022-08-04', 'This diagnosis', 3),
(26, 'P220728026', 'Dr. Mrinmoy Bera', '3', 'Saidan Surin', 'K0722000404', 21, 'Amoxyxillin 500', '.,à¤¨à¤¾à¤¶à¥à¤¤à¥‡ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡,à¤¦à¥‹à¤ªà¤¹à¤° à¤•à¥‡ à¤­à¥‹à¤œà¤¨ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡,à¤°à¤¾à¤¤ à¤•à¥‡ à¤–à¤¾à¤¨à¥‡ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡', '5 days', 15, 'Aspirin 150', '.,à¤–à¤¾à¤²à¥€ à¤ªà¥‡à¤Ÿ,à¤°à¤¾à¤¤ à¤•à¥‡ à¤–à¤¾à¤¨à¥‡ à¤¸à¥‡ à¤ªà¤¹à¤²à¥‡', '7 days', 14, 'ATENOLOL 50', '.,à¤¹à¤° à¤†à¤  à¤˜à¤‚à¤Ÿà¥‡', '3 Days', 9, 'Medicine 4', '.', '.', 0, 'Medicine 5', '.', '.', 0, 'Medicine 6', '.', '.', 0, 'No test', 'Any other instruction', '2022-08-04', 'This diagnosis', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Sl.no`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctors_Registration_No`);

--
-- Indexes for table `family_registration`
--
ALTER TABLE `family_registration`
  ADD PRIMARY KEY (`Family_Registration_No`),
  ADD UNIQUE KEY `Unique` (`ID`);

--
-- Indexes for table `hw_reg`
--
ALTER TABLE `hw_reg`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `medical_consultant`
--
ALTER TABLE `medical_consultant`
  ADD PRIMARY KEY (`Day_Card_No`),
  ADD UNIQUE KEY `unique` (`ID`);

--
-- Indexes for table `medicine_bank`
--
ALTER TABLE `medicine_bank`
  ADD PRIMARY KEY (`batch_no`);

--
-- Indexes for table `medicine_storage`
--
ALTER TABLE `medicine_storage`
  ADD PRIMARY KEY (`Generic_name`);

--
-- Indexes for table `patient_registration`
--
ALTER TABLE `patient_registration`
  ADD PRIMARY KEY (`pat_ticket_id`),
  ADD KEY `index` (`ID`);

--
-- Indexes for table `pat_reg_no`
--
ALTER TABLE `pat_reg_no`
  ADD PRIMARY KEY (`Family_Registration_No`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`prescrip_ticket_id`),
  ADD KEY `index` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Sl.no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `family_registration`
--
ALTER TABLE `family_registration`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `medical_consultant`
--
ALTER TABLE `medical_consultant`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `patient_registration`
--
ALTER TABLE `patient_registration`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
