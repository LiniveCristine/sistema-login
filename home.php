<?php 
    //NÃO posso acessar login antes de passar pelo index.php
    defined('CONTROL') or die ("Acesso NEGADO!");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Usuário logado</h1>
    </header>
    <main>
        <p>Usuário: <strong><?= $_SESSION["usuario"] ?></strong></p>
        <p>
            <a href="index.php?rota=logout">sair</a>
        </p>
    </main>
    
</body>
</html>