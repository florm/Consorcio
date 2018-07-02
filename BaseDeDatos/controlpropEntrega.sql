-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 03-07-2018 a las 00:01:46
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controlprop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciudad`
--

CREATE TABLE `ciudad` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `idProvincia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ciudad`
--

INSERT INTO `ciudad` (`id`, `nombre`, `idProvincia`) VALUES
(1, 'Buenos Aires', 1),
(2, '12 de Agosto', 1),
(3, '12 de Octubre', 1),
(4, '16 de Julio', 1),
(5, '17 de Agosto', 1),
(6, '24 de Febrero', 1),
(7, '25 de Mayo', 1),
(8, '28 de Septiembre', 1),
(9, '30 de Agosto', 1),
(10, '4 de Noviembre', 1),
(11, '6 de Septiembre', 1),
(12, '9 de Julio', 1),
(13, 'Abasto', 1),
(14, 'Abbott', 1),
(15, 'Abel', 1),
(16, 'A. Brown', 1),
(17, 'A. Carboni', 1),
(18, 'Acassuso', 1),
(19, 'Acevedo', 1),
(20, 'Achupallas', 1),
(21, 'Achuppallas', 1),
(22, 'A. Corti', 1),
(23, 'Adela', 1),
(24, 'Adela Corti', 1),
(25, 'A. de la Cruz', 1),
(26, 'A. de Toledo', 1),
(27, 'Adolfo Alsina', 1),
(28, 'Adolfo Gonzales Chaves', 1),
(29, 'A. Etcheverry', 1),
(30, 'A. Gascon', 1),
(31, 'A. Gazcon', 1),
(32, 'Agote', 1),
(33, 'Agustina', 1),
(34, 'Agustin Roca', 1),
(35, 'Ajo', 1),
(36, 'Alagon', 1),
(37, 'Alamos', 1),
(38, 'Alastuey', 1),
(39, 'Albarino', 1),
(40, 'Alberdi', 1),
(41, 'Alberdi Viejo', 1),
(42, 'Alberti', 1),
(43, 'Aldea Romana', 1),
(44, 'Aldo Bonzi', 1),
(45, 'Alegre', 1),
(46, 'Alejandro Korn', 1),
(47, 'Alejandro Petion', 1),
(48, 'Alem', 1),
(49, 'Alferez San Martin', 1),
(50, 'Alfonso', 1),
(51, 'Algarrobo', 1),
(52, 'Almirante Brown', 1),
(53, 'Almirante Solier', 1),
(54, 'Alsina', 1),
(55, 'Altamira', 1),
(56, 'Altamirano', 1),
(57, 'Alta Vista', 1),
(58, 'Altona', 1),
(59, 'Alvarez de Toledo', 1),
(60, 'Alvarez Jonte', 1),
(61, 'Alvarino', 1),
(62, 'Alzaga', 1),
(63, 'Amalia', 1),
(64, 'Ameghino', 1),
(65, 'Anasagasti', 1),
(66, 'Anchorena', 1),
(67, 'Ancom', 1),
(68, 'Ancon', 1),
(69, 'Andant', 1),
(70, 'Anderson', 1),
(71, 'Angel Etcheverry', 1),
(72, 'Antonio Carboni', 1),
(73, 'Antonio Maya', 1),
(74, 'Aparicio', 1),
(75, 'Apeadero Punke', 1),
(76, 'A. Pessagno', 1),
(77, 'Aragon', 1),
(78, 'Arana', 1),
(79, 'Arano', 1),
(80, 'Araujo', 1),
(81, 'Arboledas', 1),
(82, 'Arbolito', 1),
(83, 'Arenales', 1),
(84, 'Arenaza', 1),
(85, 'Argerich', 1),
(86, 'Ariel', 1),
(87, 'A. Roca', 1),
(88, 'Arrecifes', 1),
(89, 'Arribenos', 1),
(90, 'Arroyo Corto', 1),
(91, 'Arroyo de la Cruz', 1),
(92, 'Arroyo del Medio', 1),
(93, 'Arroyo de los Heros', 1),
(94, 'Arroyo de los Huesos', 1),
(95, 'Arroyo Dulce', 1),
(96, 'Arroyo Nevado', 1),
(97, 'Arroyo Parejas', 1),
(98, 'Arroyo Venado', 1),
(99, 'Arturo Segui', 1),
(100, 'Arturo Vatteone', 1),
(101, 'Asamblea', 1),
(102, 'Ascension', 1),
(103, 'A. Segui', 1),
(104, 'Asturias', 1),
(105, 'Atahualpa', 1),
(106, 'Atalaya', 1),
(107, 'Atilio Pessagno', 1),
(108, 'Atucha', 1),
(109, 'Augustin Roca', 1),
(110, 'Avellaneda', 1),
(111, 'Avestruz', 1),
(112, 'Ayacucho', 1),
(113, 'Azcuenaga', 1),
(114, 'Azopardo', 1),
(115, 'Azucena', 1),
(116, 'Azul', 1),
(117, 'Bahia Blanca', 1),
(118, 'Bahia San Blas', 1),
(119, 'Baigorrita', 1),
(120, 'Bajo Hondo', 1),
(121, 'Balcarce', 1),
(122, 'Ballester', 1),
(123, 'Balneario Claromeco', 1),
(124, 'Balneario La Balandra', 1),
(125, 'Balneario Los Angles', 1),
(126, 'Balneario Mar Azul', 1),
(127, 'Balneario Mar Chiquita', 1),
(128, 'Balneario Mar de Ajo', 1),
(129, 'Balneario Monte Hermoso', 1),
(130, 'Balneario Oceano', 1),
(131, 'Balneario Orense', 1),
(132, 'Balneario Oriente', 1),
(133, 'Balneario Ostende', 1),
(134, 'Balneario Pehuen-Co', 1),
(135, 'Balneario Pinamar', 1),
(136, 'Balneario Punta Indio', 1),
(137, 'Balneario Reta', 1),
(138, 'Balneario San Clemente', 1),
(139, 'Balneario San Clemente del Tuyu', 1),
(140, 'Balneario Santa Teresa', 1),
(141, 'Balneario Sauce Grande', 1),
(142, 'Balsa', 1),
(143, 'Bancalari', 1),
(144, 'Banderalo', 1),
(145, 'Banfield', 1),
(146, 'Baradero', 1),
(147, 'Bariloche', 1),
(148, 'Barker', 1),
(149, 'Barrio Colina Alegre', 1),
(150, 'Barrio Colinas Verdes', 1),
(151, 'Barrio Colonia Alegre', 1),
(152, 'Barrio Comandante Piedrabuena', 1),
(153, 'Barrio Copacabana', 1),
(154, 'Barrio Cuidad Atlantida', 1),
(155, 'Barrio de Suboficiales', 1),
(156, 'Barrio El Retazo', 1),
(157, 'Barrio Felix U Camet', 1),
(158, 'Barrio Gottling', 1),
(159, 'Barrio Las Flores', 1),
(160, 'Barrio Los Zarzales', 1),
(161, 'Barrio Nuevo', 1),
(162, 'Barrio San Patricio', 1),
(163, 'Barrow', 1),
(164, 'Bartolome Mitre', 1),
(165, 'Batan', 1),
(166, 'Bathurst', 1),
(167, 'Baudrix', 1),
(168, 'Bayauca', 1),
(169, 'B. Duranona', 1),
(170, 'Beccar', 1),
(171, 'Belen', 1),
(172, 'Belen de Escobar', 1),
(173, 'Bella Vista', 1),
(174, 'Belloco', 1),
(175, 'Bellocq', 1),
(176, 'Benavides', 1),
(177, 'Benavidez', 1),
(178, 'Benitez', 1),
(179, 'Benito Juarez', 1),
(180, 'Berazategui', 1),
(181, 'Berdier', 1),
(182, 'Berisso', 1),
(183, 'Bermudez', 1),
(184, 'Bernal', 1),
(185, 'Berraondo', 1),
(186, 'Beruti', 1),
(187, 'Berutti', 1),
(188, 'Billinghurst', 1),
(189, 'Blanca Grande', 1),
(190, 'Blandengues', 1),
(191, 'Blaquier', 1),
(192, 'Blas Duranona', 1),
(193, 'Bocayuva', 1),
(194, 'Bolivar', 1),
(195, 'Bonifacio', 1),
(196, 'Bonnement', 1),
(197, 'Bordenave', 1),
(198, 'Bordeu', 1),
(199, 'Bosch', 1),
(200, 'Bosques', 1),
(201, 'Boulevard Atlantico', 1),
(202, 'Boulogne', 1),
(203, 'Bragado', 1),
(204, 'Brandsen', 1),
(205, 'Buchanan', 1),
(206, 'Buena Vista', 1),
(207, 'Bunge', 1),
(208, 'Burzaco', 1),
(209, 'B. Vista', 1),
(210, 'Cabildo', 1),
(211, 'Cachari', 1),
(212, 'Cadret', 1),
(213, 'Calderon', 1),
(214, 'Calera Avellaneda', 1),
(215, 'Calfucura', 1),
(216, 'Calva', 1),
(217, 'Calvo', 1),
(218, 'Cambaceres', 1),
(219, 'Camet', 1),
(220, 'Campana', 1),
(221, 'Campodonico', 1),
(222, 'Campo Salles', 1),
(223, 'Campos Salles', 1),
(224, 'Canada Seca', 1),
(225, 'Canada Seco', 1),
(226, 'Cangallo', 1),
(227, 'Canning', 1),
(228, 'Canonigo Gorriti', 1),
(229, 'Cantera Aguirre', 1),
(230, 'Canuelas', 1),
(231, 'Capilla', 1),
(232, 'Capilla del Senor', 1),
(233, 'Capitan Castro', 1),
(234, 'Capitan Sarmiento', 1),
(235, 'Carabelas', 1),
(236, 'Caraza', 1),
(237, 'Carboni', 1),
(238, 'Cardenal Cagliero', 1),
(239, 'Carhue', 1),
(240, 'Carlos Beguerie', 1),
(241, 'Carlos Beguerle', 1),
(242, 'Carlos Casares', 1),
(243, 'Carlos Keen', 1),
(244, 'Carlos Maria Naon', 1),
(245, 'Carlos M. Naon', 1),
(246, 'Carlos Naon', 1),
(247, 'Carlos Pellegrini', 1),
(248, 'Carlos Salas', 1),
(249, 'Carlos Tejedor', 1),
(250, 'Carmen de Areco', 1),
(251, 'Carmen de Patagones', 1),
(252, 'Casalins', 1),
(253, 'Casbas', 1),
(254, 'Cascada', 1),
(255, 'Caseros', 1),
(256, 'Casey', 1),
(257, 'Castelar', 1),
(258, 'Castelli', 1),
(259, 'Castilla', 1),
(260, 'Cazon', 1),
(261, 'C. Beguerie', 1),
(262, 'C. Cagliero', 1),
(263, 'C. Casares', 1),
(264, 'C. de Areco', 1),
(265, 'C. de Mayo', 1),
(266, 'Centenario', 1),
(267, 'Centinela del Mar', 1),
(268, 'Centro Guerrero', 1),
(269, 'Centro Urquiza', 1),
(270, 'Cerrito', 1),
(271, 'Cerro de la Gloria', 1),
(272, 'Cerro Negro', 1),
(273, 'Cerro Sotuyo', 1),
(274, 'Chacabuco', 1),
(275, 'Chancay', 1),
(276, 'Chapadmalal', 1),
(277, 'Chapaleofu', 1),
(278, 'Charlone', 1),
(279, 'Chas', 1),
(280, 'Chascomus', 1),
(281, 'Chasico', 1),
(282, 'Chenaut', 1),
(283, 'Chiclana', 1),
(284, 'Chillar', 1),
(285, 'Chivilcoy', 1),
(286, 'Choique', 1),
(287, 'City Bell', 1),
(288, 'Ciudadela', 1),
(289, 'Ciudad Evita', 1),
(290, 'Ciudad General Belgrano', 1),
(291, 'Ciudad Seca', 1),
(292, 'C. Keen', 1),
(293, 'Claraz', 1),
(294, 'Claromeco', 1),
(295, 'Claudio Molina', 1),
(296, 'Claypole', 1),
(297, 'C.M. Naon', 1),
(298, 'C. Molina', 1),
(299, 'Cobo', 1),
(300, 'Cochrane', 1),
(301, 'Coliqueo', 1),
(302, 'Colman', 1),
(303, 'Coloma', 1),
(304, 'Colon', 1),
(305, 'Colonia Barragan', 1),
(306, 'Colonia Cabildo', 1),
(307, 'Colonia Chapadmalal', 1),
(308, 'Colonia Hinojo', 1),
(309, 'Colonia Hogar R. Gutierrez', 1),
(310, 'Colonia Hogar Ricardo Gutierrez', 1),
(311, 'Colonia Martin Fierro', 1),
(312, 'Colonia Mauricio', 1),
(313, 'Colonia Monte La Plata', 1),
(314, 'Colonia Nacional de Menores', 1),
(315, 'Colonia Nieves', 1),
(316, 'Colonia Numero 1', 1),
(317, 'Colonia Numero 2', 1),
(318, 'Colonia Numero 3', 1),
(319, 'Colonia San Martin', 1),
(320, 'Colonia San Miguel Arcangel', 1),
(321, 'Colonia San Miguel', 1),
(322, 'Colonia San Pedro', 1),
(323, 'Colonia Santa Rosa', 1),
(324, 'Colonia Sere', 1),
(325, 'Colonia Velaz', 1),
(326, 'Colonia Vignaud', 1),
(327, 'Colonia Villa Maria', 1),
(328, 'Comandante Giribone', 1),
(329, 'Comandante Nicanor Otamendi', 1),
(330, 'Comodoro Py', 1),
(331, 'Conchitas', 1),
(332, 'Condarco', 1),
(333, 'Conesa', 1),
(334, 'Coraceros', 1),
(335, 'Corazzi', 1),
(336, 'Corbett', 1),
(337, 'Coronel Boerr', 1),
(338, 'Coronel Brandsen', 1),
(339, 'Coronel Bunge', 1),
(340, 'Coronel Charlone', 1),
(341, 'Coronel Dorrego', 1),
(342, 'Coronel Falcon', 1),
(343, 'Coronel Granada', 1),
(344, 'Coronel Isleno', 1),
(345, 'Coronel Isteno', 1),
(346, 'Coronel Martinez de Hoz', 1),
(347, 'Coronel M. de Hoz', 1),
(348, 'Coronel Mom', 1),
(349, 'Coronel Mon', 1),
(350, 'Coronel Pringles', 1),
(351, 'Coronel R. Bunge', 1),
(352, 'Coronel Rodolfo Bunge', 1),
(353, 'Coronel Segui', 1),
(354, 'Coronel Suarez', 1),
(355, 'Coronel Vidal', 1),
(356, 'Correas', 1),
(357, 'Corti', 1),
(358, 'Cortines', 1),
(359, 'Costa Bonita', 1),
(360, 'Covello', 1),
(361, 'Cristiano Muerto', 1),
(362, 'Crotto', 1),
(363, 'C. Salas', 1),
(364, 'C. Tejedor', 1),
(365, 'Cuatreros', 1),
(366, 'Cuatro de Noviembre', 1),
(367, 'Cucha Cucha', 1),
(368, 'Cucullu', 1),
(369, 'Cura Malal', 1),
(370, 'Curaru', 1),
(371, 'Curramalan', 1),
(372, 'Curumalan', 1),
(373, 'Daireaux', 1),
(374, 'Darragueira', 1),
(375, 'Darregueira', 1),
(376, 'De Bary', 1),
(377, 'De Bruyn', 1),
(378, 'Defferrari', 1),
(379, 'De La Canal', 1),
(380, 'De la Garma', 1),
(381, 'Del Carril', 1),
(382, 'Delfin Huergo', 1),
(383, 'Delgado', 1),
(384, 'Del Valle', 1),
(385, 'Del Viso', 1),
(386, 'Dennehy', 1),
(387, 'Derechos de la Ancianidad', 1),
(388, 'Derqui', 1),
(389, 'Desvio Toledo', 1),
(390, 'D. Gaynor', 1),
(391, 'D. Harosteguy', 1),
(392, 'D. Huergo', 1),
(393, 'Diamante', 1),
(394, 'Dieciseis de Julio', 1),
(395, 'Diecisiete de Agosto', 1),
(396, 'Diego Gaynor', 1),
(397, 'Dionisia', 1),
(398, 'Dique Lujan', 1),
(399, 'Doce de Agosto', 1),
(400, 'Doce de Octubre', 1),
(401, 'Dock Sud', 1),
(402, 'Dock Sur', 1),
(403, 'Doctor Domingo Harosteguy', 1),
(404, 'Dolores', 1),
(405, 'Domselaar', 1),
(406, 'Don Bosco', 1),
(407, 'Don Cipriano', 1),
(408, 'Don Torcuato', 1),
(409, 'D\'Orbigny', 1),
(410, 'Dorrego', 1),
(411, 'Dos Naciones', 1),
(412, 'Doyhenard', 1),
(413, 'Drabble', 1),
(414, 'Drysdale', 1),
(415, 'Ducos', 1),
(416, 'Dudignac', 1),
(417, 'Dufaur', 1),
(418, 'Duggan', 1),
(419, 'Duranona', 1),
(420, 'Dussaud', 1),
(421, 'E.A. Gascon', 1),
(422, 'E. Ayarza', 1),
(423, 'E. Bancalari', 1),
(424, 'E.B. Perkins', 1),
(425, 'Echegoyen', 1),
(426, 'E. Costa', 1),
(427, 'E. de Luca', 1),
(428, 'Edmundo B. Perkins', 1),
(429, 'Eduardo Costa', 1),
(430, 'E. Fynn', 1),
(431, 'Egana', 1),
(432, 'E. Lamarca', 1),
(433, 'El Arbolito', 1),
(434, 'El Boqueron', 1),
(435, 'El Coyunco', 1),
(436, 'Eldia', 1),
(437, 'El Divisorio', 1),
(438, 'El Dorado', 1),
(439, 'Elias Romero', 1),
(440, 'Elida', 1),
(441, 'El Jabali', 1),
(442, 'El Lenguaraz', 1),
(443, 'El Mangrullo', 1),
(444, 'El Moro', 1),
(445, 'Elordi', 1),
(446, 'El Palomar', 1),
(447, 'El Paraiso', 1),
(448, 'El Parche', 1),
(449, 'El Pensamiento', 1),
(450, 'El Porvenir', 1),
(451, 'El Recado', 1),
(452, 'El Sauce', 1),
(453, 'El Socorro', 1),
(454, 'El Talar de Pacheco', 1),
(455, 'El Talar', 1),
(456, 'El Tejar', 1),
(457, 'El Trigo', 1),
(458, 'El Triunfo', 1),
(459, 'El Verano', 1),
(460, 'Elvira', 1),
(461, 'El Zorro', 1),
(462, 'Emiliano Reynoso', 1),
(463, 'Emilio Ayarza', 1),
(464, 'Emilio Lamarca', 1),
(465, 'Emilio V. Bunge', 1),
(466, 'Emita', 1),
(467, 'Emma', 1),
(468, 'Empalme', 1),
(469, 'Empalme Lacroze', 1),
(470, 'Empalme Lobos', 1),
(471, 'Empalme San Vicente', 1),
(472, 'Encina', 1),
(473, 'Energia', 1),
(474, 'Enrique Fynn', 1),
(475, 'Enrique Guillermo Hudson', 1),
(476, 'Enrique Lavalle', 1),
(477, 'Ensenada Berisso', 1),
(478, 'Ensenada', 1),
(479, 'E. Perkins', 1),
(480, 'Erescano', 1),
(481, 'E. Reynoso', 1),
(482, 'Erize', 1),
(483, 'Ernestina', 1),
(484, 'E. Romero', 1),
(485, 'Escalada', 1),
(486, 'Escobar', 1),
(487, 'Espartillar', 1),
(488, 'Espeleta', 1),
(489, 'Espigas', 1),
(490, 'Espora', 1),
(491, 'Esquina Negra', 1),
(492, 'Estacion Arenales', 1),
(493, 'Estacion El Jabali', 1),
(494, 'Estacion Ramallo', 1),
(495, 'Estacion San Andres', 1),
(496, 'Estanislao S. Zeballos', 1),
(497, 'Esteban A. Gascon', 1),
(498, 'Esteban Agustin Gascon', 1),
(499, 'Esteban de Luca', 1),
(500, 'Esteban Echeverria', 1),
(501, 'Esteban Etchevarria', 1),
(502, 'Estela', 1),
(503, 'Esther', 1),
(504, 'Estomba', 1),
(505, 'Estrugamou', 1),
(506, 'E. S. Zeballos', 1),
(507, 'Etchegoyen', 1),
(508, 'Eva Peron', 1),
(509, 'E.V. Bunge', 1),
(510, 'Ezeiza', 1),
(511, 'Ezpeleta', 1),
(512, 'F.A. Berra', 1),
(513, 'Fair', 1),
(514, 'F. Alvarez', 1),
(515, 'Faro', 1),
(516, 'Fatima', 1),
(517, 'Fatralo', 1),
(518, 'Fauzon', 1),
(519, 'F. Ayerza', 1),
(520, 'Fco. de Vitoria', 1),
(521, 'Felipe Sola', 1),
(522, 'Fernando Marti', 1),
(523, 'Ferre', 1),
(524, 'Finca Olavarria', 1),
(525, 'Fiorito', 1),
(526, 'Florencio Varela', 1),
(527, 'Florida', 1),
(528, 'F. Madero', 1),
(529, 'F. Magnano', 1),
(530, 'F. Marti', 1),
(531, 'F. Murature', 1),
(532, 'Fontezuela', 1),
(533, 'Fortin Acha', 1),
(534, 'Fortin de Victoria', 1),
(535, 'Fortin Olavarria', 1),
(536, 'Fortin Tiburcio', 1),
(537, 'Fortin Vigilancia', 1),
(538, 'Francisco A. Berra', 1),
(539, 'Francisco Alvarez', 1),
(540, 'Francisco Ayerza', 1),
(541, 'Francisco de Victoria', 1),
(542, 'Francisco de Vitoria', 1),
(543, 'Francisco Madero', 1),
(544, 'Francisco Magnano', 1),
(545, 'Francisco Murature', 1),
(546, 'Franklin', 1),
(547, 'French', 1),
(548, 'Fulton', 1),
(549, 'F. Varela', 1),
(550, 'Gahan', 1),
(551, 'Gallo Llorente', 1),
(552, 'Galo Llorente', 1),
(553, 'Galvan', 1),
(554, 'Gandara', 1),
(555, 'Garcia del Rio', 1),
(556, 'Gardey', 1),
(557, 'Garin', 1),
(558, 'Garre', 1),
(559, 'Gaynor Diego', 1),
(560, 'G. Catan', 1),
(561, 'General Alvarado', 1),
(562, 'General Alvear', 1),
(563, 'General Arenales', 1),
(564, 'General Belgrano', 1),
(565, 'General Cerri', 1),
(566, 'General Charlone', 1),
(567, 'General Conesa', 1),
(568, 'General Daniel Cerri', 1),
(569, 'General D. Cerri', 1),
(570, 'General F. Lynch', 1),
(571, 'General Guido', 1),
(572, 'General Hornos', 1),
(573, 'General J.F. Uriburu', 1),
(574, 'General J. Madariaga', 1),
(575, 'General Jose F. Uriburu', 1),
(576, 'General Juan D. Peron', 1),
(577, 'General Juan Madariaga', 1),
(578, 'General La Madrid', 1),
(579, 'General Las Heras', 1),
(580, 'General Lavalle', 1),
(581, 'General Madariaga', 1),
(582, 'General Mansilla', 1),
(583, 'General Martin Miguel de Guemes', 1),
(584, 'General O\'Brien', 1),
(585, 'General Pacheco', 1),
(586, 'General Paz', 1),
(587, 'General Pinto', 1),
(588, 'General Pintos', 1),
(589, 'General Piran', 1),
(590, 'General Rodriguez', 1),
(591, 'General Rojo', 1),
(592, 'General Rondeau', 1),
(593, 'General San Martin', 1),
(594, 'General Sarmiento', 1),
(595, 'General Uriburu', 1),
(596, 'General Viamonte', 1),
(597, 'General Villegas', 1),
(598, 'Gerente Cilley', 1),
(599, 'Gerli', 1),
(600, 'Germania', 1),
(601, 'Gil', 1),
(602, 'Girodias', 1),
(603, 'Girondo', 1),
(604, 'Glew', 1),
(605, 'G. Llorente', 1),
(606, 'Gnecco', 1),
(607, 'Gobernador Andonaegui', 1),
(608, 'Gobernador Arias', 1),
(609, 'Gobernador Castro', 1),
(610, 'Gobernador de la Vega', 1),
(611, 'Gobernador Monteverde', 1),
(612, 'Gobernador Obligado', 1),
(613, 'Gobernador Ubligado', 1),
(614, 'Gobernador Udaondo', 1),
(615, 'Gobernador Ugarte', 1),
(616, 'Goldey', 1),
(617, 'Goldney', 1),
(618, 'Gomez de la Vega', 1),
(619, 'Gomez', 1),
(620, 'Gondra', 1),
(621, 'Gonnet', 1),
(622, 'Gonzalez Calan', 1),
(623, 'Gonzalez Catan', 1),
(624, 'Gonzalez Chaves', 1),
(625, 'Gonzalez Morena', 1),
(626, 'Gonzalez Moreno', 1),
(627, 'Gonzalez Risos', 1),
(628, 'Gorchs', 1),
(629, 'Gorina', 1),
(630, 'Gorostiaga', 1),
(631, 'Gouin', 1),
(632, 'Gowland', 1),
(633, 'Gowlan', 1),
(634, 'Goyena', 1),
(635, 'Goyeneche', 1),
(636, 'Graciarena', 1),
(637, 'Grand Bourg', 1),
(638, 'Gregorio Villafane', 1),
(639, 'G. Risos', 1),
(640, 'Grunbein', 1),
(641, 'Guamini', 1),
(642, 'Guanaco', 1),
(643, 'Guernica', 1),
(644, 'Guerrero', 1),
(645, 'Guerrico', 1),
(646, 'Guido', 1),
(647, 'Guido Spano', 1),
(648, 'Gunther', 1),
(649, 'G. Villafane', 1),
(650, 'Haedo', 1),
(651, 'Hale', 1),
(652, 'Ham', 1),
(653, 'Heavy', 1),
(654, 'Henderson', 1),
(655, 'Henry Bell', 1),
(656, 'Hereford', 1),
(657, 'Herrera Vegas', 1),
(658, 'Hilario Ascasubi', 1),
(659, 'Hinojo', 1),
(660, 'Hortensia', 1),
(661, 'Huanguelen', 1),
(662, 'Huergo', 1),
(663, 'Hunter', 1),
(664, 'Hurlingham', 1),
(665, 'Husares', 1),
(666, 'Ibanez', 1),
(667, 'I. Casanova', 1),
(668, 'I. Correas', 1),
(669, 'Igarzabal', 1),
(670, 'Ignacio Correas', 1),
(671, 'Ilario Ascasubi', 1),
(672, 'Indacochea', 1),
(673, 'Indio Rico', 1),
(674, 'Ines Indart', 1),
(675, 'Ingeniero Balbin', 1),
(676, 'Ingeniero Beaugey', 1),
(677, 'Ingeniero Budge', 1),
(678, 'Ingeniero De Madrid', 1),
(679, 'Ingeniero J. Allan', 1),
(680, 'Ingeniero Maschwitz', 1),
(681, 'Ingeniero Moneta', 1),
(682, 'Ingeniero Otamendi', 1),
(683, 'Ingeniero Romulo Otamendi', 1),
(684, 'Ingeniero Silveira', 1),
(685, 'Ingeniero Silveyra', 1),
(686, 'Ingeniero Thompson', 1),
(687, 'Ingeniero White', 1),
(688, 'Ingeniero Williams', 1),
(689, 'Inocencio Sosa', 1),
(690, 'Invernadas', 1),
(691, 'I. Portela', 1),
(692, 'Iraizoz', 1),
(693, 'Irala', 1),
(694, 'Iraola', 1),
(695, 'Irene', 1),
(696, 'Ireneo Portela', 1),
(697, 'Iriarte', 1),
(698, 'Isidro Casanova', 1),
(699, 'Islas', 1),
(700, 'I. Sosa', 1),
(701, 'Iturregui', 1),
(702, 'Ituzaingo', 1),
(703, 'J.A. de la Pena', 1),
(704, 'J.A. Guisasola', 1),
(705, 'J.A. Pradere', 1),
(706, 'J. Arditi', 1),
(707, 'J. Atucha', 1),
(708, 'Jauregui', 1),
(709, 'J.B. Alberdi', 1),
(710, 'J. Blaguier', 1),
(711, 'J. Blaquier', 1),
(712, 'J. Caderocco', 1),
(713, 'J. Couste', 1),
(714, 'J.E. Barra', 1),
(715, 'Jeppener', 1),
(716, 'J. Ferrari', 1),
(717, 'J.F. Ibarra', 1),
(718, 'J. Hernandez', 1),
(719, 'J.J. Almeyra', 1),
(720, 'J.J. Paso', 1),
(721, 'J. Leon Suarez', 1),
(722, 'J.L. Suarez', 1),
(723, 'J.M. Bosch', 1),
(724, 'J.M. Micheo', 1),
(725, 'J.N. Fernandez', 1),
(726, 'Joaquin Gorina', 1),
(727, 'Jose A. Guisasola', 1),
(728, 'Jose B. Casas', 1),
(729, 'Jose C. Paz', 1),
(730, 'Jose Ferrari', 1),
(731, 'Jose Hernandez', 1),
(732, 'Jose Leon Suarez', 1),
(733, 'Jose L. Suarez', 1),
(734, 'Jose Maria Blanco', 1),
(735, 'Jose Maria Gutierrez', 1),
(736, 'Jose Maria Micheo', 1),
(737, 'Jose Marmol', 1),
(738, 'Jose M. Blanco', 1),
(739, 'Jose M. Micheo', 1),
(740, 'Jose R. Sojo', 1),
(741, 'Jose Santos Arevalo', 1),
(742, 'Jose S. Arevalo', 1),
(743, 'Jose V. Casas', 1),
(744, 'J. Pradere', 1),
(745, 'J.R. Sojo', 1),
(746, 'J. Santos Arevalo', 1),
(747, 'J.S. Arevalo', 1),
(748, 'J. Tronconi', 1),
(749, 'Juan A. de la Pena', 1),
(750, 'Juan Anchorena', 1),
(751, 'Juan A. Pradere', 1),
(752, 'Juan Atucha', 1),
(753, 'Juan B. Alberdi', 1),
(754, 'Juan Bautista Alberdi', 1),
(755, 'Juan Blaquier', 1),
(756, 'Juancho', 1),
(757, 'Juan Couste', 1),
(758, 'Juan E. Barra', 1),
(759, 'Juan F. Ibarra', 1),
(760, 'Juan J. Almeyra', 1),
(761, 'Juan Jose Almeyra', 1),
(762, 'Juan Jose Paso', 1),
(763, 'Juan J. Paso', 1),
(764, 'Juan Maria Gutierrez', 1),
(765, 'Juan N. Fernandez', 1),
(766, 'Juan Pradere', 1),
(767, 'Juan Pujol', 1),
(768, 'Juan Tronconi', 1),
(769, 'Juan Vucetich', 1),
(770, 'Juarez', 1),
(771, 'Julio Arditi', 1),
(772, 'Junin', 1),
(773, 'Kenny', 1),
(774, 'Kilometro 132', 1),
(775, 'Kilometro 158', 1),
(776, 'Kilometro 99', 1),
(777, 'Krabbe', 1),
(778, 'La Angelita', 1),
(779, 'La Aurora', 1),
(780, 'Labarden', 1),
(781, 'La Barrancosa', 1),
(782, 'La Beba', 1),
(783, 'La Bolsa', 1),
(784, 'La Carreta', 1),
(785, 'La Choza', 1),
(786, 'La Colina', 1),
(787, 'La Constancia', 1),
(788, 'La Cotorra', 1),
(789, 'La Delfina', 1),
(790, 'La Dorita', 1),
(791, 'La Dulce', 1),
(792, 'La Emilia', 1),
(793, 'La Estafeta', 1),
(794, 'Laferrere', 1),
(795, 'La Gloria', 1),
(796, 'Lago Epecuen', 1),
(797, 'Laguna Alsina', 1),
(798, 'La Invencible', 1),
(799, 'La Larga', 1),
(800, 'La Limpia', 1),
(801, 'La Lucila del Mar', 1),
(802, 'La Lucila', 1),
(803, 'La Luisa', 1),
(804, 'La Manuela', 1),
(805, 'La Mascota', 1),
(806, 'La Negra', 1),
(807, 'La Nevada', 1),
(808, 'Langueyu', 1),
(809, 'La Nina', 1),
(810, 'La Noria', 1),
(811, 'La Nueva Plata', 1),
(812, 'Lanus', 1),
(813, 'La Oriental', 1),
(814, 'La Pala', 1),
(815, 'La Pastora', 1),
(816, 'La Paz Chica', 1),
(817, 'La Paz', 1),
(818, 'La Pinta', 1),
(819, 'Laplacette', 1),
(820, 'La Plata', 1),
(821, 'La Portena', 1),
(822, 'Laprida', 1),
(823, 'La Primavera', 1),
(824, 'La Providencia', 1),
(825, 'La Reforma', 1),
(826, 'La Reja', 1),
(827, 'La Rica', 1),
(828, 'Larligau', 1),
(829, 'Larramendy', 1),
(830, 'Larrea', 1),
(831, 'Lartigau', 1),
(832, 'Las Armas', 1),
(833, 'Las Chacras', 1),
(834, 'Las Colinas de Peralta Ramos', 1),
(835, 'Las Conchas', 1),
(836, 'Las Flores', 1),
(837, 'Las Hermanas', 1),
(838, 'Las Huertas', 1),
(839, 'Las Juanitas', 1),
(840, 'Las Marianas', 1),
(841, 'Las Martinetas', 1),
(842, 'Las Mostazas', 1),
(843, 'Las Nutrias', 1),
(844, 'La Sofia', 1),
(845, 'La Sortija', 1),
(846, 'Las Palmas', 1),
(847, 'Las Parvas', 1),
(848, 'Las Piedritas', 1),
(849, 'Las Pipinas', 1),
(850, 'Las Tahonas', 1),
(851, 'Las Toninas', 1),
(852, 'Las Toscas', 1),
(853, 'Lastra', 1),
(854, 'Las Vaquerias', 1),
(855, 'Las Vasquerias', 1),
(856, 'La Torrecita', 1),
(857, 'La Trinidad', 1),
(858, 'Lavalia', 1),
(859, 'Lavalle', 1),
(860, 'La Vanguardia', 1),
(861, 'La Verde', 1),
(862, 'La Violeta', 1),
(863, 'La Virginia', 1),
(864, 'La Viruta', 1),
(865, 'La Viticola', 1),
(866, 'La Zanja', 1),
(867, 'Lazzarino', 1),
(868, 'Leandro Alem', 1),
(869, 'Leandro N. Alem', 1),
(870, 'Lertora', 1),
(871, 'Leubuco', 1),
(872, 'Lezama', 1),
(873, 'L. Guillon', 1),
(874, 'Libano', 1),
(875, 'Libertad', 1),
(876, 'Libres del Sud', 1),
(877, 'Libres del Sur', 1),
(878, 'Licenciado Matienzo', 1),
(879, 'Lima', 1),
(880, 'Lin Calel', 1),
(881, 'Linch', 1),
(882, 'Lincoln', 1),
(883, 'Llavallol', 1),
(884, 'Llevallol', 1),
(885, 'L. Matienzo', 1),
(886, 'L. Monteverde', 1),
(887, 'L.N. Alem', 1),
(888, 'Lnch', 1),
(889, 'Loberia', 1),
(890, 'Lobos', 1),
(891, 'Loma Negra', 1),
(892, 'Lomas del Mirador', 1),
(893, 'Lomas de Zamora', 1),
(894, 'Loma Verde', 1),
(895, 'Longchamps', 1),
(896, 'Lopez Camelo', 1),
(897, 'Lopez Lecube', 1),
(898, 'Lopez', 1),
(899, 'Los Acantilados', 1),
(900, 'Los Angeles', 1),
(901, 'Los Cardales', 1),
(902, 'Los Indios', 1),
(903, 'Los Laureles', 1),
(904, 'Los Palverines', 1),
(905, 'Los Pinos', 1),
(906, 'Los Polvorines', 1),
(907, 'Los Toldos', 1),
(908, 'Louge', 1),
(909, 'Lozano', 1),
(910, 'Lucas Monieverde', 1),
(911, 'Lucas Monteverde', 1),
(912, 'Luis Guillon', 1),
(913, 'Lujan', 1),
(914, 'Lumb', 1),
(915, 'Luro', 1),
(916, 'Lynch', 1),
(917, 'Macedo', 1),
(918, 'M. Acosta', 1),
(919, 'Magdala', 1),
(920, 'Magdalena', 1),
(921, 'Magnano', 1),
(922, 'Maguire', 1),
(923, 'Maipu', 1),
(924, 'Mamaguita', 1),
(925, 'Manantiales Chicos', 1),
(926, 'Manantiales Grandes', 1),
(927, 'Manantiales', 1),
(928, 'Manuel B. Gonnet', 1),
(929, 'Manuel J. Cobo', 1),
(930, 'Manuel J. Garcia', 1),
(931, 'Manuel Jose Garcia', 1),
(932, 'Manuel Ocampo', 1),
(933, 'Manzanares', 1),
(934, 'Manzone', 1),
(935, 'Mapis', 1),
(936, 'Maquinista Savio', 1),
(937, 'Marcelino Ugarte', 1),
(938, 'Mar Chiquita', 1),
(939, 'Marcos Paz', 1),
(940, 'Mar de Ajo', 1),
(941, 'Mar de Cobo', 1),
(942, 'Mar del Plata', 1),
(943, 'Mar del Sud', 1),
(944, 'Mar del Sur', 1),
(945, 'Mar del Tuyu', 1),
(946, 'Mar de Ostende', 1),
(947, 'Mar de Plata', 1),
(948, 'Maria Ignacia', 1),
(949, 'Maria Lucila', 1),
(950, 'Mariana Acosta', 1),
(951, 'Mariano Acosta', 1),
(952, 'Mariano Benitez', 1),
(953, 'Mariano H. Alfonso', 1),
(954, 'Mariano H. Alfonzo', 1),
(955, 'Mariano J. Haedo', 1),
(956, 'Mariano Moreno', 1),
(957, 'Mariano Roldan', 1),
(958, 'Mariano Unzue', 1),
(959, 'Mari Lauquen', 1),
(960, 'Marmol', 1),
(961, 'Martin Berrahondo', 1),
(962, 'Martin Berraondo', 1),
(963, 'Martin Colman', 1),
(964, 'Martinez de Hoz', 1),
(965, 'Martinez', 1),
(966, 'Martin Fierro', 1),
(967, 'Marucha', 1),
(968, 'Mascota', 1),
(969, 'Matheu', 1),
(970, 'Mathew', 1),
(971, 'Mauricio Hirch', 1),
(972, 'Mauricio Hirsch', 1),
(973, 'Mauricio', 1),
(974, 'Maximo Fernandez', 1),
(975, 'Maximo Paz', 1),
(976, 'Mayor Buratovich', 1),
(977, 'Mayor J. Orellano', 1),
(978, 'Maza', 1),
(979, 'M. Benitez', 1),
(980, 'M. Berraondo', 1),
(981, 'M. Cascallares', 1),
(982, 'M. Colman', 1),
(983, 'M. de Hoz', 1),
(984, 'M. de Pinazo', 1),
(985, 'Mechita', 1),
(986, 'Mechongue', 1),
(987, 'Medanos', 1),
(988, 'Melchor Buchanan', 1),
(989, 'Melchor Romero', 1),
(990, 'Membrillar', 1),
(991, 'Mercedes', 1),
(992, 'Meridiano', 1),
(993, 'Meridiano Quinto', 1),
(994, 'Merlo', 1),
(995, 'M. Fernandez', 1),
(996, 'M. Fierro', 1),
(997, 'M.H. Alfonso', 1),
(998, 'M. Hirsch', 1),
(999, 'Micaela Cascallares', 1),
(1000, 'Ministro Pistarini', 1),
(1001, 'Ministro Rivadavia', 1),
(1002, 'Miramar', 1),
(1003, 'Miramonte', 1),
(1004, 'Miranda', 1),
(1005, 'Mira Pampa', 1),
(1006, 'M.J. Garcia', 1),
(1007, 'M. Ocampo', 1),
(1008, 'Moctezuma', 1),
(1009, 'Moguehua', 1),
(1010, 'Moll', 1),
(1011, 'Monasterio', 1),
(1012, 'Mones Cazon', 1),
(1013, 'Monroe', 1),
(1014, 'Monsalvo', 1),
(1015, 'Monte Chingolo', 1),
(1016, 'Monte Grande', 1),
(1017, 'Monte Hermoso', 1),
(1018, 'Montes de Oca', 1),
(1019, 'Monte Veloz', 1),
(1020, 'Monteverde', 1),
(1021, 'Moores', 1),
(1022, 'Moquehua', 1),
(1023, 'Morea', 1),
(1024, 'Moreno', 1),
(1025, 'Moron', 1),
(1026, 'Morse', 1),
(1027, 'Mosconi', 1),
(1028, 'Mouras', 1),
(1029, 'M. Paz', 1),
(1030, 'M. Roldan', 1),
(1031, 'M. Romero', 1),
(1032, 'M. Ugarte', 1),
(1033, 'Mulcahy', 1),
(1034, 'Muñiz', 1),
(1035, 'Munoz', 1),
(1036, 'Munro', 1),
(1037, 'Nahuel Ruca', 1),
(1038, 'Napaleofu', 1),
(1039, 'Naposta', 1),
(1040, 'Naranja', 1),
(1041, 'Navarro', 1),
(1042, 'N. de la Riestra', 1),
(1043, 'N. Descalzi', 1),
(1044, 'Necochea', 1),
(1045, 'Necol', 1),
(1046, 'Neild', 1),
(1047, 'Newton', 1),
(1048, 'Nicanor Olivera', 1),
(1049, 'Nicolas Descalzi', 1),
(1050, 'Nicolas Levalle', 1),
(1051, 'Nieves', 1),
(1052, 'Norberto de la Riestra', 1),
(1053, 'Norumbega', 1),
(1054, 'Nueva Plata', 1),
(1055, 'Nueva Roma', 1),
(1056, 'Nueve de Julio', 1),
(1057, 'O. Aballe', 1),
(1058, 'O. Basualdo', 1),
(1059, 'Obligado', 1),
(1060, 'O\'Brien', 1),
(1061, 'Ochandio', 1),
(1062, 'O\'Higgins', 1),
(1063, 'Olascoaga', 1),
(1064, 'Olavarria', 1),
(1065, 'Oliden', 1),
(1066, 'Olivera', 1),
(1067, 'Olivos', 1),
(1068, 'Ombucta', 1),
(1069, 'Ombucto', 1),
(1070, 'Ombu', 1),
(1071, 'Open Door', 1),
(1072, 'Ordoqui', 1),
(1073, 'Orense', 1),
(1074, 'Oriente', 1),
(1075, 'Ortiz Basualdo', 1),
(1076, 'Ortiz de Rosas', 1),
(1077, 'Ortiz de Rozas', 1),
(1078, 'Ostende', 1),
(1079, 'Ostendi', 1),
(1080, 'Otamendi', 1),
(1081, 'Pablo Acosta', 1),
(1082, 'Pablo Acosto', 1),
(1083, 'P. Acosta', 1),
(1084, 'Palantelen', 1),
(1085, 'Palemon Huergo', 1),
(1086, 'Papin', 1),
(1087, 'Paraguil', 1),
(1088, 'Paraje El Gavilan', 1),
(1089, 'Paraje Santa Catalina', 1),
(1090, 'Paraje San Vicente', 1),
(1091, 'Pardo', 1),
(1092, 'Pareje Punta Piedras', 1),
(1093, 'Parish', 1),
(1094, 'Parque Camet', 1),
(1095, 'Parravicini', 1),
(1096, 'Pasman', 1),
(1097, 'Paso del Rey', 1),
(1098, 'Paso Mayor', 1),
(1099, 'Paso', 1),
(1100, 'Passo', 1),
(1101, 'Pasteur', 1),
(1102, 'Patagones', 1),
(1103, 'Patricios', 1),
(1104, 'Paula', 1),
(1105, 'Pavon', 1),
(1106, 'Pazos Kanki', 1),
(1107, 'Pearson', 1),
(1108, 'Pedernales', 1),
(1109, 'Pedro Gamen', 1),
(1110, 'Pedro Luro', 1),
(1111, 'Pedro N. Escribano', 1),
(1112, 'Pedro Nicolas Escribano', 1),
(1113, 'Pedro P. Lasalle', 1),
(1114, 'Pedro P. Lassalle', 1),
(1115, 'Pehuajo', 1),
(1116, 'Pehuelches', 1),
(1117, 'Pehuen-Co', 1),
(1118, 'Pelicura', 1),
(1119, 'Pellegrini', 1),
(1120, 'Peralta', 1),
(1121, 'Peralta Ramos', 1),
(1122, 'Perdido', 1),
(1123, 'Pereyra', 1),
(1124, 'Perez Millan', 1),
(1125, 'Pergamino', 1),
(1126, 'P. Gamen', 1),
(1127, 'P. Huergo', 1),
(1128, 'Pichincha', 1),
(1129, 'Piedra Echada', 1),
(1130, 'Piedra Hechada', 1),
(1131, 'Piedritas', 1),
(1132, 'Pieres', 1),
(1133, 'Pierini', 1),
(1134, 'Pigue', 1),
(1135, 'Pila', 1),
(1136, 'Pilar', 1),
(1137, 'Pillahuinco', 1),
(1138, 'Pinamar', 1),
(1139, 'Pinero', 1),
(1140, 'Piñeyro', 1),
(1141, 'Pinzon', 1),
(1142, 'Pipinas', 1),
(1143, 'Pirovano', 1),
(1144, 'Pla', 1),
(1145, 'Platanos', 1),
(1146, 'Plaza Montero', 1),
(1147, 'Plomer', 1),
(1148, 'P. Millan', 1),
(1149, 'P. N. Escribano', 1),
(1150, 'Poblet', 1),
(1151, 'Polvaredas', 1),
(1152, 'Polvorines', 1),
(1153, 'Pontaut', 1),
(1154, 'Pontevedra', 1),
(1155, 'Port Cuatreros', 1),
(1156, 'Porvenir', 1),
(1157, 'Pourtale', 1),
(1158, 'P.P. Lassalle', 1),
(1159, 'Presidente Derqui', 1),
(1160, 'Presidente Quintana', 1),
(1161, 'Primera Junta', 1),
(1162, 'Pringles', 1),
(1163, 'Puan', 1),
(1164, 'Pueblitos', 1),
(1165, 'Pueblo Nuevo', 1),
(1166, 'Pueblo San Jose', 1),
(1167, 'Puente Cascallares', 1),
(1168, 'Puerto Arroyo Pareja', 1),
(1169, 'Puerto Belgrano', 1),
(1170, 'Puerto Cuatreros', 1),
(1171, 'Puerto de Quequen', 1),
(1172, 'Puerto Galvan', 1),
(1173, 'Puerto Ingeniero White', 1),
(1174, 'Puerto Obligado', 1),
(1175, 'Puerto Quequen', 1),
(1176, 'Puerto Rosales', 1),
(1177, 'Pujol', 1),
(1178, 'Punta Alta', 1),
(1179, 'Punta Chica', 1),
(1180, 'Punta Indio', 1),
(1181, 'Punta Lara', 1),
(1182, 'Punto Obligado', 1),
(1183, 'Quenoma', 1),
(1184, 'Quenuma', 1),
(1185, 'Quequen', 1),
(1186, 'Quilco', 1),
(1187, 'Quilmes', 1),
(1188, 'Quinihual', 1),
(1189, 'Quintas El Casal', 1),
(1190, 'Quirno Costa', 1),
(1191, 'Quiroga', 1),
(1192, 'Rafael Calzada', 1),
(1193, 'Rafael Castillo', 1),
(1194, 'Rafael Obligado', 1),
(1195, 'Ramallo', 1),
(1196, 'Ramon Baez', 1),
(1197, 'Ramon Biaus', 1),
(1198, 'Ramon J. Neild', 1),
(1199, 'Ramon Santamarina', 1),
(1200, 'Ramos Biaus', 1),
(1201, 'Ramos Mejia', 1),
(1202, 'Ramos Otero', 1),
(1203, 'Rancagua', 1),
(1204, 'Ranchos', 1),
(1205, 'Ranelagh', 1),
(1206, 'Rauch', 1),
(1207, 'Raulet', 1),
(1208, 'Rawson', 1),
(1209, 'R. Baez', 1),
(1210, 'R. Biaus', 1),
(1211, 'R. Castillo', 1),
(1212, 'R. de Escalada', 1),
(1213, 'Real Audiencia', 1),
(1214, 'Recalde', 1),
(1215, 'Remedios de Escalada', 1),
(1216, 'Reserva', 1),
(1217, 'Reta', 1),
(1218, 'R. Gavina', 1),
(1219, 'Ricardo Gavina', 1),
(1220, 'Ringuelet', 1),
(1221, 'Rio Lujan', 1),
(1222, 'Rio Tala', 1),
(1223, 'Rivadavia', 1),
(1224, 'Rivadeo', 1),
(1225, 'Rivas', 1),
(1226, 'Rivera', 1),
(1227, 'R. J. Neild', 1),
(1228, 'R. Mejia', 1),
(1229, 'Roberto Cano', 1),
(1230, 'Roberto Payro', 1),
(1231, 'Roberts', 1),
(1232, 'R. Obligado', 1),
(1233, 'Rocha', 1),
(1234, 'Rojas', 1),
(1235, 'Roman Baez', 1),
(1236, 'Romero', 1),
(1237, 'Rondeau', 1),
(1238, 'Roosevelt', 1),
(1239, 'Roque Perez', 1),
(1240, 'Rosa', 1),
(1241, 'Rosas', 1),
(1242, 'R. Payro', 1),
(1243, 'R. Perez', 1),
(1244, 'R. Santamarina', 1),
(1245, 'Ruiz', 1),
(1246, 'Saavedra', 1),
(1247, 'Saenz Peña', 1),
(1248, 'Saforcada', 1),
(1249, 'Saladillo', 1),
(1250, 'Salazar', 1),
(1251, 'Saldungaray', 1),
(1252, 'Salliquelo', 1),
(1253, 'Salto', 1),
(1254, 'Salvador Maria', 1),
(1255, 'Samborombon', 1),
(1256, 'San A. de Areco', 1),
(1257, 'San A. de Giles', 1),
(1258, 'San Agustin', 1),
(1259, 'San Andres de Giles', 1),
(1260, 'San Andres', 1),
(1261, 'San Antonio de Areco', 1),
(1262, 'San Antonio de Padua', 1),
(1263, 'San Augustin', 1),
(1264, 'San Benito', 1),
(1265, 'San Bernardo', 1),
(1266, 'San Blas', 1),
(1267, 'San Carlos de Bolivar', 1),
(1268, 'San Cayetano', 1),
(1269, 'Sanchez', 1),
(1270, 'San Clemente del Tuyu', 1),
(1271, 'San Eladio', 1),
(1272, 'San Emilio', 1),
(1273, 'San Enrique', 1),
(1274, 'San F. de Bellocq', 1),
(1275, 'San Fermin', 1),
(1276, 'San Fernando', 1),
(1277, 'San Francisco de Bellocq', 1),
(1278, 'San Francisco Solano', 1),
(1279, 'San German', 1),
(1280, 'San Ignacio', 1),
(1281, 'San Isidro', 1),
(1282, 'San Jacinto', 1),
(1283, 'San Jorge', 1),
(1284, 'San Jose', 1),
(1285, 'San Justo', 1),
(1286, 'San Manuel', 1),
(1287, 'San Martin', 1),
(1288, 'San Mauricio', 1),
(1289, 'San Mayol', 1),
(1290, 'San M. del Monte', 1),
(1291, 'San Miguel Arcangel', 1),
(1292, 'San Miguel del Monte', 1),
(1293, 'San Miguel de Monte', 1),
(1294, 'San Miguel', 1),
(1295, 'San Nicolas de los Arroyos', 1),
(1296, 'San Nicolas', 1),
(1297, 'San Patricio', 1),
(1298, 'San Pedro', 1),
(1299, 'San Roman', 1),
(1300, 'San Sebastian', 1),
(1301, 'Sansinena', 1),
(1302, 'Santa Catalina', 1),
(1303, 'Santa Coloma', 1),
(1304, 'Santa Eleadara', 1),
(1305, 'Santa Elena', 1),
(1306, 'Santa Eleodora', 1),
(1307, 'Santa Ines', 1),
(1308, 'Santa Lucia', 1),
(1309, 'Santa Luisa', 1),
(1310, 'Santa Maria', 1),
(1311, 'Santamarina', 1),
(1312, 'Santa Regina', 1),
(1313, 'Santa Teresita', 1),
(1314, 'Santa Trinidad', 1),
(1315, 'Santiago Garbarini', 1),
(1316, 'Santiago Larre', 1),
(1317, 'Santo Domingo', 1),
(1318, 'Santos Lugares', 1),
(1319, 'Santos Unzue', 1),
(1320, 'Santo Tomas', 1),
(1321, 'San Vicente', 1),
(1322, 'Sarandi', 1),
(1323, 'Sarasa', 1),
(1324, 'Saraza', 1),
(1325, 'Saturno', 1),
(1326, 'Sauzales', 1),
(1327, 'Segui', 1),
(1328, 'Segurola', 1),
(1329, 'Seis de Septiembre', 1),
(1330, 'Sevigne', 1),
(1331, 'Sevinge', 1),
(1332, 'S.F. de Bellocq', 1),
(1333, 'S. Garbarini', 1),
(1334, 'Shaw', 1),
(1335, 'Sierra Bayas', 1),
(1336, 'Sierra Chica', 1),
(1337, 'Sierra de la Ventana', 1),
(1338, 'Sierra de los Padres', 1),
(1339, 'Sierras Bayas', 1),
(1340, 'S. Larre', 1),
(1341, 'S. Lugares', 1),
(1342, 'Smith', 1),
(1343, 'Solanet', 1),
(1344, 'Solano', 1),
(1345, 'Sol de Mayo', 1),
(1346, 'Solis', 1),
(1347, 'Spurr', 1),
(1348, 'Stegmann', 1),
(1349, 'Stroeder', 1),
(1350, 'Sucre', 1),
(1351, 'Suipacha', 1),
(1352, 'Sundblad', 1),
(1353, 'S. Unzue', 1),
(1354, 'Tablada', 1),
(1355, 'Tacuari', 1),
(1356, 'Tamangueyu', 1),
(1357, 'Tambo Nuevo', 1),
(1358, 'Tandil', 1),
(1359, 'Tapalquen', 1),
(1360, 'Tapalque', 1),
(1361, 'Tapiales', 1),
(1362, 'Tatay', 1),
(1363, 'Tedin Uriburu', 1),
(1364, 'Tejedor Chico', 1),
(1365, 'Tejedor', 1),
(1366, 'Temperley', 1),
(1367, 'Teniente Coronel Minana', 1),
(1368, 'Teniente Origone', 1),
(1369, 'Thames', 1),
(1370, 'Tigre', 1),
(1371, 'Timote Chico', 1),
(1372, 'Timote', 1),
(1373, 'T. Jofre', 1),
(1374, 'T. Lauquen', 1),
(1375, 'Todd', 1),
(1376, 'Tolosa', 1),
(1377, 'Tomas Jofre', 1),
(1378, 'Tornquist', 1),
(1379, 'Torres', 1),
(1380, 'Tortuguitas', 1),
(1381, 'Treinta de Agosto', 1),
(1382, 'Trenque Lauquen', 1),
(1383, 'Tres Algarrobos', 1),
(1384, 'Tres Arroyos', 1),
(1385, 'Tres Lagunas', 1),
(1386, 'Tres Lomas', 1),
(1387, 'Tres Picos', 1),
(1388, 'Tres Sargentos', 1),
(1389, 'Trigales', 1),
(1390, 'Tristan Suarez', 1),
(1391, 'Triunvirato', 1),
(1392, 'Tronge', 1),
(1393, 'T. Santa Coloma', 1),
(1394, 'T. Suarez', 1),
(1395, 'Turdera', 1),
(1396, 'Tuyuti', 1),
(1397, 'T. Yofre', 1),
(1398, 'Udaquilla', 1),
(1399, 'Udaquiola', 1),
(1400, 'Unzue', 1),
(1401, 'Urdampilleta', 1),
(1402, 'Uribelarrea', 1),
(1403, 'Vagues', 1),
(1404, 'Valdes', 1),
(1405, 'Valentin Alsina', 1),
(1406, 'Valentin Gomez', 1),
(1407, 'Valeria del Mar', 1),
(1408, 'Vallimanca', 1),
(1409, 'V. Alsina', 1),
(1410, 'Vasquez', 1),
(1411, 'Vazques', 1),
(1412, 'V. Casares', 1),
(1413, 'V. de la Plaza', 1),
(1414, 'Vedia', 1),
(1415, 'Veinticinco de Mayo', 1),
(1416, 'Vela', 1),
(1417, 'Velloso', 1),
(1418, 'Venancio', 1),
(1419, 'Vergara', 1),
(1420, 'Veronica', 1),
(1421, 'V. Gomez', 1),
(1422, 'Viboras', 1),
(1423, 'Vicente Casares', 1),
(1424, 'Vicente Lopez', 1),
(1425, 'Vicente Pereda', 1),
(1426, 'Victoria', 1),
(1427, 'Victorino de la Plaza', 1),
(1428, 'Vieytes', 1),
(1429, 'Vigilancia', 1),
(1430, 'Vilela', 1),
(1431, 'Villa Adelina', 1),
(1432, 'Villa Alianza', 1),
(1433, 'Villa Alsina', 1),
(1434, 'Villa Altube', 1),
(1435, 'Villa Ansaldi', 1),
(1436, 'Villa Arcadia', 1),
(1437, 'Villa Atlantida', 1),
(1438, 'Villa Augusta', 1),
(1439, 'Villa Ballester', 1),
(1440, 'Villa Barcelo', 1),
(1441, 'Villa Barilari', 1),
(1442, 'Villa Basso', 1),
(1443, 'Villa Bosch', 1),
(1444, 'Villa Cacique', 1),
(1445, 'Villa Calzada', 1),
(1446, 'Villa Castelar', 1),
(1447, 'Villa C. Colon', 1),
(1448, 'Villa Clelia', 1),
(1449, 'Villa Cochi-Tue', 1),
(1450, 'Villa Colon', 1),
(1451, 'Villa Cristobal Colon', 1),
(1452, 'Villa del Mar', 1),
(1453, 'Villa de los Patricios', 1),
(1454, 'Villa de Mayo', 1),
(1455, 'Villa Depietri', 1),
(1456, 'Villa Diamante', 1),
(1457, 'Villa Dominico', 1),
(1458, 'Villa D. Sobral', 1),
(1459, 'Villa El Cacique', 1),
(1460, 'Villa Elisa', 1),
(1461, 'Villa El Rincon', 1),
(1462, 'Villa España', 1),
(1463, 'Villa Espora', 1),
(1464, 'Villa Estanislao S. Zeballos', 1),
(1465, 'Villafane', 1),
(1466, 'Villa Fortabat', 1),
(1467, 'Villa Fournier', 1),
(1468, 'Villa Francisco Murature', 1),
(1469, 'Villa Galicia', 1),
(1470, 'Villa Garibaldi', 1),
(1471, 'Villa General Arias', 1),
(1472, 'Villa General Savio', 1),
(1473, 'Villa Gesell', 1),
(1474, 'Villa Giambruno', 1),
(1475, 'Villa Harding Green', 1),
(1476, 'Villa Hogar Aleman', 1),
(1477, 'Villa Iglesias', 1),
(1478, 'Villa Insuperable', 1),
(1479, 'Villa Iris', 1),
(1480, 'Villa Iturbe', 1),
(1481, 'Villa La Serrania', 1),
(1482, 'Villa Leloir', 1),
(1483, 'Villa Leon', 1),
(1484, 'Villa Lia', 1),
(1485, 'Villa Libertad', 1),
(1486, 'Villa Linch', 1),
(1487, 'Villalonga', 1),
(1488, 'Villa los Patricios', 1),
(1489, 'Villa Luzuriaga', 1),
(1490, 'Villa Lynch', 1),
(1491, 'Villa Madero', 1),
(1492, 'Villa Maio', 1),
(1493, 'Villa Margarita', 1),
(1494, 'Villa Maria', 1),
(1495, 'Villa Martin Arin', 1),
(1496, 'Villa Martinez de Hoz', 1),
(1497, 'Villa Mitre', 1),
(1498, 'Villa Moll', 1),
(1499, 'Villa Monica', 1),
(1500, 'Villa M. Pomar', 1),
(1501, 'Villanueva', 1),
(1502, 'Villa Numancia', 1),
(1503, 'Villa Olga', 1),
(1504, 'Villa Progreso', 1),
(1505, 'Villa Pronsato', 1),
(1506, 'Villa Recondo', 1),
(1507, 'Villa Reichembach', 1),
(1508, 'Villa Residencial Laguna Brava', 1),
(1509, 'Villarino Viejo', 1),
(1510, 'Villa Rosa', 1),
(1511, 'Villars', 1),
(1512, 'Villa Saboya', 1),
(1513, 'Villa San Francisco', 1),
(1514, 'Villa Sanguinetti', 1),
(1515, 'Villa San Jose', 1),
(1516, 'Villa San Pedro', 1),
(1517, 'Villa Sanz', 1),
(1518, 'Villa Sarmiento', 1),
(1519, 'Villa Sauce', 1),
(1520, 'Villa Sauze', 1),
(1521, 'Villa Sena', 1),
(1522, 'Villa Serra', 1),
(1523, 'Villa Wilde', 1),
(1524, 'Villa Zagala', 1),
(1525, 'Villela', 1),
(1526, 'Vina', 1),
(1527, 'Virreyes', 1),
(1528, 'Vivorata', 1),
(1529, 'V. Lopez', 1),
(1530, 'V.M. de Hoz', 1),
(1531, 'Volta', 1),
(1532, 'Voluntad', 1),
(1533, 'Vuelta de Obligado', 1),
(1534, 'Warnes', 1),
(1535, 'Wilde', 1),
(1536, 'Yerbas', 1),
(1537, 'Yraizoz', 1),
(1538, 'Yutuyaco', 1),
(1539, 'Zapiola', 1),
(1540, 'Zarate', 1),
(1541, 'Zavalia', 1),
(1542, 'Zelaya', 1),
(1543, 'Zenon Videla Dorna', 1),
(1544, 'Zentena', 1),
(1545, 'Zenteno', 1),
(1546, 'Zubiaurre', 1),
(1547, 'Zubillaga', 1),
(1548, 'Z. Videla Dorna', 1),
(1549, '3 de Febrero', 1),
(1550, 'Adrogue', 1),
(1551, 'Villa Martelli', 1),
(1552, 'Boulogne Sur Mer', 1),
(1553, 'Parque Leloir', 1),
(1554, 'Villa Caraza', 1),
(1555, 'Villa Tesei', 1),
(1556, 'Villa Albertina', 1),
(1557, 'Loma Hermosa', 1),
(1558, '9 de Abril', 1),
(1559, 'Ingeniero Adolfo Sourdeaux', 1),
(1560, 'CARAPACHAY', 1),
(1561, 'El Jaguel', 1),
(1562, 'Jose Ingenieros', 1),
(1563, 'José María Jáuregui', 1),
(1564, 'La Unión', 1),
(1565, 'Manuel Alberti', 1),
(1566, 'Martín Coronado', 1),
(1567, 'Ingeniero Pablo Nogués', 1),
(1568, 'Pablo Podestá', 1),
(1569, 'Villa Celina', 1),
(1570, 'Virrey Del Pino', 1),
(1571, 'Carapachay', 1),
(1572, 'Chilavert', 1),
(1573, 'Santa Clara Del Mar', 1),
(1574, 'Barrio Troncos del Talar', 1),
(1575, 'Nordelta', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consorcio`
--

CREATE TABLE `consorcio` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cuit` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `idProvincia` int(11) NOT NULL,
  `idCiudad` int(11) NOT NULL,
  `pais` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dirCalle` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dirNumero` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `codPost` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idOperador` int(11) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `consorcio`
--

INSERT INTO `consorcio` (`id`, `nombre`, `cuit`, `idProvincia`, `idCiudad`, `pais`, `dirCalle`, `dirNumero`, `codPost`, `telefono`, `email`, `idOperador`, `lat`, `lng`) VALUES
(1, 'Alvarado', '123456789', 1, 1201, 'Argentina', 'Alvarado', '900', '1704', '46547869', 'consorcio@alvarado.com', 62, -34.654, -58.5695),
(10, 'Avenida de Mayo', '1800', 1, 1201, 'Argentina', 'Avenida de Mayo', '1800', '1704', '45676567', 'mayo@consorcio.com', 0, -34.6607, -58.5604);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expensa`
--

CREATE TABLE `expensa` (
  `id` int(11) NOT NULL,
  `idLiquidacion` int(11) NOT NULL,
  `idPropiedad` int(11) NOT NULL,
  `importe` decimal(10,2) NOT NULL,
  `fechaVencimiento` date NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `expensa`
--

INSERT INTO `expensa` (`id`, `idLiquidacion`, `idPropiedad`, `importe`, `fechaVencimiento`, `estado`) VALUES
(109, 122, 48, '1440.00', '2018-07-16', 1),
(110, 122, 49, '960.00', '2018-07-16', 0),
(111, 123, 50, '1799.35', '2018-07-16', 1),
(112, 123, 51, '2056.40', '2018-07-16', 0),
(113, 123, 52, '1285.25', '2018-07-16', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE `gasto` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `concepto` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `importe` decimal(20,0) NOT NULL,
  `idReclamo` int(11) DEFAULT NULL,
  `idProveedor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `gasto`
--

INSERT INTO `gasto` (`id`, `fecha`, `concepto`, `importe`, `idReclamo`, `idProveedor`) VALUES
(35, '2018-07-01', 'por reclamo av mayo 1A', '2000', 56, 10),
(36, '2018-07-01', 'por reclamo alvarado 1C', '1234', 57, 10),
(37, '2018-07-01', 'por reclamo alvarado 1B', '3050', 58, 12),
(38, '2018-07-01', 'Gastos de Administracion', '400', NULL, NULL),
(39, '2018-07-01', 'Gastos de Administracion', '857', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liqgasto`
--

CREATE TABLE `liqgasto` (
  `id` int(11) NOT NULL,
  `idLiquidacion` int(11) NOT NULL,
  `idGasto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `liqgasto`
--

INSERT INTO `liqgasto` (`id`, `idLiquidacion`, `idGasto`) VALUES
(154, 122, 35),
(155, 122, 38),
(156, 123, 36),
(157, 123, 37),
(158, 123, 39);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidacion`
--

CREATE TABLE `liquidacion` (
  `id` int(11) NOT NULL,
  `periodo` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `idConsorcio` int(11) NOT NULL,
  `importeTotal` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `liquidacion`
--

INSERT INTO `liquidacion` (`id`, `periodo`, `fecha`, `idConsorcio`, `importeTotal`) VALUES
(122, '2018-07', '2018-07-01', 10, '2400.00'),
(123, '2018-07', '2018-07-01', 1, '5141.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ordenpago`
--

CREATE TABLE `ordenpago` (
  `id` int(11) NOT NULL,
  `idGasto` int(11) NOT NULL,
  `importe` decimal(20,0) NOT NULL,
  `fecha` date NOT NULL,
  `formapago` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(11) NOT NULL,
  `importe` decimal(20,0) NOT NULL,
  `fecha` date NOT NULL,
  `idPropiedad` int(11) NOT NULL,
  `idExpensa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `importe`, `fecha`, `idPropiedad`, `idExpensa`) VALUES
(6, '1440', '2018-07-01', 48, 109),
(7, '1799', '2018-07-01', 50, 111);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propiedad`
--

CREATE TABLE `propiedad` (
  `id` int(11) NOT NULL,
  `piso` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `depto` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `porcentajeParticipacion` decimal(10,0) NOT NULL,
  `idPropietario` int(11) NOT NULL,
  `idConsorcio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `propiedad`
--

INSERT INTO `propiedad` (`id`, `piso`, `depto`, `porcentajeParticipacion`, `idPropietario`, `idConsorcio`) VALUES
(48, '1', 'A', '60', 106, 10),
(49, '1', 'B', '40', 107, 10),
(50, '1', 'C', '35', 106, 1),
(51, '1', 'B', '40', 106, 1),
(52, '1', 'A', '25', 107, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `dni` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `cuil` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `consejo` tinyint(4) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL,
  `idSexo` int(11) NOT NULL,
  `idTipoDocumento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`id`, `nombre`, `apellido`, `dni`, `cuil`, `email`, `telefono`, `consejo`, `estado`, `idUsuario`, `idSexo`, `idTipoDocumento`) VALUES
(106, 'Alejandra', 'Casus', '35335825', '27353358257', 'aleja@gmail.com', '1145456767', 0, NULL, 64, 2, 5),
(107, 'Florencia', 'Martin', '29942591', '27299425916', 'flor@gmail.com', '1141695790', 0, NULL, 65, 2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `cuit` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `cuit`, `telefono`) VALUES
(10, 'Esteban Rodriguez', '778233', '15-3364-7798'),
(11, 'Helen Lina', '9336631', '4471-8872'),
(12, 'Juan Perez', '28297896784', '48767678');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`) VALUES
(1, 'Buenos Aires');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `idPropiedad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reclamo`
--

INSERT INTO `reclamo` (`id`, `descripcion`, `estado`, `fecha`, `idPropiedad`) VALUES
(56, 'reclamo av mayo', 'Aceptado', '2018-07-01', 48),
(57, 'reclamo alvarado 1C', 'Aceptado', '2018-07-01', 50),
(58, 'reclamo alvarado 1B', 'Aceptado', '2018-07-01', 51),
(59, 'reclamo av mayo 1B', 'Pendiente', '2018-07-01', 49),
(60, 'reclamo alvarado 1A', 'Pendiente', '2018-07-01', 52);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id`, `nombre`) VALUES
(1, 'admin'),
(2, 'propietario'),
(3, 'operador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`id`, `nombre`) VALUES
(2, 'femenino'),
(3, 'masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`id`, `nombre`) VALUES
(5, 'dni'),
(3, 'lc'),
(2, 'le'),
(4, 'pasaporte');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `idRol` int(11) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `username`, `password`, `idRol`, `estado`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(62, 'luby', '99b553c7d25462d3ff9c12841071144b', 3, 1),
(64, 'aleja', '0041334c56f81fbf21aa2426067e5996', 2, 1),
(65, 'florm', '767923f509af6ee6ab1a23d622939ede', 2, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consorcio`
--
ALTER TABLE `consorcio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expensa`
--
ALTER TABLE `expensa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `liqgasto`
--
ALTER TABLE `liqgasto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ordenpago`
--
ALTER TABLE `ordenpago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_NombreSexo` (`nombre`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_NombreTipoDocumento` (`nombre`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uq_NombreUsuario` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciudad`
--
ALTER TABLE `ciudad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1576;

--
-- AUTO_INCREMENT de la tabla `consorcio`
--
ALTER TABLE `consorcio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `expensa`
--
ALTER TABLE `expensa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT de la tabla `gasto`
--
ALTER TABLE `gasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de la tabla `liqgasto`
--
ALTER TABLE `liqgasto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT de la tabla `liquidacion`
--
ALTER TABLE `liquidacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT de la tabla `ordenpago`
--
ALTER TABLE `ordenpago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `propiedad`
--
ALTER TABLE `propiedad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `sexo`
--
ALTER TABLE `sexo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
