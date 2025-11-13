<?php
    //iniciar a sessão
    session_start();

    //constante de controle
    define('CONTROL', true);

    //varificar se existe usuário logado
    $usuarioLogado = $_SESSION["usuario"] ?? null;

    //verificar roda na url
    if($usuarioLogado == null){
        $rota = "login";
    }else{
        $rota = $_GET["rota"] ?? "home";
    }

    //analisar rota
    $rotas = [
        "login" => "login.php",
        "home" => "home.php"
    ];

    if(!key_exists($rota, $rotas)){
        die("Acesso NEGADO!");
    }

    require_once $rotas[$rota];
?>

