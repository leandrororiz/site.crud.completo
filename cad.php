<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cadastro Usuário</h1>
    <?php
    if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form action="processar.banco.php" method="post">
        <label>nome:</label>
        <input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
        <label>valor mensal:</label>
        <input type="number" name="valormensal" placeholder="Digite o seu email"><br><br>
        <label>quantos meses:</label>
        <input type="number" name="quantosmeses" placeholder="Digite o seu email"><br><br>

        <input type="submit" value="Cadastrar">
        <a href="listar.cad.php"><input type="button" value="Listar"></a>
    </form>
</body>
</html>