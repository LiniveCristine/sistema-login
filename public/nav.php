<?php 
    //NÃO posso acessar login antes de passar pelo index.php
    defined('CONTROL') or die ("Acesso NEGADO!");
?>

<div>
    <p>Usuário: <strong><?= $_SESSION["usuario"] ?></strong></p>
    <p>
</div>
<div>
    <nav>
        <a href="?rota=home">Home</a>
        <a href="?rota=pag1">pagina 1</a>
        <a href="?rota=pag2">pagina 2</a>
        <a href="?rota=pag3">pagina 3</a>
        <a href="index.php?rota=logout">sair</a>
    </nav>
</div>


