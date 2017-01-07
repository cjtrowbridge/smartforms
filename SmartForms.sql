CREATE TABLE IF NOT EXISTS `SmartForms` (
  `SmartFormID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) NOT NULL,
  `ReadFields` text,
  `WriteFields` text,
  `InsertedTime` datetime NOT NULL,
  `InsertedUser` int(11) NOT NULL,
  `UpdatedTime` datetime DEFAULT NULL,
  `UpdatedUser` int(11) DEFAULT NULL,
  PRIMARY KEY (`SmartFormID`),
  UNIQUE KEY `Name` (`Name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
