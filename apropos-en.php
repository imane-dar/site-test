<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();

echo $twig->render('apropos.twig', [
    'lang' => 'en',
    'titre' => 'About Us',
    'mission_titre' => 'Our Mission',
    'choix_titre' => 'Why Choose Our Kits?',
    'histoire_titre' => 'Our Story',
    'titre_cgu' => 'Terms and Conditions of Use (T&Cs)',
    'mission' => 'We believe that cooking an authentic dish shouldn\'t require spending hours searching for rare spices or measuring every gram. We created our ingredient crates to transform every meal into a culinary journey, directly from your kitchen.',
    'choix' => '- The Right Dose: No more waste. Each sachet contains exactly what you need: from rice noodles for your Pad Thai to Ras el Hanout spices for your couscous.
    - Authenticity: We select quality products (special flours, artisanal spice blends, authentic sauces) so that the taste is there.
    - Simplicity: Open your crate, follow the guide, and enjoy. It’s the ideal solution for gourmets in a hurry or curious beginners.',
    'histoire' => 'It all started with a desire: to share the flavors discovered in the four corners of the globe. From Thai Sriracha pepper to the sweetness of smoked paprika for a Lahmacun, we wanted to put the world in a box (or rather, in a crate!).
    Ready to get behind the stove? Discover our kits and start your culinary adventure today.',
    'miseàjour' => 'January 30, 2026',
    'objetCGU' => 'Purpose: The purpose of these T&Cs is to define the terms and conditions for making the Cuisine du Monde site available and the conditions of use by the User. Any navigation on the site implies acceptance of these conditions.',
    'produitsCGU' => 'Products and Food Responsibility: The kits sold contain dry ingredients and condiments. The list of ingredients is provided for information only on the site and inside the crate.
        The User is responsible for checking the presence of allergens (peanuts in Pad Thai, gluten in Lasagna/Couscous, etc.). Cuisine du Monde cannot be held responsible in the event of an allergic reaction if the ingredient is mentioned.
        Products should be stored in a dry and cool place. We decline all responsibility in the event of poor storage after delivery.',
    'proprieteCGU' => 'Intellectual Property: All content present on the site (texts, images, logos, photos of the kits) are the exclusive property of Cuisine du Monde. Any reproduction, even partial, is prohibited without prior authorization.',
    'donneesCGU' => 'Personal Data: In accordance with the GDPR, the information collected during an order (name, address, email) is only used for processing it. You have the right to access and delete your data by contacting us at: cuisinedumonde@gmail.com.',
    'limitationCGU' => 'Limitation of Liability: Cuisine du Monde strives to provide precise information, but cannot guarantee the complete accuracy of the descriptions. The use of cooking tips and the handling of utensils when preparing recipes remain the responsibility of the User.',
]);