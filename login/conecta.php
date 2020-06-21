<?php
$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "uninove";

$conexão = new mysqli("$host", "$usuario", "$senha", "$banco");

if ($conexão -> connect_error) {
 	echo "DEU RUIM";
 } 
 else{
 	echo "VAMOS QUE VAMOS! CONECTADO!";
 }

 ?>