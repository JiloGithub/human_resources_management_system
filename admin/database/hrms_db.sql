-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 03:00 AM
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
-- Database: `hrms_db`

CREATE DATABASE `hrms_db`;
USE hrms_db;
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(20) NOT NULL,
  `USERNAME` varchar(100) NOT NULL,
  `FULLNAME` varchar(100) NOT NULL,
  `IMAGE` varchar(100) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `USERNAME`, `FULLNAME`, `IMAGE`, `EMAIL`, `PASSWORD`) VALUES
(1, 'Jilo123', 'Angelo Vijega', '1727311695.jpg', 'angelovijega@gmail.com', '$2y$10$RFr/Qry6XdJicSorJbqUfuGiup/TzOz8jmQGEsydzAIu1K3q18YtK');

-- --------------------------------------------------------

--
-- Table structure for table `civil_service_eligibility`
--

CREATE TABLE `civil_service_eligibility` (
  `ID` int(11) NOT NULL,
  `CAREER_SERVICE` varchar(100) DEFAULT NULL,
  `RA_1080` varchar(100) DEFAULT NULL,
  `SPECIAL_LAWS` varchar(100) DEFAULT NULL,
  `CES_CSEE` varchar(100) DEFAULT NULL,
  `BARANGAY_ELIGIBILITY` varchar(100) DEFAULT NULL,
  `DRIVERS_LICENSE` varchar(100) DEFAULT NULL,
  `RATING` varchar(100) DEFAULT NULL,
  `DATE_OF_EXAMINATION_CONFERMENT` date DEFAULT NULL,
  `PLACE_OF_EXAMINATION_CONFERMENT` varchar(100) DEFAULT NULL,
  `LICENSE_NUMBER` varchar(100) DEFAULT NULL,
  `LICENSE_DATE_OF_VALIDITY` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `educational_background`
--

CREATE TABLE `educational_background` (
  `ID` int(11) NOT NULL,
  `EMPLOYEE_ID` int(20) NOT NULL,
  `LEVEL` varchar(255) NOT NULL,
  `SCHOOL_NAME` varchar(255) NOT NULL,
  `BASIC_EDUCATION_DEGREE_COURSE` varchar(255) NOT NULL,
  `SCHOOL_FROM` varchar(255) NOT NULL,
  `SCHOOL_TO` varchar(255) NOT NULL,
  `HIGHEST_LEVEL_UNIT_EARNED` varchar(255) NOT NULL,
  `YEAR_GRADUATED` varchar(255) NOT NULL,
  `SCHOLARSHIP_ACADEMIC_HONOR_RECIEVED` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EMPLOYEE_ID` int(20) NOT NULL,
  `FIRSTNAME` varchar(100) NOT NULL,
  `MIDDLENAME` varchar(100) NOT NULL,
  `SURNAME` varchar(100) NOT NULL,
  `NAME_EXTENSION` varchar(100) NOT NULL,
  `DATE_OF_BIRTH` varchar(100) NOT NULL,
  `PLACE_OF_BIRTH` varchar(100) NOT NULL,
  `SEX` varchar(100) NOT NULL,
  `CIVIL_STATUS` varchar(100) NOT NULL,
  `HEIGHT` varchar(100) NOT NULL,
  `WEIGHT` varchar(100) NOT NULL,
  `BLOOD_TYPE` varchar(100) NOT NULL,
  `GSIS_ID_NO` varchar(100) NOT NULL,
  `PAGIBIG_ID_NO` varchar(100) NOT NULL,
  `PHILHEALTH_NO` varchar(100) NOT NULL,
  `SSS_NO` varchar(100) NOT NULL,
  `TIN_NO` varchar(100) NOT NULL,
  `AGENCY_EMPLOYEE_NO` varchar(100) NOT NULL,
  `CITIZENSHIP` varchar(100) NOT NULL,
  `RESIDENTIAL_ADDRESS` varchar(100) NOT NULL,
  `PERMANENT_ADDRESS` varchar(100) NOT NULL,
  `MOBILE_NO` varchar(100) NOT NULL,
  `EMAIL_ADDRESS` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employment_eligibility_questions`
--

CREATE TABLE `employment_eligibility_questions` (
  `ID` int(11) NOT NULL,
  `QUESTION_NUMBER` varchar(100) DEFAULT NULL,
  `ANSWER_YES` varchar(100) DEFAULT NULL,
  `ANSWER_NO` varchar(100) DEFAULT NULL,
  `IF_YES_GIVE_DETAILS` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family_background`
--

CREATE TABLE `family_background` (
  `ID` int(20) NOT NULL,
  `EMPLOYEE_ID` int(11) NOT NULL,
  `FB_FIRSTNAME` varchar(100) NOT NULL,
  `FB_MIDDLENAME` varchar(100) NOT NULL,
  `SPOUSES_SURNAME` varchar(100) NOT NULL,
  `FB_NAME_EXTENSION` varchar(100) NOT NULL,
  `OCCUPATION` varchar(100) NOT NULL,
  `EMPLOYER_BUSINESS_NAME` varchar(100) NOT NULL,
  `BUSINESS_ADDRESS` varchar(100) NOT NULL,
  `FB_MOBILE_NO` varchar(100) NOT NULL,
  `FATHERS_SURNAME` varchar(100) NOT NULL,
  `FATHERS_FIRSTNAME` varchar(100) NOT NULL,
  `FATHERS_MIDDLENAME` varchar(100) NOT NULL,
  `FATHERS_NAME_EXTENSION` varchar(100) NOT NULL,
  `MOTHERS_MAIDEN_NAME` varchar(100) NOT NULL,
  `MOTHERS_SURNAME` varchar(100) NOT NULL,
  `MOTHERS_FIRSTNAME` varchar(100) NOT NULL,
  `MOTHERS_MIDDLENAME` varchar(100) NOT NULL,
  `NO_OF_CHILDREN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `voluntary_work`
--

CREATE TABLE `voluntary_work` (
  `ID` int(11) NOT NULL,
  `NAME_AND_ADDRESS_OF_ORGANIZATION` varchar(100) DEFAULT NULL,
  `INCLUSIVE_DATES_FROM` date DEFAULT NULL,
  `INCLUSIVE_DATES_TO` date DEFAULT NULL,
  `NUMBER_OF_HOURS` varchar(100) DEFAULT NULL,
  `POSITION_NATURE_OF_WORK` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `ID` int(11) NOT NULL,
  `INCLUSIVE_DATES_FROM` date DEFAULT NULL,
  `INCLUSIVE_DATES_TO` date DEFAULT NULL,
  `POSITION_TITLE` varchar(100) DEFAULT NULL,
  `DEPARTMENT_AGENCY_OFFICE_COMPANY` varchar(100) DEFAULT NULL,
  `MONTHLY_SALARY` decimal(10,2) DEFAULT NULL,
  `SALARY_JOB_PAY_GRADE_APPOINTING_AUTHORITY_STEP_INCREMENT` varchar(100) DEFAULT NULL,
  `STATUS_OF_APPOINTMENT` varchar(100) DEFAULT NULL,
  `GOVT_SERVICE_Y_N` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `civil_service_eligibility`
--
ALTER TABLE `civil_service_eligibility`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `educational_background`
--
ALTER TABLE `educational_background`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMPLOYEE_ID2` (`EMPLOYEE_ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

--
-- Indexes for table `employment_eligibility_questions`
--
ALTER TABLE `employment_eligibility_questions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `family_background`
--
ALTER TABLE `family_background`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`);

--
-- Indexes for table `voluntary_work`
--
ALTER TABLE `voluntary_work`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT for table `civil_service_eligibility`
--
ALTER TABLE `civil_service_eligibility`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `educational_background`
--
ALTER TABLE `educational_background`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EMPLOYEE_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employment_eligibility_questions`
--
ALTER TABLE `employment_eligibility_questions`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `family_background`
--
ALTER TABLE `family_background`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `voluntary_work`
--
ALTER TABLE `voluntary_work`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `educational_background`
--
ALTER TABLE `educational_background`
  ADD CONSTRAINT `EMPLOYEE_ID2` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employees` (`EMPLOYEE_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family_background`
--
ALTER TABLE `family_background`
  ADD CONSTRAINT `EMPLOYEE_ID` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employees` (`EMPLOYEE_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
