-- phpMyAdmin SQL Dump
-- version 3.1.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2013 at 07:03 PM
-- Server version: 5.1.30
-- PHP Version: 5.2.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `ci-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `pubdate` date NOT NULL,
  `body` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `slug`, `pubdate`, `body`, `created`, `modified`) VALUES
(1, 'Chuck is on the Tutsplus team!', 'Chuck-is-on-the-Tutsplus-team', '2012-10-15', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-26 21:57:59', '2012-10-26 21:57:59'),
(2, 'Darth Vader kills ten at Deathstar Canteen', 'Darth-Vader-kills-ten-at-Deathstar-Canteen', '2012-10-31', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-26 21:58:33', '2012-11-01 18:38:49'),
(4, 'This week''s special: Penne Arabiata', 'This-weeks-special-Penne-Arabiata', '2012-10-27', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-29 17:34:41', '2012-10-29 17:34:41'),
(5, 'Vader: "I can kill you with a single tought"', 'Vader-I-can-kill-you-with-a-single-tought', '2012-10-26', '<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>', '2012-10-29 17:35:53', '2012-10-29 17:36:08'),
(6, 'Head of catering resigns', 'Head-of-catering-resigns', '2012-10-29', '<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-29 17:36:47', '2012-10-29 17:36:47'),
(7, 'Jeff Vader autographs', 'Jeff-Vader-autographs', '2012-10-29', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>\n<p>Nullam eros odio, luctus et rutrum sed, varius ac enim. Aliquam nunc ante, lacinia sed porta nec, iaculis a ligula. Phasellus sagittis cursus purus, non interdum elit aliquam non. Nam lorem nibh, facilisis at scelerisque nec, tempus ac lacus maecena.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ut leo vitae urna eleifend fringilla. Ut tincidunt risus et orci viverra non accumsan urna bibendum. Fusce sagittis tortor eu justo fermentum egestas. Sed interdum, leo a tempus con.</p>', '2012-10-29 17:37:40', '2012-10-29 17:37:40');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0',
  `is_default` tinyint(4) DEFAULT '0',
  `slug` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `parent`, `is_default`, `slug`, `description`) VALUES
(1, 'uncategorized', 0, 0, 1, 'uncategorized', 'Uncategorized posts or pages'),
(2, 'Web Master', 0, 0, 0, 'web-master', 'Web Master'),
(3, '', 0, 0, 0, '', ''),
(4, '', 0, 0, 0, '', ''),
(5, '', 0, 0, 0, 'ok', 'okeoke'),
(8, '', 0, 0, 0, '', ''),
(9, '', 0, 0, 0, '', ''),
(12, '', 0, 0, 0, '', ''),
(13, '', 0, 0, 0, '', ''),
(14, '', 0, 0, 0, '', ''),
(15, '', 0, 0, 0, '', ''),
(16, '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('42aeb202bd08045cf6760b9a0c9e2348', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:16.0) Gecko/20100101 Firefox/16.0', 1351871956, ''),
('99f9b867cc0bb45d96ed3fd4bde6ec7a', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:17.0) Gecko/20100101 Firefox/17.0', 1356442718, ''),
('cdf8b48d6630bc9304144aa8ff6e7cd4', '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:16.0) Gecko/20100101 Firefox/16.0', 1352066404, 'a:5:{s:9:"user_data";s:0:"";s:4:"name";s:14:"Joost van Veen";s:5:"email";s:20:"joost@codeigniter.tv";s:2:"id";s:1:"2";s:8:"loggedin";b:1;}');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `value` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `value`) VALUES
(1, 'default_results', '10'),
(2, 'site_name', 'ACME'),
(3, 'site_slogan', ''),
(4, 'default_theme', 'default'),
(5, 'enable_register', '1'),
(6, 'site_company', 'ACME Inc.'),
(7, 'homepage_id', '0'),
(8, 'enable_forum', '0'),
(9, 'enable_gallery', '0'),
(10, 'name', 'site_company');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `files`
--


-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `version` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`version`) VALUES
(6);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `order` int(11) unsigned NOT NULL DEFAULT '0',
  `body` text NOT NULL,
  `parent_id` int(11) unsigned NOT NULL DEFAULT '0',
  `template` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `order`, `body`, `parent_id`, `template`) VALUES
(3, 'Contact', 'contact', 2, '<div class="span3"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>\n<div class="span9">\n<img src="assets/images/mac.jpg" >\n ', 3, 'pages'),
(4, 'About', 'about', 3, '<div class="span4">\n<h1>Heading</h1>\n\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\n\n<p><a href="#">View details &raquo;</a></p>\n</div>\n<div class="span4">\n<h2>Heading</h2>\n\n<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.</p>\n\n<p><a href="#">View details &raquo;</a></p>\n</div>\n<div class="span4">\n<h2>Heading</h2>\n\n<p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\n\n<p><a href="#">View details &raquo;</a></p>\n</div>\n', 3, 'page'),
(5, 'News archive', 'news', 4, '<div class="hero-unit">\n<div class="span4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\ntempor incididunt ut labore et dolore magna aliqua. </div>Ut enim ad minim veniam,\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. <a href="#" >Duis aute irure dolor in reprehenderit in voluptate velit esse\ncillum dolore eu fugiat nulla pariatur. </div>Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.\n</div>', 0, 'news_archive'),
(6, 'Contact Us', 'contact-us', 1, '<p>Demikian adalah Contact Us dari</p>\n\n<h1>kami adalah sesuatu yang dapat begitu</h1>\n\n<p>sehingga <strong>yang dapat kami sampaika</strong>n <s><em>adalah seperti ini</em></s></p>\n', 3, 'pages');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `category_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `is_published` tinyint(4) DEFAULT '1',
  `is_page` tinyint(4) DEFAULT '0',
  `slug` varchar(255) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT '0',
  `allow_comments` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category_id`, `created`, `updated`, `user_id`, `is_published`, `is_page`, `slug`, `is_deleted`, `allow_comments`) VALUES
(1, 'title', 'content', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, 0, '', 0, 0),
(2, 'asd', 'asd', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1, 1, 'asdas', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts_status`
--

CREATE TABLE IF NOT EXISTS `posts_status` (
  `idstatus` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  PRIMARY KEY (`idstatus`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `posts_status`
--

INSERT INTO `posts_status` (`idstatus`, `nama`) VALUES
(1, 'draft'),
(2, 'published'),
(3, 'not published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(2, 'joost@codeigniter.tv', 'a6145bc0c2d356ff36a8e15c995b04dc877e8cc69f1a57defefc7de465ba4509118d0f77a08685318715c31d40cd38f61403bd317d7b1a37591643246d69d4a8', 'Joost van Veen'),
(3, 'chucknorris@tutsplus.com', 'c5d67f50a18d13e56349d8d385944c6975e178555005ea8c12d003703d0139ccd1b92853858b91fd6688c9fa6c735d1dae9942e888727e735ca9e67f6f75a7e3', 'Chuck Norris');

-- --------------------------------------------------------

--
-- Table structure for table `user_ci`
--

CREATE TABLE IF NOT EXISTS `user_ci` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `level` int(4) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_ci`
--

INSERT INTO `user_ci` (`id`, `username`, `password`, `email`, `level`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@example.com', 1, '1');
