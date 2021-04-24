<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<br><br>
	<h2 class="datos">Resultados</h2>
	<br><br><br>
	<?php
	$inc = include("con_db.php");
	if ($inc) {
		$consulta = "SELECT * FROM datos";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
			while ($row = $resultado->fetch_array()) {
				$id = $row['id'];
				$nombre = $row['nombre'];
				$email = $row['email'];
				$fechareg = $row['fecha_reg'];
	?>
				<div>
					<h2><?php echo $nombre; ?></h2>
					<div>
						<p>
							<b>ID: </b> <?php echo$id ?><br>
							<b>Email: </b> <?php echo $email ?><br>
							<b>Fecha Registro: </b> <?php echo $fechareg ?><br>
						</p>
					</div>
				</div>
	<?php
			}
		}
	}
	?>


</body>

</html>