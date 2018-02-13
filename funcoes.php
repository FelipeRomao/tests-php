<?php

	function ola() {
		echo "<h1>Olá Mundo! =D</h1>";
	}

	function mostrarValor($n) {
		echo "<p>O valor é $n</p>";
	}

	function teste(&$x){
			$x += 2;
			echo "<p>O valor de X é $x</p>";
		}

		$a = 4;
		teste($a);
		echo "<p>O valor de A é $a</p>";
	
?>