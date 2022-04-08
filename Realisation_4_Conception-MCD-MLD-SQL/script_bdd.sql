-- creation de la base de données

create database Project;

-- on utilise la base crée

use Project;

-- création des tables 

create table favoris(
	id_favoris int primary key auto_increment not null,
    nom_favoris varchar(50),
    url_favoris varchar(200),
    description_favoris varchar(200),
    img_favoris varchar(200),
    id_utilisateur int
)engine=InnoDB;

create table categorie(
	id_categorie int primary key auto_increment not null,
    nom_categorie varchar(50)
)engine=InnoDB;

create table utilisateur(
	id_utilisateur int primary key auto_increment not null,
    login_utilisateur varchar(20),
    mdp_utilisateur varchar(100),
    mail_utilisateur varchar(50),
    img_utilisateur varchar(200),
    statut_utilisateur boolean
)engine=InnoDB;

create table droit(
	id_droit int primary key auto_increment not null,
    nom_droit varchar(10),
    id_utilisateur int
)engine=InnoDB;

-- création de la table d'association

create table appartenir(
	id_favoris int,
    id_categorie int,
    primary key (id_favoris, id_categorie)
)engine=InnoDB;

-- mise en place des contraintes

alter table droit
add constraint droit_fk_utilisateur
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);

alter table favoris 
add constraint favoris_fk_utilisateur
foreign key(id_utilisateur)
references utilisateur(id_utilisateur);


alter table appartenir
add constraint appartenir_fk_favoris 
foreign key(id_favoris)
references favoris(id_favoris);

alter table appartenir
add constraint appartenir_fk_categorie 
foreign key(id_categorie)
references categorie(id_categorie);