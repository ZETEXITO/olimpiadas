<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css"> 
    <script src="../assets/js/popus.js"></script>
</head>
<body>
    <!-- Navbar -->
    <?php 
    if (isset($_SESSION["registrado"])){
        include "../includes/navbar-ingresado.php";
    } else{
        include "../includes/navbar.php";
    }
    ?>

    <!-- Contenido Principal -->
    <div class="container-fluid body-index">
        <div class="row">
            <div class="col-lg-6 col-sm-6 d-flex flex-column ">
                <br>
                <h2 class="text-center title-index">CARRITO DE COMPRA</h1>
                <br>
                <h6 class="text-center text-muted title-index-sub">Bienvenido a Carrito de Compra, el lugar donde encontrar todo tipo de artículos para deportes al aire libre</h6>
                
                    <div class="container">
                        <div class="row">
                            <div class="col-2 col-lg-2"></div>
                            <?php 
                            if (isset($_SESSION["registrado"])){
                                echo "<div class='col-8 col-lg-8 text-center'>
                                    <button type='button' class='btn btn-secondary btn-custom-ingresado'><a href='../pages/carrito.php' class='link-1'>Ingresár</a></button>
                                </div>
                                <div class='col-md-4 col-lg-4'></div>";
                            }else{
                                echo"<div class='col-md-4 col-lg-4 text-center'>
                                 <a href='login.php' class='btn btn-secondary btn-custom link-1' >Iniciar Sesion</a>
                            </div>
                            <br>
                            <div class='col-md-4 col-lg-4 text-center'>
                                <a href='register.php' class='btn btn-secondary btn-custom link-1' >Registrarse</a> 
                            </div>
                            <div class='col-md-2 col-lg-2'></div>
                            <div class='col-lg-12 col-sm-12 col-12 text-center'>
                                <br>
                                <a href='../pages/carrito.php' class='btn btn-outline-dark btn-custom-invitado'>Continuar como invitado</a>
                            </div>";
                            }
                                ?>
                           
                            <div class="col-lg-12 col-sm-12 col-12">
                                <div class="container-index">
                                
                                <h4 class="text-muted h4-index"> ¡Bienvenido a Carrito de Compra!<br>       Tu destino número uno para equiparte y disfrutar del deporte al aire libre.</h4>
                                <p class="p-index">En Carrito de Compra, nos apasiona la vida activa y al aire libre. Entendemos que cada aventura, desde una caminata tranquila en el parque hasta una intensa sesión de entrenamiento, requiere el equipo adecuado para sacar lo mejor de ti. Es por eso que nos dedicamos a ofrecerte una amplia variedad de productos de alta calidad, diseñados para mejorar tu experiencia y ayudarte a alcanzar tus metas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="carouselExample" class="col-lg-6 col-sm-6 col-6 p-0 carousel-slide carrou-index" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../assets/images/pelocesped.jpg" alt="Pelota en césped" class="img-fluid custom-height carrou-index-img">
                        </div>
                        <div class="carousel-item">
                        <img src="../assets/images/aire.jpg" alt="Pelota en césped" class="img-fluid custom-height carrou-index-img">
                        </div>
                    </div>
                </div>
                <?php include "../includes/footer.php"?>
            </div>
        </div>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>