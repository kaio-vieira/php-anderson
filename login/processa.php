<?php 

include 'conecta.php';

$email = $_post['username'];
$senha = $_post['pass'];

$consulta = "SELECT * from clientes where email = '$email' and senha = 'senha' ";

$resultado = $conexão->querry($consulta);
$registros = $resultado->num_rows;

$resultado_usuario = mysqli_fetch_assoc($resultado);


if ($registros ==1) {
	
	$_session['id'] = $resultado_usuario['id'];
	$_session['nome'] = $resultado_usuario['nome'];
	$_session['email'] = $resultado_usuario['email'];

header('location:restrita.php');
}
else{
	header('locatio: index.html');
}










 ?>