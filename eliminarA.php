<?php 

require ("conexion2.php");

$id=$_GET['id'];

$sql="DELETE  FROM reservas WHERE id='$id'";

mysqli_query($mysqli, $sql);

header('location:reservaadmin.php');

 ?>