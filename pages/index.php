<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra - Inicio</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .main-content {
            max-width: 60%;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .carousel-inner img {
            height: 400px; /* Altura fija */
            object-fit: cover; /* Recorta la imagen para que encaje en el contenedor */
            border-radius: 8px;
        }
        h1 {
            font-weight: bold;
            margin-bottom: 20px;
        }
        .btn-lg {
            width: 100%;
            margin-bottom: 10px;
        }
        @media (min-width: 768px) {
            .btn-lg {
                width: auto;
                margin-right: 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <?php include '../includes/navbar.php'; ?>

    <!-- Contenido Principal -->
    <div class="main-content">
        <!-- Carrusel -->
        <div id="carouselExample" class="carousel slide mb-4" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../assets/images/airelibreweb.jpg" class="d-block w-100" alt="Deporte al aire libre 1">
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
        <div class="text-center">
            <h1>Bienvenidos a Carrito de Compra</h1>
            <p>Compra todo lo que necesitas para hacer deporte al aire libre.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <a href="login.php" class="btn btn-primary btn-lg">Iniciar Sesión</a>
                <a href="register.php" class="btn btn-outline-primary btn-lg">Registrarse</a>
                <a href="invitado.php" class="btn btn-secondary btn-lg">Entrar como Invitado</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../includes/footer.php'; ?>

    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
</body>
</html>

