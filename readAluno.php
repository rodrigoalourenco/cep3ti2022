<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
<body>
<?php
    include 'conexao.php';
    $sql = "SELECT * FROM aluno";
    $consulta = $conn->query($sql);

    while($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        ?>
        Welcome <?php echo $linha['nome']; ?><br>
        Your email address is: <?php echo $linha["email"]; ?><br>
        <?php
    }
?>
<hr>
<a href="../20220815-git">Home</a>




</body>
</html>