
<div class="container" style="padding-top: 5em; margin-bottom:9em;">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center" style="margin-bottom:2em;">BUSCAR AMIGO</h1>
            <form action="../controladores/controlador_mostrar_busqueda_amigo.php" method="POST">
                <div class="text-center" style="margin-bottom:3em;">
                    <input type="text" class="form-control" id="nombre" name="nombre_amigo">
                    <div id="AyudaBucarAmigo" class="form-text">Ingrese el Nombre del amigo o Apellidos que desea buscar.</div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="padding:10px 25px 10px 25px;" name="buscar_amigo">
                        Buscar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

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
            <?php foreach ($amigos as $amigo) : ?>
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
                        <a href="../controladores/controlador_modificar_amigo.php?id=<?php echo $amigo['id']; ?>"><button>MODIFICAR</button></a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>