<?php

class Persona
{
    private $_apellido;
    private $_dni;
    private $_nombre;
    private $_sexo;

    function __construct($apell, $dni, $nombre, $sexo)
    {
        $this->_apellido=$apell;
        $this->_dni= $dni;
        $this->_nombre= $nombre;
        $this->_sexo = $sexo;
    }

    public function ToString()
    {
        return $this->_apellido."-".$this->_dni." - ".$this->_nombre." - ".$this->_sexo.","."\r\n";
    }
}


 


?>