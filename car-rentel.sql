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
  `customer_notes` text,
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


DROP TABLE IF EXISTS `payment_transaction`;
CREATE TABLE `payment_transaction` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` text NOT NULL,
  `total` float(20,2) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `translation_mgmt`;
CREATE TABLE `translation_mgmt` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lang_text` text,
  `Menu1` text,
  `Menu2` text,
  `pickup_location_text` text,
  `drop_off_location` text,
  `pickup_date` text,
  `dropoff_date` text,
  `book_btn` text,
  `brand_section_heading` text,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `translation_mgmt` (`id`, `lang_text`, `Menu1`, `Menu2`, `pickup_location_text`, `drop_off_location`, `pickup_date`, `dropoff_date`, `book_btn`, `brand_section_heading`, `created_at`, `updated_at`) VALUES
(1, 'English',  'Home', 'Rent', 'Pickup Location',  'Drop Off Location',  'Pickup Date',  'Drop Off Date',  'BOOK', 'Connecting you to the biggest brands in car rental', '2023-07-31 13:15:33',  '2023-07-31 13:15:33'),
(2, 'Italian',  'Casa', 'Affitto',  NULL, NULL, NULL, NULL, NULL, NULL, '2023-07-31 13:15:33',  '2023-07-31 13:15:33');

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


-- 2023-07-31 13:45:47