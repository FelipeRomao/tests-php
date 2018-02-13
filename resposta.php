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
<body class="container">
	<?php 
        $multiplicando = isset($_GET["opt"]) ? $_GET["opt"] : 1;
       	for($c = 0; $c <= 10; $c++){
       		echo $multiplicando. " X " .$c. " = ". $multiplicando * $c;
       		echo "<br />";
       	}


	?>
	<br />
	<a href="index.php" class="btn btn-outline-primary btn-sm">Voltar</a>
</body>
</html>
