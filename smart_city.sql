-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 03:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `construction`
--

CREATE TABLE `construction` (
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `project_name` varchar(30) NOT NULL,
  `sector` varchar(20) NOT NULL,
  `project_by` varchar(30) NOT NULL,
  `project_cost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `construction`
--

INSERT INTO `construction` (`state`, `city`, `project_name`, `sector`, `project_by`, `project_cost`) VALUES
('Bihar', 'Bhagalpur', 'ss', 'ss', 'ss', '2.34cr'),
('Bihar', 'Bhagalpur', 'fly-over', 'Goverment', 'S & S co.', '3.43cr'),
('Bihar', 'Bhagalpur', 'road construct', 'Goverment', 'aryan', '1.5cr'),
('Bihar', 'Bhagalpur', 'School Building', 'Goverment', 'S & S co.', '3.40 cr'),
('Bihar', 'Bhagalpur', 'road construct', 'Goverment', 'S & S co.', '3.40 cr'),
('Bihar', 'Bhagalpur', 'road construct', 'sdsdfsd', 'fffv', '2.34cr'),
('Bihar', 'Bhagalpur', 'g$g', 'private', 'S & S co.', '1.8 cr'),
('Bihar', 'Bhagalpur', 'g$g', 'private', 'fffv', '1.8 cr'),
('Bihar', 'Bhagalpur', 'road construct', 'Goverment', 'S & S co.', '3.43cr'),
('Bihar', 'Bhagalpur', 'School Building', 'private', 'aryan', '2.34cr'),
('Bihar', 'Bhagalpur', 'road construct', 'Goverment', 'fffv', '1.5cr'),
('Bihar', 'Bhagalpur', 'road construct', 'Goverment', 'sspl', '1.8 cr'),
('Bihar', 'Bhagalpur', 'School Building', 'Goverment', 'sspl', '3.40 cr');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(30) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`name`, `phone_number`, `email`, `message`) VALUES
('Aryan', 2147483647, 'aryanbgp9798@gmail.com', 'just check'),
('subham singh', 2147483647, 'msd@gmail.com', 'hellow ms'),
('subham singh', 2147483647, 'Aryank21', 'sss'),
('Aryan Kumar', 2147483647, 'activeuser7765@gmail.com', 'klfdksldj');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `image` varchar(30) NOT NULL,
  `description` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`image`, `description`) VALUES
('13.jpg', 'The 12th-century Buddhanath Temple is a Hindu temple dedicated to the god Shiva.'),
('31.jpg', 'Ghanta Ghar Clock Tower is situated in the heart of the city Bhagalpur and is a famous tourist attraction in the city. It is one of the most important ... Ghanta Ghar Clock Tower is one of the major tourist attractions near the city of Bhagalpur. Located at Adampur'),
('38.jpg', 'Vikramshila Setu is a bridge across the Ganges, near Bhagalpur in the Indian state of Bihar named after the ancient Mahavihara of Vikramashila which was established by King Dharmapala'),
('play.png', 'THIS IS A PLAY BUTTON'),
('wallpaperbetter.jpg', 'mountain image'),
('Bikramsila.jpg', 'Enter text here...Vikramashila was established by the Pala emperor Dharmapala (783 to 820 AD) in response to a supposed decline in the quality of scholarship at Nalanda. Atiśa, the renowned pandita and philosopher, is listed as a notable abbot. It was destroyed by the forces of Muhammad bin Bakhtiyar Khalji around 1193.\r\n\r\nVikramashila was one of the largest Buddhist universities, with more than one hundred teachers and about one thousand students. It produced eminent scholars who were often invited by foreign countries to spread Buddhist learning, culture and religion. The most distinguished and eminent among all was Atisha Dipankara, a founder of the Sarma traditions of Tibetan Buddhism. Subjects like philosophy, grammar, metaphysics, Indian logic etc. were taught here, but the most important branch of learning was Buddhist tantra.[9]\r\n\r\n\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `username` varchar(30) NOT NULL,
  `password1` varchar(30) NOT NULL,
  `password2` varchar(30) NOT NULL,
  `emailid` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`username`, `password1`, `password2`, `emailid`) VALUES
('raushan', 'qwer', 'qwer', 'raushan@gmail.com'),
('suman', 'qwer', 'qwer', 'suman@gmail.com'),
('raushan', 'qwer', 'qwer', 'ra'),
('aryank', '1234', '1234', 'aryanbgp9798@gmail.com'),
('Raushan raj', 'qwer', 'qwer', 'raushanraj9670@gmail.com'),
('aryank', '12345', '12345', 'arya@gmail.com'),
('mkmlkm', 'jij', 'jnn', 'jnkjnj'),
('Aryan', '121', '121', 'Aryan@gmail.com'),
('Amit', 'Amittt', 'Amitt', 'Amit@yahoo.com'),
('aryankumar', '121', '121', 'aryanbgp97983@gmail.com'),
('suman suarabh', 'qwer', 'qwer', 'saurabh@gmail.com'),
('kumar', '4321', '4321', 'kumar@gmail.com'),
('Abhinav', '121', '121', 'Abhinav@gmail.com'),
('Abhinav', '121', '121', 'Abhinav2@gmail.com'),
('suman', '123', '123', 'sumansaurabh@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
