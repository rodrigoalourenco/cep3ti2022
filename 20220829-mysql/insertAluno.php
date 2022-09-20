<?php
    include "conexao.php";
    include "head.php";
    
    if (isset($_POST['nome']) && isset($_POST['email'])) {
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO aluno (nome, email) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute(array($nome, $email));
        echo $stmt->rowCount() . " registro(s) inserido(s) com sucesso!!!";

        echo "<hr>";
        echo "<a href='../20220829-mysql'>Home</a>";
    }

?>
