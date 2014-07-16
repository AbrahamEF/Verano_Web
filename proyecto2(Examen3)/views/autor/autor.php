<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Autor.php'); //Se Modifica models/nombre.php
  include ('../../controllers/AutorController.php'); //se modifico 
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  
  if(isset($_POST['nombre'])){
    
    $autorC=new  AutorController();
    $autorC->insertaAutor($_POST);
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
                    <label for="nombre">Nombre del Autor:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca Autor" required>
                </div>


                <div class="form-group">
                    <label for="apellidos">Apellidos del Autor:</label>
                    <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Introdusca Apellidos" required>
                </div>


                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="email" name="email" >
                </div>

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
                
          </div>
      </div>

      

<?php include ('../layouts/footer.php'); ?>
