<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include("../vistas/bootstrap.php");
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdz+8ADWpq6k1tbF7jkfXeGd0tyLj1KkhO4LZtP0jI+9mVMcVZzWUew6Rpt+7F" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>LOGIN</title>
</head>
<body>

    <?php
        include("../vistas/vista_login.php");
        require_once("../bd/bd.php");
        require_once("../modelos/modelo_usuario.php");
                


        if(isset($_POST["aceptar"])){
            
            $contraseña_trim=trim($_POST["pass"]);
            $nombre_trim=trim($_POST["nombre"]);

            if($contraseña_trim!="" && $nombre_trim!=""){
                $usuario=new usuario();
                $id_usuario=$usuario->login_usuario($nombre_trim,$contraseña_trim);

                if($id_usuario==-1){

                    include("../vistas/vista_inicio_sesion_denegado.php");

                }else{
                    
                    include("../vistas/vista_alerta_inicio_sesion.php");

                    session_start();

                    $_SESSION["id"]=$id_usuario;
                    $_SESSION["nombre"]=$nombre_trim;
                    
                    if(isset($_POST["recuerdame"])){

                        setcookie("sesion",session_encode(),time()+7*24*60*60,"/");
                        
                    }

                    header("Location:controlador_menu_amigos.php");
                    exit(); 

                }
            } else {
                header("refresh:3; url=../controladores/controlador_login.php");
                echo "No se admiten campos en vacío";
            }
        }

        include("../vistas/js_bootstrap.php");
        include("../vistas/vista_footer.php");
        
    ?>




</body>
</html>