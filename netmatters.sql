-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 01:03 PM
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
-- Database: `netmatters`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(200) NOT NULL,
  `cname` varchar(200) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `tel-num` varchar(15) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `mconsent` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emaillist`
--

CREATE TABLE `emaillist` (
  `name` varchar(200) NOT NULL,
  `email` varchar(400) NOT NULL,
  `mconsent` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news_posts`
--

CREATE TABLE `news_posts` (
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(150) NOT NULL,
  `date` date NOT NULL,
  `img_path` varchar(2000) NOT NULL,
  `thumbnail_path` varchar(2000) NOT NULL,
  `topic` varchar(50) DEFAULT NULL,
  `color` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news_posts`
--

INSERT INTO `news_posts` (`title`, `description`, `author`, `date`, `img_path`, `thumbnail_path`, `topic`, `color`) VALUES
('A Year in Business Automation – Why Are Businesses Investing Now?', 'Last year, we spoke a lot about the importance of Business Automation for taking organisations to the next level, and have since helped may of our customers gain a competitive edge in their markets.', 'Netmatters', '2023-02-15', 'https://www.netmatters.co.uk/uploads/article/3310/a-year-in-NHCR.png', '', 'Insights', 'software'),
('6 Key Benefits of a Bespoke CRM for Energy Companies', 'For energy suppliers, being able to manage, coordinate and action customer information is central to delivering an effective service and ensuring that operations run smoothly. This is where a customer relationship management (CRM) system – software to house and track all key client/prospect data in one location – becomes critical. However, it can be difficult to know whether you should be going for an off-the-shelf solution or a bespoke build.', 'Netmatters', '2023-02-20', 'https://www.netmatters.co.uk/uploads/article/3314/6-key-benefits-0pEI.png', '', 'Insights', 'software'),
('Scion Coalition Scheme - Our 100th Candidate Placed!', 'We are delighted to announce that we have now placed our 100th candidate into employment through the Scion Coalition Scheme. Offering this award-winning scheme allows us to help bridge the skills gap in the tech and development industries by providing individuals with the technical skills required for roles in the sectors.', 'Netmatters', '2023-02-10', 'https://www.netmatters.co.uk/uploads/article/3305/scion-coalition-scheme-IRCl.png', '', 'News', 'tel-services');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
