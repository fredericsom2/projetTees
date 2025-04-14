
<?php
require_once('../view/header.php');?>


		<?php if ($orderByUser) {?>
			<p> <?php echo $orderByUser['product']; ?> :  <?php echo $orderByUser['quantity']; ?>
			<p>Créée le <?php echo $orderByUser['createdAt']->format('y-m-d'); ?></p>
			<p>Votre commande est en statut :<?php echo $orderByUser['status']; ?> </p>

<!-- création d'un bouton "payer" -->
 <!--  je crée un form pour que le bouton 
  payer fasse une requête POST sur la même page -->
		<form method="post"></form>	
		<button type="submit">Payer la commande</button>
		<?php } 
		else { ?>

            <!-- création d'unn message si aucune commande  -->
			<p>Vous n'avez pas de commande à payer</p>
		<?php } ?>


		
		

	</main>

</body>
</html>