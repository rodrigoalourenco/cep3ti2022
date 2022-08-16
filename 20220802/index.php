<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form>
		<label for="nome">Nome</label>
		<input type="text" name="nome" id="nome">
		<br>
		<input type="submit">
	</form>

	<?php

	if(isset($_GET['nome'])) {
		$nome = $_GET['nome'];
		echo "<p> $nome </p>";
		echo '<p> $nome </p>';
		echo "<p>" . $nome . "</p>";
	}
	?>

</body>
</html>