<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>EDTReservas</title>

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/crud.css">
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">EDITOR <em>JASSAM</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<!--<li><a href="admin.php">Inicio</a></li>
						<li><a href="reservaadmin.php">Reservar</a></li>
						<li><a href="usuariosadmin.php">Usuarios</a></li>
						<li><a href="contactoadmin.php">Contactanos</a></li>-->
						<li><a href="desconectar.php"><font color="red">Salir</font></a></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/fondoadm2.png)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-10em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1><center>A CONTINUACÍON SE MUESTRAN LOS USUARIOS QUE HAN REALIZADO RESERVACIONES</center></h1>	
						</div>
					</div>


		<?php 

			require ("conexion2.php");
				$sql="SELECT * FROM reservas";
				$resultado=mysqli_query($mysqli, $sql);

			 ?>
			<a href="agregarE.php"><button class="btn_crear" type="submit">Agrear Nueva Reserva</button></a> 

			<div class="form_crud">
				
			
				<table>
					<thead>
						
						<tr>
							<th>ID</th>
							<th>NOMBRE</th>
							<th>EVENTO</th>
							<th>SERVICIOS</th>
							<th>PERSONAS</th>
							<th>FECHA</th>
							<th>Accion_a_realizar</th>
						</tr>
					
					</thead>
					<tbody>
						<?php while ($fila=mysqli_fetch_assoc($resultado)) {
							# code...
						?>
						<tr>
							<td><?php echo $fila['id'] ?></td>
							<td><?php echo $fila['nombre'] ?></td>
							<td><?php echo $fila['evento'] ?></td>
							<td><?php echo $fila['servicio'] ?></td>
							<td><?php echo $fila['personas'] ?></td>
							<td><?php echo $fila['fecha'] ?></td>
						
							<td>
								<a href="editarE.php?id=<?php echo $fila['id'] ?>">Editar</a>
								<a href="eliminarE.php?id=<?php echo $fila['id'] ?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
			</table>
		</div>






	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.countTo.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<script src="js/bootstrap-datepicker.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

