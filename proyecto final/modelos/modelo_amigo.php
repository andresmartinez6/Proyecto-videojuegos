<?php

    class amigo{

        private $bd;
        private $amigo;

        public function __construct(){
            $this->bd=conectar::conexion();
        }

        //INSERTAR NUEVO AMIGO
        public function insertar_amigo($dueño,$nombre,$apellidos,$fecha_nacimiento){

            $sentencia="INSERT INTO amigos(id,dueño,nombre,apellidos,fecha_nacimiento) VALUES (NULL,?,?,?,?)";

            $consulta=$this->bd->prepare($sentencia);
            $consulta->bind_param("isss",$dueño,$nombre,$apellidos,$fecha_nacimiento);
            $consulta->execute();
            $consulta->close();

            return $consulta;
        }

        //LISTAR TODOS LOS AMIGOS
        public function listar_amigos(){

            $sentencia="SELECT * FROM amigos WHERE id>=0";

            $consulta=$this->bd->query($sentencia);
            $amigos=$consulta->fetch_all(MYSQLI_ASSOC);
            $consulta->close();

            return $amigos;
        }

        //BUSCAR AMIGOS POR NOMBRE Y APELLIDOS
        public function buscar_amigo_nombre($nombre, $id){

            $sentencia="SELECT * FROM amigos WHERE nombre LIKE ? AND dueño=?";

            $consulta=$this->bd->prepare($sentencia);
            $nombre_busqueda="%{$nombre}%";
            $consulta->bind_param("si",$nombre_busqueda,$id);
            $consulta->execute();
            $resultado=$consulta->get_result();

            if($resultado->num_rows > 0){
                $amigos=array();

                while($fila=$resultado->fetch_assoc()) {
                    $amigos[]=$fila;
                }

                return $amigos;
            }else{

                return -1;
            }

            $consulta->close();
        }


        //BORRAR AMIGO
        public function borrar_amigo($id){

            $sentencia="DELETE * FROM amigos WHERE id=?";

            $consulta=$this->bd->prepare($sentencia);
            $consulta->bind_param("i",$id);
            $consulta->execute();
            $consulta->close();

            return $consulta;
        }


        //LISTAR AMIGOS POR ID DE USUARIO
        public function listar_amigos_id_usuario($id){

            $sentencia="SELECT amigos.id,amigos.nombre,amigos.apellidos,amigos.fecha_nacimiento
                        FROM amigos,usuarios
                        WHERE usuarios.id=amigos.dueño AND amigos.dueño=?";

            $consulta=$this->bd->prepare($sentencia);
            $consulta->bind_param("i",$id);
            $consulta->bind_result($id,$nombre,$apellidos,$fecha_nacimiento);
            $consulta->execute();

            $consulta->store_result();

            if ($consulta->num_rows()>0){

                $i=0;
                while($consulta->fetch()){

                    $this->amigo[$i]['id']=$id;
                    $this->amigo[$i]['nombre']=$nombre;
                    $this->amigo[$i]['apellidos']=$apellidos;
                    $this->amigo[$i]['fecha_nacimiento']=$fecha_nacimiento;

                    $i++;

                }
                return $this->amigo;

            }else{
                return -1;

            }
            $consulta->close();

        }


        //MODIFICAR UN AMIGO POR ID
        public function modificar_amigo_id($id,$nombre,$apellidos,$fecha){

            $sentencia="UPDATE amigos SET amigos.nombre=?,amigos.apellidos=?,amigos.fecha_nacimiento=? WHERE amigos.id=?";

            $consulta=$this->bd->prepare($sentencia);
            $consulta->bind_param("sssi",$nombre,$apellidos,$fecha,$id);
            $consulta->execute();

            $consulta->close();

        }
        

    }

?>