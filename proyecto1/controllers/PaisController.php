<?php
	class PaisController{
		
		public $muestra_errores = false;
		function __construct(){
			 
		}

		public function insertaPais($datos,$archivos){
			echo"<pre>datos:";
		    print_r($_POST);
		    print_r($archivos);
		    echo"</pre>";
		    
			$pais = new Pais();
			$pais -> set_nombre($datos['nombre']);
			$pais -> set_idcontinente($datos['idcontinente']);
			$pais -> set_bandera($archivos['bandera']);



			if(count($pais->errores)>0){
				print_r($pais->errores);
				die();
			}

					else{
			move_uploaded_file($archivos['bandera']['tmp_name'],
			"../images/".$archivos['bandera']['name']);
		}


//			$revista->inserta($revista->get_atributos());
			
	}
		

}


?>