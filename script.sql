CREATE TABLE users (
    id_user INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255),
    isAdmin BOOLEAN NOT NULL
) ENGINE=InnoDB;


CREATE TABLE categorie (
    id_categorie INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL
) ENGINE=InnoDB;


CREATE TABLE wiki (
    id_wiki INT PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    contenu TEXT NOT NULL,
    date_creation DATE,
    isAccepted int,
    id_categorie INT,
    id_user INT,
    FOREIGN KEY (id_categorie) REFERENCES categorie(id_categorie),
    FOREIGN KEY (id_user) REFERENCES users(id_user)
) ENGINE=InnoDB;


CREATE TABLE tag (
    id_tag INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(255) NOT NULL
) ENGINE=InnoDB;


CREATE TABLE wikiTag (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_wiki INT,
    id_tag INT,
    FOREIGN KEY (id_wiki) REFERENCES wiki(id_wiki),
    FOREIGN KEY (id_tag) REFERENCES tag(id_tag)
) ENGINE=InnoDB;