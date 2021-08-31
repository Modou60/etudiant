-- base de données: 'promo'

create database if not exists promo default character set utf8 collate utf8_general_ci;

use promo;

-- création des tables


-- table etudiant
drop table if exists etudiant;
create table etudiant (
    etu_id int not null auto_increment primary key,
    etu_nom varchar(40) not null,
    etu_prenom varchar(40) not null,
    etu_adresse varchar(100),
    etu_ville varchar(40),
    etu_cp varchar(5),
    etu_promo varchar(30) not null
)engine=innodb;