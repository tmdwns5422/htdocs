-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- 생성 시간: 16-10-07 04:33
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
  `fN` varchar(20) NOT NULL,
  `fPn` varchar(20) NOT NULL,
  `sns` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fPostN` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Iaddress` varchar(100) NOT NULL,
  `dm` varchar(100) NOT NULL,
  `emp` varchar(100) NOT NULL,
  `op` varchar(100) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `efPostN` int(11) NOT NULL,
  `eAddress` varchar(100) NOT NULL,
  `eIaddress` varchar(100) NOT NULL,
  `efN` varchar(20) NOT NULL,
  `ffN` varchar(20) NOT NULL,
  `wedding` varchar(100) NOT NULL,
  `wYear` int(11) NOT NULL,
  `wMonth` int(11) NOT NULL,
  `wDay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 테이블의 덤프 데이터 `member`
--

INSERT INTO `member` (`idx`, `kName`, `eName`, `bYear`, `bMonth`, `bDay`, `id`, `pw`, `fN`, `fPn`, `sns`, `email`, `fPostN`, `address`, `Iaddress`, `dm`, `emp`, `op`, `sp`, `efPostN`, `eAddress`, `eIaddress`, `efN`, `ffN`, `wedding`, `wYear`, `wMonth`, `wDay`) VALUES
(34, '', '', 1964, 1, 1, '22', '22', '02', '010', '예', '', 0, '', '', '자택', '', '', '', 0, '', '', '010', '010', '미혼', 1964, 1, 1),
(35, '', '', 1964, 1, 1, 'tmdwns5422', '14214ko', '02', '010', '예', 'tmdwns5422@naver.com', 0, '', '', '자택', '', '', '', 0, '', '', '010', '010', '미혼', 1964, 1, 1);

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
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
