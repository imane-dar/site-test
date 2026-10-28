<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/datacuisine-en.php');

echo $twig->render('cuisine.twig', [
	'lang' => 'en',
	'titre' => 'Cuisines',
	'cuisines' => $cuisines,
	'titre_aside' => 'Recipe Links',
	'aside_1' => 'Indian Recipes',
	'aside_2' => 'Italian Recipes',
	'aside_3' => 'Moroccan Recipes',
	'aside_4' => 'Turkish Recipes',
	'aside_5' => 'Thai Recipes',
	'aside_6' => 'Discover Italy',
	'aside_7' => 'Discover Turkey',
	'aside_8' => 'Discover India',
	'aside_9' => 'Discover Morocco',
	'aside_10' => 'Discover Thailand',
]);