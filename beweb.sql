-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 04 Février 2017 à 19:31
-- Version du serveur :  5.6.34
-- Version de PHP :  5.6.25

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
(1, 'Ecole', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque suscipit mi in iaculis rutrum. Fusce commodo massa sit amet justo ultrices aliquet. Integer in urna vitae dolor suscipit tincidunt at in diam. Morbi et condimentum est. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc quis maximus ligula. Mauris viverra, lectus molestie volutpat consectetur, neque elit mattis ante, non ultrices nisi mi id dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed eros nibh, hendrerit ac gravida sit amet, laoreet non tellus. In quis dui ut diam sagittis viverra. Proin efficitur eu metus sit amet laoreet. Integer non sapien in risus facilisis tempus ut vestibulum odio. Quisque mattis pharetra sapien, quis fermentum purus. Vestibulum auctor vitae est eu cursus. Cras et sem turpis. Etiam efficitur dui ut cursus ultricies.\r\n\r\nAliquam dignissim dui vel augue auctor, nec mattis ipsum consectetur. Morbi sit amet felis eu diam fermentum placerat. Nulla in tristique diam. Morbi scelerisque, diam id euismod ullamcorper, nibh tellus sagittis nulla, nec vestibulum ipsum purus sed felis. Nam pellentesque lobortis tortor, nec pellentesque ante interdum volutpat. Cras eu nisi laoreet, ultrices augue sit amet, dapibus nulla. Nunc pharetra, quam nec ullamcorper sagittis, libero augue lobortis magna, id sodales ligula augue nec urna. Vivamus placerat arcu in maximus lobortis. Integer pharetra mattis dolor non auctor. Ut bibendum eros sed tincidunt placerat. Duis sodales justo at metus egestas, sed blandit ante ornare. Nunc tempus risus malesuada, varius turpis at, sodales nibh. Morbi semper tortor sit amet tortor sodales pulvinar. Etiam aliquam porta mollis. Vestibulum placerat dapibus augue, sit amet sodales eros iaculis vitae. Vivamus sed ligula interdum, ullamcorper purus lacinia, blandit arcu. ', 'img/logorange.png', 0),
(2, 'Concept', 'Donec pulvinar sapien arcu. In sit amet mi ac tellus lacinia commodo eget eu leo. Maecenas egestas pulvinar ex, quis aliquam tellus convallis eget. Mauris eu dui et augue egestas maximus. Nulla congue fringilla faucibus. Maecenas non rutrum risus. Nullam vel est ac elit sagittis ultricies sed in nulla. Vivamus nec sapien at augue commodo imperdiet in sed mi.\r\n\r\nCras in nibh id odio dignissim cursus. Nullam a vulputate sem. Proin a dui dui. Mauris eget venenatis felis. Integer ut elit feugiat, hendrerit metus eget, euismod dolor. Phasellus maximus ligula elit. Aenean porta urna sit amet dolor imperdiet sollicitudin. Donec condimentum suscipit erat, sit amet aliquet dolor scelerisque quis. Cras tincidunt orci et ligula porta porttitor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec suscipit orci. Phasellus vulputate lorem ut eleifend ultrices. Maecenas mi lorem, venenatis sed vehicula sit amet, posuere id tortor. Fusce dapibus, sapien quis posuere fermentum, velit arcu convallis tellus, ac aliquam nulla enim non mi. Etiam vestibulum, libero quis pulvinar ultrices, odio neque eleifend velit, dapibus venenatis tortor risus et magna.\r\n\r\nNullam vehicula arcu nisl. Vestibulum at ultricies arcu. Etiam a pulvinar libero, eu placerat arcu. Curabitur mattis euismod pretium. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur mattis mi in metus gravida imperdiet et id ligula. Sed ut arcu ut sapien posuere scelerisque dictum id arcu. Integer efficitur nibh nibh, id porta mi rutrum id. Phasellus iaculis ipsum nec pellentesque venenatis. Curabitur vel sodales diam, vel euismod sem. Curabitur eget enim at odio vehicula convallis a quis massa. Nulla vitae scelerisque sapien. ', NULL, 1);

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
(1, 'corin.alex@gmail.com', 1486227959);

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
(1, 'Partenaire 1', 'http://placehold.it/80x80', 'http://google.fr'),
(2, 'Partenaire 2', 'http://placehold.it/80x80', NULL),
(3, 'Partenaire 3', 'http://placehold.it/80x80', NULL),
(4, 'Partenaire 4', 'http://placehold.it/80x80', NULL),
(5, 'Partenaire 5', 'http://placehold.it/80x80', NULL),
(6, 'Partenaire 6', 'http://placehold.it/80x80', NULL),
(7, 'Partenaire 7', 'http://placehold.it/80x80', NULL),
(8, 'Partenaire 8', 'http://placehold.it/80x80', NULL);

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
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `beziers_contact_bw`
--
ALTER TABLE `beziers_contact_bw`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `beziers_partenaires_bw`
--
ALTER TABLE `beziers_partenaires_bw`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
