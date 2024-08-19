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
if (isset($_SESSION["Ingresado"])) {
    $ImagenU = 0;
    $query = mysqli_query($conn,"SELECT Imagen, Admin FROM usuarios WHERE ID_Usuario = ".$_SESSION["IdUsuario"]."") or die (mysqli_error($conn));
    while($row= mysqli_fetch_array($query)){
        $ImagenU = $row['Imagen'];
        if($row['Admin'] === TRUE){
            $_SESSION["Admin"] = 1;
        }
    }
}
$stock = 0;
$queryCant = mysqli_query($conn,"SELECT ID_Producto FROM productos");
while($rowCant = mysqli_fetch_array($queryCant)){
    $stock = $stock + 1;
}
$_SESSION["stock"] = $stock;
?>
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
<?php 
    if (isset($_SESSION["registrado"])){
        include "../includes/navbar-ingresado.php";
    } else{
        include "../includes/navbar.php";
    }
    ?>
    <br><br><br>
    <div class="col-12 banner">
    <div class="container">
        <div class="row">
            <div class="col-2 text-center"><a class="banner-links">Uniforme</a></div>
            <div class="col-2 text-center"><a class="banner-links">Pelotas</a></div>
            <div class="col-2 text-center"><a class="banner-links">Botines</a></div>
            <div class="col-2 text-center"><a class="banner-links">ASD</a></div>
            <div class="col-2 text-center"><a class="banner-links">ASD</a></div>
            <div class="col-2 text-center"><a class="banner-links">ASD</a></div>
        </div>
    </div>
    </div>

    <img class="Img-Carrito" src="../assets/images/promociones.jpg">

    <div class="Container-Carrito">
        <div id="carouselExampleIndicators" class="carousel slide Container-Carrito-Carrousel pt-3" data-bs-ride="carousel">
            <div class="carousel-inner text-center">
                <div class="carousel-item active ">
                    <div class="col-12">
                        <div class="row">
                            <?php 
                                $Repet = 0;
                                $ContRepet = 0;
                                $Random = 0;
                                $IDP = 0;
                                $ImagenP = 0;
                                $NombreP = 0;
                                $DescP = 0;
                                $ValórP = 0;
                                if($stock != 0){
                                    while ($Repet < $stock){
                                        $Random = RandomIdStock( 1, $stock );
                                        $query1 = mysqli_query($conn, "SELECT ID_Producto, Imagen_Producto, Nombre_Producto, Descripción, Valór_Producto FROM productos WHERE ID_Producto = $Random") or die (mysqli_error($conn));
                                        while($row1= mysqli_fetch_array($query1)){
                                            $IDP = $row1['ID_Producto'];
                                            $NombreP = $row1['Nombre_Producto'];
                                            $ImagenP = $row1['Imagen_Producto'];
                                            $DescP = $row1['Descripción'];
                                            $ValórP = $row1['Valór_Producto'];
                                        }
                                        $ContRepet = $ContRepet + 1;
                                        if ($ContRepet == 6) {
                                            $ContRepet = 0;
                                            echo "</div>
                                                </div>
                                            </div>
                                            <div class='carousel-item'>
                                                <div class='col-12'>
                                                    <div class='row'>";
                                        }else{
                                       echo"<div class='col-2  p-1'>
                                                <div class='Container-Carrito-Carrousel-List'>
                                                    <input type='hidden' value='$IDP'>
                                                    <img class='Container-Carrito-Carrousel-List-Img' src='$ImagenP'><br>
                                                    <h5 class='Container-Carrito-Carrousel-List-Title'>$NombreP</h5><br>
                                                    <h7 class='Container-Carrito-Carrousel-List-Description'>$DescP</h7>
                                                    <p class='Container-Carrito-Carrousel-List-Valor'>$ValórP</p>
                                                    <button class='Container-Carrito-Carrousel-List-Button' onclick='ContP($IDP)'>Agragar al Carrito</button>
                                                </div>
                                            </div>";
                                        }
                                    }
                                }else{
                                    echo "  <br><br>
                                            <div class='container'><h1 class='text-center'>Nos quedamos sin stock o el sistema está teniendo problemas, por favór vuelva a intentar más tarde</h1></div>
                                            <br><br><br><br><br><br><br>";
                                }
                                
                            ?>
                        </div>
                    </div>
                </div>
            </div>      
            <button class="carousel-control-prev Container-Carrito-Carrousel-Arrows" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next Container-Carrito-Carrousel-Arrows" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    
</body>
</html>