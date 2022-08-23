<!DOCTYPE html>
<html lang="en">

<?php 
    include "conexao.php";
    include "head.php";
?>

<body>
    <form method="post">
        Codigo: <input type="text" name="id"><br>
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>

    <?php 
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
            
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "UPDATE aluno SET nome = ?, email = ? WHERE id = ?";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$name, $email, $id]);

            echo $stmt->rowCount() . " registro(s) atualizado(s) com sucesso!!!";

            echo "<hr>";
            echo "<a href='../20220822-mysql'>Home</a>";
        }
    ?>
    
</body>
</html>