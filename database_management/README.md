# Database management README

This is the README file describing the database management aspects of the project.

# Getting started:

## Creating the database:
Run the contents of database_creation.sql

## Adding test data to the database:
Run the contents of database_population.sql after running database_creation.sql

# The Database Schema:
## Defining the schema:
```sql
DROP SCHEMA IF EXISTS foodfeed_db;
CREATE SCHEMA IF NOT EXISTS foodfeed_db;
USE foodfeed_db;
```
Explanation:
1. Drop the schema "foodfeed_db" if it already exists (note: running this again will reset any later changes made to the database)
2. Create a new schema called "foodfeed_db"
3. Tell the server to use "foodfeed_db"

## Defining a schema for user accounts:
### User account information:
```sql
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

```
Explanation:
- u_id: The user's public identification number (unique, incremental)
- u_private_id: The user's private identification number (unique, randomized)
- u_username: the user's display name
- u_email: the user's registered email address
- u_phone: the user's phone number
- u_fname: the user's first name
- u_lname: user's last name (surname)
- u_lat: the user's latitude
- u_long: the user's longitude
- u_street: the user's street address (unit/street number, street name)
- u_city: the name of the user's city
- u_province: the code for the user's province (ISO standard)
- u_postal: the user's postal code
- u_register_date: the datetime that the user account was registered
- u_ver_status: boolean for tracking if the account's email has been confirmed

### Storing hashed user passwords:
Hashed user passwords:
```sql
CREATE TABLE user_hashes(
    u_private_id VARCHAR(255),
    u_hash VARCHAR(128),
    PRIMARY KEY (u_private_id)
    );
```
Explanation: 
- privateid: the privateid of the user that the password_hash corresponds to
- password_hash: the user's hashed password

User salt and peppers:
```sql
CREATE TABLE user_salt(
    u_private_id VARCHAR(255),
    u_salt VARCHAR(128),
    u_pepper VARCHAR(128),
    PRIMARY KEY (u_private_id)
    );
```
Explanation:
- privateid: the privateid of the user that the salt and pepper corresponds to
- salt: a value that gets added to the beginning of the user password hash
- pepper: a value that gets added to the ending of the user password hash

### Storing the restaurant information:
## Restaurant Locations:
```sql
CREATE TABLE restaurants(
    r_id INT AUTO_INCREMENT,
    r_name	VARCHAR(255),
    r_email VARCHAR(255),
    r_phone VARCHAR(32),
    r_category VARCHAR(255),	
    r_street VARCHAR(255),
    r_city VARCHAR(255),	
    r_province VARCHAR(32),
    r_postal VARCHAR(32),
    r_lat DECIMAL(10,8),
    r_long DECIMAL(10,8),	
    r_website	VARCHAR(255),
    r_hour_open INT,
    r_hour_close INT,
    r_rating DOUBLE,
    PRIMARY KEY (r_id)
    );
```
Explanation:
- r_id: the restaurant's id number
- r_name: the name of the restaurant
- r_email: the email address of the restaurant
- r_phone: the phone number of the restaurant
- r_category: the restaurant's categorization
- r_street: the restaurant's street address
- r_city: the city the restaurant is in
- r_province: the province the restaurant is in
- r_postal: the restaurant's postal code
- r_lat: the restaurant's latitude 
- r_long: the restaurant's longitude
- r_website: the restaurant's website URL
- r_hour_open: the hour the restaurant opens at: (####) 24H format, e.g. (1200)
- r_hour_close: the hour the restaurant closes at: (####) 24H format, e.g. (2100)
- r_rating: the restaurant's rating on a scale of 1-5

## Restaurant menu items:

```sql
CREATE TABLE menu_items(
    m_id INT AUTO_INCREMENT,
    r_id INT,
    m_name VARCHAR(255),
    m_category VARCHAR(255),
    PRIMARY KEY (m_id),
)
```
Explanation:
m_id: the menu item's id number
r_id: the restaurant the menu item is associated with
m_name: the name of the menu item
m_category: the categorization of the item type
