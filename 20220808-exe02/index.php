<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>EXE 02</title>
</head>
<body>
	<h1>EXE 02</h1>
	<p>Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".</p>
	<hr>
	<form method="post">
		<label for="a">Digite o valor de A</label>
		<input type="number" name="a" id="a"><br>
		<label for="b">Digite o valor de B</label>
		<input type="number" name="b" id="b"><br>
		<input type="submit">
	</form>
	<?php
		if (isset($_POST['a']) && isset($_POST['b'])) {
			$a = $_POST['a'];
			$b = $_POST['b'];

			if($a > $b) {
				echo "<h1>$b $a</h1>";
			} else {
				echo "<h1>$a $b</h1>";
			}
		}
	?>
</body>
</html>