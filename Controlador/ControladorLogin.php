<?php

class ControladorLogin {

    public function iniciarSesion(){

        if(isset($_POST["email"])){
            
            //1) GET DATOS
            $datos = [
                "email" => $_POST["email"],
                "password" => $_POST["password"]
            ];

            //2) VALIDAR Y ENVIAR AL MODELO DE USUARIOS
            if($datos["email"] != null && $datos["password"] != null){

                $password_encrypted = hash('sha256', $datos["password"]);
                $datos["password"] = $password_encrypted; //password encriptada

                $modeloUsuario = new UsuarioModelo();
                $usuario = $modeloUsuario->select($datos); //usuario

                if($usuario != false){

                    //print_r($usuario); //PINTAR POR PANTALLA

                    $_SESSION["usuarioActivo"] = $usuario;

                    return true;
                }else{

                    echo "ERROR DE INICIO.";

                    return false;
                }
            }else{

                //MENSAJE DE ERROR

                return false;
            }
        }
    }
}