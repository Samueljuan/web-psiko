-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 01:54 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` bigint(20) NOT NULL,
  `adminName` varchar(128) NOT NULL,
  `adminEmail` varchar(128) NOT NULL,
  `adminUid` varchar(128) NOT NULL,
  `adminPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `adminName`, `adminEmail`, `adminUid`, `adminPwd`) VALUES
(0, 'Juan Samuel', 'JuanSamuel@gmail.com', 'Juan', '$2y$10$CHdeQ6BtS/YTcrtrxCcPMOZvwXukeblCuEmm1zXKrWPm1UGMokXS2'),
(0, 'Juan Samuel Pranoto', '2312@gmail.com', '1972016', '$2y$10$SCYETGKKou/b.6SVIugp5e.LwwNfOBF0X9JFEfwyBN.5jFsaAjzQC'),
(0, 'PranotoSamuelJuan', 'samuel_juan_pranoto@yahoo.com', '456123789', '$2y$10$W0QqbinjDTtnHb/HD6alkOUuCK9NystkUlIkblM9c.bbjaRDikMga'),
(0, 'Pranotosan', 'pranotosan@gmail.com', 'pranotosan', '$2y$10$3SAcD1dyE1ON2IFQpCqWgeLPvmdhpGJUfwlWkRV3mjY4CR4c41EOm'),
(0, 'Pranotosansan', 'sansan@gmail.com', 'sansansan', '$2y$10$6L.ZYIzYpp.e3CWZ6XHxSu5i2N2apjv5IbxBKs5LJEw0LNXRTPJYe'),
(0, 'Pranoit', 'pranot@gmail.com', 'pream', '$2y$10$uZQ8heOKheNNlYEYWR.I5u/g4f0qnFMszqHU7TEJPd4QgJlOlzeom'),
(3374060610990004, 'SAMSAMSAM', 'SAMSAMSAMSAM@gmail.com', 'SAMSAMSAMSAMSAMSAM', '123'),
(1972016, 'Samuel Juannnnnnnnnnn', '3374060610990004', 'asdfasdcewdr', '$2y$10$/kJ0PaPdWNvSrk4r.GRfluyWaMStKPDPbUUqQa3tVanlXRwmfVc4S');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersName` varchar(128) NOT NULL,
  `usersEmail` varchar(128) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(0, 'sadfdcwefdfwqefdr', '1234asd@gmail.com', '123', '$2y$10$ruvRFQ4OZcDZ3Rdbr91rFOr9WN0TSuuuBtCj6bi/nYkub2QAzVeiu'),
(1972016, 'SamuelSamuel', 'SamuelSamuel@gmail.com', 'SAMUELSAMSAM', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
