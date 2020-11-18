-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 03:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectpark`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_projects`
--

CREATE TABLE `user_projects` (
  `user_name` varchar(10) NOT NULL,
  `project_name` varchar(40) NOT NULL,
  `project_stars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_projects`
--

INSERT INTO `user_projects` (`user_name`, `project_name`, `project_stars`) VALUES
('adarsh', 'nodeapp1', 3),
('adarsh', 'nodeapp2', 0),
('himanshu', 'Natours', 8),
('himanshu', 'Nexter', 3),
('himanshu', 'sortmobapp', 2),
('himanshu', 'speedometer', 0),
('himanshu', 'Trillo', 1),
('kanishk', 'kanpro1', 4),
('kanishk', 'kanpro2', 1),
('kanishk', 'kanpro3', 0),
('tushar', 'tusharpro1', 4),
('tushar', 'tusharpro2', 2),
('tushar', 'tusharpro3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_projects`
--
ALTER TABLE `user_projects`
  ADD PRIMARY KEY (`user_name`,`project_name`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_projects`
--
ALTER TABLE `user_projects`
  ADD CONSTRAINT `FK_user_name` FOREIGN KEY (`user_name`) REFERENCES `user_auth` (`user_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
