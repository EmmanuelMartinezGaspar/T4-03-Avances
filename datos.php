<?php

    $usuario = "root";
    $password = "root"; 
    $servidor = "localhost"; 
    $basededatos ="reservas"; 



$conexion = mysqli_connect  ($servidor,$usuario,$password) or die ("Error con el servidor de la Base de datos"); 



$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");



    $nombre=$_POST['nombre']; 
    $evento=$_POST['evento'];
    $servicio=$_POST['servicio'];
    $personas=$_POST['personas'];
    $fecha=$_POST['fecha']; 

    //sentencia sql
     $sql="INSERT INTO reservas (nombre, evento, servicio, personas, fecha) VALUES ('$nombre','$evento','$servicio','$personas','$fecha')"; 

    $ejecutar=mysqli_query($conexion, $sql);



    if(!$ejecutar){
    	 echo '<script>alert("Ha ocurrido un error")</script> ';
         echo "<script>location.href='reserva.php'</script>";	
    }else{
        echo '<script>alert("Su reserva se a realizado correctamente ")</script> ';
        
        echo "<script>location.href='inicio.php'</script>";	
    }
     
?>﻿