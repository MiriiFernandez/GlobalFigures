<?php

class ControladorLogin
{

    public function iniciarSesion()
    {

        if (isset($_POST["Email"])) {

            //1) GET DATOS
            $datos = [
                "Email" => $_POST["Email"],
                "contraseña" => $_POST["contraseña"]
            ];

            //2) VALIDAR Y ENVIAR AL MODELO DE USUARIOS
            if ($datos["Email"] != null && $datos["contraseña"] != null) {

                $password_encrypted = hash('sha256', $datos["contraseña"]);
                $datos["contraseña"] = $password_encrypted; //password encriptada

                $modeloUsuario = new UsuarioModelo();
                $usuario = $modeloUsuario->select($datos); //usuario

                if ($usuario != false) {

                    //print_r($usuario); //PINTAR POR PANTALLA

                    $_SESSION["usuarioActivo"] = $usuario;

                    return true;
                } else {

                    echo "ERROR DE INICIO.";

                    return false;
                }
            } else {

                //MENSAJE DE ERROR

                return false;
            }
        }
    }
}
