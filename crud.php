<!DOCTYPE html>
<html>
<head>
	<title>crud</title>
	</head>
	<body>

	<?php 
			require ("conexion.php");
				$sql="SELECT * FROM login";
				$resultado=mysqli_query($mysqli, $sql);

			 ?>

			<div>
				<a href="agregar.php">Nuevo</a>
				<table>
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre usuario</th>
							<th>Contraseña</th>
							<th>Correo Electronico</th>
							<th>Contraseña Admin</th>
							<th>Contraseña editor</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						<?php while ($filas=mysqli_fetch_assoc($resultado)) {
							# code...
						?>
						<tr>
							<td><?php echo $filas['id'] ?></td>
							<td><?php echo $filas['user'] ?></td>
							<td><?php echo $filas['password'] ?></td>
							<td><?php echo $filas['email'] ?></td>
							<td><?php echo $filas['pasadmin'] ?></td>
							<td><?php echo $filas['passeditor'] ?></td>
							<td>
								<a href="editar.php?id=<?php echo $filas['id'] ?>">Editar</a>
								<a href="eliminar.php?id=<?php echo $filas['id'] ?>">Eliminar</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>	

</body>
</html>