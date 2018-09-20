-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 08:28 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `videojuegos`
--

-- --------------------------------------------------------

--
-- Table structure for table `genero`
--

CREATE TABLE `genero` (
  `ID_Genero` int(11) NOT NULL,
  `Genero` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genero`
--

INSERT INTO `genero` (`ID_Genero`, `Genero`) VALUES
(1, 'Aventura'),
(2, 'Accion'),
(3, 'Terror');

-- --------------------------------------------------------

--
-- Table structure for table `juego`
--

CREATE TABLE `juego` (
  `ID_Genero` int(11) NOT NULL,
  `ID_Juego` int(11) NOT NULL,
  `Titulo` varchar(40) NOT NULL,
  `Descripcion` text NOT NULL,
  `Precio` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `juego`
--

INSERT INTO `juego` (`ID_Genero`, `ID_Juego`, `Titulo`, `Descripcion`, `Precio`) VALUES
(1, 1, 'Beyond two', 'Jodie Holmes nació con un don especial: ha vivido toda su vida vinculada a una entidad llamada Aiden, un ser inmaterial con poderes telequinéticos que además hizo que Jodie tuviera contactos con el mundo de los espíritus. ', 200),
(1, 2, 'God of War', 'Se basa en las aventuras de un semidiós espartano, Kratos, quién se enfrenta a diversos personajes de la mitología griega, tanto héroes y especies mitológicas como dioses griegos y dioses primordiales. Aunque el guerrero espartano acostumbra enemistad con la mayoría de los Dioses, recibe ayuda de muchos de ellos, en especial de Atenea.', 250),
(1, 3, 'Shadow of Colossus', 'El juego trata de un joven conocido únicamente como Wander, que debe viajar a caballo a través de un vasto territorio y derrotar a 16 gigantes, conocidos colectivamente como «Colossi» («colosos» en español) para devolver la vida a una joven llamada Mono. ', 210),
(2, 4, 'GTA V', 'La historia transcurre en la remodelada ciudad de Los Santos, donde Michael, Trevor y Franklin trabajan individualmente hasta que se cruzan sus vidas y empiezan a trabajar en equipo robando bancos o realizando trabajos para diversos personajes.', 250),
(2, 5, 'Batman Arkham city', 'Bruce Wayne ofrece una conferencia de prensa para declarar su oposición a la creación de Arkham City. Un grupo de mercenarios de TYGER interrumpe la conferencia para arrestar a Wayne y encarcelarlo en Arkham City.', 50),
(2, 6, 'The Evil Within', 'Mientras investigaban la escena de un horripilante asesinato masivo en el Hospital Mental Beacon, el detective de la policía de la ciudad de Krimson Sebastian Castellanos, su compañero Joseph Oda y el joven detective Juli Kidman se encuentran repentinamente arrojados a un mundo irreal, después de escuchar un ruido agudo. Poco después de que esto ocurra, Sebastian se separa de sus compañeros y se ve obligado a huir de un monstruoso que maneja una motosierra.', 120),
(3, 7, 'Alien Isolation', 'Tras un fallido intento de establecer contacto por radio con la Sevastopol, en el que solo reciben un mensaje de advertencia lleno de estática de parte del mariscal colonial Waits, indicándoles que no pueden recibir pasajeros y ante la poca claridad de la situación, el equipo decide abordar la estructura mediante una caminata espacial, a los pocos metros de alcanzar la esclusa de aire una explosión corte el cable y el equipo se separe, dejando a Amanda como única posible sobreviviente', 120),
(3, 8, 'Outlast', 'Un periodista independiente que recibe un correo anónimo que le informa acerca de experimentos ilegales llevados a cabo en un manicomio llamado Mount Massive. Adentrándose al manicomio de noche y con una cámara de mano, encuentra la institución en ruinas.', 20),
(3, 9, 'Slenderman', 'El objetivo del jugador es recoger ocho páginas ubicadas en diversas áreas del bosque, evitando al mismo tiempo a Slender, una extraña criatura o ente de forma humanoide sin rostro, de piel pálida y con tentáculos como apéndices que brotan de su espalda, que aparecen cuando el jugador está al borde de la muerte.3? El jugador está dotado únicamente con una linterna para ver a través de la oscuridad.', 15);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `ID_Usuario` int(11) NOT NULL,
  `Usuario` varchar(8) NOT NULL,
  `Contraseña` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`ID_Genero`);

--
-- Indexes for table `juego`
--
ALTER TABLE `juego`
  ADD PRIMARY KEY (`ID_Juego`),
  ADD KEY `ID_Genero` (`ID_Genero`) USING BTREE;

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_Usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genero`
--
ALTER TABLE `genero`
  MODIFY `ID_Genero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `juego`
--
ALTER TABLE `juego`
  MODIFY `ID_Juego` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_Usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `juego`
--
ALTER TABLE `juego`
  ADD CONSTRAINT `juego_ibfk_1` FOREIGN KEY (`ID_Genero`) REFERENCES `genero` (`ID_Genero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
