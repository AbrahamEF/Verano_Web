<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Pais.php'); //Se Modifica models/nombre.php
  include ('../../controllers/PaisController.php'); //se modifico 
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  

  //echo"<pre>datos:";
    //  print_r($_POST);
      //print_r($_FILES);
      //echo"</pre>";
    
  if(isset($_POST['nombre'])){
    
    $paisC=new PaisController();
    $paisC->insertaPais($_POST, $_FILES);
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
                    <label for="nombre">Nombre de Pais:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca Nombre" required>
                  </div>

            <div class="form-group">
                <label for="id_status">ID Continente:</label>
                  <select id="idcontinente" name="idcontinente" class="form-control">
                    <option>Selecciona</option>
                    <option>1</option>
                    <option>2</option>                    
                    <option>3</option>
                  </select>
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
