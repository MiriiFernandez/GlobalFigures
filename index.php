<?php

    //AQUI SE EJECUTA TODA LA APP

    #require_once() -> requiere un documento una unica vez.
    require_once('./modelo/Conexion.php');
    require_once('./modelo/UsuarioModelo.php');
    
    require_once('./controlador/ControladorPlantilla.php');
    require_once('./controlador/ControladorRegistro.php');
    require_once('./controlador/ControladorLogin.php');
    

    //1) MANERA ESTATICA
    ControladorPlantilla::traerPlantilla();

    //2) MANERA CONVENCIONAL
    /*
        $ctrPlantilla = new ControladorPlantilla();
        $ctrPlantilla->traerPlantilla(); //"->" es lo mismo que "."
    */