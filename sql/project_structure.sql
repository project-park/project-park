-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 03:39 AM
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
-- Table structure for table `project_structure`
--

CREATE TABLE `project_structure` (
  `res_name` varchar(70) NOT NULL,
  `child_name` varchar(70) NOT NULL,
  `res_type` enum('file','dir') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_structure`
--

INSERT INTO `project_structure` (`res_name`, `child_name`, `res_type`) VALUES
('adarsh+pro1', 'adarsh+pro1+dir1', 'dir'),
('adarsh+pro1+dir1', 'adarsh+pro1+dir1+dir1.1', 'dir'),
('adarsh+pro1+dir1+dir1.1', 'adarsh+pro1+dir1+dir1.1+file1.1.1.html', 'file'),
('adarsh+pro1+dir1+dir1.1', 'adarsh+pro1+dir1+dir1.1+file1.1.2.html', 'file'),
('adarsh+pro1+dir1', 'adarsh+pro1+dir1+file1.1.html', 'file'),
('adarsh+pro1', 'adarsh+pro1+dir2', 'dir'),
('adarsh+pro1+dir2', 'adarsh+pro1+dir2+dir2.1', 'dir'),
('adarsh+pro1+dir2+dir2.1', 'adarsh+pro1+dir2+dir2.1+file2.1.1.html', 'file'),
('adarsh+pro1+dir2+dir2.1', 'adarsh+pro1+dir2+dir2.1+file2.1.2.html', 'file'),
('adarsh+pro1+dir2', 'adarsh+pro1+dir2+file2.1.html', 'file'),
('adarsh+pro2', 'adarsh+pro2+dir1', 'dir'),
('adarsh+pro2+dir1', 'adarsh+pro2+dir1+dir1.1', 'dir'),
('adarsh+pro2+dir1+dir1.1', 'adarsh+pro2+dir1+dir1.1+file1.1.1.html', 'file'),
('adarsh+pro2+dir1+dir1.1', 'adarsh+pro2+dir1+dir1.1+file1.1.2.html', 'file'),
('adarsh+pro2+dir1', 'adarsh+pro2+dir1+dir1.2', 'dir'),
('adarsh+pro2+dir1+dir1.2', 'adarsh+pro2+dir1+dir1.2+file1.2.1.html', 'file'),
('adarsh+pro2+dir1', 'adarsh+pro2+dir1+file1.1.html', 'file'),
('adarsh+pro2+dir1', 'adarsh+pro2+dir1+file1.2.html', 'file'),
('adarsh+pro2', 'adarsh+pro2+dir2', 'dir'),
('adarsh+pro2+dir2', 'adarsh+pro2+dir2+dir2.1', 'dir'),
('adarsh+pro2+dir2+dir2.1', 'adarsh+pro2+dir2+dir2.1+file2.1.1.html', 'file'),
('adarsh+pro2+dir2+dir2.1', 'adarsh+pro2+dir2+dir2.1+file2.1.2.html', 'file'),
('adarsh+pro2+dir2', 'adarsh+pro2+dir2+file2.1.html', 'file'),
('himanshu+Natours', 'himanshu+Natours+css', 'dir'),
('himanshu+Natours+css', 'himanshu+Natours+css+fonts', 'dir'),
('himanshu+Natours+css+fonts', 'himanshu+Natours+css+fonts+linea-basic-10.ttf', 'file'),
('himanshu+Natours+css', 'himanshu+Natours+css+style.css', 'file'),
('himanshu+Natours', 'himanshu+Natours+img', 'dir'),
('himanshu+Natours+img', 'himanshu+Natours+img+favicon.png', 'file'),
('himanshu+Natours+img', 'himanshu+Natours+img+hero.jpg', 'file'),
('himanshu+Natours+img', 'himanshu+Natours+img+logo-green-1x.png', 'file'),
('himanshu+Natours+img', 'himanshu+Natours+img+logo-white.png', 'file'),
('himanshu+Natours', 'himanshu+Natours+index.html', 'file'),
('himanshu+Natours', 'himanshu+Natours+package.json', 'file'),
('himanshu+Nexter', 'himanshu+Nexter+css', 'dir'),
('himanshu+Nexter+css', 'himanshu+Nexter+css+style.css', 'file'),
('himanshu+Nexter', 'himanshu+Nexter+img', 'dir'),
('himanshu+Nexter+img', 'himanshu+Nexter+img+back.jpg', 'file'),
('himanshu+Nexter+img', 'himanshu+Nexter+img+favicon.png', 'file'),
('himanshu+Nexter+img', 'himanshu+Nexter+img+logo-bbc.png', 'file'),
('himanshu+Nexter+img', 'himanshu+Nexter+img+logo-bi.png', 'file'),
('himanshu+Nexter+img', 'himanshu+Nexter+img+logo-forbes.png', 'file'),
('himanshu+Nexter+img', 'himanshu+Nexter+img+logo-techcrunch.png', 'file'),
('himanshu+Nexter+img', 'himanshu+Nexter+img+logo.png', 'file'),
('himanshu+Nexter+img', 'himanshu+Nexter+img+text.txt', 'file'),
('himanshu+Nexter', 'himanshu+Nexter+index.html', 'file'),
('himanshu+Nexter', 'himanshu+Nexter+package.json', 'file'),
('himanshu+sortmobapp', 'himanshu+sortmobapp+app', 'dir'),
('himanshu+sortmobapp+app', 'himanshu+sortmobapp+app+build.gradle', 'file'),
('himanshu+sortmobapp+app', 'himanshu+sortmobapp+app+src', 'dir'),
('himanshu+sortmobapp+app+src', 'himanshu+sortmobapp+app+src+main', 'dir'),
('himanshu+sortmobapp+app+src+main', 'himanshu+sortmobapp+app+src+main+AndroidMainfest.xml', 'file'),
('himanshu+sortmobapp+app+src+main', 'himanshu+sortmobapp+app+src+main+java', 'dir'),
('himanshu+sortmobapp+app+src+main+java', 'himanshu+sortmobapp+app+src+main+java+com', 'dir'),
('himanshu+sortmobapp+app+src+main+java+com', 'himanshu+sortmobapp+app+src+main+java+com+himanshu', 'dir'),
('himanshu+sortmobapp+app+src+main+java+com+himanshu', 'himanshu+sortmobapp+app+src+main+java+com+himanshu+sortmobapp', 'dir'),
('himanshu+sortmobapp+app+src+main+java+com+himanshu+sortmobapp', 'himanshu+sortmobapp+app+src+main+java+com+himanshu+sortmobapp+MainActi', 'file'),
('himanshu+sortmobapp+app+src+main', 'himanshu+sortmobapp+app+src+main+res', 'dir'),
('himanshu+sortmobapp+app+src+main+res', 'himanshu+sortmobapp+app+src+main+res+layout', 'dir'),
('himanshu+sortmobapp+app+src+main+res+layout', 'himanshu+sortmobapp+app+src+main+res+layout+activity_main.xml', 'file'),
('himanshu+sortmobapp+app+src+main+res', 'himanshu+sortmobapp+app+src+main+res+values', 'dir'),
('himanshu+sortmobapp+app+src+main+res+values', 'himanshu+sortmobapp+app+src+main+res+values+colors.xml', 'file'),
('himanshu+sortmobapp+app+src+main+res+values', 'himanshu+sortmobapp+app+src+main+res+values+strings.xml', 'file'),
('himanshu+sortmobapp+app+src+main+res+values', 'himanshu+sortmobapp+app+src+main+res+values+styles.xml', 'file'),
('himanshu+sortmobapp', 'himanshu+sortmobapp+build.gradle', 'file'),
('himanshu+speedometer', 'himanshu+speedometer+app', 'dir'),
('himanshu+speedometer+app', 'himanshu+speedometer+app+build.gradle', 'file'),
('himanshu+speedometer+app', 'himanshu+speedometer+app+src', 'dir'),
('himanshu+speedometer+app+src', 'himanshu+speedometer+app+src+main', 'dir'),
('himanshu+speedometer+app+src+main', 'himanshu+speedometer+app+src+main+AndroidMainfest.xml', 'file'),
('himanshu+speedometer+app+src+main', 'himanshu+speedometer+app+src+main+java', 'dir'),
('himanshu+speedometer+app+src+main+java', 'himanshu+speedometer+app+src+main+java+com', 'dir'),
('himanshu+speedometer+app+src+main+java+com', 'himanshu+speedometer+app+src+main+java+com+himanshu', 'dir'),
('himanshu+speedometer+app+src+main+java+com+himanshu', 'himanshu+speedometer+app+src+main+java+com+himanshu+speedometer', 'dir'),
('himanshu+speedometer+app+src+main+java+com+himanshu+speedometer', 'himanshu+speedometer+app+src+main+java+com+himanshu+speedometer+MainAc', 'file'),
('himanshu+speedometer+app+src+main', 'himanshu+speedometer+app+src+main+res', 'dir'),
('himanshu+speedometer+app+src+main+res', 'himanshu+speedometer+app+src+main+res+layout', 'dir'),
('himanshu+speedometer+app+src+main+res+layout', 'himanshu+speedometer+app+src+main+res+layout+activity_main.xml', 'file'),
('himanshu+speedometer+app+src+main+res', 'himanshu+speedometer+app+src+main+res+values', 'dir'),
('himanshu+speedometer+app+src+main+res+values', 'himanshu+speedometer+app+src+main+res+values+colors.xml', 'file'),
('himanshu+speedometer+app+src+main+res+values', 'himanshu+speedometer+app+src+main+res+values+strings.xml', 'file'),
('himanshu+speedometer+app+src+main+res+values', 'himanshu+speedometer+app+src+main+res+values+styles.xml', 'file'),
('himanshu+speedometer', 'himanshu+speedometer+build.gradle', 'file'),
('himanshu+Trillo', 'himanshu+Trillo+css', 'dir'),
('himanshu+Trillo+css', 'himanshu+Trillo+css+style.css', 'file'),
('himanshu+Trillo', 'himanshu+Trillo+img', 'dir'),
('himanshu+Trillo+img', 'himanshu+Trillo+img+favicon.png', 'file'),
('himanshu+Trillo+img', 'himanshu+Trillo+img+logo.png', 'file'),
('himanshu+Trillo+img', 'himanshu+Trillo+img+SVG', 'dir'),
('himanshu+Trillo+img+SVG', 'himanshu+Trillo+img+SVG+bookmarks.svg', 'file'),
('himanshu+Trillo+img+SVG', 'himanshu+Trillo+img+SVG+chat.svg', 'file'),
('himanshu+Trillo+img+SVG', 'himanshu+Trillo+img+SVG+home.svg', 'file'),
('himanshu+Trillo+img', 'himanshu+Trillo+img+user-1.jpg', 'file'),
('himanshu+Trillo+img', 'himanshu+Trillo+img+user-2.jpg', 'file'),
('himanshu+Trillo+img', 'himanshu+Trillo+img+user-3.jpg', 'file'),
('himanshu+Trillo+img', 'himanshu+Trillo+img+user-4.jpg', 'file'),
('himanshu+Trillo+img', 'himanshu+Trillo+img+user.jpg', 'file'),
('himanshu+Trillo', 'himanshu+Trillo+index.html', 'file'),
('himanshu+Trillo', 'himanshu+Trillo+package.json', 'file'),
('kanishk+kanpro1', 'kanishk+kanpro1+dir1', 'dir'),
('kanishk+kanpro1+dir1', 'kanishk+kanpro1+dir1+dir1.1', 'dir'),
('kanishk+kanpro1+dir1+dir1.1', 'kanishk+kanpro1+dir1+dir1.1+file1.1.1.html', 'file'),
('kanishk+kanpro1+dir1+dir1.1', 'kanishk+kanpro1+dir1+dir1.1+file1.1.2.html', 'file'),
('kanishk+kanpro1+dir1+dir1.2', 'kanishk+kanpro1+dir1+dir1.1+file1.2.2.html', 'file'),
('kanishk+kanpro1+dir1', 'kanishk+kanpro1+dir1+dir1.2', 'dir'),
('kanishk+kanpro1+dir1+dir1.2', 'kanishk+kanpro1+dir1+dir1.2+file1.2.1.html', 'file'),
('kanishk+kanpro1+dir1', 'kanishk+kanpro1+dir1+file1.1.html', 'file'),
('kanishk+kanpro1', 'kanishk+kanpro1+dir2', 'dir'),
('kanishk+kanpro1+dir2', 'kanishk+kanpro1+dir2+dir2.1', 'dir'),
('kanishk+kanpro1+dir2+dir2.1', 'kanishk+kanpro1+dir2+dir2.1+file2.1.1.html', 'file'),
('kanishk+kanpro1+dir2+dir2.1', 'kanishk+kanpro1+dir2+dir2.1+file2.1.2.html', 'file'),
('kanishk+kanpro1+dir2', 'kanishk+kanpro1+dir2+dir2.2', 'dir'),
('kanishk+kanpro1+dir2+dir2.2', 'kanishk+kanpro1+dir2+dir2.2+file2.2.1.html', 'file'),
('kanishk+kanpro1+dir2+dir2.2', 'kanishk+kanpro1+dir2+dir2.2+file2.2.2.html', 'file'),
('kanishk+kanpro1+dir2', 'kanishk+kanpro1+dir2+file2.1.html', 'file'),
('kanishk+kanpro1', 'kanishk+kanpro1+dir3', 'dir'),
('kanishk+kanpro1+dir3', 'kanishk+kanpro1+dir3+dir3.1', 'dir'),
('kanishk+kanpro1+dir3+dir3.1', 'kanishk+kanpro1+dir3+dir3.1+file3.1.1.html', 'file'),
('kanishk+kanpro1+dir3+dir3.1', 'kanishk+kanpro1+dir3+dir3.1+file3.1.2.html', 'file'),
('kanishk+kanpro1+dir3+dir3.2', 'kanishk+kanpro1+dir3+dir3.1+file3.2.1.html', 'file'),
('kanishk+kanpro1+dir3+dir3.2', 'kanishk+kanpro1+dir3+dir3.1+file3.2.2.html', 'file'),
('kanishk+kanpro1+dir3', 'kanishk+kanpro1+dir3+dir3.2', 'dir'),
('kanishk+kanpro1+dir3', 'kanishk+kanpro1+dir3+file3.1.html', 'file'),
('kanishk+kanpro2', 'kanishk+kanpro2+dir1', 'dir'),
('kanishk+kanpro2+dir1', 'kanishk+kanpro2+dir1+dir1.1', 'dir'),
('kanishk+kanpro2+dir1+dir1.1', 'kanishk+kanpro2+dir1+dir1.1+file1.1.1.html', 'file'),
('kanishk+kanpro2+dir1+dir1.1', 'kanishk+kanpro2+dir1+dir1.1+file1.1.2.html', 'file'),
('kanishk+kanpro2+dir1', 'kanishk+kanpro2+dir1+file1.1.html', 'file'),
('kanishk+kanpro2', 'kanishk+kanpro2+dir2', 'dir'),
('kanishk+kanpro2+dir2', 'kanishk+kanpro2+dir2+dir2.1', 'dir'),
('kanishk+kanpro2+dir2+dir2.1', 'kanishk+kanpro2+dir2+dir2.1+file2.1.1.html', 'file'),
('kanishk+kanpro2+dir2+dir2.1', 'kanishk+kanpro2+dir2+dir2.1+file2.1.2.html', 'file'),
('kanishk+kanpro2+dir2', 'kanishk+kanpro2+dir2+file2.1.html', 'file'),
('kanishk+kanpro3', 'kanishk+kanpro3+dir1', 'dir'),
('kanishk+kanpro3+dir1', 'kanishk+kanpro3+dir1+file1.1.html', 'file'),
('kanishk+kanpro3', 'kanishk+kanpro3+file1.html', 'file'),
('tushar+tusharpro1', 'tushar+tusharpro1+dir1', 'dir'),
('tushar+tusharpro1+dir1', 'tushar+tusharpro1+dir1+file1.html', 'file'),
('tushar+tusharpro1+dir1', 'tushar+tusharpro1+dir1+file2.html', 'file'),
('tushar+tusharpro1+dir1', 'tushar+tusharpro1+dir1+file3.html', 'file'),
('tushar+tusharpro1', 'tushar+tusharpro1+dir2', 'dir'),
('tushar+tusharpro1+dir2', 'tushar+tusharpro1+dir2+file1.html', 'file'),
('tushar+tusharpro1+dir2', 'tushar+tusharpro1+dir2+file2.html', 'file'),
('tushar+tusharpro1+dir2', 'tushar+tusharpro1+dir2+file3.html', 'file'),
('tushar+tusharpro1', 'tushar+tusharpro1+dir3', 'dir'),
('tushar+tusharpro1+dir3', 'tushar+tusharpro1+dir3+file1.html', 'file'),
('tushar+tusharpro1+dir3', 'tushar+tusharpro1+dir3+file2.html', 'file'),
('tushar+tusharpro1+dir3', 'tushar+tusharpro1+dir3+file3.html', 'file'),
('tushar+tusharpro2', 'tushar+tusharpro2+dir1', 'dir'),
('tushar+tusharpro2+dir1', 'tushar+tusharpro2+dir1+file1.html', 'file'),
('tushar+tusharpro2+dir1', 'tushar+tusharpro2+dir1+file2.html', 'file'),
('tushar+tusharpro2+dir1', 'tushar+tusharpro2+dir1+file3.html', 'file'),
('tushar+tusharpro2', 'tushar+tusharpro2+dir2', 'dir'),
('tushar+tusharpro2+dir2', 'tushar+tusharpro2+dir2+file1.html', 'file'),
('tushar+tusharpro2+dir2', 'tushar+tusharpro2+dir2+file2.html', 'file'),
('tushar+tusharpro2+dir2', 'tushar+tusharpro2+dir2+file3.html', 'file'),
('tushar+tusharpro2', 'tushar+tusharpro2+dir3', 'dir'),
('tushar+tusharpro2+dir3', 'tushar+tusharpro2+dir3+file1.html', 'file'),
('tushar+tusharpro2+dir3', 'tushar+tusharpro2+dir3+file2.html', 'file'),
('tushar+tusharpro2+dir3', 'tushar+tusharpro2+dir3+file3.html', 'file'),
('tushar+tusharpro3', 'tushar+tusharpro3+dir1', 'dir'),
('tushar+tusharpro3+dir1', 'tushar+tusharpro3+dir1+file1.html', 'file'),
('tushar+tusharpro3+dir1', 'tushar+tusharpro3+dir1+file2.html', 'file'),
('tushar+tusharpro3+dir1', 'tushar+tusharpro3+dir1+file3.html', 'file'),
('tushar+tusharpro3', 'tushar+tusharpro3+dir2', 'dir'),
('tushar+tusharpro3+dir2', 'tushar+tusharpro3+dir2+file1.html', 'file'),
('tushar+tusharpro3+dir2', 'tushar+tusharpro3+dir2+file2.html', 'file'),
('tushar+tusharpro3+dir2', 'tushar+tusharpro3+dir2+file3.html', 'file'),
('tushar+tusharpro3', 'tushar+tusharpro3+dir3', 'dir'),
('tushar+tusharpro3+dir3', 'tushar+tusharpro3+dir3+file1.html', 'file'),
('tushar+tusharpro3+dir3', 'tushar+tusharpro3+dir3+file2.html', 'file'),
('tushar+tusharpro3+dir3', 'tushar+tusharpro3+dir3+file3.html', 'file');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project_structure`
--
ALTER TABLE `project_structure`
  ADD PRIMARY KEY (`child_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
