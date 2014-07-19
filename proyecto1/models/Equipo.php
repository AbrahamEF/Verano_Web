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
    
    private $nombre;    
    private $escudo;
    private $idpais;
       
    
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

    public function set_nombre($valor){

        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este nombre (".$valor.") no es valido";
        }

        $this->nombre = trim($valor);
        }
    

    public function get_escudo(){
        return $this->escudo;
    }
    
    public function set_escudo($valor){
   
        $er = new Er();
        
        if ( !$er->valida_archivo($valor['name']) ){
            $this->errores[] = "Este escudo (".$valor.") no es valido";
        }

        $this->escudo = trim($valor['name']);


       /* if ( !$er->valida_tipo($valor['type']) ){
            $this->errores[] = "Este tipo de escudo (".$valor.") no es valido";
        }

        $this->escudo = trim($valor['type']);


        if ( !$er->valida_size($valor['size']) ){
            $this->errores[] = "Este tamaño de escudo (".$valor.") no es valido";
        }

        $this->escudo = trim($valor['size']);*/
        }
    

    public function get_idpais(){
        return $this->idpais;
    }
    
    public function set_idpais($valor){
   
       /* $er = new Er();
        
        if ( !$er->valida_idpais($valor) ){
            $this->errores[] = "Este id pais (".$valor.") no es valido";
        }

        $this->idpais = trim($valor);*/
        }    
    
}

?>
