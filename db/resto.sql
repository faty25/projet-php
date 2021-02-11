-- phpMyAdmin SQL Dump
-- version 3.1.3
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Jeu 11 Février 2021 à 10:56
-- Version du serveur: 5.1.32
-- Version de PHP: 5.2.9-1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Base de données: `resto`
--

-- --------------------------------------------------------

--
-- Structure de la table `jour`
--

CREATE TABLE IF NOT EXISTS `jour` (
  `Lundi` varchar(100) NOT NULL,
  `Mardi` varchar(100) NOT NULL,
  `Mercredi` varchar(100) NOT NULL,
  `Jeudi` varchar(100) NOT NULL,
  `Vrendredi` varchar(100) NOT NULL,
  `Samedi` varchar(100) NOT NULL,
  `Dimanche` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `jour`
--

INSERT INTO `jour` (`Lundi`, `Mardi`, `Mercredi`, `Jeudi`, `Vrendredi`, `Samedi`, `Dimanche`) VALUES
('8h-21h', '8h-21h', '8h-21h', '8h-21h', '8h-21h', 'pas de service', 'pas de service'),
('8h-21h', '8h-21h', '8h-21h', '8h-21h', '8h-21h', 'pas de service', 'pas de service');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `plat` varchar(100) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`id`, `plat`, `prix`, `photo`) VALUES
(1, 'yassa-poisson', '1500', ''),
(2, 'mafé', '1000', ''),
(8, 'thiébe', '500', ''),
(4, 'yassa-poulet', '1500', ''),
(7, 'poulet', '2000', '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'kome', 'kome@mail.com', 'd9c7abd2f526dde65e7cf401a11fa19e17d1c45909cb13510693098e67c370f4'),
(2, 'gt', 'gt@mail.com', 'd9c7abd2f526dde65e7cf401a11fa19e17d1c45909cb13510693098e67c370f4'),
(3, 'modou', 'alick@gmail.com', 'd9c7abd2f526dde65e7cf401a11fa19e17d1c45909cb13510693098e67c370f4');
