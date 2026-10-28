<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

echo $twig->render('base.twig', [
    'lang' => 'en',
	'titre' => 'Home Page',
	'code' => 'CUISINE10',
    'reduction' => '10',
    'message' => 'J\'en profite !',
    'url_image' => 'images/accueil.jpg',
    'titre_bienvenu' => 'Welcome to Cuisine du Monde',
    'message_bienvenu' => 'Enjoy our flavors from around the world.',
]);