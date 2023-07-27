-- Adminer 4.8.1 MySQL 5.7.23-23 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `address_table`;
CREATE TABLE `address_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` text NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `from_date` text NOT NULL,
  `to_date` text NOT NULL,
  `price` float(20,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `booking_management`;
CREATE TABLE `booking_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` text NOT NULL,
  `title` text,
  `customer_id` text,
  `customer_first_name` text,
  `customer_last_name` text,
  `customer_phone_no` text,
  `customer_email` text,
  `customer_country` text,
  `driver_first_name` text NOT NULL,
  `driver_last_name` text NOT NULL,
  `driver_email_address` text NOT NULL,
  `driver_contact_no` text NOT NULL,
  `driver_country` text NOT NULL,
  `flight_no` text,
  `sub_total` float(20,2) DEFAULT NULL,
  `total` float(20,2) NOT NULL,
  `booking_status` int(11) NOT NULL,
  `payment_method` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `car_management`;
CREATE TABLE `car_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `vehicle_type` text,
  `vehicle_category` text,
  `image` text NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `manual_text` text NOT NULL,
  `no_of_km` text NOT NULL,
  `no_of_day` text,
  `price` float(20,2) DEFAULT NULL,
  `total_price` float(20,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `car_description` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `car_price_days`;
CREATE TABLE `car_price_days` (
  `days_id` int(11) NOT NULL AUTO_INCREMENT,
  `car_id` int(11) NOT NULL,
  `car_days_id` int(11) NOT NULL,
  `no_of_day` text NOT NULL,
  `price` float(20,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`days_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `country`;
CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `home_page`;
CREATE TABLE `home_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `home_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner_content2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `button_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_content` text CHARACTER SET utf8 COLLATE utf8_bin,
  `discord_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `logo_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_button_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `top_button_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discord_title1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discord_title2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discord_button_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discord_button_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_title1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `news_title2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingos_logo1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingos_logo2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingos_logo3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingos_logo4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingos_logo5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ingos_logo6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_copy` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading_one` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `heading_three` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_one` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_two` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content_three` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `home_page_logos`;
CREATE TABLE `home_page_logos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` text NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `language_management`;
CREATE TABLE `language_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `message` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL,
  `type` varchar(55) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_url` varchar(255) DEFAULT NULL,
  `page_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `page_content` text CHARACTER SET utf8 COLLATE utf8_bin,
  `status` int(11) DEFAULT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `type` varchar(55) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(30) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_verify_email` tinyint(4) DEFAULT '0',
  `is_verify_contact` tinyint(4) DEFAULT '0',
  `my_referral_code` varchar(255) DEFAULT NULL,
  `user_referral_id` varchar(255) DEFAULT NULL,
  `wallet_balance` float DEFAULT '0',
  `profile_pic` varchar(255) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `user_plan` int(11) DEFAULT NULL,
  `user_language` varchar(50) DEFAULT NULL,
  `user_categories` varchar(300) DEFAULT NULL,
  `user_company_name` varchar(150) DEFAULT NULL,
  `user_company_number` varchar(50) DEFAULT NULL,
  `user_company_address` varchar(200) DEFAULT NULL,
  `notification` int(11) DEFAULT NULL,
  `activation_code` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `user_country` varchar(255) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `user_city` varchar(30) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `address` text,
  `ship_id` int(11) DEFAULT NULL,
  `shipping_price` float(10,2) DEFAULT NULL,
  `shipping_currency` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `social_id` text,
  `register_by` varchar(255) DEFAULT NULL,
  `website` varchar(200) DEFAULT NULL,
  `about` text,
  `device_id` varchar(255) DEFAULT NULL,
  `device_token` varchar(255) DEFAULT NULL,
  `device_type` varchar(255) DEFAULT NULL,
  `vrfn_code` varchar(255) DEFAULT NULL,
  `card_status` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `job-status` tinyint(4) DEFAULT NULL,
  `user_rec_promo` int(11) DEFAULT NULL,
  `user_rec_outdoor_promo` int(11) DEFAULT NULL,
  `user_signup_method` varchar(255) DEFAULT NULL,
  `auth_check` int(11) DEFAULT NULL,
  `sms_check` int(11) DEFAULT NULL,
  `act_link` varchar(50) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `is_online` int(11) DEFAULT NULL,
  `publishonhome` smallint(6) DEFAULT NULL,
  `toprated` smallint(6) DEFAULT NULL,
  `user_profile_pic` varchar(255) DEFAULT NULL,
  `businessID` varchar(255) DEFAULT NULL,
  `social_login` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `braintree_token` longtext,
  `guest_login` int(10) unsigned DEFAULT NULL,
  `purches_for` varchar(255) DEFAULT NULL,
  `otp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `user_type`, `first_name`, `last_name`, `email`, `contact_number`, `password`, `role_id`, `is_verify_email`, `is_verify_contact`, `my_referral_code`, `user_referral_id`, `wallet_balance`, `profile_pic`, `resume`, `gender`, `user_plan`, `user_language`, `user_categories`, `user_company_name`, `user_company_number`, `user_company_address`, `notification`, `activation_code`, `dob`, `user_country`, `state_id`, `user_city`, `postal_code`, `latitude`, `longitude`, `address`, `ship_id`, `shipping_price`, `shipping_currency`, `parent_id`, `social_id`, `register_by`, `website`, `about`, `device_id`, `device_token`, `device_type`, `vrfn_code`, `card_status`, `status`, `job-status`, `user_rec_promo`, `user_rec_outdoor_promo`, `user_signup_method`, `auth_check`, `sms_check`, `act_link`, `last_login`, `is_online`, `publishonhome`, `toprated`, `user_profile_pic`, `businessID`, `social_login`, `created_at`, `updated_at`, `remember_token`, `braintree_token`, `guest_login`, `purches_for`, `otp`) VALUES
(1, 'admin',  'admin',  NULL, 'admin@gmail.com',  '7685496477', '$2y$10$TjjF3EW8pDPwi7zrNAx1V.ApPWm.NyQuyOFe3t.vdUxiFrTx3u45.', 1,  1,  0,  '', NULL, 0,  'user-1653633836.png',  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-10 12:21:39',  NULL, NULL, 0,  NULL, NULL),
(336, 'service_provider', 'service providerw',  NULL, 'rahulservpro@gmail.com', '3453453450', '$2y$10$J6btJfRDY8Sdb0AOmOG9v./KYFc1fyyv7IsjCIktWyvOc8MfWmBHy', 4,  1,  0,  'YVVyZGE4Rm8wY2FPWnN3Q2oyd09mUT09', NULL, 0,  'user1-1653644740.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '99', NULL, 'Indore', NULL, NULL, NULL, 'bsbsb',  NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'kK40jc', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 11:41:12',  '2022-05-25 07:43:23',  NULL, NULL, NULL, NULL, NULL),
(346, 'normal_user',  'rahul solanki',  NULL, 'user@gmail.com', '0942509544', '$2y$10$RCa.oIFnJ1/igUK9R53j0eoyXYa44DsM/FvJJlW1ynLaK2iG4LPj6', 2,  0,  0,  NULL, NULL, 0,  'food-1653562885.png',  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 08:22:09',  '2022-05-26 02:52:09',  NULL, NULL, NULL, NULL, NULL),
(347, 'normal_user',  'vivek@gmail.com',  NULL, 'vivek@gmail.com',  '1234577899', '$2y$10$cfKorP8.CE6arkxNyVFFouHvKLpYIuWSBN7wpdvc6Az7K8XIxlJTi', 2,  0,  0,  NULL, NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 13:10:02',  '2023-07-24 00:18:01',  NULL, NULL, NULL, NULL, NULL),
(348, 'normal_user',  'viveksd',  NULL, 'vevie@gmail.com',  '1231324562', '$2y$10$ljLea3bBvsYVpWH3xfE4DeGZKkgPW8tO8/wWe7tDy4apdzhWGm7Qq', 2,  0,  0,  NULL, NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-26 13:11:22',  '2022-05-26 07:41:22',  NULL, NULL, NULL, NULL, NULL),
(349, 'normal_user',  'rahul solanki',  NULL, 'scout@gmail.com',  '0942509544', '$2y$10$QwBCCOaklKtMkYge53WAzuMvoECCOEDkTIke.UBeOlRYiHMi/lOce', 2,  0,  0,  NULL, NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3',  NULL, 'Indore', NULL, NULL, NULL, 'rahul@gmail.com',  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 06:30:17',  '2023-07-11 09:15:31',  NULL, NULL, NULL, NULL, NULL),
(350, 'service_provider', 'rahul',  NULL, 'serv@gmail.com', '0942509544', '$2y$10$AV2jgjgeS92pOOcdcoSr5e7JJq0uiYdYsuMwE69F39tY1xsgDUQGG', 4,  0,  0,  NULL, NULL, 0,  'user-1653633836.png',  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 06:41:31',  '2022-05-27 01:11:31',  NULL, NULL, NULL, NULL, NULL),
(351, 'normal_user',  'Swayam Rane',  NULL, 'swayam@gmail.com', '0123456789', '$2y$10$JZSAQkrhMOD/.YUsWSXdcOw.A24ND4h2UwnhBOnVr4qMChaXfN/cO', 2,  0,  0,  NULL, NULL, 0,  'user-1653642505.jpg',  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 09:08:14',  '2022-05-27 03:38:14',  NULL, NULL, NULL, NULL, NULL),
(352, 'service_provider', 'Swayam Service', NULL, 'swayamservice@gmail.com',  '0942509544', '$2y$10$lq9kA0oM/.2eoPuvjDkuZ.OoXUnHqt8TOQpKE7Sg8gyp4s3PTCItS', 4,  0,  0,  NULL, NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 09:09:33',  '2022-05-27 03:39:33',  NULL, NULL, NULL, NULL, NULL),
(353, 'normal_user',  'jhon doww',  NULL, 'john@gmail.com', '0123456789', '$2y$10$kMN95SoprKqP83mJEZYr2OOZNoHPh7qhi.gn5hXdljgjsofPCXthG', 2,  0,  0,  NULL, NULL, 0,  'user-1653644716.jpg',  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 09:40:40',  '2022-05-27 04:10:40',  NULL, NULL, NULL, NULL, NULL),
(354, 'normal_user',  'vikram kumar', NULL, 'vikram@gmail.com', '9887785987', '$2y$10$Vh2jkbV8Cgkw..j6wn0p7.x/Jdi6U.GzYfuLhkJDAVgNONGYvUnEG', 2,  0,  0,  NULL, NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4',  NULL, 'Indore', NULL, NULL, NULL, 'Rajendra Nagar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 09:44:08',  '2023-07-22 07:50:09',  NULL, NULL, NULL, NULL, NULL),
(355, 'normal_user',  'testss', NULL, 'tesdts@gmail.com', '78989958587',  '$2y$10$H5AhxwF5dEfhwL8062RTueoSYvuRRTXL/DHmZjj2cqRezNrtM7.yy', 2,  1,  0,  'a0dxVVAyZWpITUNCT0VQKzhBNzBqUT09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4',  NULL, 'test', NULL, NULL, NULL, 'test', NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'KKU0Sb', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-27 11:06:43',  '2023-07-22 07:50:08',  NULL, NULL, NULL, NULL, NULL),
(356, 'normal_user',  'dfdsf 3e4rer', NULL, 'dfdf@gmail.com', '01234567890',  '$2y$10$2eIX/TjqjXPGX5gyjWDl..Uh53rYLFOMvaqLPMrW5gCS2B1/y5im2', 2,  1,  0,  'bFRYcHNGY2h2Q1hNaDBubUxkZWFwUT09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, 'Resistencia',  NULL, NULL, NULL, 'dsd',  NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'UIWsVg', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-22 12:03:08',  '2023-07-22 06:33:08',  NULL, NULL, NULL, NULL, NULL),
(357, 'normal_user',  'dfdsf 3e4rer', NULL, 'fdfdf@gmail.com',  '01234567890',  '$2y$10$s/jvbiX3fWWaKnhZv7S5FeDE8GHbezR7kcFkEWk76ejFYUItT8vKG', 2,  1,  0,  'ZWQySXhybk5rZDJ5TXQ1Q0tZandjdz09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, 'Resistencia',  NULL, NULL, NULL, 'dsd',  NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'I41H12', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-22 12:49:54',  '2023-07-22 07:19:54',  NULL, NULL, NULL, NULL, NULL),
(359, 'business_user',  'dfdsf 3e4rer', NULL, 'sdsd@gmail.com', '01234567890',  '$2y$10$2F/KGWGOA1zNKpzKkLC3EeHAleVtoYHV/QBWbeAyCdZEojXTfTILu', 2,  1,  0,  'Rk5uUnlPeElRdFRUVTBGL3VOR0FuUT09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, 'Resistencia',  NULL, NULL, NULL, 'dsd',  NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'Uyxbo6', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-22 12:57:15',  '2023-07-22 07:27:15',  NULL, NULL, NULL, NULL, NULL),
(360, 'business_user',  'hjh',  NULL, 't@gmail.com',  '1',  '$2y$10$5GQCYBVs4KeqJVeuFDRaPe7axDxuWMR5T98WHbMF8hf.x6psABD3K', 2,  1,  0,  'TVBsdzA0UFpBbGJNL0w4dEJZdnFMZz09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '99', NULL, 'indore', NULL, NULL, NULL, 'yuyityioio', NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'U7AUY0', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-22 13:18:22',  '2023-07-22 07:48:22',  NULL, NULL, NULL, NULL, NULL),
(361, 'business_user',  'ritu', NULL, 'y@gmail.com',  '2',  '$2y$10$pS7PUWdLCtYatzZlkdgDh.W1Nr3u07ODXnngJR9pOhb7GW4e3HiXW', 2,  1,  0,  'VHllQVpQWmM4dDkyRWRjenplamI1QT09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '99', NULL, 'indore', NULL, NULL, NULL, 'srghrtht;hiopyi',  NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'YnmrD4', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 11:02:24',  '2023-07-27 05:32:24',  NULL, NULL, NULL, NULL, NULL),
(362, 'business_user',  'rrgghjj',  NULL, 'u@gmail.com',  '2',  '$2y$10$ZKfBxFWg1jTA7eIIAXyCvODjUD1RnK/5M4g6mF5iy.gj3dz1QMj.G', 2,  1,  0,  'cDhQOXFFczVjalZnSUdZYjdsQzQ4UT09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '99', NULL, 'indore', NULL, NULL, NULL, 'yuyityioio', NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'qdeWJN', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 11:06:10',  '2023-07-27 05:36:10',  NULL, NULL, NULL, NULL, NULL),
(363, 'business_user',  'test gupta', NULL, 'test@gmail.com', '01234567894',  '$2y$10$U4SO08PglPno.eQW9j5bP.A5c8SvhfpmgjalSiM/XiP3OYmmf36lK', 2,  1,  0,  'N2s2QkFoa1lCOWFMR3RrYk1jUDgrQT09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '99', NULL, 'indore', NULL, NULL, NULL, 'Indore', NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'QWRwvV', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 11:07:26',  '2023-07-27 05:37:26',  NULL, NULL, NULL, NULL, NULL),
(364, 'normal_user',  'dfdsf 3e4rer', NULL, 'dsd@gmail.com',  '1234567890', '$2y$10$Fl9z4Az8ULGgy/ID5KhH5.01uQvSJWWgsO2c9USUZ9BM2p09A.FCq', 2,  1,  0,  'Mm5lS3hEV0RaV3RpQ2I2U3IrclhaUT09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, 'Resistencia',  NULL, NULL, NULL, 'dsd',  NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'dPgoK1', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 13:12:49',  '2023-07-27 07:42:49',  NULL, NULL, NULL, NULL, NULL),
(365, 'business_user',  'dfdsf 3e4rer', NULL, 'xcvc@gmail.com', '01234567890',  '$2y$10$cJrEi7VK.DHS2nEU9UHQkudgt4DLQkSEUBvh7MTj4hak1g.c4Hs1y', 2,  1,  0,  'M1puZVgrMXJHYWJNSUdMS3NhdUl3QT09', NULL, 0,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', NULL, 'Resistencia',  NULL, NULL, NULL, 'dsd',  NULL, NULL, NULL, NULL, NULL, 'web',  NULL, NULL, NULL, NULL, NULL, 'NUY4YZ', NULL, 1,  NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-27 13:13:24',  '2023-07-27 07:43:24',  NULL, NULL, NULL, NULL, NULL);

DROP TABLE IF EXISTS `users1`;
CREATE TABLE `users1` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `vendors`;
CREATE TABLE `vendors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admin_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


-- 2023-07-27 13:38:56