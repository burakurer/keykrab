-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 14 May 2020, 21:47:35
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `keykrab`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'epic games'),
(3, 'steam'),
(4, 'ubisoft'),
(5, 'indiegala');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `games`
--

CREATE TABLE `games` (
  `game_id` int(11) NOT NULL,
  `game_name` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `game_picture` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `game_url` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `game_platform` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `game_expired` int(1) NOT NULL,
  `game_rgb` int(1) NOT NULL,
  `game_adate` varchar(16) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `games`
--

INSERT INTO `games` (`game_id`, `game_name`, `game_picture`, `game_url`, `game_platform`, `game_expired`, `game_rgb`, `game_adate`) VALUES
(15, 'Drawful 2', 'https://cdn2.steamgriddb.com/thumb/faa08dd96136738ccb714acbe3fa71c2.webm', 'https://www.epicgames.com/store/product/drawful-2/home', 'epic games', 0, 0, '123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Tablo için indeksler `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `games`
--
ALTER TABLE `games`
  MODIFY `game_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
