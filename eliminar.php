<?php 

require ("conexion.php");

$id=$_GET['id'];

$sql="DELETE  FROM login WHERE id='$id'";

mysqli_query($mysqli, $sql);

header('location:usuariosadmin.php');

 ?>