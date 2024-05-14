
<?php
$listar_amigos=[];
    echo"<table>";
    foreach($listar_amigos as $value){
    ?>

        <tr>
            <td><?php echo $value['id']?></td>
            <td><?php echo $value['nombre']?></td>
            <td><?php echo $value['apellidos']?></td>
            <td><?php echo $value['fecha_nacimiento']?></td>
            <td><a href="#"><button>modificar</button></a>
            <?php
            echo"
            <td><a href='../controladores/controlador_listar_amigos.php?id=$value[id]'><button>eliminar</button></a>
            ";
            ?>
        
    </tr>

    <?php
    }
    echo"</table>";

    
?>