<?php

$host = "127.0.0.1";
$usuario = "root";
$senha = "";
$banco_dados = "undertale";

$conexao = mysqli_connect($host, $usuario, $senha, $banco_dados);

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
	
endif;

?>