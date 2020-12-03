CREATE DATABASE IF NOT EXISTS minyay;
USE minyay;

CREATE TABLE Persons (
    person_id int,
    last_name varchar(255),
    first_name varchar(255),
    address varchar(255),
    city varchar(255)
);