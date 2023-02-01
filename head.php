<?php
$implementedPages = [
    'guide' => [
        'titre' => 'Guide de relation entre freelance et entreprise',
        'description' => 'Comment commencer un projet informatique',
    ],
    'mission' => [
        'titre' => 'Missions',
        'description' => 'Obtenir des missions en tant que freelance',
    ],
    'freelance' => [
        'titre' => 'Freelance',
        'description' => 'Recruter pour des missions',
    ],
    'publier_cv' => [
        'titre' => 'Publier son CV',
        'description' => 'Publier son CV en tant que freelance',
    ],
    'publier_mission' => [
        'titre' => 'Publier sa mission',
        'description' => "Publier sa mission en tant qu'entreprise",
    ],
];
// Include the requested html page

// get the url path
$pathArr = explode('/', $_SERVER['REQUEST_URI']);
array_shift($pathArr);
$path = join('/', $pathArr);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/global.css">
	<meta name="description" content=<?= $implementedPages[$path]['description'] ??
     'Aucune description' ?>>
     <base href="http://www-etu-info.iut2.upmf-grenoble.fr/~brunetqu/seo/"/>
    <title><?= $implementedPages[$path]['titre'] ?? "Page d'erreur" ?></title>
</head>