<!DOCTYPE html>
<html lang="en">


<?php 
    include "conexao.php";
    include "head.php"; 
?>

<body>
    <!--form method = "post">
        <label for="codigo">Codigo</label>
        <input type="text" name="codigo" id="codigo">
        <input type="submit" value="Deletar">
    </form-->

    <?php
        if(isset($_GET['codigo'])) {
            $id = $_GET['codigo'];
            $sql = "DELETE FROM aluno WHERE id = ?";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$id]);
            echo $stmt->rowCount() . " registro(s) excluido(s) com sucesso!!!";

            echo "<hr>";
            echo "<a href='../20220829-mysql'>Home</a>";

        }
    ?>

    
</body>
</html>