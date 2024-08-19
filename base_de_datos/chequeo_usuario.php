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

$Email= $_POST["correo"];
$Contra=$_POST["contraseña"];

$query = mysqli($conn, "SELECT ID_Usuario FROM usuarios WHERE Email = $Email, Contraseña = $Contra");
while ($row = mysqli_fetch_array($query)){
    $_SESSION["Id_Usuario"] = $row["ID_Usuario"];
}
if(isset($_POST["correo"])){
    $query = mysqli_query($conn, " SELECT * FROM usuarios where Email='".$Email."' AND Contraseña='".$Contra."' ") or die (mysqli_error($conn));
    if ($conn = mysqli_fetch_array($query)){
        $_SESSION["registrado"] = 1;
        $_SESSION["Error"] = 0;
        header("Location:../pages/index.php");
    } else{
        $_SESSION["Error"] = 1;
        header("Location:../pages/login.php");
    }
}

$conn->close();
?>