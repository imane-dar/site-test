<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/datacuisine.php');

echo $twig->render('cuisine.twig', [
	'lang' => 'fr',
	'titre' => 'Cuisines',
	'cuisines' => $cuisines,
	'titre_aside' => 'Liens de recettes',
	'aside_1' => 'Recettes Indiennes',
	'aside_2' => 'Recettes Italiennes',
	'aside_3' => 'Recettes Marocaines',
	'aside_4' => 'Recettes Turques',
	'aside_5' => 'Recettes Thaïlandaises',
	'aside_6' => 'Découvrir l\'Italie',
	'aside_7' => 'Découvrir la Turquie',
	'aside_8' => 'Découvrir l\'Inde',
	'aside_9' => 'Découvrir le Maroc',
	'aside_10' => 'Découvrir la Thaïlande',
]);