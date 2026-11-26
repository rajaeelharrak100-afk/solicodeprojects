<?php
// 1. Inclusion sécurisée du module de données
require_once 'fonctions.php';

// 2. Récupération des données via les fonctions
$articles = get_derniers_articles();
$categories = get_categories();

// 3. Délégation de l'affichage au template HTML
require 'index-template.php';
?>