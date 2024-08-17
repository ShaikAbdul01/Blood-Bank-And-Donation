-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 05:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `blood_id` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`blood_id`, `blood_group`) VALUES
(1, 'B+'),
(2, 'B-'),
(3, 'A+'),
(4, 'O+'),
(5, 'O-'),
(6, 'A-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `donars`
--

CREATE TABLE `donars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bloodtype` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donars`
--

INSERT INTO `donars` (`id`, `name`, `bloodtype`, `phone`, `email`, `gender`, `age`, `address`) VALUES
(1, 'Md. Rahman', 'O+', '01711223344', 'md.rahman@example.com', 'Male', 30, 'Dhaka, Bangladesh'),
(2, 'Fatima Akter', 'A-', '01899887766', 'fatima.akter@example.com', 'Female', 25, 'Chattogram, Bangladesh'),
(3, 'Kamal Ahmed', 'B+', '01988776655', 'kamal.ahmed@example.com', 'Male', 35, 'Dhaka, Bangladesh'),
(4, 'Jahanara Begum', 'AB-', '01677665544', 'jahanara.begum@example.com', 'Female', 28, 'Chattogram, Bangladesh'),
(5, 'Farhan Khan', 'A+', '01566554433', 'farhan.khan@example.com', 'Male', 32, 'Dhaka, Bangladesh'),
(6, 'Sadia Islam', 'O-', '01455443322', 'sadia.islam@example.com', 'Female', 27, 'Chattogram, Bangladesh'),
(7, 'Rezaul Karim', 'B-', '01344332211', 'rezaul.karim@example.com', 'Male', 29, 'Dhaka, Bangladesh'),
(8, 'Nazma Begum', 'AB+', '01233221100', 'nazma.begum@example.com', 'Female', 26, 'Chattogram, Bangladesh'),
(9, 'Tarek Ahmed', 'O+', '01122110099', 'tarek.ahmed@example.com', 'Male', 31, 'Dhaka, Bangladesh'),
(10, 'Salma Akhter', 'A-', '01011009988', 'salma.akhter@example.com', 'Female', 24, 'Chattogram, Bangladesh'),
(11, 'Nasir Uddin', 'B+', '01999887766', 'nasir.uddin@example.com', 'Male', 33, 'Dhaka, Bangladesh'),
(12, 'Shamima Sultana', 'AB-', '01888776655', 'shamima.sultana@example.com', 'Female', 29, 'Chattogram, Bangladesh'),
(13, 'Imran Khan', 'A+', '01777665544', 'imran.khan@example.com', 'Male', 30, 'Dhaka, Bangladesh'),
(14, 'Rima Begum', 'O-', '01666554433', 'rima.begum@example.com', 'Female', 25, 'Chattogram, Bangladesh'),
(15, 'Anwar Hossain', 'B-', '01555443322', 'anwar.hossain@example.com', 'Male', 34, 'Dhaka, Bangladesh'),
(18, 'Mohammad Ali', 'A+', '01568965725', 'ali@gmail.com', 'male', 22, 'Sitakunda,Chattagram');

-- --------------------------------------------------------

--
-- Table structure for table `donar_details`
--

CREATE TABLE `donar_details` (
  `donar_id` int(11) NOT NULL,
  `donar_name` varchar(50) NOT NULL,
  `donar_number` varchar(10) NOT NULL,
  `donar_mail` varchar(50) DEFAULT NULL,
  `donar_age` int(60) NOT NULL,
  `donar_gender` varchar(10) NOT NULL,
  `donar_blood` varchar(10) NOT NULL,
  `donar_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donar_details`
--

INSERT INTO `donar_details` (`donar_id`, `donar_name`, `donar_number`, `donar_mail`, `donar_age`, `donar_gender`, `donar_blood`, `donar_address`) VALUES
(1, 'Mohammad Ali', '184521212', 'ali@gmail.com', 24, 'Male', 'B+', 'Sitakunda,Chittagong'),
(2, 'Nazmul Hasan', '165851212', 'Nz@gmail.com', 22, 'Male', 'O+', 'Kumira,Chittagong'),
(3, 'Farhana Alom', '184598574', 'farhana@gmail.com', 23, 'Female', 'A+', 'Kumira,Chittagong'),
(4, 'Alom Chowduroy', '175562112', 'chy@gmail.com', 26, 'Male', 'AB+', 'Basbadia,Chittagong'),
(5, 'Nafica Chy', '1845454725', 'NChy@gmail.com', 25, 'Female', 'O-', 'Bhtiary,Chittagong'),
(6, 'Abdul Alim', '1654818112', 'alim@gmail.com', 27, 'Male', 'B+', 'Sitakunda,Chittagong'),
(7, 'Abdul Mannan', '1898612212', 'mannan@gmail.com', 24, 'Male', 'B-', 'A K Khan,Chittagong'),
(8, 'Abdul Noman', '189984212', 'noman@gmail.com', 22, 'Male', 'A-', 'Darogahat,Chittagong'),
(9, 'Abdul Rahman', '1612584124', 'rahman@gmail.com', 24, 'Male', 'AB-', 'Akbar Shah,Chittagong'),
(10, 'Ayesha Siddiqua', '1845217888', 'ayesha@gmail.com', 21, 'Female', 'O-', 'Pahartali,Chittagong'),
(11, 'Rafiqul Islam', '1898745124', 'rafiq@gmail.com', 29, 'Male', 'O+', 'Nasirabad,Chittagong'),
(12, 'Mahmuda Begum', '1765545123', 'mahmuda@gmail.com', 28, 'Female', 'A+', 'Hathazari,Chittagong'),
(13, 'Moin Uddin', '1685215478', 'moin@gmail.com', 31, 'Male', 'B+', 'Agrabad,Chittagong'),
(14, 'Shirin Akter', '1899785214', 'shirin@gmail.com', 27, 'Female', 'AB-', 'Bakolia,Chittagong'),
(15, 'Sajjad Hossain', '1854123478', 'sajjad@gmail.com', 25, 'Male', 'A+', 'Khulshi,Chittagong'),
(16, 'Taslima Khan', '1845221144', 'taslima@gmail.com', 30, 'Female', 'O+', 'Halishahar,Chittagong'),
(17, 'Jannatul Ferdous', '1778541245', 'jannat@gmail.com', 23, 'Female', 'B-', 'Chawkbazar,Chittagong'),
(18, 'Habib Ullah', '1895214785', 'habib@gmail.com', 32, 'Male', 'AB+', 'Kotwali,Chittagong'),
(19, 'Sumaiya Yasmin', '1845523147', 'sumaiya@gmail.com', 26, 'Female', 'O-', 'Patenga,Chittagong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `donars`
--
ALTER TABLE `donars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar_details`
--
ALTER TABLE `donar_details`
  ADD PRIMARY KEY (`donar_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `donar_details`
--
ALTER TABLE `donar_details`
  MODIFY `donar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
