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
('Marc Jersey Castro', 'marc.castro@example.com', 29, 'jersey567')


CREATE TABLE articles (
    artID int PRIMARY KEY AUTO_INCREMENT,
    artHeadline varchar(1000),
    artContent varchar(2000),
    artWriter varchar(100),
    artImgHeader varchar(200), 
    artType varchar(100),
    artDate DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    artEdit DATETIME
);

SELECT * FROM `articles` WHERE 1;

INSERT INTO articles (artHeadline, artContent, artWriter, artImgHeader, artType)
VALUES ("𝐎𝐍 𝐓𝐇𝐈𝐒 𝐃𝐀𝐘 | Ninoy Aquino's 92nd Birth Anniversary", "Even more than four decades since his assassination and nine decades since his birth, Ninoy Aquino's advocacy of democracy during the time of high political turmoil still stands today.
Today, let us remember his legacy in standing up to power for the sake of the Filipino and his image as a true Tarlaqueño at heart!", "Graphics and layout by Gabriel Mendoza" ,"none.jpg", "dunno what type na");

