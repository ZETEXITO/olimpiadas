<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
    <script defer src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script defer src="../bootstrap/js/Main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
</head>
<body>
    <?php if (isset($_SESSION["Ingresado"])){
        include "../includes/navbar-ingresado.php";
    }else{
        include "../includes/navbar.php";
    }
    ?>
</body>
</html>