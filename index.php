<!DOCTYPE html>
<html lang="es">

<?php 
	$pageTitle = "Fotografías jasjadj";
	include 'componentes/header.php';
?>

<body>

	<?php 
		$pageName = "Inicio";
		include 'componentes/nav.php';
	 ?>
	<?php include 'componentes/carrusel.php'; ?>

	<div class="container contenido">
		<div class="info">
			<h3>¿Quíen soy?</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed itaque pariatur praesentium fugiat quos quae ipsam, placeat nesciunt modi animi quo culpa distinctio atque fuga earum est odio magnam cumque. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum ea asperiores pariatur autem at, dolorem vitae consequuntur vel officia consectetur? Repudiandae nesciunt sed recusandae dicta error quo neque, velit dolorum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed itaque pariatur praesentium fugiat quos quae ipsam, placeat nesciunt modi animi quo culpa distinctio atque fuga earum est odio magnam cumque.</p>

			<div class="row">
				<div class="col-md-6">
					<h3>Como trabajo</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt repudiandae mollitia nihil iste explicabo accusantium, sapiente quo aliquam ex voluptates porro iusto quaerat est ipsam impedit veritatis eveniet vel voluptate.</p>
				</div>

				<div class="col-md-6">
					<h3>¡Ponte en contácto!</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, cum?</p>
					<p><b>Telefono Celular:</b> #131231231332.</p>
					<p><b>Correo electronico:</b> asdasdadds@adasddas.com</p>
					<button class="btn btn-primary"><span class="fa fa-facebook"> Facebook</span></button>
					<buttton class="btn btn-info"><span class="fa fa-twitter"> Twitter</span></buttton>
				</div>
			</div>
		</div><!-- information -->
	</div><!-- page-content-container -->

	<?php include 'componentes/trabajos.php'; ?>
	<?php include 'componentes/footer.php'; ?>

	<!-- Scripts-->
	<script type="text/javascript" src="js/jquery-1.11.3.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/my.js"></script>

</body>
</html>