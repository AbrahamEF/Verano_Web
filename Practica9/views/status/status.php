<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Status.php'); //Se Modifica models/nombre.php
  include ('../../controllers/StatusController.php'); //se modifico 
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  
  if(isset($_POST['status'])){
    
    $statusC=new StatusController();
    $statusC->insertaStatus($_POST);
  }
?>
    
    
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form role="form" action="" method="POST">
                <div class="form-group">
                <br/>
                <br/>
                <br/>
                <br/>
                    <label for="status">Status:</label>
                    <input type="text" class="form-control" id="status" name="status" placeholder="Introdusca el Status" required>
                </div>


                  <button type="submit" class="btn btn-default">Guardar</button>
                </form>
              
          </div>
      </div>

      

<?php include ('../layouts/footer.php'); ?>
