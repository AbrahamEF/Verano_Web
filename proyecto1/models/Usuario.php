<?php

class Equipo extends Modelo{
    public $nombre_tabla = 'usuarios';
    public $pk = 'id_usuario';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'escudo'=>array(),
        'idpais'=>array(),
    );
    
    public $errores = array( );
    
    private 'nombre';
    private 'escudo';
    private 'idpais';
       
    
    function Equipo(){
        parent::Modelo();
    }
    
    public function get_atributos(){
        $rs = array();
        foreach ($this->atributos as $key => $value) {
            $rs[$key]=$this->$key;
        }
        return $rs;
    }
    
    
    public function get_nombre(){
        return $this->nombre;
    } 

    public function set_email($valor){

        $er = new Er();
        
        if ( !$er->valida_email($valor) ){
            $this->errores[] = "Este e-mail (".$valor.") no es valido";
        }

        $rs = $this->consulta_sql("select * from usuarios where email = '$valor'");
        $rows = $rs->GetArray();
        
        $this->email = trim($valor);
        }
    }

    public function get_password(){
        return $this->baja;
    }
    
    public function set_password($valor){
        $this->password = trim( md5($valor) );
    }
    


    
    
    
}

?>
