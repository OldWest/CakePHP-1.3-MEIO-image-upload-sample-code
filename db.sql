-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 21, 2010 at 04:08 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `simple_cake_gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`) VALUES
(4, 'Summer Pictures'),
(3, 'Winter Pictures'),
(5, 'Fall Pictures'),
(6, 'Cake Pics');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gallery_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img_file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `gallery_id`, `name`, `img_file`) VALUES
(21, 4, 'New picture', 'DSC01242.JPG'),
(15, 4, 'The camper', 'DSC00061.JPG'),
(17, 5, 'The river', 'DSC01240.JPG'),
(18, 4, 'The great river 2', 'DSC01224.JPG'),
(19, 3, 'CSS on a trash can', 'DSC01208.jpg'),
(20, 6, 'River one two', 'DSC01248.JPG');
