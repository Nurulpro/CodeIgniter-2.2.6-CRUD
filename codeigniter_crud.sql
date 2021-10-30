-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 08:45 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `OrderNumber` int(11) NOT NULL,
  `OrderDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ProductName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UnitePrice` int(11) NOT NULL,
  `ProductQty` int(11) NOT NULL,
  `TotalAmount` int(11) NOT NULL,
  `UpdatedAt` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `user_id`, `OrderNumber`, `OrderDate`, `ProductName`, `UnitePrice`, `ProductQty`, `TotalAmount`, `UpdatedAt`) VALUES
(1, 1, 1, '2021-10-27 07:39:07', 'Mango', 100, 1, 100, '2021-10-26 18:00:00'),
(2, 1, 2, '2021-10-27 07:39:07', 'Mango', 100, 1, 100, '2021-10-26 18:00:00'),
(8, 1, 3, '2021-10-28 09:05:38', 'fghgfh', 565, 546, 3453, '0000-00-00 00:00:00'),
(12, 1, 4, '2021-10-28 10:54:40', 'fghgfh', 111, 111, 1111, '0000-00-00 00:00:00'),
(18, 2, 0, '2021-10-28 10:55:10', 'tometo', 60, 2, 120, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(120) NOT NULL,
  `ContactNumber` char(11) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FirstName`, `LastName`, `EmailId`, `ContactNumber`, `Address`, `PostingDate`) VALUES
(1, 'nurl', 'islam', 'nurul@gmail.com', '0182155448', 'hello nurul', '2021-10-27 06:30:13'),
(2, 'fgfhdfh', 'fghfgh', 'fghfgh@gmail.com', '0182155770', 'gfhfghjhgj', '2021-10-27 12:33:32'),
(3, 'ghng', 'ghjhg', 'ghjhgj@gmail.com', '0182155440', 'hjhgjhkhjk', '2021-10-27 12:40:52'),
(4, 'md', 'jaman', 'jaman@gmail.com', '0182155447', 'jaman jfgjf', '2021-10-27 13:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland'),
(11, 'Ronald Bowne', '2343 Shadowmar Drive', 'New Orleans', '70112', 'United States'),
(12, 'Joyce Rosenberry', 'Norra Esplanaden 56', 'HELSINKI', '00380', 'Finland'),
(13, 'Jeff Putnam', 'Industrieweg 56', 'Bouvignies', '7803', 'Belgium'),
(14, 'Trina Davidson', '1049 Lockhart Drive', 'Barrie', 'ON L4M 3B1', 'Canada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `id` (`user_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tblusers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
