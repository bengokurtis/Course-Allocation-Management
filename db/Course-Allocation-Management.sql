-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2023 at 06:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Course-Allocation-Management`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked_units`
--

CREATE TABLE `booked_units` (
  `id` int(10) NOT NULL,
  `unit_name` varchar(200) NOT NULL,
  `unit_code` varchar(100) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL,
  `lecturer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `department_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `course_name`, `department_id`) VALUES
(1, 'B.Tech Information Technology', 1),
(2, 'B.Tech Computer Technology', 3),
(3, 'B.Tech Computer Networks', 2),
(4, 'Dip.Tech Information Technology', 1),
(5, 'Dip.Tech Computer Technology', 3),
(6, 'Dip.Tech Computer Networks', 2);

-- --------------------------------------------------------

--
-- Table structure for table `course_assign_to_teachers`
--

CREATE TABLE `course_assign_to_teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `unit_id` bigint(20) UNSIGNED NOT NULL,
  `unit_credit` int(10) NOT NULL DEFAULT 0,
  `lecturer` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) NOT NULL,
  `department_code` varchar(200) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `department_head` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_code`, `department_name`, `department_head`, `created_at`, `updated_at`) VALUES
(1, 'CSI001', 'Computer Science and Informatics', 'Adannor Alio ', '2023-01-20 17:16:02', '2023-01-20 17:16:02'),
(2, 'CCN001', 'Communication and Computer Networks', 'Levy Wesonga', '2023-01-20 17:19:26', '2023-01-20 17:19:26'),
(3, 'CSE001', 'Computational Science and Engineering', 'Timothy Kokwon', '2023-01-20 17:20:32', '2023-01-20 17:20:32'),
(4, 'MDT001', 'Multimedia and Digital Technologies', 'Steve Waithaka', '2023-01-20 17:22:34', '2023-01-20 17:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` bigint(20) NOT NULL,
  `department_id` bigint(20) NOT NULL,
  `lecturer_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lec_reg_no` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `department_id`, `lecturer_name`, `address`, `email`, `contact_no`, `designation`, `lec_reg_no`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gabriel Wafula', 'Pumwani', 'mykig@mailinator.com', '0113784723', 'lecturer', 'TUK/18/912', '2023-01-31 13:47:39', '2023-01-31 13:47:39'),
(2, 2, 'Charlotte Khamala', 'Nairobi 010120', 'sakum@mailinator.com', '01122334455', 'lecturer', 'TUK/173/812', '2023-01-31 13:48:24', '2023-01-31 13:48:24'),
(3, 3, 'Roselina sospeter', 'kitengela road', 'qynifahedo@mailinator.com', '0129384942', 'lecturer', 'TUK/187/835', '2023-01-31 13:49:16', '2023-01-31 13:49:16');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_login`
--

CREATE TABLE `lecturer_login` (
  `id` int(10) NOT NULL,
  `lecturer_name` varchar(100) NOT NULL,
  `lec_login_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturer_login`
--

INSERT INTO `lecturer_login` (`id`, `lecturer_name`, `lec_login_id`) VALUES
(1, 'Gabriel Wafula', 'TUK/18/912'),
(2, 'Charlotte Khamala', 'TUK/173/812'),
(3, 'Roselina sospeter', 'TUK/187/835');

-- --------------------------------------------------------

--
-- Table structure for table `student_enroll_tbl`
--

CREATE TABLE `student_enroll_tbl` (
  `id` int(10) NOT NULL,
  `unit_name` varchar(200) NOT NULL,
  `unit_code` varchar(100) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL,
  `student` varchar(200) NOT NULL,
  `lecturer` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `user_name`, `password`) VALUES
(1, 'nickleyde  onyango', 'Nick_Onyi', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'Kurtis Bengo', 'Kurtis_Bengo', '76419c58730d9f35de7ac538c2fd6737');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(10) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `student_reg_no` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(10) NOT NULL,
  `course_id` int(10) NOT NULL,
  `unit_code` varchar(50) NOT NULL,
  `unit_name` varchar(100) NOT NULL,
  `unit_description` varchar(255) NOT NULL,
  `year` varchar(10) NOT NULL,
  `term` varchar(10) NOT NULL,
  `credit_hours` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `course_id`, `unit_code`, `unit_name`, `unit_description`, `year`, `term`, `credit_hours`) VALUES
(1, 1, 'ECII2101', 'INTERNET TECHNOLOGIES', 'INTERNET TECHNOLOGIES', '1', '3', '48'),
(2, 2, 'ECCI2303', 'ENGINEERING DRAWING', 'ENGINEERING DRAWING', '1', '2', '40'),
(3, 1, 'ECII 2209', 'UNIX WINDOWS SERVER', 'UNIX WINDOWS SERVER', '3', '2', '42'),
(4, 3, 'ECCI 2208', 'FIBER OPTICS TECHNOLOGY', 'FIBER OPTICS TECHNOLOGY', '2', '3', '42'),
(5, 2, 'ECSI 2207', 'COMP H/W MAINTENANCE', 'COMP H/W MAINTENANCE', '2', '3', '48'),
(6, 1, 'ECII 2206', 'ADV. VISUAL PROGRAMMING', 'ADV. VISUAL PROGRAMMING', '2', '1', '48'),
(7, 1, 'ECII 3202', 'NUMERICAL METHODS', 'NUMERICAL METHODS', '3', '1', '42'),
(8, 2, 'ECSE 2202', 'LINEAR ALGEBRA', 'LINEAR ALGEBRA', '3', '1', '42'),
(9, 3, 'ECCI 3202', 'NUMERICAL ANALYSIS', 'NUMERICAL ANALYSIS', '3', '2', '42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_units`
--
ALTER TABLE `booked_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `course_assign_to_teachers`
--
ALTER TABLE `course_assign_to_teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_assign_to_teachers_department_id_foreign` (`department_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `lecturer_login`
--
ALTER TABLE `lecturer_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_enroll_tbl`
--
ALTER TABLE `student_enroll_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booked_units`
--
ALTER TABLE `booked_units`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course_assign_to_teachers`
--
ALTER TABLE `course_assign_to_teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lecturer_login`
--
ALTER TABLE `lecturer_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_enroll_tbl`
--
ALTER TABLE `student_enroll_tbl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `departments` (`id`);

--
-- Constraints for table `units`
--
ALTER TABLE `units`
  ADD CONSTRAINT `units_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
