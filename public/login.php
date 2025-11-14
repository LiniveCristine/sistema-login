<?php 
    //NÃO posso acessar login antes de passar pelo index.php
    defined('CONTROL') or die ("Acesso NEGADO!");

    //formulario foi submetido
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //verificar se usuario e senha estão vazios
        $usuario = $_POST['usuario'] ?? null;
        $senha = $_POST['senha'] ?? null;
        $erro = null;
        if(empty($usuario) || empty($senha)){
             $erro = "Preencha os campos";
        }

        //verificar se dados estão corretos (match)
        if(empty($erro)){
            $usuarios = require_once __DIR__ . '/../BD/usuarios.php';

            foreach($usuarios as $usuarioBD){
                if($usuarioBD["usuario"] == $usuario && password_verify($senha, $usuarioBD["senha"])){
                    //inserir usuario na sessão (login)
                    $_SESSION["usuario"] = $usuario;
                    
                    //entrar no home
                   header('location: index.php?rota=home');

                }
            }
            //usuario e senha não encontrados
            $erro = "Usuario ou senha não encontrados";
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"">
    <meta name=" viewport" content="widtg=devide-width, inicial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
     
    <link rel="stylesheet" href="/../login/style.css">
 
    <title>Login</title>
</head>

<body class="backgound">
    <main class="container" >
        <h1>Login</h1>
        <form action="index.php?rota=login" method="post">
            <div class="input-box">
                <input type="email" placeholder="Usuário" name="usuario" id="idusuario">
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box" style="margin: <?= empty($erro)? '30px 0': '5px 0'  ?>;">
                <input type="password" placeholder="Senha" name="senha" id=idsenha"">
                <i class='bx bxs-lock-alt'></i> 
            </div>
            <div>
                <?php if(!empty($erro)):?>
                <p class="alert"><?= $erro ?></p>
                <?php endif; ?>
                <button class="button" type="submit">Entrar</button>
                
            </div>
        </form>
</main>

    
</body>

</html>