-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2024 at 05:07 PM
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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'shaik@gmail.com', 'shaik@11'),
(2, 'abdul@gmail.com', 'abdul@12'),
(3, 'ahad@gmail.com', 'ahad@13');

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
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `message` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `submitted_at`) VALUES
(1, 'Shaik Abdul Ahad', 'shaik.abdul.ahad.001@gmail.com', '01642756988', 'Heroes come in all forms. By donating blood, you join a dedicated community committed to saving lives. Your single donation can help multiple patients in need, making you a hero in their eyes.\r\n\r\n\r\n', '2024-11-27 09:52:23'),
(2, 'Abdul Ahad', 'shaikabdulahad2001@gmail.com', '0652756988', 'you join a dedicated community committed to saving lives. Your single donation can help multiple patients in need, making you a hero in their eyes.\r\n\r\n\r\n', '2024-11-27 09:59:22'),
(8, 'Abdul', 'abdulahad2@gmail.com', '01846545583', 'The need for blood can spike. Regular donations ensure that blood banks are prepared for these emergencies, providing critical support when it\'s needed most. Moreover', '2024-11-28 13:59:04');

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
(18, 'Mohammad Ali', 'A+', '01568965725', 'ali@gmail.com', 'male', 22, 'Sitakunda,Chattagram'),
(19, 'Tareq Hossen', 'O+', '01860605443', 'mdtareq213013@gmail.com', 'male', 24, 'Sitakunda,Chattagram');

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

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `feedback`, `created_at`, `email`) VALUES
(12, 'Abdul Karim', 'This service is a lifesaver! I found a blood donor for my brother in no time. Thank you!', '2024-11-27 09:26:34', 'abdul.karim@gmail.com'),
(13, 'Fatima Akhter', 'The website is very easy to use, and the donor database is extensive. Highly recommended!', '2024-11-27 09:26:34', 'fatima.akhter@yahoo.com'),
(14, 'Shamim Hossain', 'Great initiative. It made finding a donor in my locality super quick and hassle-free.', '2024-11-27 09:26:34', 'shamim.hossain@gmail.com'),
(15, 'Sumaiya Yasmin', 'This platform helped me save a life. I will forever be grateful for this service.', '2024-11-27 09:26:34', 'sumaiya.yasmin@yahoo.com'),
(16, 'Rafiq Ahmed', 'I love how organized the donor information is. It’s a great platform for emergencies.', '2024-11-27 09:26:34', 'rafiq.ahmed@gmail.com'),
(17, 'Nasima Begum', 'Thank you for creating such a user-friendly platform. It is so easy to navigate.', '2024-11-27 09:26:34', 'nasima.begum@yahoo.com'),
(18, 'Tanvir Rahman', 'I was skeptical at first, but this service really works. Found a donor within hours.', '2024-11-27 09:26:34', 'tanvir.rahman@gmail.com'),
(19, 'Mitu Chowdhury', 'This is such a noble initiative. It makes the process of finding blood donors seamless.', '2024-11-27 09:26:34', 'mitu.chowdhury@yahoo.com'),
(20, 'Imran Hossain', 'I appreciate the effort behind this project. It’s a blessing for those in need.', '2024-11-27 09:26:34', 'imran.hossain@gmail.com'),
(21, 'Jahanara Begum', 'As a donor, I find it convenient to stay connected with people in need. A great idea!', '2024-11-27 09:26:34', 'jahanara.begum@yahoo.com'),
(22, 'Shaik Abdul Ahad', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit inventore ducimus, ad laudantium adipisci id.', '2024-11-27 09:27:27', 'shaik.abdul.ahad.001@gmail.com'),
(23, 'Abdul', 'The need for blood can spike. Regular donations ensure that blood banks are prepared for these emergencies, providing critical support when it\'s needed most. Moreover', '2024-11-28 13:58:24', 'abdulahad2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users_singup`
--

CREATE TABLE `users_singup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` enum('Male','Female','Other') NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_singup`
--

INSERT INTO `users_singup` (`id`, `name`, `email`, `password`, `phone`, `gender`, `age`, `address`) VALUES
(1, 'Md. Rahman', 'md.rahman@gmail.com', 'password123', '01711223344', 'Male', 30, 'Dhaka, Bangladesh'),
(2, 'Fatima Akter', 'fatima.akter@yahoo.com', 'securepass456', '01899887766', 'Female', 25, 'Chattogram, Bangladesh'),
(3, 'Kamal Ahmed', 'kamal.ahmed@gmail.com', 'mypassword789', '01988776655', 'Male', 35, 'Dhaka, Bangladesh'),
(4, 'Jahanara Begum', 'jahanara.begum@yahoo.com', 'pass56789', '01677665544', 'Female', 28, 'Sylhet, Bangladesh'),
(5, 'Farhan Khan', 'farhan.khan@gmail.com', 'farhanpass123', '01566554433', 'Male', 32, 'Rajshahi, Bangladesh'),
(6, 'Sadia Islam', 'sadia.islam@gmail.com', 'sadiasecure456', '01455443322', 'Female', 27, 'Khulna, Bangladesh'),
(7, 'Rezaul Karim', 'rezaul.karim@yahoo.com', 'rezaulpass789', '01344332211', 'Male', 29, 'Barisal, Bangladesh'),
(8, 'Nazma Begum', 'nazma.begum@gmail.com', 'nazmapass234', '01233221100', 'Female', 26, 'Chattogram, Bangladesh'),
(9, 'Tarek Ahmed', 'tarek.ahmed@yahoo.com', 'tarekpass456', '01122110099', 'Male', 31, 'Mymensingh, Bangladesh'),
(10, 'Salma Akhter', 'salma.akhter@gmail.com', 'salmapass567', '01011009988', 'Female', 24, 'Dhaka, Bangladesh'),
(11, 'Abdul Ahad', 'abdul@gmail.com', 'abdul@gmail.com', '01652856988', 'Male', 24, 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_singup`
--
ALTER TABLE `users_singup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donars`
--
ALTER TABLE `donars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `donar_details`
--
ALTER TABLE `donar_details`
  MODIFY `donar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users_singup`
--
ALTER TABLE `users_singup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
