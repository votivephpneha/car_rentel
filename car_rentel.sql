-- Adminer 4.8.1 MySQL 5.7.23-23 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

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

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'admin@gmail.com',	NULL,	'$2y$10$veRpHDfzuM4HyCp7iPqI8OnvJX4Nzm47KSHJDZo.JlgIPSHdMiLui',	NULL,	'2022-05-19 01:44:25',	'2022-05-19 01:44:25');

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE `booking_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` text NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `price` float(20,2) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `booking_details` (`id`, `booking_id`, `vehicle_id`, `from_date`, `to_date`, `price`, `created_at`, `updated_at`) VALUES
(1,	'booking-01',	7,	'2023-07-12',	'2023-07-13',	0.00,	'2023-07-10 11:39:44',	'2023-07-11 10:55:51');

DROP TABLE IF EXISTS `booking_management`;
CREATE TABLE `booking_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `booking_id` text NOT NULL,
  `customer_id` text NOT NULL,
  `customer_first_name` text NOT NULL,
  `customer_last_name` text NOT NULL,
  `customer_phone_no` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_country` text NOT NULL,
  `driver_first_name` text NOT NULL,
  `driver_last_name` text NOT NULL,
  `driver_email_address` text NOT NULL,
  `driver_contact_no` text NOT NULL,
  `driver_country` text NOT NULL,
  `flight_no` text,
  `sub_total` float(20,2) NOT NULL,
  `total` float(20,2) NOT NULL,
  `booking_status` int(11) NOT NULL,
  `payment_method` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `booking_management` (`id`, `booking_id`, `customer_id`, `customer_first_name`, `customer_last_name`, `customer_phone_no`, `customer_email`, `customer_country`, `driver_first_name`, `driver_last_name`, `driver_email_address`, `driver_contact_no`, `driver_country`, `flight_no`, `sub_total`, `total`, `booking_status`, `payment_method`, `created_at`, `updated_at`) VALUES
(1,	'booking-01',	'336',	'John',	'Dov',	'1234567890',	'John@gmail.com',	'India',	'test',	'test1',	'test@gmail.com',	'1234576890',	'India',	'4',	100.00,	100.00,	2,	'',	'2023-07-08 12:50:48',	'2023-07-11 04:53:10');

DROP TABLE IF EXISTS `car_management`;
CREATE TABLE `car_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `sub_title` text,
  `image` text NOT NULL,
  `no_of_seats` int(11) NOT NULL,
  `manual_text` text NOT NULL,
  `no_of_km` text NOT NULL,
  `no_of_day` text NOT NULL,
  `price` float(20,2) NOT NULL,
  `total_price` float(20,2) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `car_management` (`id`, `title`, `sub_title`, `image`, `no_of_seats`, `manual_text`, `no_of_km`, `no_of_day`, `price`, `total_price`, `status`, `created_at`, `updated_at`) VALUES
(7,	'BMW 3 Series0',	'fd',	'1689159272.png',	50,	'manual_text',	'Select',	'3+ Day',	5000.00,	0.00,	1,	'2023-07-11 10:14:42',	'2023-07-12 12:41:09'),
(8,	'BMW 3 Series',	'fd343',	'1689159281.png',	6,	'manual_text',	'Unlimited',	'1 Day',	1500.00,	0.00,	1,	'2023-07-11 10:41:22',	'2023-07-12 12:40:41'),
(9,	'BMW 3 Series',	'dfdf',	'1689159290.png',	5,	'manual_text',	'Unlimited',	'1 Day',	1200.00,	0.00,	1,	'2023-07-11 12:25:22',	'2023-07-12 12:40:40'),
(13,	'BMW 3 Series',	'cx',	'1689159337.png',	3,	'manual_text',	'Unlimited',	'1 Day',	64.00,	3000.00,	1,	'2023-07-12 10:55:37',	'2023-07-12 10:58:54'),
(14,	'BMW 3 Series',	'cv',	'1689159364.png',	3,	'manual_text',	'Unlimited',	'1 Day',	1500.00,	1000.00,	1,	'2023-07-12 10:56:04',	'2023-07-12 11:08:42'),
(15,	'BMW 3 Series',	'dfdf',	'1689159396.png',	7,	'manual_text',	'Unlimited',	'1 Day',	64.00,	3000.00,	1,	'2023-07-12 10:56:36',	'2023-07-12 11:08:42');

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

INSERT INTO `country` (`id`, `iso`, `name`, `nicename`, `iso3`, `numcode`, `phonecode`) VALUES
(1,	'AF',	'AFGHANISTAN',	'Afghanistan',	'AFG',	4,	93),
(2,	'AL',	'ALBANIA',	'Albania',	'ALB',	8,	355),
(3,	'DZ',	'ALGERIA',	'Algeria',	'DZA',	12,	213),
(4,	'AS',	'AMERICAN SAMOA',	'American Samoa',	'ASM',	16,	1684),
(5,	'AD',	'ANDORRA',	'Andorra',	'AND',	20,	376),
(6,	'AO',	'ANGOLA',	'Angola',	'AGO',	24,	244),
(7,	'AI',	'ANGUILLA',	'Anguilla',	'AIA',	660,	1264),
(8,	'AQ',	'ANTARCTICA',	'Antarctica',	NULL,	NULL,	0),
(9,	'AG',	'ANTIGUA AND BARBUDA',	'Antigua and Barbuda',	'ATG',	28,	1268),
(10,	'AR',	'ARGENTINA',	'Argentina',	'ARG',	32,	54),
(11,	'AM',	'ARMENIA',	'Armenia',	'ARM',	51,	374),
(12,	'AW',	'ARUBA',	'Aruba',	'ABW',	533,	297),
(13,	'AU',	'AUSTRALIA',	'Australia',	'AUS',	36,	61),
(14,	'AT',	'AUSTRIA',	'Austria',	'AUT',	40,	43),
(15,	'AZ',	'AZERBAIJAN',	'Azerbaijan',	'AZE',	31,	994),
(16,	'BS',	'BAHAMAS',	'Bahamas',	'BHS',	44,	1242),
(17,	'BH',	'BAHRAIN',	'Bahrain',	'BHR',	48,	973),
(18,	'BD',	'BANGLADESH',	'Bangladesh',	'BGD',	50,	880),
(19,	'BB',	'BARBADOS',	'Barbados',	'BRB',	52,	1246),
(20,	'BY',	'BELARUS',	'Belarus',	'BLR',	112,	375),
(21,	'BE',	'BELGIUM',	'Belgium',	'BEL',	56,	32),
(22,	'BZ',	'BELIZE',	'Belize',	'BLZ',	84,	501),
(23,	'BJ',	'BENIN',	'Benin',	'BEN',	204,	229),
(24,	'BM',	'BERMUDA',	'Bermuda',	'BMU',	60,	1441),
(25,	'BT',	'BHUTAN',	'Bhutan',	'BTN',	64,	975),
(26,	'BO',	'BOLIVIA',	'Bolivia',	'BOL',	68,	591),
(27,	'BA',	'BOSNIA AND HERZEGOVINA',	'Bosnia and Herzegovina',	'BIH',	70,	387),
(28,	'BW',	'BOTSWANA',	'Botswana',	'BWA',	72,	267),
(29,	'BV',	'BOUVET ISLAND',	'Bouvet Island',	NULL,	NULL,	0),
(30,	'BR',	'BRAZIL',	'Brazil',	'BRA',	76,	55),
(31,	'IO',	'BRITISH INDIAN OCEAN TERRITORY',	'British Indian Ocean Territory',	NULL,	NULL,	246),
(32,	'BN',	'BRUNEI DARUSSALAM',	'Brunei Darussalam',	'BRN',	96,	673),
(33,	'BG',	'BULGARIA',	'Bulgaria',	'BGR',	100,	359),
(34,	'BF',	'BURKINA FASO',	'Burkina Faso',	'BFA',	854,	226),
(35,	'BI',	'BURUNDI',	'Burundi',	'BDI',	108,	257),
(36,	'KH',	'CAMBODIA',	'Cambodia',	'KHM',	116,	855),
(37,	'CM',	'CAMEROON',	'Cameroon',	'CMR',	120,	237),
(38,	'CA',	'CANADA',	'Canada',	'CAN',	124,	1),
(39,	'CV',	'CAPE VERDE',	'Cape Verde',	'CPV',	132,	238),
(40,	'KY',	'CAYMAN ISLANDS',	'Cayman Islands',	'CYM',	136,	1345),
(41,	'CF',	'CENTRAL AFRICAN REPUBLIC',	'Central African Republic',	'CAF',	140,	236),
(42,	'TD',	'CHAD',	'Chad',	'TCD',	148,	235),
(43,	'CL',	'CHILE',	'Chile',	'CHL',	152,	56),
(44,	'CN',	'CHINA',	'China',	'CHN',	156,	86),
(45,	'CX',	'CHRISTMAS ISLAND',	'Christmas Island',	NULL,	NULL,	61),
(46,	'CC',	'COCOS (KEELING) ISLANDS',	'Cocos (Keeling) Islands',	NULL,	NULL,	672),
(47,	'CO',	'COLOMBIA',	'Colombia',	'COL',	170,	57),
(48,	'KM',	'COMOROS',	'Comoros',	'COM',	174,	269),
(49,	'CG',	'CONGO',	'Congo',	'COG',	178,	242),
(50,	'CD',	'CONGO, THE DEMOCRATIC REPUBLIC OF THE',	'Congo, the Democratic Republic of the',	'COD',	180,	242),
(51,	'CK',	'COOK ISLANDS',	'Cook Islands',	'COK',	184,	682),
(52,	'CR',	'COSTA RICA',	'Costa Rica',	'CRI',	188,	506),
(53,	'CI',	'COTE D\'IVOIRE',	'Cote D\'Ivoire',	'CIV',	384,	225),
(54,	'HR',	'CROATIA',	'Croatia',	'HRV',	191,	385),
(55,	'CU',	'CUBA',	'Cuba',	'CUB',	192,	53),
(56,	'CY',	'CYPRUS',	'Cyprus',	'CYP',	196,	357),
(57,	'CZ',	'CZECH REPUBLIC',	'Czech Republic',	'CZE',	203,	420),
(58,	'DK',	'DENMARK',	'Denmark',	'DNK',	208,	45),
(59,	'DJ',	'DJIBOUTI',	'Djibouti',	'DJI',	262,	253),
(60,	'DM',	'DOMINICA',	'Dominica',	'DMA',	212,	1767),
(61,	'DO',	'DOMINICAN REPUBLIC',	'Dominican Republic',	'DOM',	214,	1809),
(62,	'EC',	'ECUADOR',	'Ecuador',	'ECU',	218,	593),
(63,	'EG',	'EGYPT',	'Egypt',	'EGY',	818,	20),
(64,	'SV',	'EL SALVADOR',	'El Salvador',	'SLV',	222,	503),
(65,	'GQ',	'EQUATORIAL GUINEA',	'Equatorial Guinea',	'GNQ',	226,	240),
(66,	'ER',	'ERITREA',	'Eritrea',	'ERI',	232,	291),
(67,	'EE',	'ESTONIA',	'Estonia',	'EST',	233,	372),
(68,	'ET',	'ETHIOPIA',	'Ethiopia',	'ETH',	231,	251),
(69,	'FK',	'FALKLAND ISLANDS (MALVINAS)',	'Falkland Islands (Malvinas)',	'FLK',	238,	500),
(70,	'FO',	'FAROE ISLANDS',	'Faroe Islands',	'FRO',	234,	298),
(71,	'FJ',	'FIJI',	'Fiji',	'FJI',	242,	679),
(72,	'FI',	'FINLAND',	'Finland',	'FIN',	246,	358),
(73,	'FR',	'FRANCE',	'France',	'FRA',	250,	33),
(74,	'GF',	'FRENCH GUIANA',	'French Guiana',	'GUF',	254,	594),
(75,	'PF',	'FRENCH POLYNESIA',	'French Polynesia',	'PYF',	258,	689),
(76,	'TF',	'FRENCH SOUTHERN TERRITORIES',	'French Southern Territories',	NULL,	NULL,	0),
(77,	'GA',	'GABON',	'Gabon',	'GAB',	266,	241),
(78,	'GM',	'GAMBIA',	'Gambia',	'GMB',	270,	220),
(79,	'GE',	'GEORGIA',	'Georgia',	'GEO',	268,	995),
(80,	'DE',	'GERMANY',	'Germany',	'DEU',	276,	49),
(81,	'GH',	'GHANA',	'Ghana',	'GHA',	288,	233),
(82,	'GI',	'GIBRALTAR',	'Gibraltar',	'GIB',	292,	350),
(83,	'GR',	'GREECE',	'Greece',	'GRC',	300,	30),
(84,	'GL',	'GREENLAND',	'Greenland',	'GRL',	304,	299),
(85,	'GD',	'GRENADA',	'Grenada',	'GRD',	308,	1473),
(86,	'GP',	'GUADELOUPE',	'Guadeloupe',	'GLP',	312,	590),
(87,	'GU',	'GUAM',	'Guam',	'GUM',	316,	1671),
(88,	'GT',	'GUATEMALA',	'Guatemala',	'GTM',	320,	502),
(89,	'GN',	'GUINEA',	'Guinea',	'GIN',	324,	224),
(90,	'GW',	'GUINEA-BISSAU',	'Guinea-Bissau',	'GNB',	624,	245),
(91,	'GY',	'GUYANA',	'Guyana',	'GUY',	328,	592),
(92,	'HT',	'HAITI',	'Haiti',	'HTI',	332,	509),
(93,	'HM',	'HEARD ISLAND AND MCDONALD ISLANDS',	'Heard Island and Mcdonald Islands',	NULL,	NULL,	0),
(94,	'VA',	'HOLY SEE (VATICAN CITY STATE)',	'Holy See (Vatican City State)',	'VAT',	336,	39),
(95,	'HN',	'HONDURAS',	'Honduras',	'HND',	340,	504),
(96,	'HK',	'HONG KONG',	'Hong Kong',	'HKG',	344,	852),
(97,	'HU',	'HUNGARY',	'Hungary',	'HUN',	348,	36),
(98,	'IS',	'ICELAND',	'Iceland',	'ISL',	352,	354),
(99,	'IN',	'INDIA',	'India',	'IND',	356,	91),
(100,	'ID',	'INDONESIA',	'Indonesia',	'IDN',	360,	62),
(101,	'IR',	'IRAN, ISLAMIC REPUBLIC OF',	'Iran, Islamic Republic of',	'IRN',	364,	98),
(102,	'IQ',	'IRAQ',	'Iraq',	'IRQ',	368,	964),
(103,	'IE',	'IRELAND',	'Ireland',	'IRL',	372,	353),
(104,	'IL',	'ISRAEL',	'Israel',	'ISR',	376,	972),
(105,	'IT',	'ITALY',	'Italy',	'ITA',	380,	39),
(106,	'JM',	'JAMAICA',	'Jamaica',	'JAM',	388,	1876),
(107,	'JP',	'JAPAN',	'Japan',	'JPN',	392,	81),
(108,	'JO',	'JORDAN',	'Jordan',	'JOR',	400,	962),
(109,	'KZ',	'KAZAKHSTAN',	'Kazakhstan',	'KAZ',	398,	7),
(110,	'KE',	'KENYA',	'Kenya',	'KEN',	404,	254),
(111,	'KI',	'KIRIBATI',	'Kiribati',	'KIR',	296,	686),
(112,	'KP',	'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF',	'Korea, Democratic People\'s Republic of',	'PRK',	408,	850),
(113,	'KR',	'KOREA, REPUBLIC OF',	'Korea, Republic of',	'KOR',	410,	82),
(114,	'KW',	'KUWAIT',	'Kuwait',	'KWT',	414,	965),
(115,	'KG',	'KYRGYZSTAN',	'Kyrgyzstan',	'KGZ',	417,	996),
(116,	'LA',	'LAO PEOPLE\'S DEMOCRATIC REPUBLIC',	'Lao People\'s Democratic Republic',	'LAO',	418,	856),
(117,	'LV',	'LATVIA',	'Latvia',	'LVA',	428,	371),
(118,	'LB',	'LEBANON',	'Lebanon',	'LBN',	422,	961),
(119,	'LS',	'LESOTHO',	'Lesotho',	'LSO',	426,	266),
(120,	'LR',	'LIBERIA',	'Liberia',	'LBR',	430,	231),
(121,	'LY',	'LIBYAN ARAB JAMAHIRIYA',	'Libyan Arab Jamahiriya',	'LBY',	434,	218),
(122,	'LI',	'LIECHTENSTEIN',	'Liechtenstein',	'LIE',	438,	423),
(123,	'LT',	'LITHUANIA',	'Lithuania',	'LTU',	440,	370),
(124,	'LU',	'LUXEMBOURG',	'Luxembourg',	'LUX',	442,	352),
(125,	'MO',	'MACAO',	'Macao',	'MAC',	446,	853),
(126,	'MK',	'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF',	'Macedonia, the Former Yugoslav Republic of',	'MKD',	807,	389),
(127,	'MG',	'MADAGASCAR',	'Madagascar',	'MDG',	450,	261),
(128,	'MW',	'MALAWI',	'Malawi',	'MWI',	454,	265),
(129,	'MY',	'MALAYSIA',	'Malaysia',	'MYS',	458,	60),
(130,	'MV',	'MALDIVES',	'Maldives',	'MDV',	462,	960),
(131,	'ML',	'MALI',	'Mali',	'MLI',	466,	223),
(132,	'MT',	'MALTA',	'Malta',	'MLT',	470,	356),
(133,	'MH',	'MARSHALL ISLANDS',	'Marshall Islands',	'MHL',	584,	692),
(134,	'MQ',	'MARTINIQUE',	'Martinique',	'MTQ',	474,	596),
(135,	'MR',	'MAURITANIA',	'Mauritania',	'MRT',	478,	222),
(136,	'MU',	'MAURITIUS',	'Mauritius',	'MUS',	480,	230),
(137,	'YT',	'MAYOTTE',	'Mayotte',	NULL,	NULL,	269),
(138,	'MX',	'MEXICO',	'Mexico',	'MEX',	484,	52),
(139,	'FM',	'MICRONESIA, FEDERATED STATES OF',	'Micronesia, Federated States of',	'FSM',	583,	691),
(140,	'MD',	'MOLDOVA, REPUBLIC OF',	'Moldova, Republic of',	'MDA',	498,	373),
(141,	'MC',	'MONACO',	'Monaco',	'MCO',	492,	377),
(142,	'MN',	'MONGOLIA',	'Mongolia',	'MNG',	496,	976),
(143,	'MS',	'MONTSERRAT',	'Montserrat',	'MSR',	500,	1664),
(144,	'MA',	'MOROCCO',	'Morocco',	'MAR',	504,	212),
(145,	'MZ',	'MOZAMBIQUE',	'Mozambique',	'MOZ',	508,	258),
(146,	'MM',	'MYANMAR',	'Myanmar',	'MMR',	104,	95),
(147,	'NA',	'NAMIBIA',	'Namibia',	'NAM',	516,	264),
(148,	'NR',	'NAURU',	'Nauru',	'NRU',	520,	674),
(149,	'NP',	'NEPAL',	'Nepal',	'NPL',	524,	977),
(150,	'NL',	'NETHERLANDS',	'Netherlands',	'NLD',	528,	31),
(151,	'AN',	'NETHERLANDS ANTILLES',	'Netherlands Antilles',	'ANT',	530,	599),
(152,	'NC',	'NEW CALEDONIA',	'New Caledonia',	'NCL',	540,	687),
(153,	'NZ',	'NEW ZEALAND',	'New Zealand',	'NZL',	554,	64),
(154,	'NI',	'NICARAGUA',	'Nicaragua',	'NIC',	558,	505),
(155,	'NE',	'NIGER',	'Niger',	'NER',	562,	227),
(156,	'NG',	'NIGERIA',	'Nigeria',	'NGA',	566,	234),
(157,	'NU',	'NIUE',	'Niue',	'NIU',	570,	683),
(158,	'NF',	'NORFOLK ISLAND',	'Norfolk Island',	'NFK',	574,	672),
(159,	'MP',	'NORTHERN MARIANA ISLANDS',	'Northern Mariana Islands',	'MNP',	580,	1670),
(160,	'NO',	'NORWAY',	'Norway',	'NOR',	578,	47),
(161,	'OM',	'OMAN',	'Oman',	'OMN',	512,	968),
(162,	'PK',	'PAKISTAN',	'Pakistan',	'PAK',	586,	92),
(163,	'PW',	'PALAU',	'Palau',	'PLW',	585,	680),
(164,	'PS',	'PALESTINIAN TERRITORY, OCCUPIED',	'Palestinian Territory, Occupied',	NULL,	NULL,	970),
(165,	'PA',	'PANAMA',	'Panama',	'PAN',	591,	507),
(166,	'PG',	'PAPUA NEW GUINEA',	'Papua New Guinea',	'PNG',	598,	675),
(167,	'PY',	'PARAGUAY',	'Paraguay',	'PRY',	600,	595),
(168,	'PE',	'PERU',	'Peru',	'PER',	604,	51),
(169,	'PH',	'PHILIPPINES',	'Philippines',	'PHL',	608,	63),
(170,	'PN',	'PITCAIRN',	'Pitcairn',	'PCN',	612,	0),
(171,	'PL',	'POLAND',	'Poland',	'POL',	616,	48),
(172,	'PT',	'PORTUGAL',	'Portugal',	'PRT',	620,	351),
(173,	'PR',	'PUERTO RICO',	'Puerto Rico',	'PRI',	630,	1787),
(174,	'QA',	'QATAR',	'Qatar',	'QAT',	634,	974),
(175,	'RE',	'REUNION',	'Reunion',	'REU',	638,	262),
(176,	'RO',	'ROMANIA',	'Romania',	'ROM',	642,	40),
(177,	'RU',	'RUSSIAN FEDERATION',	'Russian Federation',	'RUS',	643,	70),
(178,	'RW',	'RWANDA',	'Rwanda',	'RWA',	646,	250),
(179,	'SH',	'SAINT HELENA',	'Saint Helena',	'SHN',	654,	290),
(180,	'KN',	'SAINT KITTS AND NEVIS',	'Saint Kitts and Nevis',	'KNA',	659,	1869),
(181,	'LC',	'SAINT LUCIA',	'Saint Lucia',	'LCA',	662,	1758),
(182,	'PM',	'SAINT PIERRE AND MIQUELON',	'Saint Pierre and Miquelon',	'SPM',	666,	508),
(183,	'VC',	'SAINT VINCENT AND THE GRENADINES',	'Saint Vincent and the Grenadines',	'VCT',	670,	1784),
(184,	'WS',	'SAMOA',	'Samoa',	'WSM',	882,	684),
(185,	'SM',	'SAN MARINO',	'San Marino',	'SMR',	674,	378),
(186,	'ST',	'SAO TOME AND PRINCIPE',	'Sao Tome and Principe',	'STP',	678,	239),
(187,	'SA',	'SAUDI ARABIA',	'Saudi Arabia',	'SAU',	682,	966),
(188,	'SN',	'SENEGAL',	'Senegal',	'SEN',	686,	221),
(189,	'CS',	'SERBIA AND MONTENEGRO',	'Serbia and Montenegro',	NULL,	NULL,	381),
(190,	'SC',	'SEYCHELLES',	'Seychelles',	'SYC',	690,	248),
(191,	'SL',	'SIERRA LEONE',	'Sierra Leone',	'SLE',	694,	232),
(192,	'SG',	'SINGAPORE',	'Singapore',	'SGP',	702,	65),
(193,	'SK',	'SLOVAKIA',	'Slovakia',	'SVK',	703,	421),
(194,	'SI',	'SLOVENIA',	'Slovenia',	'SVN',	705,	386),
(195,	'SB',	'SOLOMON ISLANDS',	'Solomon Islands',	'SLB',	90,	677),
(196,	'SO',	'SOMALIA',	'Somalia',	'SOM',	706,	252),
(197,	'ZA',	'SOUTH AFRICA',	'South Africa',	'ZAF',	710,	27),
(198,	'GS',	'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS',	'South Georgia and the South Sandwich Islands',	NULL,	NULL,	0),
(199,	'ES',	'SPAIN',	'Spain',	'ESP',	724,	34),
(200,	'LK',	'SRI LANKA',	'Sri Lanka',	'LKA',	144,	94),
(201,	'SD',	'SUDAN',	'Sudan',	'SDN',	736,	249),
(202,	'SR',	'SURINAME',	'Suriname',	'SUR',	740,	597),
(203,	'SJ',	'SVALBARD AND JAN MAYEN',	'Svalbard and Jan Mayen',	'SJM',	744,	47),
(204,	'SZ',	'SWAZILAND',	'Swaziland',	'SWZ',	748,	268),
(205,	'SE',	'SWEDEN',	'Sweden',	'SWE',	752,	46),
(206,	'CH',	'SWITZERLAND',	'Switzerland',	'CHE',	756,	41),
(207,	'SY',	'SYRIAN ARAB REPUBLIC',	'Syrian Arab Republic',	'SYR',	760,	963),
(208,	'TW',	'TAIWAN, PROVINCE OF CHINA',	'Taiwan, Province of China',	'TWN',	158,	886),
(209,	'TJ',	'TAJIKISTAN',	'Tajikistan',	'TJK',	762,	992),
(210,	'TZ',	'TANZANIA, UNITED REPUBLIC OF',	'Tanzania, United Republic of',	'TZA',	834,	255),
(211,	'TH',	'THAILAND',	'Thailand',	'THA',	764,	66),
(212,	'TL',	'TIMOR-LESTE',	'Timor-Leste',	NULL,	NULL,	670),
(213,	'TG',	'TOGO',	'Togo',	'TGO',	768,	228),
(214,	'TK',	'TOKELAU',	'Tokelau',	'TKL',	772,	690),
(215,	'TO',	'TONGA',	'Tonga',	'TON',	776,	676),
(216,	'TT',	'TRINIDAD AND TOBAGO',	'Trinidad and Tobago',	'TTO',	780,	1868),
(217,	'TN',	'TUNISIA',	'Tunisia',	'TUN',	788,	216),
(218,	'TR',	'TURKEY',	'Turkey',	'TUR',	792,	90),
(219,	'TM',	'TURKMENISTAN',	'Turkmenistan',	'TKM',	795,	7370),
(220,	'TC',	'TURKS AND CAICOS ISLANDS',	'Turks and Caicos Islands',	'TCA',	796,	1649),
(221,	'TV',	'TUVALU',	'Tuvalu',	'TUV',	798,	688),
(222,	'UG',	'UGANDA',	'Uganda',	'UGA',	800,	256),
(223,	'UA',	'UKRAINE',	'Ukraine',	'UKR',	804,	380),
(224,	'AE',	'UNITED ARAB EMIRATES',	'United Arab Emirates',	'ARE',	784,	971),
(225,	'GB',	'UNITED KINGDOM',	'United Kingdom',	'GBR',	826,	44),
(226,	'US',	'UNITED STATES',	'United States',	'USA',	840,	1),
(227,	'UM',	'UNITED STATES MINOR OUTLYING ISLANDS',	'United States Minor Outlying Islands',	NULL,	NULL,	1),
(228,	'UY',	'URUGUAY',	'Uruguay',	'URY',	858,	598),
(229,	'UZ',	'UZBEKISTAN',	'Uzbekistan',	'UZB',	860,	998),
(230,	'VU',	'VANUATU',	'Vanuatu',	'VUT',	548,	678),
(231,	'VE',	'VENEZUELA',	'Venezuela',	'VEN',	862,	58),
(232,	'VN',	'VIET NAM',	'Viet Nam',	'VNM',	704,	84),
(233,	'VG',	'VIRGIN ISLANDS, BRITISH',	'Virgin Islands, British',	'VGB',	92,	1284),
(234,	'VI',	'VIRGIN ISLANDS, U.S.',	'Virgin Islands, U.s.',	'VIR',	850,	1340),
(235,	'WF',	'WALLIS AND FUTUNA',	'Wallis and Futuna',	'WLF',	876,	681),
(236,	'EH',	'WESTERN SAHARA',	'Western Sahara',	'ESH',	732,	212),
(237,	'YE',	'YEMEN',	'Yemen',	'YEM',	887,	967),
(238,	'ZM',	'ZAMBIA',	'Zambia',	'ZMB',	894,	260),
(239,	'ZW',	'ZIMBABWE',	'Zimbabwe',	'ZWE',	716,	263);

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
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `home_page` (`id`, `home_logo`, `banner_content`, `banner_content2`, `button_name`, `button_link`, `footer_content`, `discord_link`, `twitter_link`, `logo_name`, `top_button_name`, `top_button_link`, `discord_title1`, `discord_title2`, `discord_button_name`, `discord_button_link`, `news_title1`, `news_title2`, `ingos_logo1`, `ingos_logo2`, `ingos_logo3`, `ingos_logo4`, `ingos_logo5`, `ingos_logo6`, `footer_copy`, `created_at`, `updated_at`) VALUES
(1,	'1688968836logo-new.jpg',	'DISCOVER, AND COLLECT THE WORLD’S BEST',	'SNOW GLOBE CITIES NFT. ARE YOU READY?',	'JOIN THE DISCORD',	'https://discord.com/invite/m7BJsR6xv9',	'Test SVG BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY',	'https://discord.com/invite/m7BJsR6xv9',	'https://twitter.com/SnowGlobeCities',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'© 2022 Snow Globe Cities - All Rights Reserved',	'2022-06-13',	'2023-07-11'),
(2,	'1655990580logo1.png',	'COMING TO A CITY NEAR YOU',	'ARE YOU READY?',	'CONNECT WALLET',	'#',	'<p>BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY </p>  <p> - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY </p> <p> - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY </p> <p> - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY - BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY </p>',	'https://discord.com/invite/m7BJsR6xv9',	'https://twitter.com/SnowGlobeCities',	'SNOW GLOBE CITIES',	'WORLD MAP',	'https://labs.snowglobecities.io/#',	'BE PART OF THE CHANGE, BE PART OF OUR COMMUNITY',	'JOIN OUR DISCORD AND PARTICIPATE IN OUR NEXT COMPETITION.',	'JOIN THE DISCORD',	'#',	'STAY UP TO DATE ON THE LATEST NEWS,<br/> ANNOUNCEMENTS, AND USER GUIDES.',	'SUBSCRIBE TO OUR WEEKLY EMAIL NEWSLETTER!',	'1656049193cropped-sw-logo-02-1 copy.png',	'1656049193wfp-logo-standard-blue-en.png',	'1656049193unicef_logo_png3-1.png',	'16560492552560px-usaid-identity.svg.png',	'16560492552560px-unhabitat.svg.png',	'1656049255livelove_white_logo-vertical.png',	'',	'2022-06-13',	'2022-06-24');

DROP TABLE IF EXISTS `language_management`;
CREATE TABLE `language_management` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `language_management` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(2,	'Italian',	0,	'2023-07-12 06:30:48',	'2023-07-12 12:38:50'),
(3,	'English',	1,	'2023-07-12 06:31:00',	'2023-07-12 06:31:00');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2022_05_19_070355_create_admin_table',	2);

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

INSERT INTO `newsletter` (`id`, `email`, `message`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1,	'votivedeepak.php@gmail.com',	'Hello ',	1,	'news',	NULL,	'2022-06-27 09:31:18'),
(3,	'votivedeepak789.php@gmail.com',	'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown',	1,	'help',	NULL,	'2022-06-27 13:02:48'),
(7,	'votivedeepak789.php@gmail.com',	'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown',	1,	'help',	NULL,	'2022-06-27 10:16:51'),
(8,	'testemail@gmail.com',	NULL,	1,	'news',	'2022-06-27 12:18:54',	'2022-06-27 12:18:54'),
(9,	'votivedeepak.php@gmail.com',	'Hello how are you',	0,	'help',	'2022-06-27 12:40:27',	'2022-06-27 12:41:04'),
(10,	'votivedeepak.php@gmail.com',	'Hello how are you',	1,	'help',	'2022-06-27 12:41:18',	'2022-06-27 12:41:18'),
(15,	'test@gmail.com',	NULL,	1,	'news',	'2022-06-27 12:55:44',	'2022-06-27 12:55:44');

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

INSERT INTO `pages` (`id`, `page_url`, `page_title`, `page_content`, `status`, `sub_title`, `type`, `created_at`, `updated_at`) VALUES
(1,	'about-us',	'ABOUT US',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. bbbb ccc xxxxx nnn dddddeeee ggggg bbtttt</p>',	1,	'About Snow Globe Cities',	'cms',	'2022-06-21 19:36:37',	'2023-07-10 06:34:10'),
(2,	'contact-us',	'CONTACT US',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',	1,	'CONTACT US',	'cms',	'2022-06-21 19:36:37',	'2023-07-10 06:34:25'),
(3,	'HOW CAN WE HELP?',	'HOW CAN WE HELP?',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',	0,	'HOW CAN WE HELP?',	'cms',	'2022-06-21 19:36:37',	'2023-07-10 06:27:15'),
(4,	'terms-&-conditions',	'TERMS & CONDITIONS',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',	1,	'TERMS & CONDITIOINS',	'cms',	'2022-06-21 19:36:37',	'2023-07-11 14:20:32'),
(5,	'PRIVACY POLICY',	'PRIVACY POLICY',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>',	0,	'PRIVACY POLICY',	'cms',	'2022-06-21 19:36:37',	'2023-07-10 06:27:18'),
(6,	'FAQ',	'FAQ',	'<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. FAQ</p>',	0,	'FAQ',	'cms',	'2022-06-21 19:36:37',	'2023-07-10 06:27:19'),
(10,	'OUR MISSION',	'OUR MISSION',	'<p><em>More</em> than half of us live in cities. By 2050, two-thirds of all humanity&mdash;6.5 billion people&mdash;will be urban. Sustainable development cannot be achieved without significantly transforming the way we build and manage our urban spaces.</p>\r\n\r\n<p>The rapid growth of cities&mdash;a result of rising populations and increasing migration&mdash;has led to a boom in mega-cities, especially in the developing world, and slums are becoming a more significant feature of urban life. Making cities sustainable means creating career and business opportunities, safe and affordable housing, and building resilient societies and economies. It involves INVESTING in public transport, creating green public spaces, and improving urban planning and management in participatory and inclusive ways.</p>\r\n\r\n<p>Snow Globe Cities (SGC) will be supporting the Sustainable Development Goals (SDGs), also known as the Global Goals adopted by the United Nations as a universal call to action to end poverty, protect the planet, and ensure that by 2030 all people enjoy peace and prosperity.</p>\r\n\r\n<p>Holders will be donors and supporting a certain cause around the world such as: Clean Water and Sanitation, Shelter, Affordable and Clean Energy, Sustainable Cities and Communities&hellip;</p>\r\n\r\n<p>The creativity, knowhow, technology and financial resources from all of the community is necessary to achieve our goal. Reports Will BE uploaded on our WEBsite to show the progress of our interventions ALL AROUND THE WORLD.</p>',	1,	'YOU CAN HELP US MAKE OUR WORLD A BETTER PLACE',	'mission',	'2022-06-21 19:36:37',	'2023-01-16 10:15:28'),
(11,	'OUR PLAN',	'OUR PLAN',	'<h3>  MERCHANDISE</h3>\r\n  <p>HOODIES, CAPS, AND STICKERS – EVERYTHING SNOW GLOBE CITIES. OUR HOLDERS \r\nWILL GET THE CHANCE TO COPP EXCLUSIVE DROPS AT A DISCOUNTED RATE. </p>\r\n\r\n<h3> SNOW GLOBES COLLECTIBLES</h3>\r\n  <p>OUR COMMUNITY WILL GET THE CHANCE TO HAVE THEIR NFTS TURNED INTO 3D \r\nCOLLECTIBLES. THESE LIMITED EDITION SNOW GLOBES WILL BE HANDPICKED, AND \r\nGIFTED TO THEIR REPRESENTATIVE HOLDERS. </p>\r\n\r\n<h3>  DONATIONS</h3>\r\n  <p>A PERCENTAGE OF 4% FROM ALL OUR REVENUE WILL BE DONATED AND DISTRIBUTED TO \r\nMULTIPLE NGOS THAT WILL HELP SHINE LIGHT, AND HELP THE W.A.S.H. GLOBAL ISSUE \r\n(WATER, SANITATION, AND HYGIENE) WORLDWIDE. WE PARTNERED WITH LIVELOVE AND \r\nMULTIPLE DONATORS TO THE UNITED NATIONS UN TO HELP US WITH OUR MISSION. </p>\r\n\r\n<h3>  METAVERSE  INTEGRATION</h3>\r\n  <p>SOON TO BE REVEALED.<br>\r\nJOIN OUR DISCORD TO BE THE FIRST TO FIND OUT! </p>',	1,	'HERE IS THE ROADMAP FOR OUR HOLDERS',	'plan',	'2022-06-21 19:36:37',	'2022-06-24 13:02:03'),
(12,	'OUR TEAM',	'OUR TEAM',	NULL,	1,	'THE PEOPLE BEHIND THIS AWESOME PROJECT',	'teamts',	'2022-06-21 19:36:37',	'2022-06-22 12:20:58'),
(13,	'HOW CAN I JOIN THE SNOW GLOBE CITIES NFT?',	'HOW CAN I JOIN THE SNOW GLOBE CITIES NFT?',	'<p>You will be able to mint a Snow Globe on our website. Join our Discord to be the first to find out!</p>',	1,	'1',	'faq',	'2022-06-21 19:36:37',	'2022-06-22 13:02:24'),
(14,	'WHEN WILL I BE ABLE TO MINT MY SNOW GLOBE CITY?',	'WHEN WILL I BE ABLE TO MINT MY SNOW GLOBE CITY?',	'<p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#39;t heard of them accusamus labore sustainable VHS.</p>',	1,	'1',	'faq',	'2022-06-21 19:36:37',	NULL),
(17,	'https://twitter.com/SnowGlobeCities',	'Fabio Russo',	'1688969131team3.jpg',	1,	'Owner',	'team',	'2022-06-22 11:02:57',	'2023-07-10 06:05:31'),
(18,	'https://twitter.com/SnowGlobeCities',	'Anna Romano',	'1688969186team2.jpg',	1,	'Marketing Manager',	'team',	'2022-06-22 12:00:23',	'2023-07-10 06:06:26'),
(19,	'https://twitter.com/SnowGlobeCities',	'Luigi Costa',	'1688969223team5.jpg',	1,	'Operations & Projects',	'team',	'2022-06-22 12:00:23',	'2023-07-10 06:07:03'),
(27,	NULL,	'Gioia Leone',	'1688969344team6.png',	1,	'Inbound Strategist',	'team',	'2023-07-10 06:09:04',	'2023-07-10 06:09:04');

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
(1,	'admin',	'admin',	NULL,	'admin@gmail.com',	'7685496477',	'$2y$10$TjjF3EW8pDPwi7zrNAx1V.ApPWm.NyQuyOFe3t.vdUxiFrTx3u45.',	1,	1,	0,	'',	NULL,	0,	'user-1653633836.png',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-06-10 12:21:39',	NULL,	NULL,	0,	NULL,	NULL),
(336,	'service_provider',	'service providerw',	NULL,	'rahulservpro@gmail.com',	'3453453450',	'$2y$10$J6btJfRDY8Sdb0AOmOG9v./KYFc1fyyv7IsjCIktWyvOc8MfWmBHy',	4,	1,	0,	'YVVyZGE4Rm8wY2FPWnN3Q2oyd09mUT09',	NULL,	0,	'user1-1653644740.jpg',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'99',	NULL,	'Indore',	NULL,	NULL,	NULL,	'bsbsb',	NULL,	NULL,	NULL,	NULL,	NULL,	'web',	NULL,	NULL,	NULL,	NULL,	NULL,	'kK40jc',	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-25 11:41:12',	'2022-05-25 07:43:23',	NULL,	NULL,	NULL,	NULL,	NULL),
(346,	'normal_user',	'rahul solanki',	NULL,	'user@gmail.com',	'0942509544',	'$2y$10$RCa.oIFnJ1/igUK9R53j0eoyXYa44DsM/FvJJlW1ynLaK2iG4LPj6',	2,	0,	0,	NULL,	NULL,	0,	'food-1653562885.png',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-26 08:22:09',	'2022-05-26 02:52:09',	NULL,	NULL,	NULL,	NULL,	NULL),
(347,	'normal_user',	'vivek@gmail.com',	NULL,	'vivek@gmail.com',	'1234577899',	'$2y$10$cfKorP8.CE6arkxNyVFFouHvKLpYIuWSBN7wpdvc6Az7K8XIxlJTi',	2,	0,	0,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-26 13:10:02',	'2022-05-26 07:40:02',	NULL,	NULL,	NULL,	NULL,	NULL),
(348,	'normal_user',	'viveksd',	NULL,	'vevie@gmail.com',	'1231324562',	'$2y$10$ljLea3bBvsYVpWH3xfE4DeGZKkgPW8tO8/wWe7tDy4apdzhWGm7Qq',	2,	0,	0,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-26 13:11:22',	'2022-05-26 07:41:22',	NULL,	NULL,	NULL,	NULL,	NULL),
(349,	'normal_user',	'rahul solanki',	NULL,	'scout@gmail.com',	'0942509544',	'$2y$10$QwBCCOaklKtMkYge53WAzuMvoECCOEDkTIke.UBeOlRYiHMi/lOce',	2,	0,	0,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'3',	NULL,	'Indore',	NULL,	NULL,	NULL,	'rahul@gmail.com',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-27 06:30:17',	'2023-07-11 09:15:31',	NULL,	NULL,	NULL,	NULL,	NULL),
(350,	'service_provider',	'rahul',	NULL,	'serv@gmail.com',	'0942509544',	'$2y$10$AV2jgjgeS92pOOcdcoSr5e7JJq0uiYdYsuMwE69F39tY1xsgDUQGG',	4,	0,	0,	NULL,	NULL,	0,	'user-1653633836.png',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-27 06:41:31',	'2022-05-27 01:11:31',	NULL,	NULL,	NULL,	NULL,	NULL),
(351,	'normal_user',	'Swayam Rane',	NULL,	'swayam@gmail.com',	'0123456789',	'$2y$10$JZSAQkrhMOD/.YUsWSXdcOw.A24ND4h2UwnhBOnVr4qMChaXfN/cO',	2,	0,	0,	NULL,	NULL,	0,	'user-1653642505.jpg',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-27 09:08:14',	'2022-05-27 03:38:14',	NULL,	NULL,	NULL,	NULL,	NULL),
(352,	'service_provider',	'Swayam Service',	NULL,	'swayamservice@gmail.com',	'0942509544',	'$2y$10$lq9kA0oM/.2eoPuvjDkuZ.OoXUnHqt8TOQpKE7Sg8gyp4s3PTCItS',	4,	0,	0,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-27 09:09:33',	'2022-05-27 03:39:33',	NULL,	NULL,	NULL,	NULL,	NULL),
(353,	'normal_user',	'jhon doww',	NULL,	'john@gmail.com',	'0123456789',	'$2y$10$kMN95SoprKqP83mJEZYr2OOZNoHPh7qhi.gn5hXdljgjsofPCXthG',	2,	0,	0,	NULL,	NULL,	0,	'user-1653644716.jpg',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-27 09:40:40',	'2022-05-27 04:10:40',	NULL,	NULL,	NULL,	NULL,	NULL),
(354,	'normal_user',	'vikram kumar',	NULL,	'vikram@gmail.com',	'9887785987',	'$2y$10$Vh2jkbV8Cgkw..j6wn0p7.x/Jdi6U.GzYfuLhkJDAVgNONGYvUnEG',	2,	0,	0,	NULL,	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'4',	NULL,	'Indore',	NULL,	NULL,	NULL,	'Rajendra Nagar',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	1,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-05-27 09:44:08',	'2022-06-22 06:52:02',	NULL,	NULL,	NULL,	NULL,	NULL),
(355,	'normal_user',	'testss',	NULL,	'tesdts@gmail.com',	'78989958587',	'$2y$10$H5AhxwF5dEfhwL8062RTueoSYvuRRTXL/DHmZjj2cqRezNrtM7.yy',	2,	1,	0,	'a0dxVVAyZWpITUNCT0VQKzhBNzBqUT09',	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'4',	NULL,	'test',	NULL,	NULL,	NULL,	'test',	NULL,	NULL,	NULL,	NULL,	NULL,	'web',	NULL,	NULL,	NULL,	NULL,	NULL,	'KKU0Sb',	NULL,	0,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2022-06-27 11:06:43',	'2023-07-10 07:49:44',	NULL,	NULL,	NULL,	NULL,	NULL);

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

INSERT INTO `users1` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Admin',	'admin1@gmail.com',	NULL,	'$2y$10$Rm5FC2i6utcbScNomUg2mO0PzaoOYZ.ni5z4Zd1/9T5.Qs3I/1eiO',	NULL,	'2022-05-19 05:56:14',	'2022-05-19 05:56:14'),
(2,	'Admin',	'admin@gmail.com',	NULL,	'$2y$10$2m7C0Bp9Usm9up6wZU.ee.jU9lsLFHJvzAcNQ2d7iWHZuwe/buZ1K',	NULL,	'2022-05-19 01:13:31',	'2022-05-19 01:13:31');

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

INSERT INTO `vendors` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Rahul Vendor',	'vendor@gmail.com',	NULL,	'$2y$10$Fx3agFuck9jKNbH9FQyMTet9bMhW60ta18O.J0E1/hed.g79mA0jC',	NULL,	'2022-05-19 01:44:25',	'2022-05-19 01:44:25');

-- 2023-07-12 12:44:17