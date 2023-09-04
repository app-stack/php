-- créer la base de données

create database articles;
use articles;

-- créer les tables

create table article(
id_article int primary key auto_increment not null,
nom_article varchar(50),
contenu_article varchar(250)
)Engine=InnoDB;

select * from article;