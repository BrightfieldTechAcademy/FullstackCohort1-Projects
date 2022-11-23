CREATE DATABASE sms;
use sms;


CREATE TABLE StudentsInfo (
PersonalId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(255) NOT NULL,
middlename VARCHAR(255),
lastname VARCHAR(255) NOT NULL,
date_of_birth VARCHAR(255) NOT NULL,
place_of_birth  VARCHAR(255),
hometown VARCHAR(255) NOT NULL,
residential_address VARCHAR(255),
gps_address VARCHAR(255),
gender VARCHAR(255) NOT NULL,
religion VARCHAR(255) NOT NULL,
formal_school VARCHAR(255),
previous_school VARCHAR(255) ,
class_admitted  VARCHAR NOT NULL,
year_of_admission  VARCHAR NOT NULL,
)