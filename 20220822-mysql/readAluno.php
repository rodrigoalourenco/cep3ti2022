<html>

<?php include "head.php" ?>

<body>
<?php
    include 'conexao.php';
    $sql = "SELECT * FROM aluno";
    $consulta = $conn->query($sql);
    ?>
        <table>
            <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>E-mail</th>
            </tr>
    <?php

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha["email"]; ?></td>
            </tr>
           
        <?php
    }
?>  
        </table>
<hr>
<a href="../20220822-mysql">Home</a>
<a href="updateAluno.php">Alterar Aluno</a>
<a href="deleteAluno.php">Deletar Aluno</a>





</body>
</html>