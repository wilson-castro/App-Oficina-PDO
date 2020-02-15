<?php

require_once('conexao.php');

session_start();

if(!isset($_SESSION['logado'])):

	header('Location: index.php');

endif;

//Dados
$id = $_SESSION['idusuario'];

$sql = "SELECT * FROM cadastro WHERE idusuario = '$id'";

$resultado = mysqli_query($conexao, $sql);

$dados = mysqli_fetch_array($resultado);

mysqli_close($conexao);

?>

<!DOCTYPE html>
<html>

	<head>

		<meta charset="utf-8">
		<title>UNDERTALE</title>

		<link rel="icon" href="../img/heart.png">

		<link rel="stylesheet" type="text/css" href="../estilo/materialize.css">

		<link rel="stylesheet" type="text/css" href="../estilo/customizado.css">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	</head>

	<body>

		<div class="navbar-fixed">
			<nav>
			    <div class="nav-wrapper black">
			      	<a href="#!" class="brand-logo"><img src="../img/Logo.png"></a>
			      	<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>

			      		<ul class="right hide-on-med-and-down">

			      			<li class="white-text"><?php echo $dados['login']; ?></li>
			      			<li><img src="../img/<?php echo $dados['personagem']; ?>.png" height="60" width="60" class=" circle white"></li>
			        		<li><a href="#modal4" class="btn white black-text modal-trigger">Sair</a></li>

			      		</ul>
			    </div>
	  		</nav>
	  	</div>

	  	<ul class="sidenav" id="mobile-demo">

	  		<li class="black-text"><?php echo $dados['login']; ?></li>
			<li><img src="../img/Sans2.jpg" height="60" width="60" class=" circle white"></li>

		    <li><a href="#modal5" class="btn white black-text modal-trigger">Sair</a></li>

		    <li><a href="" class="sidenav-close">Fechar</a></li>

	  	</ul>

	  	<div class="modal" id="modal4">

	  		<div class="modal-content">

	  			<a href="#" class="modal-close"><i class="material-icons right">close</i></a>
	  			<h6 class="pixelada">Desejas Sair?</h6>

	  		</div>

	  		<div class="modal-footer">

	  			<a href="logout.php" class="btn waves-effect black white-text">Sair</a>
	  			<a href="" class="modal-close btn waves-effect black white-text">Cancelar</a>
	  			

	  		</div>

	  	</div>


		<div class="container">

			<div class="card-panel black">

				<h1 class="flow-text white-text center-align">UNDERTALE</h1>

			</div>

			<div class="row">

				<div class="col s12 m6 l6 offset-l3 black">
						
					<ul>

						<li class="white-text black"><a href="" class="white-text pixelada">Chat</a></li>

						<div class="divider white"></div><br>

						<li class="white-text black"><a href="" class="white-text pixelada">Minhas Informações</a></li>

						<div class="divider white"></div><br>

						<li class="white-text black"><a href="" class="white-text pixelada">Comentários</a></li>

						<div class="divider white"></div><br>

						<li class="white-text black"><a href="" class="white-text pixelada">Conta</a></li>

						<div class="divider white"></div><br>

						<li class="white-text black"><a href="" class="white-text pixelada">Configurações</a></li>

						<div class="divider white"></div><br>

					</ul>
					

				</div>

			</div>

		</div>

		<footer class="page-footer black">
			
			<div class="container white-text">
				<div class="row">

					<div class="col l6 s12">

						<h5 class="white-text">Conteúdo</h5>

						<p class="white-text">Novidades, dicas, curiosidades, fotos e muito mais nesta página web interativa e produzida para fans que gostam de jogar e conversar sobre undertale.</p>

					</div>

					<div class="col l4 offset-l2 s12">

						<h5 class="white-text">Links</h5>

						<ul>
							<li><a class="white-text">História</a></li>
							<li><a class="white-text">Personagens</a></li>
							<li><a class="white-text">Subsolo</a></li>
							<li><a class="white-text">Galeria</a></li>
						</ul>
						
					</div>

				</div>

				<div class="row">
					<div class="col s12 m4 l4">
						<img src="../img/cachorro.gif" height="60">
					</div>
				</div>
			</div>

			<div class="footer-copyright">

				<div class="container">
					2018 @ TOBY FOX - UNDERTALE, Jogador Amador - Yan da Silva
				</div>

				<a class="white-text right">Faça parte do Grillby's</a>

			</div>

		</footer>

		
		<script src="../js/jquery.js"></script>

		<script src="../js/materialize.js"></script>

		<script src="../js/script-inicializacao.js"></script>

	</body>

</html>
