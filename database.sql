-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 26 Octobre 2017 à 13:53
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET
  time_zone = "+00:00";
CREATE TABLE `category` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` varchar(100) NOT NULL,
    `image` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
  );
INSERT INTO
  `category` (`title`, `image`)
VALUES
  ('Instruments dissonants', 'dissonants.webp'),
  ('Chants étranges', 'etranges.webp'),
  ('Chansons paillardes', 'paillarde.jpg'),
  ('Puissance métallique', 'metal.jpg'),
  ('Enfance gâchée', 'enfance.jpg'),
  ("L\'humour, c'était suffisant", 'semoun.jpg'),
  ("Bonzour les petits z\'enfants", 'cirque.webp'),
  ("Boum boum", 'boumboum.jpg'),
  ("La ferme", 'animaux.jpg'),
  ("Günthër ët sön äccördëön", 'merkel.jpg'),
  ("Plein gaz !", 'prout.jpg'),
  ("Dessins animerdes", 'anime.webp');