<?php

class Pais extends Modelo{
    public $nombre_tabla = 'usuarios';
    public $pk = 'id_usuario';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'idcontinente'=>array(),
        'bandera'=>array(),
    );
    
    public $errores = array( );
    
    private $nombre;
    private $idcontinente;
    private $bandera;
       
    
    function Pais(){
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
    

    public function get_idcontinente(){
        return $this->idcontinente;
    }
    
    public function set_idcontinente($valor){
   
        /*$er = new Er();
        
        if ( !$er->valida_escudo($valor) ){
            $this->errores[] = "Este escudo (".$valor.") no es valido";
        }

        $this->idcontinente = trim($valor);*/
        }
    

    public function get_bandera(){
        return $this->bandera;
    }
    
    public function set_bandera($valor){
   
        $er = new Er();
        
        if ( !$er->valida_archivo($valor['name']) ){
            $this->errores[] = "Este archivo (".$valor.") no es valido";
        }

        $this->bandera = trim($valor['name']);


        /*if ( !$er->valida_tipo($valor['type']) ){
            $this->errores[] = "Este tipo (".$valor.") no es valido";
        }

        $this->bandera = trim($valor['type']);


        if ( !$er->valida_size($valor['size']) ){
            $this->errores[] = "Este tamaño (".$valor.") no es valido";
        }

        $this->bandera = trim($valor['size']);*/
        }    
    
}

?>