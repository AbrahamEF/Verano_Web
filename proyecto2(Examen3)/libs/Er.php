<?php

class Er {
    
	public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}

	
	public function valida_password_strenght($password) 
	{ if (preg_match("/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/", $password)) echo "Su password es seguro."; else echo "Su password no es seguro."; 
    } 

	
	/*public function validar_fecha($valor) {
		if (preg_match('/^\d{1,2}\/\d{1,2}\/\d{4}$/', $valor)) {
	
		    return true;
		} else { 
		     return false;
		} 
	
	 } */

    public function validar_nombre2 ($valor)
    {
    resultado(preg_match('/^[a-z\d_]{4,28}$/i', $valor));
    }
 


	public function validar_nombre_completo ($valor)
    {
    resultado(preg_match('/^[a-zñÑáéíóú\d_\s]{4,28}$/i', $valor));
    }



    public function valida_nombre($valor){
		$exp_reg = '/^[a-zd_]{4,28}$/i';
    if (preg_match($exp_reg, $valor)) {
    	     return true;
		} else { 
		     return false;
		} 
	}

	public function valida_archivo($valor){
		$patron = "%\.(gif|jpe?g|png|pdf)$%i";
		if(preg_match($patron, $valor)) 
		{
    	     return true;
		} else { 
		     return false;
	}
}

	/*public function valida_num($valor){
		
		if (preg_match('/^(\(?[0-9]{3,3}\)?|[0-9]{3,3}[-. ]?)[ ][0-9]{3,3}[-. ]?[0-9]{4,4}$/', $valor)) {
			 return true;
		} else { 
		     return false;
		}
  } */
}

?>    