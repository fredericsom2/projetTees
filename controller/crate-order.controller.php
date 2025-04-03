<?php

require_once('../config.php');
require_once('../model/order.repository.php');


// je démarre la session : php créé un identifiant unique, l'associe à une zone de stockage sur le serveur
// et envoie l'identifiant au navigateur qui le stocke en cookie
session_start();

// je crée une variable message qui s'affichera 
$message="";

if (array_key_exists("quantity", $_POST) && 
	array_key_exists("product", $_POST))
{

// try : contient le code qui pourrait generer une exeption
//  catch : capture l'exception et permet de la traiter sans interrompre l'execution du programme
	try{
		$order = createOrder($_POST['product'], $_POST['quantity']);
		saveOrder($order);
	} catch(Exception $e) {
		$message = $e->getMessage();
		
	}
	
}

	// j' utilise ces deux fonctions pour remplacer le code qui créé et sauve la commande
	// Dans votre controleur, appelez cette fonction et stockez le résultat dans une variable
$orderByUser = findOrderByUser();









require_once('../model/product-repository.php');

require_once('../view/create-order.view.php');


// le controleur : 
// récupère les données de requête (GET, POST etc etc)
// appelle le(s) répository pour récupérer les données (bdd, session)
// créé des variables / fonctions etc, pour simplifier l'utilisation des données dans la view
// renvoie une réponse contenant le HTML généré par la view