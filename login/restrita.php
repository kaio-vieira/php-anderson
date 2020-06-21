<?php
session_start();

if (
(!isset($_session['id'])==true)&&
(!isset($_session['nome'])==true)&&
(!isset($_session['email'])==true)){

unset($_session['id']);
unset($_session['nome']);
unset($_session['email']);

header('location: index.html');
}


echo "PAGINA RESTRITA!!!!!!!<br>";

echo "(MAS NEM TÃO RESTRITA ASSIM!!!!)";

?>

<a href="sair.php">sair</a>