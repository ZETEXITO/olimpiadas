<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../assets/css/styles.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compra - Ingreso</title>
</head>
<body class="bodylogin">
   
    <div class="container d-flex flex-column align-items-center justify-content-center vh-100 text-center">
        <div class="text-center">
            <img class="w-25 h-auto mb-4" src="../assets/images/carrito.png" alt="Carrito">
            <h1 class="text-white mb-4">Iniciar sesión</h1>
            <form class="form-container"action="">
                <div class="form-group mb-3">
                    <label for="correo">Correo</label>
                    <input type="text" class="form-control" id="correo" name="correo">
                </div>
                <div class="form-group mb-4">
                    <label for="contraseña">Contraseña</label>
                    <input type="password" class="form-control" id="contraseña" name="contraseña">
                </div>
                <button type="submit" class="btn btn-primary w-100 mb-3">Ingresar</button>
                 <!-- poner despues bien el enlace-->
                  <div class="bg-light.bg-gradient">
                <a href="registro.php"> <h4 class="p-2 bg-dark.bg-gradient">¿No tienes cuenta? ¡Registrate aqui!</h4></a>
                  </div> 
            </form>
        </div>
    </div>
</body>
</html>
