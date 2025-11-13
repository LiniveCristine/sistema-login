<?php
//banco de dados dos usuários
    return [
        [
            "usuario" => "sheldon@gmail.com",
            "senha" => password_hash("bazinga123", PASSWORD_DEFAULT) 
        ],
         [
            "usuario" => "michael_scott@gmail.com",
            "senha" => password_hash("papel123", PASSWORD_DEFAULT) 
        ],
         [
            "usuario" => "satoru.gojo@gmail.com",
            "senha" => password_hash("jujutsu123", PASSWORD_DEFAULT) 
        ]
    ] 


?>