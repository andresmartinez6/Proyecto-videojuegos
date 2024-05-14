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
    <title>Buscar Amigos</title>
</head>
<body>
    
    <?php
        session_start();

        if(isset($_POST["buscar_amigo"])) {
            $nombre_trim = trim($_POST["nombre_amigo"]);

            if($nombre_trim=!"") {
                include("../modelos/modelo_amigo.php");

                $amigo = new amigo();
                $amigos = $amigo->buscar_amigo_nombre($nombre_trim, $_SESSION["id"]);

                include("../vistas/vista_mostrar_busqueda_amigo.php");
            }
        }

        include("../vistas/vista_header_amigos.php");
        include("../vistas/vista_buscar_amigos.php");
        include("../vistas/vista_footer.php");
        include("../vistas/js_bootstrap.php");
    ?>

</body>
</html>