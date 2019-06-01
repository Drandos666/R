-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2019 a las 18:40:47
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `r`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `idAdm` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `e` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`idAdm`, `nome`, `e`, `senha`) VALUES
(1, 'David Avila', 'davidaosorio@gmail.com', '66666666'),
(2, 'cliente', 'cliente@gmail.com', '123456789'),
(3, 'asdasd', 'dad@gmail.com', '$2y$10$P78Yr7etxVg2a8HKoWQPw.htB3WjTxrmatK/uQx873C'),
(4, 'hola', '1@gmail.com', '$2y$10$7t1iMikvN1A9bym7pEwOb.7898cU54mpDxYuS61nrYq');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `idEnc` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `coment` varchar(240) NOT NULL,
  `op` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`idEnc`, `nome`, `coment`, `op`) VALUES
(1, 'David Avila', 'dasd', 'Cultura Urbana'),
(2, 'dasdad', 'dasd', 'ArtesanÃ­as'),
(3, 'dasdad', 'dasd', 'ArtesanÃ­as'),
(4, 'Davidaaa', 'dsad', 'Arte Moderno'),
(5, '1', 'da', 'Artesanias'),
(6, '2', '2', 'Arte Moderno'),
(7, '4', '4', 'Lugares Exoticos'),
(8, '5', '5', 'Cultura Urbana'),
(9, '6', '6', 'Heavy Metal'),
(10, 'Frank Lopez', 'xq si', 'Heavy Metal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hola`
--

CREATE TABLE `hola` (
  `idAdm` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `e` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `hola`
--

INSERT INTO `hola` (`idAdm`, `nome`, `pass`, `e`) VALUES
(1, 'David', '$2y$10$6K4cItvQvOwx8PLv6jeAaeFNdmsPcxYwwhoamqGlZtd', 'davidaosorio@gmail.com'),
(2, 'David', '$2y$10$NozC0.mXexM9w5oTIEK2repc9es7gOvurHKr3aYRZGN', '2@gmail.com'),
(3, 'David', '12345678912', '3@gmail.com'),
(4, 'Frank Lopez', '123456975', '4@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdm`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`idEnc`);

--
-- Indices de la tabla `hola`
--
ALTER TABLE `hola`
  ADD PRIMARY KEY (`idAdm`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `idEnc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `hola`
--
ALTER TABLE `hola`
  MODIFY `idAdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
