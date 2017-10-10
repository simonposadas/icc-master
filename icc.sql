-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2017 at 05:40 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icc`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `cust_id` int(11) NOT NULL,
  `cust_fname` varchar(45) NOT NULL,
  `cust_lname` varchar(45) NOT NULL,
  `gender` char(1) DEFAULT NULL,
  `addNo` varchar(6) DEFAULT NULL,
  `addSt` varchar(45) DEFAULT NULL,
  `addBrgy` varchar(45) DEFAULT NULL,
  `addCity` varchar(45) DEFAULT NULL,
  `contNo` varchar(15) NOT NULL,
  `email` varchar(30) DEFAULT NULL,
  `reserve_id` int(11) DEFAULT NULL,
  `address` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`cust_id`, `cust_fname`, `cust_lname`, `gender`, `addNo`, `addSt`, `addBrgy`, `addCity`, `contNo`, `email`, `reserve_id`, `address`) VALUES
(1, 'Luke', 'Posadas', 'M', '69', 'Maligaya', 'San Agustin', 'Magalan', '09263149065', 'Hiout1965@teleworm.us', NULL, ''),
(2, 'ksjdfksjdf', 'lkdjldkfjgdklf', 'M', NULL, NULL, NULL, NULL, '234234234', 'Hiout1965@teleworm.us', NULL, ''),
(3, 'ksjdfksjdf', 'lkdjldkfjgdklf', 'M', NULL, NULL, NULL, NULL, '234234234', 'Hiout1965@teleworm.us', NULL, ''),
(4, 'ksjdfksjdf', 'lkdjldkfjgdklf', 'M', NULL, NULL, NULL, NULL, '234234234', 'Hiout1965@teleworm.us', NULL, ''),
(5, 'ksjdfksjdf', 'lkdjldkfjgdklf', 'M', NULL, NULL, NULL, NULL, '234234234', 'Hiout1965@teleworm.us', NULL, ''),
(6, 'ksjdfksjdf', 'lkdjldkfjgdklf', 'M', NULL, NULL, NULL, NULL, '234234234', 'Hiout1965@teleworm.us', NULL, ''),
(7, 'Simon', 'Posadas', 'M', NULL, NULL, NULL, NULL, '6546546', 'Hiout1965@teleworm.us', NULL, ''),
(8, 'Arits', 'Lucillo', 'M', NULL, NULL, NULL, NULL, '654654', 'Hiout1965@teleworm.us', NULL, ''),
(9, 'Aian', 'Milan', 'F', NULL, NULL, NULL, NULL, '6215616', 'Hiout1965@teleworm.us', NULL, ''),
(10, 'Emrech', 'Buban', 'M', NULL, NULL, NULL, NULL, '6545646', 'Hiout1965@teleworm.us', NULL, ''),
(11, 'darryl', 'milan', 'M', NULL, NULL, NULL, NULL, '030306540', 'Hiout1965@teleworm.us', NULL, ''),
(12, 'asdad', 'asdasd', 'M', NULL, NULL, NULL, NULL, '0985041241', 'Hiout1965@teleworm.us', NULL, 'asd'),
(13, 'asdad', 'asdasd', 'M', NULL, NULL, NULL, NULL, '0985041241', 'Hiout1965@teleworm.us', NULL, 'asd'),
(14, 'asdad', 'asdasd', 'M', NULL, NULL, NULL, NULL, '0985041241', 'Hiout1965@teleworm.us', NULL, 'asd'),
(15, 'asdad', 'asdasd', 'M', NULL, NULL, NULL, NULL, '0985041241', 'Hiout1965@teleworm.us', NULL, 'asd'),
(16, 'asdad', 'asdasd', 'M', NULL, NULL, NULL, NULL, '0985041241', 'Hiout1965@teleworm.us', NULL, 'asd'),
(17, 'asdad', 'asdasd', 'M', NULL, NULL, NULL, NULL, '0985041241', 'Hiout1965@teleworm.us', NULL, 'asd'),
(18, 'Garp', 'Monkey', 'M', NULL, NULL, NULL, NULL, '09054712031', 'Hiout1965@teleworm.us', NULL, 'QC'),
(19, 'Sanji', 'Vinsmoke', 'M', NULL, NULL, NULL, NULL, '09054709163', 'Hiout1965@teleworm.us', NULL, 'East Blue Grand line'),
(20, 'James', 'Lebron', 'M', NULL, NULL, NULL, NULL, '09054709163', 'Hiout1965@teleworm.us', NULL, 'Cleaveland Cavaliers'),
(21, 'Derick', 'Rose', 'M', NULL, NULL, NULL, NULL, '09051234567', 'Hiout1965@teleworm.us', NULL, 'Chicago Bulls Center'),
(22, 'Brisom', 'Indie', 'M', NULL, NULL, NULL, NULL, '090547012345', 'Hiout1965@teleworm.us', NULL, 'Street');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipment_id` int(11) NOT NULL,
  `equipment_name` varchar(50) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `equipment_name`, `cost`, `quantity`, `status`) VALUES
(12, 'Chairs', 100, 200, 0),
(13, 'Table', 100, 150, 0),
(14, 'Balloons', 100, 160, 0);

-- --------------------------------------------------------

--
-- Table structure for table `event_details`
--

CREATE TABLE `event_details` (
  `event_id` int(11) NOT NULL,
  `event_type` varchar(20) DEFAULT NULL,
  `event_addNo` varchar(45) DEFAULT NULL,
  `event_addSt` varchar(45) DEFAULT NULL,
  `event_addBrgy` varchar(45) DEFAULT NULL,
  `event_addCity` varchar(45) DEFAULT NULL,
  `event_motiff` varchar(45) DEFAULT NULL,
  `reserve_id` int(11) DEFAULT NULL,
  `event_status` tinyint(4) DEFAULT NULL,
  `event_name` varchar(45) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `place` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_details`
--

INSERT INTO `event_details` (`event_id`, `event_type`, `event_addNo`, `event_addSt`, `event_addBrgy`, `event_addCity`, `event_motiff`, `reserve_id`, `event_status`, `event_name`, `order_id`, `place`) VALUES
(6, 'wedding', NULL, NULL, NULL, 'cubao, QC', NULL, NULL, NULL, NULL, NULL, ''),
(7, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QC'),
(8, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QC'),
(9, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QC'),
(10, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QC'),
(11, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QC'),
(12, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QC'),
(13, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QC'),
(14, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Quezon City Palace'),
(15, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Quezon City Palace Square'),
(16, 'wedding', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Madison Square Garden'),
(17, 'bday', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'QC');

-- --------------------------------------------------------

--
-- Table structure for table `food_details`
--

CREATE TABLE `food_details` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(20) NOT NULL,
  `food_type_id` int(11) NOT NULL,
  `food_price` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `food_type`
--

CREATE TABLE `food_type` (
  `food_type_id` int(11) NOT NULL,
  `food_type_name` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_type`
--

INSERT INTO `food_type` (`food_type_id`, `food_type_name`, `status`) VALUES
(1, 'Appetizer', 1),
(2, 'Soup', 0),
(3, 'Salad', 0),
(4, 'Main Entree', 0),
(5, 'Desserts', 0),
(6, 'Drinks', 0);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(8, '2017_08_20_064809_create_reservation_details_relation', 1),
(9, '2017_08_20_074223_add_col_package_id_remove_food_id_in_reservation_details', 1),
(11, '2017_08_20_080148_modify_package_food_table', 2),
(21, '2017_08_20_090515_create_package_type_table', 3),
(22, '2017_08_20_091238_add_col_package_type_in_package_details_table', 3),
(23, '2017_08_20_114022_add_address_col_customer_info', 4),
(24, '2017_08_20_122526_add_col_place_event_details_table', 5),
(26, '2017_08_24_213852_chage_status_col_reservation_details_table', 6),
(27, '2017_08_26_163522_change_status_col_in_reservation_details', 7),
(28, '2017_08_26_194131_add_col_disapprove_reason_in_reservation_details_table', 8),
(31, '2017_08_27_133835_reservation_equipments', 9),
(32, '2017_08_27_202328_create_reservation_workers_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `multi_equip`
--

CREATE TABLE `multi_equip` (
  `order_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `multi_package`
--

CREATE TABLE `multi_package` (
  `reserve_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `multi_worker`
--

CREATE TABLE `multi_worker` (
  `worker_id` int(11) NOT NULL,
  `reserve_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(11) NOT NULL,
  `reserve_id` int(11) NOT NULL,
  `pack_id` int(11) NOT NULL,
  `equip_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `package_details`
--

CREATE TABLE `package_details` (
  `package_id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `package_price` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `package_type_id` int(10) UNSIGNED NOT NULL COMMENT 'Package type foreign key'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_details`
--

INSERT INTO `package_details` (`package_id`, `package_name`, `package_price`, `status`, `package_type_id`) VALUES
(1, 'Package 1', 500, 0, 1),
(2, 'Package 2', 500, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `package_food`
--

CREATE TABLE `package_food` (
  `package_id` int(11) NOT NULL,
  `id` bigint(20) UNSIGNED NOT NULL,
  `food_type_id` int(11) NOT NULL COMMENT 'Food type fk',
  `desc` text NOT NULL COMMENT 'Package details menu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_food`
--

INSERT INTO `package_food` (`package_id`, `id`, `food_type_id`, `desc`) VALUES
(1, 1, 1, 'Canapes (Ham, Cucumber and cheese)/ Nachos with Salsa Dip'),
(1, 2, 2, 'Pumpkin Soup / Mushroom Soup / Nido Soup / Creamy Vegetable Soup'),
(1, 3, 3, 'Salad Bar Garden Salad (Iceberg Lettuce, Cucumber, Tomatoes, White Onions, Carrots, Kernel Corn) Dressings: Caesar and Thousand Island / Waldorf Salad Hawaiian Macaroni Salad'),
(1, 4, 4, '(A choice of 1 per dish) Country Style Cheesy Lasagna / Seafood Fettuccine Alfredo / Classic Ham and Crispy Bacon Carbonarra / Baked Macaroni with Anchovies/ Old Style Italian Sauce Spaghetti Pot Roast Beef in Mushroom Sauce / Ox Tail Kare-Kare / Beef Stroganoff / Holiday Beef with Olives / Beef Caldereta / Beef Mechado Pork Tenderloin Teriyaki / Pork Hamonado / Barbeque Spareribs / Pork Strips in Spicy Sauce / Pork Korean Sesame Chicken Pastel / Chicken Courdon Bleu / Baked Chicken Barbeque / Chicken Hamonado / Chicken Alexander / Chicken Teriyaki Fish Fillet with Homemade Tartar Sauce or Garlic Sauce / Grilled Fish with Lemon Butter Sauce / Rellenong Bangus Buttered Vegetables with Kernel Corn and Mushroom / Chapseuy / Gallacher Brown Creamy Potato / Mixed Vegetables / Lumpiang Ubod Steamed Pandan Rice'),
(1, 5, 5, 'Choose 2 desserts Fresh Fruits / White Salad / Buco Pandan / Fruit Salad / Leche Plan / Brownies and Blondies'),
(1, 6, 6, 'Blue Lemonade / Four Season / Black Gulaman'),
(2, 7, 1, 'Crispy Spinach with Dip / Canapes'),
(2, 8, 2, 'Pumpkin Soup / Mushroom Soup / Nido Soup'),
(2, 9, 3, 'Salad Bar Garden Salad(Iceberg Lettuce, Cucumber, Tomatoes, White Onions, Carrots, Kernel Corn) Dressings: Caesar and Thousand Island'),
(2, 10, 4, '(A choice of 1 per dish) Lasagna / Fettuccine Alfredo / Carbonarra / Baked Macaroni / Italian Spaghetti / Sotanghon Guisado Roast Beef in Oyster and Creamy Mushrooms Sauce / Beef Caldereta / Beef Salpicao / Beef Alapobre / Beef Mechado / Beef Stroganoff Pork Hamonado / Barbeque Spareribs / Pork Strips in Spicy Sauce / Pork Korean Sesame / Pork Asado Chicken Pastel / Chicken Courdon Bleu / Baked Chicken Barbeque / Chicken Hamonado / Chicken Alexander / Chicken Teriyaki Fish Fillet with Homemade Tartar Sauce or Garlic Sauce / Grilled Fish with Lemon Butter Sauce / Rellenong Bangus Buttered Vegetables with Kernel Corn and Mushroom / Chapseuy / Mixed Vegetables / Lumpiang Ubod / Corn and Carrot Steamed Pandan Rice'),
(2, 11, 5, 'Choose 2 desserts Fresh Fruits / White Salad / Buco Pandan / Fruit Salad / Brownies and Blondies'),
(2, 12, 6, 'Blue Lemonade / Four Season / Black Gulaman');

-- --------------------------------------------------------

--
-- Table structure for table `package_type`
--

CREATE TABLE `package_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package_type`
--

INSERT INTO `package_type` (`id`, `desc`) VALUES
(1, 'Wedding Buffet Menu'),
(2, 'Merienda Menu');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_details`
--

CREATE TABLE `reservation_details` (
  `reserv_id` int(11) NOT NULL,
  `reserv_guestNo` varchar(45) NOT NULL,
  `reserv_budget` varchar(45) DEFAULT NULL,
  `cust_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `addOn_id` int(11) DEFAULT NULL,
  `reserv_date` date NOT NULL,
  `reserv_time` time NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `package_id` int(11) NOT NULL,
  `disapprove_reason` text COMMENT 'The reason of admin for disapproving the reservation'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_details`
--

INSERT INTO `reservation_details` (`reserv_id`, `reserv_guestNo`, `reserv_budget`, `cust_id`, `event_id`, `addOn_id`, `reserv_date`, `reserv_time`, `status`, `package_id`, `disapprove_reason`) VALUES
(2, '100', NULL, 17, 12, NULL, '2017-09-21', '07:00:00', 2, 1, NULL),
(3, '100', NULL, 18, 13, NULL, '2017-09-21', '08:00:00', 4, 1, NULL),
(4, '100', NULL, 19, 14, NULL, '2017-09-21', '07:00:00', 2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry''s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(5, '100', '100', 20, 15, NULL, '2017-09-21', '09:00:00', 5, 1, NULL),
(6, '100', NULL, 21, 16, NULL, '2017-09-21', '07:00:00', 5, 1, NULL),
(7, '100', '100', 22, 17, NULL, '2017-09-21', '13:00:00', 3, 1, 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_equipments`
--

CREATE TABLE `reservation_equipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reserv_id` int(11) NOT NULL COMMENT 'Reservation foreign key',
  `equipment_id` int(11) NOT NULL COMMENT 'Equipment foreign key',
  `quantity` int(11) NOT NULL COMMENT 'the number of quantity assigned in a event',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservation_workers`
--

CREATE TABLE `reservation_workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reserv_id` int(11) NOT NULL COMMENT 'Reservation foreign key',
  `worker_id` int(11) NOT NULL COMMENT 'Worker foreign key',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$o0FVwYWWjdGmltiO0lgxWuUVgtPROldEA3yJ63eOQSMZR14LwLJhC');

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL,
  `worker_lname` varchar(20) NOT NULL,
  `worker_fname` varchar(20) NOT NULL,
  `worker_mname` varchar(20) NOT NULL,
  `worker_age` int(3) NOT NULL,
  `worker_role_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `worker_lname`, `worker_fname`, `worker_mname`, `worker_age`, `worker_role_id`, `status`) VALUES
(1, 'Rutherford', 'Irma', 'Koss', 34, 1, 0),
(2, 'Strosin', 'Yasmin', 'Parker', 18, 1, 0),
(3, 'Schultz', 'Amber', 'Mraz', 31, 4, 0),
(4, 'Raynor', 'Cecile', 'Stark', 31, 1, 0),
(5, 'Herzog', 'Kyra', 'Trantow', 23, 3, 0),
(6, 'Quitzon', 'Leta', 'Durgan', 20, 5, 0),
(7, 'Littel', 'Gardner', 'Larkin', 22, 2, 0),
(8, 'Hoppe', 'Maxine', 'Okuneva', 29, 5, 0),
(9, 'Hudson', 'Daphnee', 'Hackett', 33, 3, 0),
(10, 'Stamm', 'Stephania', 'Ratke', 20, 2, 0),
(11, 'Pagac', 'Trever', 'Lang', 32, 5, 0),
(12, 'Mraz', 'Raleigh', 'Altenwerth', 21, 3, 0),
(13, 'Schmeler', 'Alvera', 'Collins', 24, 5, 0),
(14, 'Lesch', 'Palma', 'Johns', 31, 5, 0),
(15, 'Klocko', 'Francis', 'Schumm', 21, 1, 0),
(16, 'Bosco', 'Nelson', 'Volkman', 23, 4, 0),
(17, 'Hahn', 'Lambert', 'Kutch', 27, 2, 0),
(18, 'Schamberger', 'Hilbert', 'Shields', 31, 3, 0),
(19, 'Cole', 'Antonietta', 'Prohaska', 19, 5, 0),
(20, 'Rempel', 'Afton', 'Kuhn', 29, 2, 0),
(21, 'Gleason', 'Darren', 'Dietrich', 20, 3, 0),
(22, 'Okuneva', 'Ludwig', 'Flatley', 33, 5, 0),
(23, 'Effertz', 'Maybell', 'Friesen', 23, 4, 0),
(24, 'Heathcote', 'Margaretta', 'Wehner', 34, 1, 0),
(25, 'Brakus', 'Pete', 'Nolan', 34, 2, 0),
(26, 'Doyle', 'Reyes', 'Schimmel', 32, 4, 0),
(27, 'Ernser', 'Thaddeus', 'Anderson', 28, 4, 0),
(28, 'Brekke', 'Brycen', 'Fay', 35, 5, 0),
(29, 'Ruecker', 'Doris', 'Oberbrunner', 28, 3, 0),
(30, 'Dach', 'Elian', 'Dietrich', 25, 5, 0),
(31, 'Erdman', 'Tyrique', 'Hills', 29, 2, 0),
(32, 'Swift', 'August', 'Greenholt', 27, 1, 0),
(33, 'Greenholt', 'Aylin', 'Schroeder', 35, 4, 0),
(34, 'Herzog', 'Una', 'Toy', 24, 1, 0),
(35, 'Stark', 'Danial', 'Legros', 23, 2, 0),
(36, 'Kuphal', 'Lonnie', 'Rolfson', 24, 5, 0),
(37, 'Wunsch', 'Yoshiko', 'Nader', 32, 5, 0),
(38, 'Reichel', 'Durward', 'Nader', 25, 1, 0),
(39, 'Towne', 'Francisco', 'Friesen', 22, 4, 0),
(40, 'Blick', 'Genesis', 'Ledner', 20, 5, 0),
(41, 'Stehr', 'Erika', 'Lueilwitz', 32, 3, 0),
(42, 'Veum', 'Clarissa', 'Nitzsche', 24, 4, 0),
(43, 'Terry', 'Ernestine', 'Towne', 22, 5, 0),
(44, 'Padberg', 'Bessie', 'Russel', 29, 4, 0),
(45, 'Ryan', 'Camilla', 'Nitzsche', 31, 3, 0),
(46, 'Kling', 'Freddy', 'Senger', 34, 2, 0),
(47, 'Crona', 'Blanche', 'Funk', 18, 5, 0),
(48, 'Roberts', 'Dorthy', 'West', 30, 1, 0),
(49, 'Windler', 'Dedric', 'Senger', 24, 4, 0),
(50, 'Howe', 'Orrin', 'Kuphal', 33, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `worker_role`
--

CREATE TABLE `worker_role` (
  `worker_role_id` int(11) NOT NULL,
  `worker_role_description` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `worker_role`
--

INSERT INTO `worker_role` (`worker_role_id`, `worker_role_description`, `status`) VALUES
(1, 'Waiter', 0),
(2, 'Waiter II', 0),
(3, 'Chef', 0),
(4, 'Chef II', 0),
(5, 'Waiter III', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `event_details`
--
ALTER TABLE `event_details`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `event_fk1_idx` (`reserve_id`);

--
-- Indexes for table `food_details`
--
ALTER TABLE `food_details`
  ADD PRIMARY KEY (`food_id`),
  ADD UNIQUE KEY `food_type_id` (`food_type_id`);

--
-- Indexes for table `food_type`
--
ALTER TABLE `food_type`
  ADD PRIMARY KEY (`food_type_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_equip`
--
ALTER TABLE `multi_equip`
  ADD KEY `multi_equipfk1_idx` (`equip_id`),
  ADD KEY `multi_equipfk2_idx` (`order_id`);

--
-- Indexes for table `multi_package`
--
ALTER TABLE `multi_package`
  ADD KEY `multi_fk1_idx` (`package_id`),
  ADD KEY `multi_fk2_idx` (`reserve_id`);

--
-- Indexes for table `multi_worker`
--
ALTER TABLE `multi_worker`
  ADD KEY `multi_fk1_idx` (`worker_id`),
  ADD KEY `multi_workerfk2_idx` (`reserve_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `order_fk1_idx` (`reserve_id`),
  ADD KEY `order_fk2_idx` (`pack_id`),
  ADD KEY `order_fk3_idx` (`equip_id`);

--
-- Indexes for table `package_details`
--
ALTER TABLE `package_details`
  ADD PRIMARY KEY (`package_id`),
  ADD KEY `package_details_package_type_id_foreign` (`package_type_id`);

--
-- Indexes for table `package_food`
--
ALTER TABLE `package_food`
  ADD PRIMARY KEY (`id`),
  ADD KEY `package_id` (`package_id`),
  ADD KEY `package_food_food_type_id_foreign` (`food_type_id`);

--
-- Indexes for table `package_type`
--
ALTER TABLE `package_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD PRIMARY KEY (`reserv_id`),
  ADD KEY `reserve_fk5_idx` (`cust_id`),
  ADD KEY `reservation_details_event_id_foreign` (`event_id`),
  ADD KEY `reservation_details_package_id_foreign` (`package_id`);

--
-- Indexes for table `reservation_equipments`
--
ALTER TABLE `reservation_equipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_equipments_reserv_id_foreign` (`reserv_id`),
  ADD KEY `reservation_equipments_equipment_id_foreign` (`equipment_id`);

--
-- Indexes for table `reservation_workers`
--
ALTER TABLE `reservation_workers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_workers_reserv_id_foreign` (`reserv_id`),
  ADD KEY `reservation_workers_worker_id_foreign` (`worker_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`),
  ADD KEY `worker_role_id` (`worker_role_id`);

--
-- Indexes for table `worker_role`
--
ALTER TABLE `worker_role`
  ADD PRIMARY KEY (`worker_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `event_details`
--
ALTER TABLE `event_details`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `food_details`
--
ALTER TABLE `food_details`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `food_type`
--
ALTER TABLE `food_type`
  MODIFY `food_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `package_details`
--
ALTER TABLE `package_details`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `package_food`
--
ALTER TABLE `package_food`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `package_type`
--
ALTER TABLE `package_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `reservation_details`
--
ALTER TABLE `reservation_details`
  MODIFY `reserv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `reservation_equipments`
--
ALTER TABLE `reservation_equipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `reservation_workers`
--
ALTER TABLE `reservation_workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `worker_role`
--
ALTER TABLE `worker_role`
  MODIFY `worker_role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_details`
--
ALTER TABLE `event_details`
  ADD CONSTRAINT `event_fk1` FOREIGN KEY (`reserve_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `food_details`
--
ALTER TABLE `food_details`
  ADD CONSTRAINT `food_details_ibfk_1` FOREIGN KEY (`food_type_id`) REFERENCES `food_type` (`food_type_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `multi_equip`
--
ALTER TABLE `multi_equip`
  ADD CONSTRAINT `multi_equipfk1` FOREIGN KEY (`equip_id`) REFERENCES `equipment` (`equipment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `multi_equipfk2` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`order_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `multi_package`
--
ALTER TABLE `multi_package`
  ADD CONSTRAINT `multi_fk1` FOREIGN KEY (`package_id`) REFERENCES `package_details` (`package_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `multi_fk2` FOREIGN KEY (`reserve_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `multi_worker`
--
ALTER TABLE `multi_worker`
  ADD CONSTRAINT `multi_workerfk1` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `multi_workerfk2` FOREIGN KEY (`reserve_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_fk1` FOREIGN KEY (`reserve_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_fk2` FOREIGN KEY (`pack_id`) REFERENCES `package_details` (`package_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `order_fk3` FOREIGN KEY (`equip_id`) REFERENCES `equipment` (`equipment_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `package_details`
--
ALTER TABLE `package_details`
  ADD CONSTRAINT `package_details_package_type_id_foreign` FOREIGN KEY (`package_type_id`) REFERENCES `package_type` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `package_food`
--
ALTER TABLE `package_food`
  ADD CONSTRAINT `package_food_food_type_id_foreign` FOREIGN KEY (`food_type_id`) REFERENCES `food_type` (`food_type_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `package_food_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package_details` (`package_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation_details`
--
ALTER TABLE `reservation_details`
  ADD CONSTRAINT `reservation_details_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `event_details` (`event_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reservation_details_package_id_foreign` FOREIGN KEY (`package_id`) REFERENCES `package_details` (`package_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserve_fk5` FOREIGN KEY (`cust_id`) REFERENCES `customer_info` (`cust_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reservation_equipments`
--
ALTER TABLE `reservation_equipments`
  ADD CONSTRAINT `reservation_equipments_equipment_id_foreign` FOREIGN KEY (`equipment_id`) REFERENCES `equipment` (`equipment_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_equipments_reserv_id_foreign` FOREIGN KEY (`reserv_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation_workers`
--
ALTER TABLE `reservation_workers`
  ADD CONSTRAINT `reservation_workers_reserv_id_foreign` FOREIGN KEY (`reserv_id`) REFERENCES `reservation_details` (`reserv_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservation_workers_worker_id_foreign` FOREIGN KEY (`worker_id`) REFERENCES `worker` (`worker_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `worker`
--
ALTER TABLE `worker`
  ADD CONSTRAINT `worker_ibfk_1` FOREIGN KEY (`worker_role_id`) REFERENCES `worker_role` (`worker_role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
