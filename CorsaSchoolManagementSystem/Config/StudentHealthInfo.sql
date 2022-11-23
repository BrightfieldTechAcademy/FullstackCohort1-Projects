CREATE TABLE StudentHealthInfo (
    healthId int NOT NULL AUTO_INCREMENT,
    emergencyContactNumber varchar (255) NOT NULL,
    personalDoctorNumber varchar (255),
    medicalFitnessNote varchar (255),
    bloodGroup varchar(255) NOT NULL,
    preferedDiet varchar (255),
    unpreferedDiet varchar (255),
    PRIMARY KEY (healthId),
    FOREIGN KEY (healthId) references StudentsInfo(PersonalId)
)