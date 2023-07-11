create DATABASE exam;

use exam;

create DATABASE exam;

CREATE TABLE user(
    idUser INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL,
    mail VARCHAR(100) NOT NULL,
    mdp varchar(50) NOT NULL,
    isAdmin INTEGER NOT NULL
);

CREATE TABLE infoUtilisateur(
    idUser INTEGER NOT NULL,
    genre INTEGER NOT NULL,
    age INTEGER NOT NULL,
    taille double NOT NULL,
    poids double NOT NULL,
    solde double  NOT NULL,
    FOREIGN KEY (idUser) REFERENCES user(idUser)
);

-- CREATE TABLE compteUser(
--     idCompte INTEGER PRIMARY KEY AUTO_INCREMENT,
--     idUser INTEGER NOT NULL,
--     solde DOUBLE NOT NULL,
--     FOREIGN KEY (idUser) REFERENCES user(idUser)
-- );

CREATE TABLE code (
    idCode INTEGER PRIMARY KEY AUTO_INCREMENT,
    code VARCHAR(5) NOT NULL,
    montant double NOT NULL,
    etat int NOT NULL
);

CREATE TABLE validationCode(
    idValidation INTEGER PRIMARY KEY AUTO_INCREMENT,
    idUser INTEGER NOT NULL,
    code INTEGER NOT NULL,
    dateArriver DATE NOT NULL,
    dateValidation DATE,
    FOREIGN KEY (idUser) REFERENCES user(idUser)
);

CREATE TABLE objectif(
    idObjectif INTEGER PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(50) NOT NULL
);

CREATE TABLE regime(
    idRegime INTEGER PRIMARY KEY AUTO_INCREMENT,
    idObjectif INTEGER NOT NULL,
    nom VARCHAR(100) NOT NULL,
    duree INTEGER NOT NULL,
    poids DOUBLE NOT NULL,
    prix DOUBLE NOT NULL,
    FOREIGN KEY (idObjectif) REFERENCES objectif(idObjectif)
);

CREATE TABLE activiteSportif(
    idActivite INTEGER PRIMARY KEY AUTO_INCREMENT,
    idRegime INTEGER NOT NULL,
    nom VARCHAR(50) NOT NULL,
    FOREIGN KEY (idRegime) REFERENCES regime(idRegime)
);

CREATE TABLE regimeUser(
    idUser INTEGER NOT NULL,
    idRegime INTEGER NOT NULL,
    duree INTEGER NOT NULL,
    prix DOUBLE NOT NULL,
    FOREIGN KEY (idUser) REFERENCES user(idUser),
    FOREIGN KEY (idRegime) REFERENCES regime(idRegime)
);

CREATE TABLE objectfUser(
    idObjectif INTEGER NOT NULL, 
    idUser INTEGER NOT NULL,
    poidsCible DOUBLE NOT NULL,  
    FOREIGN KEY (idObjectif) REFERENCES objectif(idObjectif)
);

CREATE TABLE objectfUser(
    idObjectif INTEGER NOT NULL, 
    idUser INTEGER NOT NULL,
    poidsCible DOUBLE NOT NULL,  
    FOREIGN KEY (idObjectif) REFERENCES objectif(idObjectif)
);

create table plats(
    idPlats INTEGER NOT NULL, 
    idObjectif INTEGER NOT NULL,
    nom VARCHAR(50) NOT NULL,
    FOREIGN KEY (idObjectif) REFERENCES objectif(idObjectif)
);

CREATE TABLE ci_sessions(
    id VARCHAR(128) NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    timestamp int(10) unsigned DEFAULT 0 NOT NULL,
    data TEXT NOT NULL,
    PRIMARY KEY (id),
    KEY timestamp (timestamp)
);


INSERT INTO `user` ( `nom`, `mail`, `mdp`, `isAdmin`) VALUES
('admin', 'admin@gmail.com', 'admin', 1),
('mano', 'mano@gmail.com', 'admin', 0),
('jimmy', 'jimmy@gmail.com', 'admin', 0),
('antonio', 'antonio@gmail.com', 'admin', 0);


INSERT INTO infoUtilisateur(idUser,genre,age,taille,poids)   VALUES(4,2,20,1.66,55),(5,1,43,1.50,45),(3,1,43,1.70,60); 
-- INSERT INTO compteUser(idCompte,idUser,solde) VALUES()
INSERT INTO code (idCode,code,montant,etat) VALUES(NULL,6876414,50000,0),(NULL,763654,150000,0),(NULL,7685234,70000,0),(NULL,89576245,150000,0),
(NULL,8975284,500000,0),(NULL,68791534,600000,0),(NULL,7865112,120000,0),(NULL,527845,30000,0),(NULL,687513,50000,0),(NULL,61284,100000,0),
(NULL,57688126,90000,0),(NULL,76789265,60000,0);

INSERT INTO objectif(idObjectif,nom)  VALUES(NULL,'Amaigrissement'),(NULL,'Mapatavy');

INSERT INTO regime(idRegime,idObjectif,nom,duree,poids,prix)  VALUES(NULL,1,'R1',60,8,1500000),(NULL,2,'R2',20,2.5,300000),(NULL,2,'R3',30,4,500000),(NULL,1,'R4',80,10,10000),
(NULL,1,'R5',40,5,10000);

INSERT INTO activiteSportif(idActivite,idRegime,nom)  VALUES(NULL,1,'Squat'),(NULL,2,'Pomp'),(NULL,3,'Flexion'),(NULL,4,'Cardio'),(NULL,5,'Marcher');



ALTER TABLE activiteSportif ENGINE = InnoDB;
ALTER TABLE ci_sessions ENGINE = InnoDB;
ALTER TABLE code ENGINE = InnoDB;
ALTER TABLE infoUtilisateur ENGINE = InnoDB;
ALTER TABLE objectfUser ENGINE = InnoDB;
ALTER TABLE objectif ENGINE = InnoDB;
ALTER TABLE plats ENGINE = InnoDB;
ALTER TABLE regime ENGINE = InnoDB;
ALTER TABLE regimeUser ENGINE = InnoDB;
ALTER TABLE validationCode ENGINE = InnoDB;




































-- CREATE TABLE User(
--     idUser INTEGER PRIMARY KEY AUTO_INCREMENT,
--     nom VARCHAR(50) NOT NULL,
--     mail VARCHAR(100) NOT NULL,
--     mdp varchar(50) NOT NULL,
--     isAdmin INTEGER NOT NULL
-- );

-- CREATE TABLE infoUtilisateur(
--     idUser INTEGER NOT NULL,
--     genre INTEGER NOT NULL,
--     age INTEGER NOT NULL,
--     taille double NOT NULL,
--     poids double NOT NULL,
--     FOREIGN KEY (idUser) REFERENCES user(idUser)
-- );

-- -- CREATE TABLE compteUser(
-- --     idCompte INTEGER PRIMARY KEY AUTO_INCREMENT,
-- --     idUser INTEGER NOT NULL,
-- --     solde DOUBLE NOT NULL,
-- --     FOREIGN KEY (idUser) REFERENCES user(idUser)
-- -- );

-- CREATE TABLE code (
--     idCode INTEGER PRIMARY KEY AUTO_INCREMENT,
--     code VARCHAR(5) NOT NULL,
--     montant double NOT NULL,
--     etat int NOT NULL
-- );

-- CREATE TABLE validationCode(
--     idUser INTEGER NOT NULL,
--     idCode INTEGER NOT NULL,
--     dateArriver DATE NOT NULL,
--     dateValidation DATE NOT NULL,
--     FOREIGN KEY (idCode) REFERENCES user(idCode)
-- );


-- CREATE TABLE regime(
--     idRegime INTEGER PRIMARY KEY AUTO_INCREMENT,
--     nom VARCHAR(100) NOT NULL,
--     duree INTEGER NOT NULL,
--     poids DOUBLE NOT NULL,
--     prix DOUBLE NOT NULL
-- );

-- CREATE TABLE activiteSportif(
--     idActivite INTEGER PRIMARY KEY AUTO_INCREMENT,
--     idRegime INTEGER NOT NULL,
--     nom VARCHAR(50) NOT NULL,
--     FOREIGN KEY (idRegime) REFERENCES user(idRegime)
-- );

-- CREATE TABLE regimeUser(
--     idUser INTEGER NOT NULL,
--     idRegime INTEGER NOT NULL,
--     duree INTEGER NOT NULL,
--     prix DOUBLE NOT NULL,
--     FOREIGN KEY (idUser) REFERENCES user(idUser),
--     FOREIGN KEY (idRegime) REFERENCES user(idRegime)
-- );

-- CREATE TABLE objectif(
--     idObjectif INTEGER PRIMARY KEY AUTO_INCREMENT,
--     nom VARCHAR(50) NOT NULL
-- );

-- CREATE TABLE objectfUser(
--     idObjectif INTEGER NOT NULL, 
--     idUser INTEGER NOT NULL,
--     poidsCible DOUBLE NOT NULL,  
--     FOREIGN KEY (idObjectif) REFERENCES user(idObjectif)
-- );

-- INSERT INTO `user` (`idUser`, `nom`, `mail`, `mdp`, `isAdmin`) VALUES
-- -- (1, 'admin', 'admin@gmail.com', 'admin', 1),
-- (null, 'mano', 'mano@gmail.com', 'admin', 0),
-- (null, 'jimmy', 'jimmy@gmail.com', 'admin', 0),
-- (null, 'antonio', 'antonio@gmail.com', 'admin', 0);

-- insert into infoUtilisateur (idUser ,genre,age,taille,poids) VALUES (2,1,13,1.50,20);

-- INSERT INTO `user` ( `nom`, `mail`, `mdp`, `isAdmin`) VALUES
-- ('admin', 'admin@gmail.com', 'admin', 1),
-- ('mano', 'mano@gmail.com', 'admin', 0),
-- ('jimmy', 'jimmy@gmail.com', 'admin', 0),
-- ('antonio', 'antonio@gmail.com', 'admin', 0);

-- delete from objectfUser;
-- delete from regimeUser;
-- delete from activiteSportif;
-- delete from objectif;
-- delete from validationCode;
-- delete from code;
-- delete from compteUser;
-- delete from infoUtilisateur;
-- delete from regime;
-- delete from user;

-- drop table objectfUser;
-- drop table regimeUser;
-- drop table activiteSportif;
-- drop table objectif;
-- drop table validationCode;
-- drop table code;
-- drop table compteUser;
-- drop table infoUtilisateur;
-- drop table regime;
-- drop table user;


-- INSERT INTO infoUtilisateur(idUseur,genre,age,taille,poids)   VALUES(4,2,20,1.66,55),(5,1,43,1.50,45),(3,1,43,1.70,60); 
-- -- INSERT INTO compteUser(idCompte,idUser,solde) VALUES()
-- INSERT INTO code (idCode,code,montant,etat) VALUES(NULL,6876414,50000,0),(NULL,763654,150000,0),(NULL,7685234,70000,0),(NULL,89576245,150000,0),
-- (NULL,8975284,500000,0),(NULL,68791534,600000,0),(NULL,7865112,120000,0),(NULL,527845,30000,0),(NULL,687513,50000,0),(NULL,61284,100000,0),
-- (NULL,57688126,90000,0),(NULL,76789265,60000,0);

-- -- INSERT INTO validationCode(idUser,code,dateArriver,dateValidation)VALUES()
-- INSERT INTO objectif(idObjectif,nom)  VALUES(NULL,'Amaigrissement'),(NULL,'Mapatavy');
-- INSERT INTO regime(idRegime,idObjectif,nom,duree,poids,prix)  VALUES(NULL,1,'R1',60,8,1500000),(NULL,2,'R2',20,2.5,300000),(NULL,2,'R3',30,4,500000),(NULL,1,'R4',80,10,10000),
-- (NULL,1,'R5',40,5,10000);
-- INSERT INTO activiteSportif(idActivite,idRegime,nom)  VALUES(NULL,1,'Squat'),(NULL,2,'Pomp'),(NULL,3,'Flexion'),(NULL,4,'Cardio'),(NULL,5,'Marcher');
-- INSERT INTO regimeUser(idUser,idRegime,duree,prix)VALUES();
-- INSERT INTO objectfUser(idObjectif,idUser,poidsCible) VALUES();