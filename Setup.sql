-- phpMyAdmin SQL Dump
-- version 2.7.0-pl2
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Apr 14, 2011 at 04:51 AM
-- Server version: 5.0.18
-- PHP Version: 5.1.2
-- 
-- Database: `jibika_tk`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_apply`
-- 

CREATE TABLE `jibika_apply` (
  `id` int(255) NOT NULL auto_increment,
  `employer` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `pid` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `jibika_apply`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_ask`
-- 

CREATE TABLE `jibika_ask` (
  `id` int(255) NOT NULL auto_increment,
  `question` varchar(255) NOT NULL,
  `answere` varchar(255) NOT NULL,
  `prosnokari` varchar(255) NOT NULL,
  `uttorkari` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `jibika_ask`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_contact`
-- 

CREATE TABLE `jibika_contact` (
  `id` int(255) NOT NULL auto_increment,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `jibika_contact`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_counter`
-- 

CREATE TABLE `jibika_counter` (
  `id` int(255) NOT NULL auto_increment,
  `day` varchar(255) default '0',
  `month` varchar(255) default '0',
  `year` varchar(255) default '0',
  `date` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `jibika_counter`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_jobs`
-- 

CREATE TABLE `jibika_jobs` (
  `id` int(255) NOT NULL auto_increment,
  `job_title` varchar(255) NOT NULL,
  `job_details` varchar(255) NOT NULL,
  `deliver` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `post_time` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `jibika_jobs`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_message`
-- 

CREATE TABLE `jibika_message` (
  `id` int(255) NOT NULL auto_increment,
  `sender` varchar(255) NOT NULL,
  `recepient` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `jibika_message`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_network`
-- 

CREATE TABLE `jibika_network` (
  `id` int(255) NOT NULL auto_increment,
  `ip` varchar(255) NOT NULL,
  `ua` varchar(255) NOT NULL,
  `host` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `jibika_network`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_user`
-- 

CREATE TABLE `jibika_user` (
  `id` int(255) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `realname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `bmonth` varchar(255) NOT NULL,
  `byear` varchar(255) NOT NULL,
  `regdate` varchar(255) NOT NULL,
  `logintime` varchar(255) NOT NULL,
  `totallogin` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `ua` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `rank` varchar(255) NOT NULL default 'Employer',
  `bdt` varchar(255) NOT NULL default '0.00',
  `pbdt` varchar(255) NOT NULL default '0.00',
  `ip` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL default 'images/bg.gif',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `jibika_user`
-- 

INSERT INTO `jibika_user` VALUES (1, 'shuvo', 'Shadikur Rahman Shuvo', '123456', '+8801717707101', 'shadikurbd@gmail.com', 'male', 'Khulna', 'Jessore', 'Monirampur', '31', '12', '1991', '12  Apr  2011', '', '', '', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1b1) Gecko/20081007 Firefox/3.1b1', 'b23cd90c571bd70141e8b4bac604ccbe', '1302764633', 'Employer', '0.00', '0.00', '127.0.0.1', 'images/bg.gif');
INSERT INTO `jibika_user` VALUES (2, 'shuvo1', '', '123456', '', 'suranjitsharma@yahoo.com', 'Please select you sex', '', '', '', '', '', '', '13  Apr  2011', '', '', '', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.0 (KHTML, like Gecko) Chrome/3.0.187.1 Safari/531.0', 'cd836aa8bb8fc7e97819b2445652517c', '', 'Employer', '0.00', '0.00', '', 'images/bg.gif');
INSERT INTO `jibika_user` VALUES (3, 'suzon', '', '123456', '', 'shadikurbd@gmail.com', 'male', '', '', '', '', '', '', '13  Apr  2011', '', '', '', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.0 (KHTML, like Gecko) Chrome/3.0.187.1 Safari/531.0', '1aa2c984eed06fb067780ef2a1a4cab8', '1302723522', 'Employer', '0.00', '0.00', '127.0.0.1', 'images/bg.gif');
INSERT INTO `jibika_user` VALUES (4, 'shuvo3', '', '123456', '', 'shadikurbd@gmail.com', 'male', '', '', '', '', '', '', '13  Apr  2011', '', '', '', 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/531.0 (KHTML, like Gecko) Chrome/3.0.187.1 Safari/531.0', 'de7a2e2aec4d68dff397fce232dfb533', '', 'Employer', '0.00', '0.00', '', 'images/bg.gif');

-- --------------------------------------------------------

-- 
-- Table structure for table `jibika_withdraw`
-- 

CREATE TABLE `jibika_withdraw` (
  `id` int(255) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `bdt` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `jibika_withdraw`
-- 

