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
                <th></th>
            </tr>
    <?php

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        ?>
            <tr>
                <td><?php echo $linha['id']; ?></td>
                <td><?php echo $linha['nome']; ?></td>
                <td><?php echo $linha["email"]; ?></td>
                <td>                    
                    <a href="http://localhost/info_3/20220829-mysql/updateAluno.php?codigo=<?php echo $linha['id'];?>"><img src="editar.png" alt="ALTERAR"></a>
                    <a href="http://localhost/info_3/20220829-mysql/deleteAluno.php?codigo=<?php echo $linha['id'];?>"><img src="deletar.png" alt="DELETAR"></a>
                </td>
            </tr>
           
        <?php
    }
?>  
        </table>
<hr>
<a href="../20220829-mysql">Home</a>





</body>
</html>