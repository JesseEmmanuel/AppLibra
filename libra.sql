-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 10:53 AM
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
  `accountUserName` varchar(50) NOT NULL,
  `accountPassWord` varchar(255) NOT NULL,
  `accountRole` varchar(50) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`accountID`, `accountUserName`, `accountPassWord`, `accountRole`, `dateCreated`) VALUES
(1, 'soft_dev001', '$2y$10$guZN7CmheLkHVriY.VzyrOtXbfSZDINIwQUePbPejaEeGo5y3R5nu', 'Author', '2022-11-23 03:01:54'),
(14, 'admin', '$2y$10$yFpwQAKfLG3lr9knlR6ROOp58k.MET5LXFc63wdsoVibcFtUBdjku', 'Admin', '2022-12-12 09:50:20'),
(16, 'oddjobs', '$2y$10$srqBmrdozNZSUe8j2wxIJOCewHcL9mNdxd6l7QYvCLqV0WPA7/sKW', 'Author', '2022-12-12 09:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblauthor`
--

CREATE TABLE `tblauthor` (
  `authorID` int(11) NOT NULL,
  `profile_ID` int(10) NOT NULL,
  `field_of_interest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblauthor`
--

INSERT INTO `tblauthor` (`authorID`, `profile_ID`, `field_of_interest`) VALUES
(1, 1, 'Technology'),
(7, 15, 'Literature and Arts');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

CREATE TABLE `tblbooks` (
  `bookID` int(10) NOT NULL,
  `bookTitle` varchar(50) NOT NULL,
  `bookDesc` varchar(50) NOT NULL,
  `bookCover` varchar(50) NOT NULL,
  `bookPdf` varchar(255) NOT NULL,
  `bookType` int(10) NOT NULL,
  `bookPrice` float NOT NULL,
  `bookOverview` text NOT NULL,
  `bookStatus` int(11) NOT NULL,
  `upload_timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`bookID`, `bookTitle`, `bookDesc`, `bookCover`, `bookPdf`, `bookType`, `bookPrice`, `bookOverview`, `bookStatus`, `upload_timestamp`) VALUES
(5, 'Python Programming', 'From Beginner to Intermidiate', 'python.PNG', 'Python_Programming._Python_Programming_for_Beginners,_Python_Programming_for_Intermediates_(_PDFDrive_).pdf', 0, 0, '<p><p><p><p>This guidebook is going to give you some of the basics that you need to get\r\nstarted with Python programming. We will start out a bit talking about what\r\nPython programming is as well as some of the steps that you should take in\r\norder to download the program, if it isnâ€™t already present on your computer, and\r\ngive you some more information to really understand why this program is so\r\ngreat. We will then move on to some keywords that will be useful to you when\r\nstarting out with the program and even talk about the benefits and the\r\ndrawbacks of using Python for all your coding and programing needs.\r\nThe rest of the guidebook is devoted to talking about some of the different\r\nthings that you can do within the Python program as well as some examples of\r\nhow each of these would work. We talk about adding comments into the code,\r\nworking with strings and integers, and even spend some time working with\r\nvariables so that they will show up right in the program. It is a great idea to\r\nexperiment a bit with the process. Python makes it easy to test out your strings\r\nso that you can figure out what is going to work and what needs some more\r\npractice.Â <p></p></p></p></p></p>', 1, '2022-12-11 00:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `tblbook_author`
--

CREATE TABLE `tblbook_author` (
  `book_authorID` int(11) NOT NULL,
  `authorID` int(11) NOT NULL,
  `bookID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbook_author`
--

INSERT INTO `tblbook_author` (`book_authorID`, `authorID`, `bookID`) VALUES
(5, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblbook_categories`
--

CREATE TABLE `tblbook_categories` (
  `book_categoryID` int(11) NOT NULL,
  `bookID` int(11) NOT NULL,
  `categoryID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbook_categories`
--

INSERT INTO `tblbook_categories` (`book_categoryID`, `bookID`, `categoryID`) VALUES
(10, 5, 3),
(12, 5, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblcategories`
--

CREATE TABLE `tblcategories` (
  `categoryID` int(10) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `categoryThemeColor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategories`
--

INSERT INTO `tblcategories` (`categoryID`, `categoryName`, `categoryThemeColor`) VALUES
(1, 'Literature and Arts', '#75E6DA'),
(2, 'Engineering', '#05445E'),
(3, 'Technology', '#0000FF'),
(4, 'Economics', '#18A558'),
(5, 'History', '#A3EBB1'),
(6, 'Theology', '#21B6A8'),
(7, 'Health and Fitness', '#E43D40'),
(8, 'Psychology', '#391306'),
(9, 'General Science', '#FAD02C'),
(10, 'Foods and Recipes', '#E1C340'),
(11, 'Social Science', '#59981A'),
(12, 'Novel/Manga/Series', '#603F8B');

-- --------------------------------------------------------

--
-- Table structure for table `tblprofile`
--

CREATE TABLE `tblprofile` (
  `profile_ID` int(10) NOT NULL,
  `accountID` int(10) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `contactInfo` int(50) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `profileImage` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblprofile`
--

INSERT INTO `tblprofile` (`profile_ID`, `accountID`, `firstName`, `lastName`, `contactInfo`, `emailAddress`, `profileImage`, `created_at`) VALUES
(1, 1, 'Jesse Emmanuel', 'Basco', 2147483647, 'jesseodds@gmail.com', '359-3598942_gintoki-sakata-chibi-hd-png-download.png', '2022-11-23 03:01:54'),
(15, 16, 'Emmanuel', 'Mogato', 2147483647, 'jesseemmanuel@gmail.com', 'profile.png', '2022-12-12 09:53:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblreader`
--

CREATE TABLE `tblreader` (
  `readerID` int(11) NOT NULL,
  `profile_ID` int(10) NOT NULL,
  `field_of_interest` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `tblauthor`
--
ALTER TABLE `tblauthor`
  ADD PRIMARY KEY (`authorID`),
  ADD KEY `profile_author` (`profile_ID`);

--
-- Indexes for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `tblbook_author`
--
ALTER TABLE `tblbook_author`
  ADD PRIMARY KEY (`book_authorID`),
  ADD KEY `book_author` (`authorID`),
  ADD KEY `book_id` (`bookID`);

--
-- Indexes for table `tblbook_categories`
--
ALTER TABLE `tblbook_categories`
  ADD PRIMARY KEY (`book_categoryID`),
  ADD KEY `book_ref` (`bookID`),
  ADD KEY `category_ref` (`categoryID`);

--
-- Indexes for table `tblcategories`
--
ALTER TABLE `tblcategories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `tblprofile`
--
ALTER TABLE `tblprofile`
  ADD PRIMARY KEY (`profile_ID`),
  ADD KEY `account_profile` (`accountID`);

--
-- Indexes for table `tblreader`
--
ALTER TABLE `tblreader`
  ADD PRIMARY KEY (`readerID`),
  ADD KEY `reader_profile` (`profile_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  MODIFY `accountID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tblauthor`
--
ALTER TABLE `tblauthor`
  MODIFY `authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblbooks`
--
ALTER TABLE `tblbooks`
  MODIFY `bookID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblbook_author`
--
ALTER TABLE `tblbook_author`
  MODIFY `book_authorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblbook_categories`
--
ALTER TABLE `tblbook_categories`
  MODIFY `book_categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblcategories`
--
ALTER TABLE `tblcategories`
  MODIFY `categoryID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblprofile`
--
ALTER TABLE `tblprofile`
  MODIFY `profile_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tblreader`
--
ALTER TABLE `tblreader`
  MODIFY `readerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblauthor`
--
ALTER TABLE `tblauthor`
  ADD CONSTRAINT `profile_author` FOREIGN KEY (`profile_ID`) REFERENCES `tblprofile` (`profile_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblbook_author`
--
ALTER TABLE `tblbook_author`
  ADD CONSTRAINT `book_author` FOREIGN KEY (`authorID`) REFERENCES `tblauthor` (`authorID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_id` FOREIGN KEY (`bookID`) REFERENCES `tblbooks` (`bookID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblbook_categories`
--
ALTER TABLE `tblbook_categories`
  ADD CONSTRAINT `book_ref` FOREIGN KEY (`bookID`) REFERENCES `tblbooks` (`bookID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `category_ref` FOREIGN KEY (`categoryID`) REFERENCES `tblcategories` (`categoryID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblprofile`
--
ALTER TABLE `tblprofile`
  ADD CONSTRAINT `account_profile` FOREIGN KEY (`accountID`) REFERENCES `tblaccounts` (`accountID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tblreader`
--
ALTER TABLE `tblreader`
  ADD CONSTRAINT `reader_profile` FOREIGN KEY (`profile_ID`) REFERENCES `tblprofile` (`profile_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
