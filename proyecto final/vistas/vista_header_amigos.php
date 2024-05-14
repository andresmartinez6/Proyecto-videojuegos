


<header class="headerAmigos">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="d-flex justify-content-between align-items-center w-100">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a href="#"><img src="../assets/imgs/LOGO CABLETEA.png" alt="" class="img-fluid text-center w-25"></a>
                </div>

                <!-- Menú desplegable -->
                <div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>

            <!--H1 centrado-->
            <div class="text-center w-20">
                <h2 style="color:white;">Bienvenid@ <?php echo $_SESSION["nombre"];?> </h2>
            </div>

            <!-- Contenido del offcanvas -->
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"><img src="../assets/imgs/LOGO CABLETEA.png" alt="" class="img-fluid text-center w-50"></h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../controladores/controlador_inicio.php">Inicio</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Nuestros Servicios
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href="#">AMIGOS</a></li>
                                <li><a class="dropdown-item" href="#">JUEGOS</a></li>
                                <li><a class="dropdown-item" href="#">PRESTAMOS</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="d-flex mt-3" role="search">
                        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
                        <button class="btn btn-primary" type="submit" aria-disabled="true">Aceptar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="ms-auto mb-3">
            <ul class="nav">
                <li class="nav-item" style="margin-right: 1em;">
                    <a class="nav-link btn btn-primary" style="color: white; text-decoration:none;" href="../controladores/controlador_insertar_amigo.php">INSERTAR AMIGOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-primary" style="color: white; text-decoration:none;" href="../controladores/controlador_buscar_amigos.php">BUSCAR AMIGOS</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
