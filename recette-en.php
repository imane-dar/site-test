<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/datarecette-en.php');

echo $twig->render('recette.twig', [
	'lang' => 'en',
	'titre' => 'Recipes',
	'recette' => $recette,
	'portion_titre' => 'Number of people :',
	'temps_titre' => 'Time :',
	'materiel_titre' => 'Equipment :',
]);