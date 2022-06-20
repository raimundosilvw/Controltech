<?php
session_start();


	//Autenticação de usuarios com Array

$usuario_autenticado = false;

$usuarios_app = array(
		array('user' => 'dada', 'senha' => '123'),
		array('user' => 'admin', 'senha' => 'admin'),
		array('user' => 'root', 'senha' => 'root')
);

foreach ($usuarios_app as $user) {

	if ($user['user'] == $_POST['user'] && $user['senha'] == $_POST['senha']) {
		$usuario_autenticado = true;
	}
}

if ($usuario_autenticado) {

	$_SESSION['autenticado'] = 'SIM';

	header('location: formulario.php');

}else{

	$_SESSION['autenticado'] = 'NAO';

	header('location: login.php?login=erro');

}

?>


