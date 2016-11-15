CREATE DATABASE `motos` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `motos`;

CREATE TABLE IF NOT EXISTS `motos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricula` char(7) COLLATE utf8_spanish_ci NOT NULL,
  `marca` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(64) COLLATE utf8_spanish_ci NOT NULL,
  `color` varchar(32) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `matricula` (`matricula`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO `motos` (`id`, `matricula`, `marca`, `modelo`, `color`) VALUES
(1, 'B4444NT', 'Honda', 'CBR', '#00FF00'),
(2, '3214PTR', 'Ducati', 'FXX', '#FFAA00'),
(3, '1234TTT', 'Yamaha', 'NTC', '#FFFFFF'),
(4, '4567TTT', 'Suzuki', 'Ninja', '#FF0000');
