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
    userid int AUTO_INCREMENT,
    privateid varchar(255),
    username varchar(255),
    email varchar(255),
    phone varchar(32),
    fname varchar(255),
    lname varchar(255),
    location_lat varchar(16),
    location_long varchar(16),
    street_address varchar(255),
    city varchar(255),
    province varchar(255),
    postal_code varchar(8),
    registration_date datetime,
    verification_status bool,
    PRIMARY KEY (userid),
    INDEX NAME (privateid)
);

```
Explanation:
- userid: The user's public identification number
- privateid: The user's private identification number
- username: the user's display name
- email: the user's registered email address
- phone: the user's phone number
- fname: the user's first name
- lname: user's last name (surname)
- location_lat: the user's latitude
- location_long: the user's longitude
- street_address: the user's street address (unit/street number, street name)
- city: the name of the user's city
- province: the code for the user's province (ISO standard)
- postal_code: the user's postal code
- registration_date: the datetime that the user account was registered
- verification_status: boolean for tracking if the account's email has been confirmed


### Storing hashed user passwords:

Hashed user passwords:
```sql
CREATE TABLE user_hashes(
    privateid varchar(255),
    password_hash varchar(128),
    PRIMARY KEY (privateid)
    );
```
Explanation: 
- privateid: the privateid of the user that the password_hash corresponds to
- password_hash: the user's hashed password

User salt and peppers:
```sql
CREATE TABLE user_salt(
    privateid varchar(255),
    salt varchar(128),
    pepper varchar(128),
    PRIMARY KEY (privateID)
    );
```
