<?php

class Order {


      // je lui donne une variable "product" qui représentera le produit de la commande
	public $product;

	public $quantity;

	public $createdAt;

	public $status;
}
// cela permet de remplacer le tableau qui se trouve sur order.repository.php


// je créé un objet, qui aura toutes les propriétés définies dans la classe.
// pour l'instant ces propriétés sont vides, mais je peux les définir
$order = new Order();

// remplir les valeurs de chacune des propriétés
$order->product = "Teeshirt Mario";
$order->quantity = 2;
$order->createdAt = new DateTime();
$order->status = "Cart";