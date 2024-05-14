<?php

    class usuario{

        private $bd;
        private $usuario;


        public function __construct(){
            $this->bd=conectar::conexion();
        }

        //INSERTAR NUEVO USUARIO
        public function insertar_usuario($nombre,$pass){

            $contraseña_encriptada=md5(md5(md5($pass)));

            $sentencia="INSERT INTO usuarios VALUES(null,?,?)";

            $consulta=$this->bd->prepare($sentencia);
            $consulta->bind_param("ss",$nombre,$contraseña_encriptada);
            $consulta->execute();
            $consulta->close();

        }


        //MODIFICAR USUARIO
        public function modificar_usuario($id,$nombre,$pass){

            $contraseña_encriptada=md5(md5(md5($pass)));

            $sentencia="UPDATE usuarios SET nombre = ?, pass = ?
                        WHERE id = ?";

            $consulta = $this->bd->prepare($sentencia);
            $consulta->bind_param("iss",$id, $nombre,$contraseña_encriptada);
            $consulta->execute();
            $consulta->close();

        }


        //BUSCAR USUARIOS POR NOMBRE
        public function buscar_usuario($nombre){

            $sentencia="SELECT * FROM usuarios WHERE nombre LIKE ?";

            $consulta=$this->bd->prepare($sentencia);
            $nombre_busqueda="%{$nombre}%";
            $consulta->bind_param("s",$nombre_busqueda);
            $consulta->execute();

            $resultado=$consulta->get_result();
            $usuario=$resultado->fetch_all(MYSQLI_ASSOC);

            $consulta->close();
            return $usuario;

        }


        //LISTAR USUARIOS
        public function listar_usuarios(){
            $sentencia="SELECT * 
                        FROM usuarios";
    
            $consulta=$this->bd->query($sentencia);
            $this->usuario=$consulta->fetch_all(MYSQLI_ASSOC);
            $consulta->close();            
            return $this->usuario;
                
        }

        //LOGIN USUARIO
        public function login_usuario($nombre_usuario,$pass){ 

            $pass_encriptada=md5(md5(md5($pass)));

            $sentencia="SELECT id FROM usuarios WHERE nombre_usuario=? AND contraseña=?";

            $consulta=$this->bd->prepare($sentencia);
            $consulta->bind_param("ss",$nombre_usuario,$pass_encriptada);
            $consulta->bind_result($id);
            $consulta->execute();
            $consulta->store_result();

            if($consulta->num_rows() > 0){
                
                $consulta->fetch();
                $identificador=$id;
                return $identificador;
            }else{

                $identificador=-1;
                return $identificador;
            }

            $consulta->close();

        }        

    }

?>