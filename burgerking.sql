-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 04 nov. 2022 à 16:05
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `burgerking`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id_category`, `category_name`) VALUES
(1, 'Sandwich'),
(2, 'Boisson froide'),
(3, 'Boisson chaude'),
(4, 'Menu');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_commande` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `type` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `name_menu` varchar(30) NOT NULL,
  `prix_menu` float NOT NULL,
  `img` tinytext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id_menu`, `name_menu`, `prix_menu`, `img`) VALUES
(1, 'MWII Whopper Cheese', 9, 'mwii whopper cheese.jpg'),
(2, 'MWII Veggie Whopper Cheese', 9.5, 'mwii veggie whopper.jpg'),
(3, 'Master Montagnard', 10, 'master montagnard.jpg'),
(4, 'Whopper', 8, '1menu-adulte+1king-junior.jpg'),
(5, 'Veggie Whopper', 8.5, '1menu-adulte+1king-junior.jpg'),
(6, 'Big King', 8.8, '1menu-adulte+1king-junior.jpg'),
(7, 'Master Bacon Grill ', 8.3, '1menu-adulte+1king-junior.jpg'),
(8, 'Double Steakhouse', 9.3, '1menu-adulte+1king-junior.jpg'),
(9, 'Double Cheese Bacon XXL', 9.1, '1menu-adulte+1king-junior.jpg'),
(10, 'King Junior', 5.5, '1menu-adulte+1king-junior.jpg'),
(11, 'King Junior Plus', 7, '1menu-adulte+1king-junior.jpg'),
(12, '1 Menu Adulte + 1 Menu Junior', 13, '1menu-adulte+1king-junior.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `name_product` varchar(20) NOT NULL,
  `prix_product` float NOT NULL,
  `description_product` text NOT NULL,
  `id_category` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id_product`, `name_product`, `prix_product`, `description_product`, `id_category`) VALUES
(1, 'Coca-Cola', 2, '50cl', 2),
(2, 'Lipton Green Ice Tea', 2, '50cl', 2),
(3, 'Fanta goût original ', 2, '50cl', 2),
(4, 'Expresso', 2, 'Expresso Lavazza', 3),
(5, 'Café Latté', 2, 'Café Latté Lavazza', 3),
(6, 'Thé vert menthe', 2, 'Thé vert menthe', 3),
(7, 'Hamburger', 2.5, 'Sandwich', 1),
(8, 'Whopper', 5.5, 'Sandwich, steak', 1),
(9, 'Steakhouse', 5.5, 'Sandwich, steak, BBQ', 1),
(10, 'Cheeseburger', 4, 'Sandwich, steak', 1),
(11, 'Fishburger', 4, 'Sandwich, poisson', 1),
(12, 'Master Montagnard', 7.5, 'Sandwich, steak, raclette', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `role` tinyint(1) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
