-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 10 sep. 2022 à 20:02
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(44) NOT NULL,
  `pass` varchar(44) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `pass`, `image`) VALUES
(1, 'reda', 'abdo', 'rgdf@gmail.com', 'zqdqzd', '1077913960.png'),
(2, 'reda', 'louhi', 'sef@gmail.com', 'gyg', '1017494415.png'),
(3, 'drgdr', 'drgdr', 'sfs@gmail.com', 'dd21', '864563932.png'),
(4, 'reda', 'drgdr', 'sefs@gmail.com', 'dvd535d', '1261240627.png'),
(5, 'sfes', 'fsefse', 'abdo@gmail.com', '454', '2144568928.png'),
(6, 'reda', 'louhi', 'sefs@gmail.com', 'sefse', '1054251588.png'),
(7, 'REDA', 'LOUHI', 'info@erecovery.dz', '123456789', '358907186.png'),
(8, 'reda', 'louhi', 'sefs@gmail.com', 'sdfd', '740539865.png'),
(9, 'reda', 'louhi', 'sefs@gmail.com', 'ffgf', '199518909.png'),
(10, 'reda', 'louhi', 'sefs@gmail.com', 'ftht', '1447199713.png'),
(11, 'reda', 'louhi', 'sefs@gmail.com', 'sefse', '412521520.png'),
(12, 'reda', 'louhi', 'sefs@gmail.com', 'drgdr', '934133417.png'),
(19, 'reda', 'louhi', 'sefs@gmail.com', 'qzd', '1595168577.png'),
(20, 'reda', 'louhi', 'sefs@gmail.com', 'DGGDR', '634156554.png'),
(21, 'reda', 'louhi', 'sefs@gmail.com', 'qdz', '2027886674.png'),
(22, 'ab', 'qddvf', 'sefs@gmail.com', 'sef', '1443348808.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
