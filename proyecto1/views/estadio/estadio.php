<?php 
  session_start();
  include ('../layouts/header.php');
?>


      <div class="container">
        <div class="row">
            <form role="form">
                <div class="form-group">
                    <label for="Nombre">Nombre de Estadio:</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introdusca Estadio" required>
                  </div>

                  <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="idciudad" name="idciudad">
                      ID Ciudad
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dropdown link</a></li>
                        <li><a href="#">Dropdown link</a></li>
                    </ul>
                  </div>
                  
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
          </div>
      </div>


<?php include ('../layouts/footer.php'); ?>
