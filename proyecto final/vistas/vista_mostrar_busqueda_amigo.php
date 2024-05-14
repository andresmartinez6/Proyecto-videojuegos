


<div class="container text-center" style="margin-top:5em; margin-bottom:6em;">
    <table class="table table-sm table-dark table-striped">
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>APELLIDOS</th>
                <th>FECHA NACIMIENTO</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($amigos as $amigo): ?>
                <tr>
                    <td>
                        <?php echo $amigo["nombre"]; ?>
                    </td>
                    <td>
                        <?php echo $amigo["apellidos"]; ?>
                    </td>
                    <td>
                        <?php echo $amigo["fecha_nacimiento"]; ?>
                    </td>
                    <td>
                        <a href="../controladores/controlador_mostrar_busqueda_amigo.php?id=<?php echo $amigo['id']; ?>"><button>MODIFICAR</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>