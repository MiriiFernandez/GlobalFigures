<?php

class ControladorRegistro
{

    /**
     * @method registrarse()
     * Recoge la informacion del formulario de registro y lo almacena en la bd.
     * @return response respuesta (verdadero: se ha guardado) (falso: no se guarda)
     */

    public function registrarse()
    {
        if (isset($_POST["nombre"])) {
            //1) GET DATOS

            //ARRAY

            // $nombre_array = [ "indice" => "valor" ]; 

            //$nombre_array = [];
            //$nombre_array["indice"] = "valor";


            $datos = [
                "nombre" => $_POST["nombre"],
                "Email" => $_POST["Email"],
                "contraseña" => $_POST["contraseña"],
                "confirmaConstraseña" => $_POST["confirmaConstraseña"]
            ]; //datos formulario

            $datos_bd = []; //enviamos esto a bd.

            //2) VALIDAR DATOS

            //password
            if ($datos["contraseña"] == $datos["confirmaConstraseña"] && $datos["password"] != null) {

                //valido
                $password_encrypted = hash('sha256', $datos["contraseña"]);
                $datos_bd["contraseña"] = $password_encrypted;
            } else {
                //error
                echo "ERROR PASSWORD";
            }

            //nombre
            if (isset($datos["nombre"]) && strlen($datos["nombre"]) <= 30 && $datos["nombre"] != null) { //strlen -> devuelve la longitud de un string
                //valido
                $datos_bd["nombre"] = $datos["nombre"];
            } else {
                //error
                echo "ERROR NOMBRE";
            }

            //email
            if (
                isset($datos["Email"]) &&
                $datos["Email"] != null &&
                strlen($datos["Email"]) <= 100 &&
                preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i", $datos["email"])
            ) {

                //valido
                $datos_bd["Email"] = $datos["Email"];
            } else {

                //error
                echo "ERROR EMAIL";
            }

            if (isset($datos_bd["Email"])) {
                $datos_bd["token"] = md5($datos_bd["Email"] . '+' . date('d-m-Y H:i:s')); //token unico.
            }


            //3) GUARDAR DATOS
            $usuario = new UsuarioModelo();
            $estado = $usuario->insert($datos_bd); //estado
            //4) RETURN RESPONSE
            if ($estado) {

                echo "Todo ok";
            } else {
                echo "Todo mal :(";
            }
        }

        return null;
    }
}
