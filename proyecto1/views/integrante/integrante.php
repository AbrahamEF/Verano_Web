<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Integrante.php'); //Se Modifica models/nombre.php
  include ('../../controllers/IntegranteController.php'); //se modifico 
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  

  //echo"<pre>datos:";
    //  print_r($_POST);
      //print_r($_FILES);
      //echo"</pre>";
    
  if(isset($_POST['nombre'])){
    
    $integranteC=new IntegranteController();
    $integranteC->insertaIntegrante($_POST, $_FILES);
  }
?>

<br/>
<br/>
<br/>
<p><a class="various" href="../site/inicio.php" role="button">Regresar</a></p>
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form role="form" action="" method="POST" enctype="multipart/form-data" >
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


                  <div class="form-group">
                <label for="id_status">ID Equipo:</label>
                  <select id="idequipo" name="idequipo" class="form-control">
                    <option>Selecciona</option>
                    <option>1</option>
                    <option>2</option>                    
                    <option>3</option>                    
                  </select>
              </div>

                  <br/>

                  
                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
          </div>
      </div>
      

<?php include ('../layouts/footer.php'); ?>
