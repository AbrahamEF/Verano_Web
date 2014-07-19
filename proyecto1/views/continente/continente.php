<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Continente.php'); //Se Modifica models/nombre.php
  include ('../../controllers/ContinenteController.php'); //se modifico 
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  
  if(isset($_POST['nombre'])){
    
    $continenteC=new ContinenteController();
    $continenteC->insertaContinente($_POST);
  }
?>

<br/>
<br/>
<br/>
<p><a class="various"  href="../site/inicio.php" role="button">Regresar</a></p>
        <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form role="form">
                <div class="form-group">
                    <label for="nombre">Nombre de Continente:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca continente" required>
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
        </div>
                  
    </div>
    
<?php include ('../layouts/footer.php'); ?>
