<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Proyecto figuras impresas 3D</title>
    <!-- links estilos -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbarSupportedContent">
    <!--INICIO NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./paginas/home.php">
                <img src="../img/comic.jpg" alt="">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="./vistas/paginas/figuras.php"> Modelos 3D</a>
                    </li>


                    <?php
                    if (isset($_SESSION["usuarioActivo"]) == false) {
                        echo '
					<li class="nav-item">
						<a class="nav-link btn-danger ms-4" href="./vistas/paginas/login.php">Iniciar Sesión</a>
					</li>
                        ';
                    }
                    ?>

                    <?php

                    if (isset($_GET["paginas"])) {
                        switch ($_GET["paginas"]) {
                            case 'home':

                                include('../vistas/paginas/home.php');
                                break;

                            case 'MODELOS 3D':
                                include('../vistas/paginas/figuras.php');
                                break;

                            case 'login':
                                include('../vistas/paginas/login.php');
                                break;
                        }
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <!--FINAL NAVBAR-->

    <!--LANDING PAGE INICIO-->
    <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleSlidesOnly">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img alt="..." class="d-block w-100" src="./img/comic.jpg">
                <div class="carousel-caption">
                    <h5>Busca miles de modelos 3D a la venta!</h5>
                    <p>Encuentre el contenido 3D exacto para sus necesidades, incluyendo AR/VR, juegos, publicidad, entretenimiento e impresión 3D.</p>
                    <p><a class="btn btn-danger mt-3" href="#Bajar">Saber más</a></p>
                </div>
            </div>
        </div>
        <!-- LANDING PAGE FINAL -->
        <!-- SECCION SERVICIOS INICIO -->
        <section class="services section-padding" id="services">
            <div class="container">
                <div class="row text-center">
                    <div class="col-md-12">
                        <div class="section-header text-center pb-5">
                            <h1>Servicios 3D para empresas</h1>
                            <p>Te ofrecemos los mejores servicios<br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row" id="Bajar">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center bg-dark pb-2">
                            <div class="card-body">
                                <i class="bi bi-laptop"></i>
                                <h3 class="card-title">Implementación AR/VR</h3>
                                <p class="lead">Realidad Aumentada es un recurso tecnológico que ofrece experiencias únicas al usuario a partir de la combinación entre la dimensión virtual y la física, con la utilización de dispositivos digitales.</p><button class="btn bg-danger text-light">Saber más</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center bg-dark pb-2">
                            <div class="card-body">
                                <i class="bi bi-capslock"></i>
                                <h3 class="card-title">Calidad</h3>
                                <p class="lead">Calidad garantizada </p><button class="btn bg-danger text-light">Saber más</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center bg-dark pb-2">
                            <div class="card-body">
                                <i class="bi bi-recycle"></i>
                                <h3 class="card-title">Material Reciclado</h3>
                                <p class="lead">Reemplazamos nuestro suministro de filamento comprado por uno reciclado y de fabricación casera. Sólo tienes que reciclar unas cuantas botellas de plastico viejas </p><button class="btn bg-danger text-light">Saber más</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SECCION SERVICIOS FINAL -->
        <!--SECCION 2 / VENDE TUS MODELOS -->
        <div class="section-2">
            <div class="container-fluid">
                <div class="d-flex justify-content-end">
                    <div class="d-flex flex-column m-4">
                        <h1 class="heading-1">Vende tus modelos</h1>
                        <p class="para">Vende tus modelos 3D y encuentra proyectos freelance </p>
                    </div>
                    <div class="modelo_dragon">
                        <img src="./img/dragon.png" alt="" class="dragon">
                    </div>
                </div>
            </div>
        </div>
        <!--SECCION 2 / VENDE TUS MODELOS FINAL-->
        <!--FOOTER INICIO-->
        <footer>
            <div class="section-5 text-center">
                <h4 style="margin-top:5%;">GlobalFigure es una empresa internacional con oficinas en Europa y Estados Unidos.</h4>
                <br>
                <div class="form-inline justify-content-center">
                    <input type="text" name="Email" id="email" placeholder="Email" size="40" class="form-control px-4 py-2" style="width: 20%; position: absolute; left: 40%; ">
                    <input type="button" value="Contactar" class="btn btn-danger mt-30" style="position: absolute; bottom: 7,5%; left: 62%;">
                    <div class="logo_footer">
                        <img src="./img/Logo_11.png" width="310px" alt="">
                    </div>
                </div>


                <div class="social" style="margin:5%;">
                    <div class="d-flex flex-row justify-content-center">
                        <i class="bi bi-facebook m-2"></i>
                        <i class="bi bi-twitter m-2"></i>
                        <i class="bi bi-instagram m-2"></i>
                        <i class="bi bi-youtube m-2"></i>
                    </div>
                </div>

            </div>
        </footer>




        <!--Scripts-->
        <script src="../js/bootstrap.bundle.min.js"></script>
        <script src="./app.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>



        <!--Javascript animación página-->
        <script>
            window.sr = ScrollReveal({
                duration: 1000
            });
            sr.reveal('.site-content d-flex');
            sr.reveal('.services .card');
            sr.reveal('section-2 .d-flex');
            sr.reveal('.section-5 ');
        </script>

</body>

</html>