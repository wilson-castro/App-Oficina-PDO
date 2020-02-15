<?php
	
session_start();

#Conexão
require_once('conexao.php');

if(isset($_POST['btn-cadastrar'])):

	$nome = mysqli_escape_string($conexao, $_POST['nome']);
	$email = mysqli_escape_string($conexao, $_POST['email']);
	$personagem = mysqli_escape_string($conexao, $_POST['personagem']);
	$login = mysqli_escape_string($conexao, $_POST['login']);
	$senha = mysqli_escape_string($conexao, $_POST['senha']);

	$sql = "INSERT INTO cadastro (nomeusuario, email, login, senha, personagem) VALUES('$nome', '$email', '$login', MD5('$senha') , '$personagem')";

	if(mysqli_query($conexao, $sql)):

		$_SESSION['mensagem'] = "Cadastrado com sucesso!";

		header('Location: ../index.php');

	else:

		$_SESSION['mensagem'] = "Falha no Cadastro!";

		header('Location: ../index.php');

	endif;

mysqli_close($conexao);
	
endif;