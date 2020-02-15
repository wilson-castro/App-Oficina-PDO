<?php

require_once('conexao.php');

session_start();

if(isset($_POST['btn-entrar'])):

	$erros = array();

	$login = mysqli_escape_string($conexao, $_POST['login']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);

	if(empty($login) or empty($senha)):

		$erros[] = "<li>O campo Login/Senha precisa ser preenchido!</li>";
	else:

		$sql = "SELECT login FROM cadastro WHERE login = '$login'";

		$resultado = mysqli_query($conexao, $sql);

		if(mysqli_num_rows($resultado) > 0):
		else:
			$erros[] = "<li>Usuário Inválido!</li>";
		endif;

	endif;

endif;


?>