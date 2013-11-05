CREATE TABLE IF NOT EXISTS `users` (
2  `id` int(11) NOT NULL AUTO_INCREMENT,
3  `firstname` varchar(32) NOT NULL,
4  `lastname` varchar(32) NOT NULL,
5  `username` varchar(32) NOT NULL,
6  `password` varchar(32) NOT NULL,
7  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
8  PRIMARY KEY (`id`)
9 ) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;
10   
11  INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `modified`) VALUES
12  (28, 'John', 'Dalisay', 'john', 'john123', '2011-09-23 14:36:19'),
13  (39, 'aaa', 'aaa', 'aaa', 'aaa', '2011-09-23 15:44:04'),
14  (40, 'bbb', 'bbb', 'bbb', 'bbb', '2011-09-23 15:44:13'),
15  (41, 'ccc', 'ccc', 'ccc', 'ccc', '2011-09-23 15:44:32'),
16  (46, 'XXXDDD', '', '', '', '2011-09-23 17:13:15'),
17  (47, 'www', 'www', 'www', 'www', '2011-09-23 17:21:38'),
18  (48, 'HEHEHEHEHE', '', '', '', '2011-09-23 18:50:10'),
19  (49, 'www', 'www', 'www', 'www', '2011-09-23 19:28:24'),
20  (50, 'EEEE', 'EEEE', 'EEEE', 'EEEE', '2011-09-24 05:01:36'),
21  (51, 'asdf', 'asdf', 'asdf', 'asdf', '2011-10-04 18:44:19');
