CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`id`)) 
ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;

INSERT INTO `user` (`email`, `password`) VALUES
('tatlay@me.com', '1234'),
('tat@smashedit.com', '1234'),
('tat@yahoo.com', '1234'),
('tat@icloud.com', '1234'),
('tat@me.com', '1234');