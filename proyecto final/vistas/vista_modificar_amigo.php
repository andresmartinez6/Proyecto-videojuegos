
<?php
    echo"
    <form method='POST' action='../controladores/controlador_modificar_amigo.php'>
    <div class='mb-3'>
        <label for='exampleInputId' class='form-label'>Id</label>
        <input type='text' class='form-control' id='exampleInputId' name='id_amigo' value='$_GET[id]' readonly>
      </div>
    <div class='mb-3'>
        <label for='exampleInputNombre' class='form-label'>NOMBRE</label>
        <input type='text' class='form-control' id='exampleInputNombre' name='nombre_amigo' aria-describedby='emailHelp'>
      </div>
      <div class='mb-3'>
        <label for='exampleInputApellidos' class='form-label'>APELLIDOS</label>
        <input type='text' class='form-control' id='exampleInputApellidos' name='apellidos_amigo'>
      </div>
      <div class='mb-3'>
        <label for='exampleInputFecha' class='form-label'>FECHA NACIMIENTO</label>
        <input type='date' class='form-control' id='exampleInputFecha' name='fecha_nacimiento_amigo'>
      </div>
      <button type='submit' class='btn btn-primary' name='guardar'>Guardar</button>
    </form>
    ";
?>