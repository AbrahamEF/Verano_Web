<?php 
  session_start();
  include ('../layouts/header.php');
?>

<br/>
<br/>
<br/>
<p><a class="various"  href="../site/inicio.php" role="button">Regresar</a></p>
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form role="form">
                <div class="form-group">
                    <label for="Nombre">Nombre de Estadio:</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Introdusca Estadio" required>
                  </div>

                 <div class="form-group">
                <label for="idciudad">Status:</label>
                  <select id="idciudad" name="idciudad" class="form-control">
                    <option>Selecciona</option>
                    <option>1</option>
                    <option>2</option>                    
                    <option>3</option>                    
                  </select>
              </div>
                  
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
          </div>
      </div>


<?php include ('../layouts/footer.php'); ?>
