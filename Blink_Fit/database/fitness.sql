-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2018 at 12:43 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fitness`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE IF NOT EXISTS `admin_log` (
  `aid` int(10) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `gender` enum('M','F') DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` text,
  `username` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`aid`, `firstname`, `lastname`, `gender`, `email`, `password`, `image`, `address`, `username`) VALUES
(1, 'Divyang', 'Sodha', 'M', 'divyang.135300693024@gmail.com', '123', 'upload/t3.jpg', 'vadodara', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `equipments`
--

CREATE TABLE IF NOT EXISTS `equipments` (
  `eqpid` int(11) NOT NULL AUTO_INCREMENT,
  `eqp_name` varchar(50) NOT NULL,
  `eqp_img` varchar(255) NOT NULL,
  `eqp_dt` text NOT NULL,
  PRIMARY KEY (`eqpid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

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

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedid` int(11) NOT NULL AUTO_INCREMENT,
  `feed_date` date NOT NULL,
  `fedd_dt` text NOT NULL,
  PRIMARY KEY (`feedid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedid`, `feed_date`, `fedd_dt`) VALUES
(1, '2018-02-21', 'This is a nice Gym'),
(2, '2018-02-27', 'Before we buy a new gadget or try a new restaurant'),
(3, '2018-02-27', 'Before we buy a new gadget or try a new restaurant.');

-- --------------------------------------------------------

--
-- Table structure for table `fit_videos`
--

CREATE TABLE IF NOT EXISTS `fit_videos` (
  `video_id` int(11) NOT NULL AUTO_INCREMENT,
  `video_name` varchar(50) NOT NULL,
  `video_type` enum('paid','free') NOT NULL,
  `video_path` varchar(255) NOT NULL,
  `video_tag` varchar(255) NOT NULL,
  PRIMARY KEY (`video_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fit_videos`
--

INSERT INTO `fit_videos` (`video_id`, `video_name`, `video_type`, `video_path`, `video_tag`) VALUES
(2, 'Biceps first', 'paid', 'upload/videos/biceps1.mp4', 'bicep'),
(3, 'Biceps Second', 'free', 'upload/videos/biceps2.mp4', 'bicep'),
(4, 'Back Workout', 'paid', 'upload/videos/Back Workout.mp4', 'Back Workout'),
(5, 'Dumbbell Biceps Curl', 'free', 'upload/videos/Dumbbell Biceps Curl.mp4', 'Dumbbell Biceps Curl'),
(6, 'Guru Mann Triceps Workouts', 'free', 'upload/videos/triceps.mp4', 'tricep');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `memid` int(11) NOT NULL AUTO_INCREMENT,
  `payid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passsword` varchar(50) NOT NULL,
  `is_paid` enum('paid','not_paid') NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  PRIMARY KEY (`memid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memid`, `payid`, `name`, `contact_no`, `email`, `passsword`, `is_paid`, `from_date`, `to_date`) VALUES
(1, 3, 'Divyang Sodha', '9725056044', 'divyangsodha.2330@gmail.com', '123', 'paid', '2018-02-28', '2019-02-28'),
(2, 6, 'Kirtiraj', '7785969856', 'kirti@gmail.com', '123', 'paid', '2017-01-27', '2018-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `payid` int(11) NOT NULL AUTO_INCREMENT COMMENT ' ',
  `pac_name` varchar(50) NOT NULL,
  `pac_price` varchar(55) NOT NULL,
  `pac_dt` varchar(50) NOT NULL,
  `pay_duration` varchar(50) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`payid`, `pac_name`, `pac_price`, `pac_dt`, `pay_duration`) VALUES
(1, 'Iconic', '6500', 'use all equipment and enjoy our services.', '6'),
(2, 'Iconic', '6400', 'use all equipment and enjoy services.', '12'),
(3, 'Platinum', '6200', 'Use all equipment and enjoy services.', '6'),
(4, 'Platinum', '6000', 'Use all equipment and enjoy services.', '12'),
(5, 'Premier', '4800', 'use all equipment and enjoy services. ', '6'),
(6, 'Premier', '4600', 'use all equipment and enjoy services. ', '12');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `memid` int(11) NOT NULL,
  `pay_date` date NOT NULL,
  `amount` varchar(50) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payid`, `memid`, `pay_date`, `amount`) VALUES
(1, 1, '2018-02-28', '6200'),
(2, 2, '2018-02-28', '4600');

-- --------------------------------------------------------

--
-- Table structure for table `suppliments`
--

CREATE TABLE IF NOT EXISTS `suppliments` (
  `supid` int(11) NOT NULL AUTO_INCREMENT,
  `sup_name` varchar(50) NOT NULL,
  `sup_img` varchar(255) NOT NULL,
  `sup_dt` text NOT NULL,
  PRIMARY KEY (`supid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `suppliments`
--

INSERT INTO `suppliments` (`supid`, `sup_name`, `sup_img`, `sup_dt`) VALUES
(1, 'MV Glutamine', 'upload/supplements/g-500x500.jpg', 'Approx Price: Rs 1999 /Bottle(s) Mvs Glutamine is the most common amino acid found in muscles -over 61% of skeletal muscle is Glutamine. Glutamine consists of 19% nitrogen, making it the primary transporter of nitrogen into your muscle cells. During intense training, Glutamine levels are greatly depleted in your body, which decreases strength, stamina and recovery. It could take up to 6 days for Glutamine levels to return to normal -and Glutamine plays a key role in protein synthesis. Studies have shown that Glutamine supplementation can minimize breakdown of muscle and improve protein metabolism. Glutamine plays key roles in protein metabolism, cell volumizing, and anti-catabolism. Glutamine also increases your ability to secrete, which helps metabolize body fat and support new muscle growth.'),
(3, 'MV Reagent ( Preworkout)', 'upload/supplements/mv-reagent-preworkout-500x500.jpg', 'REAGENT Pre-workout is designed to support increased energy, focus, and endurance in the gym. When you feel like hitting the hay instead of the gym, grab REAGENT, a high quality pre-workout to get moving and destroy your workout.\r\nAn advanced pre-workout supplement with the power to ignite your mind, muscles, and workout regiment, workout after workout after workout. Provides the energy you need to help get that extra rep, complete the last set, and promote personal bests.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
