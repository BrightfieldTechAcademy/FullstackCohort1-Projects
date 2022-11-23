CREATE DATABASE sms;
use sms;

CREATE TABLE Users (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    CONSTRAINT UC_User UNIQUE (email),
    PRIMARY KEY (id)
);

