-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 11 Octobre 2013 à 01:46
-- Version du serveur: 5.5.32
-- Version de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `cloudwac`
--
CREATE DATABASE IF NOT EXISTS `cloudwac` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cloudwac`;

-- --------------------------------------------------------

--
-- Structure de la table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `path` text NOT NULL,
  `size` int(255) NOT NULL,
  `type` varchar(20) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_folder` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `files`
--

INSERT INTO `files` (`id`, `name`, `path`, `size`, `type`, `id_user`, `id_folder`) VALUES
(11, 'overweak.mp3', '5255b33199899overweak.mp3', 5041794, 'audio/mpeg', 5, NULL),
(14, 'impribm.wav', '5255ca0ad94c3impribm.wav', 77318, 'audio/wav', 7, 4),
(15, 'atk100.txt', '5256859dc8200atk100.txt', 4, 'text/plain', 7, 5),
(16, 'i04.png', '5256a3beae655i04.png', 33505, 'image/png', 7, 10),
(17, 'overweakNew.mp3', '5256a5095bdaeoverweakNew.mp3', 5041794, 'audio/mpeg', 7, 6),
(18, 'atk101.txt', '5256b02d0f389atk101.txt', 4, 'text/plain', 7, NULL),
(19, 'i04.png', '5257011d7202ci04.png', 33505, 'image/png', 8, NULL),
(20, 'atk101.txt', '5257020653d0catk101.txt', 4, 'text/plain', 8, 14),
(21, 'Histoire.txt', '52572bdee7474Histoire.txt', 1738, 'text/plain', 7, NULL),
(22, 'beautiful_morning-wallpaper-1366x768.jpg', '525734e97d6a6beautiful_morning-wallpaper-1366x768.jpg', 407538, 'image/jpeg', 11, NULL),
(23, 'Nouveau document texte.txt', '52573c37526f1Nouveau_document_texte.txt', 100, 'text/plain', 9, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `folders`
--

CREATE TABLE IF NOT EXISTS `folders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_parent` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Contenu de la table `folders`
--

INSERT INTO `folders` (`id`, `name`, `id_user`, `id_parent`) VALUES
(1, 'test', 5, NULL),
(2, 'Pics', 6, NULL),
(3, 'jossfolder1', 5, NULL),
(4, 'Musiques', 7, NULL),
(5, 'Fichiers textes', 7, NULL),
(6, 'Electro', 7, 4),
(7, 'Films', 7, NULL),
(8, 'Comedies', 7, 7),
(9, 'Underground', 7, 6),
(10, 'images', 7, NULL),
(11, 'Dub', 7, 6),
(12, 'Vitalic', 7, 6),
(13, 'Autre', 7, NULL),
(14, 'dossier 1', 8, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'login', 'Login privileges, granted after account confirmation'),
(2, 'admin', 'Administrative user, has access to everything.');

-- --------------------------------------------------------

--
-- Structure de la table `roles_users`
--

CREATE TABLE IF NOT EXISTS `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `roles_users`
--

INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES
(5, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1);

-- --------------------------------------------------------

--
-- Structure de la table `shares`
--

CREATE TABLE IF NOT EXISTS `shares` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_sender` int(255) NOT NULL,
  `id_receiver` int(255) NOT NULL,
  `id_file` int(255) NOT NULL,
  `token` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Contenu de la table `shares`
--

INSERT INTO `shares` (`id`, `id_sender`, `id_receiver`, `id_file`, `token`, `email`) VALUES
(1, 8, 7, 19, '36a97f1dfd740a8103c1ad2b453ddc11', ''),
(2, 8, 7, 19, '98dbe5c64b950fd8427bb8361199268d', ''),
(3, 8, 7, 19, '05e7fd996fdc45c6e73cdf558da29564', ''),
(4, 8, 7, 19, '9f697e6a3a90faee4eb3f2ca85f56440', ''),
(5, 8, 7, 19, '4d273d704c2c4d1d118fe5c711c3aa94', ''),
(6, 8, 7, 19, 'f87055a093d5b1d5f99a71e2e958505b', ''),
(7, 8, 7, 19, 'd72fc4ef95894d1788a11de477473f6f', ''),
(8, 8, 7, 19, '435d6792deabc2ac4c4b8b995fb0c9df', ''),
(9, 8, 7, 19, 'b02b752a9bcc4f3f4c5aa255f0029089', ''),
(10, 8, 7, 19, '932b59b8383c49a5604a67a779df5711', NULL),
(11, 8, 7, 19, '389fc5a91e950d3c957367b20a6c7a23', NULL),
(12, 7, 8, 14, '36af49a48a840e4cc564cef531b44ed9', NULL),
(13, 7, 8, 14, '792904ac6196e500aa156d5704a7b5f5', NULL),
(14, 7, 8, 14, '98dd8e641248df23680c7b1caf339e01', NULL),
(15, 7, 8, 14, '347072b4b66c4ddf99b9be657003fd63', NULL),
(16, 7, 8, 14, 'c3626c3f90ef48759d6569d80c82af62', NULL),
(17, 7, 8, 14, '1802c9e6a782f437f2146f54bb164ae9', NULL),
(18, 7, 8, 14, 'b6fbfbc0f54db5ec7b6c0ec8588d71dc', NULL),
(19, 7, 8, 14, 'c1772bd3e4d2a70eb3aecc71314cee85', NULL),
(20, 7, 8, 14, '5ed1aaa1de0d3f2c4e4edf89957dd82b', NULL),
(21, 7, 8, 14, 'c2b1dabbf19ec6251122e9eef8252eb0', NULL),
(22, 7, 8, 14, 'ecb8a1aa2b37b3bbc06e25a375c205b2', NULL),
(23, 7, 8, 14, 'ff3fa3d4ff7b021eaf14f2181f3d51f5', NULL),
(24, 7, 8, 14, '29954298aa966877fa5baa7be8c01acf', NULL),
(25, 7, 8, 14, '0fb72f10c4c8fdcc615e60e0b12622c8', NULL),
(26, 7, 8, 14, 'c0c1678030e0d7b7bee409e6dc0df17f', NULL),
(27, 11, 8, 22, 'c9a9328fd1a2312bba083b18b038bea0', NULL),
(28, 8, 12, 19, 'e01bd708d10646cb1da3a7cf40413340', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(127) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `logins`, `last_login`) VALUES
(5, 'aleluyaaaaa@aleluyaaaaa.com', 'joss', '61918278d66a18c9109fc19b8b10431f8e8f253b3087322417f74aba579e6fc6', 1, 1381314905),
(6, 'aleluyaajhkaaa@aleluyaaaaa.com', 'joss2', '61918278d66a18c9109fc19b8b10431f8e8f253b3087322417f74aba579e6fc6', 1, 1381314905),
(7, 'sqdsdqsd@dsqd.com', 'damien', 'd2ee7673fa13a6f1eb7fbc6b1c730ad85c83b44fc4ba49af299f75ceac94563f', 9, 1381448662),
(8, 'drackar@drackar.com', 'jojo', 'd2ee7673fa13a6f1eb7fbc6b1c730ad85c83b44fc4ba49af299f75ceac94563f', 7, 1381448585),
(9, 'qwerty@qwerty.com', 'luc', 'd2ee7673fa13a6f1eb7fbc6b1c730ad85c83b44fc4ba49af299f75ceac94563f', 1, 1381448725),
(10, 'sdfd@dfsd.com', 'pierre', 'd2ee7673fa13a6f1eb7fbc6b1c730ad85c83b44fc4ba49af299f75ceac94563f', 0, NULL),
(11, 'thomas@thomas.fr', 'thomas', 'd2ee7673fa13a6f1eb7fbc6b1c730ad85c83b44fc4ba49af299f75ceac94563f', 1, 1381446816),
(12, 'walid@walid.com', 'walid', 'd2ee7673fa13a6f1eb7fbc6b1c730ad85c83b44fc4ba49af299f75ceac94563f', 2, 1381448622);

-- --------------------------------------------------------

--
-- Structure de la table `user_tokens`
--

CREATE TABLE IF NOT EXISTS `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `roles_users`
--
ALTER TABLE `roles_users`
  ADD CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
