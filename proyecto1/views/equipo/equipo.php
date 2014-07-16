<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Equipo.php'); //Se Modifica models/nombre.php
  include ('../../controllers/EquipoController.php'); //se modifico 
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  
  if(isset($_POST['nombre'])){
    
    $equipoC=new EquipoController();
    $equipoC->insertaEquipo($_POST);
  }
?>
    
    
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form role="form" action="" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre de Equipo:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca Equipo" required>
                </div>


                  <div class="form-group">
                    <label for="idpais">Pais</label>
                    <select class="form-control" id="ipais" name="idpais">
                      <option>Selecciona</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                    </select>
                  </div>



                  <div class="form-group">
                    <label for="escudo">Escudo</label>
                    <input type="file" id="escudo" name="escudo" required>
                  </div>

                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
              
          </div>
      </div>

      

<?php include ('../layouts/footer.php'); ?>
