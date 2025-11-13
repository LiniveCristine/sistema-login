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
            $usuarios = require_once __DIR__ . '/../login/BD/usuarios.php';

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
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>

<body>
    <header>
        <h1>Login</h1>
    </header>
    <section>
        <form action="index.php?rota=login" method="post">
            <div>
                <label for="usuario">Usuário</label>
                <input type="email" name="usuario" id="idusuario">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id=idsenha"">
            </div>
            <div>
                <input type="submit" value="Entrar">
            </div>
        </form>
    </section>

    <?php if(!empty($erro)):?>
    <p style="color: red"><?= $erro ?></p>
    <?php endif; ?>
</body>

</html>