<?php
session_start();
 
require_once 'init.php';
 
require 'check.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/panel.css">
        <title>CF - Painel</title>
    </head>
    <img src="../img/Sweet.png" id="img">
    <body>
         
        <h1>Painel do Administrador</h1>
 
        <p id="label">Bem-vindo (a), <?php echo $_SESSION['user_name']; ?>! | Clique aqui Para <a href="logout.php">Sair</a></p>
        <p id="label">Aqui você pode conceder ou bloquear o acesso de usuários ao painél principal.</p>
                                        

        </div>
    </body>
</html>
