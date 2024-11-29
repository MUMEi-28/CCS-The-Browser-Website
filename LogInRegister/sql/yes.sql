CREATE DATABASE thebrowser;

CREATE TABLE users(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Age int,
    Password varchar(200)
);

INSERT INTO users (Username, Email, Age, Password)
VALUES
('Andrei Salas', 'andrei.salas@example.com', 25, 'andrei123'),
('Justice Patrick David', 'justice.david@example.com', 30, 'justice456'),
('Keziah Lee Dominguez', 'keziah.dominguez@example.com', 27, 'keziah789'),
('Marc Jhasper Petines', 'marc.petines@example.com', 22, 'marc1234'),
('Marc Jersey Castro', 'marc.castro@example.com', 29, 'jersey567');