-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2016 at 08:00 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `venvast`
--

-- --------------------------------------------------------

--
-- Table structure for table `event_categories`
--

CREATE TABLE IF NOT EXISTS `event_categories` (
  `event_category_id` int(16) NOT NULL AUTO_INCREMENT,
  `category_identifier` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`event_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_category_xref`
--

CREATE TABLE IF NOT EXISTS `event_category_xref` (
  `event_category_xref_id` int(16) NOT NULL AUTO_INCREMENT,
  `event_id` int(16) NOT NULL,
  `category_id` int(16) NOT NULL,
  PRIMARY KEY (`event_category_xref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_content`
--

CREATE TABLE IF NOT EXISTS `event_content` (
  `event_content_id` int(16) NOT NULL AUTO_INCREMENT,
  `event_id` int(16) NOT NULL,
  `content_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `language_id` int(16) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`event_content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_data`
--

CREATE TABLE IF NOT EXISTS `event_data` (
  `event_id` int(16) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `coordinates` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `url_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `image_path` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(16) NOT NULL,
  `creation_date` datetime NOT NULL,
  `modified_by` int(16) NOT NULL,
  `modification_date` datetime NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `timezone` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `published` int(1) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=17 ;

--
-- Dumping data for table `event_data`
--

INSERT INTO `event_data` (`event_id`, `title`, `description`, `location`, `coordinates`, `url_name`, `image_path`, `created_by`, `creation_date`, `modified_by`, `modification_date`, `date`, `start_time`, `end_time`, `timezone`, `type`, `category`, `published`) VALUES
(9, 'FTCC YP - Networking Cocktail - French Tech Night1', '<p>SAVE THE DATE!<br />\r\n<br />\r\nREGISTER NOW: http://bit.ly/1R8Swq8<br />\r\n<br />\r\nTo celebrate the 1st year anniversary of &quot;La French Tech Tha&iuml;lande&quot;, the FTCC Young Professionals Committee invites you to join its special Networking Night with successful E-commerce startup founder Julien Chalt&eacute;!<br />\r\n<br />\r\nCome and get insights on &quot;How to Build a Successful Startup in Thailand&quot; with our speaker Julien Chalt&eacute;, Co-Founder &amp; Managing Director of WearYouWant.com (https://www.wearyouwant.com)<br />\r\n<br />\r\nJoin us on Wednesday, 24 February 2016 from 6.30 to 9.30 pm @ Dream Hotel Bangkok!<br />\r\n<br />\r\nREGISTER NOW: http://bit.ly/1R8Swq8<br />\r\n<br />\r\n--- Useful information ---<br />\r\nWednesday, the 24th of February 2016, from 6.30 to 9.30 pm<br />\r\nDream Hotel Bangkok (Flava Restaurant &amp; Bar, 2nd Fl.),<br />\r\n10 Sukhumvit Soi 15, Bangkok (BTS Nana)<br />\r\nEntrance fees: 400 THB<br />\r\nIncluding 1 FREE drink + finger food<br />\r\n<br />\r\nREGISTER NOW: http://bit.ly/1R8Swq8<br />\r\n<br />\r\nกลับมาอีกครั้งสำหรับงาน FTCC Young Professionals Networking Cocktail &ldquo;French Tech Night&rdquo; งานเดียวที่คุณจะได้พบกับบรรดาเหล่าStartupไฟแรงและนักธุรกิจในวงการต่างๆ ทั้งชาวไทยและชาวต่างประเทศ<br />\r\n<br />\r\nพิเศษสุด ร่วมรับฟังการบรรยายภายใต้หัวข้อ &ldquo;How to build a successful startup in Thailand!&rdquo; จาก Startup ชื่อดัง คุณ Julien Chalt&eacute; ผู้ก่อตั้งร้านค้าและเว็บไซต์ WearYouWant.com<br />\r\n<br />\r\nพบกันวันพุธที่ 24 กุมภาพันธ์ ตั้งแต่เวลา 18.30 &ndash; 21.30 ที่ Dream Hotel Bangkok เพื่อเปิดโอกาสทางธุรกิจใหม่ๆให้กับอนาคตของคุณ<br />\r\n<br />\r\n*ค่าเข้างาน 400 บาท ราคานี้รวมเครื่องดื่ม 1แก้วและอาหารทานเล่นแล้ว สำหรับเครื่องดื่มแก้วต่อๆไปสามารถซื้อได้ในราคาพิเศษ<br />\r\n<br />\r\nหากต้องการข้อมูลเพิ่มเติม กรุณาติดต่อคุณวริศร varisorn@francothaicc.com</p>\r\n', 'Dream Hotel Bangkok', '13.7370197,100.5581533,13', '', '', 1, '2016-02-23 00:00:00', 1, '2016-02-23 01:51:28', '2016-02-12', '18:30:00', '21:30:00', '', 'organic', 'community', 1),
(10, 'Touys Text event', '<p>Touys morning test</p>\r\n', 'Tom Tom Coffee', '13.7370197,100.5581533,14', '', '', 1, '2016-02-22 00:00:00', 1, '2016-02-22 23:40:46', '2016-09-02', '04:30:00', '06:55:00', '', 'private', 'other', 1),
(11, 'Gypsy Parade', '', 'Bangkok', '', '', '', 1, '2016-02-09 00:00:00', 1, '2016-02-09 10:20:48', '0000-00-00', '09:15:00', '13:00:00', '', 'organic', 'food', 1),
(12, 'LSC - Lean.Startup.Circle', '<p>TECHGRIND - by startups, for startups.<br />\r\nTECHGRIND - events &amp; workshops are always FREE!<br />\r\n<br />\r\n-- WHO --<br />\r\nStartup Founders;<br />\r\nLearnstartup practitioners;<br />\r\nLeanstartup learners;<br />\r\nProduct managers;<br />\r\nEntrepreneurs.<br />\r\n-- WHAT --<br />\r\nLearn leanstartup techniques, canvases &amp; tools;<br />\r\nMeet other startup founders &amp; leanstartup practitioners;<br />\r\nMeet investors &amp; mentors looking for leanstartups.<br />\r\n-- WHERE --<br />\r\nTechGrind Thailand Incubator<br />\r\n<br />\r\n<br />\r\nTime to go LEAN!<br />\r\nLeanstartup is the scientific methods and techniques to successfully PROVE your products &amp; business model will work. BEFORE you spend valuable money and time building your products or business.<br />\r\n<br />\r\nIf you are building a startup today - your chances of success are lower than 10% if you do not employ leanstartup practices in your company building.<br />\r\nYour chances for success with leanstartup methodology is 90% or higher.<br />\r\nIt&#39;s that simple.<br />\r\n<br />\r\nLSC is a global community of the world&#39;s top startup founders who share and learn from each other the science of business building that is leanstartup.<br />\r\nLSC was founded in Silicon Valley over a decade ago by some of the Valley&#39;s most successful startup CEO&#39;s and CTO&#39;s. LSC Thailand is the local chapter of the global LSC community.<br />\r\nTime to go LEAN!<br />\r\n<br />\r\nSCHEDULE<br />\r\n18:30 - Networking<br />\r\n19:00 - Leanstartup Canvases, Tools &amp; Discussions<br />\r\n20:30 - More Networking</p>\r\n', 'TechGrind Thailand Incubator, Floor 5, Chamnan Phenjati Business Center, Rama 9 Rd, Bangkok', '13.7370197,100.5581533,14', '', '', 1, '2016-02-22 00:00:00', 1, '2016-02-22 23:39:38', '2016-02-11', '18:30:00', '08:00:00', '', '', 'business', 1),
(13, 'Special BKK Entrepreneurs & WebMob event with Google new Cou', '<p>Special Bangkok Entrepreneurs - WebMob Event:<br />\r\nMeet Google Thailand&#39;s new Country Manager, Ben King, and the Google Thailand team.<br />\r\n<br />\r\nGoogle Thailand has a new head, Ben King, who is new to Thailand, but not new to Google where he has been holding different roles in Southeast Asia since 2012.<br />\r\n<br />\r\nWhat will be his role as the leader of the Google team?What is the mission of Google in Thailand? What makes the Thai market different for Google (hint: Youtube)? How can SMEs and Startups work with Google?<br />\r\n<br />\r\nThese are some of the questions Ben will address during his keynote.<br />\r\n<br />\r\nDon&#39;t miss it!<br />\r\n<br />\r\n----------<br />\r\nVenue:<br />\r\nHilton Sukhumvit Bangkok Hotel<br />\r\nSukhumvit soi 24<br />\r\nBTS Phrom Phong<br />\r\n<br />\r\n----------<br />\r\n<br />\r\nEntrance Fee:<br />\r\n400 baht at the door.<br />\r\n<br />\r\nSAVE MONEY: Pay in advance (200 baht) or RSVP on Meetup (300 baht).<br />\r\n<br />\r\nMore information here: http://www.meetup.com/Bangkok-Entrepreneurs/events/228151168/</p>\r\n', 'Hilton Sukhumvit Bangkok Hotel', '13.7370197,100.5581533,14', '', '', 1, '2016-02-22 00:00:00', 1, '2016-02-22 23:39:00', '2016-02-17', '19:00:00', '22:00:00', '', 'organic', 'technology', 1),
(14, 'BIG4:  Meet Lazada & RushBike1', '<p>Ladies and Gentlemen our long awaited Bangkok Internship Group is back! This time meet two of the &#39;fastest&#39; companies in Bangkok Lazada and RushBike. Here&#39;s your opportunity to meet and learn from Mr Tarin Taniyavarn (Chief Commercial Officer, Lazada) and Mr Anatoliy Glinin (CEO, RushBike). Its back, its #BIG4<br />\r\nPlease register for your ticket here https://ticketbox.co.th/event/big4-meet-lazada-rushbike-59700/31883#</p>\r\n', 'Stamford International University asoke Campus', '13.7370197,100.5581533,13', '', '', 1, '2016-02-23 00:00:00', 1, '2016-02-23 01:52:02', '2016-02-23', '19:00:00', '22:00:00', '', 'organic', 'technology', 1),
(15, 'Wine & Cheese Tasting', '<p>Bottles opened at 7.30 pm !!!... So Don&#39;t Be Late!!!<br />\r\n<br />\r\n2 hour Free Flow Wine &amp; Cheese Tasting Event at the 2nd Floor Lounge, The Sportsman Bar &amp; Restaurant, Trendy Building, Sukhumvit Soi 13, on March 03, 2016 - Thursday - starting at 7.30 pm.<br />\r\n<br />\r\nFeatures:<br />\r\n<br />\r\nTom Crowley: Author of &quot;Bangkok Pool Blues&quot; and &quot;Vipers Tail&quot; will talk about his recently published book.<br />\r\n<br />\r\nCristan Perugia: Australian Designer Shoe Company, will showcase their Designer Shoe Collection at the Event.</p>\r\n', 'The Sportsman Bangkok', '13.7370197,100.5581533,14', '', '', 1, '2016-02-22 00:00:00', 1, '2016-02-22 23:47:10', '2016-03-03', '19:30:00', '08:00:00', '', 'organic', 'sports', 1),
(16, 'UX Happy Hour - March', '<p>Hello!<br />\r\n<br />\r\nUX Happy Hour is all about meeting other designers. It&#39;s a self-organized group with hosts in each city, and it&#39;s open to anyone who&#39;s interested in design. Developers, PMs and founders are all welcome! There aren&#39;t any talks or workshops, it&#39;s just designers hanging out.<br />\r\n<br />\r\nCome hangout, meet fellow designers and talk about design!<br />\r\n<br />\r\nYour Bangkok Host,<br />\r\nPiyush</p>\r\n', 'TBD', '13.7370197,100.5581533,14', '', '', 1, '2016-02-22 00:00:00', 1, '2016-02-22 23:49:18', '2016-03-09', '19:30:00', '22:30:00', '', 'organic', 'business', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_images`
--

CREATE TABLE IF NOT EXISTS `event_images` (
  `event_image_id` int(16) NOT NULL AUTO_INCREMENT,
  `event_id` int(16) NOT NULL,
  `image_path` text COLLATE utf8_unicode_ci NOT NULL,
  `ordering` int(16) NOT NULL,
  PRIMARY KEY (`event_image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_location_xref`
--

CREATE TABLE IF NOT EXISTS `event_location_xref` (
  `event_location_xref_id` int(16) NOT NULL AUTO_INCREMENT,
  `event_id` int(16) NOT NULL,
  `location_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `location_id` int(16) NOT NULL,
  PRIMARY KEY (`event_location_xref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_organizer_xref`
--

CREATE TABLE IF NOT EXISTS `event_organizer_xref` (
  `event_organizer_xref_id` int(16) NOT NULL,
  `event_id` int(16) NOT NULL,
  `organizer_id` int(16) NOT NULL,
  `access_rights` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`event_organizer_xref_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_price_items`
--

CREATE TABLE IF NOT EXISTS `event_price_items` (
  `price_item_id` int(16) NOT NULL AUTO_INCREMENT,
  `event_id` int(16) NOT NULL,
  `value` int(16) NOT NULL,
  `currency` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`price_item_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_price_items_content`
--

CREATE TABLE IF NOT EXISTS `event_price_items_content` (
  `price_items_content_id` int(16) NOT NULL AUTO_INCREMENT,
  `price_item_id` int(16) NOT NULL,
  `language_id` int(16) NOT NULL,
  `content_type` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`price_items_content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE IF NOT EXISTS `languages` (
  `language_id` int(16) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `abbreviation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(16) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `intro` text COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` int(6) NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `avatar_path` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `first_name`, `last_name`, `gender`, `intro`, `address`, `zip_code`, `phone`, `creation_date`, `last_login`, `avatar_path`) VALUES
(16, 'info@php-mods.eu', 'b64f1a77b1b317d347f5cb79332c86d2', 'Georgios', 'Servetas1', 'M', '', '', 0, '', '2016-02-23 01:46:24', '2016-02-23 01:48:08', ''),
(17, 'touy@venvast.com', '2565c72d8674c82f50f52c51780a1159', 'Touy ', 'Smith', 'M', 'Test Touy', '', 0, '', '2016-02-23 01:46:46', '2016-02-23 01:46:46', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_organizers`
--

CREATE TABLE IF NOT EXISTS `users_organizers` (
  `organizer_id` int(16) NOT NULL AUTO_INCREMENT,
  `display_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `avatar_path` text COLLATE utf8_unicode_ci NOT NULL,
  `creation_date` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `active` int(1) NOT NULL,
  PRIMARY KEY (`organizer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
