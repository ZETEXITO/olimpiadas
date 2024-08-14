<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra - Inicio</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
</head>
<body>

    <!-- Carrusel -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/airelibreweb.jpg" class="d-block w-30" alt="Deporte al aire libre 1">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/carrusel2.jpg" class="d-block w-100" alt="Deporte al aire libre 2">
            </div>
            <div class="carousel-item">
                <img src="../assets/images/carrusel3.jpg" class="d-block w-100" alt="Deporte al aire libre 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <!-- Opciones de acceso -->
    <div class="container text-center mt-5">
        <h1>Bienvenidos a Carrito de Compra</h1>
        <p>Compra todo lo que necesitas para hacer deporte al aire libre.</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <a href="login.php" class="btn btn-primary btn-lg me-md-2">Iniciar Sesión</a>
            <a href="register.php" class="btn btn-outline-primary btn-lg me-md-2">Registrarse</a>
            <a href="invitado.php" class="btn btn-secondary btn-lg">Entrar como Invitado</a>
        </div>
    </div>

    

    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>
