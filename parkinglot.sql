-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-05-14 15:53
-- 서버 버전: 10.4.17-MariaDB
-- PHP 버전: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `hm`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `parkinglot`
--

CREATE TABLE `parkinglot` (
  `name` varchar(10) NOT NULL,
  `x_coordinate` float NOT NULL,
  `y_coordinate` float NOT NULL,
  `total_space` int(3) NOT NULL,
  `blank_space` int(3) NOT NULL,
  `full_space` int(3) NOT NULL,
  `distance` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `parkinglot`
--

INSERT INTO `parkinglot` (`name`, `x_coordinate`, `y_coordinate`, `total_space`, `blank_space`, `full_space`, `distance`) VALUES
('미영아파트 주차장', 37.2475, 127.015, 100, 50, 50, 100),
('세류 고가 3주차장', 37.2504, 127.018, 30, 10, 20, 300),
('미영아파트 주차장', 37.2475, 127.015, 100, 50, 50, 100),
('세류 고가 3주차장', 37.2504, 127.018, 30, 10, 20, 300),
('자투리 주차장', 37.248, 127.015, 10, 0, 10, 50),
('자투리 주차장', 37.248, 127.015, 10, 0, 10, 50);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
