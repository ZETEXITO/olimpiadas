<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olimpiadas";
$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_SESSION["IdUsuario"];
		
		$sql = "SELECT * FROM usuarios WHERE ID_Usuario = $id";
			if ($re = mysqli_query($conn, $sql)) {
				$r= mysqli_fetch_array($re);
				$Nombre = $r['Nombre'];
				$Email = $r['Email'];
				$Contraseña = $r['Contraseña'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Agregar peli</title>
</head>
<body>

<form action="../base_de_datos/chequeo_usuario.php" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="ID" value="<?=$id1?>">
				Nombre: <input type="text" name="Nombre" required="required" value="<?=$Nombre?>">
				<br>
				<br>
				Email: <input type="text" name="correo" required="required" value="<?=$Email?>">
				<br>
				<br>
				Contraseña: <input type="text" name="contraseña" required="required" value="<?=$Contraseña?>">
				<br>
				<br>
				
				<input type="submit">
				</button>
			</form>
</body>
</html>