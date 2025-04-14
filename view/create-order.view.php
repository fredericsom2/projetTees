

		
	<?php
require_once('../view/header.php');?>	

	<!-- utilisez la variable dans la view pour afficher la commande de l'utilisateur : -->
	<?php if ($orderByUser) { ?>
         <h1><?php echo $orderByUser["quantity"]; ?> : 
		 <?php echo $orderByUser["product"]; ?>


		 <!-- je crée un message qui montre la date de commande -->
		 <p>créée le <?php echo $orderByUser ['createdAt']-> format('y-m-d'); ?>   </p> 
		 <p>Votre commande est en statut :<?php echo $orderByUser["status"
		]; ?> </p>
    <?php } ?>


	
		</h1>
		<!-- message de renvoi : impossible de creer la commande -->
		<?php echo $message; ?>
		
		  
			</ul>
		</nav>

	</header>

	<main>

	<?php if (array_key_exists("order", $_SESSION)) { ?>
		<!-- je récupere ma commande -->
		<p>Vous avez une commande en attente : <?php echo $_SESSION["order"]["quantity"]; ?> : <?php echo $_SESSION["order"]["product"]; ?></p>
	<?php } ?>



	




		<form method="POST" >

			<label for="quantity">Quantity
				<input type="number" name="quantity" />
			</label>

			<label for="product">
				<select name="product">

				<!-- JE crée une boucle  -->
					<?php foreach ($products as $product) { ?>
						<option value="<?php echo $product; ?>"><?php echo $product; ?></option>
					<?php } ?>
				</select>
			</label>

			<button type="submit">Créer la commande</button>

		</form>

	</main>

</body>
</html>