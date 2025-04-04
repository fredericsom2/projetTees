<!-- je crée un fichier "pay-order.view pour renvoyer vers la pager "payer" -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<link rel="stylesheet" href="../css/style.css">
<body>

	<header>

		<nav>
			<ul>
				<li>Créer une commande</li>
			</ul>
		</nav>

	</header>


	<main>
	
		<h1>Payer une commande</h1>

		<?php if ($orderByUser) {?>
			<p> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?>
			<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
			<p>Votre commande est en statut :<?php echo $orderByUser['status']; ?> </p>

<!-- création d'un bouton "payer" -->
			<button>Payer</button>
		<?php } else { ?>

            <!-- création d'unn message si aucune commande  -->
			<p>Vous n'avez pas de commande à payer</p>
		<?php } ?>


		
		

	</main>

</body>
</html>