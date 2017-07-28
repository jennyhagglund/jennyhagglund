CREATE TABLE IF NOT EXISTS `subscription_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date_subscribe` datetime NOT NULL,
  `date_unsubscribe` datetime NOT NULL,
  `status` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;