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
 
            <p id="texto">Olá, visitante! <br>
            Aqui, você encontrará as melhores cenas de filmes premiados. <br>
            Para acessar os clipes, faça <a href="form-login.php">login</a>. <br>
            Alguns dos filmes presentes:</p>
 
        
        <div class="filmes">
        <a href="https://www.youtube.com/watch?v=WqD5Z-_Bh8I&list=PLjXmHCb6qiS2-f-BAyrScPyinLnq_qNjq&index=16">
        <img src="../img/forest gump.png" id="forest">
        </a>
        <a href="https://www.youtube.com/watch?v=RbZqdYDZK8U">
        <img src="../img/drive.png" id="drive">
        </a>
        <a href="https://www.youtube.com/watch?v=JmTYYKV130w">
        <img src="../img/whiplash.png" id="whiplash">
        </a>
        </div>
    </body>
</html>
