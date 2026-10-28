<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

include('include/dataproduit-en.php');

echo $twig->render('produit.twig', [
    'lang' => 'en',
    'titre'=>'Products',
    'produits' => $boxs,
    'titre_contenu'=>'Box Contents:',
    'titre_livraison' => 'Delivery in',
    'message_alerte' => 'Warning: Low stock',
    'panier' => '+ Buy'
]);
