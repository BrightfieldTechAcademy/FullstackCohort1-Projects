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


CREATE TABLE StudentsInfo (
    id INT  AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(255) NOT NULL,
    middlename VARCHAR(255),
    lastname VARCHAR(255) NOT NULL,
    dateOfBirth VARCHAR(255) NOT NULL,
    placeOfBirth  VARCHAR(255),
    hometown VARCHAR(255) NOT NULL,
    residentialAddress VARCHAR(255),
    gpsAddress VARCHAR(255),
    gender VARCHAR(255) NOT NULL,
    religion VARCHAR(255) NOT NULL,
    formerSchool VARCHAR(255),
    previousClass VARCHAR(255) ,
    classAdmitted  VARCHAR(255) NOT NULL,
    yearOfAdmission  VARCHAR(255) NOT NULL,
    picture VARCHAR(255) NOT NULL
);

CREATE TABLE StudentHealthsInfo (
    id int NOT NULL AUTO_INCREMENT,
    studentId int,
    emergencyContactNumber varchar (255) NOT NULL,
    personalDoctorNumber varchar (255),
    medicalFitnessNote varchar (255),
    bloodGroup varchar(255) NOT NULL,
    preferedDiet varchar (255),
    unpreferedDiet varchar (255),
    PRIMARY KEY (id),
    FOREIGN KEY (studentId) references StudentsInfo(id)
);


CREATE TABLE ParentsInfo(
    id int NOT NULL AUTO_INCREMENT,
    studentId int,
    fathersName varchar(255) NOT NULL,
    fathersOccupation  varchar(255) NOT NULL,
    fathersTelephone  varchar(255) NOT NULL,
    fathersHometown  varchar(255) NOT NULL,
    mothersName  varchar(255) NOT NULL,
    mothersOccupation varchar(255) NOT NULL,
    mothersHometown  varchar(255) NOT NULL,
    house  varchar(255),
    mothersTelephone  varchar(255) NOT NULL,
    guardiansName  varchar(255) NOT NULL,
    residence varchar(225),
    contact varchar(225),
    PRIMARY KEY (id),
    FOREIGN KEY (studentId) references StudentsInfo(id)
);

