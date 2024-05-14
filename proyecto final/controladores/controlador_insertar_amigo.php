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
    <title>INSERTAR AMIGO</title>
</head>
<body>
    
    <?php
        require_once("../bd/bd.php");
        require_once("../modelos/modelo_usuario.php");
        require_once("../modelos/modelo_amigo.php");

        
            
    
            if(isset($_POST["insertar_amigo"])){

                session_start();
                $amigo=new amigo();
                $amigo->insertar_amigo($_SESSION["id"],$_POST["nombre_amigo_insertar"],$_POST["apellidos_amigo_insertar"],$_POST["fecha_amigo_insertar"]);
                
                header("Location:controlador_menu_amigos.php");

            }else{
                
                // $usuario=new usuario();
                // $usuarios=$usuario->listar_usuarios();
        
                include("../vistas/vista_insertar_amigo.php");
        
            }
        

    ?>

</body>
</html>