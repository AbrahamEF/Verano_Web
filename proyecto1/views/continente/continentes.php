<?php
<?php 
  session_start();
  include ('../layouts/header.php');
?>


      <div class="container">
        <div class="row">
            <form role="form">
                <div class="form-group">
                    <label for="nombre">Nombre de Continente:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Introdusca continente" required>
                </div>
                <button type="submit" class="btn btn-default">Guardar</button>
        </div>
                  
    </div>
    
<?php include ('../layouts/footer.php'); ?>
