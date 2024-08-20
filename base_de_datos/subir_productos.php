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
$Nombre_Producto = $_POST["Nombre_Producto"];
$Desc_Producto = $_POST["Desc_Producto"];
$Genero_Producto = $_POST["Genero_Producto"];
$Valór_Producto = $_POST["Valor_Producto"];
$Imagen_Producto = "";
$target_dir="../assets/images/productoI/"; 
if (isset($_FILES["Img_Producto"])){
    if($_FILES["Img_Producto"]){
        $target_file = $target_dir.time().basenname($_FILES["Img_Producto"]["name"]);
        move_uploader_file($_FILES["Img_Producto"]["tmp_name"], $tarjet_file);
        $Imagen_Producto = $tarjet_file;
    }
}

if(isset($Listo)){
    $sql = "INSERT INTO productos (Imagen_Producto, Nombre_Producto, Descripcion, Genero, Valor_Producto) VALUES ('$Imagen_Producto','$Nombre_Producto','$Desc_Producto','$Genero_Producto', '$Valór_Producto')";
}

if ($conn->query($sql) === TRUE){
    $_SESSION["Registrado"]= 1 ;
    $_SESSION["Volver"] = 0;
    header("Location:../pages/productos.php");
    exit;
} else{
    echo "Error al insetar registro: " . $conn->error;
}

$conn->close();
?>