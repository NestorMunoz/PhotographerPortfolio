<!DOCTYPE html>
<html lang="es">

<?php 
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		//Data to send via email
		$name = $_POST["name"];
		$email = $_POST["email"];
		$subject = $_POST["subject"];
		$message = $_POST["message"];

		//Send email

		header("Location: contacto.php?state=success");
	}
?>

<?php 
	$pageTitle = "Contáctame";
	include 'componentes/header.php';
?>

<body>

	<?php 
		$pageName = "Contacto";
		include 'componentes/nav.php';
	 ?>

	 <?php if (isset($_GET["state"]) AND $_GET["state"] == "success") { ?>
	 <p class="succes-email">Mensaje enviado exitosamente.</p>
	 <?php } ?>

	<div id="contacto">
		<div class="container mar_top_bot">
		 	<div class="row">
		 		<div class="col-lg-8">
		 			<h4>¡Contáctame!</h4>
		 			<div class="linea"></div>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto culpa, a! Neque, hic. Facere voluptate commodi ut! Beatae rem officia nisi molestiae non accusamus, veniam hic sed sint minima, perferendis!.</p>
			 			<form role="form" method="POST" action="contacto.php">
						  <div class="form-group">
						    <label>Tú nombre</label>
						    <input name="name" class="form-control">
						  </div>
						  <div class="form-group">
						    <label>Correo electronico</label>
						    <input name="email" type="email" class="form-control">
						  </div>
						  <div class="form-group">
						    <label>Asunto</label>
						    <input name="subject" class="form-control">
						  </div>
						  <div class="form-group">
						  	<label>Mensaje</label>
						  	<textarea name="message" class="form-control" rows="8"></textarea>
						  </div>
						  <button type="submit" class="btn btn-theme">Enviar</button>
						</form>
				</div><!--col-lg-8 -->
		 		
		 		<div class="col-lg-4">
			 		<h4>Mí direccion</h4>
			 		<div class="linea"></div>
			 			<p>
			 				adasds, 1232,<br/>
			 				32342, asdasdasd,<br/>
			 				México.<br/>
			 			</p>
			 			<p>
			 				Email: asdasd@ksjksdsd.com<br/>
			 				Telefono: +54 34343-4845
			 			</p>
			 			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos quod, doloribus maiores error consequatur vitae veniam perferendis ab fuga. Sunt nostrum tenetur fugit, officiis, ratione ipsam eligendi minus quod nam?.</p>
		 		</div>
		 	</div><!--row -->
		</div><!--container -->
	</div>

	<?php include 'componentes/footer.php'; ?>
	
	<!-- Scripts-->
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/my.js"></script>

</body>
</html>