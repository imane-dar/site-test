<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

echo $twig->render('apropos.twig', [
    'lang' => 'fr',
    'titre' => 'À propos',
    'mission_titre' => 'Notre Mission',
    'choix_titre' => 'Pourquoi choisir nos kits ?',
    'histoire_titre' => 'Notre Histoire',
    'titre_cgu' => 'Conditions Générales d\'Utilisation (CGU)',
    'mission' => 'Nous croyons que cuisiner un plat authentique ne devrait pas nécessiter de passer des heures à chercher des épices rares ou à mesurer chaque gramme. Nous avons créé nos cagettes d\'ingrédients pour transformer chaque repas en un voyage culinaire, directement depuis votre cuisine.',
    'choix' => '- La Juste Dose : Plus de gaspillage. Chaque sachet contient exactement ce dont vous avez besoin : des nouilles de riz pour votre Pad Thaï aux épices Ras el Hanout pour votre couscous.
    - L\'Authenticité : Nous sélectionnons des produits de qualité (farines spéciales, mélanges d\'épices artisanaux, sauces authentiques) pour que le goût soit au rendez-vous.
    - La Simplicité : Ouvrez votre cagette, suivez le guide, et régalez-vous. C’est la solution idéale pour les gourmets pressés ou les débutants curieux.',
    'histoire' => 'Tout a commencé par une envie : partager les saveurs découvertes aux quatre coins du globe. Du piment Sriracha de Thaïlande à la douceur du paprika fumé pour un Lahmacun, nous avons voulu mettre le monde en boîte (ou plutôt, en cagette !).
    Prêt à passer derrière les fourneaux ? Découvrez nos kits et commencez votre aventure culinaire dès aujourd\'hui.',
    'miseàjour' => '30 janvier 2026',
    'objetCGU' => 'Objet: Les présentes CGU ont pour objet de définir les modalités de mise à disposition du site Cuisine du Monde et les conditions d\'utilisation par l\'Utilisateur. Toute navigation sur le site implique l\'acceptation de ces conditions.',
    'produitsCGU' => 'Produits et Responsabilité Alimentaire: Les kits vendus contiennent des ingrédients secs et des condiments. La liste des ingrédients est fournie à titre indicatif sur le site et à l\'intérieur de la cagette.
        L\'Utilisateur est responsable de vérifier la présence d\'allergènes (arachides dans le Pad Thaï, gluten dans les Lasagnes/Couscous, etc.). Cuisine du Monde ne pourra être tenu responsable en cas de réaction allergique si l\'ingrédient était mentionné.
        Les produits doivent être conservés dans un endroit sec et frais. Nous déclinons toute responsabilité en cas de mauvaise conservation après livraison.',
    'proprieteCGU' => 'Propriété Intellectuelle: Tous les contenus présents sur le site (textes, images, logos, photos des kits) sont la propriété exclusive de Cuisine du Monde. Toute reproduction, même partielle, est interdite sans autorisation préalable.',
    'donneesCGU' => 'Données Personnelles: Conformément au RGPD, les informations collectées lors d\'une commande (nom, adresse, email) sont uniquement utilisées pour le traitement de celle-ci. Vous disposez d\'un droit d\'accès et de suppression de vos données en nous contactant à : cuisinedumonde@gmail.com.',
    'limitationCGU' => 'Limitation de Responsabilité: Cuisine du Monde s\'efforce de fournir des informations précises, mais ne saurait garantir l\'exactitude totale des descriptions. L\'utilisation des conseils de cuisine et la manipulation des ustensiles lors de la préparation des recettes restent sous la responsabilité de l\'Utilisateur.',
]);