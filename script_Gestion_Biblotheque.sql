/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de création :  28/01/2014 15:29:35                      */
/*==============================================================*/


drop table if exists Auteur;

drop table if exists Categorie;

drop table if exists Editeur;

drop table if exists Emprunter;

drop table if exists Etudiant;

drop table if exists Exemplaire;

drop table if exists Filiere;

drop table if exists Formtion;

drop table if exists Fournisseur;

drop table if exists Livre;

drop table if exists Niveau;

drop table if exists Sanctionnement;

drop table if exists Sous_Categorie;

drop table if exists avoir_auteur;

/*==============================================================*/
/* Table : Auteur                                               */
/*==============================================================*/
create table Auteur
(
   Id_auteur            numeric(8,0) not null,
   Nom_auteur           text,
   prenom_auteur        text,
   nationalite_auteur   text,
   primary key (Id_auteur)
);

/*==============================================================*/
/* Table : Categorie                                            */
/*==============================================================*/
create table Categorie
(
   id_categorie         numeric(8,0) not null,
   libelle_categorie    text,
   primary key (id_categorie)
);

/*==============================================================*/
/* Table : Editeur                                              */
/*==============================================================*/
create table Editeur
(
   id_editeur           numeric(8,0) not null,
   nom_editeur          text,
   primary key (id_editeur)
);

/*==============================================================*/
/* Table : Emprunter                                            */
/*==============================================================*/
create table Emprunter
(
   code_barre           numeric(8,0) not null,
   CNE                  numeric(8,0) not null,
   date_emprunt         date,
   date_retour          date,
   primary key (code_barre, CNE)
);

/*==============================================================*/
/* Table : Etudiant                                             */
/*==============================================================*/
create table Etudiant
(
   CNE                  numeric(8,0) not null,
   Id_filiere           numeric(8,0) not null,
   Id_niveau            numeric(8,0) not null,
   nom_etudiant         text,
   prenom_etudiant      text,
   date_naissance       date,
   sexe                 char(1),
   primary key (CNE)
);

/*==============================================================*/
/* Table : Exemplaire                                           */
/*==============================================================*/
create table Exemplaire
(
   code_barre           numeric(8,0) not null,
   ISBN                 numeric(8,0) not null,
   code_inventaire      numeric(8,0),
   primary key (code_barre)
);

/*==============================================================*/
/* Table : Filiere                                              */
/*==============================================================*/
create table Filiere
(
   Id_filiere           numeric(8,0) not null,
   Id_formation         numeric(8,0) not null,
   Libelle_filiere      text,
   primary key (Id_filiere)
);

/*==============================================================*/
/* Table : Formtion                                             */
/*==============================================================*/
create table Formtion
(
   Id_formation         numeric(8,0) not null,
   Libelle_formation    text,
   primary key (Id_formation)
);

/*==============================================================*/
/* Table : Fournisseur                                          */
/*==============================================================*/
create table Fournisseur
(
   id_fournisseur       numeric(8,0) not null,
   nom_fournisseur      text,
   adresse_fournisseur  text,
   telephone            text,
   fax                  text,
   email                text,
   primary key (id_fournisseur)
);

/*==============================================================*/
/* Table : Livre                                                */
/*==============================================================*/
create table Livre
(
   ISBN                 numeric(8,0) not null,
   id_ss_categorie      numeric(8,0) not null,
   id_fournisseur       numeric(8,0) not null,
   id_editeur           numeric(8,0) not null,
   cote                 text,
   titre                text,
   ss_titre             text,
   nbre_exemplaire      int,
   nbre_pages           int,
   prix                 numeric(8,0),
   materiel_accompagnement text,
   mots_cles            text,
   langue_publication   text,
   langue_originale     text,
   date_edition         date,
   primary key (ISBN)
);

/*==============================================================*/
/* Table : Niveau                                               */
/*==============================================================*/
create table Niveau
(
   Id_niveau            numeric(8,0) not null,
   Libelle_niveau       text,
   primary key (Id_niveau)
);

/*==============================================================*/
/* Table : Sanctionnement                                       */
/*==============================================================*/
create table Sanctionnement
(
   id_sct               numeric(8,0) not null,
   CNE                  numeric(8,0) not null,
   date_debut_sct       text,
   duree                numeric(8,0),
   primary key (id_sct)
);

/*==============================================================*/
/* Table : Sous_Categorie                                       */
/*==============================================================*/
create table Sous_Categorie
(
   id_ss_categorie      numeric(8,0) not null,
   id_categorie         numeric(8,0) not null,
   libelle_ss_categorie text,
   primary key (id_ss_categorie)
);

/*==============================================================*/
/* Table : avoir_auteur                                         */
/*==============================================================*/
create table avoir_auteur
(
   ISBN                 numeric(8,0) not null,
   Id_auteur            numeric(8,0) not null,
   primary key (ISBN, Id_auteur)
);

alter table Emprunter add constraint FK_Emprunter foreign key (CNE)
      references Etudiant (CNE) on delete restrict on update restrict;

alter table Emprunter add constraint FK_Emprunter2 foreign key (code_barre)
      references Exemplaire (code_barre) on delete restrict on update restrict;

alter table Etudiant add constraint FK_etudier_formation foreign key (Id_filiere)
      references Filiere (Id_filiere) on delete restrict on update restrict;

alter table Etudiant add constraint FK_etudier_niveau foreign key (Id_niveau)
      references Niveau (Id_niveau) on delete restrict on update restrict;

alter table Exemplaire add constraint FK_Avoir foreign key (ISBN)
      references Livre (ISBN) on delete restrict on update restrict;

alter table Filiere add constraint FK_Association_11 foreign key (Id_formation)
      references Formtion (Id_formation) on delete restrict on update restrict;

alter table Livre add constraint FK_avoir_ss_cat foreign key (id_ss_categorie)
      references Sous_Categorie (id_ss_categorie) on delete restrict on update restrict;

alter table Livre add constraint FK_editer foreign key (id_editeur)
      references Editeur (id_editeur) on delete restrict on update restrict;

alter table Livre add constraint FK_fournir foreign key (id_fournisseur)
      references Fournisseur (id_fournisseur) on delete restrict on update restrict;

alter table Sanctionnement add constraint FK_subir foreign key (CNE)
      references Etudiant (CNE) on delete restrict on update restrict;

alter table Sous_Categorie add constraint FK_avoir_cat foreign key (id_categorie)
      references Categorie (id_categorie) on delete restrict on update restrict;

alter table avoir_auteur add constraint FK_avoir_auteur foreign key (Id_auteur)
      references Auteur (Id_auteur) on delete restrict on update restrict;

alter table avoir_auteur add constraint FK_avoir_auteur2 foreign key (ISBN)
      references Livre (ISBN) on delete restrict on update restrict;

