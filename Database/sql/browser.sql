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



INSERT INTO articles (artHeadline, artContent, artWriter, artImgHeader, artType)
VALUES 
-- Article 1
("TSU – CCS’ Lord Baron Barcia wins 4th place in 22nd RHEPC",
"Lord Baron Barcia, a first-year student from Tarlac State University – College of Computer Studies, clinched fourth place in the Copyreading and Headline Writing Filipino category at the 22nd Regional Higher Education Press Conference (RHEPC) held at Palm Cabanas Resort, Pampanga, from January 11 to 13, 2024. Alongside six other delegates from The Work, Barcia qualified for the 19th Luzon-wide Higher Education Press Conference (LHEPC) in Naga City in March 2024. Nearly 500 delegates competed, and Barcia's tenacity secured his spot among distinguished participants.",
"John Hermie Sarceda", "testIMG-Landscape.jpg", "News"),

-- Article 2
("Inocension captures hearts with poetic prowess, earns 3rd Place during SAS Week 2024",
"Earl Vincent Q. Inocension of BSIS-BA 4A mesmerized his audience with his poetic prowess, clinching 3rd place in an online Spoken Poetry contest during the SAS Week 2024. Despite minimal preparation due to his OJT, Inocension captivated judges with his performance. His love for storytelling and rhymes shone through, earning him a well-deserved award and the chance to showcase his talent.",
"Marc Jhasper Petines", "testIMG-Landscape.jpg", "News"),

-- Article 3
("Mekuz seizes the Battle of the Bands championship",
"In a showdown of 15 bands on February 14 at the TSU Gymnasium, Mekuz claimed the championship at the Valentine's special 'Battle of the Bands: The Anthem of the Heart'. Organized by the Supreme Student Council, Mekuz's performance secured them ₱10,000 and a Riot Studio rehearsal voucher. The event also crowned Beeftones and Smith Society as runners-up.",
"Gabriel Garcia", "testIMG-Landscape.jpg", "News"),

-- Article 4
("TSU to launch weekly online classes starting this semester",
"Tarlac State University (TSU) is set to enhance its flexible learning approach as it transitions all classes to online sessions one day per week, effective from the third week of classes starting this 2nd semester of Academic Year 2023-2024. This move supports both extracurricular activities and academic continuity while aligning with flexible work arrangements.",
"Hannah Pulmano and Augustine Baguisi", "testIMG-Landscape.jpg", "News"),

-- Article 5
("TSU CCS Dean announces mandatory ICT Proficiency Exam for seniors",
"Dr. Alvincent E. Danganan, the Dean of the College of Computer Studies (CCS) at TSU, announced an ICT Proficiency Diagnostic Exam for graduating students starting February 2024. While the exam doesn't affect graduation eligibility, it assesses skill levels and aids in professional readiness.",
"Arvie Caling and Gabriel Garcia", "testIMG-Landscape.jpg", "News"),

-- Article 6
("TSU fourth-year students gear up for OJT with 'Work Ethics and Safe Spaces Act' seminar",
"To prepare fourth-year students for on-the-job training (OJT), Tarlac State University conducted the 'Work Ethics and Safe Spaces Acts' seminar on February 6, 2024, emphasizing professionalism and confronting gender-based harassment.",
"Arvie Caling", "testIMG-Landscape.jpg", "News"),

-- Article 7
("BSIT-WMA Juniors Capture Skills in Photography Workshop",
"BSIT-WMA junior students attended a photography workshop on February 17, 2024, at TSU’s San Isidro Campus. Renowned photographers introduced photography basics, followed by a mini photo competition that showcased the students’ creativity.",
"Bless Dantes", "testIMG-Landscape.jpg", "News"),

-- Article 8
("TSU Scholars engage values enrichment program at Lucinda Campus",
"TSU's Scholarship and Financial Assistance Unit organized a values enrichment program titled 'Developing the Inner Self' at the Lucinda Campus on February 19, 2023. Scholars reflected on personal growth and service-oriented values.",
"Bless Dantes", "testIMG-Landscape.jpg", "News"),

-- Article 9
("TSU SSC conducts series of seminars in preparation for Mx. Warrior 2024 pageant",
"The TSU Supreme Student Council held multiple seminars on March 4, 2024, to prepare for the Mx. Warrior 2024 pageant. Topics included safe spaces, personality development, mental health, leadership, and environmental conservation.",
"Augustine Baguisi", "testIMG-Landscape.jpg", "News"),

-- Article 10
("Sicat of TSU-CCS secures 2nd Place in 8th Kanlahi Product Packaging Design Contest",
"Justine Philip T. Sicat, a first-year BSCS student, won 2nd place in the 8th Kanlahi Product Packaging Design Contest on March 7, 2024. Despite challenges, his digital and physical design skills impressed judges, earning him a spot among the best.",
"Augustine Baguisi", "testIMG-Landscape.jpg", "News"),

-- Article 11
("TSU-CCS attends IRCITE 2024",
"Tarlac State University - College of Computer Studies participated in the International Research Conference on Information Technology Education (IRCITE) 2024 on March 8, 2024. The event promoted innovation and knowledge exchange in IT education.",
"John Hermie Sarceda", "testIMG-Landscape.jpg", "News");
