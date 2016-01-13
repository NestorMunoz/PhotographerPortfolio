<!DOCTYPE html>
<html lang="es">

<?php 
	$pageTitle = "Conóceme";
	include 'componentes/header.php';
?>

<body>

	<?php 
		$pageName = "Acerca";
		include 'componentes/nav.php';
	 ?>

	<div class="container mar_top_bot">
	 	<div class="row">
	 		<div class="col-lg-6">
	 			<img class="img-respo" src="img/me.jpg" alt="">
	 		</div>
	 		
	 		<div class="col-lg-6">
		 		<h4>Más sobre mí.</h4>
		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas impedit ex consequuntur odio vero et similique ipsam nobis aperiam atque quod beatae architecto cumque expedita sequi pariatur, sed tempore ducimus!. </p>
		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex asperiores dolorem, ut eveniet nisi similique expedita quia officia nostrum laboriosam voluptatum quo repellat repellendus eligendi quibusdam error odit perspiciatis assumenda?.</p>
		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed cum temporibus, numquam suscipit sunt ut, sit cupiditate maiores rem quidem ea harum culpa molestias recusandae accusantium fugiat dolore! Ad, veritatis?.</p>
 				<p><br/><a href="contacto.php" class="btn btn-theme">Contácto</a></p>
	 		</div>
	 	</div><!--row -->
	 </div><!--container -->
	
	<?php include 'componentes/trabajos.php'; ?>
	<?php include 'componentes/footer.php'; ?>

	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/my.js"></script>

</body>
</html>