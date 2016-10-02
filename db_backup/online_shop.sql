-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2016 at 06:20 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `article`, `image`, `url`, `updated_at`, `created_at`) VALUES
(1, 'Action games', 'action games article demo', 'action_games_cat.jpg', 'action-games', '2016-08-02 00:00:00', '2016-08-02 00:00:00'),
(2, 'Strategy games', 'Strategy games article demo', 'strategy_games_cat.jpg', 'strategy-games', '2016-08-02 00:00:00', '2016-08-02 00:00:00'),
(3, 'Racing games', 'Racing games articel demo', 'racing_game_cat.jpg', 'racing-games', '2016-08-02 00:00:00', '2016-08-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(1, 1, 'About our shop', 'TEXT DEMO ABOUT', '2016-09-06 00:00:00', '2016-09-07 00:00:00'),
(2, 1, 'ABOUT IN ISRAEL', 'out compy israel demo', '2016-09-14 00:00:00', '2016-09-14 00:00:00'),
(3, 2, 'our SERVICES', 'DEMO SERVICES TEXT', '2016-09-07 00:00:00', '2016-09-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `title`, `url`, `updated_at`, `created_at`) VALUES
(1, 'About', 'About us', 'about', '2016-09-06 00:00:00', '2016-09-06 00:00:00'),
(2, 'Services', 'Our services', 'services', '2016-09-07 00:00:00', '2016-09-07 00:00:00'),
(3, 'Contact us', 'Contact us', 'contact-us', '2016-09-07 00:00:00', '2016-09-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categorie_id`, `title`, `article`, `image`, `price`, `updated_at`, `created_at`, `url`) VALUES
(1, 1, 'Battlefield 4', 'Battlefield 4™ is the genre-defining action blockbuster made from moments that blur the line between game and glory. Fueled by the next-generation power and fidelity of Frostbite™ 3, Battlefield 4 provides a visceral, dramatic experience unlike any other.  Only in Battlefield will you blow the foundations of a dam or reduce an entire skyscraper to rubble, or lead a naval assault from the back of a gun boat. Battlefield grants you the freedom to do more and be more while playing to your strengths and carving your own path to victory.  In addition to its hallmark multiplayer, Battlefield 4 features an intense and dramatic character-driven campaign that starts with the evacuation of American VIPs from Shanghai and follows your squad''s struggle to find its way home.  There is no comparison. Immerse yourself in the glorious chaos of all-out war, found only in Battlefield.', 'battlefield1.jpg', '40.00', '2016-08-02 00:00:00', '2016-08-02 00:00:00', 'battlefield'),
(2, 1, 'Arma 3', 'Experience true combat gameplay in a massive military sandbox. Deploying a wide variety of single- and multiplayer content, over 20 vehicles and 40 weapons, and limitless opportunities for content creation, this is the PC’s premier military game. Authentic, diverse, open - Arma 3 sends you to war.', 'arma3.jpeg', '60.00', '2016-08-02 00:00:00', '2016-08-02 00:00:00', 'arma'),
(3, 2, 'Command & Conquer 3 Tiberium Wars', 'Command & Conquer 3 gets the series back to its roots in the Tiberium universe, with new gameplay features that rewards players for their own unique play styles. Beyond the new story and gameplay tweaks, added new features include voice-over IP, integrated clan support, and new spectator modes.\r\n\r\nIt is 2047 and the stakes could not be higher. Tiberium -- a self-replicating alien substance that has infected the Earth -- is spreading like a radioactive ice age. The GDI, a high-tech alliance of the world''s most advanced nations, is fighting to contain Tiberium, but Kane, the megalomaniacal leader of The Brotherhood of NOD has other plans for Earth. Kane''s secret society turned superpower is bent on using Tiberium to take control and transform humanity into his twisted vision of the future. All-out war rages over Tiberium and the fate of the planet rests in the balance.', 'Command-and-Conquer-3.jpg', '55.00', '2016-08-02 00:00:00', '2016-08-02 00:00:00', 'Command-and-Conquer-3'),
(4, 2, 'Starcraft 2', 'In the distant future, in the darkest reaches of space, the ghosts of the past whisper your name. You are Jim Raynor, a marshal-turned-rebel on a vigilante crusade to bring down the Dominion and its nefarious leader, Arcturus Mengsk. Haunted by betrayal and remorse, some believe you may have given up the fight. But you have promises to keep…and a need for vengeance that''s long overdue.', 'starcraft2.jpg', '66.00', '2016-08-02 00:00:00', '2016-08-02 00:00:00', 'starcraft2'),
(5, 3, 'Need for speed', 'Take your ride through wide city streets, push it sideways down narrow mountain roads and hit the limiter as you put the pedal to the metal on the freeway. With plenty to see, Ventura Bay is the perfect place for you to show off your skills and get the recognition and respect you deserve.', 'Need_for_Speed_2015.jpg', '90.00', '2016-08-02 00:00:00', '2016-08-02 00:00:00', 'need-for-speed'),
(6, 3, 'GRID Autosport', 'It’s all about the teams, the rivals and the race as you become driver for hire, specialising in your favourite disciplines or conquering them all in an intense world of professional motorsport.', 'grid.jpg', '70.00', '2016-08-02 00:00:00', '2016-08-02 00:00:00', 'grid-autosport');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`user_id`, `role_id`) VALUES
(3, 4),
(4, 4),
(5, 6),
(7, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '-', '-', '-', '2016-09-07 00:00:00', '2016-09-06 00:00:00'),
(2, '--', '--', '--', '2016-09-06 00:00:00', '2016-09-15 00:00:00'),
(3, 'Avi Cohen', 'avi@gmail.com', '$2y$10$aT8MBm/rcah4pBR3qsB8KO.YbbbDY9bZ/81B76L77wnRmaEcWwcY.', '2016-09-01 00:00:00', '2016-09-02 00:00:00'),
(4, 'Moshe Levo', 'moshe@gmail.com', '$2y$10$aT8MBm/rcah4pBR3qsB8KO.YbbbDY9bZ/81B76L77wnRmaEcWwcY.', '2016-09-01 00:00:00', '2016-09-09 00:00:00'),
(5, 'Admin', 'admin@gmail.com', '$2y$10$aT8MBm/rcah4pBR3qsB8KO.YbbbDY9bZ/81B76L77wnRmaEcWwcY.', '2016-09-01 00:00:00', '2016-09-02 00:00:00'),
(7, 'ben', 'ben@gmail.com', '$2y$10$ApEYUgpVcB5M0Ue6nn5KUe8GUxf2VdH6D9lwvlTQz9nxqEtuMgIq2', '2016-09-18 20:46:10', '2016-09-18 20:46:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
