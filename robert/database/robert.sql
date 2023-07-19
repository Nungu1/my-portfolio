-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2023 at 08:15 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robert`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `address` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`address`, `phone`, `email`) VALUES
(' <p>bremat opposite summit,<br>Biwi,Lilongwe<br>Area 13</p>\r\n                </div>', ' <h3>Phone</h3>\r\n            <p>+265881241649</p>', ' <p>bobnungu@gmail.com</p>\r\n                </div>');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `aboutme` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`aboutme`) VALUES
(' <h3>ICT TECH | NET ADMIN | GRAPHIC DESIGNER</h3>\r\n        <P> Robert Nungu is an Ict technician who is currently living and working in lilongwe. He acquired skills through self-teaching, internships and studies like comptia A+ & N+.His area of expertise includes responding to bidding documents, computer hardware and software repairing, Refurbishing printers and computers plus graphic designing. Secretly he wishes to be a back-end developer one day he is going be, until then just trying to make this world a better place one smile at a time.</P>\r\n        ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
