<?php

class UsuarioModelo {

    protected $tabla = "usuarios";

    protected $columnas = [
        "nombre",
        "email",
        "password",
        "token"
    ];

    /**
     * @method insert()
     * @param datos los datos del usuario
     * @return estado bool para saber si se ha creado la entrada
     */
    public function insert($datos){

        //1) CONECTAR DB
        $db = Conexion::conectar();

        //2) INSERTAR DATOS
        if($db){
            
            $sql = "INSERT INTO usuarios ( nombre, email, password, token ) VALUES (:nombre, :email, :password, :token)";

            $stmt = $db->prepare($sql);

            $stmt->bindValue(':nombre', $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindValue(':email', $datos["email"], PDO::PARAM_STR);
            $stmt->bindValue(':password', $datos["password"], PDO::PARAM_STR);
            $stmt->bindValue(':token', $datos["token"], PDO::PARAM_STR);
            
            $estado = $stmt->execute();
            
            //3) RETURN ESTADO
            if( $estado ){

                $db=null;
                return true;
            }
        }
        
        $db=null;
        return false;
    }

    /**
     * @method select()
     * @param datos los datos del formulario
     * @return usuario
     */

     public function select($datos){

        //1) CONECTAR DB
        $db = Conexion::conectar();

        //2) REALIZAR CONSULTA

        if ($db) {
            $sql = "SELECT * from usuarios WHERE email=:email AND password=:password";
            
            $stmt = $db->prepare($sql);

            $stmt->bindValue(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindValue(":password", $datos["password"], PDO::PARAM_STR);

            $stmt->execute();
            $usuario = $stmt->fetch(); //RECOGE 1 USUARIO
            //->fetchAll(); RECOGE UN LISTADO DE USUARIOS

            //3) RETURN USUARIO
            return $usuario;

        }

        $db=null;
        return false;

        
     }
}