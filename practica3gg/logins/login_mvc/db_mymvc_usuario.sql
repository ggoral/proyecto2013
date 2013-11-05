#create database mymvc;

#grant all in mymvc.* to usuario@localhost identified by 'pass';

use mymvc;
 
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) NOT NULL,
  `pass` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `usuario` (`user`, `pass`) VALUES
('ggoral', 'gonzalo'),
('lgatti', 'luciana');
