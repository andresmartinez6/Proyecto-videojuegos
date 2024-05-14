<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        include("../vistas/bootstrap.php");
    ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-DfXdz+8ADWpq6k1tbF7jkfXeGd0tyLj1KkhO4LZtP0jI+9mVMcVZzWUew6Rpt+7F" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Modificar Usuario</title>
</head>
<body>
    
    <?php
        // include("../vistas/vista_header.php");
        require_once("../bd/bd.php");
        require_once("../modelos/modelo_amigo.php");

        session_start();

        // if(!isset($_SESSION["id"])){

        //     header("Location:controlador_login.php");
        //     exit();

        // }else{

            
            if(isset($_POST["guardar"])){
                
                $amigo=new amigo();
                $amigo->modificar_amigo_id($_POST["id_amigo"],$_POST["nombre_amigo"],$_POST["apellidos_amigo"],$_POST["fecha_nacimiento_amigo"]);
                
                header("Location:controlador_menu_amigos.php");
            }else{
                include("../vistas/vista_modificar_amigo.php");
                
            }


        // }

    ?>
    
</body>
</html>