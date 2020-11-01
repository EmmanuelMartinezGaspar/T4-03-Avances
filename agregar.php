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
		<label style="color: #fff">Nombre:</label><br>
		<br><input type="text" name="textuser"><br>
		<br><label style="color: #fff">Contraseña Usuario</label><br>
		<br><input type="text" name="textpassu"><br>
		<br><label style="color: #fff">Correo Electronico:</label><br>
		<br><input type="text" name="textemail"><br>
		
		<br><input type="submit" name="" value="Agregar">
		<a href="usuariosadmin.php" style="color: red" class="backbtn">Cancelar</a>





	</form>
</div>

<?php 
	require ("conexion.php");

	$user=$_GET['textuser'];
	$passu=$_GET['textpassu'];
	$email=$_GET['textemail'];


	if ($user!=null||$passu!=null||$email!=null) {

		mysqli_query($mysqli,"INSERT INTO login (user, password, email, pasadmin, passeditor, rol) VALUES ('$user','$passu','$email','', '', '2')");

		mysqli_query($mysqli);
		
		if ($user=1) {
			echo "script type='text/javascript'> document.location = 'usuariosadmin.php'; </script>";
		}
	}
	

 ?>