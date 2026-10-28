<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

echo $twig->render('base.twig', [
    'lang' => 'fr',
	'titre' => 'Page d\'accueil',
	'code' => 'CUISINE10',
    'reduction' => '10',
    'message' => 'J\'en profite !',
    'url_image' => 'images/accueil.jpg',
    'titre_bienvenu' => 'Bienvenue chez Cuisines du Monde',
    'message_bienvenu' => 'Profitez de nos saveurs du monde entier.',
]);