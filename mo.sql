-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2016 at 10:54 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mo`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(50) unsigned NOT NULL,
  `title` varchar(225) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(250) NOT NULL,
  `url` varchar(225) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `duration` smallint(11) NOT NULL,
  `points` float NOT NULL,
  `order` mediumint(11) NOT NULL,
  `Own_by` int(30) unsigned NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `image`, `url`, `published`, `duration`, `points`, `order`, `Own_by`) VALUES
(1, 'The King Of PTC Websites', 'nstant Payments, Low Minimum, Profitable Upgrades and Rented Referrals, Point System, AdAlert.hhh', 'images/ads/807e94e750ce017e8d15312c076272a1.jpg', 'http://www.neobux.com/?r=idligo', 0, 120, 151.5, 1, 0),
(2, 'Get Your 30 DAYS Free Trial App', 'Get Your 30 DAYS Free Trial App', 'images/ads/cd97c55d4030717957a9741ace3fc661.jpg', 'http://charleslondi.theicanetworkapps.com', 0, 25, 2.5, 1, 0),
(3, 'More Than 20 Million Members', ' \nInstant Payments, Best Offers, AdAlert, Profitable Upgrades and Rented Referrals, Free Golden Upgrade If You''re active.', 'images/ads/b120331a3a795b1fc360136c64766d20.jpg', 'http://www.neobux.com/?r=idligo', 0, 3, 60, 1, 0),
(4, 'DFID Org', '	\r\nLessons(Guitar for Beginners), DVDs, CDs, Guitar Books, Sheet Music, Anthology Series Books, and more !', '', 'http://www.noad.com', 0, 0, 0, 1, 0),
(10, 'newadv', 'desc', 'images/ads/e60e781b8923eeeb7257ee2297a1bb33.png', 'http://myad.com', 0, 0, 0, 1, 0),
(11, 'newadv11', 'desc', '', 'http://myad.com', 1, 0, 0, 1, 0),
(12, 'اليوم السابع ', 'اخبار محليه ', 'images/ads/d8beb6495a38734bf8dc4bccb1f2d799.jpg', 'http://www.youm7.com', 0, 0, 0, 1, 0),
(13, 'اعلان جديد عل جوجل', '', 'images/ads/720a59768d88b32c057e4c8ecd5f3c7f.png', 'https://www.google.com.eg/?gfe_rd=cr&ei=8FSKVp-0M6is8weuwLqACA&gws_rd=ssl', 1, 0, 0, 1, 0),
(14, 'ads1', 'test', '', 'http://www.media.net/invite', 0, 1, 1, 1, 0),
(15, 'revenues ', 'test', '', 'http://www.revenuehits.com/lps/v41/?ref=@RH@uKaXpLeX_lxY--RikFyrvw', 1, 1, 0, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ads_rss_article`
--

CREATE TABLE IF NOT EXISTS `ads_rss_article` (
  `article_id` bigint(20) unsigned NOT NULL,
  `article_name` varchar(100) NOT NULL,
  `article_url` varchar(100) NOT NULL,
  `article_descr` varchar(560) NOT NULL,
  `date_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

CREATE TABLE IF NOT EXISTS `features` (
  `feature_id` bigint(20) unsigned NOT NULL,
  `product_id` decimal(10,0) NOT NULL,
  `image` varchar(100) NOT NULL,
  `size` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `points` float NOT NULL,
  `discount` int(11) NOT NULL,
  `is_feature` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`feature_id`, `product_id`, `image`, `size`, `company_id`, `points`, `discount`, `is_feature`) VALUES
(1, '1', 'images/products/e65a58df1b9774b5a5fc6f3cf029edc2.jpg', 0, 0, 222, 0, 0),
(2, '2', 'images/products/1bce378444bff3da11f1be9d3b520095.jpg', 0, 0, 50, 0, 0),
(3, '3', 'images/products/1c9bd1a0e0294144b54ef818df290e3e.jpg', 0, 0, 25, 0, 0),
(4, '4', 'images/products/ccd84992ab284f4ae1ea6e0ea82203c9.jpg', 0, 0, 25, 0, 0),
(5, '5', 'images/products/1128d65f4a9be3f983b7d8143fc37657.jpg', 0, 0, 15, 0, 0),
(6, '6', 'images/products/86f0ea88a44b055d3fcad50775247420.jpg', 0, 0, 50, 0, 0),
(7, '7', 'images/products/8336f2c6049ab3c6f7d3085286e6bf08.jpg', 0, 0, 25, 0, 0),
(8, '8', 'images/products/cce35a3970f591ca2d0a6481f483f708.jpg', 0, 0, 15, 0, 0),
(9, '9', 'images/products/1d606faff7fd2d3043df1008dc4ce001.jpg', 0, 0, 0, 0, 0),
(10, '11', 'images/products/54bb27544e5275e516776409768c6f03.png', 0, 0, 3, 0, 0),
(11, '12', 'images/products/c1cdfec5fc6fd119d00635870fbe025e.jpg', 0, 0, 25, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE IF NOT EXISTS `login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`) VALUES
(1, '2016-02-21', 0),
(2, '2016-02-21', 0),
(3, '2016-02-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`orderid`, `productid`, `quantity`, `price`) VALUES
(1, 9, 1, 1500),
(2, 9, 1, 1500),
(2, 1, 1, 18502),
(2, 11, 1, 200);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(50) unsigned NOT NULL,
  `title` varchar(125) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(25) NOT NULL,
  `image` varchar(250) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `cat_id` mediumint(11) NOT NULL,
  `points` mediumint(11) NOT NULL,
  `order` mediumint(11) NOT NULL,
  `feature_id` bigint(20) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `publish`, `cat_id`, `points`, `order`, `feature_id`) VALUES
(1, 'Lenovo ThinkPad Helix', 'Features :\nIntel Core i7-3667 U 2 G Hz\n8 G B D D R3\n180 G B Solid- State Drive\n11.6- Inch Screen\nWindows 8 Professional\nSpecifications\nBinding : Personal Computers Release Date : Publisher : Lenovo Model : 36984 R U Department : Color : Black Hardwar', 18502, 'images/products/e65a58df1b9774b5a5fc6f3cf029edc2.jpg', 1, 6, 222, 4, 0),
(2, 'Dell Alienware 18.4', 'Price: 67,997 EGP\nQty:\n\n1\n??\n ADD TO CART\n\n\n  \nPay 11333 EGP monthly for 6 monthsWhen you Install Item with More info \nCall Us 16546 \n100% Genuine \nDelivered In 8-21 Working Days  \nImported From USA \nFeatures :\nIntel Core i7-4940 M X processor ( Qua', 67997, 'images/products/1bce378444bff3da11f1be9d3b520095.jpg', 1, 6, 50, 1, 0),
(3, 'PANASONIC 460 2K/4K Dual HDMI Smart Network Multi System Blu Ray', 'PANASONIC 460 2K/4K Dual HDMI Smart Network Multi System Blu Ray Disc DVD Player 100~240V 50/60Hz for World-Wide Use - 6 Feet HDMI Cable is included', 2500, 'images/products/1c9bd1a0e0294144b54ef818df290e3e.jpg', 1, 6, 25, 3, 0),
(4, 'MICHAEL Michael Kors Women''s Ailee Studded Suede Smoking Flats', 'Features :\nSuede upper with allover golden studs\nRound toe; Slip-on styling\nLeather lining with padded footbed\nMan-made sole\n1/4 inch stacked heel\nSpecifications\nBinding : Apparel Release Date : Publisher : Model : 40 F3 A L F R2 S Department : women', 1581, 'images/products/ccd84992ab284f4ae1ea6e0ea82203c9.jpg', 1, 3, 25, 3, 0),
(5, 'Polo Ralph Lauren Men''s Churston Fashion Sneaker ', 'Features :\nMixed-material sneaker with cap toe, padded collar, and wraparound bumper sole\nSpecifications\nBinding : Shoes Release Date : Publisher : Polo Ralph Lauren Footwear Model : C H U R S T O N Department : mens Product Dimensions : Label : Polo', 911, 'images/products/1128d65f4a9be3f983b7d8143fc37657.jpg', 1, 3, 15, 2, 0),
(6, 'Apple IPhone 6s Plus 64 GB US Warranty Unlocked Cellphone', '', 8744, 'images/products/86f0ea88a44b055d3fcad50775247420.jpg', 1, 6, 50, 1, 0),
(7, 'NYX Cometics Butter Lipstick - Luxurious Satin Finish Lipsticks Net', 'Features :\nCrisper color from pure pigments\nC R E A M I E R F E E L from nourishing honey nectar\nSpecifications\nBinding : Misc. Release Date : Publisher : Maybelline New York Model : Department : Product Dimensions : Color : Yummy Plummy Label : Mayb', 31, 'images/products/8336f2c6049ab3c6f7d3085286e6bf08.jpg', 0, 1, 25, 25, 0),
(8, 'NYX Cometics Butter Lipstick - Luxurious Satin Finish Lipsticks Net Wt. 0.16 oz', '', 60, 'images/products/cce35a3970f591ca2d0a6481f483f708.jpg', 1, 1, 15, 15, 0),
(9, 'Audio-Technica ATH-M50x Professional Studio Monitor Headphones', 'Features :\nCritically acclaimed sonic performance praised by top audio engineers and pro audio reviewers\nProprietary 45 mm large-aperture drivers with rare earth magnets and copper-clad aluminum wire voice coils\nExceptional clarity throughout an exte', 1500, 'images/products/1d606faff7fd2d3043df1008dc4ce001.jpg', 1, 6, 0, 0, 0),
(11, 'coin', 'coin\n500\ntry\nthis\nproduct\nmulti\nline', 200, 'images/products/54bb27544e5275e516776409768c6f03.png', 0, 6, 3, 2, 0),
(12, 'new product', '', 1500, 'images/products/c1cdfec5fc6fd119d00635870fbe025e.jpg', 1, 2, 25, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products_cat`
--

CREATE TABLE IF NOT EXISTS `products_cat` (
  `id` mediumint(11) unsigned NOT NULL,
  `title` varchar(125) NOT NULL,
  `description` varchar(225) NOT NULL,
  `published` tinyint(1) NOT NULL,
  `parent_id` mediumint(9) DEFAULT NULL,
  `cat_image` varchar(150) NOT NULL,
  `main_menu` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products_cat`
--

INSERT INTO `products_cat` (`id`, `title`, `description`, `published`, `parent_id`, `cat_image`, `main_menu`) VALUES
(1, 'makup', 'desc', 1, NULL, '', NULL),
(2, 'clothes', '', 1, NULL, '', NULL),
(3, 'fashon', '', 0, NULL, '', NULL),
(4, 'sport', '', 1, NULL, '', NULL),
(6, 'Electronics', '', 1, NULL, '', NULL),
(7, 'sport', '', 1, NULL, '', NULL),
(8, 'testcat', 'testcattestcattestcattestcattestcattestcattestcattestcattestcattestcattestcat', 1, 1, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shipping_info`
--

CREATE TABLE IF NOT EXISTS `shipping_info` (
  `id` int(10) unsigned NOT NULL,
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_id` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(50) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `city` varchar(125) NOT NULL,
  `country` varchar(125) NOT NULL,
  `birthdate` date NOT NULL,
  `secret_question` varchar(125) NOT NULL,
  `secret_answer` varchar(125) NOT NULL,
  `image` varchar(250) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_contact` varchar(125) NOT NULL,
  `points` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `phone`, `city`, `country`, `birthdate`, `secret_question`, `secret_answer`, `image`, `payment_method`, `payment_contact`, `points`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', 'kkQos6Yxe2JXdeg3FSEIK.7a04a910a9e0ee2563', 1448836228, 'E0gnwFztqfEG1I/E8y8.i.', 1268889823, 1456329068, 1, 'Admin', 'istrator', '0', 'allaahamdy92@ymail.com', '0', '0000-00-00', '0', '0', '', '0', '0', 0),
(3, '127.0.0.1', NULL, '$2y$08$EgnRy3md.R80gUGGyOqONuwEvvYebTpYuQtRPMWybV6WuceZchC.m', NULL, 'lolo_aly92@ymail.com', NULL, NULL, NULL, NULL, 1448832829, NULL, 1, 'lol', 'lolo', '01236587', '', '', '0000-00-00', '', '', '', '', '', 0),
(4, '::1', NULL, '$2y$08$h1ZMla3z0blkqgY.Q5R26uTrIC1idZt.bt9S5vkeoZU6cZgzh3aRq', NULL, 'allaa@ymail.com', NULL, NULL, NULL, NULL, 1448915052, NULL, 1, 'allaa', 'aaaa', '0123658974', '', '', '0000-00-00', '', '', '', '', '', 0),
(5, '::1', NULL, '$2y$08$KhmTOKpDiFJpdl11ldf15OTkJonfXOxx6sn28rB3t4OD9GSUm6BjW', NULL, 'allaa11@ymail.com', NULL, NULL, NULL, NULL, 1448915101, NULL, 1, 'allaa', 'aaaa', '0123658974', '', '', '0000-00-00', '', '', '', '', '', 0),
(6, '::1', NULL, '$2y$08$aGOiEMKVytrRyPkgroV6euR2IjfM76TKxS.fThQ1F3am.KYB8Q4EO', NULL, 'lolo_aly9222@ymail.com', NULL, NULL, NULL, NULL, 1448915916, NULL, 1, 'allaa', 'lol', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 0),
(7, '::1', NULL, '$2y$08$88sQn1T8Qmom5AmxdJvojOxcaPJwEKerHdiMwy/yzBIDcJF1hDHiC', NULL, 'lolo_aly92282@ymail.com', NULL, NULL, NULL, NULL, 1448916131, NULL, 1, 'allaa', 'lol', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 0),
(8, '::1', NULL, '$2y$08$EPghLa.kOHChLc76hqB2Q.mmksUwG5dweZWyJRfel0nUZYEckh6mm', NULL, 'lolo_aly88@ymail.com', NULL, NULL, NULL, NULL, 1448916768, NULL, 1, 'allaa', 'lol', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 0),
(9, '::1', NULL, '$2y$08$PM.2o3vKuTwCC11MLMlLP.5idSXGL1MJq2PHXsAFn75SW15YTAp0u', NULL, 'lolo_aly88qq@ymail.com', NULL, NULL, NULL, NULL, 1448916830, NULL, 1, 'allaa', 'lolo', '0123654789', 'menouf', '', '0000-00-00', '', '', '', '', '', 0),
(11, '::1', NULL, '$2y$08$PU7pMQc4swTeA3u75d7ASuzjoVJZzCtWmXW4qPRI.Gj1eSELhDvvW', NULL, 'allaa@yahoo.com', NULL, NULL, NULL, NULL, 1449165429, 1449173432, 1, 'Allaa', 'Aly', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 3),
(12, '127.0.0.1', 'admin admin', '$2a$08$pf6tzl.DClFYnGSh.cuDpeuE/A67rzmyvGkpLC/TtQ6w3h1QR2.6q', NULL, 'admin@yahoo.com', NULL, NULL, NULL, NULL, 1449229769, 1449931370, 1, 'admin', 'admin', '0123654789', '', '', '2015-12-29', 'What is the last name of the teacher who gave you your first failing grade?', '', '11953236_1011190635607084_4948573390837609044_n.jpg', 'pay_pal', 'aa@gg.com', 89),
(13, '127.0.0.1', NULL, '$2a$08$6op0ccnIi2.yWnAmWPt5h.9bv5Ja7a7VafykbiecgfF8Nz1i1iTky', NULL, 'allaa@allaa.com', 'c8436200c6c70f9f0776d5393242950c02f64e11', NULL, NULL, NULL, 1449232320, 1449261907, 0, 'allaa', 'allaa', '012354888', 'menouf', 'menoufia', '2015-12-28', 'What is the last name of the teacher who gave you your first failing grade?', 'aanxdn', '11825605_1034548573222081_3119753191401518281_n.jpg', 'pay_pal', 'aa@aa.com', 0),
(14, '127.0.0.1', 'allaa aly', '$2y$08$gFZy7XFyT/bDatMixtaj9O3kYNSeTEQzLIuVudh0hfyRtlX48jDZi', NULL, 'allaahamdy92@ymail.com', NULL, NULL, NULL, NULL, 1449325965, 1454535528, 1, 'allaa', 'aly', '0123654789211', 'menouf1', '0', '0000-00-00', '0', '0', 'camera.jpg', '0', '0', 1542),
(15, '41.39.12.248', 'TEST MAX', '$2y$08$WchIJoL8XVt85vKtJYLDR.yvM.Gk7WoRTJeLh/.ysc4zONIuweQ6m', NULL, 'm@yahoo.com', NULL, NULL, NULL, NULL, 1452068873, 1452068917, 1, 'TEST', 'MAX', '4715192', '', '', '0000-00-00', '', '', '', '', '', 0),
(16, '156.173.145.215', 'test2 MAX', '$2y$08$W9E7oFYqsFTH/mhweS5hFOFHhlQB2E69D/kwH.ei9mYqFulNzP/Rq', NULL, 'test2@yahoo.com', NULL, NULL, NULL, NULL, 1452279044, 1454543463, 1, 'test2', 'MAX', '01065331142', '', '', '0000-00-00', '', '', '', '', '', 434),
(18, '41.217.162.143', 'new new', '$2y$08$SWnqAYejGVlxmfwD20eVQuuulbRgXKxwX0kNEE0B6Zl4xHjIVK9/m', NULL, 'allaahamdy222@ymail.com', NULL, NULL, NULL, NULL, 1452292285, NULL, 1, 'new', 'new', '0123645897', '', '', '0000-00-00', '', '', '', '', '', 0),
(19, '41.217.162.143', 'new new', '$2y$08$S/.o0jrt9RqVAg4Zcwyyvu62jdjY5Oue6BLqrFwoiC0rNrAXEKJcO', NULL, 'allaahamdy22@ymail.com', NULL, NULL, NULL, NULL, 1452293189, NULL, 1, 'new', 'new', '01236547', '', '', '0000-00-00', '', '', '', '', '', 0),
(20, '41.217.163.249', 'new new', '$2y$08$0cI2uKJb1ZcouVjCwMn/buGY1cDtXBIF.O.44KhZciNtKE0zEI40G', NULL, 'allaahamdy_new@ymail.com', NULL, NULL, NULL, NULL, 1452368994, 1454534416, 1, 'new', 'new', '012365479', 'allaahamdy92@ymail.com', '0', '0000-00-00', '0', '0', '10152633_1107677165923610_4956898531575555974_n.png', '0', '0', 25),
(21, '197.133.122.238', 'test3 MAX', '$2y$08$Whj.FyVVApSF9ia6v55GU.PkT0wFR2wfpuvSnEE06XqCv.0IgMsMi', NULL, 'doom4@yahoo.com', NULL, NULL, NULL, NULL, 1452369014, 1452369136, 1, 'test3', 'MAX', '01142931227', '', '', '0000-00-00', '', '', '', '', '', 85),
(22, '41.217.161.137', 'new new', '$2y$08$oSKqsI.iMXKjoZa9XpMinO0b15QUsyWSjmGNJ.Grhz5.wscq7Ed1.', NULL, 'allaahamdy2255@ymail.com', NULL, NULL, NULL, NULL, 1452625733, NULL, 1, 'new', 'new', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 0),
(23, '197.133.127.213', 'test3 xx', '$2y$08$mbt7Gh8q036bPFQWXtV6y.yvJWIkpkStRagVcxOaM7Lgp5o8rgele', NULL, 'test3@yahoo.com', NULL, NULL, NULL, NULL, 1453556327, 1453556365, 1, 'test3', 'xx', '012333332211', '', '', '0000-00-00', '', '', '', '', '', 0),
(24, '197.133.127.213', NULL, '$2y$08$NwxfQbk/mrI7mT5aQxVjJuo/cG4QPxcHlnSTaDmhE.Rw/7YRMW5SW', NULL, '1', NULL, NULL, NULL, NULL, 1453558634, NULL, 1, NULL, ' ', ' ', '', '', '0000-00-00', '', '', '', '', '', 0),
(25, '197.133.127.213', 'mahmoud', '$2y$08$xzLwRzyPO1FKWVTFDHTInOKp6uDRLv0kEdukX5KWRXKN86BRNXODG', NULL, 'goyahoo', NULL, NULL, NULL, NULL, 1453558704, NULL, 1, 'mahmoud', ' ', ' ', '', '', '0000-00-00', '', '', '', '', '', 0),
(26, '197.133.95.135', 'test5', '$2y$08$rT7q8RZ8pKvWxHaiyHsnt.vK59xmioNpkUBNdwv6p2L3hRtkpH9Zu', NULL, 'ms_ms25490%40yahoo.com', NULL, NULL, NULL, NULL, 1453560759, NULL, 1, 'kkkkkkkkkk', ' kkkkkkkkkkkkk', ' 011224474', '', '', '0000-00-00', '', '', '', '', '', 0),
(27, '197.133.95.135', 'test5', '$2y$08$nkTxdDslClSR2q62BpRtAObJCRVg8xDHDm8iXaY/EWYmP1oi/.l8i', NULL, 'admin', NULL, NULL, NULL, NULL, 1453560772, NULL, 1, 'kkkkkkkkkk', ' kkkkkkkkkkkkk', ' 011224474', '', '', '0000-00-00', '', '', '', '', '', 0),
(28, '197.133.95.135', 'mahmoud', '$2y$08$tutxFBX/XpDdFU2f3vChtONAi3I9pTR9Fbudi5KKi84SugsUFU6gW', NULL, 'tt%40yahoo.com', NULL, NULL, NULL, NULL, 1453561188, NULL, 1, 'test1', ' max', ' 012475893', '', '', '0000-00-00', '', '', '', '', '', 0),
(29, '197.133.95.135', 'mahmoud', '$2y$08$rN8ZTfYJaslwHF7AX7UwCu7tEM4EbVInQdnwp0szkg6RVKRFaM1Pa', NULL, 'tt1%40yahoo.com', NULL, NULL, NULL, NULL, 1453561222, NULL, 1, 'test1', ' max', ' 012475893', '', '', '0000-00-00', '', '', '', '', '', 0),
(30, '197.133.95.135', 'mahmoud', '$2y$08$E5GFXNBrNVp3313coxR1d.la23obcXpSkjr7M9JCUs7dZKxfnAeGC', NULL, 't5t%40yahoo.com', NULL, NULL, NULL, NULL, 1453563488, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(31, '197.133.95.135', 'mahmoud', '$2y$08$pxBBFyfuvzb3kawyXeclBO0ei0CjmkVxBEt6YOZZc7R3hMdf/e9jK', NULL, 'tt3%40yahoo.com', NULL, NULL, NULL, NULL, 1453563666, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(32, '197.133.95.135', 'mahmoud', '$2y$08$y0y9p0j9WkUo.oK/QBmFn.f/L7x8vRIKb4ACjU1./8ThlXN5hOpPm', NULL, 't9t%40yahoo.com', NULL, NULL, NULL, NULL, 1453563809, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(33, '197.133.95.135', 'mahmoud', '$2y$08$Cltux5RxMIjcO2gKr/lFD.rjo/JUHISF1GooW/itA82QBcbLkCfBu', NULL, 'ttt%40yahoo.com', NULL, NULL, NULL, NULL, 1453564001, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(36, '197.133.95.135', 'mahmoud', '$2y$08$5frwqxICXsVUYFuQYgUiQukhPHFoNCEHFipwQQraSQ.g5mswghnuq', NULL, 't7t%40yahoo.com', NULL, NULL, NULL, NULL, 1453564460, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(37, '197.133.95.135', 'mahmoud', '$2y$08$kMWNX8xAUe9WGcKSVfRlBejfBoDVAt4ZIEJ13ZeRFXY/IHFyMbDk2', NULL, 't333t%40yahoo.com', NULL, NULL, NULL, NULL, 1453564506, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(38, '197.133.95.135', 'mahmoud', '$2y$08$QwSrK55vxfp26YrM/gzHD.Pb0GYdLWZOilEiNMzeYG5hDbftOi3RC', NULL, 'tr%40yahoo.com', NULL, NULL, NULL, NULL, 1453565077, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(39, '197.133.95.135', 'mahmoud', '$2y$08$.Zd5rpHvysJ23jJff0chF.ej9N8Aa4lBPf9mvC3StUvor5rID7i/S', NULL, 'tett%40yahoo.com', NULL, NULL, NULL, NULL, 1453565418, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(41, '197.133.95.135', 'mahmoud', '$2y$08$TndRexy4sQ59iYk3Q1PaSO2o9soxbjb5cYVVQ9NJbQ.4ET/yM9NVi', NULL, 'mmm%40yahoo.com', NULL, NULL, NULL, NULL, 1453565655, NULL, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(42, '197.133.95.135', 'mahmoud', '$2y$08$2xx.IyAcRsaPbikYQn6QbOucbLy8GDGru3e0zFSDdKDq3kTbNQCe6', NULL, 'max%40yahoo.com', NULL, NULL, NULL, 'XoL8fFbbHU4y.rJ5Win3FO', 1453565684, 1453565685, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(43, '197.133.95.135', 'mahmoud', '$2y$08$Kl4/Jn94r3kQcrL1e.4HWO2ntC5w.JMvPmFggwKyk4Jh1ldd7Fxy6', NULL, 'ttd%40yahoo.com', NULL, NULL, NULL, 'IXjb6z1zrmbGHYlhGpTwAe', 1453565773, 1453565773, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(44, '197.133.95.135', 'mahmoud', '$2y$08$cZGaPuCzbeR5PIoZMBECxulAkc2mSJQ.HbkNABScGV2m.IB0kJw4W', NULL, 'twt%40yahoo.com', NULL, NULL, NULL, '4hcIKDkJ109HWZu7pdF5je', 1453565801, 1453565801, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(45, '197.133.95.135', 'mahmoud', '$2y$08$mecxYQ0C5g2.lGMtXimcPO9tgmZoXie7MYZTmXqqRkENwfpAzmkKa', NULL, 'trrt%40yahoo.com', NULL, NULL, NULL, NULL, 1453566019, 1453566020, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(46, '197.133.95.135', 'mahmoud', '$2y$08$Rv0uwGWZSLqd4GtBIgRqzOTqdtCqNeM7rmKgqVbbGCN/r.efUx9Pu', NULL, 'mahmoud123@yahoo.com', NULL, NULL, NULL, 'XMlX0GGnO.BcpQ/R02QF7O', 1453566211, 1453566835, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(51, '197.133.95.135', 'GO Mix', '$2y$08$7dZIazzkmNuWq23yuH658ukzD6YCfD8Q03830UmQvdItFEq1TcKTO', NULL, 'ms_ms25490@yahoo.com', NULL, NULL, NULL, NULL, 1453581910, 1456090732, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 60),
(52, '41.39.12.248', 'Mohammed Elshazly', '$2y$08$zM4yGU5tpyKMfPkv6ccFsupkIFRe2K/PxRZay8oob2beOx9wOHTtO', NULL, 'eng_shazly2011@yahoo.com', NULL, NULL, NULL, NULL, 1453640061, 1453640099, 1, NULL, NULL, NULL, '', '', '0000-00-00', '', '', '', '', '', 0),
(53, '41.217.162.41', 'Allaa Hamdy', '$2y$08$0xaSPJjKFotLAllk.7z.i.i5iheJs0EzMjrNZPgrvh2.tKbEkKP1C', NULL, 'allaahamdy11@ymail.com', NULL, NULL, NULL, NULL, 1453712697, 1454352039, 1, 'allaa11', 'aly11', '012365478911', 'menouf11', '0', '0000-00-00', '0', '0', '', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users--`
--

CREATE TABLE IF NOT EXISTS `users--` (
  `id` int(50) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `postalcode` int(25) NOT NULL,
  `country` varchar(125) NOT NULL,
  `city` varchar(125) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `image` varchar(125) NOT NULL,
  `pay_method` varchar(25) NOT NULL,
  `secret_question` varchar(125) NOT NULL,
  `secert_ans` varchar(125) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_history`
--

CREATE TABLE IF NOT EXISTS `user_history` (
  `id` int(50) unsigned NOT NULL,
  `user_id` int(50) unsigned NOT NULL,
  `adv_id` int(50) unsigned NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `clickable` tinyint(1) NOT NULL,
  `clicks_num` int(25) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_history`
--

INSERT INTO `user_history` (`id`, `user_id`, `adv_id`, `created`, `clickable`, `clicks_num`) VALUES
(1, 12, 1, '2015-12-12 12:22:41', 0, 15),
(59, 12, 2, '2015-12-11 12:31:22', 1, 0),
(70, 12, 3, '2015-12-11 19:55:57', 1, 0),
(71, 12, 4, '2015-12-11 20:33:03', 1, 0),
(72, 1, 1, '2016-01-23 11:36:38', 1, 0),
(73, 1, 12, '2016-01-04 09:06:21', 1, 0),
(74, 1, 10, '2016-01-04 09:08:09', 1, 0),
(75, 1, 11, '2016-01-04 09:08:23', 1, 0),
(76, 1, 2, '2016-01-05 06:58:17', 1, 0),
(77, 1, 4, '2016-01-04 10:14:20', 1, 0),
(78, 1, 13, '2016-01-04 11:21:20', 1, 0),
(79, 1, 3, '2016-01-12 18:49:15', 1, 0),
(80, 15, 2, '2016-01-06 08:28:59', 0, 2),
(95, 20, 15, '2016-01-09 19:52:38', 0, 3),
(96, 21, 2, '2016-01-09 19:53:56', 0, 2),
(97, 21, 4, '2016-01-09 20:00:54', 0, 0),
(98, 21, 3, '2016-01-09 21:00:46', 0, 0),
(99, 16, 1, '2016-02-03 22:49:20', 0, 1),
(100, 16, 2, '2016-02-03 22:49:33', 0, 1),
(101, 16, 15, '2016-01-20 14:02:17', 1, 0),
(102, 14, 1, '2016-01-25 12:26:05', 0, 9),
(103, 16, 3, '2016-01-20 14:02:17', 1, 0),
(106, 14, 3, '2016-01-20 11:21:22', 1, 0),
(107, 14, 11, '2016-01-16 20:42:40', 1, 0),
(108, 14, 4, '2016-01-16 20:43:05', 1, 0),
(109, 16, 10, '2016-02-03 22:50:00', 0, 1),
(110, 16, 11, '2016-01-17 12:59:08', 1, 0),
(111, 16, 12, '2016-01-17 13:04:27', 1, 0),
(112, 16, 14, '2016-01-20 14:02:17', 1, 0),
(119, 14, 2, '2016-01-20 11:21:22', 1, 0),
(120, 14, 14, '2016-01-20 11:21:22', 1, 0),
(121, 51, 1, '2016-02-03 20:27:39', 0, 1),
(122, 52, 1, '2016-01-24 05:55:24', 0, 1),
(123, 51, 3, '2016-02-03 20:26:56', 0, 1),
(124, 1, 15, '2016-01-25 03:03:09', 0, 2),
(125, 51, 2, '2016-02-03 13:26:58', 0, 1),
(126, 51, 13, '2016-02-16 12:21:21', 0, 1),
(127, 51, 12, '2016-02-16 19:21:37', 0, 0),
(128, 51, 14, '2016-02-21 21:30:53', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_rss_article`
--
ALTER TABLE `ads_rss_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`feature_id`), ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`), ADD KEY `cat_id` (`cat_id`), ADD KEY `state` (`publish`);

--
-- Indexes for table `products_cat`
--
ALTER TABLE `products_cat`
  ADD PRIMARY KEY (`id`), ADD KEY `parent_id` (`parent_id`);

--
-- Indexes for table `shipping_info`
--
ALTER TABLE `shipping_info`
  ADD PRIMARY KEY (`id`), ADD KEY `user_order` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD KEY `email` (`email`);

--
-- Indexes for table `users--`
--
ALTER TABLE `users--`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- Indexes for table `user_history`
--
ALTER TABLE `user_history`
  ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`), ADD KEY `adv_id` (`adv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(50) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `feature_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(50) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products_cat`
--
ALTER TABLE `products_cat`
  MODIFY `id` mediumint(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `shipping_info`
--
ALTER TABLE `shipping_info`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `users--`
--
ALTER TABLE `users--`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_history`
--
ALTER TABLE `user_history`
  MODIFY `id` int(50) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
