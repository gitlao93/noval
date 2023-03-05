-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2023 at 08:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `casmo`
--

-- --------------------------------------------------------

--
-- Table structure for table `annual_targets`
--

CREATE TABLE `annual_targets` (
  `annual_target_ID` bigint(20) UNSIGNED NOT NULL,
  `measure_ID` bigint(20) UNSIGNED NOT NULL,
  `province_ID` bigint(20) UNSIGNED NOT NULL,
  `annual_target` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annual_targets`
--

INSERT INTO `annual_targets` (`annual_target_ID`, `measure_ID`, `province_ID`, `annual_target`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 500, '2023-02-27 20:09:06', '2023-02-27 20:09:06'),
(2, 1, 2, 550, '2023-02-27 20:19:47', '2023-02-27 20:19:47'),
(3, 1, 3, 600, '2023-02-27 20:22:25', '2023-02-27 20:22:25'),
(4, 1, 4, 650, '2023-02-27 20:22:31', '2023-02-27 20:22:31'),
(5, 1, 5, 300, '2023-02-28 00:24:14', '2023-02-28 00:24:14'),
(6, 4, 1, 300, '2023-02-28 00:24:25', '2023-02-28 00:24:25'),
(7, 4, 2, 300, '2023-02-28 00:24:33', '2023-02-28 00:24:33'),
(8, 4, 3, 300, '2023-02-28 00:24:36', '2023-02-28 00:24:36'),
(9, 3, 3, 300, '2023-02-28 00:24:40', '2023-02-28 00:24:40'),
(10, 3, 4, 300, '2023-02-28 00:24:43', '2023-02-28 00:24:43'),
(11, 3, 5, 300, '2023-02-28 00:24:46', '2023-02-28 00:24:46'),
(12, 6, 1, 300, '2023-02-28 00:24:51', '2023-02-28 00:24:51'),
(13, 6, 2, 300, '2023-02-28 00:24:54', '2023-02-28 00:24:54'),
(14, 6, 3, 300, '2023-02-28 00:24:56', '2023-02-28 00:24:56'),
(15, 8, 3, 300, '2023-02-28 00:25:04', '2023-02-28 00:25:04'),
(16, 8, 4, 300, '2023-02-28 00:25:08', '2023-02-28 00:25:08'),
(17, 8, 5, 300, '2023-02-28 00:25:12', '2023-02-28 00:25:12'),
(18, 4, 4, 250, '2023-02-28 00:25:21', '2023-02-28 00:25:21'),
(19, 4, 5, 250, '2023-02-28 00:25:25', '2023-02-28 00:25:25'),
(20, 2, 1, 250, '2023-02-28 00:25:28', '2023-02-28 00:25:28'),
(21, 2, 2, 250, '2023-02-28 00:25:31', '2023-02-28 00:25:31'),
(22, 5, 3, 250, '2023-02-28 00:25:34', '2023-02-28 00:25:34'),
(23, 5, 4, 250, '2023-02-28 00:25:37', '2023-02-28 00:25:37'),
(24, 5, 5, 250, '2023-02-28 00:25:40', '2023-02-28 00:25:40'),
(25, 7, 1, 250, '2023-02-28 00:25:44', '2023-02-28 00:25:44'),
(26, 7, 2, 250, '2023-02-28 00:25:47', '2023-02-28 00:25:47'),
(27, 9, 4, 250, '2023-02-28 00:25:51', '2023-02-28 00:25:51'),
(28, 9, 5, 250, '2023-02-28 00:25:54', '2023-02-28 00:25:54'),
(29, 9, 1, 400, '2023-02-28 00:26:02', '2023-02-28 00:26:02'),
(30, 9, 2, 400, '2023-02-28 00:26:06', '2023-02-28 00:26:06'),
(31, 7, 3, 400, '2023-02-28 00:26:09', '2023-02-28 00:26:09'),
(32, 7, 4, 400, '2023-02-28 00:26:12', '2023-02-28 00:26:12'),
(33, 6, 4, 400, '2023-02-28 00:26:16', '2023-02-28 00:26:16'),
(34, 6, 5, 400, '2023-02-28 00:26:18', '2023-02-28 00:26:18'),
(35, 5, 1, 400, '2023-02-28 00:26:28', '2023-02-28 00:26:28'),
(36, 3, 2, 400, '2023-02-28 00:26:31', '2023-02-28 00:26:31'),
(37, 2, 4, 400, '2023-02-28 00:26:33', '2023-02-28 00:26:33'),
(38, 2, 3, 150, '2023-02-28 00:26:42', '2023-02-28 00:26:42'),
(39, 2, 5, 150, '2023-02-28 00:26:46', '2023-02-28 00:26:46'),
(40, 3, 1, 150, '2023-02-28 00:26:50', '2023-02-28 00:26:50'),
(41, 5, 2, 150, '2023-02-28 00:26:52', '2023-02-28 00:26:52'),
(42, 7, 5, 150, '2023-02-28 00:26:57', '2023-02-28 00:26:57'),
(43, 8, 1, 150, '2023-02-28 00:27:01', '2023-02-28 00:27:01'),
(44, 8, 2, 150, '2023-02-28 00:27:04', '2023-02-28 00:27:04'),
(45, 9, 3, 150, '2023-02-28 00:27:09', '2023-02-28 00:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `division_ID` bigint(20) UNSIGNED NOT NULL,
  `division` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`division_ID`, `division`, `created_at`, `updated_at`) VALUES
(1, 'BDD', '2023-02-27 16:45:30', '2023-02-27 16:45:30'),
(2, 'CPD', '2023-02-27 16:45:30', '2023-02-27 16:45:30'),
(3, 'FAD', '2023-02-27 16:45:30', '2023-02-27 16:45:30');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `driver_ID` bigint(20) UNSIGNED NOT NULL,
  `driver` varchar(255) NOT NULL,
  `opcr_ID` bigint(20) UNSIGNED NOT NULL,
  `division_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`driver_ID`, `driver`, `opcr_ID`, `division_ID`, `created_at`, `updated_at`) VALUES
(1, 'Conduct investment promotion', 1, 1, '2023-02-27 19:58:48', '2023-02-27 19:58:48'),
(2, 'Broaden and deepen the entrepreneurial base', 1, 1, '2023-02-27 19:59:11', '2023-02-27 19:59:11'),
(3, 'Provide focused intervention to Enterprises (enrolled in EPP)', 1, 1, '2023-02-27 19:59:46', '2023-02-27 19:59:46'),
(4, 'Establish Negosyo Centers', 1, 1, '2023-02-27 20:00:10', '2023-02-27 20:00:10'),
(5, 'Increase certified Bagwis establishments', 1, 2, '2023-02-27 20:00:38', '2023-02-27 20:00:38'),
(6, 'Form linkages with civic and other organizations', 1, 2, '2023-02-27 20:01:09', '2023-02-27 20:01:09'),
(7, 'Observe compliance to budgeting, accounting, auditing, personnel-related, procurement, and record  rules and regulations', 1, 3, '2023-02-27 20:01:57', '2023-02-27 20:01:57');

-- --------------------------------------------------------

--
-- Table structure for table `measures`
--

CREATE TABLE `measures` (
  `measure_ID` bigint(20) UNSIGNED NOT NULL,
  `measure` varchar(255) NOT NULL,
  `objective_ID` bigint(20) UNSIGNED NOT NULL,
  `division_ID` bigint(20) UNSIGNED NOT NULL,
  `driver_ID` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `measures`
--

INSERT INTO `measures` (`measure_ID`, `measure`, `objective_ID`, `division_ID`, `driver_ID`, `created_at`, `updated_at`) VALUES
(1, 'MSMEs assisted in the priority industries', 1, 1, 2, '2023-02-27 19:25:17', '2023-02-27 20:03:14'),
(2, 'No. of recognized consumer organizations (new)', 2, 2, 6, '2023-02-27 19:25:51', '2023-02-27 20:05:18'),
(3, 'No. of Agreements/MOAs/MOUs forged with private organizations/entities', 2, 2, 6, '2023-02-27 19:26:10', '2023-02-27 20:05:31'),
(4, 'No. of new  and upgraded Bagwis awardees', 1, 2, 5, '2023-02-27 19:26:42', '2023-02-27 20:05:05'),
(5, 'No. of investors assisted  in the priority industries', 3, 1, 1, '2023-02-27 19:54:16', '2023-02-27 20:02:57'),
(6, 'No. of exporters assisted  in the priority industries', 3, 1, 3, '2023-02-27 19:54:42', '2023-02-27 20:03:32'),
(7, 'Number of Negosyo Centers established and maintained', 4, 1, 4, '2023-02-27 19:55:45', '2023-02-27 20:04:14'),
(8, 'PRIME HR higher than the current level', 5, 3, 7, '2023-02-27 19:56:48', '2023-02-27 20:05:50'),
(9, 'Paperless system developed and maintained', 6, 3, 7, '2023-02-27 19:57:17', '2023-02-27 20:05:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_02_16_050309_create_opcrs_table', 1),
(3, '2023_02_16_051917_create_divisions_table', 1),
(4, '2023_02_16_071106_create_drivers_table', 1),
(5, '2023_02_16_135403_create_objectives_table', 1),
(6, '2023_02_16_144324_create_measures_table', 1),
(7, '2023_02_17_022830_create_provinces_table', 1),
(8, '2023_02_17_024727_create_annual_targets_table', 1),
(10, '2023_03_01_080606_create_monthly_targets_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `monthly_targets`
--

CREATE TABLE `monthly_targets` (
  `monthly_target_ID` bigint(20) UNSIGNED NOT NULL,
  `monthly_target` int(11) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `annual_target_ID` bigint(20) UNSIGNED NOT NULL,
  `division_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `monthly_targets`
--

INSERT INTO `monthly_targets` (`monthly_target_ID`, `monthly_target`, `month`, `annual_target_ID`, `division_ID`, `created_at`, `updated_at`) VALUES
(1, 50, 'jan', 35, 1, '2023-03-01 23:30:23', '2023-03-01 23:30:23'),
(2, 25, 'jan', 1, 1, '2023-03-01 23:45:54', '2023-03-01 23:45:54'),
(3, 100, 'feb', 35, 1, '2023-03-02 21:40:33', '2023-03-02 21:40:33'),
(4, 100, 'jan', 12, 1, '2023-03-02 21:40:43', '2023-03-02 21:40:43'),
(5, 20, 'jan', 25, 1, '2023-03-02 21:41:05', '2023-03-02 21:41:05'),
(6, 20, 'mar', 35, 1, '2023-03-02 21:47:30', '2023-03-02 21:47:30'),
(7, 5, 'jan', 41, 1, '2023-03-02 21:57:10', '2023-03-02 21:57:10'),
(8, 25, 'feb', 1, 1, '2023-03-02 22:48:28', '2023-03-02 22:48:28'),
(9, 20, 'jan', 2, 1, '2023-03-02 22:49:30', '2023-03-02 22:49:30'),
(10, 10, 'jan', 6, 2, '2023-03-02 23:01:44', '2023-03-02 23:01:44'),
(11, 10, 'jan', 43, 3, '2023-03-02 23:13:02', '2023-03-02 23:13:02'),
(12, 30, 'apr', 35, 1, '2023-03-02 23:41:40', '2023-03-02 23:41:40'),
(13, 200, 'may', 35, 1, '2023-03-02 23:41:55', '2023-03-02 23:41:55'),
(14, 401, 'mar', 1, 1, '2023-03-02 23:42:48', '2023-03-02 23:42:48'),
(15, 49, 'apr', 1, 1, '2023-03-02 23:43:10', '2023-03-02 23:43:10'),
(17, 20, 'jan', 20, 2, '2023-03-04 00:23:06', '2023-03-04 00:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `objectives`
--

CREATE TABLE `objectives` (
  `objective_ID` bigint(20) UNSIGNED NOT NULL,
  `objective` varchar(255) NOT NULL,
  `opcr_ID` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `objectives`
--

INSERT INTO `objectives` (`objective_ID`, `objective`, `opcr_ID`, `created_at`, `updated_at`) VALUES
(1, 'Provide customized interventions for Micro- and SMEs for countryside development', 1, '2023-02-27 19:23:48', '2023-02-27 19:23:48'),
(2, 'Partner with critical private organizations to promote ethical business practices', 1, '2023-02-27 19:24:01', '2023-02-27 19:24:01'),
(3, 'Undertake targeted and more aggressive investment and export promotion for priority industries', 1, '2023-02-27 19:24:50', '2023-02-27 19:24:50'),
(4, 'Implement fully the Go Negosyo Act', 1, '2023-02-27 19:25:00', '2023-02-27 19:25:00'),
(5, 'Develop a credible and robust human capital', 1, '2023-02-27 19:56:22', '2023-02-27 19:56:22'),
(6, 'Promote a synergized organization anchored on a dynamic and efficient knowledge management system', 1, '2023-02-27 19:57:04', '2023-02-27 19:57:04');

-- --------------------------------------------------------

--
-- Table structure for table `opcrs`
--

CREATE TABLE `opcrs` (
  `opcr_ID` bigint(20) UNSIGNED NOT NULL,
  `opcr` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opcrs`
--

INSERT INTO `opcrs` (`opcr_ID`, `opcr`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'OPCR 2023', 1, '2023-02-27 18:49:55', '2023-02-27 18:49:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `province_ID` bigint(20) UNSIGNED NOT NULL,
  `province` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_ID`, `province`, `created_at`, `updated_at`) VALUES
(1, 'Bukidnun', '2023-02-27 16:45:30', '2023-02-27 16:45:30'),
(2, 'Lanao Del Norte', '2023-02-27 16:45:30', '2023-02-27 16:45:30'),
(3, 'Misamis Oriental', '2023-02-27 16:45:30', '2023-02-27 16:45:30'),
(4, 'Misamis Occidental', '2023-02-27 16:45:30', '2023-02-27 16:45:30'),
(5, 'Camiguin', '2023-02-27 16:45:30', '2023-02-27 16:45:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annual_targets`
--
ALTER TABLE `annual_targets`
  ADD PRIMARY KEY (`annual_target_ID`),
  ADD KEY `annual_targets_measure_id_foreign` (`measure_ID`),
  ADD KEY `annual_targets_province_id_foreign` (`province_ID`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`division_ID`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`driver_ID`),
  ADD KEY `drivers_opcr_id_foreign` (`opcr_ID`),
  ADD KEY `drivers_division_id_foreign` (`division_ID`);

--
-- Indexes for table `measures`
--
ALTER TABLE `measures`
  ADD PRIMARY KEY (`measure_ID`),
  ADD KEY `measures_objective_id_foreign` (`objective_ID`),
  ADD KEY `measures_division_id_foreign` (`division_ID`),
  ADD KEY `measures_driver_id_foreign` (`driver_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monthly_targets`
--
ALTER TABLE `monthly_targets`
  ADD PRIMARY KEY (`monthly_target_ID`),
  ADD KEY `monthly_targets_annual_target_id_foreign` (`annual_target_ID`),
  ADD KEY `monthly_targets_division_id_foreign` (`division_ID`);

--
-- Indexes for table `objectives`
--
ALTER TABLE `objectives`
  ADD PRIMARY KEY (`objective_ID`),
  ADD KEY `objectives_opcr_id_foreign` (`opcr_ID`);

--
-- Indexes for table `opcrs`
--
ALTER TABLE `opcrs`
  ADD PRIMARY KEY (`opcr_ID`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annual_targets`
--
ALTER TABLE `annual_targets`
  MODIFY `annual_target_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `division_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `driver_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `measures`
--
ALTER TABLE `measures`
  MODIFY `measure_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `monthly_targets`
--
ALTER TABLE `monthly_targets`
  MODIFY `monthly_target_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `objectives`
--
ALTER TABLE `objectives`
  MODIFY `objective_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `opcrs`
--
ALTER TABLE `opcrs`
  MODIFY `opcr_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `province_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annual_targets`
--
ALTER TABLE `annual_targets`
  ADD CONSTRAINT `annual_targets_measure_id_foreign` FOREIGN KEY (`measure_ID`) REFERENCES `measures` (`measure_ID`),
  ADD CONSTRAINT `annual_targets_province_id_foreign` FOREIGN KEY (`province_ID`) REFERENCES `provinces` (`province_ID`);

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_division_id_foreign` FOREIGN KEY (`division_ID`) REFERENCES `divisions` (`division_ID`),
  ADD CONSTRAINT `drivers_opcr_id_foreign` FOREIGN KEY (`opcr_ID`) REFERENCES `opcrs` (`opcr_ID`);

--
-- Constraints for table `measures`
--
ALTER TABLE `measures`
  ADD CONSTRAINT `measures_division_id_foreign` FOREIGN KEY (`division_ID`) REFERENCES `divisions` (`division_ID`),
  ADD CONSTRAINT `measures_driver_id_foreign` FOREIGN KEY (`driver_ID`) REFERENCES `drivers` (`driver_ID`),
  ADD CONSTRAINT `measures_objective_id_foreign` FOREIGN KEY (`objective_ID`) REFERENCES `objectives` (`objective_ID`);

--
-- Constraints for table `monthly_targets`
--
ALTER TABLE `monthly_targets`
  ADD CONSTRAINT `monthly_targets_annual_target_id_foreign` FOREIGN KEY (`annual_target_ID`) REFERENCES `annual_targets` (`annual_target_ID`),
  ADD CONSTRAINT `monthly_targets_division_id_foreign` FOREIGN KEY (`division_ID`) REFERENCES `divisions` (`division_ID`);

--
-- Constraints for table `objectives`
--
ALTER TABLE `objectives`
  ADD CONSTRAINT `objectives_opcr_id_foreign` FOREIGN KEY (`opcr_ID`) REFERENCES `opcrs` (`opcr_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
