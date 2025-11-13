<?php 
    //NÃO posso acessar login antes de passar pelo index.php
    defined('CONTROL') or die ("Acesso NEGADO!");
    //loguot
    session_destroy();

    //retornar login
    header("location: index.php?rota=login");
?>