-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 02:00 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subt_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_05_04_103054_CreateMasterTransTables', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_attachment`
--

CREATE TABLE `mst_attachment` (
  `att_id` int(10) UNSIGNED NOT NULL,
  `att_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `att_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `att_sub_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `att_sub_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_eligible_rate`
--

CREATE TABLE `mst_eligible_rate` (
  `rate_id` int(10) UNSIGNED NOT NULL,
  `att_id` int(10) UNSIGNED NOT NULL,
  `manf_id` int(10) UNSIGNED NOT NULL,
  `elg_rate_unit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_im_regs`
--

CREATE TABLE `mst_im_regs` (
  `im_no` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `im_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pending',
  `im_unit_name` text COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_add` text COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_tal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_dist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_pin` int(11) NOT NULL,
  `im_unit_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_mob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_web` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_ssi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_for` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_unit_cat` int(11) NOT NULL,
  `im_unit_firm` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_reg_auth` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_prems` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_branch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im__bank_add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_pin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_mob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_acc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `im_bank_ifsc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mst_im_regs`
--

INSERT INTO `mst_im_regs` (`im_no`, `user_id`, `im_status`, `im_unit_name`, `im_unit_add`, `im_unit_tal`, `im_unit_dist`, `im_unit_state`, `im_unit_pin`, `im_unit_fax`, `im_unit_mob`, `im_unit_email`, `im_unit_web`, `im_unit_ssi`, `im_unit_for`, `im_unit_cat`, `im_unit_firm`, `im_reg_auth`, `im_prems`, `im_bank_name`, `im_bank_branch`, `im__bank_add`, `im_bank_pin`, `im_bank_mob`, `im_bank_acc`, `im_bank_ifsc`, `created_at`, `updated_at`) VALUES
(1, 1, 'active', 'test1', 'test1test1test1', 'test1test1', 'Pune', 'Maharashtra', 400023, '7566434', '976756566', 'test1@in.in', 'test1.com', 'SSI', 'New Unit', 0, 'Proprietorship', '', '', '', '', '', '', '', '', '', '2017-05-04 05:24:28', '2017-05-04 05:24:28'),
(2, 1, 'pending', 'test2', 'test2test2test2', 'test2test2', 'Mumbai', 'Maharashtra', 43343, '7565645', '9765445454', 'test2@in.in', 'test2.in', 'SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-04 05:28:42', '2017-05-04 05:28:42'),
(3, 1, 'pending', 'test_3', 'test_3test_3test_3', 'test_3test_3', 'Mumbai', 'Maharashtra', 43454, '75454545', '87656454', 'test_3@in.in', 'test_3.in', 'SSI', 'New Unit', 0, 'Proprietorship', '', '', '', '', '', '', '', '', '', '2017-05-04 05:30:26', '2017-05-04 05:30:26'),
(4, 1, 'pending', 'test4', 'test4test4test4', 'test4test4', 'Mumbai', 'Maharashtra', 4544, '756545', '967656445', 'test4@gmail.com', 'test4.com', 'SSI', 'New Unit', 0, 'Proprietorship', '', '', '', '', '', '', '', '', '', '2017-05-04 05:52:03', '2017-05-04 05:52:03'),
(5, 1, 'pending', 'test5', 'test5test5test5', 'test5test5', 'Mumbai', 'Maharashtra', 534343, '8665454', '765645454', 'test5@gm.com', 'test5.com', 'Non SSI', 'New Unit', 0, 'Partnership', '', '', '', '', '', '', '', '', '', '2017-05-04 05:53:20', '2017-05-04 05:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `mst_kit`
--

CREATE TABLE `mst_kit` (
  `kit_id` int(10) UNSIGNED NOT NULL,
  `att_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_manufacturer`
--

CREATE TABLE `mst_manufacturer` (
  `manf_id` int(10) UNSIGNED NOT NULL,
  `manf_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manf_add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manf_dist` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manf_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manf_pin` int(11) NOT NULL,
  `manf_bank_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manf_bank_add` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manf_bank_branch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `manf_acc_no` int(11) NOT NULL,
  `manf_bank_ifsc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_sub_rule`
--

CREATE TABLE `mst_sub_rule` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `caste_id` int(10) UNSIGNED NOT NULL,
  `up_id` int(10) UNSIGNED NOT NULL,
  `sub_percent` int(11) NOT NULL,
  `sub_cap_amt` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_upgrade_type`
--

CREATE TABLE `mst_upgrade_type` (
  `up_id` int(10) UNSIGNED NOT NULL,
  `up_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trn_applicant_details`
--

CREATE TABLE `trn_applicant_details` (
  `app_id` int(10) UNSIGNED NOT NULL,
  `im_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_gen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_rel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `app_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trn_applicant_details`
--

INSERT INTO `trn_applicant_details` (`app_id`, `im_no`, `app_name`, `app_gen`, `app_rel`, `app_cat`, `created_at`, `updated_at`) VALUES
(1, '1', 'test1_1', 'Female', 'Hindu', 'SC/ ST', '2017-05-04 05:24:28', '2017-05-04 05:24:28'),
(2, '1', '', '', '', '', '2017-05-04 05:24:28', '2017-05-04 05:24:28'),
(3, '2', '', 'Female', 'Select', 'Select', '2017-05-04 05:28:42', '2017-05-04 05:28:42'),
(4, '2', 'test2_1', 'Male', 'Hindu', 'OBC', '2017-05-04 05:28:42', '2017-05-04 05:28:42'),
(5, '3', 'test_3_1', 'Female', 'Hindu', 'SC/ ST', '2017-05-04 05:30:27', '2017-05-04 05:30:27'),
(6, '3', '', '', '', '', '2017-05-04 05:30:27', '2017-05-04 05:30:27'),
(7, '4', 'test4_1', 'Male', 'Hindu', 'SC/ST', '2017-05-04 05:52:03', '2017-05-04 05:52:03'),
(8, '5', 'test5_1', 'Male', 'Hindu', 'OBC', '2017-05-04 05:53:20', '2017-05-04 05:53:20'),
(9, '5', 'test5_2', 'Female', 'Hindu', 'OPEN', '2017-05-04 05:53:20', '2017-05-04 05:53:20');

-- --------------------------------------------------------

--
-- Table structure for table `trn_attachments_details`
--

CREATE TABLE `trn_attachments_details` (
  `inprinc_no` int(10) UNSIGNED NOT NULL,
  `im_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `attachment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quant` int(11) NOT NULL,
  `rate_unit` int(11) NOT NULL,
  `total_cost` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trn_cats`
--

CREATE TABLE `trn_cats` (
  `caste_id` int(10) UNSIGNED NOT NULL,
  `caste_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caste_cat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `caste_rank` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_name` text COLLATE utf8_unicode_ci NOT NULL,
  `co_add` text COLLATE utf8_unicode_ci NOT NULL,
  `co_cont_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_cont_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `co_adhar_no` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `co_name`, `co_add`, `co_cont_name`, `co_cont_no`, `co_adhar_no`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ABCDE1234F', 'Demo@gmail.com', '$2y$10$RTEyfOB9.awRLBiTjeR1TuZnoOyGRh81snJ0qyswfKKDfv/3G.bKO', 'Demo', 'Demo street,Demo Area', 'Demo name', '9876543219', '123456789123', 'user', NULL, '2017-05-04 05:05:29', '2017-05-04 05:05:29'),
(2, 'RO', 'ro@in.in', '$2y$10$RTEyfOB9.awRLBiTjeR1TuZnoOyGRh81snJ0qyswfKKDfv/3G.bKO', '', '', '', '', '', 'RO', NULL, NULL, NULL),
(3, 'JIT', 'jit@in.in', '$2y$10$RTEyfOB9.awRLBiTjeR1TuZnoOyGRh81snJ0qyswfKKDfv/3G.bKO', '', '', '', '66565', '8665', 'JIT', NULL, NULL, NULL),
(4, 'OIC', 'oic@in.in', '$2y$10$RTEyfOB9.awRLBiTjeR1TuZnoOyGRh81snJ0qyswfKKDfv/3G.bKO', '', '', '', '656', '654545', 'OIC', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_attachment`
--
ALTER TABLE `mst_attachment`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `mst_eligible_rate`
--
ALTER TABLE `mst_eligible_rate`
  ADD PRIMARY KEY (`rate_id`),
  ADD KEY `mst_eligible_rate_att_id_foreign` (`att_id`),
  ADD KEY `mst_eligible_rate_manf_id_foreign` (`manf_id`);

--
-- Indexes for table `mst_im_regs`
--
ALTER TABLE `mst_im_regs`
  ADD PRIMARY KEY (`im_no`);

--
-- Indexes for table `mst_kit`
--
ALTER TABLE `mst_kit`
  ADD PRIMARY KEY (`kit_id`),
  ADD KEY `mst_kit_att_id_foreign` (`att_id`);

--
-- Indexes for table `mst_manufacturer`
--
ALTER TABLE `mst_manufacturer`
  ADD PRIMARY KEY (`manf_id`);

--
-- Indexes for table `mst_sub_rule`
--
ALTER TABLE `mst_sub_rule`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `mst_sub_rule_caste_id_foreign` (`caste_id`),
  ADD KEY `mst_sub_rule_up_id_foreign` (`up_id`);

--
-- Indexes for table `mst_upgrade_type`
--
ALTER TABLE `mst_upgrade_type`
  ADD PRIMARY KEY (`up_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `trn_applicant_details`
--
ALTER TABLE `trn_applicant_details`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `trn_attachments_details`
--
ALTER TABLE `trn_attachments_details`
  ADD PRIMARY KEY (`inprinc_no`);

--
-- Indexes for table `trn_cats`
--
ALTER TABLE `trn_cats`
  ADD PRIMARY KEY (`caste_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_name_unique` (`name`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_co_cont_no_unique` (`co_cont_no`),
  ADD UNIQUE KEY `users_co_adhar_no_unique` (`co_adhar_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_attachment`
--
ALTER TABLE `mst_attachment`
  MODIFY `att_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_eligible_rate`
--
ALTER TABLE `mst_eligible_rate`
  MODIFY `rate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_im_regs`
--
ALTER TABLE `mst_im_regs`
  MODIFY `im_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `mst_kit`
--
ALTER TABLE `mst_kit`
  MODIFY `kit_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_manufacturer`
--
ALTER TABLE `mst_manufacturer`
  MODIFY `manf_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_sub_rule`
--
ALTER TABLE `mst_sub_rule`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mst_upgrade_type`
--
ALTER TABLE `mst_upgrade_type`
  MODIFY `up_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trn_applicant_details`
--
ALTER TABLE `trn_applicant_details`
  MODIFY `app_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `trn_attachments_details`
--
ALTER TABLE `trn_attachments_details`
  MODIFY `inprinc_no` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trn_cats`
--
ALTER TABLE `trn_cats`
  MODIFY `caste_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `mst_eligible_rate`
--
ALTER TABLE `mst_eligible_rate`
  ADD CONSTRAINT `mst_eligible_rate_att_id_foreign` FOREIGN KEY (`att_id`) REFERENCES `mst_attachment` (`att_id`),
  ADD CONSTRAINT `mst_eligible_rate_manf_id_foreign` FOREIGN KEY (`manf_id`) REFERENCES `mst_manufacturer` (`manf_id`);

--
-- Constraints for table `mst_kit`
--
ALTER TABLE `mst_kit`
  ADD CONSTRAINT `mst_kit_att_id_foreign` FOREIGN KEY (`att_id`) REFERENCES `mst_attachment` (`att_id`);

--
-- Constraints for table `mst_sub_rule`
--
ALTER TABLE `mst_sub_rule`
  ADD CONSTRAINT `mst_sub_rule_caste_id_foreign` FOREIGN KEY (`caste_id`) REFERENCES `trn_cats` (`caste_id`),
  ADD CONSTRAINT `mst_sub_rule_up_id_foreign` FOREIGN KEY (`up_id`) REFERENCES `mst_upgrade_type` (`up_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
