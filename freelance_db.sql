-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2021 at 02:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_orders`
--

CREATE TABLE `client_orders` (
  `id` bigint(50) NOT NULL,
  `FRname` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `F_Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_orders`
--

INSERT INTO `client_orders` (`id`, `FRname`, `phone`, `work_type`, `email`, `client_name`, `F_Description`) VALUES
(2, 'Mostafa ahmed', '1126719343', 'Accounting', 'mostafa@yahoo.com', 'Mohammed', ''),
(3, 'Mostafa ahmed', '1126719343', 'Accounting', 'mostafa@yahoo.com', 'Tamer', ''),
(4, 'Mostafa ahmed', '1126719343', 'Accounting', 'mostafa@yahoo.com', 'Tamer', ''),
(5, 'Ali', '1003973321', 'Writing', 'ali@yahoo.com', 'Tamer', ''),
(6, 'Ali', '1003973321', 'Writing', 'ali@yahoo.com', 'Mohammed', ''),
(7, 'Ali', '1003973321', 'Writing', 'ali@yahoo.com', 'Mohammed', ''),
(8, 'Ali', '1003973321', 'Writing', 'ali@yahoo.com', 'Nader', 'what you want on your work ?'),
(9, 'Ali', '1003973321', 'Writing', 'ali@yahoo.com', 'Nagham', ''),
(10, 'Ali', '1003973321', 'Writing', 'ali@yahoo.com', 'Tamer', 'we can deal with us');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_orders`
--

CREATE TABLE `freelance_orders` (
  `id` bigint(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `freelancer_name` varchar(100) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `C_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `freelance_orders`
--

INSERT INTO `freelance_orders` (`id`, `uname`, `phone`, `freelancer_name`, `work_type`, `email`, `C_description`) VALUES
(5, 'Nader', '1126719343', 'Hala', 'Marketing', 'nader@yahoo.com', 'i need help in my work'),
(7, 'Nagham', '1126719343', 'Nada', 'Finance', 'nagham@gmail.com', 'can you help me in my work?!'),
(8, 'Nagham', '1126719343', 'Ahmed', 'Finance', 'nagham@gmail.com', 'you can call me to make a deal '),
(9, 'Tamer', '1126719343', 'Ahmed', 'Writing', 'tamer@yahoo.com', 'i need writing paper , how much please?'),
(11, 'Nader', '1126719343', 'Ali', 'Marketing', 'nader@yahoo.com', 'advertising on my work'),
(12, 'Nader', '1126719343', 'Ali', 'Marketing', 'nader@yahoo.com', 'how much please?'),
(13, 'Nader', '1126719343', 'Ali', 'Marketing', 'nader@yahoo.com', 'can you help me to advertising my work? ang how much ?'),
(14, 'Nader', '1126719343', 'Ali', 'Marketing', 'nader@yahoo.com', 'can you call me ?'),
(15, 'Nader', '1126719343', 'Ali', 'Marketing', 'nader@yahoo.com', 'how much to do my work?'),
(16, 'Nader', '1126719343', 'Ali', 'Marketing', 'nader@yahoo.com', 'i need help'),
(17, 'Nader', '1126719343', 'Ali', 'Marketing', 'nader@yahoo.com', 'i need writing paper'),
(18, 'Nader', '1126719343', 'Nada', 'Marketing', 'nader@yahoo.com', 'i need advertising');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) NOT NULL,
  `client_name` varchar(100) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `budget` bigint(20) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `length` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `client_name`, `title`, `budget`, `work_type`, `experience`, `length`, `description`, `date`) VALUES
(21, 'Clara Emad', 'creating logo for my startup', 300, 'Design & Creative', 'entry', 'week', 'i need someone to create a logo for my startup. i dont need it to have alot of complexity. just simple clean look will do the job.', '2021-01-31 17:09:52'),
(22, 'Clara Emad', 'make some ui designs for my billboards', 12000, 'Design & Creative', 'expert', '3months', 'i need someone who is really into design to make some creative designs for my billboards that are all over cairo city.', '2021-01-31 17:14:32'),
(23, 'Sara Hashem', 'i need a graphic designer for some designs', 4500, 'Design & Creative', 'intermediate', '2weeks', 'i need a graphic designer to create some designs for my website. the details is gonna be one the phone.', '2021-01-31 17:16:13'),
(24, 'Yara Nasri', 'creating the accounting for my medical company', 24000, 'Finance & Accounting', 'expert', '3months', 'i need an expert to be the accountant of our company. we deliver medical supplements to the doctors. and i need an accountant to set the contracts for us.', '2021-01-31 17:18:19'),
(25, 'Tarek Mohamed', 'creating an e-commerce website for me', 28000, 'Development & IT', 'expert', '6month', 'i need an expert web developer to create an E-commerce website for my clothes shop. i need it to have logging system, payment methods, pages for each product, and a cart for the users to collect what they are going to buy. details on phone.', '2021-01-31 17:20:00'),
(26, 'Yara Nasri', 'Creating personal portfolio', 8000, 'Development & IT', 'intermediate', 'month', 'i need a web developer to create a personal portfolio for me as i am selling products and i want to advertise myself online.', '2021-01-31 17:21:58'),
(27, 'BobA', 'sales', 100, 'Sales & Marketing', 'intermediate', '2weeks', 'i need someone to design logo', '2021-04-13 22:29:18'),
(28, 'Taha', 'Photoshop logo ', 200, 'Design & Creative', 'expert', 'week', 'i need someone to design my logo company', '2021-04-14 16:06:46'),
(29, 'BobA', 'make a website', 20000, 'Development & IT', 'expert', '3months', 'i need someone make a website ', '2021-04-18 22:21:06'),
(30, 'yassmin', 'Design (logo)', 1500, 'Design & Creative', 'intermediate', 'week', 'i need graphic designer', '2021-05-01 21:00:15'),
(31, 'yassmin', 'Write in word ', 500, 'Writing', 'expert', 'week', 'i need someone to write a documentation in word', '2021-05-01 21:01:46'),
(33, 'Nagham', 'Photoshop logo ', 2000, 'Design & Creative', 'expert', '2weeks', 'i need someone to create a design logo', '2021-05-11 22:57:33'),
(34, 'Nagham', 'create a website', 5000, 'Development & IT', 'expert', '3months', 'someone to create a website using php and mysql', '2021-05-11 23:00:11'),
(35, 'Nagham', 'Accounting', 2500, 'Accounting', 'intermediate', 'week', 'accounting process', '2021-05-11 23:06:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `work_type` varchar(100) NOT NULL,
  `user_role` varchar(100) NOT NULL,
  `balance` bigint(20) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `firstname`, `lastname`, `email`, `password`, `user_name`, `phone`, `work_type`, `user_role`, `balance`, `profile_pic`, `date`) VALUES
(45, 818785, 'mostafa', 'ahmed', 'mostafa@yahoo.com', '123', 'Mostafa ahmed', 1126719343, 'Accounting', 'freelancer', 2091, '1618420979team-3.jpg', '2021-07-02 21:46:18'),
(50, 7862330742117771257, 'Ali', 'omar', 'ali@yahoo.com', '123', 'Ali', 1003973321, 'Writing', 'freelancer', 2992, '1620770144photo-1557862921-37829c790f19.jpg', '2021-07-03 00:22:45'),
(51, 466373878004, 'Nada', 'mohamed', 'nada@gmail.com', '12', 'Nada', 1293475621, 'Marketing', 'freelancer', 0, '1620771375cheerful-curly-business-girl-wearing-glasses_176420-206.jpg', '2021-05-11 22:16:15'),
(52, 70573824993761, 'Hala', 'yasser', 'hala@yahoo.com', '12', 'Hala', 103746372, 'Finance', 'freelancer', 0, '1620771571cheerful-middle-aged-woman-with-curly-hair_1262-20859.jpg', '2021-05-11 22:19:31'),
(53, 77810815333267, 'Ahmed', 'salah', 'ahmed@yahoo.com', '123', 'Ahmed', 1126719343, 'Design', 'freelancer', 0, '1620771814portrait-smiling-young-man-eyewear_171337-4842.jpg', '2021-05-11 22:23:34'),
(54, 145763811510157269, 'Yassin', 'mohammed', 'yassin@yahoo.com', '12', 'Yassin', 1126719343, 'Translation', 'freelancer', 0, '1620771975businessperson-smile-photography-royalty-free-png-favpng-E5NfNQi1jiJJAjAYz9sAyhb1N.jpg', '2021-05-11 22:26:15'),
(55, 1271644930385, 'Tamer', 'Mohammed', 'tamer@yahoo.com', '12', 'Tamer', 1126719343, 'Writing', 'client', 1998, '1620772448photo-1500648767791-00dcc994a43e.jpg', '2021-07-02 22:08:08'),
(56, 5319124904748282696, 'Mohammed', 'yehia', 'mohamed@gmail.com', '12', 'Mohammed', 1126719343, 'Writing', 'client', 0, '1620772574depositphotos_12560182-stock-photo-handsome-man-with-eyeglasses.jpg', '2021-05-11 22:36:14'),
(57, 115087852349, 'Nagham', ' Ahmed', 'nagham@gmail.com', '12', 'Nagham', 1126719343, 'Finance', 'client', 1997, '1620772863photo-1544005313-94ddf0286df2.jpg', '2021-07-02 22:06:18'),
(60, 127280, 'Nader', 'samir', 'nader@yahoo.com', '12', 'Nader', 1126719343, 'Marketing', 'client', 2928, '1620773527depositphotos_19473595-stock-photo-young-casual-business-man.jpg', '2021-07-03 00:05:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_orders`
--
ALTER TABLE `client_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelance_orders`
--
ALTER TABLE `freelance_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_orders`
--
ALTER TABLE `client_orders`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `freelance_orders`
--
ALTER TABLE `freelance_orders`
  MODIFY `id` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
