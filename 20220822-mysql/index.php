<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body>
    <a href="readAluno.php">Busca Alunos</a>
    <a href="deleteAluno.php">Deletar Aluno</a>
    <a href="updateAluno.php">Alterar Aluno</a>
    <form action="insertAluno.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    
</body>
</html>