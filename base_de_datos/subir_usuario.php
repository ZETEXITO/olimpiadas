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

if(isset($Listo)){
    $sql = "INSERT INTO usuarios ( Nombre, Email, Contraseña) VALUES ('$Nombre', '$Email', '$Contra')";
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