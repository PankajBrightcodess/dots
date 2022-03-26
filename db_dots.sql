-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 01:47 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dots`
--

-- --------------------------------------------------------

--
-- Table structure for table `dot_about`
--

CREATE TABLE `dot_about` (
  `pid` int(11) NOT NULL,
  `vision` text NOT NULL,
  `Instruction` text NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dot_about`
--

INSERT INTO `dot_about` (`pid`, `vision`, `Instruction`, `date`, `status`) VALUES
(8, 'We have an impact on the academic experiences of our students, helping them connect with transformative opportunities and resources. These experiences expand their perspective of themselves and the world.', '', '2022-03-26', 1),
(9, '', 'The candidates are advised to reach centre as per the time slot indicated against reporting / entry time in the admit card.', '2022-03-26', 1),
(10, '', 'Candidates should note that no candidate will be allowed entry after the entry closing time in any circumstance or due to any reason. Gates will be closed strictly at entry closing time.', '2022-03-26', 1),
(11, '', 'The candidates are advised to reach centre as per the time slot indicated against reporting / entry time in the admit card.', '2022-03-26', 1),
(12, '', 'Candidates should note that no candidate will be allowed entry after the entry closing time in any circumstance or due to any reason. Gates will be closed strictly at entry closing time.', '2022-03-26', 1),
(13, '', 'Candidates should invariably bring the following at the time of reporting for the examination:\r\na) Admission certificate.\r\nb)Two copies of their latest coloured passport size photo.\r\nc) Atleast one valid photo bearing identity proof in original with clear', '2022-03-26', 1),
(14, '', 'Candidates shall be permitted to appear in the exam only at the venue as specified in the admission certificate.\r\n', '2022-03-26', 1),
(15, '', 'Candidates must ensure that they do not appear in the examination more than once. Otherwise candidature of such candidates would be cancelled and appropriate action will be taken against them.\r\n', '2022-03-26', 1),
(16, '', 'Candidature of candidates is purely provisional it is advised that candidates should satisfy themselves that they fulfill all the eligibility conditions. If at any stage, it is found that a candidate does not fulfill any of the eligibility condition his / her candidature shall be cancelled.', '2022-03-26', 1),
(17, '', 'Prohibited items such as watches, books, pens, paper chits, magazines, electronic gadgets, etc are strictly not allowed in the examination lab.\r\n', '2022-03-26', 1),
(18, '', 'Candidates are advised not to bring bags and prohibited items into the examination venue. In case they bring any such item they would have to make their own arrangements for safe custody of such items. The commission will not be liable to make any arrangement for such things.', '2022-03-26', 1),
(19, '', 'Candidates are advised to visit the exam venue at least one day in advance so that they can reach the examination venue on the date of exam in time.\r\n', '2022-03-26', 1),
(20, '', 'No candidate will be allowed to leave the examination lab before the completion of the examination time for any reason without permission.', '2022-03-26', 1),
(21, '', 'Pen and paper for rough work would be provided in the examination lab.', '2022-03-26', 1),
(22, '', 'Candidate must strictly abide by the instructions given by the exam functionaries.', '2022-03-26', 1),
(23, '', 'If any candidate is found obstructing the conduct of the examination or creating disturbances at the examination venue his / her candidature shall be cancelled.', '2022-03-26', 1),
(24, '', 'If the examination does not commence at the scheduled time, candidates should follow the instructions of the exam functionaries.\r\n', '2022-03-26', 1),
(25, '', 'If any candidate is found in inebriated state that candidate will not be allowed entry to the venue.', '2022-03-26', 1),
(26, '', 'In case of any doubt or clarification the candidates are advised to contact the concerned regional office personally or through the helpline numbers as indicated in the admission certificate.', '2022-03-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dot_banner`
--

CREATE TABLE `dot_banner` (
  `pid` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dot_banner`
--

INSERT INTO `dot_banner` (`pid`, `image`, `date`, `status`) VALUES
(2, '/assets/uploadimage/banner/1648268537.jpg', '2022-03-25', 1),
(3, '/assets/uploadimage/banner/1648268568.jpg', '2022-03-25', 1),
(4, '/assets/uploadimage/banner/1648268578.jpg', '2022-03-25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dot_gallery`
--

CREATE TABLE `dot_gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dot_gallery`
--

INSERT INTO `dot_gallery` (`id`, `image`, `added_on`, `status`) VALUES
(1, '/assets/uploadimage/gallery/1648211801.jpg', '2022-03-24', '1'),
(2, '/assets/uploadimage/gallery/1648212054.jpg', '2022-03-24', '1'),
(3, '/assets/uploadimage/gallery/1648211830.jpg', '2022-03-24', '1'),
(4, '/assets/uploadimage/gallery/1648211845.jpg', '2022-03-25', '1'),
(5, '/assets/uploadimage/gallery/1648211883.jpg', '2022-03-25', '1'),
(6, '/assets/uploadimage/gallery/1648211892.jpg', '2022-03-25', '1'),
(8, '/assets/uploadimage/gallery/1648211917.jpg', '2022-03-25', '1'),
(9, '/assets/uploadimage/gallery/1648211929.jpg', '2022-03-25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dot_members`
--

CREATE TABLE `dot_members` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `vp` varchar(100) DEFAULT NULL,
  `salt` varchar(100) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 0,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dot_members`
--

INSERT INTO `dot_members` (`id`, `username`, `mobile`, `name`, `email`, `password`, `vp`, `salt`, `status`, `created_on`, `updated_on`) VALUES
(14, 'Pankaj Mani Tiwari', '9297827636', NULL, 'tcs.pankaj29@gmail.com', '6c94b95167fc6232890f9f9f0f639713', '12345', 'IQPb3U2RhSuOLYsy', 1, '2021-09-17 11:03:20', '2021-09-17 11:03:20'),
(15, '7894561235', '7894561235', 'Sonu Tiwari', 'pmt.pankaj29@gmail.com', '9f85b2cb98e6a28f620f30baf893b115', '87632', 'pgxTaeXq1LsCnJYI', 1, '2021-09-17 11:10:30', '2021-09-17 11:10:30'),
(16, '123456', '123456', 'abcde', 'jhfj@gmail.com', '262aaaf62a7a66f432caac80bf6fdcea', '12345', '4TdlvrImkotqB0R1', 1, '2021-09-21 10:53:48', '2021-09-21 10:53:48'),
(17, '7050062995', '7050062995', 'Sonu Tiwari', 'pmt.pankaj29@gmail.com', '27378f9b7bc17dd078950a705b8fc671', '748596', 'jfgMIV8z5KyQCnto', 1, '2021-10-19 15:36:54', '2021-10-19 15:36:54'),
(18, '1234567897', '1234567897', 'Raju', 'a@gmail.com', 'd92c3b4abbff787aa2f6dd0ddf85b553', '12345', 'R20YUO9345g8JZKx', 1, '2021-11-17 16:11:55', '2021-11-17 16:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `dot_notice`
--

CREATE TABLE `dot_notice` (
  `pid` int(11) NOT NULL,
  `notice` text NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `noticefile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dot_notice`
--

INSERT INTO `dot_notice` (`pid`, `notice`, `date`, `status`, `noticefile`) VALUES
(3, 'Registration started soon......', '2022-03-26', 1, '/assets/uploadimage/noticefile/1648280090.pdf'),
(4, 'Registration form avaliable here.....', '2022-03-26', 1, '/assets/uploadimage/noticefile/1648280127.docx'),
(6, 'Demo', '2022-03-26', 1, '/assets/uploadimage/noticefile/1648280156.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `dot_registration`
--

CREATE TABLE `dot_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `aadhar` varchar(20) DEFAULT NULL,
  `contect` varchar(20) DEFAULT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `pincode` varchar(20) DEFAULT NULL,
  `school` varchar(100) DEFAULT NULL,
  `class` varchar(100) DEFAULT NULL,
  `roll` varchar(50) DEFAULT NULL,
  `collage` varchar(100) DEFAULT NULL,
  `course` varchar(100) DEFAULT NULL,
  `session` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `order_no` varchar(30) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `payment_status` varchar(1) NOT NULL DEFAULT '0',
  `payment_id` varchar(100) DEFAULT NULL,
  `payment_details` text DEFAULT NULL,
  `added_on` date DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dot_registration`
--

INSERT INTO `dot_registration` (`id`, `name`, `fname`, `dob`, `aadhar`, `contect`, `mname`, `address`, `pincode`, `school`, `class`, `roll`, `collage`, `course`, `session`, `image`, `order_no`, `amount`, `payment_status`, `payment_id`, `payment_details`, `added_on`, `status`) VALUES
(93, 'Pankaj Mani Tiwari', 'Pankaj Mani jhbgwdu2jfhsdfgsff', '2021-10-15', '741852963524', '7894561235', 'sdfsdfsdfsdf', 'sdfsdfsdf', 'sdfsdfsdff', 'sdfsdfsf', 'sfsdfs', 'sdffsdfsdf', 'sfsdfsdfsd', 'sfsdf', 'sfsdfsdfsdfsdfs', NULL, 'lJ1y7bQN0tZqcgm', '200', '0', NULL, NULL, '2021-10-26', NULL),
(94, 'pankaj', 'Sidheshwar Nath Tiwari', '2021-10-08', '748596365241', '7894561235', 'Veena Tiwari', 'xfgvdfgdfgd', 'dgdfgdfgdfggdf', 'dfgdfgdfg', 'dffgdfgd', 'dfgdfgdfg', 'dfgdfg', 'dfgdfgdg', 'dfgdfgdf', NULL, 'pKzamsP7RIBFTub', '200', '0', NULL, NULL, '2021-10-26', NULL),
(95, 'Pankaj Mnai Tiwatri', 'sdfsdfsf', '2021-10-15', '7485963652', '4567891235', 'sfsdfsdfsd', 'sfsdf', 'fsdfsdfsd', 'sfsdfsd', 'sdfsdfs', 'fsdfsdf', 'sdfsdf', 'sfsdf', 'sfdsfdfsdfsfd', NULL, 'QsUkfTKaPFLdEN9', '200', '0', NULL, NULL, '2021-10-26', NULL),
(96, 'Pankaj Mani Tiwari', 'Sidheshwar Nath Tiwari', '2021-10-20', '748596365241', '1234567895', 'Veena Tiwari', 'fgdfgdfgd', 'sfsdfsdf', 'sdfdsfsdf', 'sfsdf', 'sfsdfsdf', 'sdfsdf', 'fsdsdffs', 'fdsdff', NULL, 'D4Nzj0kd7SgFoIV', '200', '1', 'pay_IDxp2VlF0aY7cz', '\"{\\\"razorpay_payment_id\\\":\\\"pay_IDxp2VlF0aY7cz\\\",\\\"merchant_order_id\\\":\\\"FlSw0vNJE4TxdcUPyq\\\",\\\"merchant_trans_id\\\":\\\"1635251027\\\",\\\"merchant_product_info_id\\\":\\\"Payment for Admission\\\",\\\"card_holder_name_id\\\":\\\"Pankaj Mani Tiwari\\\",\\\"merchant_total\\\":\\\"20000\\\",\\\"merchant_amount\\\":\\\"200\\\"}\"', '2021-10-26', NULL),
(97, 'Pankaj ', 'Sidheshwar Nath Tiwari', '2021-10-14', '748596321445', '7485963652', 'Veena Tiwari', 'Ranchi Jharkhand', 'Jharkahand', 'Ranchi Schol', '6th', '745', 'Janta Inter Collage', '123', '1222', NULL, '6EIAk83t0axiHr7', '200', '1', 'pay_IEEnPgZrLbUzvt', '\"{\\\"razorpay_payment_id\\\":\\\"pay_IEEnPgZrLbUzvt\\\",\\\"merchant_order_id\\\":\\\"gQvRMWdB9mlAb5eJVo\\\",\\\"merchant_trans_id\\\":\\\"1635310789\\\",\\\"merchant_product_info_id\\\":\\\"Payment for Admission\\\",\\\"card_holder_name_id\\\":\\\"Pankaj \\\",\\\"merchant_total\\\":\\\"20000\\\",\\\"merchant_amount\\\":\\\"200\\\"}\"', '2021-10-27', NULL),
(98, 'Sonu Singh', 'dsfgsdfsd', '2021-10-14', '748596365241', '1234567895', 'sfsdf', 'sfsdf', 'sfsdfsd', 'sfsdf', 'sfsdfs', 'dfsdfsdf', 'sfsds', 'fsfsd', 'sfsdfsd', NULL, 'DRbY6WTyc1mgOiu', '200', '1', 'pay_IEF258HO7gle2X', '\"{\\\"razorpay_payment_id\\\":\\\"pay_IEF258HO7gle2X\\\",\\\"merchant_order_id\\\":\\\"0joFQmskMnb2C63GHd\\\",\\\"merchant_trans_id\\\":\\\"1635311611\\\",\\\"merchant_product_info_id\\\":\\\"Payment for Admission\\\",\\\"card_holder_name_id\\\":\\\"Sonu Singh\\\",\\\"merchant_total\\\":\\\"20000\\\",\\\"merchant_amount\\\":\\\"200\\\"}\"', '2021-10-27', NULL),
(99, 'ertfe', 'kjbwdkfndjsg', '2021-11-11', '71634882163211323', '978645643516', 'dregdretgdrfderfg', 'dfgdfgdfg', 'sfsdf', 'dfgdfgdf', 'dgfdfgdf', 'gdgdfg', 'dfgdfgdf', 'ddfgdf', 'dgfgdfg', NULL, 'VPRygoUwWXuGDSp', '200', '0', NULL, NULL, '2021-11-17', NULL),
(100, 'ertfe', 'kjbwdkfndjsg', '2021-11-11', '71634882163211323', '978645643516', 'dregdretgdrfderfg', 'dfgdfgdfg', 'sfsdf', 'dfgdfgdf', 'dgfdfgdf', 'gdgdfg', 'dfgdfgdf', 'ddfgdf', 'dgfgdfg', NULL, '0i5kRYweXnLQMCU', '200', '0', NULL, NULL, '2021-11-17', NULL),
(101, 'ertfe', 'kjbwdkfndjsg', '2021-11-11', '71634882163211323', '978645643516', 'dregdretgdrfderfg', 'dfgdfgdfg', 'sfsdf', 'dfgdfgdf', 'dgfdfgdf', 'gdgdfg', 'dfgdfgdf', 'ddfgdf', 'dgfgdfg', NULL, 'tDzGpMfrSVJxyZu', '200', '0', NULL, NULL, '2021-11-17', NULL),
(102, 'Pankaj', 'Sidheshwar Nath Tiwari', '2021-11-10', '7485963652458', '1563524195', 'Veena Tiwari', 'Ranchi', 'Jharkhnad', 'Pankaj Mani Tiwari', '5', '748596', 'asdasd asdsad asdasd', 'hhhhhhhhdkjs', '20001', NULL, 'kDnhKbtF9X3Msjl', '200', '0', NULL, NULL, '2021-11-29', NULL),
(103, 'Pankaj', 'Sidheshwar Nath Tiwari', '2021-11-10', '7485963652458', '1563524195', 'Veena Tiwari', 'Ranchi', 'Jharkhnad', 'Pankaj Mani Tiwari', '5', '748596', 'asdasd asdsad asdasd', 'hhhhhhhhdkjs', '20001', NULL, '5PzufCF7gX36kmv', '200', '0', NULL, NULL, '2021-11-29', NULL),
(104, 'asdasd asdsad asdasd', 'dfsgdfgdfdg', '2021-11-18', '21', '748582524', 'dfgdfgdfgdfgdfg', 'asdasd', 'asdasda', 'dfgdfgdfgdf', 'gdfgdfgdf', 'gdfgdfg', 'dfgdfgdfg', 'dfgdfgdfg', 'dgdfgdf', NULL, 'M8e1zlaYK9Iwfoc', '200', '0', NULL, NULL, '2021-11-29', NULL),
(105, 'asddas adasd adasd', 'kjhkvndvkldfevg', '2021-11-23', '74859636525415795458', '54697813254', 'sgrtdfgdfesgdfg', 'dasda', 'dsasdasd', 'fddfsdgds', 'dfgdsgfd', 'dfsgdsgdfsg', 'dfgrtdfsgdfs', 'dfgdsgfdfsdsf', 'dfsgfdsgdsfg', NULL, 'soBVlLXdw71fZYv', '200', '0', NULL, NULL, '2021-11-29', NULL),
(106, 'asddas adasd adasd', 'kjhkvndvkldfevg', '2021-11-23', '74859636525415795458', '54697813254', 'sgrtdfgdfesgdfg', 'dasda', 'dsasdasd', 'fddfsdgds', 'dfgdsgfd', 'dfsgdsgdfsg', 'dfgrtdfsgdfs', 'dfgdsgfdfsdsf', 'dfsgfdsgdsfg', NULL, 'gombW1ZhO4wctY7', '200', '0', NULL, NULL, '2021-11-29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dot_sidebar`
--

CREATE TABLE `dot_sidebar` (
  `id` int(11) NOT NULL,
  `activate_menu` varchar(255) NOT NULL,
  `activate_not` varchar(255) NOT NULL,
  `base_url` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `role_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dot_sidebar`
--

INSERT INTO `dot_sidebar` (`id`, `activate_menu`, `activate_not`, `base_url`, `icon`, `name`, `parent`, `position`, `role_id`, `status`) VALUES
(11, 'Registration List', '{\"0\":\"\"}', 'home/registrationlist', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Registration List', 0, 4, '\"\"admin\"\"', 1),
(12, 'Dashboard', '{\"0\":\"\"}', 'home/dashboard', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Dashboard', 0, 1, '\"admin\"', 1),
(14, 'Gallery', '{\"0\":\"\"}', 'home/gallery', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Gallery', 0, 5, '\"\"admin\"\"', 1),
(15, 'Banner', '{\"0\":\"\"}', 'home/banner', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Banner', 0, 2, '\"\"admin\"\"', 1),
(16, 'Notice-Board', '{\"0\":\"\"}', 'home/notice', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'Notice-Board', 0, 3, '\"\"admin\"\"', 1),
(17, 'About_us', '{\"0\":\"\"}', 'home/about_us', '<i class=\"nav-icon fa fa-bullseye\" aria-hidden=\"true\"></i>', 'About_us', 0, 6, '\"admin\"', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dot_users`
--

CREATE TABLE `dot_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vp` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `salt` varchar(20) NOT NULL,
  `otp` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dot_users`
--

INSERT INTO `dot_users` (`id`, `username`, `mobile`, `name`, `email`, `password`, `vp`, `role`, `salt`, `otp`, `token`, `status`, `created_on`, `updated_on`) VALUES
(1, 'admin', '7894561230', 'Admin', 'admin@gmail.com', '2021ac8d19debae18e7a13679f8091fa', '12345', 'admin', 'MOPWgKdeZyU2kAL9', '5e74a5b009e1b7c3f7c49c40bbba95fc', '', 1, '2020-01-07 17:05:51', '2020-01-07 17:36:42'),
(3, 'pankaj', '7894562587', 'Ajay singh Singh', 'adb@gmail.com', '5d469185c360f624ffb26c7af8105a2f', '12345', '2', 'CVNqIRTJkGiLevUd', '', '', 1, '2021-08-26 14:00:09', '2021-08-26 14:00:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dot_about`
--
ALTER TABLE `dot_about`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `dot_banner`
--
ALTER TABLE `dot_banner`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `dot_gallery`
--
ALTER TABLE `dot_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_members`
--
ALTER TABLE `dot_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_notice`
--
ALTER TABLE `dot_notice`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `dot_registration`
--
ALTER TABLE `dot_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_sidebar`
--
ALTER TABLE `dot_sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dot_users`
--
ALTER TABLE `dot_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dot_about`
--
ALTER TABLE `dot_about`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `dot_banner`
--
ALTER TABLE `dot_banner`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dot_gallery`
--
ALTER TABLE `dot_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dot_members`
--
ALTER TABLE `dot_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dot_notice`
--
ALTER TABLE `dot_notice`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dot_registration`
--
ALTER TABLE `dot_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `dot_sidebar`
--
ALTER TABLE `dot_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `dot_users`
--
ALTER TABLE `dot_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
