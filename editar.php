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


require ("conexion.php");
$id=$_GET['id'];
$sql="SELECT * FROM login WHERE id='$id'";
$resultado=mysqli_query($mysqli, $sql);
	while ($filas=mysqli_fetch_assoc($resultado)) {

	

 ?>
 <div>
	<form class="formadm">
		<input type="hidden" name="textid" value="<?php echo $filas['id'] ?>">
		<br><label style="color: #fff;">Nombre:</label><br>
		<br><input type="text" name="textuser" value="<?php echo $filas['user'] ?>"> <br>
		<br><label style="color: #fff">Contraseña Usuario</label><br>
		<br><input type="text" name="textpassu" value="<?php echo $filas['password'] ?>"><br>
		<br><label style="color: #fff">Correo Electronico:</label><br>
		<input type="text" name="textemail" value="<?php echo $filas['email'] ?>"><hr>
		
		<br><input type="submit" name="" value="Actualizar">
		<a href="usuariosadmin.php"><button class="btn_adm" type="submit">Cancelar</button></a> 
		
	</form>
<?php } ?>
</div>

<?php 
	$idu=$_GET['textid'];
	$user=$_GET['textuser'];
	$passu=$_GET['textpassu'];
	$email=$_GET['textemail'];


	if ($user!=null||$passu!=null||$email!=null) {

		$sql2="UPDATE login set user = '$user', password = '$passu', email = '$email', pasadmin='', passeditor='', rol='2' WHERE id = '$idu'";

		mysqli_query($mysqli, $sql2);
		
		if ($user=1) {
			header("location:usuariosadmin.php");
		}
	}
 ?>