



<form method="POST" action="../controladores/controlador_insertar_amigo.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">NOMBRE</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="nombre_amigo_insertar">
  </div>
  <div class="mb-3">
    <label for="exampleInputApellidos" class="form-label">APELLIDOS</label>
    <input type="text" class="form-control" id="exampleInputApellidos" name="apellidos_amigo_insertar">
  </div>
  <div class="mb-3">
    <label for="exampleInputFecha" class="form-label">FECHA NACIMIENTO</label>
    <input type="date" class="form-control" id="exampleInputFecha" name="fecha_amigo_insertar">
  </div>
  <!-- <div class="mb-3">
    <select name="amigos_insertar_amigo" id="desplegable">
            <?php
                // foreach($usuarios as $usuario){
                //     echo"<option value='$usuario[id]'>$usuario[nombre_usuario]</option>";
                // }
            ?>
    </select>
  </div> -->
  <button type="submit" class="btn btn-primary" name="insertar_amigo">INSERTAR</button>
</form>


