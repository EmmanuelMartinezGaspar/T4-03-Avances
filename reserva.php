<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reservas EmmLss</title>
	
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
	<link rel="stylesheet" href="css/imagenes.css">
	<script src="js/modernizr-2.6.2.min.js"></script>


	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">EMMLSS <em>RESERVATIONS</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="inicio.php">Inicio</a></li>
						<li><a href="reserva.php">Reservar</a></li>
						<!--<li><a href="precios.php">Precios</a></li>-->
						<li><a href="contacto.php">Contactanos</a></li>
						<li><a href="desconectar.php"><font color="RED">Salir</font></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/fondoevt8.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h2>UN SALÓN ESPECIAL, PARA TU EVENTO ESPECIAL</h2>	
							<div class="galeria" style="--w: 260px; --h: 300px;">
 							 <input type="radio" name="navegacion" id="_1" checked>
  							<input type="radio" name="navegacion" id="_2">
  							<input type="radio" name="navegacion" id="_3">
  							<input type="radio" name="navegacion" id="_4"> 
  							<input type="radio" name="navegacion" id="_5"> 
  							<input type="radio" name="navegacion" id="_6"> 
  							<img src="https://www.eventosg6.com/images/salondeeventos-cel.jpg" width="260" height="300" alt="Galeria CSS 1" />
  							<img src="https://static.wixstatic.com/media/7003b2_4a0d31ad3bf34be1b65110a698877568~mv2.jpeg/v1/fill/w_449,h_466,al_c,q_80/7003b2_4a0d31ad3bf34be1b65110a698877568~mv2.webp" width="260" height="300" alt="Galeria CSS 2"  />
  							<img src="https://www.eventosgrissel.com/wp-content/uploads/2019/11/salones-para-fiestas-y-eventos-en-mexico-00008.jpg" width="260" height="300" alt="Galeria CSS 3" />
  							<img src="https://s3.amazonaws.com/publievento/photos/images/000/002/410/medium/salon-para-eventos-con-iluminacion-xv-anos--en-chihuahua.jpg" width="260" height="300" alt="Galeria CSS 4" />
  							<img src="https://www.villasanjose.com.mx/images/events/salon-campanario.jpg" width="260" height="300" alt="Galeria CSS 5" />
  							<img src="https://i.pinimg.com/originals/9b/07/10/9b0710848aece591146eaaed868e4258.jpg" width="260" height="300" alt="Galeria CSS 6" />
						</div>
						</div>
							<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Reserva tu salón</h3>

											<form action="datos.php" method="POST" >
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Tu nombre</label>
														<input type="text" name="nombre" id="fullname" class="form-control" required="">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Tipo de Evento</label>
														<select name="evento" id="activities" class="form-control" required="">
															<option value="Boda">BODA</option>
															<option value="Cumpleaños">CUMPLEAÑOS</option>
															<option value="Reuniones">REUNIONES</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Servicios Requeridos</label>
														<select name="servicio" id="destination" class="form-control" required="">
															<option value="Alimentos_y_bebidas">ALIMENTOS Y BEBIDAS</option>
															<option value="Meseros">MESEROS</option>
															<option value="Equipo_de_sonido">EQUIPO DE SONIDO</option>
															<option value="Todos_los_servicios">TODOS LOS SERVICIOS</option>
															<option value="Ningun_servicio">NINGUN SERVICIO</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label >PERSONAS ASISTENTES</label>
														<input type="text" name="personas"  class="form-control">
															
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label>Fecha de Reservación (dd/mm/aaaa)</label>
														<input type="text" name="fecha" class="form-control" ">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Confirmar">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
				</div>
			</div>
		</div>
	</header>


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

