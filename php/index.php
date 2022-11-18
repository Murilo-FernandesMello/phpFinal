<?php
session_start();
 
require 'init.php';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/index.css">
        <title>CF - Index</title>
    </head>
    <img src="../img/Sweet.png" id="img">
    <body>
    
         
        <h1>Bem-Vindo!</h1>
 
        <?php if (isLoggedIn()): ?>
            <p>Olá, <?php echo $_SESSION['user_name']; ?>. <a href="panel.php">Painel</a> | <a href="logout.php">Sair</a></p>
        <?php else: ?>
            <p id="texto">Olá, visitante! <br>
            Aqui, você encontrará as melhores cenas de filmes premiados. <br>
            Para acessar os clipes, faça <a href="form-login.php">login</a>. <br>
        Alguns dos filmes presentes:</p>
        <?php endif; ?>
        
        <div class="filmes">
        <img src="../img/forest gump.png" id="forest">
        <img src="../img/drive.png" id="drive">
        <img src="../img/whiplash.png" id="whiplash">
        <img src="../img/forest gump.png" id="forest">
        <img src="../img/drive.png" id="drive">
        <img src="../img/whiplash.png" id="whiplash">
        </div>
    </body>
</html>
