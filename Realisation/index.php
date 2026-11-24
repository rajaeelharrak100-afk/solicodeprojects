
<?php

// Informations du site

$siteName = "ClariMind";
$pageTitle = "Comprendre le TDAH";


// Menu de navigation

$menu = [
    [
        "name" => "Accueil",
        "link" => "#accueil"
    ],
    [
        "name" => "Le TDAH",
        "link" => "#tdah"
    ],
    [
        "name" => "Les dimensions",
        "link" => "#dimensions"
    ],
    [
        "name" => "À propos",
        "link" => "#apropos"
    ]
];


// Les informations sur le TDAH

$dimensions = [
    [
        "title" => "L'inattention",
        "icon" => "🎯",
        "description" => "Difficulté à rester concentré, à suivre les instructions et à organiser les tâches."
    ],
    [
        "title" => "L'hyperactivité",
        "icon" => "🌿",
        "description" => "Un besoin de bouger souvent et une difficulté à rester calme pendant certaines activités."
    ],
    [
        "title" => "L'impulsivité",
        "icon" => "💭",
        "description" => "Une tendance à agir ou à répondre rapidement sans toujours prendre le temps de réfléchir."
    ]
];


// Informations importantes

$informations = [
    "Le TDAH est un trouble du neurodéveloppement.",
    "Chaque personne peut vivre le TDAH différemment.",
    "Le manque de concentration ne signifie pas forcément un TDAH."
];


// Une fonction pour afficher le nom du site

function afficherNomSite($name) {
    return $name;
}


// Vérification du titre

if (empty($pageTitle)) {
    $pageTitle = "Accueil";
}


// Affichage de la page

require "index-template.php";

?>
