-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 31 déc. 2021 à 19:07
-- Version du serveur : 10.4.20-MariaDB
-- Version de PHP : 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `demo`
--

-- --------------------------------------------------------

--
-- Structure de la table `loginform`
--

CREATE TABLE `loginform` (
  ` ID` int(11) NOT NULL,
  `User` varchar(25) NOT NULL,
  `Pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `loginform`
--

INSERT INTO `loginform` (` ID`, `User`, `Pass`) VALUES
(1, 'Abdo', 'admin'),
(2, 'reda', 'admin2');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telnum` varchar(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`username`, `password`, `email`, `telnum`, `id`) VALUES
(' rz\"rz\"', '\"zrz\"r', 'reda@gmail.com', '.41514', 89683),
(' ZEFS', 'SEFSEF', 'reda@gmail.com', '37896378', 89684),
(' QZGFQZE', 'QZFGZEF', 'reda@gmail.com', '85', 89685),
(' FVzecS<', 'CFCQZ', 'reda@gmail.com', '27885527', 89686),
(' azdaz', 'dazdaz', 'reda@gmail.com', '78578', 89693),
(' fzef', 'zefze', 'reda@gmail.com', '78678', 89694),
(' zefez', 'fzefze', 'reda@gmail.com', '373463', 89695),
(' zfze', 'zefze', 'reda@gmail.com', '635436', 89697),
(' efse', 'fsefse', 'reda@gmail.com', '578578578', 89698),
(' qzd', 'qdz', 'jiji@gmail.com', '786786786', 89700),
(' fzefez', 'ezfze', 'reda@gmail.com', '7852785', 89701),
(' dqzd', 'dqzd', 'reda@gmail.com', '7858', 89708);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (` ID`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `loginform`
--
ALTER TABLE `loginform`
  MODIFY ` ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89709;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
