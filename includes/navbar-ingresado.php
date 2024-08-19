<link rel="stylesheet" href="../assets/css/styles.css"> 
<nav class="navbar navbar-expand-lg navbar-dark Header">
    <div class="container-fluid">
        <a class="navbar-brand header-title" href="index.php">Carrito de Compra</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="../pages/compra.php"><img class="carrito" src="../assets/images/carrito.svg"></a>
                </li>
                <li class="nav-item carrito-container btn-menu manu">
                    <label class="manu" for="btn-menu"><img class="perfil manu" id="perfil" src="../assets/images/person.svg"></label>
                </li>
            </ul>
        </div>
    </div>
</nav>
<input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav class="nav-list">
                <ul class="list">
                    <div class="col md 12 pt-5"></div>
                    <li class="list__item">
                        <div class="list__button">
                            <img src="../assets/images/list.svg" alt="" class="list__img">
                            <a href="../pages/index.php" class="nav__link">Inicio</a>
                        </div>
                    </li>

                    <li class="list__item">
                        <div class="list__button">
                            <img src="../assets/images/carrito.svg" alt="" class="list__img">
                            <a href="../pages/productos.php" class="nav__link">Productos</a>
                        </div>
                    </li>
    
                    <li class="list__item">
                        <div class="list__button">
                            <img src="../assets/images/person.svg" alt="" class="list__img">
                            <a href="../pages/perfil.php" class="nav__link">Perfil</a>
                        </div>
                    </li>
    
                    <li class="list__item">
                        <div class="list__button">
                            <img src="../assets/images/file-person-fill.svg" alt="" class="list__img">
                            <a href="../pages/contacto.php" class="nav__link">Contacto</a>
                        </div>
                    </li>
    
                    <li class="list__item">
                        <div class="list__button">
                            <img src="../assets/images/box-arrow-left.svg" alt="" class="list__img">
                            <a href="../base_de_datos/cerrar_session.php" class="nav__link">Cerrar Session</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <label for="btn-menu">✖️</label>
        </div>
    </div>
