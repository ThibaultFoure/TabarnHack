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
    `name` varchar(100) NOT NULL,
    `image` varchar(255) NOT NULL,
    PRIMARY KEY (`id`)
  );
INSERT INTO
  `category` (`title`, `name`, `image`)
VALUES
  ('Instruments dissonants', 'cornemuse', 'dissonants.webp'),
  ('Chants étranges', 'yodle suisse', 'etranges.webp'),
  ('Chansons paillardes', 'paillarde', 'paillarde.jpg'),
  ('Puissance métallique', 'scream metal', 'metal.jpg'),
  ('Enfance gâchée', 'crazy hits', 'enfance.jpg'),
  ("L\'humour, c'était suffisant", 'elie semoun', 'semoun.jpg'),
  ("Bonzour les petits z\'enfants", 'musique de cirque', 'cirque.webp'),
  ("Boum boum", 'gabber hardcore', 'boumboum.jpg'),
  ("La ferme", "cris animaux", 'animaux.jpg'),
  ("Günthër ët sön äccördëön", 'german accordion', 'merkel.jpg'),
  ("Plein gaz !", '00P fart', 'prout.jpg'),
  ("Dessins animerdes", 'anime fr', 'anime.webp');