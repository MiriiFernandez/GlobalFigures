<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Proyecto figuras impresas 3D</title>
    <!-- links estilos -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../css/estilo_figuras.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

</head>

<body>
    <!--INICIO NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="./home.php">
                <img src="./img/img_figuras/banner.png" alt="">
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./figuras.php"> Modelos 3D</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn-danger ms-4" href="./login.php">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--FINAL NAVBAR-->
    <!--INICIO CARDS CON GIFS-->
    <div class="main disney-rows">
        <div class="grid">
            <div class="card-disney">
                <div class="item-border">
                    <img src="../../img/marvel2.jpg" class="item-image">
                    <img src="../../img/marvel-gif.gif" class="item-image hover-image">
                </div>
            </div>
            <div class="card-disney">
                <div class="item-border">
                    <img src="../../img/DC.jpg" class="item-image">
                    <img src="../../img/dc-comics.gif" class="item-image hover-image">
                </div>
            </div>
            <div class="card-disney">
                <div class="item-border">
                    <img src="../../img/Dragon-Ball-logo.png" class="item-image">
                    <img src="../../img/dragon-ball.gif" class="item-image hover-image">
                </div>
            </div>
            <div class="card-disney">
                <div class="item-border">
                    <img src="../../img/lordOfTheRingLogo.png" class="item-image">
                    <img src="../../img/ring.gif" class="item-image hover-image">
                </div>
            </div>
            <div class="card-disney">
                <div class="item-border">
                    <img src="../../img/harrypotter.jpg" class="item-image">
                    <img src="../../img/harry.gif" class="item-image hover-image">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!--FINAL CARDS CON GIFS-->

    <!--NAVBAR VERTICAL-->
    <div class="row">
        <div class="col-3">
            <nav class="navbar_vertical">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#Marvel2" id="Marvel"> Marvel </a>
                    </li>
                    <li class="nav-item animate__fadeInUp">
                        <a class="nav-link" href="#DC" id="DC"> DC </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="Comida"> Comida </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="Vehiculos"> Vehiculos </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="Personaje"> Militar </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="Dragon_Ball"> Dragon Ball </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!--NAVBAR VERTICAL FINAL-->
    <br>

    <!--GALERIA IMAGENES FIGURAS-->
    <!--Primera Fila-->
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 14rem;">
                <div class="inner">
                    <img src="../../img/img_figuras/batman1.jpg" class="card-img-top" alt="">
                </div>
                <div class="card-body text-center bg-light">
                    <h5 class="card-title">15,00€</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 14rem;">
                <div class="inner">
                    <img src="../../img/img_figuras/ironman1.jpg" id="Marvel2" class="card-img-top" alt="">
                </div>
                <div class="card-body text-center bg-light">
                    <h5 class="card-title">15,00€</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 14rem;">
                <div class="inner">
                    <img src="../../img/img_figuras/dragonball1.jpg" class="card-img-top" alt="">
                </div>
                <div class="card-body text-center bg-light">
                    <h5 class="card-title">15,00€</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 14rem;">
                <div class="inner">
                    <img src="../../img/img_figuras/doctor-strange-3d.jpg" class="card-img-top" alt="">
                </div>
                <div class="card-body text-center bg-light">
                    <h5 class="card-title">15,00€</h5>
                </div>
            </div>
        </div>
    </div>
    <!--Segunda Fila-->
    <div id="figuras" class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 14rem;">
                <div class="inner">
                    <img src="../../img/img_figuras/celula.jpg" class="card-img-top" alt="">
                </div>
                <div class="card-body text-center bg-light">
                    <h5 class="card-title">15,00€</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 14rem;">
                <div class="inner">
                    <img src="../../img/img_figuras/batman_3d.jpg" class="card-img-top" alt="">
                </div>
                <div class="card-body text-center bg-light">
                    <h5 class="card-title">15,00€</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 14rem;">
                <div class="inner">
                    <img src="../../img/img_figuras/joker.jpg" class="card-img-top" alt="">
                </div>
                <div class="card-body text-center bg-light">
                    <h5 class="card-title">15,00€</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 14rem">
                <div class="inner">
                    <img src="../../img/img_figuras/batman2.jpg" class="card-img-top" alt="">
                </div>
                <div class="card-body text-center bg-light">
                    <h5 class="card-title">15,00€</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Tercera Fila-->
    <div class="figuras">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="width: 14rem;">
                    <div class="inner">
                        <img src="../../img/img_figuras/harrypotter.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title">15,00€</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 14rem;">
                    <div class="inner">
                        <img src="../../img/img_figuras/deadpool.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title">15,00€</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 14rem;">
                    <div class="inner">
                        <img src="../../img/img_figuras/goku2.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title">15,00€</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 14rem">
                    <div class="inner">
                        <img src="../../img/img_figuras/spiderman.jpg" class="card-img-top" alt="">
                    </div>
                    <div class="card-body text-center bg-light">
                        <h5 class="card-title">15,00€</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--Scripts-->
    <script src="../../js/bootstrap.bundle.min.js"></script>

</body>

</html>