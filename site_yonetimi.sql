-- phpMyAdmin SQL Dump
-- version 5.2.0
-- ht..//www.phpmyadmin../
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 08 Ağu 2023, 20:43:01
-- Sunucu sürümü: 8.0.31
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIE../;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESUL../;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTI../;
/*!40101 SET NAMES utf8m../;

--
-- Veritabanı: `site_yonetimi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `aidatlar`
--

DROP TABLE IF EXISTS `aidatlar`;
CREATE TABLE IF NOT EXISTS `aidatlar` (
  `aidat_id` int NOT NULL AUTO_INCREMENT,
  `daire_id` int DEFAULT NULL,
  `tarih` date DEFAULT NULL,
  `tutar` decimal(10,2) DEFAULT NULL,
  `odendi_mi` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`aidat_id`),
  KEY `daire_no` (`daire_id`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `aidatlar`
--

INSERT INTO `aidatlar` (`aidat_id`, `daire_id`, `tarih`, `tutar`, `odendi_mi`) VALUES
(1, 42, '2023-08-08', '10.00', NULL),
(2, 41, '2023-08-08', '10.00', NULL),
(3, 40, '2023-08-08', '10.00', NULL),
(4, 39, '2023-08-08', '10.00', NULL),
(5, 38, '2023-08-08', '10.00', NULL),
(6, 37, '2023-08-08', '10.00', NULL),
(7, 36, '2023-08-08', '10.00', NULL),
(8, 35, '2023-08-08', '10.00', NULL),
(9, 34, '2023-08-08', '10.00', NULL),
(10, 33, '2023-08-08', '10.00', NULL),
(11, 32, '2023-08-08', '10.00', NULL),
(12, 31, '2023-08-08', '10.00', NULL),
(13, 30, '2023-08-08', '10.00', NULL),
(14, 29, '2023-08-08', '10.00', NULL),
(15, 28, '2023-08-08', '10.00', NULL),
(16, 27, '2023-08-08', '10.00', NULL),
(17, 26, '2023-08-08', '10.00', NULL),
(18, 25, '2023-08-08', '10.00', NULL),
(19, 24, '2023-08-08', '10.00', NULL),
(20, 23, '2023-08-08', '10.00', NULL),
(21, 22, '2023-08-08', '10.00', NULL),
(22, 43, '2023-08-08', '10.00', NULL),
(23, 44, '2023-08-08', '10.00', NULL),
(24, 45, '2023-08-08', '10.00', NULL),
(25, 46, '2023-08-08', '10.00', NULL),
(26, 47, '2023-08-08', '10.00', NULL),
(27, 48, '2023-08-08', '10.00', NULL),
(28, 49, '2023-08-08', '10.00', NULL),
(29, 50, '2023-08-08', '10.00', NULL),
(30, 51, '2023-08-08', '10.00', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araçlar`
--

DROP TABLE IF EXISTS `araçlar`;
CREATE TABLE IF NOT EXISTS `araçlar` (
  `araç_id` int NOT NULL,
  `araç_plakasi` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `araç_marka_model` varchar(255) DEFAULT NULL,
  `araç_sahibi_id` int DEFAULT NULL,
  PRIMARY KEY (`araç_id`),
  KEY `araç_sahibi_id` (`araç_sahibi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bloklar`
--

DROP TABLE IF EXISTS `bloklar`;
CREATE TABLE IF NOT EXISTS `bloklar` (
  `blok_id` int NOT NULL AUTO_INCREMENT,
  `blok_adi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `blok_adresi` varchar(255) DEFAULT NULL,
  `apartman_yoneticisi_id` int DEFAULT NULL,
  `daire_sayisi` int NOT NULL,
  PRIMARY KEY (`blok_id`),
  KEY `apartman_yöneticisi_id` (`apartman_yoneticisi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `bloklar`
--

INSERT INTO `bloklar` (`blok_id`, `blok_adi`, `blok_adresi`, `apartman_yoneticisi_id`, `daire_sayisi`) VALUES
(13, 'A', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `daireler`
--

DROP TABLE IF EXISTS `daireler`;
CREATE TABLE IF NOT EXISTS `daireler` (
  `daire_id` int NOT NULL AUTO_INCREMENT,
  `blok_id` int DEFAULT NULL,
  `daire_no` int DEFAULT NULL,
  `daire_m²` decimal(10,2) DEFAULT NULL,
  `oda_sayısı` int DEFAULT NULL,
  `kira_durumu` tinyint(1) DEFAULT NULL,
  `ev_sahibi_id` int DEFAULT NULL,
  `kiraci_id` int DEFAULT NULL,
  PRIMARY KEY (`daire_id`),
  KEY `block_id` (`blok_id`),
  KEY `ev_sahibi_id` (`ev_sahibi_id`),
  KEY `kiracı_id` (`kiraci_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `daireler`
--

INSERT INTO `daireler` (`daire_id`, `blok_id`, `daire_no`, `daire_m²`, `oda_sayısı`, `kira_durumu`, `ev_sahibi_id`, `kiraci_id`) VALUES
(42, 13, 21, '1.00', 1, 1, 0, 0),
(41, 13, 20, NULL, NULL, NULL, NULL, NULL),
(40, 13, 19, NULL, NULL, NULL, NULL, NULL),
(39, 13, 18, NULL, NULL, NULL, NULL, NULL),
(38, 13, 17, NULL, NULL, NULL, NULL, NULL),
(37, 13, 16, NULL, NULL, NULL, NULL, NULL),
(36, 13, 15, NULL, NULL, NULL, NULL, NULL),
(35, 13, 14, NULL, NULL, NULL, NULL, NULL),
(34, 13, 13, NULL, NULL, NULL, NULL, NULL),
(33, 13, 12, NULL, NULL, NULL, NULL, NULL),
(32, 13, 11, NULL, NULL, NULL, NULL, NULL),
(31, 13, 10, NULL, NULL, NULL, NULL, NULL),
(30, 13, 9, NULL, NULL, NULL, NULL, NULL),
(29, 13, 8, NULL, NULL, NULL, NULL, NULL),
(28, 13, 7, NULL, NULL, NULL, NULL, NULL),
(27, 13, 6, NULL, NULL, NULL, NULL, NULL),
(26, 13, 5, NULL, NULL, NULL, NULL, NULL),
(25, 13, 4, NULL, NULL, NULL, NULL, NULL),
(24, 13, 3, NULL, NULL, NULL, NULL, NULL),
(23, 13, 2, NULL, NULL, NULL, NULL, NULL),
(22, 13, 1, NULL, NULL, NULL, NULL, NULL),
(43, 13, 22, NULL, NULL, NULL, NULL, NULL),
(44, 13, 23, NULL, NULL, NULL, NULL, NULL),
(45, 13, 24, NULL, NULL, NULL, NULL, NULL),
(46, 13, 25, NULL, NULL, NULL, NULL, NULL),
(47, 13, 26, NULL, NULL, NULL, NULL, NULL),
(48, 13, 27, NULL, NULL, NULL, NULL, NULL),
(49, 13, 28, NULL, NULL, NULL, NULL, NULL),
(50, 13, 29, NULL, NULL, NULL, NULL, NULL),
(51, 13, 30, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ev_sahipleri`
--

DROP TABLE IF EXISTS `ev_sahipleri`;
CREATE TABLE IF NOT EXISTS `ev_sahipleri` (
  `ev_sahibi_id` int NOT NULL AUTO_INCREMENT,
  `daire_id` int NOT NULL,
  `ev_sahibi_adi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ev_sahibi_telefon` varchar(20) DEFAULT NULL,
  `ev_sahibi_email` varchar(255) DEFAULT NULL,
  `diger_gerekli_bilgiler` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`ev_sahibi_id`),
  KEY `daire_id` (`daire_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `ev_sahipleri`
--

INSERT INTO `ev_sahipleri` (`ev_sahibi_id`, `daire_id`, `ev_sahibi_adi`, `ev_sahibi_telefon`, `ev_sahibi_email`, `diger_gerekli_bilgiler`) VALUES
(3, 0, 'İsmail Aktaş', '0524621854', 'ismailaktas@sysnet.com.tr', 'Site Yöneticisi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelir`
--

DROP TABLE IF EXISTS `gelir`;
CREATE TABLE IF NOT EXISTS `gelir` (
  `gelir_id` int NOT NULL,
  `tarih` date DEFAULT NULL,
  `açıklama` varchar(255) DEFAULT NULL,
  `tutar` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`gelir_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gelir_detayları`
--

DROP TABLE IF EXISTS `gelir_detayları`;
CREATE TABLE IF NOT EXISTS `gelir_detayları` (
  `gelir_detay_id` int NOT NULL,
  `gelir_id` int DEFAULT NULL,
  `detay` varchar(255) DEFAULT NULL,
  `tutar` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`gelir_detay_id`),
  KEY `gelir_id` (`gelir_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `giderler`
--

DROP TABLE IF EXISTS `giderler`;
CREATE TABLE IF NOT EXISTS `giderler` (
  `gider_id` int NOT NULL,
  `tarih` date DEFAULT NULL,
  `açıklama` varchar(255) DEFAULT NULL,
  `tutar` decimal(10,2) DEFAULT NULL,
  `gider_tipi_id` int DEFAULT NULL,
  PRIMARY KEY (`gider_id`),
  KEY `gider_tipi_id` (`gider_tipi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gider_detayları`
--

DROP TABLE IF EXISTS `gider_detayları`;
CREATE TABLE IF NOT EXISTS `gider_detayları` (
  `gider_detay_id` int NOT NULL,
  `gider_id` int DEFAULT NULL,
  `detay` varchar(255) DEFAULT NULL,
  `tutar` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`gider_detay_id`),
  KEY `gider_id` (`gider_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gider_tipleri`
--

DROP TABLE IF EXISTS `gider_tipleri`;
CREATE TABLE IF NOT EXISTS `gider_tipleri` (
  `gider_tipi_id` int NOT NULL,
  `gider_tipi_adı` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`gider_tipi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kiracılar`
--

DROP TABLE IF EXISTS `kiracılar`;
CREATE TABLE IF NOT EXISTS `kiracılar` (
  `kiraci_id` int NOT NULL AUTO_INCREMENT,
  `kiraci_adi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kiraci_soyadi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kiraci_telefon` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `kiraci_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `diger_gerekli_bilgiler` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`kiraci_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel`
--

DROP TABLE IF EXISTS `personel`;
CREATE TABLE IF NOT EXISTS `personel` (
  `personel_id` int NOT NULL,
  `personel_adı` varchar(255) DEFAULT NULL,
  `personel_soyadı` varchar(255) DEFAULT NULL,
  `personel_pozisyonu` varchar(255) DEFAULT NULL,
  `personel_maas` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`personel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personel_maaşları`
--

DROP TABLE IF EXISTS `personel_maaşları`;
CREATE TABLE IF NOT EXISTS `personel_maaşları` (
  `personel_maas_id` int NOT NULL,
  `personel_id` int DEFAULT NULL,
  `maas_tarihi` date DEFAULT NULL,
  `tutar` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`personel_maas_id`),
  KEY `personel_id` (`personel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `daire_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `daire_no` (`daire_id`),
  KEY `daire_id` (`daire_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`user_id`, `daire_id`, `user_name`, `user_email`, `user_password`, `user_role`) VALUES
(0, '0', 'İsmail Aktaş', 'ismail@', '123', 'evsahibi'),
(3, NULL, 'kasım tekdemir', 'kasım@', '123', 'evsahibi'),
(4, NULL, 'kerim akosman', 'kerim@', '123', 'personel'),
(5, NULL, 'şevval ayırkan', 'şevval@', '123', 'evsahibi'),
(7, '2', 'aytu', 'aytu', '123', 'yonetici');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ziyaretçi`
--

DROP TABLE IF EXISTS `ziyaretçi`;
CREATE TABLE IF NOT EXISTS `ziyaretçi` (
  `ziyaretçi_id` int NOT NULL,
  `ziyaretçi_adı` varchar(255) DEFAULT NULL,
  `ziyaretçi_soyadı` varchar(255) DEFAULT NULL,
  `ziyaret_tarihi` date DEFAULT NULL,
  `ziyaret_edilen_daire_id` int DEFAULT NULL,
  PRIMARY KEY (`ziyaretçi_id`),
  KEY `ziyaret_edilen_daire_id` (`ziyaret_edilen_daire_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIE../;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESUL../;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTI../;
