#create database mymvc;

#grant all in mymvc.* to usuario@localhost identified by 'pass';

use mymvc;
 
CREATE TABLE IF NOT EXISTS `articulo` (
  `nombre` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `titulo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `articulo` (`nombre`, `fecha`, `titulo`) VALUES
('mate', '1983-03-03', 'mate para tomar'),
('ventana', '1988-06-23', 'ventana para mirar');
