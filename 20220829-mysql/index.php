<!DOCTYPE html>
<html lang="en">

<?php include "head.php" ?>

<body>
    <a href="readAluno.php">Busca Alunos</a>
    <!--condicao ? inserir : altera -->
    <form action="insertAluno.php" method="post">
        Name: <input type="text" name="nome"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    
</body>
</html>