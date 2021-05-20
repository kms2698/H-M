-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- 생성 시간: 21-05-20 14:58
-- 서버 버전: 5.7.32
-- PHP 버전: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 데이터베이스: `hm`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `parkinglot`
--

CREATE TABLE `parkinglot` (
  `name` varchar(40) NOT NULL,
  `x` float NOT NULL,
  `y` float NOT NULL,
  `total_space` int(10) NOT NULL,
  `full_space` int(10) NOT NULL,
  `empty_space` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `parkinglot`
--

INSERT INTO `parkinglot` (`name`, `x`, `y`, `total_space`, `full_space`, `empty_space`) VALUES
('거주자 우선 주차(유료)1', 37.2475, 127.015, 35, 30, 5),
('거주자 우선 주차(유료)2', 37.2473, 127.016, 30, 20, 10),
('거주자 우선 주차(유료)3', 37.2467, 127.016, 10, 0, 10),
('미영아파트 주차장', 37.2475, 127.015, 50, 45, 5),
('상록구청주차장', 37.3003, 126.846, 30, 10, 20),
('세류 고가 3주차장', 37.2504, 127.018, 30, 20, 10),
('제 12호 자투리 주차장', 37.248, 127.015, 5, 4, 1),
('한양대학교 주차장1', 37.2943, 126.831, 30, 25, 5),
('한양대학교 주차장2', 37.2961, 126.835, 10, 0, 10),
('한양대학교 주차장3', 37.2932, 126.836, 30, 10, 20),
('한양대학교 주차장4', 37.2972, 126.838, 10, 10, 0),
('한양대학교 주차장5', 37.2979, 126.838, 30, 25, 5),
('한양대학교 주차장6', 37.2993, 126.838, 10, 0, 10),
('한양대학교 주차장7', 37.2965, 126.842, 30, 10, 20);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `parkinglot`
--
ALTER TABLE `parkinglot`
  ADD PRIMARY KEY (`name`,`x`,`y`,`total_space`,`full_space`,`empty_space`);
