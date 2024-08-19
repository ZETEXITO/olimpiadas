<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "olimpiadas";
$conn = new mysqli($servername, $username, $password, $dbname);
$id =-1;
$name ="";
$app ="";
$email ="";
$id1= "";
$contra="";
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
        <div class="col-lg-6">
            <h1> Nombre de Usuario: </h1><br>
            <h1> Email del Usuario: </h1><br>
        </div>
        <div class="col-lg-6 text-right bg-dark text-white">
            <?php
            $query = mysqli_query($conn, "SELECT * FROM usuarios")
            or die (mysqli_error($conn));
            while ($row = mysqli_fetch_array($query)) {
            echo
            "<h1>
            {$row['Nombre']}
            </h1><br>
            <h1>
            {$row['Email']}
            </h1>
            \n";
                }
            ?>
        </div>
    </div>
</div>

<?php include "../includes/footer.php"?>
</body>
</html>
