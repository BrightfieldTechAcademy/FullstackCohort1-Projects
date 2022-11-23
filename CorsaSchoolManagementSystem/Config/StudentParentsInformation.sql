CREATE DATABASE sms;
use sms;


CREATE TABLE Parents Information (
    studentparentsid int NOT NULL AUTO_INCREMENT,
    father varchar(255) NOT NULL,
    occupation  varchar(255) NOT NULL,
    father  varchar(255) NOT NULL,
    telephone  varchar(255) NOT NULL,
    hometown  varchar(255) NOT NULL,
    mother  varchar(255) NOT NULL,
    occupation varchar(255) NOT NULL,
    hometown  varchar(255) NOT NULL,
    house  varchar(255),
    telephone  varchar(255) NOT NULL,
    guardian  varchar(255) NOT NULL,
    residence varchar(225),
    contact varchar(225),
    PRIMARY KEY (studentparentsid)
    FOREIGN KEY(PersonparentsID) REFERENCES StudentParentsInformation(PersonID)
);