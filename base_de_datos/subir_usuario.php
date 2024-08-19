<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olimpiadas";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Listo = $_POST["Listo"];
$Nombre = $_POST["nombre"]; 
$Email = $_POST["correo"]; 
$Contra = $_POST["contraseña"];
$_SESSION["Id_Usuario"] = "";
if(isset($Listo)){
    $sql = "INSERT INTO usuarios ( Nombre, Email, Contraseña) VALUES ('$Nombre', '$Email', '$Contra')";
}
$query = mysqli($conn, "SELECT ID_Usuario FROM usuarios WHERE Nombre = $Nombre, Email = $Email, Contraseña = $Contra");
while ($row = mysqli_fetch_array($query)){
    $_SESSION["Id_Usuario"] = $row["ID_Usuario"];
}
if ($conn->query($sql) === TRUE){
    $_SESSION["registrado"]= 1 ;
    $_SESSION["Error"] = 0;
    header("Location:../pages/index.php");
    exit;
} else{
    echo "Error al insetar registro: " . $conn->error;
}

$conn->close();
?>