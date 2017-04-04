<?php
//var_dump($_REQUEST);
//var_dump($_POST);
$nombre = $_POST["nombre"];

if(isset($_POST["escribir"]))
{
$archivo = fopen("Fabrica.txt","w");
fwrite($archivo,$nombre);
fclose($archivo);
}
else 
if(isset($_POST["leer"]))
{
  var_dump($nombre);
}



?>