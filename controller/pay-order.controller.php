<?php
// je demarre la session
session_start();

// je fais un require pour renvoyer vers le fichier repository
require_once ('../model/order.repository.php');

// je recupere la variable grace à la fonction deja existante dans le repository
$orderByUser = findOrderByUser();

// je regarde si c'est une méthode post (si oui ça veut dire que l'utilisateur
// a cliqué sur "payer" dans le form)

if ($_SERVER['REQUEST_METHOD']==='POST') {

    // je change le status de la commande de l'utilisateur en status "PAID"
	$orderByUser['status'] = "PAID";

	// je resauve la commande payée de l'utilisateur en session (elle remplace l'ancienne en CART)
	saveOrder($orderByUser);
}


// je fais un require vers le fichier pay-order.view
require_once('../view/pay-order.view.php');
