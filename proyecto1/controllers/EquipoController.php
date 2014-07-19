<?php
	class EquipoController{
		
		public $muestra_errores = false;
		function __construct(){
			 
		}

		public function insertaEquipo($datos,$archivos){
			/*echo"<pre>datos:";
		    print_r($_POST);
		    print_r($archivos);
		    echo"</pre>";*/

			$equipo = new Equipo();
			$equipo -> set_nombre($datos['nombre']);
			$equipo -> set_idpais($datos['idpais']);
			$equipo -> set_escudo($archivos['escudo']);

			if(count($equipo->errores)>0){
				print_r($equipo->errores);
				$muestra_errores = true;
				//die();
			}

					else{
			move_uploaded_file($archivos['escudo']['tmp_name'],
			"../images/".$archivos['escudo']['name']);
			$revista->inserta($revista->get_atributos());
		
			}
		}
		
		
	}


?>