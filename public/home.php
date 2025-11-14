<?php 
    //NÃO posso acessar login antes de passar pelo index.php
    defined('CONTROL') or die ("Acesso NEGADO!");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/../login/style.css">
    <title>Resultado</title>
</head>
<body class="backgound">
    <header class="nav-links">
       <?php require "nav.php" ?>
    </header>
    <main >
        <h1 class="title">Seja bem-vindo</h1>
    </main>
    
</body>
</html>