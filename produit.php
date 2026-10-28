<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/dataproduit.php');

echo $twig->render('produit.twig', [
    'lang' => 'fr',
    'titre'=>'Produits',
    'produits' => $boxs,
    'titre_contenu'=>'Contenu de la Box:',
    'titre_livraison' => 'Livraison en',
    'message_alerte' => 'Attention: Stock faible',
    'panier' => '+ Panier'
]);
