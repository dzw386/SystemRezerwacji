-- Skrypt do MariaDB 10.11.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE DATABASE IF NOT EXISTS `SystemRezerwacji` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `SystemRezerwacji`;

CREATE TABLE `Rezerwacje` (
  `id_rezerwacji` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `usluga` enum('strzyzenie','koloryzacja','pielegnacja','konsultacja','badania','opieka','naprawa-silnika','wymiana-opon','serwis-klimatyzacji') NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

ALTER TABLE `Rezerwacje`
  ADD PRIMARY KEY (`id_rezerwacji`);

CREATE USER 'srphp'@'localhost' IDENTIFIED BY '';
GRANT USAGE ON *.* TO `srphp`@`localhost`;
GRANT SELECT, INSERT ON `SystemRezerwacji`.`Rezerwacje` TO `srphp`@`localhost`;

COMMIT;
