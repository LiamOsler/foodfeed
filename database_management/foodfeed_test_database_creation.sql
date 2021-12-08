DROP SCHEMA IF EXISTS foodWebsite;

CREATE SCHEMA IF NOT EXISTS foodWebsite;

USE foodWebsite;

CREATE TABLE users (
    userID int AUTO_INCREMENT,
    privateID varchar(255),
	userName varchar(255),
	firstName varchar(255),
    lastName varchar(255),
	emailAddress varchar(255),
	registrationDate datetime,
    verificationStatus bool,
    profileVisibility bool,
    PRIMARY KEY (userID),
	INDEX NAME (privateID)
);

CREATE TABLE userSaltAndPepper(
	privateID varchar(255),
    userSalt varchar(32),
    userPepper varchar(32),
    PRIMARY KEY (privateID)
    );
    
CREATE TABLE userHashes(
	privateID varchar(255),
	passwordHash varchar(32),
    PRIMARY KEY (privateID)
    );
    
CREATE TABLE restaurantChains(
	chainID int AUTO_INCREMENT,
    PRIMARY KEY (chainID)
    );
    
CREATE TABLE restaurantLocations(
	locationID int AUTO_INCREMENT,
    chainID int,
    PRIMARY KEY (locationID),
    FOREIGN KEY (chainID) REFERENCES restaurantChains(chainID)
    );

CREATE TABLE restaurantMenu(
	menuID int AUTO_INCREMENT,
    locationID int,
    PRIMARY KEY (menuID),
	FOREIGN KEY (locationID) REFERENCES restaurantLocations(locationID)
	);
    
CREATE TABLE menuItem(
	itemID int AUTO_INCREMENT,
    menuID int,
    PRIMARY KEY (itemID),
    FOREIGN KEY (menuID) REFERENCES restaurantMenu(menuID)
	);


DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` ( `blog_id` int(11) NOT NULL, `title` varchar(255) NOT NULL, `description` longtext NOT NULL, `user_id` int(11) NOT NULL, `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE blogs ADD FOREIGN KEY (user_id) REFERENCES users(userID);

CREATE TABLE `foodwebsite`.`useraddress` ( `addressID` INT NOT NULL AUTO_INCREMENT , `isPrimary` INT NOT NULL , `userID` INT NOT NULL , `timmestamp` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`addressID`)) ENGINE = InnoDB;

ALTER TABLE `useraddress` ADD `streetname` VARCHAR(255) NOT NULL AFTER `isPrimary`, ADD `address2` VARCHAR(255) NOT NULL AFTER `streetname`, ADD `city` VARCHAR(255) NOT NULL AFTER `address2`, ADD `province` VARCHAR(255) NOT NULL AFTER `city`, ADD `postalCode` VARCHAR(255) NOT NULL AFTER `province`;

ALTER TABLE useraddress ADD FOREIGN KEY (userID) REFERENCES users(userID);