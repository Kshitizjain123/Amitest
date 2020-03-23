-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2020 at 10:37 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `major_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('root', 'root'),
('Kshitiz', 'kshitiz');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_path` varchar(12000) NOT NULL,
  `username` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_path`, `username`) VALUES
('assets/img/7780.png', 'Kshitiz'),
('assets/img/8740.png', 'Lakshay'),
('assets/img/9820.png', 'Udit');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `email` varchar(30) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL,
  `sub_name` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`email`, `test_id`, `test_date`, `score`, `sub_name`) VALUES
('Kshitiz', 34, '0000-00-00', 3, 'English'),
('Kshitiz', 37, '0000-00-00', 1, 'Basic'),
('Kshitiz', 34, '0000-00-00', 2, 'English'),
('Kshitiz', 34, '0000-00-00', 3, 'English'),
('Kshitiz', 37, '0000-00-00', 1, 'Basic'),
('Kshitiz', 34, '0000-00-00', 3, 'English'),
('Kshitiz', 39, '0000-00-00', 2, 'Animation');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(250) DEFAULT NULL,
  `sem` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`, `sem`) VALUES
(4, 'Environmental Studies [Core Courses]', 1),
(5, 'IT Fundamentals and C Programming', 1),
(6, 'English Language Usage Essentials', 1),
(7, 'Understanding Self for Effectiveness [Behavioural Science]', 1),
(17, 'Introduction to Mobile Computing [Specialisation Elective Courses]', 6),
(18, 'Fundamentals of Network Security [Specialisation Elective Courses]', 6),
(19, 'Digital Electronics [Core Courses]', 1),
(20, 'Animation and Gaming [Specialisation Elective Courses]', 6),
(21, 'Stress and Coping Strategies [Behavioural Science]', 6),
(22, 'Software Testing Techniques [Specialisation Elective Courses]', 6),
(23, 'Fundamentals of E-commerce [Specialisation Elective Courses]', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `useranswer`
--

CREATE TABLE `useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useranswer`
--

INSERT INTO `useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who is me ?', '4', '3', '2', '1', 2, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who is me ?', '4', '3', '2', '1', 2, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 3),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who is me ?', '4', '3', '2', '1', 2, 3),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 3),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who is me ?', '4', '3', '2', '1', 2, 3),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who is me ?', '4', '3', '2', '1', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who is me ?', '4', '3', '2', '1', 2, 3),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('10gsdkniag3m6uqhif5mrrfqbd', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('lcpl8n456v2l9itqofaplrdbat', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('lcpl8n456v2l9itqofaplrdbat', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 3),
('lcpl8n456v2l9itqofaplrdbat', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('lcpl8n456v2l9itqofaplrdbat', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('lcpl8n456v2l9itqofaplrdbat', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('lcpl8n456v2l9itqofaplrdbat', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 3),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 3),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 3),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 3),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 3),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('vc7iotklqinf6br80547v1lchs', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('vc7iotklqinf6br80547v1lchs', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('vc7iotklqinf6br80547v1lchs', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 3),
('207h08tu30jlo0kgb6uh460ano', 37, 'What is my name ?', 'Kshitiz', 'Jay', 'Udit', 'Shaurya', 1, 1),
('207h08tu30jlo0kgb6uh460ano', 37, 'Who is the Prime Minister of India ?', 'Narendra Modi', 'Indira Gandhi', 'Pratibha Patel', 'Arvind Kejriwal', 1, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 1),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 1),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('207h08tu30jlo0kgb6uh460ano', 37, 'What is my name ?', 'Kshitiz', 'Jay', 'Udit', 'Shaurya', 1, 1),
('207h08tu30jlo0kgb6uh460ano', 37, 'Who is the Prime Minister of India ?', 'Narendra Modi', 'Indira Gandhi', 'Pratibha Patel', 'Arvind Kejriwal', 1, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is English ?', 'True', 'False', 'None', 'Both', 2, 2),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who is me ?', '4', '3', '2', '1', 2, 4),
('207h08tu30jlo0kgb6uh460ano', 34, 'Who made taj mahal ?', 'shahjahan', 'mumtaaz', 'none', 'both', 1, 1),
('207h08tu30jlo0kgb6uh460ano', 34, 'What is capital of India ?', 'Delhi', 'Rajasthan', 'West Bengal', 'Himachal', 1, 3),
('207h08tu30jlo0kgb6uh460ano', 34, 'Union Territory of india ?', 'Nepal', 'Bhutan', 'China', 'Ladakh', 4, 4),
('8k20koo72vovnu9n3htri0hsev', 39, 'What is Animation ?', 'Animation is a method in which pictures are manipu', 'Gaming may refer to: Games and sports. ', 'None', 'A and B both', 0, 1),
('8k20koo72vovnu9n3htri0hsev', 39, 'What is Animation ?', 'Animation is a method in which pictures are manipu', 'Gaming may refer to: Games and sports. ', 'None', 'A and B both', 0, 1),
('8k20koo72vovnu9n3htri0hsev', 39, 'What is Animation ?', 'Animation is a method in which pictures are manipu', 'Gaming may refer to: Games and sports. ', 'None', 'A and B both', 1, 1),
('8k20koo72vovnu9n3htri0hsev', 39, 'Who is me ?', 'Kshitiz', 'Udit', 'Shaurya', 'Lakshay', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `F_Name` varchar(10) NOT NULL,
  `L_Name` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Password` varchar(2000) NOT NULL,
  `Course` varchar(15) NOT NULL,
  `Sem` int(2) NOT NULL,
  `Last_Activity` datetime NOT NULL,
  `Color` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`F_Name`, `L_Name`, `Email`, `Phone`, `Password`, `Course`, `Sem`, `Last_Activity`, `Color`) VALUES
('jay', 'jain', 'jaycse@gmail.com', '8456789076', 'e2fc714c4727ee9395f324cd2e7f331f', 'MCA', 5, '2020-02-28 02:03:49', '\0\0\0'),
('Kshitiz', 'Jain', 'kshitizjainjaipur@gmail.com', '8114450329', '827ccb0eea8a706c4c34a16891f84e7b', 'BCA', 6, '2020-03-21 13:08:43', '\0\0\0'),
('Lakshay', 'Nowal', 'lakshaynowal@gmail.com', '9876543210', '827ccb0eea8a706c4c34a16891f84e7b', 'BCA(Eve)', 1, '2020-03-17 23:13:18', '\0\0\0'),
('Udit', 'Rungta', 'uditrungta@gmail.com', '9414837510', '827ccb0eea8a706c4c34a16891f84e7b', 'BCA(Eve)', 5, '2020-03-17 23:13:28', '\0\0\0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
