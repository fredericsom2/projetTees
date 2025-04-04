<?php
// je demarre la session
session_start();

// je fais un require pour renvoyer vers le fichier repository
require_once ('../model/order.repository.php');

// je recupere la variable grace à la fonction deja existante dans le repository
$orderByUser = findOrderByUser();

// je fais un require vers le fichier pay-order.view
require_once('../view/pay-order.view.php');
