-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-09-25 11:23
-- 서버 버전: 10.1.13-MariaDB
-- PHP 버전: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `kcc`
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
  `sN` int(11) NOT NULL,
  `tN` int(11) NOT NULL,
  `fPn` int(11) NOT NULL,
  `sPn` int(11) NOT NULL,
  `tPn` int(11) NOT NULL,
  `sns` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fPostN` int(11) NOT NULL,
  `sPostN` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `IAddress` varchar(100) NOT NULL,
  `dm` varchar(100) NOT NULL,
  `emp` varchar(100) NOT NULL,
  `op` varchar(100) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `efPostN` int(11) NOT NULL,
  `esPostN` int(11) NOT NULL,
  `eAddress` varchar(100) NOT NULL,
  `eIaddress` varchar(100) NOT NULL,
  `efN` int(11) NOT NULL,
  `esN` int(11) NOT NULL,
  `etN` int(11) NOT NULL,
  `ffN` int(11) NOT NULL,
  `fsN` int(11) NOT NULL,
  `ftN` int(11) NOT NULL,
  `wedding` varchar(100) NOT NULL,
  `wYear` int(11) NOT NULL,
  `wMonth` int(11) NOT NULL,
  `wDay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `kName`, `eName`, `bYear`, `bMonth`, `bDay`, `id`, `pw`, `fN`, `sN`, `tN`, `fPn`, `sPn`, `tPn`, `sns`, `email`, `fPostN`, `sPostN`, `address`, `IAddress`, `dm`, `emp`, `op`, `sp`, `efPostN`, `esPostN`, `eAddress`, `eIaddress`, `efN`, `esN`, `etN`, `ffN`, `fsN`, `ftN`, `wedding`, `wYear`, `wMonth`, `wDay`) VALUES
(1, '12312', '123', 1, 2, 2, '123', '123', 1, 34123, 13, 1, 41234, 13412, '예', '341234', 41234, 1234123, '123434123412', '134', '자택', '1341234', '213412', '34134', 41234, 12341, '34134', '12341234', 1, 13412, 34134, 1, 12341234, 1234, '미혼', 1, 1, 1),
(2, '123', '123', 1, 1, 1, '123', '123', 1, 132, 123, 1, 123, 123, '예', '123', 123, 123, '123', '3', '자택', '123', '231', '123', 123, 123, '123', '123', 1, 123, 132, 1, 12312, 123, '미혼', 1, 1, 1),
(3, '123', '123', 1, 1, 1, '123', '123', 1, 123, 123, 1, 123, 123, '예', '123', 123, 123123, '123123123', '123', '자택', '123', '123', '23', 12, 3, '123', '123', 1, 123, 213, 1, 123, 123, '미혼', 1, 1, 1);

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
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
