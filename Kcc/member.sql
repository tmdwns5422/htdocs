-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-09-30 04:33
-- 서버 버전: 10.1.16-MariaDB
-- PHP 버전: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kccdb`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `member`
--

CREATE TABLE `member` (
  `idx` int(11) NOT NULL,
  `kName` varchar(100) NOT NULL,
  `eName` varchar(100) NOT NULL,
  `bYear` int(11) NOT NULL,
  `bMonth` int(11) NOT NULL,
  `bDay` int(11) NOT NULL,
  `id` varchar(100) NOT NULL,
  `pw` varchar(100) NOT NULL,
  `fN` int(11) NOT NULL,
  `fPn` int(11) NOT NULL,
  `sns` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fPostN` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dm` varchar(100) NOT NULL,
  `emp` varchar(100) NOT NULL,
  `op` varchar(100) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `efPostN` int(11) NOT NULL,
  `eAddress` varchar(100) NOT NULL,
  `efN` int(11) NOT NULL,
  `ffN` int(11) NOT NULL,
  `wedding` varchar(100) NOT NULL,
  `wYear` int(11) NOT NULL,
  `wMonth` int(11) NOT NULL,
  `wDay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `kName`, `eName`, `bYear`, `bMonth`, `bDay`, `id`, `pw`, `fN`, `fPn`, `sns`, `email`, `fPostN`, `address`, `dm`, `emp`, `op`, `sp`, `efPostN`, `eAddress`, `efN`, `ffN`, `wedding`, `wYear`, `wMonth`, `wDay`) VALUES
(4, '현승준', 'hsj', 1999, 5, 12, '5422', '1234', 1, 1, '예', '5422@naver.com', 123, '서울시 디지텍구 2학년동 6반지', '자택', '서울디지텍고등학교', '학생', '2학년', 2, '서울디지텍고등학교', 1, 1, '미혼', 1964, 1, 1),
(5, 'ㅁㅇㄴㅀ', 'ㅁㄴㅇㄹ', 1964, 1, 1, 'ㅁㄴㅇㄹ', 'ㄴㅁㅇㄹ', 1, 1, '예', 'ㄴㅇㅁㄹ', 0, 'ㄴㅇㅁㄹㄴㅇㄹ', '자택', 'ㅇㄹ', 'ㄴㅁㄹㄴㅇ', 'ㄹㄴㅇㅁㄹㄴㅁㅇ', 0, 'ㅁㄴㄹ', 1, 1, '미혼', 1964, 1, 1);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`idx`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `member`
--
ALTER TABLE `member`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
