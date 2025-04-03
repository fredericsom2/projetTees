<!-- Dans le order repository, créez une fonction "createOrder" qui 
 prend en parametre un produit et une quantity et qui créé un tableau $order et le retourne 
 Dans le order repository, créez une fonction "saveOrder" 
 qui prend en parametre un order et le sauve dans la session-->


<?php


function findOrderByUser() {
	if (array_key_exists("order", $_SESSION)) {
		return $_SESSION["order"];
	} else {
		return null;
	}
}

function createOrder($product, $quantity) {
	$order = [
		"product" => $product,
		"quantity" => $quantity
	];

	return $order;
}


function saveOrder($order) {
	$_SESSION["order"] = $order;
}