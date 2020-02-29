/**
 * STEP 1. 
 * -> Create Database and User with local permission
 * -> Set User Permission for the database
 */

-- Delete database & user if exist before
DROP DATABASE `cardset`;
DROP USER 'learning'@'localhost';

-- Create Database for the application
CREATE DATABASE  IF NOT EXISTS `cardset`;

-- Create application user (DONT change it!)
CREATE USER 'learning'@'localhost' IDENTIFIED BY 'learning';

-- Give permission to the database
GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, ALTER, INDEX, REFERENCES ON cardset.* TO 'learning'@'localhost';
