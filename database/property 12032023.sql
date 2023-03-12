-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2023 at 09:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE `create_account` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `country` varchar(50) NOT NULL,
  `pictrure` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`id`, `name`, `email`, `password`, `mobile`, `address`, `gender`, `country`, `pictrure`) VALUES
(4, 'sunil Vishwakarma', 'amitvish9999@gmail.com', '8190', 7275308190, 'kolpanday,azamgarh', 'male', 'China', 'img2.png'),
(7, 'suraj vishwakarma', 'suraj@gmail.com', '8191', 9120140055, 'kolpanday,azamgarh', 'male', 'India', 'Capture.PNG'),
(8, 'Om', 'om@gmail.com', '8090', 7890809, 'bnjkghjbjb', 'male', 'india', ''),
(9, 'Ragini Vishwakarma', 'ragini@gmail.com', '1234`', 7275540965, 'kolpanday(Kolgghat),Azamgarh', 'male', 'India', '6cy5bLaei.jpg'),
(10, 'Anjali Vishwakarma', 'anjali@gmail.com', '123', 7275308190, 'kolpanday azamgarh', 'male', 'India', 'God_Shiva_Wallpaper.jpg'),
(11, 'mrityunjai', 'mr8090@gmail.com', '8190', 71727534567, 'kolpghta', 'male', 'India', 'amazing-shiv-shankar-images-3d-shiva-on-pinterest-shiv-shankar-images-3d.jpg'),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', '1234', 9015501897, 'Noida', 'male', 'India', '20171120_175518.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `details_slider`
--

CREATE TABLE `details_slider` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `caption` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Amit', 'amitvish9999@gmail.com', 7275308190, 'Nice'),
(2, 'Joseph Odhiambo', 'odhisjoseph85@gmail.com', 792123444, 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `property_id` int(11) NOT NULL,
  `property_no` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `details` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `Apartment/House` enum('Apartment','House') NOT NULL,
  `location` varchar(50000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`property_id`, `property_no`, `type`, `price`, `details`, `image`, `Apartment/House`, `location`) VALUES
(28, 512, 'Studio Apartment', 15000, 'A single-room apartment with a living space, kitchenette, and bathroom.', 'delux_img1.jpg', 'Apartment', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.988947018052!2d39.718682099999995!3d-4.0226587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18400df6a5f26b2f%3A0x49abf4b49d489d48!2sDK%20REAL%20ESTATES%20LTD%20(Nyali%20Office)!5e0!3m2!1sen!2ske!4v1678604599583!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(30, 504, 'One-Bedroom Apartment', 16000, 'An apartment with one separate bedroom, a living room, a kitchen, and a bathroom.', 'Luxury_img10.jpg', 'Apartment', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15962.0742821129!2d39.70534142753887!3d-0.3630262999908552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182cd1171e2b2f99%3A0x21262f7d46c888df!2sVoi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1678605805985!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(31, 302, 'Two-Bedroom Apartment', 14000, 'An apartment with two separate bedrooms, a living room, a kitchen, and a bathroom.', 'Standard _img16.jpg', 'Apartment', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32302.641685222837!2d35.26315530056173!3d-1.7738046562613747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182aae85b9f34457%3A0x1e7c62105abf59b7!2sNarok%2C%20Kenya!5e0!3m2!1sen!2ske!4v1678605899359!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(32, 312, 'Duplex Apartment', 13000, 'An apartment with two levels, typically with a living space, kitchen, and bathroom on one level, and bedrooms on the other level.', 'Suit_img22.jpg', 'Apartment', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31470.205874555447!2d39.66037682033883!3d-4.054076706259003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182a103d57a6b9c9%3A0x6e27c6b53507ce36!2sMtwapa%2C%20Kenya!5e0!3m2!1sen!2ske!4v1678606001633!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(33, 205, 'Loft Apartment', 120000, 'An apartment with an open floor plan, high ceilings, and large windows.', 'Twin_img24.jpg', 'Apartment', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.185146034721!2d37.97925961481677!3d-0.058668200000012824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4f94fa13f257%3A0xfad7c2d73a59f8a1!2sThe%20Hub%20Karen!5e0!3m2!1sen!2ske!4v1678704721076!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(34, 0, 'Penthouse Apartment', 180000, 'An apartment located on the top floor of a building, often with luxurious amenities such as a private elevator, rooftop terrace, and panoramic views.', 'parking.jpg', 'Apartment', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.7110725960817!2d34.76968021481325!3d-0.5230716999999969!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182d9842731b5685%3A0xf9f60d65afbf15f2!2sMakueni%20County!5e0!3m2!1sen!2ske!4v1678705089555!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(35, 203, 'Bungalow', 182729, 'A bungalow is a small, one-story house that is typically rectangular in shape. It often has a low-pitched roof with wide, overhanging eaves, and may have a front porch or veranda. Bungalows are popular for their simple, functional design and often feature an open floor plan.', 'pexels-eneida-nieves-803975.jpg', 'House', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.853287904648!2d36.147896214813156!3d-0.33577389999998225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f20b00c35d0f9%3A0x88f6c48da5319328!2sOl%20Pejeta%20Conservancy!5e0!3m2!1sen!2ske!4v1678705361643!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(36, 92238, 'Ranch', 490000092, 'A ranch house is a single-story home that is typically long and low to the ground. It often has a simple, rectangular or L-shaped design with a low-pitched roof and wide overhanging eaves. Ranch houses typically have an open floor plan and feature large windows and sliding glass doors that open to the backyard.', 'pexels-olivia-nuño-1001470.jpg', 'House', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3011.155210481075!2d39.68185131534669!3d-4.052017558491566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f2e47c17d1a07%3A0x6aefa5d620319d96!2sMombasa%20Marine%20National%20Park!5e0!3m2!1sen!2ske!4v1678616917683!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(37, 857, 'Colonial', 4000000, 'A colonial-style house is typically a two-story home with a symmetrical façade and a rectangular or square shape. It often has a steeply pitched roof, a central entryway, and evenly spaced windows. Colonial houses often have a formal living room, dining room, and kitchen on the first floor, with bedrooms located on the second floor.', 'pexels-caio-1038259.jpg', 'House', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5035.506932282834!2d39.68207055934611!3d-0.3693993082895861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18294b42af546fa1%3A0x6e394bcf7a2b50aa!2sMau%20Narok!5e0!3m2!1sen!2ske!4v1678616996475!5m2!1sen!2ske\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `property_booking_details`
--

CREATE TABLE `property_booking_details` (
  `id` int(11) NOT NULL,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(20) NOT NULL,
  `contry` varchar(50) NOT NULL,
  `room_type` varchar(100) NOT NULL,
  `check_in_date` date NOT NULL,
  `check_in_time` varchar(6) NOT NULL,
  `check_out_date` date NOT NULL,
  `Occupancy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `property_booking_details`
--

INSERT INTO `property_booking_details` (`id`, `name`, `email`, `phone`, `address`, `city`, `state`, `zip`, `contry`, `room_type`, `check_in_date`, `check_in_time`, `check_out_date`, `Occupancy`) VALUES
(5, 'Sumit', 'sumit@gmail.com', 7398713060, 'kolpanday,azamgarh', 'Azamgarh', 'U.P.', 276001, 'India', 'Deluxe Room', '2019-12-05', '12:00', '2019-01-06', 'single'),
(6, 'Om', 'om@gmail.com', 7890809, 'bnjkghjbjb', 'azamgarh', 'up', 276001, 'India', 'Deluxe Room', '2019-05-08', '08:00', '2019-06-04', 'single'),
(7, 'Ragini Vishwakarma', 'ragini@gmail.com', 727550965, 'Kolpanday,Kolghat,Azamgarh', 'Azamgarh', 'U.P', 276001, 'India', 'Standard Room', '2019-12-06', '08:00', '2019-12-06', 'single'),
(8, 'Anlaji viahwakarma', 'anjali@gmail.com', 7275308190, 'kolpanday azamgarh', 'azamgarh', 'U.P', 276001, 'India', 'Standard Room', '2019-12-06', '08:00', '2019-12-06', 'single'),
(12, 'sanjeev', 'sanjeevtech2@gmail.com', 0, 'dfjdlfj', '', '', 0, '', 'Suite Room', '2019-05-22', '22:57', '2017-10-31', 'single'),
(14, 'Mkadinali', 'sdjsdj@hmail.com', 589342, 'Kamlawa', 'Nakuru', '', 0, '', 'Two-Bedroom Apartment', '0000-00-00', '20:07', '2023-03-22', 'single'),
(15, 'waksjd', 'djvksksodhisjoseph85@gmail.com', 45054095945, 'Mamlakaksks', 'ldfkvkdfvdf', '', 0, '', 'Loft Apartment', '2023-03-21', '22:17', '2023-03-21', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `caption`) VALUES
(3, 'img3.jpg', ''),
(6, 'img2.jpg', ''),
(8, 'img1.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_account`
--
ALTER TABLE `create_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details_slider`
--
ALTER TABLE `details_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `property_booking_details`
--
ALTER TABLE `property_booking_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `create_account`
--
ALTER TABLE `create_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `details_slider`
--
ALTER TABLE `details_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `property_booking_details`
--
ALTER TABLE `property_booking_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
