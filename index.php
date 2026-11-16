<?php

require_once './config.php';
require_once './fonctions.php';

$patient = [
    [
        'id'        => 1,
        'nom'    => 'benall sara',
        'age'     => 70,
        'code_service' => 'cardiologue',
        'urgence'    => 'urgence absolue'
        'facture estimee'    => 60
    ],
     [
        'id'        => 2,
        'nom'    => 'trabelsi ahmed',
        'age'     => 45,
        'code_service' => 'dermatologue',
        'urgence'    => 'urgence relative'
        'facture estimee'    => 50
    ],
     [
        'id'        => 3,
        'nom'    => 'jlassi amina',
        'age'     => 8,
        'code_service' => 'pediatrie',
        'urgence'    => 'consultation standard'
        'facture estimee'    => 50
    ],
    [
        'id'        => 4,
        'nom'    => 'ayari karim',
        'age'     => 68,
        'code_service' => 'cardiologue',
        'urgence'    => 'consultation standard'
        'facture estimee'    => 60
    ],
    ];
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flotte AutoLoc</title>
    <!-- Appel de la feuille de style CSS -->
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>