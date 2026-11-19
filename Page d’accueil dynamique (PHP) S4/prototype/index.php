<?php
// 1. Informations personnelles
$name = "Rajae";
$email = "your-email@example.com";

// 2. Liste des compétences
$skills = [
    [
        "name" => "HTML",
        "description" => "Creating the structure of web pages."
    ],
    [
        "name" => "CSS",
        "description" => "Adding colors, styles and layouts."
    ],
    [
        "name" => "JavaScript",
        "description" => "Learning how to make websites interactive."
    ],
    [
        "name" => "Git & GitHub",
        "description" => "Managing and saving my projects."
    ]
];

// 3. Liste des projets
$projects = [
    [
        "name" => "ClariMind",
        "description" => "An educational website about ADHD. The goal is to help people understand attention and concentration difficulties.",
        "technologies" => "HTML / CSS / JavaScript",
        "featured" => true
    ],
    [
        "name" => "My Portfolio",
        "description" => "A personal website where I present myself, my skills and my work.",
        "technologies" => "HTML / CSS / PHP",
        "featured" => false
    ]
];

require 'index-template.php';

?>