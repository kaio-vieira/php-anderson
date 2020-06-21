<?php 
session_start();

unset(
        $_session['id'],
	    $_session['nome'],
		$_session['email']

);

header('location: index.html');

?>