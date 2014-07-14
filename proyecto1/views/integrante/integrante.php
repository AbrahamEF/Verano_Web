<?php 
  session_start();
  include ('../layouts/header.php');
?>

    <div class="container">
        <div class="row">
            <form role="form">
                <div class="form-group">
                    <label for="nombre">Nombre de Integrante:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca Nombre" required>
                  </div>


                  <div class="form-group">
                    <label for="apellido">Apellidos:</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Introdusca Apellidos" required>
                  </div>

                  <div class="form-group">
                    <label for="peso">Peso:</label>
                    <input type="text" class="form-control" id="peso" name="peso" placeholder="Introdusca el Peso" required>
                  </div>

                  <div class="form-group">
                    <label for="estatura">Estatura:</label>
                    <input type="text" class="form-control" id="estatura" name="estatura" placeholder="Introdusca la Estatura" required>
                  </div>

                  <div class="form-group">
                    <label for="foto">Foto</label>
                    <input type="file" id="foto" name="foto" required>
                  </div>

                  <div class="form-group">
                    <label for="Edad">Edad:</label>
                    <input type="text" class="form-control" id="Edad" name="Edad" placeholder="Introdusca la Edad" required>
                  </div>


                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="idequipo" name="idequipo">
                      ID Equipo
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="#">Dropdown link</a></li>
                      <li><a href="#">Dropdown link</a></li>
                    </ul>
                  </div>

                  <br/>

                  <div class="form-group">
                    <label for="bandera">Bandera</label>
                    <input type="file" id="bandera" name="bandera" required>

                    <p class="help-block">No dejar en blanco ningun campo</p>
                  </div>
                  <div class="checkbox">
                    <label>
                      <input type="checkbox"> Check me out
                    </label>
                  </div>
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
          </div>
      </div>
      

<?php include ('../layouts/footer.php'); ?>
