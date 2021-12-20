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

```