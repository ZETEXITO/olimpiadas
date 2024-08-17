<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra - Inicio</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css"> 
</head>
<body>
    <!-- Navbar -->
    <?php include "../includes/navbar.php"?>

    <!-- Contenido Principal -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-sm-6 d-flex flex-column ">
                <br><br>
                <h1 class="al text-center">CARRITO DE COMPRA</h1>
                <br>
                <h6 class="al text-center text-muted">Bienvenido a Carrito de Compra, el lugar donde encontrar todo tipo de artículos para deportes al aire libre</h6>
                <br><br>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-6 text-center">
                                <button type="button" class="btn btn-secondary btn-custom">  <a href="login.php" class="link-1" >Iniciar Sesion</a> </button>
                            </div>
                            <br>
                            <div class="col-lg-6 col-sm-6 col-6 text-center">
                                <button type="button" class="btn btn-secondary btn-custom">Registrarse </button>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12 text-center">
                                <br>
                                <button type="button" class="btn btn-outline-dark">Continuar como invitado</button>
                            </div>
                            <div class="col-lg-12 col-sm-12 col-12">
                                <br><br>
                                <h4 class="text-muted"> ¡Bienvenido a Carrito de Compra!<br>       Tu destino número uno para equiparte y disfrutar del deporte al aire libre.</h4>
                                <p>En Carrito de Compra, nos apasiona la vida activa y al aire libre. Entendemos que cada aventura, desde una caminata tranquila en el parque hasta una intensa sesión de entrenamiento, requiere el equipo adecuado para sacar lo mejor de ti. Es por eso que nos dedicamos a ofrecerte una amplia variedad de productos de alta calidad, diseñados para mejorar tu experiencia y ayudarte a alcanzar tus metas.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="carouselExample" class="col-lg-6 col-sm-6 col-6 p-0 carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="../assets/images/pelocesped.jpg" alt="Pelota en césped" class="img-fluid custom-height">
                        </div>
                        <div class="carousel-item">
                        <img src="../assets/images/aire.jpg" alt="Pelota en césped" class="img-fluid custom-height">
                        </div>
                    </div>
                </div>
                <?php include "../includes/footer.php"?>
            </div>
        </div>
    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
