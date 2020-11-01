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
<?php 


require ("conexion2.php");
$id=$_GET['id'];
$sql="SELECT * FROM reservas WHERE id='$id'";
$resultado=mysqli_query($mysqli, $sql);
	while ($fila=mysqli_fetch_assoc($resultado)) {

	

 ?>

 <div>
	<form class="formadm">
		<input type="hidden" name="texid" value="<?php echo $fila['id'] ?>">

		<br><label style="color: #fff">Nombre:</label><br>
		<br><input type="text" name="texnom" value="<?php echo $fila['nombre'] ?>"> <br>

		<br><label style="color:#fff">Evento</label><br>
		<br><input type="text" name="texeven" value="<?php echo $fila['evento'] ?>"><br>

		<br><label style="color: #fff">Servicios</label><br>
		<br><input type="text" name="texserv" value="<?php echo $fila['servicio'] ?>"><hr>

		<br><label style="color: #fff">Personas</label><br>
		<br><input type="text" name="texper" value="<?php echo $fila['personas'] ?>"><hr>

		<br><label style="color: #fff">Personas</label><br>
		<br><input type="text" name="texfech" value="<?php echo $fila['fecha'] ?>"><hr>


		
		<br><input type="submit" name="" value="Actualizar">
		<a href="reservaadmin.php"><button class="btn_adm" type="submit">Cancelar</button></a>
		
	</form>
<?php } ?>
</div>

<?php 

	$idu=$_GET['texid'];
	$nombre=$_GET['texnom'];
	$evento=$_GET['texeven'];
	$servicio=$_GET['texserv'];
	$personas=$_GET['texper'];
	$fecha=$_GET['texfech'];


	if ($nombre!=null||$evento!=null||$servicio!=null||$personas!=null||$fecha!=null) {

		$sql2="UPDATE reservas set nombre = '$nombre', evento = '$evento', servicio = '$servicio', personas = '$personas', fecha = '$fecha'  WHERE id = '$idu'";

		mysqli_query($mysqli, $sql2);
		
		if ($nombre=1) {
			header("location:usuariosadmin.php");
		}
	}
 ?>