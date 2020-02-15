<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>Prática</title>
	</head>

	<body>

		<?php

			function conectar(){

				try{

					$pdo = new PDO("mysql:host=localhost;dbname=banco", "root", "");

				}catch(PDOException $ex){

					echo "Erro: " . $ex->getMessage();

				}	

				return $pdo;
			}

		?>

		<?php

			$conexao = conectar();

			$sexo = "F";

			$sql = "INSERT INTO usuario(nome, sexo) VALUES(?, ?)";

			$stmt = $conexao->prepare($sql);

			$stmt->bindValue(1, "Nara Lílian Gomes Ribeiro");
			$stmt->bindParam(2, $sexo);

			if($stmt->execute()):

				echo "Cadastrado com Sucesso";

			else:

				echo "Falha ao Cadastrar";

			endif;

		?>

		<?php

			$sql = "SELECT * FROM usuario";

			$stmt = $conexao->prepare($sql);

			$stmt->execute();

			$linha = $stmt->fetchAll(PDO::FETCH_ASSOC);

			foreach($linha as $valor):

				echo $valor['codigo'] . "<br>";

			endforeach;

		?>

	</body>
</html>