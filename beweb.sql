-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 20 Mars 2017 à 09:13
-- Version du serveur :  5.7.17-0ubuntu0.16.04.1
-- Version de PHP :  7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `beweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `beziers_contact_bw`
--

CREATE TABLE `beziers_contact_bw` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_contact_bw`
--

INSERT INTO `beziers_contact_bw` (`id`, `email`, `objet`, `message`, `date`) VALUES
(1, 'gfh@hjk.vil', 'ccc', 'suscipit tincidunt at in diam. Morbi et condimentum est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc quis maximus ligula. Mauris viverra, lectus molestie volutpat consectetur, neque elit mattis ante, non ultrices nisi mi id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eros nibh, hendrerit ac gravida sit amet, laoreet non tellus. In quis dui ut diam sagittis viverra. Proin efficitur eu metus sit amet laoreet. Integer non sapien in risus facilisis tempus ut vestibulum odio. Quisque mattis pharetra sapien, quis fermentum purus. Vestibulum auctor vitae est eu cursus. Cras et sem turpis. Etiam efficitur dui ut cursus ultricies.', 1486318938),
(2, 'gfh@hjk.vil', 'ccc', 't tincidunt at in diam. Morbi et condimentum est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc quis maximus ligula. Mauris viverra, lectus molestie volutpat consectetur, neque elit mattis ante, non ultrices nisi mi id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eros nibh, hendrerit ac gravida sit amet, laoreet non tellus. In quis dui ut diam sagittis viverra. Proin efficitur eu metus sit amet laoreet. Integer non sapien in risus facilisis tempus ut vestibulum odio. Quisque mattis pharetra sapien, quis fermentum purus. Vestibulum auctor vitae est eu cursus. Cras et sem turpis. Etiam efficitur dui ut cursus ultricies.', 1486319078);

-- --------------------------------------------------------

--
-- Structure de la table `beziers_landingpage_bw`
--

CREATE TABLE `beziers_landingpage_bw` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `position` tinyint(3) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_landingpage_bw`
--

INSERT INTO `beziers_landingpage_bw` (`id`, `titre`, `contenu`, `image`, `position`) VALUES
(1, 'Ecole', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo nibh eu laoreet interdum. Aliquam dignissim ultrices faucibus. Nulla rutrum maximus diam, quis porttitor sapien maximus quis. Nullam auctor magna id nisl luctus consectetur. Morbi finibus ante lorem, ut posuere velit vestibulum ac. Ut id vulputate eros. Maecenas eu dolor commodo, sagittis lectus ac, dapibus tellus. Proin eu ex et ante egestas malesuada. In hac habitasse platea dictumst. In ante arcu, mollis eget rhoncus tristique, egestas in libero. Sed pellentesque metus feugiat velit fermentum maximus.\r\n\r\nInteger iaculis sodales leo, et scelerisque enim dictum in. Aliquam erat volutpat. Cras id consequat velit. Maecenas ornare suscipit vestibulum. Donec vitae sodales leo, nec sodales nisi. Suspendisse elementum vel massa vel lobortis. Etiam fermentum urna quis elit posuere faucibus. Vivamus a dolor nunc. In vel turpis eget justo ornare auctor. Aliquam hendrerit molestie odio, at bibendum ante vehicula sit amet. Integer convallis nunc quis mi convallis congue. Praesent a vehicula turpis. Aenean lobortis semper turpis, id semper dui elementum eget. Donec augue mauris, scelerisque non dolor sed, viverra venenatis orci. Nulla finibus tincidunt elit eu molestie.', NULL, 0),
(2, 'Concept', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo nibh eu laoreet interdum. Aliquam dignissim ultrices faucibus. Nulla rutrum maximus diam, quis porttitor sapien maximus quis. Nullam auctor magna id nisl luctus consectetur. Morbi finibus ante lorem, ut posuere velit vestibulum ac. Ut id vulputate eros. Maecenas eu dolor commodo, sagittis lectus ac, dapibus tellus. Proin eu ex et ante egestas malesuada. In hac habitasse platea dictumst. In ante arcu, mollis eget rhoncus tristique, egestas in libero. Sed pellentesque metus feugiat velit fermentum maximus.\r\n\r\nInteger iaculis sodales leo, et scelerisque enim dictum in. Aliquam erat volutpat. Cras id consequat velit. Maecenas ornare suscipit vestibulum. Donec vitae sodales leo, nec sodales nisi. Suspendisse elementum vel massa vel lobortis. Etiam fermentum urna quis elit posuere faucibus. Vivamus a dolor nunc. In vel turpis eget justo ornare auctor. Aliquam hendrerit molestie odio, at bibendum ante vehicula sit amet. Integer convallis nunc quis mi convallis congue. Praesent a vehicula turpis. Aenean lobortis semper turpis, id semper dui elementum eget. Donec augue mauris, scelerisque non dolor sed, viverra venenatis orci. Nulla finibus tincidunt elit eu molestie.', '', 1);

-- --------------------------------------------------------

--
-- Structure de la table `beziers_menu_bw`
--

CREATE TABLE `beziers_menu_bw` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `titre` varchar(80) NOT NULL,
  `url` varchar(255) NOT NULL,
  `position` smallint(5) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_menu_bw`
--

INSERT INTO `beziers_menu_bw` (`id`, `titre`, `url`, `position`) VALUES
(6, 'Promos', '/404', 5),
(1, 'Ecole', '/#ecole', 0),
(2, 'Concept', '/#concept', 1),
(3, 'Partenaires', '/#partenaires', 2),
(4, 'Inscription', '/#inscription', 3),
(5, 'Contact', '/#contact', 4);

-- --------------------------------------------------------

--
-- Structure de la table `beziers_newsletter_bw`
--

CREATE TABLE `beziers_newsletter_bw` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_newsletter_bw`
--

INSERT INTO `beziers_newsletter_bw` (`id`, `email`, `date`) VALUES
(1, 'corin.alex@gmail.com', 1486227959),
(2, 'let@gmail.com', 1486318209),
(3, 'letailleur.emilie@gmail.com', 1486318980),
(4, 'bite@gmail.com', 1486319065),
(5, 'l@gmail.com', 1486370426);

-- --------------------------------------------------------

--
-- Structure de la table `beziers_partenaires_bw`
--

CREATE TABLE `beziers_partenaires_bw` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `titre` varchar(128) NOT NULL,
  `img` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `beziers_partenaires_bw`
--

INSERT INTO `beziers_partenaires_bw` (`id`, `titre`, `img`, `url`) VALUES
(1, 'Partenaire 1', 'img/logorange.png', 'http://www.orange.fr'),
(2, 'Partenaire 2', 'http://placehold.it/80x80', NULL),
(3, 'Partenaire 3', 'http://placehold.it/80x80', NULL),
(4, 'Partenaire 4', 'http://placehold.it/80x80', NULL),
(5, 'Partenaire 5', 'http://placehold.it/80x80', NULL),
(6, 'Partenaire 6', 'http://placehold.it/80x80', NULL),
(7, 'Partenaire 7', 'http://placehold.it/80x80', NULL),
(8, 'Partenaire 8', 'http://placehold.it/80x80', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `beziers_promos_bw`
--

CREATE TABLE `beziers_promos_bw` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date` int(10) UNSIGNED NOT NULL,
  `ville` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `beziers_trombi_bw`
--

CREATE TABLE `beziers_trombi_bw` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `lien_git` varchar(255) NOT NULL,
  `lien_portfolio` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `promo` smallint(5) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `beziers_contact_bw`
--
ALTER TABLE `beziers_contact_bw`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_landingpage_bw`
--
ALTER TABLE `beziers_landingpage_bw`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_menu_bw`
--
ALTER TABLE `beziers_menu_bw`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_newsletter_bw`
--
ALTER TABLE `beziers_newsletter_bw`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `beziers_partenaires_bw`
--
ALTER TABLE `beziers_partenaires_bw`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_promos_bw`
--
ALTER TABLE `beziers_promos_bw`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `beziers_trombi_bw`
--
ALTER TABLE `beziers_trombi_bw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `promo` (`promo`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `beziers_contact_bw`
--
ALTER TABLE `beziers_contact_bw`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `beziers_landingpage_bw`
--
ALTER TABLE `beziers_landingpage_bw`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `beziers_menu_bw`
--
ALTER TABLE `beziers_menu_bw`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `beziers_newsletter_bw`
--
ALTER TABLE `beziers_newsletter_bw`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `beziers_partenaires_bw`
--
ALTER TABLE `beziers_partenaires_bw`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `beziers_promos_bw`
--
ALTER TABLE `beziers_promos_bw`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `beziers_trombi_bw`
--
ALTER TABLE `beziers_trombi_bw`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `beziers_trombi_bw`
--
ALTER TABLE `beziers_trombi_bw`
  ADD CONSTRAINT `beziers_trombi_bw_ibfk_1` FOREIGN KEY (`promo`) REFERENCES `beziers_promos_bw` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
