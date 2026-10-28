<?php

// Initialise Twig
include('include/twig.php');
$twig = init_twig();
include('include/datacontact-en.php');

$info = ""; // On crée une variable vide pour le message de succès

// Si le tableau $_POST n'est pas vide, c'est que le formulaire a été envoyé
if (!empty($_POST)) {
    $info = $form_succes; 
}

echo $twig->render('contact.twig', [
    'lang' => 'en',
    'titre' => 'Contact',
    'titre_contact' => 'Contact Us',
    'message_contact' => 'We would love to hear from you. Please fill out the form below.',
    'nom_label' => $form_nom,
    'email_label' => $form_email,
    'msg_label' => $form_message,
    'bouton_texte' => $form_bouton,
    'confirmation' => $info,
]);
