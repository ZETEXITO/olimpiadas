<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css"> 
    <script defer src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script defer src="../assets/js/Main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
</head>
<body>
    <?php 
    session_start();
    if (isset($_SESSION["registrado"])){
        include "../includes/navbar-ingresado.php";
    }else{
        include "../includes/navbar.php";
    }
    ?>
    <br><br><br>
    <div class="banner-compra">
        <div class="row">
            <div class="col-lg-8 text-center banner-compra-derecha">
                <div class="col-lg-12 banner-compra-derecha-title">
                    <h1>Su carrito de compra</h1>   
                </div>
                <script>
                    for (let i = 0; i < cont; index++) {
                        var Producto = Productos[cont];
                        document.write("<br><br><br><br><div class='col-2p-1'><div class='Container-Carrito-Carrousel-List'><input type='hidden' value='$IDP'><img class='Container-Carrito-Carrousel-List-Img' src='$ImagenP'><br><h5 class='Container-Carrito-Carrousel-List-Title'>$NombreP</h5><br><h7 class='Container-Carrito-Carrousel-List-Description'>$DescP</h7><p class='Container-Carrito-Carrousel-List-Valor'>$ValórP</p><button class='Container-Carrito-Carrousel-List-Button' onclick='ContP($IDP)'>Agragar al Carrito</button></div></div>");
                        
                    }
                    
                </script>
            </div>
            <div class="col-lg-4 text-center banner-compra-izquierda">
                <div class="col-lg-12 banner-compra-izquierda-title">
                    <h1>Lista de Compra</h1>   
                </div>
                <?php
                
                ?>
            </div>
        </div>
    </div>
</body>
</html>