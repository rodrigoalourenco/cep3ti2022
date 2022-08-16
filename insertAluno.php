<?php
    include "conexao.php";
    if (isset($_POST['name']) && isset($_POST['email'])) {
        
        $nome = $_POST['name'];
        $email = $_POST['email'];
        
        $query = "INSERT INTO aluno (nome, email) VALUES (?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute(array($nome, $email));
        echo $stmt->rowCount() . " registro(s) inserido(s) com sucesso!!!";
    }

?>
<hr>
<a href="../20220815-git">Home</a>