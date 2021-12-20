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
```sql
CREATE TABLE users (
    userid int AUTO_INCREMENT,
    privateid varchar(255),
    username varchar(255),
    fname varchar(255),
    lname varchar(255),
    email varchar(255),
    phone varchar(32),
    street_address varchar(255),
    city varchar(255),
    province varchar(255),
    postal_code varchar(255),
    registration_date datetime,
    verificationStatus bool,
    PRIMARY KEY (userid),
    INDEX NAME (privateid)
);

```