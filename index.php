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

    //usuario logado não pode acessar a rota login
    if(!empty($usuarioLogado) && $rota == "login"){
        $rota = "home";
    }

    //analisar rota
    $rotas = [
        "login" => "login.php",
        "home" => "home.php",
        "logout" => "logout.php"
    ];

    if(!key_exists($rota, $rotas)){
        die("Acesso NEGADO!");
    }

    require_once $rotas[$rota];
?>

