<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compra</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../assets/css/stylesloginregister.css">
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <?php include "../includes/navbar-login.php"?>
    <div class="container bg-dark text-light p-4 rounded shadow" style="max-width: 400px;">
        <div class="text-center mb-4">
            <img src="../assets/images/carrito.png" alt="Carrito" width="72" height="72">
            <h1 class="h3 mb-4">Iniciar sesión</h1>
        </div>
        <form action="../base_de_datos/chequeo_usuario.php" method = "POST">
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control bg-secondary text-light border-secondary" id="correo" name="correo" placeholder="Ingresa tu correo" required>
            </div>
            <div class="mb-4">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control bg-secondary text-light border-secondary" id="contraseña" name="contraseña" placeholder="Ingresa tu contraseña" required>
            </div>
            <button type="submit" class="btn btn-dark w-100 mb-3">Ingresar</button>
            <div class="text-center">
                <a href="register.php" class="text-light">¿No tienes cuenta? ¡Regístrate aquí!</a>
            </div>
        </form>
    </div>
    <script src="../bootstrap/js/bootstrap.bundle.min.js"></script> 
</body>
</html>
