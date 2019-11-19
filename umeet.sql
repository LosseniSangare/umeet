-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 27 sep. 2019 à 08:42
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `umeet`
--

-- --------------------------------------------------------

--
-- Structure de la table `autorisations`
--

CREATE TABLE `autorisations` (
  `id` smallint(6) NOT NULL,
  `code` varchar(200) NOT NULL,
  `destinataire_email` varchar(200) NOT NULL,
  `utilisation` varchar(15) NOT NULL DEFAULT 'inscription'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `autorisations`
--

INSERT INTO `autorisations` (`id`, `code`, `destinataire_email`, `utilisation`) VALUES
(1, 'ahdhiduçu26d5adf5e5f', 'keassagbehe@gmail.com', 'inscription');

-- --------------------------------------------------------

--
-- Structure de la table `comites`
--

CREATE TABLE `comites` (
  `id` int(11) NOT NULL,
  `intitule` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `comites`
--

INSERT INTO `comites` (`id`, `intitule`) VALUES
(1, 'Comité d\'organisation local '),
(2, 'Comité d\'organisation global'),
(3, 'Comité d\'organisation exterieur');

-- --------------------------------------------------------

--
-- Structure de la table `etapes`
--

CREATE TABLE `etapes` (
  `id` int(11) NOT NULL,
  `etape_date` date NOT NULL,
  `contenu` text NOT NULL,
  `ordre` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etapes`
--

INSERT INTO `etapes` (`id`, `etape_date`, `contenu`, `ordre`) VALUES
(27, '2019-08-10', 'kacytb cznb czhgèhdz cçuij', 10),
(35, '2019-08-11', 'kélfjuy éyu-èy ,yzèdén ,y_fy ufçé', 11),
(36, '2019-08-24', 'luiyutrt ,u_è_ià  iç__nuçnç_', 12),
(37, '2019-08-25', 'liçuj jhu jçui uçi  iuài , iuç_u à)o) ,hg             bhç_u ,niyh', 13),
(38, '2019-08-18', ':uiy kjt-rn f(edf tnv-èt  ge b(( ed ', 14);

-- --------------------------------------------------------

--
-- Structure de la table `hebergement`
--

CREATE TABLE `hebergement` (
  `id` int(11) NOT NULL,
  `logement` varchar(200) NOT NULL,
  `distance` int(11) NOT NULL,
  `oc_simple` int(11) NOT NULL,
  `oc_double` int(11) NOT NULL,
  `quote` tinyint(4) NOT NULL,
  `site` varchar(200) NOT NULL DEFAULT '#'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `hebergement`
--

INSERT INTO `hebergement` (`id`, `logement`, `distance`, `oc_simple`, `oc_double`, `quote`, `site`) VALUES
(11, 'Hetel Pahady', 30, 5000, 9000, 2, '#'),
(12, 'OODUY UYT6S U87US ', 10, 30000, 52000, 3, ''),
(13, 'hotel Belman', 13, 40000, 70000, 5, 'hotelbelman.ci'),
(14, 'nouvel hotel', 10, 30000, 50000, 4, '');

-- --------------------------------------------------------

--
-- Structure de la table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `infos`
--

INSERT INTO `infos` (`id`, `titre`, `contenu`, `dates`) VALUES
(2, 'COTE D\\\'IVOIRE: LE CORPS DE DJ ARAFAT DETERRE. ', '          Le corps de l\\\'artiste ivoirien Dj Arafat a été déterre par ses fans qui selon eux ne croyant pas à sa mort, voulaient bien voir le corps pour croire.     ', '2019-08-31 20:44:06'),
(3, 'Résultats BTS 2019 Côte d’Ivoire : à consulter sur bts.mesrs-ci.net', 'Les résultats du BTS 2019 en Côte d’Ivoire sont consultables en ligne, comme c’est le cas depuis de nombreuses années. Les candidats au brevet de technicien supérieur auront juste besoin de leur numéro matricule pour consulter les délibérations disponibles sur la plateforme de l’examen mise en place par le ministère de l’enseignement supérieur et de la recherche scientifique.', '2019-08-31 22:17:29'),
(5, '  Côte d’Ivoire : Violents affrontements entre chinois et policiers à Williamsville, après l’enterrement de DJ Arafat.', '  La cause de ces incidents est simple : par mesure de sécurité, les organisateurs ont conseillé aux fans présents au sein du stade Félix Houphouët-Boigny où a été organisée la veillée artistique, de s’abstenir d’effectuer en masses, le déplacement au cimetière de Williamsville.', '2019-08-31 22:28:52');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `comite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `comite`) VALUES
(1, 'KOUAME', 'N\'GORAND RICHARD de yop', 1),
(2, 'SANGARE', 'AMADOU LOSSENI', 2),
(3, 'YAO', 'Kouakou affoué marina laurence', 1),
(5, 'CISSE', 'ALLIOU', 1),
(7, 'coul', 'siaal', 2),
(10, 'CISSE', 'ISAC', 2),
(12, 'coul', 'ALLIOU', 3),
(13, 'CISSE', 'Kouakou affoué marina laurence', 3),
(15, 'LOSS', 'AMADOU LOSSENI', 4),
(16, 'ishola', 'obedi de Versailles', 4),
(20, 'YAO', 'ISAC', 3);

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(250) NOT NULL,
  `email` varchar(150) NOT NULL,
  `objet` varchar(150) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `thematiques`
--

CREATE TABLE `thematiques` (
  `id` smallint(6) NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL,
  `ordre` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `thematiques`
--

INSERT INTO `thematiques` (`id`, `titre`, `contenu`, `ordre`) VALUES
(8, '    L\\\'exode rurale', '    Comment lutter efficacement contre le phénomène.  ', 1),
(9, 'Enjeux du colloque ', 'Quel est l\\\'enjeu du colloque selon vous ?', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenoms` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `habilitation` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenoms`, `email`, `password`, `tel`, `habilitation`) VALUES
(4, 'GBEHE', 'KEASSA BONAVENTURE', 'keassagbehe@gmail.com', 'c10d67fc0e9ffceb73b126ace8d1192f', '+22578320993', 'standard');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `autorisations`
--
ALTER TABLE `autorisations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comites`
--
ALTER TABLE `comites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etapes`
--
ALTER TABLE `etapes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hebergement`
--
ALTER TABLE `hebergement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comite` (`comite`),
  ADD KEY `comite_2` (`comite`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `thematiques`
--
ALTER TABLE `thematiques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `autorisations`
--
ALTER TABLE `autorisations`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `comites`
--
ALTER TABLE `comites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `etapes`
--
ALTER TABLE `etapes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `hebergement`
--
ALTER TABLE `hebergement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `thematiques`
--
ALTER TABLE `thematiques`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
