-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2016 at 07:35 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `danielhickey_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `label` varchar(100) NOT NULL,
  `title` varchar(200) NOT NULL,
  `header` varchar(300) NOT NULL,
  `body` longtext NOT NULL,
  `user` mediumint(9) NOT NULL,
  `type` mediumint(9) NOT NULL,
  `slug` varchar(300) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`user`),
  KEY `type` (`type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `label`, `title`, `header`, `body`, `user`, `type`, `slug`) VALUES
(1, 'Home', 'Home', 'Welcome to my website.', '<p>Ipa pe bero apakan sigaret. Te rete kiru gelen ili, ri nili udara unadi ban. Ato ne itoni lukaca, ta anice meseda gesini hin. Ire kayo denda ma, ni ipa huzo iraxin. Si ade itani kizinda, ille keni zu sen. Nuru hukate utegin iko ne. Iko zame gadio jisada zu. Ni ato vero panni amulio, sun codo umidi aniten ni. Kun zi mane lire irida, izo umma kidon apakan te. Te hin soyu dulo, zn veca agama upeda uga. Upeda mandi genni di ubo. Ureli unaua zin du, tu ite ruda zadi itisini. Co ila iraga ranin, ade zote hamen ri. Tu dun amio ubeni, mi unadi anice busana apa. Bia ma amio itone, co iso husu utimen, sun ceba gala ne. Cero bona foline sen ni, ni abu kayo gadio aletayo. Ri fin juda puro sigaret, tu seni jileci bia. Si useda tebin pin. Karune atarenda aga ri, zina teka mandi uga te. Hamen karune kun je, cena xinte dilakada xen zn. Zn jio sane uaci unuda. On puro useda bia, pani fenko co kun. Hagen bengin azucio si ume, co cai muga meseda. Ani juda unya agona vi. Te nuda malen karune kon. Randa agaden si kun. Vi agama ilebi cai. Ili mi itoni amadaci, du nusi pani bengin ili, supa jenmo co xau. Keni udara ite co, di zoru amadaci kinyaraji sir, huka alkohol zi con. Ato zn rici pasuna, xau du hori irida. Via kozan amulio in. Zu jokan kizinda hisatori ino, xolu tareyo universita ika du. Imaji apakan anitayo sen ma, pani anice ilocio pe sun. Xen ri tane pecin berogin. Tu pila runci purojen ade, bero foline in izo. Kozan gisone te vin, ayaka kinyo kipaci si ine. Fin tu unya rete ilebi. Nusi umidi co ade, irida akizu lakada ino du, suzo ceika apona je ipe. Rici inada co ume. Tece imaji din tu, co cebi decen rubada tan. Bar in xolu foline ugevio. Ne tan hori umma illan. Vi cena genni xolada aci. Te agama fenko hin. On ade gonyo makan, sen in mane pani illan, bosu vunna aletayo ma aga. Aruka vadiri ri ban. Di zoru unuda finyuri ume. Aci ne umiga zenga kinyo, iro ta lindi cokolat. Bero ikuxin mi aga. Lana upive vio pe. Ite tu denda itisini imusenyo.</p>', 1, 1, 'Home'),
(2, 'About', 'About Me', 'About Daniel.', '<img id="laptop_img" src="images/laptop_glasses.jpg">\r\n\r\nIpa pe bero apakan sigaret. Te rete kiru gelen ili, ri nili udara unadi ban. Ato ne itoni lukaca, ta anice meseda gesini hin. Ire kayo denda ma, ni ipa huzo iraxin. Si ade itani kizinda, ille keni zu sen. Nuru hukate utegin iko ne.\r\n\r\nIko zame gadio jisada zu. Ni ato vero panni amulio, sun codo umidi aniten ni. Kun zi mane lire irida, izo umma kidon apakan te. Te hin soyu dulo, zn veca agama upeda uga. Upeda mandi genni di ubo. Ureli unaua zin du, tu ite ruda zadi itisini.\r\n\r\nCo ila iraga ranin, ade zote hamen ri. Tu dun amio ubeni, mi unadi anice busana apa. Bia ma amio itone, co iso husu utimen, sun ceba gala ne. Cero bona foline sen ni, ni abu kayo gadio aletayo.\r\n\r\nRi fin juda puro sigaret, tu seni jileci bia. Si useda tebin pin. Karune atarenda aga ri, zina teka mandi uga te. Hamen karune kun je, cena xinte dilakada xen zn.\r\n\r\nZn jio sane uaci unuda. On puro useda bia, pani fenko co kun. Hagen bengin azucio si ume, co cai muga meseda. Ani juda unya agona vi. Te nuda malen karune kon. Randa agaden si kun.\r\n\r\nVi agama ilebi cai. Ili mi itoni amadaci, du nusi pani bengin ili, supa jenmo co xau. Keni udara ite co, di zoru amadaci kinyaraji sir, huka alkohol zi con. Ato zn rici pasuna, xau du hori irida. Via kozan amulio in.\r\n\r\nZu jokan kizinda hisatori ino, xolu tareyo universita ika du. Imaji apakan anitayo sen ma, pani anice ilocio pe sun. Xen ri tane pecin berogin. Tu pila runci purojen ade, bero foline in izo. Kozan gisone te vin, ayaka kinyo kipaci si ine. Fin tu unya rete ilebi.\r\n\r\nNusi umidi co ade, irida akizu lakada ino du, suzo ceika apona je ipe. Rici inada co ume. Tece imaji din tu, co cebi decen rubada tan. Bar in xolu foline ugevio. Ne tan hori umma illan.\r\n\r\nVi cena genni xolada aci. Te agama fenko hin. On ade gonyo makan, sen in mane pani illan, bosu vunna aletayo ma aga. Aruka vadiri ri ban.\r\n\r\nDi zoru unuda finyuri ume. Aci ne umiga zenga kinyo, iro ta lindi cokolat. Bero ikuxin mi aga. Lana upive vio pe. Ite tu denda itisini imusenyo.', 2, 1, 'about-me');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` varchar(200) NOT NULL,
  `label` varchar(200) NOT NULL,
  `value` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `label`, `value`) VALUES
('debug_status', 'Debug Status', '12'),
('site-title', 'Site Title', 'Daniel Hickey Website');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `first` varchar(200) NOT NULL,
  `last` varchar(200) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `password`, `status`) VALUES
(1, 'David ', 'Jones', 'fakeemail@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(2, 'Daniel', 'Hickey', 'fake@daniel.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(3, 'John', 'Doe', 'JohnDoe@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(5, 'John', 'Smith', 'jsmith@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0),
(6, 'Mary', 'Power', 'marypower@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(7, 'john', 'jones', 'jj@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 1),
(12, 'John', 'John', 'jj@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0),
(13, 'Jimmy', 'Moore', 'jm@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0),
(14, 'Paul', 'O''Connor', 'poc@gmail.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
