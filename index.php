<?php
include("Fabrica.php");
include("Persona.php");

$emp1 = new Persona("Gonzalez","33333","Jose","M");
$emp2 = new Persona("Perez","55555","Quiico","F");


$fab = new Fabrica("lolo");

$fab->AgregarEmpleado($emp1);
$fab->AgregarEmpleado($emp2);

$fab->GuardarFabrica($fab);



?>