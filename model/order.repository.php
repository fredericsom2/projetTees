


<?php

// je crée une fonction "findorderbyuser" 
//TP : Cette fonction vérifie s'il y a une clé order dans la session 
// (donc vérifie si une commande est déjà stockée dans la session pour l'utilisateur actuel


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
	$order = [
		"product" => $product,
		"quantity" => $quantity
	];

	return $order;
}



// je crée  une fonction "saveOrder" 
//  qui prend en parametre un order et le sauve dans la session-->
function saveOrder($order) {
	$_SESSION["order"] = $order;
}