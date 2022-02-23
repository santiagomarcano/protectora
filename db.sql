-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2022 at 12:10 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `protectora_david`
--

-- --------------------------------------------------------

--
-- Table structure for table `animales`
--

CREATE TABLE `animales` (
  `id` int(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `edad` int(50) NOT NULL,
  `especie` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `direccion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `animales`
--

INSERT INTO `animales` (`id`, `nombre`, `edad`, `especie`, `fecha`, `direccion`) VALUES
(1, 'Garfield', 5, 'Perro', '2022-02-13 11:55:21', 'N/A'),
(2, 'Tommy', 5, 'Perro', '2022-02-13 11:55:21', 'N/A'),
(3, 'Prueba', 10, 'n/a', '2022-02-13 12:08:31', 'n/a');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `animales`
--
ALTER TABLE `animales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `animales`
--
ALTER TABLE `animales`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
