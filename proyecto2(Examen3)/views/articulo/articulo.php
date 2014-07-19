<?php 
  
  include ('../../libs/adodb5/adodb-pager.inc.php');
  include ('../../libs/adodb5/adodb.inc.php');
  include ('../../models/Conexion.php');
  include ('../../models/Modelo.php');
  include ('../../models/Articulo.php'); //Se Modifica models/nombre.php
  include ('../../controllers/ArticuloController.php'); //se modifico 
  include ('../../libs/Er.php');
  include ('../layouts/header.php');
  
  if(isset($_POST['nombre'])){
    
    $articuloC=new ArticuloController();
    $articuloC->insertaArticulo($_POST, $_FILES);
  }
?>
    
    
      <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form role="form" action="" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                <br/>
                <br/>
                <br/>
                <br/>
                    <label for="nombre">Nombre de Articulo:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca Articulo" required>
                </div>


                <div class="form-group">
                    <label for="resumen">Resumen del Articulo:</label>
                    <textarea type="text" class="form-control" id="resumen" name="resumen" placeholder="Introdusca Resumen" required></textarea>
                </div>

                <div class="form-group">
                    <label for="abstract">Abstract:</label>
                    <input type="text" class="form-control" id="abstract" name="abstract" placeholder="Abstract" required>
                </div>


              <div class="form-group">
                <label for="introduccion">Instroduci&oacute;n:</label>
                <textarea type="text" class="form-control" id="introduccion" name="introduccion" placeholder="Intropducci&oacute;n" required></textarea>
              </div>


              <div class="form-group">
                <label for="metodologia">Metodologia:</label>
                <textarea type="text" class="form-control" id="metodologia" name="metodologia" placeholder="Metodologia" required></textarea>
              </div>


              <div class="form-group">
                <label for="contenido">Contenido:</label>
                <textarea type="text" class="form-control" id="contenido" name="contenido" placeholder="Contenido" required></textarea>
              </div>                          


              <div class="form-group">
                <div class='input-group date' id='datetimepicker5' data-date-format="YYYY/MM/DD">
                  <label for="fecha_creacion">Fecha de Creaci&oacute;n</label> 
                    <input type='text' class="form-control" id="fecha_creacion" name="fecha_creacion" placeholder="Fecha" required />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
              </div>  

                  
                          
              <div class="form-group">
                <label for="archivo_pdf">PDF:</label>
                 <input type="file" class="form-control" name="archivo_pdf" id="archivo_pdf" required>
              </div>
              
              <div class="form-group">
                <label for="id_status">ID Status:</label>
                  <select id="id_status" name="id_status" class="form-control" required>
                    <option>Selecciona</option>
                    <option>2</option>
                    <option>5</option>                    
                    <option>6</option>
                  </select>
              </div>


              <div class="form-group">
                <label for="conclusiones">Conclusiones:</label>
                <textarea type="text" class="form-control" id="conclusiones" name="conclusiones" placeholder="Conclusiones" required></textarea>
              </div>


              <div class="form-group">
                <label for="agradecimientos">Agradecimientos:</label>
                <textarea type="text" class="form-control" id="agradecimientos" name="agradecimientos" placeholder="Agradecimientos" required></textarea>
              </div>


              <div class="form-group">
                <label for="referencias">Referencias:</label>
                <textarea type="text" class="form-control" id="referencias" name="referencias" placeholder="Referencias" required></textarea>
              </div>

              <button type="submit" class="btn btn-default">Enviar</button>
            </form>
          
          </div>
      </div>

      

<?php include ('../layouts/footer.php'); ?>
