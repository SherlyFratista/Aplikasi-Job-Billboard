-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2019 at 01:20 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobbillboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(200) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `poster` varchar(200) DEFAULT NULL,
  `kategori` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `deadline`, `description`, `poster`, `kategori`) VALUES
(1, 'Projek Aplikasi Industri menggunakan Java SE', NULL, NULL, 'images/project1.png', 'Project1'),
(2, 'Projek Web Dashboard Instagram menggunakan Laravel', NULL, NULL, 'images/project2.png', 'Project2'),
(3, 'Pendaftaran Asisten Mobile Application Development 2019', NULL, NULL, 'images/asprak1.jpg', 'Asisten1'),
(4, 'Lowongan Tutor Mata Kuliah Kalkulus 1B', NULL, NULL, 'images/tutor1.jpg', 'Tutor'),
(5, 'Projek pembuatan fitur cart menggunakan CRUD PHP', NULL, NULL, 'images/project3.png', 'Project2'),
(6, 'Projek Pembuatan Poster Anti Korupsi', NULL, NULL, 'images/project4.jpg', 'Project2'),
(7, 'Projek Web Dashboard Menggunakan bahasa Phyton', NULL, NULL, 'images/project5.png', 'Project2'),
(8, 'Membuat aplikasi perhitungan kalkulator menggunakan C++', NULL, NULL, 'images/project6.jpg', 'Project1'),
(9, 'Lowongan Front End Engineer dengan Javascript', NULL, NULL, 'images/project7.png', 'Project1'),
(10, 'Git Hub Troubleshooting and Security Project', NULL, NULL, 'images/project8.png', 'Project1'),
(12, 'Big Data Management Internship', NULL, 'Mengelola fungsi data acquisition & integration (meliputi data operations management dan meta-data management), \r\n							mengelola data mart management & data mining untuk memberikan informasi bagi para penggu...', 'images/showcase2.jpg', 'Trending'),
(14, 'Pendaftaran Asisten Rekayasa Proses Bisnis 2019', NULL, NULL, 'images/asprak2.png', 'Asisten1'),
(15, 'Pendaftaran Asisten Manajemen Jaringan Komputer 2019', NULL, NULL, 'images/asprak3.jpg', 'Asisten2'),
(16, 'Pendaftaran Asisten Basis Data 2019', NULL, NULL, 'images/asprak4.png', 'Asisten2'),
(17, 'Pendaftaran Asisten Supply Chain Management 2019', NULL, NULL, 'images/asprak6.jpg', 'Asisten1'),
(18, 'Pendaftaran Asisten Tekno Ekonomi 2019', NULL, '', 'images/asprak7.jpg', 'Asisten2'),
(19, 'Pendaftaran Asisten Pengembangan Produk 2019', NULL, NULL, 'images/asprak8.jpeg', 'Asisten1'),
(20, 'Dibutuhkan segera tutor mata kuliah Statistika Industri', NULL, NULL, 'images/tutor2.jpg', 'Tutor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
