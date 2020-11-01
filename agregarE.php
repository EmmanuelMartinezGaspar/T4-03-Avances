<link rel="stylesheet" href="css/crud.css">

<style>
		
		 a:link, a:visited, a:active {
            text-decoration:none;
        }
		body{
			background-image: url('./images/fondoadm3.jpg');: 
			-webkit-background-size: cover;
			background-size: cover;
			background-attachment: fixed;
		}

	</style>
<div>
	<form class="formadm">
		<br><label style="color: #fff">Nombre:</label><br>
		<br><input type="text" name="textnom"><br>
		<br><label style="color: #fff">Evento:</label><br>
		<br><input type="text" name="texteven"><br>
		<br><label style="color: #fff">Servicios:</label><br>
		<br><input type="text" name="textserv"><br>
		<br><label style="color: #fff">Personas</label><br>
		<br><input type="text" name="textper"><br>
		<br><label style="color: #fff">Fecha (dd/mm/aa):</label><br>
		<br><input type="text" name="textfech"><br>

		<br><input class="btn_adm" type="submit" name="" value="Agregar">
		<a href="reservaeditor.php" style="color: red">Regresar</a>
	</form>
</div>

<?php 
	require ("conexion2.php");

	$nombre=$_GET['textnom'];
	$evento=$_GET['texteven'];
	$servicio=$_GET['textserv'];
	$personas=$_GET['textper'];
	$fecha=$_GET['textfech'];


	if ($nombre!=null||$evento!=null||$servicio!=null||$personas!=null||$fecha!=null) {

		mysqli_query($mysqli,"INSERT INTO reservas (nombre, evento, servicio, personas, fecha) VALUES ('$nombre','$evento','$servicio','$personas', '$fecha')");

		mysqli_query($mysqli);
		
		if ($user=1) {
			header("location:reservaeditor.php");
		}
	}
	

 ?>