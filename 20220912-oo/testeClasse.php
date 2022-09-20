<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="cpf">CPF</label>
        <input type="text" name="cpf">
        <input type="submit" value="enviar">
    </form>

<?php
    
    include 'pessoa.class.php';
    include 'pessoaFisica.php';

    if (isset($_REQUEST['nome']) && isset($_REQUEST['cpf'])) {
        $p = new PessoaFisica();
        $p->setNome($_REQUEST['nome']);
        $p->setCpf($_REQUEST['cpf']);
        echo $p->getNome() . " " . $p->getCpf();
    }

?>    
</body>
</html>