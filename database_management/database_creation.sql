--
-- FoodFeed database schema definition
--

DROP SCHEMA IF EXISTS foodfeed_db;
CREATE SCHEMA IF NOT EXISTS foodfeed_db;
USE foodfeed_db;

--
-- Tables related to user infomation:
--

CREATE TABLE users (
    userid int AUTO_INCREMENT,
    privateid varchar(255),
    username varchar(255),
    email varchar(255),
    phone varchar(32),
    fname varchar(255),
    lname varchar(255),
    street_address varchar(255),
    city varchar(255),
    province varchar(255),
    postal_code varchar(255),
    registration_date datetime,
    verificationStatus bool,
    PRIMARY KEY (userid),
    INDEX NAME (privateid)
);

CREATE TABLE user_hashes(
    privateid varchar(255),
    passwordhash varchar(128),
    PRIMARY KEY (privateid)
    );

CREATE TABLE user_salt(
    privateid varchar(255),
    usersalt varchar(128),
    userpepper varchar(128),
    PRIMARY KEY (privateID)
    );

--
-- Tables related to restaurants:
--

CREATE TABLE 
    