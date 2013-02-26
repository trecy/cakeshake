-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le : Mar 26 Février 2013 à 10:16
-- Version du serveur: 5.5.16
-- Version de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cakeshake`
--

-- --------------------------------------------------------

--
-- Structure de la table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_from` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `sent` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `chats`
--

INSERT INTO `chats` (`id`, `user_from`, `user_to`, `message`, `sent`) VALUES
(1, 1, 3, 'Bonjour', '2013-02-25 20:17:00'),
(2, 3, 1, 'Salut', '2013-02-25 20:18:00'),
(3, 1, 3, 'Tu aimes les tomates ?', '2013-02-25 20:18:00'),
(4, 3, 1, 'Oui beaucoup', '2013-02-25 20:18:00'),
(5, 1, 3, 'Tu es mon Ã¢me soeur souhaites-tu entretenir une relation coitale rÃ©guliÃ¨re avec ma personne ?', '2013-02-25 20:18:00'),
(6, 3, 1, 'Avec plaisir, cordialement', '2013-02-25 20:21:00');

-- --------------------------------------------------------

--
-- Structure de la table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) NOT NULL,
  `legende` text NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `pictures`
--

INSERT INTO `pictures` (`id`, `url`, `legende`, `user_id`) VALUES
(1, 'https://www.facebook.com/photo.php?fbid=3275334456106&set=o.129707217137362&type=1&theater', 'G SUI RISTERION', 1);

-- --------------------------------------------------------

--
-- Structure de la table `quizzes`
--

CREATE TABLE IF NOT EXISTS `quizzes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `quizzes`
--

INSERT INTO `quizzes` (`id`, `question`, `answer`) VALUES
(1, 'Combien font 2 + 2 ?', '4'),
(2, 'Les jambes de la soeur de Philippe sont-elles douces ?', 'Oh que oui !');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sex` varchar(30) NOT NULL,
  `birthdate` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `email`, `sex`, `birthdate`) VALUES
(1, 'Thomas', 'pass', 'thomas@guilleminot.com', 'Homme', '1993-03-30 20:09:00'),
(2, 'Clara', 'pass', 'clara@hinton.com', 'Femme', '2013-02-25 20:10:00'),
(3, 'jeremy', 'pass', 'jeremy@cambot.com', 'Homme', '2013-02-25 20:10:00'),
(4, 'trÃ©cy', 'pass', 'trecy@fournier.com', 'Femme', '2013-02-25 20:11:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
