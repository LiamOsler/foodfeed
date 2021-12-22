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
    u_id INT AUTO_INCREMENT,
    u_private_id VARCHAR(255),
    u_username VARCHAR(255),
    u_email VARCHAR(255),
    u_phone VARCHAR(32),
    u_fname VARCHAR(255),
    u_lname VARCHAR(255),
    u_lat DECIMAL(10,8),
    u_long DECIMAL(10,8),
    u_street VARCHAR(255),
    u_city VARCHAR(255),
    u_province VARCHAR(32),
    u_postal VARCHAR(32),
    u_register_date datetime,
    u_ver_status bool,
    PRIMARY KEY (u_id),
    INDEX NAME (u_private_id)
);

CREATE TABLE user_hashes(
    u_private_id VARCHAR(255),
    u_hash VARCHAR(128),
    PRIMARY KEY (u_private_id)
    );

CREATE TABLE user_salt(
    u_private_id VARCHAR(255),
    u_salt VARCHAR(128),
    u_pepper VARCHAR(128),
    PRIMARY KEY (u_private_id)
    );

--
-- Tables related to restaurants:
--
CREATE TABLE restaurants(
    r_id INT,
    r_name TEXT,
    r_phone TEXT,
    r_category TEXT,	
    r_street TEXT,
    r_city TEXT,	
    r_province TEXT,
    r_postal TEXT,
    r_lat DOUBLE,
    r_long DOUBLE,	
    r_website TEXT,
    r_hour_open INT,
    r_hour_close INT,
    r_rating DOUBLE,
    );

CREATE TABLE menu_items(
    m_id INT,
    r_id INT,
    m_name TEXT,
    m_category TEXT
)