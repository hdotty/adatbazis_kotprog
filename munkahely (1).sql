-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Nov 29. 19:11
-- Kiszolgáló verziója: 10.4.16-MariaDB
-- PHP verzió: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `munkahely`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `dolgozó`
--

CREATE TABLE `dolgozó` (
  `munkahelyi_azonosito` decimal(10,0) NOT NULL,
  `keresztnev` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `vezeteknev` varchar(20) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `irodaszam` decimal(3,0) DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_hungarian_ci DEFAULT NULL,
  `adoszam` decimal(10,0) DEFAULT NULL,
  `telefonszam` decimal(10,0) DEFAULT NULL,
  `szuletesi_datum` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `dolgozó`
--

INSERT INTO `dolgozó` (`munkahelyi_azonosito`, `keresztnev`, `vezeteknev`, `irodaszam`, `email`, `adoszam`, `telefonszam`, `szuletesi_datum`) VALUES
('1110', 'Béla', 'Vak', '1', 'vakbela@gmail.com', '1111111111', '70123456', '1964-05-09'),
('1111', 'Elisa', 'Szabó', '2', 'szaboelisa@hotmail.hu', '1231231234', '70234567', '1963-11-13'),
('1112', 'Zita', 'Para', '3', 'parazita@freemail.hu', '3333333333', '70345678', '1974-01-02'),
('1113', 'Nóra', 'Patta', '4', 'pattanóra@citromail.hu', '4444444444', '70456789', '1975-03-04'),
('1114', 'Elek', 'Remek', '5', 'remekelek@citromail.hu', '5555555555', '70567891', '1974-09-19'),
('1115', 'Ella', 'Szalmon', '6', 'szalmonella@citromail.hu', '6666666666', '70678910', '1977-09-22'),
('1116', 'Antal', 'Trab', '7', 'trabantal@citromail.hu', '7777777777', '30789102', '1973-11-30'),
('1117', 'Viola', 'Ultra', '8', 'ultraviola@freemail.hu', '9999999999', '30789012', '1983-06-07'),
('1118', 'Erika', 'Am', '9', 'amerika@freemail.hu', '1010101010', '30890123', '1963-11-14'),
('1119', 'Ella', 'Citad', '10', 'citadella@gmail.com', '1101101101', '30901234', '1992-05-14'),
('1120', 'Emma', 'Dil', '11', 'dilemma@gmail.com', '1212121212', '30012345', '1995-10-09'),
('1121', 'Áron', 'Git', '12', 'gitáron@gmail.com', '1313131313', '30123456', '1995-11-08'),
('1122', 'Réka', 'Heu', '13', 'heuréka@yahoo.com', '1414141414', '50234567', '1986-02-16'),
('1123', 'Ferenc', 'Szabó', '14', 'szaboferenc@yahoo.com', '1515151515', '50345678', '1980-07-16'),
('1124', 'Pál', 'Kala', '15', 'kalapál@yahoo.com', '1616161616', '50456789', '1974-02-18'),
('1125', 'Blanka', 'Kasza', '16', 'kaszablanka@yahoo.com', '1717171717', '50567890', '1978-05-19'),
('1126', 'Tibor', 'László', '17', 'laszlotibor@yahoo.com', '1818181818', '50678901', '1975-05-05'),
('1130', 'Gergő', 'Faragó', '18', 'faragergo@yahoo.com', '1919191919', '506789012', '1986-07-14'),
('1131', 'Ernő', 'Juhász', '19', 'juhaszerno@yahoo.com', '2020202020', '50789012', '1983-08-14'),
('1132', 'Tibor', 'Kovács', '20', 'kovacstibor@yahoo.com', '2121212121', '50890123', '1979-09-04'),
('1133', 'Lóránt', 'Dobó', '21', 'dobolorant@yahoo.com', '2202202202', '509012345', '1984-05-17'),
('1134', 'Flórián', 'Horváth', '22', 'horvatf@yahoo.com', '2323232323', '50012345', '1988-11-10');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `helyiség`
--

CREATE TABLE `helyiség` (
  `irodaszam` decimal(3,0) NOT NULL,
  `klima` varchar(5) COLLATE utf8mb4_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `helyiség`
--

INSERT INTO `helyiség` (`irodaszam`, `klima`) VALUES
('1', 'nincs'),
('2', 'van'),
('3', 'nincs'),
('4', 'van'),
('5', 'nincs'),
('6', 'van'),
('7', 'nincs'),
('8', 'van'),
('9', 'nincs'),
('10', 'van'),
('11', 'nincs'),
('12', 'van'),
('13', 'nincs'),
('14', 'van'),
('15', 'nincs'),
('16', 'van'),
('17', 'nincs'),
('18', 'van'),
('19', 'nincs'),
('20', 'van'),
('21', 'nincs'),
('22', 'van'),
('23', 'nincs'),
('24', 'van'),
('25', 'nincs'),
('26', 'van'),
('27', 'nincs'),
('28', 'van'),
('29', 'nincs'),
('30', 'van');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `nyomtató`
--

CREATE TABLE `nyomtató` (
  `ny_sorozatszam` decimal(10,0) NOT NULL,
  `ny_marka` varchar(10) COLLATE utf8mb4_hungarian_ci NOT NULL,
  `szines` varchar(4) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `nyomtató`
--

INSERT INTO `nyomtató` (`ny_sorozatszam`, `ny_marka`, `szines`) VALUES
('11111009', 'HP', 'NEM'),
('11111010', 'HP', 'NEM'),
('11112001', 'CANON', 'NEM'),
('11112002', 'CANON', 'NEM'),
('11112003', 'CANON', 'NEM'),
('11112004', 'CANON', 'NEM'),
('11112005', 'CANON', 'IGEN'),
('11112006', 'CANON', 'IGEN'),
('11112007', 'CANON', 'IGEN'),
('11112008', 'CANON', 'IGEN'),
('11112009', 'CANON', 'IGEN'),
('11114001', 'BROTHER', 'NEM'),
('11114002', 'EPSON', 'NEM'),
('11114003', 'EPSON', 'NEM'),
('11114004', 'EPSON', 'NEM'),
('11114005', 'EPSON', 'NEM'),
('11114006', 'EPSON', 'NEM'),
('11115555', 'EPSON', 'NEM'),
('11115556', 'EPSON', 'NEM'),
('11115557', 'CANON', 'IGEN'),
('11115558', 'CANON', 'NEM'),
('11115559', 'BROTHER', 'NEM'),
('11115560', 'BROTHER', 'IGEN'),
('11115561', 'BROTHER', 'IGEN'),
('11115562', 'HP', 'IGEN'),
('11115563', 'HP', 'IGEN'),
('11115564', 'HP', 'NEM'),
('11116666', 'EPSON', 'IGEN'),
('11116667', 'BROTHER', 'IGEN'),
('11116668', 'BROTHER', 'NEM');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `számítógép`
--

CREATE TABLE `számítógép` (
  `sorozatszam` decimal(10,0) NOT NULL,
  `marka` varchar(20) NOT NULL,
  `gyartasi_ev` decimal(4,0) NOT NULL,
  `ny_sorozatszam` decimal(10,0) NOT NULL,
  `irodaszam` decimal(3,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `számítógép`
--

INSERT INTO `számítógép` (`sorozatszam`, `marka`, `gyartasi_ev`, `ny_sorozatszam`, `irodaszam`) VALUES
('22221111', 'Lenovo', '2015', '11114001', '1'),
('22221112', 'HP', '2017', '11112004', '2'),
('22221113', 'HP', '2018', '11112001', '3'),
('22221114', 'HP', '2017', '11112007', '4'),
('22221115', 'Dell', '2018', '11112003', '5'),
('22221116', 'ASUS', '2017', '11112002', '6'),
('22221117', 'Dell', '2018', '11115561', '7'),
('22221118', 'HP', '2017', '11115559', '8'),
('22221119', 'HP', '2016', '11115560', '9'),
('22221120', 'ASUS', '2019', '11112005', '10'),
('22221121', 'Dell', '2013', '11112006', '11'),
('22221122', 'HP', '2017', '11112008', '12'),
('22221123', 'Dell', '2013', '11112009', '13'),
('22221124', 'HP', '2019', '11115558', '14'),
('22221125', 'HP', '2015', '11115557', '15'),
('22221126', 'ASUS', '2019', '11114003', '16'),
('22221127', 'HP', '2013', '11116668', '17'),
('22221128', 'ASUS', '2019', '11116667', '18'),
('22221129', 'HP', '2016', '11114002', '19'),
('22221130', 'ASUS', '2017', '11114004', '20'),
('22221131', 'Dell', '2015', '11114006', '20'),
('22221132', 'ASUS', '2017', '11114005', '22');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `dolgozó`
--
ALTER TABLE `dolgozó`
  ADD PRIMARY KEY (`munkahelyi_azonosito`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `adoszam` (`adoszam`),
  ADD UNIQUE KEY `telefonszam` (`telefonszam`) USING BTREE,
  ADD KEY `irodaszam` (`irodaszam`);

--
-- A tábla indexei `helyiség`
--
ALTER TABLE `helyiség`
  ADD PRIMARY KEY (`irodaszam`);

--
-- A tábla indexei `nyomtató`
--
ALTER TABLE `nyomtató`
  ADD PRIMARY KEY (`ny_sorozatszam`);

--
-- A tábla indexei `számítógép`
--
ALTER TABLE `számítógép`
  ADD PRIMARY KEY (`sorozatszam`),
  ADD KEY `ny_sorozatszam` (`ny_sorozatszam`),
  ADD KEY `irodaszam` (`irodaszam`);

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `dolgozó`
--
ALTER TABLE `dolgozó`
  ADD CONSTRAINT `dolgozó_ibfk_1` FOREIGN KEY (`irodaszam`) REFERENCES `helyiség` (`irodaszam`);

--
-- Megkötések a táblához `számítógép`
--
ALTER TABLE `számítógép`
  ADD CONSTRAINT `számítógép_ibfk_1` FOREIGN KEY (`ny_sorozatszam`) REFERENCES `nyomtató` (`ny_sorozatszam`),
  ADD CONSTRAINT `számítógép_ibfk_2` FOREIGN KEY (`irodaszam`) REFERENCES `helyiség` (`irodaszam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
