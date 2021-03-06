<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página Log in</title>
    <!--CSS Link-->
    <link rel="stylesheet" href="../../css/login.css" />
    <!--Agregar link JQuery para enseñar/esconder Form -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div id="loader"></div>

    <div class="container">
        <div class="form">
            <div class="btn">
                <button class="registrarseBtn">Registrate</button>
                <button class="LoginBtn">Inicia Sesión</button>
            </div>
            <form action="" class="iniciaSesion">
                <div class="formGroup">
                    <input type="text" name="Nombre" id="nombre" placeholder="Nombre Usuario" autocomplete="off" />
                </div>
                <div class="formGroup">
                    <input type="email" name="Email" id="Email" placeholder="Email" autocomplete="off" />
                </div>
                <div class="formGroup">
                    <input type="password" name="contraseña" id="contraseña" placeholder="contraseña" autocomplete="off" />
                </div>
                <div class="formGroup">
                    <input type="confirmaConstraseña" name="confirmaciónContraseña" id="confirmaConstraseña" placeholder="Confirmar Contraseña" autocomplete="off" />
                </div>
                <!--Check Box-->
                <div class="checkBox">
                    <input type="checkbox" name="checkbox" id="checkbox" />
                    <span class="texto">
                        ESTOY DE ACUERDO CON LOS TERMINOS Y CONDICIONES</span>
                </div>
                <div class="formGroup">
                    <a href="../../index.php" class="btn2">Unirme</a>
                </div>
            </form>

            <!--Creación parte Iniciar Sesión-->
            <form action="" class="LogIn">
                <div class="formGroup">
                    <input type="email" name="Email" id="Email ID" placeholder="Email" autocomplete="off" />
                </div>
                <div class="formGroup">
                    <input type="password" name="contraseña" id="contraseña" placeholder="contraseña" autocomplete="off" />
                </div>
                <!--Check Box-->
                <div class="checkBox">
                    <input type="checkbox" name="checkbox" id="checkbox" />
                    <span class="texto">
                        MANTENDEME INFORMADO DE NUEVOS PRODUCTOS POR EMAIL</span>
                </div>
                <div class="formGroup">
                    <a href="../../index.php" class="btn2">Iniciar Sesión</a>
                </div>
            </form>
        </div>
    </div>

    <!--Link javscript-->
    <script src="../../js/script.js"></script>
    <?php
    $ctrRegistro = new ControladorRegistro();
    $ctrRegistro->registrarse();

    if ($inicio) {
        echo '  <script>
                    window.location = "./home";
                </script>';
    }

    ?>


</body>

</html>