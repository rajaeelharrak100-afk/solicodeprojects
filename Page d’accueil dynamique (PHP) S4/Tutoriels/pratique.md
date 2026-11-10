# MCD complet du Blog

## 1. Les entités

### VILLE
- **id_ville** (Identifiant)
- nom_ville

### AUTEUR
- **id_auteur** (Identifiant)
- nom_auteur
- prenom_auteur
- email_auteur

### ARTICLE
- **id_article** (Identifiant)
- titre_article
- contenu_article
- date_publication
- statut_article
- image_article

### CATEGORIE
- **id_categorie** (Identifiant)
- nom_categorie

## 2. Les relations et cardinalités

- VILLE (0,N) — habite — (1,1) AUTEUR
- AUTEUR (0,N) — rédige — (1,1) ARTICLE
- CATEGORIE (0,N) — regroupe — (1,1) ARTICLE

## 3. Schéma du MCD

flowchart TB
    VILLE["VILLE<br/>id_ville<br/>nom_ville"]
    HABITE{"habite"}
    AUTEUR["AUTEUR<br/>id_auteur<br/>nom_auteur<br/>prenom_auteur<br/>email_auteur"]

    REDIGE{"rédige"}
    ARTICLE["ARTICLE<br/>id_article<br/>titre_article<br/>contenu_article<br/>date_publication<br/>statut_article<br/>image_article"]

    REGROUPE{"regroupe"}
    CATEGORIE["CATEGORIE<br/>id_categorie<br/>nom_categorie"]

    VILLE ---|"0,N"| HABITE
    HABITE ---|"1,1"| AUTEUR

    AUTEUR ---|"0,N"| REDIGE
    REDIGE ---|"1,1"| ARTICLE

    CATEGORIE ---|"0,N"| REGROUPE
    REGROUPE ---|"1,1"| ARTICLE

## 4. Vérification

- Les 4 entités sont présentes.
- Les 3 relations sont présentes.
- Les cardinalités respectent les règles de gestion.
- L'attribut calculé `duree_lecture` est absent.
- Aucun attribut technique supplémentaire n'a été ajouté.