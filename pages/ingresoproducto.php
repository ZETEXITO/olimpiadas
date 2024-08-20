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

?>
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
        if (isset($_SESSION["registrado"])){
            include "../includes/navbar-ingresado.php";
        }else{
            include "../includes/navbar.php";
        }
    ?>
    <div class="col-lg-12 d-flex justify-content-center align-items-center vh-100">
        <div class="container bg-dark text-light p-4 rounded shadow" style="max-width: 400px;">
            <div class="text-center mb-4">
                <img src="../assets/images/carrito.png" alt="Carrito" width="72" height="72">
                <h1 class="h3 mb-4">Ingreso de Productos</h1>
            </div>
            <form action="../base_de_datos/subir_productos.php" method = "POST">
                <div class="mb-3">
                    <label for="Nombre_Producto" class="form-label">Ingrese el nombre del producto</label>
                    <input type="text" class="form-control bg-secondary text-light border-secondary" id="Nombre_Producto" name="Nombre_Producto" placeholder="Ingresa el nombre del producto" required>
                </div>
                <div class="mb-3">
                    <label for="Desc_Producto" class="form-label">Ingrese descripción sobre el producto</label>
                    <textarea type="text" class="form-control bg-secondary text-light border-secondary" id="Desc_Producto" name="Desc_Producto" placeholder="Ingresa la descripción de su producto" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="Genero_Producto" class="form-label">Ingrese descripción sobre el producto</label>
                        <select name="Genero_Producto" class="form-control bg-secondary text-light border-secondary" id="Genero_Producto">
                            <option class="option_genero" value=".">Ingrese el genero</option>
                            <option class="option_genero" value="uniforme">Uniforme</option>
                            <option class="option_genero" value="pelotas">Pelotas</option>
                            <option class="option_genero" value="botines">Botines</option>
                            <option class="option_genero" value="soporte_prote">Soporte y proteccion</option>
                            <option class="option_genero" value="lo_nuevo">Lo nuevo</option>
                            <option class="option_genero" value="pant_calzas">Pantalones o calzas</option>
                        </select>
                </div>
                <div class="mb-4">
                    <label for="Valor_Producto" class="form-label">Ingrese el valór del producto</label>
                    <input type="number" class="form-control bg-secondary text-light border-secondary" id="Valor_Producto" name="Valor_Producto" placeholder="Ingresa el valór de su producto" required>
                </div>
                <div class="mb-3">
                    <label for="Img_Producto" class="form-label">Ingrese descripción sobre el producto</label>
                    <input type="file" class="form-control bg-secondary text-light border-secondary" id="Img_Producto" name="Img_Producto" accept="image/*" onchange="previewImage(event, '#imgPreview')">
                </div>
                <div class="mb-3 text-center">
                    <img id="imgPreview">
                </div>
                <button type="submit" name="Listo"class="btn btn-dark w-100 mb-3">Ingresar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>