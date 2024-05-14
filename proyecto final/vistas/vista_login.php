

<div id="logo" class="d-flex justify-content-center">
  <img src="../assets/imgs/LOGO CABLETEA.png" class="mb-3 w-25" style="display:block; margin:auto;"></img>
</div>

<div id="login" class="d-flex justify-content-center">
  <form action="../controladores/controlador_login.php" method="POST" class="text-center">
    <div class="mb-3">
      <label for="exampleInputName1" class="form-label">NOMBRE</label>
      <div id="nomusuario" class="form-text">Introduce tu nombre de usuario</div>
      <input type="text" class="form-control" name="nombre">
    </div>

    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">CONTRASEÑA</label>
      <div id="passusuario" class="form-text">Introduce tu contraseña.</div>
      <input type="password" class="form-control" name="pass">
    </div>

    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" name="recuerdame">
      <label class="form-check-label" for="exampleCheck1">RECUERDAME</label>
    </div>

    <button type="submit" id="botonlogin" class="btn btn-success mb-5 mt-5" name="aceptar" style="background-color: #008489;">Aceptar</button>
  </form>
</div>

