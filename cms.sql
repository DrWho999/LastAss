-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2020 at 12:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL,
  `link` varchar(1024) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `link`, `menu_id`) VALUES
(1, 'News', '<a href=\'category.php?category=$cat_id\'>{$cat_title}</a>', 1),
(2, 'Contact', '<a href=\'category.php?category=$cat_id\'>{$cat_title}</a>', 1),
(3, 'About us', '<a href=\'category.php?category=$cat_id\'>{$cat_title}</a>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(25, 1, 'anonimous', 'marko@gmail.com', 'Hvala bogu majmune jedan!', 'unapproved', '2020-06-25'),
(27, 1, 'Dragicka', 'djordje123@gmail.com', 'Uz tebe smo Đole! <3 ', 'approved', '2020-06-25'),
(29, 2, 'Marinko', 'rokvic414@gmail.com', 'I zasluzuje te pare !', 'approved', '2020-06-25'),
(30, 2, 'Stefan', 'Jeftic@gmail.com', 'Majmune jedan ja za minimalac radim ovdje na 30+ stepeni.', 'unapproved', '2020-06-25'),
(31, 4, 'Hare', 'haris@gmail.com', 'RIP BLACK MAMBA...', 'approved', '2020-06-25'),
(32, 9, 'Dragan', 'dragan@hotmail.com', 'Mnogo vam hvala sto uvijek prvi postavljate najnovije vijesti. Veliki pozdrav za Ekipu.', 'approved', '2020-06-25');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` varchar(255) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'Novak Đokovic i njegova zena su pozitivni na virus.', 'Marko', '2020-06-25', 'djokovic.jpg', '-Najbolji teniser sveta Novak Đoković objavio je da je pozitivan na koronavirus. Zaražena je i njegova supruga Jelena, dok su ostali članovi porodice i tima negativni.\r\n\r\nĐoković je bio organizator Adria Tura – prvi vikend održao se u Beogradu, a finale događaja u Zadru otkazano je pošto je Grigor Dimitrov objavio da je pozitivan na koronavirus.\r\n\r\nOdmah po dolasku u Beograd Novak se testirao zajedno sa članovima porodice i tima sa kojima je bio u Beogradu i Zadru. \r\n\r\n\"Odmah po dolasku u Beograd otišli smo na testiranje. Moj i Jelenin rezultat je pozitivan. Deca su negativna\", poručio je Novak.\r\n\r\n\"Sve što smo uradili u proteklih mesec dana radili smo čistog srca i iskrenih namera. Naš turnir je bio humanitarnog karaktera sa idejom da pomognemo teniserima iz regiona, da im omogućimo uslove da igraju, ostvare prihode, i na taj način lakše prebrode ovaj težak period. U isto vreme, želeli smo da pošaljemo poruke solidarnosti i poštovanja, fer-pleja. Cilj je bio i da pomognemo dobrotvornim fondacijama i onima kojima je pomoć najpotrebnija, i drago mi je što se veliki broj ljudi pridružio toj inicijativi\", objasnio je Đoković.	', 'Novak, Tenis, Covid19', '10', 'published'),
(2, 1, 'Ronaldo postao prvi fudbaler MILIJARDER u istoriji!', 'Spomenko', '2020-06-25', 'Ronaldo.jpg', 'Petostruki osvajač Zlatne lopte Kristijano Ronaldo prvi je fudbaler u istoriji koji je postao milijarder, objavio je magazin Forbs.\r\n\r\nKako se navodi, Portugalac je prošle godine zaradio 105 miliona dolara (plata u Juventusu i sponzorski ugovori) i na listi sportista milijardera pridružio se golferu Tajgeru Vudsu i bokseru Flojdu Mejvederu.', 'Fudbal, Ronaldo', '3', 'published'),
(4, 1, 'Poginuo Kobi Brajant!', 'Djordje', '2020-06-25', 'kobi.jpg', 'Kobi Brajant, legendarni NBA košarkaš, poginuo je u padu helikoptera u Kaliforniji.\r\n\r\nKako prenosi \"LA County Sherrifs\" svih devetoro ljudi koji su bili u helikopteru su poginuli.\r\n\r\nVest da je Brajant poginuo preneo je i \"Yahoo sports\", baš kao i Adrijan Vojnarovski sa ESPN, što znači da je potvrđena smrt legendarnog NBA igrača.', 'Kobi, NBA, 2020', '6', 'published'),
(8, 1, 'Kako da nas kontaktirate?!', 'Djordje', '2020-06-25', 'contact.jpg', 'Za sve informacije aktivan je 24/7 nas call centar koji moze te dobiti na 066 666 666. Ili na nasu mail adresu djordjedjoko@gmail.com	', 'Contact', '6', 'published'),
(9, 1, 'Tim koji stoji iza Stranice ', 'Djordje', '2020-06-25', 'crew.jpg', 'Ekipa koja stoji iza stranice daje sve od sebe da dobijete najnovije informacije u sporta. Ako imate bilo kakvih pitanja za tim koji stoji iza stranice obratite nam se preko About us strane. \r\n                                    Pozdrav,\r\n                                    Djordje sa timom.', 'Ekipa, Tim', '7', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomesmartstrings22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_role`, `user_email`, `randSalt`) VALUES
(1, 'marko', '$1$r1/BwMiC$6M6SLiGMO9ya.UFDxiAyl.', 'Marko', 'Markovic', 'subscriber', 'markomarkovic@gmail.com', ''),
(2, 'spomenko', '$1$GQCFifAp$pQ8dzlW5pPBcGte.48Egw/', 'Spomenko', 'Dragic', 'subscriber', 'spmenkogospic@gmail.com', ''),
(7, 'DrL00T', '$1$3tJKtnAJ$XpNEGdBDy4x4c.4lGxjN2.', 'Djordje', 'Djukic', 'admin', 'djordjedjoko@gmail.com', '$2y$10$iusesomesmartstrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
