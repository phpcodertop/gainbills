-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2015 at 09:37 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `paid-ads`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(250) NOT NULL,
  `url` varchar(225) NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `image`, `url`, `published`) VALUES
(1, 'The King Of PTC Websites', 'nstant Payments, Low Minimum, Profitable Upgrades and Rented Referrals, Point System, AdAlert.hhh', 'images/ads/807e94e750ce017e8d15312c076272a1.jpg', 'http://www.neobux.com/?r=idligo', 0),
(2, 'Get Your 30 DAYS Free Trial App', 'Get Your 30 DAYS Free Trial App', '', 'http://charleslondi.theicanetworkapps.com', 0),
(3, 'More Than 20 Million Members', '	\r\nInstant Payments, Best Offers, AdAlert, Profitable Upgrades and Rented Referrals, Free Golden Upgrade If You''re active.', '', 'http://www.neobux.com/?r=idligo', 0),
(4, 'DFID Org', '	\r\nLessons(Guitar for Beginners), DVDs, CDs, Guitar Books, Sheet Music, Anthology Series Books, and more !', '', 'http://www.noad.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

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
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `login_attempts`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` mediumint(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL,
  `description` varchar(250) NOT NULL,
  `price` int(25) NOT NULL,
  `image` varchar(250) NOT NULL,
  `publish` tinyint(1) NOT NULL,
  `cat_id` int(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`, `publish`, `cat_id`) VALUES
(1, 'product1', 'desc', 125, 'images/products/f6a3b8b602d4ee768f3dd79590b4cad7.jpg', 0, 1),
(2, 'product2', 'desc2', 250, 'images/products/32fbd764925890007e37c3c3dae994a6.jpg', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `products_cat`
--

CREATE TABLE IF NOT EXISTS `products_cat` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `title` varchar(125) NOT NULL,
  `decsiption` varchar(225) NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `products_cat`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
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
  `coins` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `phone`, `city`, `country`, `birthdate`, `secret_question`, `secret_answer`, `image`, `payment_method`, `payment_contact`, `coins`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', 'kkQos6Yxe2JXdeg3FSEIK.7a04a910a9e0ee2563', 1448836228, NULL, 1268889823, 1450671504, 1, 'Admin', 'istrator', '0', '', '', '0000-00-00', '', '', '', '', '', 0),
(3, '127.0.0.1', NULL, '$2y$08$EgnRy3md.R80gUGGyOqONuwEvvYebTpYuQtRPMWybV6WuceZchC.m', NULL, 'lolo_aly92@ymail.com', NULL, NULL, NULL, NULL, 1448832829, NULL, 1, 'lol', 'lolo', '01236587', '', '', '0000-00-00', '', '', '', '', '', 0),
(4, '::1', NULL, '$2y$08$h1ZMla3z0blkqgY.Q5R26uTrIC1idZt.bt9S5vkeoZU6cZgzh3aRq', NULL, 'allaa@ymail.com', NULL, NULL, NULL, NULL, 1448915052, NULL, 1, 'allaa', 'aaaa', '0123658974', '', '', '0000-00-00', '', '', '', '', '', 0),
(5, '::1', NULL, '$2y$08$KhmTOKpDiFJpdl11ldf15OTkJonfXOxx6sn28rB3t4OD9GSUm6BjW', NULL, 'allaa11@ymail.com', NULL, NULL, NULL, NULL, 1448915101, NULL, 1, 'allaa', 'aaaa', '0123658974', '', '', '0000-00-00', '', '', '', '', '', 0),
(6, '::1', NULL, '$2y$08$aGOiEMKVytrRyPkgroV6euR2IjfM76TKxS.fThQ1F3am.KYB8Q4EO', NULL, 'lolo_aly9222@ymail.com', NULL, NULL, NULL, NULL, 1448915916, NULL, 1, 'allaa', 'lol', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 0),
(7, '::1', NULL, '$2y$08$88sQn1T8Qmom5AmxdJvojOxcaPJwEKerHdiMwy/yzBIDcJF1hDHiC', NULL, 'lolo_aly92282@ymail.com', NULL, NULL, NULL, NULL, 1448916131, NULL, 1, 'allaa', 'lol', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 0),
(8, '::1', NULL, '$2y$08$EPghLa.kOHChLc76hqB2Q.mmksUwG5dweZWyJRfel0nUZYEckh6mm', NULL, 'lolo_aly88@ymail.com', NULL, NULL, NULL, NULL, 1448916768, NULL, 1, 'allaa', 'lol', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 0),
(9, '::1', NULL, '$2y$08$PM.2o3vKuTwCC11MLMlLP.5idSXGL1MJq2PHXsAFn75SW15YTAp0u', NULL, 'lolo_aly88qq@ymail.com', NULL, NULL, NULL, NULL, 1448916830, NULL, 1, 'allaa', 'lolo', '0123654789', 'menouf', '', '0000-00-00', '', '', '', '', '', 0),
(11, '::1', NULL, '$2y$08$PU7pMQc4swTeA3u75d7ASuzjoVJZzCtWmXW4qPRI.Gj1eSELhDvvW', NULL, 'allaa@yahoo.com', NULL, NULL, NULL, NULL, 1449165429, 1449173432, 1, 'Allaa', 'Aly', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 3),
(12, '127.0.0.1', 'admin admin', '$2a$08$pf6tzl.DClFYnGSh.cuDpeuE/A67rzmyvGkpLC/TtQ6w3h1QR2.6q', NULL, 'admin@yahoo.com', NULL, NULL, NULL, NULL, 1449229769, 1449931370, 1, 'admin', 'admin', '0123654789', '', '', '2015-12-29', 'What is the last name of the teacher who gave you your first failing grade?', '', '11953236_1011190635607084_4948573390837609044_n.jpg', 'pay_pal', 'aa@gg.com', 89),
(13, '127.0.0.1', NULL, '$2a$08$6op0ccnIi2.yWnAmWPt5h.9bv5Ja7a7VafykbiecgfF8Nz1i1iTky', NULL, 'allaa@allaa.com', NULL, NULL, NULL, NULL, 1449232320, 1449261907, 1, 'allaa', 'allaa', '012354888', 'menouf', 'menoufia', '2015-12-28', 'What is the last name of the teacher who gave you your first failing grade?', 'aanxdn', '11825605_1034548573222081_3119753191401518281_n.jpg', 'pay_pal', 'aa@aa.com', 0),
(14, '127.0.0.1', 'allaa aly', '$2a$08$HRnK2noiFd5fONu/klnRkeUMZm3zA5MZXeN6Xn32Pg6PWDquWlrT.', NULL, 'allaahamdy92@ymail.com', NULL, NULL, NULL, NULL, 1449325965, 1450671403, 1, 'allaa', 'aly', '0123654789', '', '', '0000-00-00', '', '', '', '', '', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users--`
--

CREATE TABLE IF NOT EXISTS `users--` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
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
  `secert_ans` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users--`
--


-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  KEY `fk_users_groups_users1_idx` (`user_id`),
  KEY `fk_users_groups_groups1_idx` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

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
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `user_id` int(50) NOT NULL,
  `adv_id` int(50) NOT NULL,
  `created` datetime NOT NULL,
  `clickable` tinyint(1) NOT NULL,
  `clicks_num` int(25) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `adv_id` (`adv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `user_history`
--

INSERT INTO `user_history` (`id`, `user_id`, `adv_id`, `created`, `clickable`, `clicks_num`) VALUES
(1, 12, 1, '2015-12-12 14:22:41', 0, 15),
(16, 14, 2, '2015-12-09 20:57:55', 1, 0),
(59, 12, 2, '2015-12-11 14:31:22', 1, 0),
(69, 14, 1, '2015-12-11 00:57:42', 1, 0),
(70, 12, 3, '2015-12-11 21:55:57', 1, 0),
(71, 12, 4, '2015-12-11 22:33:03', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
