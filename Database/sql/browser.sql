CREATE DATABASE thebrowser;

CREATE TABLE users(
    Id int PRIMARY KEY AUTO_INCREMENT,
    Username varchar(200),
    Email varchar(200),
    Age int,
    Password varchar(200)
);

CREATE TABLE articles (
    artHeadline varchar(1000),
    artContent varchar(2000),
    artWriter varchar(100),
    artImgHeader varchar(200), 
    artType varchar(100),
    artDate DATE,
    artEdit DATE    
);