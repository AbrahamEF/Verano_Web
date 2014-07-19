<?php 
  session_start();
  include ('../layouts/header.php');
?>
<br/>
<br/>
<br/>
<p><a class="various" href="../site/inicio.php" role="button">Regresar</a></p>

        <div class="row">        
          <div class="col-md-4 col-md-offset-4">
            <form role="form">
                <div class="form-group">
                    <label for="nombre">Nombre de Posición:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca Posición" required>
                  </div>


                  <div class="form-group">
                    <label for="abreviatura">Abreviatura de Posición:</label>
                    <input type="text" class="form-control" id="abreviatura" name="abreviatura" placeholder="Introdusca Abreviatura" required>
                  </div>
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
          </div>
      </div>


<?php include ('../layouts/footer.php'); ?>
