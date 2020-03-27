Ryan Josephson
CS401
Kennington
02/26/2020



CREATE TABLE `users` (
  `UserID` int(30) NOT NULL AUTO_INCREMENT,
  `FirstName` char(20) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `DateStamp` datetime NOT NULL,
  PRIMARY KEY (`UserID`)
) 

CREATE TABLE `userlistings` (
  `LocationID` int(10) NOT NULL AUTO_INCREMENT,
  `UserID` int(30) NOT NULL,
  `Street` varchar(32) NOT NULL,
  `City` char(32) NOT NULL,
  `State` char(16) NOT NULL,
  `Zip` int(5) NOT NULL,
  `phone` int(10) NULL,
  PRIMARY KEY (`LocationID`),
  KEY `UserID` (`UserID`),
  CONSTRAINT `userlistings_fk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`)
) 

CREATE TABLE `trees` (
  `LocationID` int(10) NOT NULL,
  `TreeID` int(10) NOT NULL AUTO_INCREMENT,
  `VarietyID` int(4) NOT NULL,
  `Picture` varchar(100) DEFAULT NULL,
  `Organic` tinyint(1) NOT NULL,
  `Quantity` int(4) NOT NULL,
  PRIMARY KEY (`TreeID`),
  KEY `LocationID` (`LocationID`),
  KEY `VarietyID` (`VarietyID`),
  CONSTRAINT `trees_fk_1` FOREIGN KEY (`LocationID`) REFERENCES `userlistings` (`LocationID`),
  CONSTRAINT `trees_fk_2` FOREIGN KEY (`VarietyID`) REFERENCES `varieties` (`VarietyID`)
) 

CREATE TABLE `varieties` (
  `VarietyID` int(4) NOT NULL AUTO_INCREMENT,
  `TreeName` varchar(60) NOT NULL,
  `FruitDescription` text NOT NULL,
  `RipeDate` varchar(20) NOT NULL,
  `FruitType` varchar(20) NOT NULL,
  PRIMARY KEY (`VarietyID`)
) 

