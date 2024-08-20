<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olimpiadas";
$conn = new mysqli($servername, $username, $password, $dbname);
$id = $_SESSION["IdUsuario"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css"> 
</head>
<body>
<?php 
    if (isset($_SESSION["registrado"])){
        include "../includes/navbar-ingresado.php";
    } else{
        include "../includes/navbar.php";
    }
?>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-6 div-perfil text-left bg-dark text-white">
            <h1> Nombre de Usuario: </h1><br>
            <h1> Email del Usuario: </h1><br>
        </div>
        <div class="col-lg-6 text-right bg-dark text-white div-perfil">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM usuarios where ID_Usuario = ".$id."")
            or die (mysqli_error($conn));
            while ($row = mysqli_fetch_array($query)) {
            echo
            "<h1>
            {$row['Nombre']}
            </h1><br>
            <h1>
            {$row['Email']}
            </h1><br>
            \n";
                }
            ?>
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
                <a class="btn btn-secondary btn-custom-ingresado"  href="../base_de_datos/editar-perfil.php">Editar Perfil</a>
            </div>
            <div class="col-lg-3">
            </div>
            <div class="col-lg-3">
            </div>
    </div>
</div>

<?php include "../includes/footer.php"?>
</body>
</html>
