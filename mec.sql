-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 05:05 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mec`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candidate_id` varchar(4) NOT NULL,
  `citizen_id` int(10) UNSIGNED NOT NULL,
  `party_code` varchar(30) NOT NULL,
  `position_name` varchar(20) NOT NULL,
  `represent` varchar(50) NOT NULL,
  `election_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candidate_id`, `citizen_id`, `party_code`, `position_name`, `represent`, `election_type`) VALUES
('AL14', 112, 'INDEPENDENT', 'MP', 'Blantyre-rural', 'general-election'),
('BR09', 15, 'DPP', 'MP', 'Lilongwe-central', 'general-election'),
('CH02', 8, 'DPP', 'MP', 'Mzuzu City', 'general-election'),
('CH04', 6, 'AFORD', 'President', 'Malawi', 'general-election'),
('CH13', 19, 'DPP', 'MP', 'Blantyre-city-central', 'general-election'),
('CH16', 114, 'PP', 'councilor', 'Naotcha', 'general-election'),
('CH17', 115, 'MCP', 'MP', 'Blantyre-city-east', 'general-election'),
('CH19', 117, 'INDEPENDENT', 'MP', 'Blantyre-city-east', 'general-election'),
('CH55', 55, 'INDEPENDENT', 'Councilor', 'Namalimwe', 'general-election'),
('DA08', 14, 'AFORD', 'MP', 'Lilongwe-central', 'general-election'),
('DY15', 113, 'MCP', 'councilor', 'Naotcha', 'general-election'),
('EM53', 53, 'DPP', 'Councilor', 'Chitsime', 'general-election'),
('ES05', 11, 'DPP', 'MP', 'Lilongwe-central', 'general-election'),
('HE04', 10, 'INDEPENDENT', 'MP', 'Mzuzu City', 'general-election'),
('HE51', 51, 'AFORD', 'Councilor', 'Jombo', 'general-election'),
('HO13', 111, 'PPP', 'MP', 'Blantyre-rural', 'general-election'),
('HO52', 52, 'MCP', 'Councilor', 'Chitsime', 'general-election'),
('JO01', 7, 'PP', 'MP', 'Mzuzu City', 'general-election'),
('JO03', 5, 'PP', 'President', 'Malawi', 'general-election'),
('JO10', 16, 'MCP', 'MP', 'Blantyre-city-central', 'general-election'),
('JO12', 110, 'MCP', 'MP', 'Blantyre-rural', 'general-election'),
('JU18', 116, 'PPP', 'MP', 'Blantyre-city-east', 'general-election'),
('LA02', 4, 'MCP', 'President', 'Malawi', 'general-election'),
('LO06', 12, 'MCP', 'MP', 'Lilongwe-central', 'general-election'),
('MA21', 119, 'PP', 'councilor', 'mbayani', 'general-election'),
('OM11', 17, 'PP', 'MP', 'Blantyre-city-central', 'general-election'),
('OW03', 9, 'MCP', 'MP', 'Mzuzu City', 'general-election'),
('PA50', 50, 'DPP', 'Councilor', 'Jombo', 'general-election'),
('PE01', 3, 'DPP', 'President', 'Malawi', 'general-election'),
('RU07', 13, 'PP', 'MP', 'Lilongwe-central', 'general-election'),
('ST20', 118, 'MCP', 'councilor', 'mbayani', 'general-election'),
('TH12', 18, 'AFORD', 'MP', 'Blantyre-city-central', 'general-election'),
('VA14', 75, 'INDEPENDENT', 'MP', 'Blantyre-city-central', 'general-election'),
('WI54', 54, 'MCP', 'Councilor', 'Namalimwe', 'general-election');

-- --------------------------------------------------------

--
-- Table structure for table `citizen`
--

CREATE TABLE `citizen` (
  `citizen_id` int(10) UNSIGNED NOT NULL,
  `fName` varchar(30) NOT NULL,
  `mName` varchar(30) DEFAULT NULL,
  `sName` varchar(30) NOT NULL,
  `sex` enum('M','F') NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `region` varchar(10) NOT NULL,
  `district` varchar(20) NOT NULL,
  `TA` varchar(20) NOT NULL,
  `constituency` varchar(30) NOT NULL,
  `ward` varchar(20) NOT NULL,
  `village` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `citizen`
--

INSERT INTO `citizen` (`citizen_id`, `fName`, `mName`, `sName`, `sex`, `dob`, `phone`, `picture`, `region`, `district`, `TA`, `constituency`, `ward`, `village`, `email`, `password`) VALUES
(1, 'Lewis', 'j', 'Machilika', 'M', '2001-03-31', '0882652572', 'my_picture', 'central', 'Mchinji', 'zulu', 'Mchinji-central', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(2, 'qina', 'N', 'Jere', 'M', '2099-03-31', '0882652572', 'my_picture', 'central', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(3, 'Peter', 'Wa', 'Munthalika', 'M', '2023-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(4, 'lazarous', 'KA', 'Chakwera', 'M', '2056-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(5, 'Joyce', 'B', 'Banda', 'F', '2096-03-31', '0882652572', 'my_picture', 'central', 'Mchinji', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(6, 'Chakufwa', 'C', 'Chihana', 'M', '2045-03-31', '0882652572', 'my_picture', 'northern', 'Mzuzu', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(7, 'Joseph ', 'Mabvuto ', 'KACHALI', 'M', '2001-03-31', '0882652572', 'my_picture', 'central', '', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(8, 'Chigamuska ', 'Robert Anderson ', 'MKANDAWIRE', 'M', '2099-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(9, 'Owen ', 'S', 'MKANDAWIRE', 'M', '2001-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(10, 'Henry ', 'Mpofu ', 'SHABA', 'M', '2099-03-31', '0882652572', 'my_picture', 'central', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(11, 'Esther ', ' CHALEMERA ', 'MALATA', 'F', '2001-03-31', '0882652572', 'my_picture', 'central', '', 'zulu', 'Lilongwe-central', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(12, 'Lobin  ', 'B', 'LOWE', 'M', '2099-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Lilongwe-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(13, 'Ruth ', ' Chiphana', ' MAPEMBA', 'F', '2001-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(14, 'Daulos ', ' Damion Chasowa ', ' MAUAMBETA', 'M', '2099-03-31', '0882652572', 'my_picture', 'central', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(15, 'Bronzie  ', ' Katsukunya ', '  MTENDERE', 'M', '2099-03-31', '0882652572', 'my_picture', 'central', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(16, 'Joseph ', 'Chikondi ', 'GIBSON', 'M', '2001-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(17, 'Omar ', 'Noordin Fraidy ', 'KAPYEPYE', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(18, 'Themba ', 'F', 'MKANDAWIRE', 'F', '2001-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'lmachilika@gmail.com', 'Lewis1234'),
(19, 'Chipiliro ', 'K', 'MPINGANJIRA', 'M', '2099-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(20, 'ken', 'j', 'manda', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Robert 5', 'kmanda@gmail.com', 'ken1234'),
(21, 'emmanuel', 'N', 'mwinama', 'M', '2099-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(22, 'vincent', 'j', 'mtsuko', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(23, 'dyna', 'N', 'maferano', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(24, 'chifuniro', 'C', 'malota', 'F', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(25, 'lucy', 'N', 'munthali', 'F', '2099-03-31', '0882652572', 'my_picture', 'central', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(26, 'cisco', 'm', 'kapondera', 'M', '2003-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(27, 'george', 'N', 'Mponya', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(28, 'clement', 'k', 'khondowe', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(29, 'chiyanjano', 'N', 'kaliwo', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(30, 'kajawo', 'j', 'francis', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Robert 5', 'kmanda@gmail.com', 'ken1234'),
(31, 'elmas', 'N', 'manda', 'M', '2099-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(32, 'kelvin', 'j', 'kapuya', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(33, 'dyna', 'N', 'maferano', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(34, 'slim', 'C', 'sammy', 'F', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(35, 'diana', 'N', 'kagona', 'F', '2099-03-31', '0882652572', 'my_picture', 'central', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(36, 'mbendera', 'm', 'loveness', 'M', '2003-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(37, 'holliness', 'J', 'chalo', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(38, 'rachael', 'A', 'chalo', 'F', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(39, 'kelvin', 'N', 'chingoma', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(40, 'francis', 'j', 'ganya', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Robert 5', 'kmanda@gmail.com', 'ken1234'),
(41, 'doudi', 'N', 'ibrahim', 'M', '2099-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(42, 'shardreck', 'j', 'leornard', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(43, 'mike', 'N', 'Banda', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(44, 'phinofolo', 'C', 'chitsulo', 'F', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(45, 'dziwanani', 'N', 'chikadza', 'F', '2099-03-31', '0882652572', 'my_picture', 'central', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(46, 'julius', 'm', 'mwandama', 'M', '2003-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(47, 'chisomo', 'J', 'chalo', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(48, 'junior', 'A', 'Machilika', 'F', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(49, 'usher', 'N', 'remond', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(50, 'francis', 'j', 'ganya', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Robert 5', 'kmanda@gmail.com', 'ken1234'),
(51, 'doudi', 'N', 'ibrahim', 'M', '2099-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(52, 'shardreck', 'j', 'leornard', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(53, 'mike', 'N', 'Banda', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(54, 'patric', 'C', 'kasale', 'F', '2003-03-31', '0882652572', 'my_picture', 'northern', 'Mzuzu', 'zulu', 'Mzuzu City', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(55, 'hesten', 'N', 'bulea', 'F', '2099-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu City', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(56, 'howrence', 'm', 'chagunda', 'M', '2003-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(57, 'emmanuel', 'J', 'sibomana', 'F', '2099-03-31', '0882652572', 'my_picture', 'central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(58, 'wilard', 'A', 'chizimbu', 'F', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(59, 'chriss', 'N', 'brown', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(60, '50', 'A', 'cent', 'F', '2003-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'mzuzu Central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(61, 'silento', 'N', 'watchme', 'M', '2099-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu Central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(62, 'rick', 'A', 'ross', 'F', '2003-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu Central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(63, 'caspar', 'N', 'nyovest', 'M', '2099-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu Central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(64, 'chekalonda', 'N', 'joefry', 'M', '2099-03-31', '0882652572', 'my_picture', 'northern', 'Mzimba', 'zulu', 'Mzuzu Central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(65, 'Tripple', 'V', 'lee', 'M', '2003-03-31', '0882652572', 'my_picture', 'Central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(66, 'eminem', 'N', 'wakisa', 'M', '2099-03-31', '0882652572', 'my_picture', 'Central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(67, 'thokozani', 'A', 'kalirani', 'F', '2003-03-31', '0882652572', 'my_picture', 'Central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(68, 'yamikani', 'N', 'chikwawe', 'M', '2099-03-31', '0882652572', 'my_picture', 'Central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(69, 'saint', 'N', 'hyphane', 'M', '2099-03-31', '0882652572', 'my_picture', 'Central', 'Lilongwe', 'zulu', 'Lilongwe-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(70, 'jayne', 'A', 'chizimbu', 'F', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(71, 'chibowa', 'N', 'brown', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(72, 'grace', 'A', 'chizilo', 'F', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(73, 'yusufu', 'N', 'mwinama', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(74, 'seda', 'N', 'wanangwa', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(75, 'van', 'N', 'dizzle', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(76, 'Gwamba', 'lee', 'kelvin', 'M', '2018-07-10', '12345', NULL, 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'namalimwe', 'zoda', 'gwamba@gmail.com', 'gwamba1'),
(77, 'luja', 'k', 'machilika', 'M', '2018-07-19', '1234', NULL, 'central', 'Blantyre', 'zulu', 'Blantyre-city-central', 'namalimwe', 'zoda', 'lmachilika@gmail.com', 'lewis'),
(78, 'luja', 'lee', 'machilika', 'M', '2018-07-11', '123456', NULL, 'southern', 'Blantyre', 'zulu', 'Blantyre-city-central', 'namalimwe', 'zoda', 'lmachilika@gmail.com', 'lewis'),
(79, 'hadasa', 's', 'sara', 'F', '2018-07-12', '4567890', NULL, 'central', 'Lilongwe', 'kaya', 'Lilongwe-central', 'chitsime', 'chitsime', 'hadasa@gmail.com', '1234'),
(80, 'philip', 'A', 'tsogolani', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(81, 'davie', 'N', 'mokoto', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(82, 'salikani', 'A', 'chikadza', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(83, 'ireen', 'N', 'chauma', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(84, 'venedia', 'N', 'perekani', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(85, 'frackson', 'A', 'safesi', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(86, 'yona', 'N', 'muna', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(87, 'semeone', 'A', 'nyemba', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(88, 'madalo', 'N', 'chilambalala', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(89, 'alufeyo', 'N', 'richard', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(90, 'willy', 'A', 'machira', 'F', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(91, 'georgina', 'N', 'roman', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(92, 'kafasi', 'A', 'romani', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(93, 'jermot', 'N', 'jumbe', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(94, 'precios', 'N', 'chaguza', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(95, 'tobiuz', 'A', 'kadzanjala', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(96, 'Peter', 'N', 'kadammanja', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(97, 'fazili', 'A', 'kamponje', 'F', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(98, 'martin', 'N', 'luka', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(99, 'beatric', 'N', 'richard', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(100, 'bulala', 'A', 'wicson', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(101, 'dan', 'N', 'jeofrey', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(102, 'hope', 'A', 'siwande', 'F', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(103, 'daniel', 'N', 'nyirenda', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(104, 'wakuka', 'N', 'richard', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(105, 'tobiuz', 'A', 'vuchi', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(106, 'divester', 'N', 'hara', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(107, 'zaluma', 'A', 'christopher', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(108, 'annie', 'N', 'Nkhata', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(109, 'fuma', 'N', 'mdolo', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(110, 'john', 'A', 'foster', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(111, 'horon', 'N', 'phiri', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(112, 'alfred', 'A', 'chiwaya', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(113, 'dyson', 'N', 'chikadza', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(114, 'binga', 'N', 'charles', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-rural', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(115, 'chadreck', 'A', 'mvula', 'M', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(116, 'julius', 'N', 'mwandira', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(117, 'chisomo', 'A', 'mbedza', 'F', '2003-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'Mzimba', 'pjere@gmail.com', 'precious1234'),
(118, 'steve', 'N', 'sitima', 'M', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234'),
(119, 'manyani', 'N', 'said', 'F', '2099-03-31', '0882652572', 'my_picture', 'southern', 'Blantyre', 'zulu', 'Blantyre-city-east', 'robert', 'robert 5', 'qjere@gmail.com', 'qina1234');

-- --------------------------------------------------------

--
-- Table structure for table `constituency`
--

CREATE TABLE `constituency` (
  `constituency_name` varchar(50) NOT NULL,
  `district_code` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `constituency`
--

INSERT INTO `constituency` (`constituency_name`, `district_code`) VALUES
('Blantyre-city-central', 'BT'),
('Blantyre-city-east', 'BT'),
('Blantyre-rural', 'BT'),
('Lilongwe-central', 'LL'),
('Mzuzu City', 'MZ');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_code` varchar(3) NOT NULL,
  `district_name` varchar(30) DEFAULT NULL,
  `region_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_code`, `district_name`, `region_name`) VALUES
('BLK', 'Balaka', 'southern'),
('BT', 'Blantyre', 'southern'),
('CK', 'Chikhwawa', 'southern'),
('CP', 'Chitipa', 'northern'),
('CZ', 'Chiradzulu', 'southern'),
('DA', 'Dowa', 'central'),
('DZ', 'Dedza', 'central'),
('KA', 'Karonga', 'northern'),
('KK', 'Nkhotakota', 'central'),
('KU', 'Kasungu', 'central'),
('LA', 'Likoma', 'northern'),
('LL', 'Lilongwe', 'central'),
('MC', 'Mchinji', 'central'),
('MH', 'Mangochi', 'southern'),
('MHG', 'Machinga', 'southern'),
('MJ', 'Mulanje', 'southern'),
('MN', 'Mwanza', 'southern'),
('MZ', 'Mzimba', 'northern'),
('NA', 'Nsanje', 'southern'),
('NB', 'Nkhata Bay', 'northern'),
('NE', 'Neno', 'southern'),
('NS', 'Ntchisi', 'central'),
('NU', 'Ntcheu', 'central'),
('PE', 'Phalombe', 'southern'),
('RU', 'Rumphi', 'northern'),
('SA', 'Salima', 'central'),
('TO', 'Thyolo', 'southern'),
('ZA', 'Zomba', 'southern');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE `election` (
  `election_type` varchar(20) NOT NULL,
  `election_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`election_type`, `election_date`) VALUES
('by-election', '2018-03-31'),
('general-election', '2019-03-31'),
('tripitite-election', '2019-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `monitor`
--

CREATE TABLE `monitor` (
  `citizen_id` int(11) NOT NULL,
  `polling_centre_name` varchar(90) NOT NULL,
  `candidate_id` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `monitor`
--

INSERT INTO `monitor` (`citizen_id`, `polling_centre_name`, `candidate_id`) VALUES
(60, 'katoto sch', 'JO01'),
(61, 'katoto sch', 'CH02'),
(62, 'katoto sch', 'OW03'),
(63, 'katoto sch', 'HE04'),
(65, 'Lilongwe Girls sec', 'ES05'),
(66, 'Lilongwe Girls sec', 'LO06'),
(67, 'Lilongwe Girls sec', 'RU07'),
(68, 'Lilongwe Girls sec', 'DA08'),
(69, 'Lilongwe Girls sec', 'BR09'),
(70, 'Namalimwe pri sch', 'VA14'),
(71, 'Namalimwe pri sch', 'OM11'),
(72, 'Namalimwe pri sch', 'TH12'),
(73, 'Namalimwe pri sch', 'CH13'),
(74, 'Namalimwe pri sch', 'JO10'),
(100, 'Naotcha pri sch', 'JO12'),
(101, 'Naotcha pri sch', 'HO13'),
(102, 'Naotcha pri sch', 'AL14'),
(103, 'Naotcha pri sch', 'DY15'),
(104, 'Naotcha pri sch', 'CH16'),
(105, 'Mbayani pri sch', 'CH17'),
(106, 'Mbayani pri sch', 'JU18'),
(107, 'Mbayani pri sch', 'CH19'),
(108, 'Mbayani pri sch', 'ST20'),
(109, 'Mbayani pri sch', 'MA21');

-- --------------------------------------------------------

--
-- Table structure for table `party`
--

CREATE TABLE `party` (
  `party_code` varchar(30) NOT NULL,
  `party_name` varchar(100) DEFAULT NULL,
  `party_colour` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `party`
--

INSERT INTO `party` (`party_code`, `party_name`, `party_colour`) VALUES
('AFORD', 'Alliance For Democrratic', 'white'),
('DPP', 'Democrratic Progressive Party', 'blue'),
('MCP', 'Malawi Congress Party', 'red'),
('PP', 'Peoples Party', 'Orange'),
('UDF', 'United Democrratic Front', 'yellow');

-- --------------------------------------------------------

--
-- Table structure for table `polling_centre`
--

CREATE TABLE `polling_centre` (
  `polling_centre_name` varchar(90) NOT NULL,
  `ward_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polling_centre`
--

INSERT INTO `polling_centre` (`polling_centre_name`, `ward_name`) VALUES
('Lilongwe Girls sec', 'Chitsime'),
('katoto sch', 'Jombo'),
('Mbayani pri sch', 'Mbayani'),
('Namalimwe pri sch', 'Namalimwe'),
('Naotcha pri sch', 'Naotcha');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `position_name` varchar(15) NOT NULL,
  `description` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`position_name`, `description`) VALUES
('Councilor', 'local government'),
('MP', 'parliamentary'),
('President', 'presidential');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_name` varchar(20) NOT NULL,
  `country` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_name`, `country`) VALUES
('central', 'malawi'),
('northern', 'malawi'),
('southern', 'malawi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `citizen_id` int(10) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`citizen_id`, `user_type`) VALUES
(1, 'administrator'),
(2, 'voter');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `candidate_id` varchar(4) NOT NULL,
  `citizen_id` int(11) NOT NULL,
  `vote_date` date DEFAULT NULL,
  `polling_centre_name` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`candidate_id`, `citizen_id`, `vote_date`, `polling_centre_name`) VALUES
('CH02', 20, '2018-07-22', 'katoto sch'),
('CH04', 26, '2018-07-22', 'katoto sch'),
('CH04', 27, '2018-07-22', 'katoto sch'),
('CH04', 28, '2018-07-22', 'katoto sch'),
('CH04', 29, '2018-07-22', 'katoto sch'),
('CH04', 39, '2018-07-22', 'Lilongwe Girls sec'),
('CH04', 99, '2018-07-26', 'mbayani pri sch'),
('CH13', 48, '2018-07-22', 'Namalimwe pri sch'),
('CH13', 49, '2018-07-22', 'Namalimwe pri sch'),
('CH16', 84, '2018-07-26', 'Naotcha pri sch'),
('CH16', 85, '2018-07-26', 'Naotcha pri sch'),
('CH16', 86, '2018-07-26', 'Naotcha pri sch'),
('CH16', 87, '2018-07-26', 'Naotcha pri sch'),
('CH16', 88, '2018-07-26', 'Naotcha pri sch'),
('CH16', 89, '2018-07-26', 'Naotcha pri sch'),
('CH17', 90, '2018-07-26', 'mbayani pri sch'),
('CH17', 91, '2018-07-26', 'mbayani pri sch'),
('CH17', 92, '2018-07-26', 'mbayani pri sch'),
('CH17', 93, '2018-07-26', 'mbayani pri sch'),
('CH17', 94, '2018-07-26', 'mbayani pri sch'),
('CH17', 95, '2018-07-26', 'mbayani pri sch'),
('CH17', 96, '2018-07-26', 'mbayani pri sch'),
('CH17', 97, '2018-07-26', 'mbayani pri sch'),
('CH19', 99, '2018-07-26', 'mbayani pri sch'),
('CH55', 46, '2018-07-22', 'Namalimwe pri sch'),
('CH55', 47, '2018-07-22', 'Namalimwe pri sch'),
('CH55', 48, '2018-07-22', 'Namalimwe pri sch'),
('CH55', 49, '2018-07-22', 'Namalimwe pri sch'),
('DA08', 32, '2018-07-22', 'Lilongwe Girls sec'),
('DY15', 80, '2018-07-26', 'Naotcha pri sch'),
('DY15', 81, '2018-07-26', 'Naotcha pri sch'),
('DY15', 82, '2018-07-26', 'Naotcha pri sch'),
('DY15', 83, '2018-07-26', 'Naotcha pri sch'),
('EM53', 37, '2018-07-22', 'Lilongwe Girls sec'),
('EM53', 38, '2018-07-22', 'Lilongwe Girls sec'),
('EM53', 39, '2018-07-22', 'Lilongwe Girls sec'),
('ES05', 30, '2018-07-22', 'Lilongwe Girls sec'),
('ES05', 31, '2018-07-22', 'Lilongwe Girls sec'),
('HE04', 21, '2018-07-22', 'katoto sch'),
('HE04', 22, '2018-07-22', 'katoto sch'),
('HE04', 23, '2018-07-22', 'katoto sch'),
('HE04', 24, '2018-07-22', 'katoto sch'),
('HE04', 25, '2018-07-22', 'katoto sch'),
('HE04', 26, '2018-07-22', 'katoto sch'),
('HE04', 27, '2018-07-22', 'katoto sch'),
('HE51', 26, '2018-07-22', 'katoto sch'),
('HE51', 27, '2018-07-22', 'katoto sch'),
('HE51', 28, '2018-07-22', 'katoto sch'),
('HE51', 29, '2018-07-22', 'katoto sch'),
('HO13', 82, '2018-07-26', 'Naotcha pri sch'),
('HO13', 83, '2018-07-26', 'Naotcha pri sch'),
('HO13', 84, '2018-07-26', 'Naotcha pri sch'),
('HO13', 85, '2018-07-26', 'Naotcha pri sch'),
('HO13', 86, '2018-07-26', 'Naotcha pri sch'),
('HO13', 87, '2018-07-26', 'Naotcha pri sch'),
('HO13', 88, '2018-07-26', 'Naotcha pri sch'),
('HO52', 30, '2018-07-22', 'Lilongwe Girls sec'),
('HO52', 31, '2018-07-22', 'Lilongwe Girls sec'),
('HO52', 32, '2018-07-22', 'Lilongwe Girls sec'),
('HO52', 33, '2018-07-22', 'Lilongwe Girls sec'),
('HO52', 34, '2018-07-22', 'Lilongwe Girls sec'),
('HO52', 35, '2018-07-22', 'Lilongwe Girls sec'),
('HO52', 36, '2018-07-22', 'Lilongwe Girls sec'),
('JO01', 29, '2018-07-22', 'katoto sch'),
('JO03', 24, '2018-07-22', 'katoto sch'),
('JO03', 25, '2018-07-22', 'katoto sch'),
('JO03', 38, '2018-07-22', 'Lilongwe Girls sec'),
('JO03', 48, '2018-07-22', 'Namalimwe pri sch'),
('JO03', 49, '2018-07-22', 'Namalimwe pri sch'),
('JO03', 88, '2018-07-26', 'Naotcha pri sch'),
('JO03', 98, '2018-07-26', 'mbayani pri sch'),
('JO10', 46, '2018-07-22', 'Namalimwe pri sch'),
('JO10', 47, '2018-07-22', 'Namalimwe pri sch'),
('JO12', 80, '2018-07-26', 'Naotcha pri sch'),
('JO12', 81, '2018-07-26', 'Naotcha pri sch'),
('JU18', 98, '2018-07-26', 'mbayani pri sch'),
('LA02', 23, '2018-07-22', 'katoto sch'),
('LA02', 31, '2018-07-22', 'Lilongwe Girls sec'),
('LA02', 32, '2018-07-22', 'Lilongwe Girls sec'),
('LA02', 33, '2018-07-22', 'Lilongwe Girls sec'),
('LA02', 34, '2018-07-22', 'Lilongwe Girls sec'),
('LA02', 35, '2018-07-22', 'Lilongwe Girls sec'),
('LA02', 36, '2018-07-22', 'Lilongwe Girls sec'),
('LA02', 37, '2018-07-22', 'Lilongwe Girls sec'),
('LA02', 47, '2018-07-22', 'Namalimwe pri sch'),
('LA02', 86, '2018-07-26', 'Naotcha pri sch'),
('LA02', 87, '2018-07-26', 'Naotcha pri sch'),
('LA02', 97, '2018-07-26', 'mbayani pri sch'),
('LO06', 33, '2018-07-22', 'Lilongwe Girls sec'),
('LO06', 34, '2018-07-22', 'Lilongwe Girls sec'),
('LO06', 35, '2018-07-22', 'Lilongwe Girls sec'),
('LO06', 36, '2018-07-22', 'Lilongwe Girls sec'),
('LO06', 37, '2018-07-22', 'Lilongwe Girls sec'),
('LO06', 38, '2018-07-22', 'Lilongwe Girls sec'),
('MA21', 98, '2018-07-26', 'mbayani pri sch'),
('MA21', 99, '2018-07-26', 'mbayani pri sch'),
('OW03', 28, '2018-07-22', 'katoto sch'),
('PA50', 20, '2018-07-22', 'katoto sch'),
('PA50', 21, '2018-07-22', 'katoto sch'),
('PA50', 22, '2018-07-22', 'katoto sch'),
('PA50', 23, '2018-07-22', 'katoto sch'),
('PA50', 24, '2018-07-22', 'katoto sch'),
('PA50', 25, '2018-07-22', 'katoto sch'),
('PE01', 20, '2018-07-22', 'katoto sch'),
('PE01', 21, '2018-07-22', 'katoto sch'),
('PE01', 22, '2018-07-22', 'katoto sch'),
('PE01', 30, '2018-07-22', 'Lilongwe Girls sec'),
('PE01', 40, '2018-07-22', 'Namalimwe pri sch'),
('PE01', 41, '2018-07-22', 'Namalimwe pri sch'),
('PE01', 42, '2018-07-22', 'Namalimwe pri sch'),
('PE01', 43, '2018-07-22', 'Namalimwe pri sch'),
('PE01', 44, '2018-07-22', 'Namalimwe pri sch'),
('PE01', 45, '2018-07-22', 'Namalimwe pri sch'),
('PE01', 46, '2018-07-22', 'Namalimwe pri sch'),
('PE01', 80, '2018-07-26', 'Naotcha pri sch'),
('PE01', 81, '2018-07-26', 'Naotcha pri sch'),
('PE01', 82, '2018-07-26', 'Naotcha pri sch'),
('PE01', 83, '2018-07-26', 'Naotcha pri sch'),
('PE01', 84, '2018-07-26', 'Naotcha pri sch'),
('PE01', 85, '2018-07-26', 'Naotcha pri sch'),
('PE01', 90, '2018-07-26', 'mbayani pri sch'),
('PE01', 91, '2018-07-26', 'mbayani pri sch'),
('PE01', 92, '2018-07-26', 'mbayani pri sch'),
('PE01', 93, '2018-07-26', 'mbayani pri sch'),
('PE01', 94, '2018-07-26', 'mbayani pri sch'),
('PE01', 95, '2018-07-26', 'mbayani pri sch'),
('PE01', 96, '2018-07-26', 'mbayani pri sch'),
('RU07', 39, '2018-07-22', 'Lilongwe Girls sec'),
('ST20', 90, '2018-07-26', 'mbayani pri sch'),
('ST20', 91, '2018-07-26', 'mbayani pri sch'),
('ST20', 92, '2018-07-26', 'mbayani pri sch'),
('ST20', 93, '2018-07-26', 'mbayani pri sch'),
('ST20', 94, '2018-07-26', 'mbayani pri sch'),
('ST20', 95, '2018-07-26', 'mbayani pri sch'),
('ST20', 96, '2018-07-26', 'mbayani pri sch'),
('ST20', 97, '2018-07-26', 'mbayani pri sch'),
('TH12', 40, '2018-07-22', 'Namalimwe pri sch'),
('TH12', 41, '2018-07-22', 'Namalimwe pri sch'),
('TH12', 42, '2018-07-22', 'Namalimwe pri sch'),
('TH12', 43, '2018-07-22', 'Namalimwe pri sch'),
('TH12', 44, '2018-07-22', 'Namalimwe pri sch'),
('TH12', 45, '2018-07-22', 'Namalimwe pri sch'),
('WI54', 40, '2018-07-22', 'Namalimwe pri sch'),
('WI54', 41, '2018-07-22', 'Namalimwe pri sch'),
('WI54', 42, '2018-07-22', 'Namalimwe pri sch'),
('WI54', 43, '2018-07-22', 'Namalimwe pri sch'),
('WI54', 44, '2018-07-22', 'Namalimwe pri sch'),
('WI54', 45, '2018-07-22', 'Namalimwe pri sch');

-- --------------------------------------------------------

--
-- Table structure for table `ward`
--

CREATE TABLE `ward` (
  `ward_name` varchar(30) NOT NULL,
  `constituency_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ward`
--

INSERT INTO `ward` (`ward_name`, `constituency_name`) VALUES
('Namalimwe', 'Blantyre-city-central'),
('Mbayani', 'Blantyre-city-east'),
('Naotcha', 'Blantyre-rural'),
('Chitsime', 'Lilongwe-central'),
('Jombo', 'Mzuzu City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candidate_id`),
  ADD KEY `party_code` (`party_code`),
  ADD KEY `candidate_position` (`position_name`),
  ADD KEY `candidate_citizen` (`citizen_id`),
  ADD KEY `candidate_election` (`election_type`);

--
-- Indexes for table `citizen`
--
ALTER TABLE `citizen`
  ADD PRIMARY KEY (`citizen_id`);

--
-- Indexes for table `constituency`
--
ALTER TABLE `constituency`
  ADD PRIMARY KEY (`constituency_name`),
  ADD KEY `district_code` (`district_code`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_code`),
  ADD KEY `region_name` (`region_name`);

--
-- Indexes for table `election`
--
ALTER TABLE `election`
  ADD PRIMARY KEY (`election_type`);

--
-- Indexes for table `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`citizen_id`),
  ADD KEY `polling_centre_name` (`polling_centre_name`),
  ADD KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `party`
--
ALTER TABLE `party`
  ADD PRIMARY KEY (`party_code`);

--
-- Indexes for table `polling_centre`
--
ALTER TABLE `polling_centre`
  ADD PRIMARY KEY (`polling_centre_name`),
  ADD KEY `ward_name` (`ward_name`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`position_name`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`citizen_id`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`candidate_id`,`citizen_id`),
  ADD KEY `citizen_id` (`citizen_id`),
  ADD KEY `polling_centre_vote` (`polling_centre_name`);

--
-- Indexes for table `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`ward_name`),
  ADD KEY `constituency_name` (`constituency_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `citizen`
--
ALTER TABLE `citizen`
  MODIFY `citizen_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate`
--
ALTER TABLE `candidate`
  ADD CONSTRAINT `candidate_citizen` FOREIGN KEY (`citizen_id`) REFERENCES `citizen` (`citizen_id`),
  ADD CONSTRAINT `candidate_election` FOREIGN KEY (`election_type`) REFERENCES `election` (`election_type`),
  ADD CONSTRAINT `candidate_position` FOREIGN KEY (`position_name`) REFERENCES `position` (`position_name`);

--
-- Constraints for table `constituency`
--
ALTER TABLE `constituency`
  ADD CONSTRAINT `constituency_ibfk_1` FOREIGN KEY (`district_code`) REFERENCES `district` (`district_code`);

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`region_name`) REFERENCES `region` (`region_name`);

--
-- Constraints for table `monitor`
--
ALTER TABLE `monitor`
  ADD CONSTRAINT `monitor_ibfk_1` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`);

--
-- Constraints for table `polling_centre`
--
ALTER TABLE `polling_centre`
  ADD CONSTRAINT `polling_centre_ibfk_1` FOREIGN KEY (`ward_name`) REFERENCES `ward` (`ward_name`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `candidate_vote` FOREIGN KEY (`candidate_id`) REFERENCES `candidate` (`candidate_id`),
  ADD CONSTRAINT `polling_centre_vote` FOREIGN KEY (`polling_centre_name`) REFERENCES `polling_centre` (`polling_centre_name`);

--
-- Constraints for table `ward`
--
ALTER TABLE `ward`
  ADD CONSTRAINT `ward_ibfk_1` FOREIGN KEY (`constituency_name`) REFERENCES `constituency` (`constituency_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
