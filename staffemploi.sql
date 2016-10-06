-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 29 Septembre 2016 à 16:52
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `staffemploi`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `valeuradmin` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `valeuradmin`) VALUES
(1, 'laureatn', 'motdepasse', 123123);

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `corps` varchar(500) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `date`, `categorie`, `corps`, `ville`, `nom`, `mail`, `mobile`) VALUES
(1, 'Recherche un babysitteur', '16-02-2016', 'baby-sitting', 'Salut je recherche qquelqu''un je suis au top', 'Paris', 'deve', 'gourou@gmail.com', '021554678');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `objet` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  `descriptif` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `mail`, `objet`, `date`, `descriptif`) VALUES
(1, 'azeaze', 'azeaze@azeaze', 'suggestions', '0000-00-00', 'oulala c esrt la fin'),
(2, 'diouri', 'diouri@yourou.com', 'suggestions', '03-03-2016', 'JE vous contacte pour ovus anovzv');

-- --------------------------------------------------------

--
-- Structure de la table `disponibilite`
--

CREATE TABLE IF NOT EXISTS `disponibilite` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date_debut` varchar(20) NOT NULL,
  `date_fin` varchar(20) NOT NULL,
  `lundi` varchar(50) NOT NULL,
  `mardi` varchar(50) NOT NULL,
  `mercredi` varchar(50) NOT NULL,
  `jeudi` varchar(50) NOT NULL,
  `vendredi` varchar(50) NOT NULL,
  `samedi` varchar(50) NOT NULL,
  `dimanche` varchar(50) NOT NULL,
  `id_worker` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `disponibilite`
--

INSERT INTO `disponibilite` (`id`, `date_debut`, `date_fin`, `lundi`, `mardi`, `mercredi`, `jeudi`, `vendredi`, `samedi`, `dimanche`, `id_worker`) VALUES
(1, '02/10/2016', '02/26/2016', '0', '0', '0', '0', '0', '0', '0', '3'),
(2, '01/29/2016', '02/29/2016', 'matin', 'jour', 'soir', 'soir', 'soir', 'jour', 'soir', '4');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE IF NOT EXISTS `entreprise` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) NOT NULL,
  `secteur_activite` varchar(30) NOT NULL,
  `ville` varchar(30) NOT NULL,
  `adresse` varchar(30) NOT NULL,
  `cp` int(5) NOT NULL,
  `siteweb` varchar(50) NOT NULL,
  `contact_prenom` varchar(30) NOT NULL,
  `contact_nom` varchar(30) NOT NULL,
  `contact_telephone` varchar(30) NOT NULL,
  `contact_email` varchar(30) NOT NULL,
  `siret` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `credits` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `nom`, `secteur_activite`, `ville`, `adresse`, `cp`, `siteweb`, `contact_prenom`, `contact_nom`, `contact_telephone`, `contact_email`, `siret`, `login`, `password`, `credits`) VALUES
(1, 'Magenta', 'Magenta', 'Magenta', 'Magenta', 75000, 'Magenta', 'Magenta', 'Magenta', 'Magenta', 'Magenta', '', '', '', NULL),
(3, 'kn,lknaa', 'nklaa', 'klna', 'lkn', 0, '', 'lkn', 'lkn', 'lkn', 'lkn', 'nlkn', 'goodgood', 'motmot', NULL),
(4, 'erererer', 'nmkn', 'mknmknmk', 'nmknm', 0, '', 'knmk', 'nmknm', 'nmkn', 'mknmkn', 'mkn', 'ayaya', 'ydEPFL2013@', NULL),
(8, 'azeazeaze', 'zetezgz', 'gezgzeg', 'zegzgez', 0, '', 'gzegzeg', 'gezeg', 'egzzeg', 'zegzegzeg', 'zegezg', 'azeazeaze', '123456', NULL),
(9, 'omgomg', 'omgomg', 'paris', 'rue des jouqui', 75004, 'mayahaha@hohoh?com', 'rodolph', 'ramirez', '05241565', 'ipsuipsum@gmail.com', '456423132456487', 'goulou', 'motdepasse', NULL),
(10, 'loulou', 'oulalalal', 'paris', '2 rue soyer', 92200, '', 'younes', 'diouri', '0512456789', 'rzmokgmzrkg', '54654056405640', 'ramirez', 'diouriyouri', NULL),
(11, 'hello', 'damlzk', 'mlkdalfkml', 'kfmlkfmlek', 0, '', 'mlfkezmlfkezm', 'kmlfezkmlzekf', 'kfzemlkfmzlk', 'melfkzlefk', 'lmdkzamldk', 'gataga', 'diouriyouri', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `manager`
--

CREATE TABLE IF NOT EXISTS `manager` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nb_worker` int(10) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `valeurmanager` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `manager`
--

INSERT INTO `manager` (`id`, `login`, `password`, `nom`, `prenom`, `nb_worker`, `mail`, `valeurmanager`) VALUES
(1, 'jesuis', 'ouioui', 'ambassadeurazeaze', 'letest', 12, 'ilaunemail@oui.com', 246541);

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `date` varchar(20) NOT NULL,
  `descriptif` text NOT NULL,
  `titre` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`id`, `date`, `descriptif`, `titre`) VALUES
(1, '2016-03-02', 'Soiree Haloween', 'Amusement'),
(3, '', 'une lettre Ã  la poste', 'azeaze'),
(4, '12-02-2016', 'soucis Ã  la poste', 'azeaze'),
(5, '07-03-2016', 'Start up confÃ©rence', 'Event');

-- --------------------------------------------------------

--
-- Structure de la table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nom_entreprise` varchar(30) NOT NULL,
  `id_worker` int(10) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `purchase`
--

INSERT INTO `purchase` (`id`, `nom_entreprise`, `id_worker`, `date`) VALUES
(1, 'Staff-emploi', 9, '16-02-2016');

-- --------------------------------------------------------

--
-- Structure de la table `worker`
--

CREATE TABLE IF NOT EXISTS `worker` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `date_naissance` varchar(20) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `cp` int(5) NOT NULL,
  `metier` varchar(20) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `mail` varchar(30) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `credits` int(10) DEFAULT NULL,
  `manager_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Contenu de la table `worker`
--

INSERT INTO `worker` (`id`, `prenom`, `nom`, `ville`, `date_naissance`, `adresse`, `cp`, `metier`, `telephone`, `mail`, `login`, `password`, `credits`, `manager_id`) VALUES
(3, 'younes', 'diouri', 'Paris', '2016-01-06', 'rhoohohoho', 75010, 'dÃ©veloppeur', '0878791356', 'diouriyounes@hotmail.com', '', '', 0, 246541),
(4, 'Faycal', 'Azeama', 'Paris', '1991-03-18', 'Auguste Lepierre', 45000, 'omagdaaad', '0624154456', 'kordignal@hotmail.fr', '', '', 0, 0),
(5, 'test', 'testest', 'Paris', '0000-00-00', 'rue lomvart', 75001, 'architecte', '06251412', 'rasmataz@hotmail.fr', '', '', 0, 0),
(6, 'worker', 'lepremier', 'Paris', '0000-00-00', 'rue des morgillons', 75001, 'Architecte', '0624152215', 'rektout@gmail.com', 'elkemani', 'rotterdam', 0, 0),
(7, 'ezaeaz', 'Azeaze', 'ezaze', '15-01-1995', 'eazeaze', 0, 'ezaeaze', 'e', 'ezae', 'aze@azeaze', 'eazeazeaze', 0, 0),
(9, 'testavida', 'ledernier', 'Paris', '12-05-1991', 'rue des roziers', 87501, 'Pharmacien', '0624152145', 'gourdelbosso@gmail.fr', 'test', 'ydEPFL2013@', 0, 0),
(10, 'davis', 'walker', 'lyon', '12-05-1978', 'rue des fleurettes', 45012, 'Fleuriste', '0624152151', 'lyonnai92@gmail.com', 'guerr', 'guerr', NULL, 0),
(11, 'raouf', 'daas', 'paris', '20-02-1902', 'rue de la BOUBOU', 75002, 'tueur à gage', '0625145478', 'rafirafi@rafirafi.com', 'rafirafi', 'rafirafi', NULL, 0),
(12, 'virgil', 'aone', 'paris', '12-05-2001', 'rue des lombards', 75011, 'assassin', '0625145254', 'virvigil@hoho.com', 'virgil', 'ilestla', NULL, 0),
(13, 'kitty', 'hello', 'Meine', '12-05-1994', 'biblich rue des filiÃ¨res', 45002, 'nardila', '0624154456', 'groud@orsay.fr', 'eltuor', 'ecaflip', NULL, 0),
(14, 'hiophioph', 'uihiohihiop', 'ihoihiohioph', 'iphiohioh', 'iohioph', 0, 'piohpiohioph', 'piohophoih', 'iophpiohoih', 'aze@aze', '123456', NULL, 0),
(15, 'ihoihoih', 'iohioh', 'oih', 'ho', 'oih', 0, 'oihoi', 'oih', 'oih', 'giou', 'rouroun', NULL, 0),
(16, 'oumara', 'terminus', 'ouazra', '12-02-1974', 'rue de la bimbo', 45002, 'guitariste', '789456126', 'groundjou@groundjou.com', '', '', NULL, 123123),
(17, 'oumara', 'terminus', 'ouazra', '12-02-1974', 'rue de la bimbo', 45002, 'guitariste', '789456126', 'groundjou@groundjou.com', '', '', NULL, 123123),
(18, 'aeaze', 'fzeazeaze', 'afaf', 'afaf', 'fazefezf', 0, 'afa', 'feza', 'fezazef', '', '', NULL, 123123),
(19, 'aeaze', 'fzeazeaze', 'afaf', 'afaf', 'fazefezf', 0, 'afa', 'feza', 'fezazef', '', '', NULL, 0),
(20, 'azee', 'azeaze', 'afazf', 'aefgzaeg', 'fzegzeg', 0, 'azefgeag', 'aefgzeg', 'aefgzeg', '', '', NULL, 246541),
(21, 'pjo', 'koj', 'jopj', 'poj', 'opjp', 0, 'jpoj', 'jpo', 'jpo', '', '', NULL, 0),
(22, 'vbcnbcv', 'vbcncv', 'vbcnvc', 'bvcnbc', 'bvcnbcvn', 0, 'cvnvbc', 'vbcnbvc', 'vbcnbcv', '', '', NULL, 0),
(23, 'azeaf', 'Azeaze', 'fazefz', 'gzg', 'f', 0, 'zefg', 'efg', 'zegz', '', '', NULL, 246541),
(24, 'lmkmlk', 'lmkmlk', 'mlkml', 'klmk', 'kmlk', 0, 'ml', 'mlk', 'lkmlk', '', '', NULL, 246541),
(25, 'bjkbkjb', 'bkjjkbjk', 'kjbkjbkjb', 'bkjbkjbkj', 'kjbkjb', 0, 'kjbkjbkj', 'jkbkjbkjb', 'bkjbkjbkjb', '', '', NULL, 246541),
(26, 'ghfjhfjhfgj', 'fgjghfjghfjgh', 'hghgfjj', 'ghfjgfjg', 'gjhgfjhfgj', 0, 'gfjhgfjgfj', 'jhgfjghfjh', 'gfjghfjhgf', '', '', NULL, 246541),
(27, 'ghfjhfjhfgj', 'fgjghfjghfjgh', 'hghgfjj', 'ghfjgfjg', 'gjhgfjhfgj', 0, 'gfjhgfjgfj', 'jhgfjghfjh', 'gfjghfjhgf', '', '', NULL, 246541),
(28, 'k', 'k', 'k', 'k', 'k', 0, 'k', 'k', 'k', '', '', NULL, 246541),
(29, 'jlkjkl', 'kjkljkl', 'jlkj', 'kljkl', 'lkj', 0, 'klj', 'lkj', 'lkj', '', '', NULL, 246541),
(30, 'kokok', 'kokok', 'okok', 'kok', 'oko', 0, 'kok', 'ko', 'ko', '', '', NULL, 246541),
(31, 'kokok', 'kokok', 'okokok', 'kokokok', 'okokok', 0, 'okokoko', 'okokok', 'okokok', '', '', NULL, 246541),
(32, 'lkjl', 'jkljlkj', 'lkj', 'kjl', 'jlk', 0, 'kjlk', 'jlk', 'jlk', 'azerty', 'diouriyouri', NULL, 0),
(33, 'oulalala', 'lalalal', 'moiahaha', 'datadata', 'mdrmdr', 0, 'moimoi', 'moimoi', 'moi@moi', 'groszizi', 'grasdur', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `worker_cv`
--

CREATE TABLE IF NOT EXISTS `worker_cv` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_worker` int(10) NOT NULL,
  `competences` mediumtext NOT NULL,
  `mission` text NOT NULL,
  `formation` text NOT NULL,
  `langue` text NOT NULL,
  `centre_interet` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `langue` (`langue`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Contenu de la table `worker_cv`
--

INSERT INTO `worker_cv` (`id`, `id_worker`, `competences`, `mission`, `formation`, `langue`, `centre_interet`) VALUES
(119, 14, 'jkjljhlkhlghrlkhg', 'lkrehjgklejgklrjg', 'klejglkjgrlkj', 'kgejlrkjgelrkgj', 'elkgjrelkrjg'),
(120, 32, 'mezllmgrklmerkg', 'gkzmlrekgremlkg', 'mzlgkmlrekgmlrk', 'lmzekgrmelrkgml', 'melgkrmlgkre'),
(121, 33, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `worker_file`
--

CREATE TABLE IF NOT EXISTS `worker_file` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `filename` varchar(20) NOT NULL,
  `filesize` int(10) NOT NULL,
  `title` varchar(20) NOT NULL,
  `description` varchar(255) NOT NULL,
  `finalname` varchar(20) NOT NULL,
  `filedate` date NOT NULL,
  `mid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `worker_formation`
--

CREATE TABLE IF NOT EXISTS `worker_formation` (
  `id` int(10) NOT NULL,
  `id_formation` int(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `institution` varchar(200) NOT NULL,
  `objet` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `worker_mission`
--

CREATE TABLE IF NOT EXISTS `worker_mission` (
  `id` int(10) NOT NULL,
  `id_mission` int(10) NOT NULL,
  `date` varchar(100) NOT NULL,
  `societe` varchar(50) NOT NULL,
  `realisation` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
