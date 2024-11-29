CREATE DATABASE thebrowser;

CREATE TABLE users (
    Id INT AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50),
    Email VARCHAR(50),
    Age INT,
    Password VARCHAR(50) 
);


INSERT INTO users (Username, Email, Age, Password)
VALUES
('Andrei Salas', 'andrei.salas@example.com', 25, 'andrei123'),
('Justice Patrick David', 'justice.david@example.com', 30, 'justice456'),
('Keziah Lee Dominguez', 'keziah.dominguez@example.com', 27, 'keziah789'),
('Marc Jhasper Petines', 'marc.petines@example.com', 22, 'marc1234'),
('Marc Jersey Castro', 'marc.castro@example.com', 29, 'jersey567');


CREATE TABLE articles (
    artHeadline varchar(1000),
    artContent varchar(2000),
    artWriter varchar(100),
    artImgHeader varchar(200), 
    artType varchar(100),
    artDate DATE,
    artEdit DATE    
);

