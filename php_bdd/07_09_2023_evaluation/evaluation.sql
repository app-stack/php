-- créer la base de données

create database evaluation;
use evaluation;

-- créer les tables

create table vendeur(
    id_vendeur int primary key auto_increment not null,
    nom_vendeur varchar(50),
    prenom_vendeur varchar(50)
)Engine=InnoDB;

create table article(
    id_article int primary key auto_increment not null,
    nom_article varchar(50),
    prix_article float
)Engine=InnoDB;

create table ticket(
    id_ticket int primary key auto_increment not null,
    date_ticket date,
    id_vendeur int
)Engine=InnoDB;

create table ajouter(
    id_ticket int,
    id_article int,
    qtx int,
    primary key(id_ticket, id_article)
) Engine=InnoDB;

--- Contraintes Foreign Keys

alter table ticket
add constraint fk_posseder_vendeur
foreign key(id_vendeur)
references vendeur(id_vendeur);

alter table ajouter
add constraint fk_ajouter_article
foreign key(id_article)
references article(id_article);

alter table ajouter
add constraint fk_ajouter_ticket
foreign key(id_ticket)
references ticket(id_ticket);

SELECT * FROM article;
