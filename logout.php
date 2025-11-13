<?php 

    defined('CONTROL') or die ("Acesso NEGADO!");
    //loguot
    session_destroy();

    //retornar login
    header("location: index.php?rota=login");
?>