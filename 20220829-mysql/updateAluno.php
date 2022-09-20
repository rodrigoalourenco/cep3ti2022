<!DOCTYPE html>
<html lang="en">

<?php 
    include "conexao.php";
    include "head.php";
?>

<body>
    <?php
    if(isset($_GET['codigo'])){
        $codigo = $_GET['codigo'];
        $sql = "SELECT * FROM aluno WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->execute([$codigo]); 
        $aluno = $stmt->fetch();
    ?>
    <form method="post">
        Codigo: <input type="text" name="id" value="<?php echo $aluno['id'];?>" readonly><br>
        Name: <input type="text" name="name" value="<?php echo $aluno['nome'];?>"><br>
        E-mail: <input type="text" name="email" value="<?php echo $aluno['email'];?>"><br>
        <input type="submit">
    </form>
    <?php 
        }
        if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email'])) {
            
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            $sql = "UPDATE aluno SET nome = ?, email = ? WHERE id = ?";
            $stmt= $conn->prepare($sql);
            $stmt->execute([$name, $email, $id]);
            unset($_POST);
            echo $stmt->rowCount() . " registro(s) atualizado(s) com sucesso!!!";

            echo "<hr>";
            echo "<a href='../20220829-mysql'>Home</a>";
        }
    ?>
    
</body>
</html>