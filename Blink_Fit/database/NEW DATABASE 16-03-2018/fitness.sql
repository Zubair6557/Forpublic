-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2018 at 03:15 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `aid` int(10) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` text,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`aid`, `firstname`, `lastname`, `gender`, `email`, `password`, `image`, `address`, `username`) VALUES
(1, 'Divyang', 'Sodha', 'M', 'divyang.135300693024@gmail.com', '123', 'upload/t3.jpg', 'vadodara', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE `equipments` (
  `eqpid` int(11) NOT NULL,
  `eqp_name` varchar(50) NOT NULL,
  `eqp_img` varchar(255) NOT NULL,
  `eqp_dt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipments`
--

INSERT INTO `equipments` (`eqpid`, `eqp_name`, `eqp_img`, `eqp_dt`) VALUES
(1, 'DUMBBELLS1', 'upload/equipments/Dumbbell-Hantel-PNG-Image-47075.png', '1Description: Pretty much the go-to gym equipment most people first think of when they think of bodybuilding. Varying in weight, but the same concept, a handle bar with weights on opposite ends. A must have free weight for any fitness regiment. There are even adjustable dumbbells with differing weights all in one piece.\r\n\r\nPro Tip:  Dumbbells have a lot going for them, mainly, they are inexpensive when compared to other equipment. But if used right, they can offer just as much, if not more, than some of their more lucrative gym mates.\r\n\r\nWhen working out with dumbbells, try not to lock your elbows at the movements end, and do not force the last few repetitions if you do not have a friend or gym buddy to spot you.\r\n\r\nDumbbells cause you to work other muscles as you are targeting a primary few; due to your body keeping balance and all the stabilizing muscles coming into play.\r\n\r\nMuscles Used: You can target a good amount of  muscles with dumbbells. Below is an example of a seated dumbbell shoulder press and a bicep curl. These exercises work the biceps, shoulders and triceps. Some of the muscles you can work with dumbbells are: chest, shoulders, triceps, traps, biceps, lats, glutes, quads, hammies, and calves.'),
(2, ' LAT PULLDOWN MACHINE', 'upload/equipments/p_13130_1.png', 'Description: Used for strengthening your latissimus dorsi muscle, or lats as they are known. Pull downwards toward you, keeping your elbows and back straight. Google a picture of Bruce Lee and youâ€™ll see the lats youâ€™re capable of attaining with this machine.\r\n\r\nPro Tip: As counter intuitive as it may sound to some people, do not lower the bar to the belly; if you are doing this, it means you are not using enough weight.\r\n\r\nAvoid bending your torso to get help from your chest and ab muscles, and complete all movements when exercising with a lat pull-down machine. Your grip shouldnâ€™t be too wide and it should be even.\r\n\r\nMuscles Used: Upper and lower back. Biceps, and lats in particular (as is evident by the name of this exercise machine).'),
(3, ' LEG EXTENSION MACHINE', 'upload/equipments/v43q60.png', 'Description: Lifting the weights up with your quads, holding steady for a second or two once you fully extend at the top. Leg extension machines are the perfect gym equipment to use when you are rehabilitating from an injury or just trying to strength train your quads.\r\n\r\nPro Tip: Avoid twisting hips and knees as you move the weight, especially when lowering the weight to the machines limit. Avoid fast movements just to gain momentum, remember that form is superior to everything else in bodybuilding.\r\n\r\nFlexing and/or extending the foot does not change the work done by the quadriceps\r\n\r\nMuscles Used: Quadriceps, gluteal deltoid,');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedid` int(11) NOT NULL,
  `feed_date` date NOT NULL,
  `fedd_dt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedid`, `feed_date`, `fedd_dt`) VALUES
(1, '2018-02-21', 'This is a nice Gym'),
(2, '2018-02-27', 'Before we buy a new gadget or try a new restaurant'),
(3, '2018-02-27', 'Before we buy a new gadget or try a new restaurant.'),
(4, '2018-03-28', 'dssfdsf'),
(5, '2018-04-02', 'hello'),
(6, '2018-04-02', 'cnskdnsdnccccccccccccccccccc');

-- --------------------------------------------------------

--
-- Table structure for table `fit_videos`
--

CREATE TABLE `fit_videos` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(50) NOT NULL,
  `video_type` enum('paid','free') NOT NULL,
  `video_path` varchar(255) NOT NULL,
  `video_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fit_videos`
--

INSERT INTO `fit_videos` (`video_id`, `video_name`, `video_type`, `video_path`, `video_tag`) VALUES
(5, 'Dumbbell Biceps Curl', 'free', 'upload/videos/Dumbbell Biceps Curl.mp4', 'Dumbbell Biceps Curl'),
(6, 'Guru Mann Triceps Workouts', 'free', 'upload/videos/triceps.mp4', 'tricep'),
(7, 'Barbell Full Squat - Exercise Video', 'paid', 'upload/videos/Barbell Full Squat - Exercise Videos & Guides.MP4', 'Barbell Full Squat - Exercise Videos '),
(8, 'feeeki', 'free', 'upload/videos/EZ-Bar Curl - Exercise Videos & Guides - Bodybuilding.com.MP4', 'ddbjdbjd');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memid` int(11) NOT NULL,
  `payid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passsword` varchar(50) NOT NULL,
  `is_paid` enum('paid','not_paid') NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memid`, `payid`, `name`, `contact_no`, `email`, `passsword`, `is_paid`, `from_date`, `to_date`) VALUES
(1, 3, 'zubair memon', '9099461087', 'memonz655786@gmail.com', '123', 'paid', '2018-02-28', '2019-02-28'),
(2, 2, 'Taher Kuwajerwala', '9825852530', 'tah4396@gmail.com', '123', 'paid', '2018-04-17', '2018-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `payid` int(11) NOT NULL COMMENT ' ',
  `pac_name` varchar(50) NOT NULL,
  `pac_price` varchar(55) NOT NULL,
  `pac_dt` varchar(50) NOT NULL,
  `pay_duration` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`payid`, `pac_name`, `pac_price`, `pac_dt`, `pay_duration`) VALUES
(1, 'Iconic', '7000', 'use all equipment and enjoy our services.', '6'),
(2, 'Gold', '8000', 'use all equipment and enjoy services.', '6'),
(3, 'Bronze', '14000', 'Use all equipment and enjoy services.', '12'),
(4, 'Platinum', '24000', 'Use all equipment and enjoy services.', '18');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payid` int(11) NOT NULL,
  `memid` int(11) NOT NULL,
  `pay_date` date NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `memid`, `pay_date`, `amount`) VALUES
(1, 1, '2018-02-28', '6200'),
(2, 2, '2018-02-28', '4600');

-- --------------------------------------------------------

--
-- Table structure for table `paymentsuppliments`
--

CREATE TABLE `paymentsuppliments` (
  `paymentid` int(11) NOT NULL,
  `memid` int(11) NOT NULL,
  `supid` int(11) NOT NULL,
  `amount` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentsuppliments`
--

INSERT INTO `paymentsuppliments` (`paymentid`, `memid`, `supid`, `amount`) VALUES
(1, 1, 1, 1999.00),
(2, 1, 1, 1999.00),
(3, 2, 5, 4200.00),
(4, 2, 5, 4200.00);

-- --------------------------------------------------------

--
-- Table structure for table `suppliments`
--

CREATE TABLE `suppliments` (
  `supid` int(11) NOT NULL,
  `sup_name` varchar(50) NOT NULL,
  `sup_img` varchar(255) NOT NULL,
  `sup_dt` text NOT NULL,
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliments`
--

INSERT INTO `suppliments` (`supid`, `sup_name`, `sup_img`, `sup_dt`, `price`) VALUES
(5, 'musclepharm-combat-100-whey', 'upload/supplements/musclepharm-combat-100-whey.jpg', '24g of Whey Protein with Amino Acids for Muscle Recovery and Growth*\r\nMuscle Building  Protein Powder*', 4200.00),
(6, 'muscletech-100-whey-protein', 'upload/supplements/muscletech-100-premium-whey-protein-plus.jpg', 'Builds lean muscle better than regular whey\r\nScientifically superior formula\r\nAccelerates muscle performance and recovery\r\nDelivers ultra high quality whey protein and branched chain amino acids to help support recovery and lean muscle growth\r\nActive adults can take one scoop to get 20g of protein per serving, while serious athletes can take two scoops to get 40g of protein\r\nPremium whey protein won a gold medal for superior taste in an independent test against other protein powders by a panel of experts at the American masters of taste', 3500.00),
(7, 'muscletech-masstech', 'upload/supplements/muscletech-masstech.jpg', 'New mass-tech is an advanced muscle mass gainer designed for any individual that has a tough time adding size, is in their bulking phase and/or wants to break through their strength plateaus. Power packed with 80 grams of protein and 1170 calories when mixed with 2 cups of skim milk, this potently superior formula is enhacned with proven anabolic drivers for rapid mass gain and strength.', 3700.00),
(8, 'muscletech-nitro-tech-', 'upload/supplements/muscletech-nitro-tech-.jpg', 'Nitro tech 100 percent whey gold a pure protein formula featuring whey peptides and isolate!. Rapid absorbing hydrolysed whey peptides to support an insulinogenic response and improved nutrient delivery. Features the most premium whey isolates and concentrate for a superior amino acid profile. Superior cold microfiltration process yields a high biological value undenatured whey protein. 5. 5 G of anabolic BCAAs and a class leading 4 g of glutamine and precursor for better muscle protein synthesis and recovery. Delivers superior absorption, digestibility and mix ability.', 5999.00),
(9, 'muscletech-nitro-tech-casein-gold', 'upload/supplements/muscletech-nitro-tech-casein-gold.jpg', 'Prolonged release premium casein protein for decades, Muscletech has been a leading protein brand. Built on a foundation of human research and cutting edge science, itâ€™s earned the trust of countless consumers worldwide. Now the same research and development team has pioneered a new slow release protein formula based on superior protein sources for longer absorption and better taste.', 5850.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_log`
--
ALTER TABLE `admin_log`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `equipments`
--
ALTER TABLE `equipments`
  ADD PRIMARY KEY (`eqpid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedid`);

--
-- Indexes for table `fit_videos`
--
ALTER TABLE `fit_videos`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memid`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payid`);

--
-- Indexes for table `paymentsuppliments`
--
ALTER TABLE `paymentsuppliments`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `suppliments`
--
ALTER TABLE `suppliments`
  ADD PRIMARY KEY (`supid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_log`
--
ALTER TABLE `admin_log`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `equipments`
--
ALTER TABLE `equipments`
  MODIFY `eqpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fit_videos`
--
ALTER TABLE `fit_videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ', AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `paymentsuppliments`
--
ALTER TABLE `paymentsuppliments`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `suppliments`
--
ALTER TABLE `suppliments`
  MODIFY `supid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
