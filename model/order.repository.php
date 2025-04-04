


<?php

// je crée une fonction "findorderbyuser" 
//TP : Cette fonction vérifie s'il y a une clé order dans la session 
// (donc vérifie si une commande est déjà recupéré dans la session pour l'utilisateur actuel


function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}




// <!--  je crée une fonction "createOrder" qui 
//  prend en parametre un produit et une quantity et qui créé un tableau $order et le retourne 
function createOrder($product, $quantity) {


    
    // En PHP, throw new Exception("message d'erreur") est utilisé pour lancer une exception. 
    // Cela interrompt immédiatement l'exécution normale du script et envoie un message d'erreur qui peut être géré avec un try-catch.
    if ($quantity < 0) {
		throw new Exception("Interdiction de mettre une quantité inférieure à 0");
	} else if ($quantity > 3){
		throw new Exception("Interdiction de mettre quantité supérieur à 3");
		
    }else {
	$order = [
		"product" => $product,
		"quantity" => $quantity, 
        "createdAt" => new DateTime(),  //  pour afficher la date de commande
		"status" => "CART"
	];

	return $order;
}
}



// je crée  une fonction "saveOrder" 
//  qui prend en parametre un order et le sauve dans la session-->
function saveOrder($order) {
	$_SESSION["order"] = $order;
}