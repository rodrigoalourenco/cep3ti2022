<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Meu Primeiro PHP com o Black</h1>
	<?php 
		echo '<h1>Ola mundo!!!</h1>';

		$minhaVariavel = "Gazeta do Povo";//string
		$minhaVariavel = 32; //number
		$minhaVariavel = true; //boolean
		echo $minhaVariavel . "<br>" ;
/*
		$nomealuno
		$NOMEALUNO
		$nomeAluno
		$nome_aluno
*/

		// Operadores Matematicos + - * / %
		// Operador de Atribuição =
		//  += -= *= /= %= Ex: x += 1 (x = x + 1) 
		// Operador incremental / decremental
		// ++ -- Ex: x++, x--, --x, ++x	
		// Operadores relacionais 
		// > < >= <= == != ===
		// Operadores logicos
		// && ||
		// Operador ternario
		// condition ? valorTrue : valorFalse
		$idadeXuxa = 59;
		echo $idadeXuxa . "<br>";
		$idadeXuxa++;
		echo $idadeXuxa . "<br>";
		$idadeXuxa += 1;
		echo $idadeXuxa . "<br>";
	/*
		if(condition) {
			//code	
		}

		if (condition) {
			// code...
		} else {
			// code...
		}

		if (condition) {
			// code...
		} else if(condition) {
			// code...
		}

		while (condition) {
			// code...
		}

		do {
			// code...
		} while (condition);
	*/
		$variable = ['Jose', 'Maria', 'Geralda'];
		for ($i=0; $i < $variable.length(); $i++) { 
			// code...
			echo $variable[$i];
		}
	/*
		foreach ($variable as $key => $value) {
			// code...
			echo $value;

		}
	*/
	?>

</body>
</html>