<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Revista.php'); //Se Modifica models/nombre.php
  include ('../../controllers/RevistaController.php'); //se modifico 
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  
  if(isset($_POST['nombre'])){
    
    $revistaC=new RevistaController();
    $revistaC->insertaRevista($_POST);
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
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
              </div>
              <div class="form-group">
                <label for="portada">Portada:</label>
                <input type="file" class="form-control" name="portada" id="portada">
              </div>

              <div class="form-group">
                <div class='input-group date' id='datetimepicker5' data-date-format="MM/DD/YYYY">
                  <label for="fecha">Fecha</label> 
                  <label for="fecha_creacion">Fecha de Creaci&oacute;n</label> 
                    <input type='text' class="form-control" id="fecha" name="fecha" placeholder="Fecha" required />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>  

                  


              <div class="form-group">
                <label for="volumen">Volumen:</label>
                <input type="text" class="form-control" id="volumen" name="volumen" placeholder="Volumen">
              </div>

              <div class="form-group">
                <label for="titulo">T&iacute;tulo:</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="T&iacute;tulo">
              </div>

              <div class="form-group">
                <label for="subtitulo">Subt&iacute;tulo:</label>
                <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Subt&iacute;tulo">
              </div>

              <div class="form-group">
                <label for="numero">Numero:</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Numero">
              </div>

              <div class="form-group">
                <label for="clave">Clave:</label>
                <input type="text" class="form-control" id="clave" name="clave" placeholder="Clave">
              </div>                          
                    
              <div class="form-group">
                <label for="directorio">Directorio:</label>
                <input type="text" class="form-control" name="directorio" id="directorio" placeholder="Directorio">
              </div>
              
               <div class="form-group">
                <label for="editorial">Editorial:</label>
                <input type="text" class="form-control" name="editorial" id="editorial" placeholder="Editorial">
              </div>

               <div class="form-group">
                <label for="id_status">Status:</label>
                  <select id="id_status" name="id_status" class="form-control">
                    <option>Selecciona</option>
                    <option>2</option>
                    <option>5</option>                    
                    <option>6</option>                    
                  </select>
              </div>

              <button type="submit" class="btn btn-default">Enviar</button>
            </form></div> 
          
        </div>
    </div>

      

<?php include ('../layouts/footer.php'); ?>
