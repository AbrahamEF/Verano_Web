<?php

class Integrante extends Modelo{
    public $nombre_tabla = 'usuarios';
    public $pk = 'id_usuario';
    
    
    public $atributos = array(
        'nombre'=>array(),
        'apellido'=>array(),
        'peso'=>array(),
        'estatura'=>array(),
        'foto'=>array(),
        'Edad'=>array(),
        'idequipo'=>array(),
        
    );
    
    public $errores = array( );
    
    private $nombre;
    private $apellido;
    private $peso;
    private $estatura;
    private $foto;
    private $Edad;
    private $idequipo;
    
           
    
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
    

    public function get_apellido(){
        return $this->apellido;
    }
    
    public function set_apellido($valor){
   
        $er = new Er();
        
        if ( !$er->valida_nombre($valor) ){
            $this->errores[] = "Este escudo (".$valor.") no es valido";
        }

        $this->apellido = trim($valor);
        }
    

    public function get_peso(){
        return $this->peso;
    }
    
    public function set_peso($valor){
   
        /*$er = new Er();
        
        if ( !$er->valida_num($valor) ){
            $this->errores[] = "Este id pais (".$valor.") no es valido";
        }

        $this->peso = trim($valor);*/
        }
    


    public function get_estatura(){
        return $this->estatura;
    }
    
    public function set_estatura($valor){
   
        /*$er = new Er();
        
        if ( !$er->valida_estatura($valor) ){
            $this->errores[] = "Este id pais (".$valor.") no es valido";
        }

        $this->estatura = trim($valor);*/
        }
    


    public function get_foto(){
        return $this->foto;
    }
    
    public function set_foto($valor){
   
        $er = new Er();
        
        if ( !$er->valida_archivo($valor['name']) ){
            $this->errores[] = "Este id pais (".$valor.") no es valido";
        }

        $this->foto = trim($valor['name']);

        /*if ( !$er->valida_tipo($valor['type']) ){
            $this->errores[] = "Este tipo (".$valor.") no es valido";
        }

        $this->foto = trim($valor['type']);

        if ( !$er->valida_size($valor['size']) ){
            $this->errores[] = "Este tamaño (".$valor.") no es valido";
        }

        $this->foto = trim($valor['size']);*/
        }
    


    public function get_Edad(){
        return $this->Edad;
    }
    
    public function set_Edad($valor){
   
        /*$er = new Er();
        
        if ( !$er->valida_edad($valor) ){
            $this->errores[] = "Este id pais (".$valor.") no es valido";
        }

        $this->edad = trim($valor);*/
        }
    


    public function get_idequpo(){
        return $this->idequipo;
    }
    
    public function set_idequipo($valor){
   
       /* $er = new Er();
        
        if ( !$er->valida_idequipo($valor) ){
            $this->errores[] = "Este id pais (".$valor.") no es valido";
        }

        $this->idequipo = trim($valor);*/
        }

    
    
}

?>