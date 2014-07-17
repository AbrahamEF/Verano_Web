<?php 
  session_start();
  include ('../layouts/header.php');
?>


      <div class="jumbotron">
        <h1>Practica 9</h1>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>  
            <ul class="nav nav-pills">
              <p><li><a class="various" data-fancybox-type="iframe" href="../autor/autor.php" role="button">Autor </a></li>        
              <li><a class="various" data-fancybox-type="iframe" href="../articulo/articulo.php" role="button"> Articulo </a></li>
              <li><a class="various" data-fancybox-type="iframe" href="../status/status.php" role="button"> Status </a></li>
              <li><a class="various" data-fancybox-type="iframe" href="../revista/revista.php" role="button"> Revista </a></li></p>
            </div></ul>



      
<?php include ('../layouts/footer.php'); ?>
