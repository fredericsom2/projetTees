<?php



require_once('../config.php');
require_once('../model/order.repository.php');


if ($_SERVER["REQUEST_METHOD"] === "POST") {

	session_start();
	$orderByUser = findOrderByUser();

	$orderByUser["status"] = "SHIPPED";
	saveOrder($orderByUser);

	$message = "Demande d'expédition confirmée";

} else {
	$message = "";
}





require_once('../view/ShipOrder.view.php');