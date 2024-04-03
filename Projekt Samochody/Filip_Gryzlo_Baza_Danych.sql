-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2024 at 12:06 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komis`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Samochody`
--

CREATE TABLE `Samochody` (
  `ID` int(11) NOT NULL,
  `Marka` varchar(50) DEFAULT NULL,
  `Model` varchar(50) DEFAULT NULL,
  `Rok_Produkcji` int(11) DEFAULT NULL,
  `Rodzaj_Napedu` varchar(50) DEFAULT NULL,
  `Ilosc_Koni` int(11) DEFAULT NULL,
  `Przebieg_km` int(11) DEFAULT NULL,
  `Cena` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Samochody`
--

INSERT INTO `Samochody` (`ID`, `Marka`, `Model`, `Rok_Produkcji`, `Rodzaj_Napedu`, `Ilosc_Koni`, `Przebieg_km`, `Cena`) VALUES
(1, 'Toyotaaa', 'Corolla', 2018, 'Benzyna', 150, 50000, 50000.00),
(2, 'Volkswagen', 'Golf', 2019, 'Diesel', 120, 40000, 60000.00);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `Samochody`
--
ALTER TABLE `Samochody`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Samochody`
--
ALTER TABLE `Samochody`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
