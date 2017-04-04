<?php

class Fabrica
{
     private $empleados;
     private $razonSocial;

    
    public function __construct($razon)
    {
       $this->empleados = array();
       $this->razon = $razon;
    }

    public function AgregarEmpleado($emp)
    {
        array_push($this->empleados,$emp);
    }

    public function ToString()
    {
      /*foreach ($this->empleados as $empleado)
      {
          return $empleado->ToString();
      } 
       */       
       $escritura = fopen("Fabrica.txt","w");
       foreach ($this->empleados as $emp) 
       {
       fwrite($escritura, $emp->ToString());
       }
       fclose($escritura);      
    }

    public function Guardarfabrica($fab)
    {
       $fab->ToString();
    }

    public function TraerEmpleado()
    {

    }


}

?>