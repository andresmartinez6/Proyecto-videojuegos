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
    <title>AMIGOS</title>

    <style>
        .nav-link.btn-primary:hover {
            color: white;
        }
    </style>

</head>
<body>
    
    <?php
        require_once("../bd/bd.php");
        require_once("../modelos/modelo_usuario.php");
        require_once("../modelos/modelo_amigo.php");


            session_start();

            include("../vistas/vista_header_amigos.php");

            if(!isset($_SESSION["id"])){

                header("Location:controlador_login.php");
                exit();

            }else{
                
                $amigo=new amigo();
                $amigos=$amigo->listar_amigos_id_usuario($_SESSION["id"]);

                include("../vistas/vista_tabla_menu_amigos.php");

            }

            include("../vistas/js_bootstrap.php");
            include("../vistas/vista_footer.php");
            
    ?>

</body>
</html>