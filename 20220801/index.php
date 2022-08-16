<!DOCTYPE html>
<html>
<head>
	<title>Cadastro</title>
</head>
<body>
	<a href="exe.php">Exe 01</a>
	<form method="post" action="processa.php">
		<label for="nome">Nome</label>
		<input type="text" name="nome">
		<br>
		<label for="dataNasc">Data Nascimento</label>
		<input type="date" name="dataNasc">
		<br>
		<label for="sexo">Sexo</label>
		<br>
		<input type="radio" id="html" name="sexo" value="masculino">
		<label for="html">Masculino</label><br>
		<input type="radio" id="feminino" name="sexo" value="feminino">
		<label for="css">Feminino</label><br>
		<input type="radio" id="outros" name="sexo" value="outros">
		<label for="javascript">Outros</label>
		<br>
		<input type="submit">
	</form>

</body>
</html>