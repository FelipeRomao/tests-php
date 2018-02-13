<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Testes PHP</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css"
		integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
              crossorigin="anonymous" />
	
</head>
<body class="container" onselectstart="return false">
	<?php 
		//Fazendo testes com Strings
		$frase = "Eu gosto de estudar PHP";
		$novafrase = str_replace("PHP", "Java", $frase);
		echo "$novafrase". "<br>";

		//Inclusão de funções
		include "funcoes.php";

		ola();
		mostrarValor(892);
	?>

	<!-- Tabuada -->
	<h1 style="color: green;">Tabuada</h1>
	<form action="resposta.php" method="get">
		<div class="dropdown dropdown-default">
			<select name="opt">
				<?php 
					for($i = 0; $i <= 10; $i++) {
						echo "<option>$i<option>";
					}
				?>
			</select>
		</div>
		<br />
		<button class="btn btn-outline-success">MOSTRAR A TABUADA</button>
	</form>

	
</body>
</html>