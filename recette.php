<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/datarecette.php');

echo $twig->render('recette.twig', [
	'lang' => 'fr',
	'titre' => 'Recettes',
	'recette' => $recette,
	'portion_titre' => 'Nombre de personnes :',
	'temps_titre' => 'Temps :',
	'materiel_titre' => 'Matériel :',
]);