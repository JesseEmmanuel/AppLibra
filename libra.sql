-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 03:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libra`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE `tblaccounts` (
  `accountID` int(10) NOT NULL,
  `accountFullName` varchar(50) NOT NULL,
  `accountUserName` varchar(50) NOT NULL,
  `accountPassWord` varchar(255) NOT NULL,
  `categoryID` int(10) NOT NULL,
  `accountEmail` varchar(50) NOT NULL,
  `accountContactInfo` varchar(50) NOT NULL,
  `accountProfileImage` varchar(255) NOT NULL,
  `accountRole` int(2) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`accountID`, `accountFullName`, `accountUserName`, `accountPassWord`, `categoryID`, `accountEmail`, `accountContactInfo`, `accountProfileImage`, `accountRole`, `dateCreated`) VALUES
(1, 'Civil Engineer', 'ce_user1', '$2y$10$mc9MicCzZn9pdf7ncjzhZO2PEfQ9HpSdetqLDf3h2SAe1NsM8Gv/O', 2, 'ce_user1@gmail.com', '9978366415', 'c_e1.jpg', 1, '2022-11-17 10:58:29');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `bookID` int(10) NOT NULL,
  `accountID` int(10) NOT NULL,
  `categoryID` int(10) NOT NULL,
  `bookTitle` varchar(50) NOT NULL,
  `bookDesc` varchar(50) NOT NULL,
  `bookCover` varchar(50) NOT NULL,
  `bookPdf` varchar(50) NOT NULL,
  `bookType` int(10) NOT NULL,
  `bookPrice` float NOT NULL,
  `bookOverview` text NOT NULL,
  `bookStatus` int(11) NOT NULL,
  `upload_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategories`
--

CREATE TABLE `tblcategories` (
  `categoryID` int(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategories`
--

INSERT INTO `tblcategories` (`categoryID`, `categoryName`) VALUES
(1, 'Literature and Arts'),
(2, 'Engineering'),
(3, 'Technology'),
(4, 'Economics'),
(5, 'History'),
(6, 'Theology'),
(7, 'Health and Fitness'),
(8, 'Psychology'),
(9, 'General Science'),
(10, 'Foods and Recipes'),
(11, 'Social Science'),
(12, 'Novel/Manga/Series');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`accountID`),
  ADD UNIQUE KEY `accountEmail` (`accountEmail`),
  ADD UNIQUE KEY `accountPassWord` (`accountPassWord`),
  ADD KEY `accountCategory` (`categoryID`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`bookID`),
  ADD KEY `book_account` (`accountID`),
  ADD KEY `book_category` (`categoryID`);

--
-- Indexes for table `tblcategories`
--
ALTER TABLE `tblcategories`
  ADD PRIMARY KEY (`categoryID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  MODIFY `accountID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `bookID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcategories`
--
ALTER TABLE `tblcategories`
  MODIFY `categoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD CONSTRAINT `accountCategory` FOREIGN KEY (`categoryID`) REFERENCES `tblcategories` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD CONSTRAINT `book_account` FOREIGN KEY (`accountID`) REFERENCES `tblaccounts` (`accountID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_category` FOREIGN KEY (`categoryID`) REFERENCES `tblcategories` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
