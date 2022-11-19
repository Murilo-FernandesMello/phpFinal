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
         
        <h1>Painel do Usuário</h1>
 
        <p id="label">Bem-vindo (a), <?php echo $_SESSION['user_name']; ?>! | Clique aqui Para <a href="logout.php">Sair</a></p>

        <div class="filmes">
            <a href="https://www.youtube.com/watch?v=o0kkl7TGQGY">
                <img src="../img/as branquelas.png" id="branquelas">
            </a>
            <a href="https://www.youtube.com/watch?v=1m_1BmEWofU">
                <img src="../img/clube da luta.png" id="clubeLuta">
            </a>
            <a href="https://www.youtube.com/watch?v=WqD5Z-_Bh8I&list=PLjXmHCb6qiS2-f-BAyrScPyinLnq_qNjq&index=16">
            <img src="../img/forest gump.png" id="forest">
            </a>
            <a href="https://www.youtube.com/watch?v=RbZqdYDZK8U">
            <img src="../img/drive.png" id="drive">
            </a>
            <a href="https://www.youtube.com/watch?v=JmTYYKV130w">
            <img src="../img/whiplash.png" id="whiplash">
            </a>
            <a href="https://www.youtube.com/watch?v=v87Rt5OUxWw&list=PLHmj2QDB2rkbEXHr6jhFuv6SddWdUuNKK&index=2">
                <img src="../img/psicopata americano.png" id="pAmericano">
            </a>
            <a href="https://www.youtube.com/watch?v=JdOJ1i8_jVc">
                <img src="../img/sempre ao seu lado.png" id="sempreLado">
            </a>
            <a href="https://www.youtube.com/watch?v=ECSmzDpQ8_A&list=PLHmj2QDB2rkaUUn_9mCOgVoZ5fdAP01ld&index=3">
                <img src="../img/sherek.png" id="shereck">
            </a>
            <a href="https://www.youtube.com/watch?v=bniAFuQkNrI">
                <img src="../img/brilho eterno.png" id="brilhoEterno">
            </a>
            <a href="https://www.youtube.com/watch?v=uYu8JDS4No4">
                <img src="../img/click.png" id="click">
            </a>
            <a href="https://www.youtube.com/watch?v=uFZmlxqoJi0">
                <img src="../img/gente grande.png" id="genteGrande">
            </a>
            <a href="https://www.youtube.com/watch?v=9T7_GbC7BCY">
                <img src="../img/hollywood.png" id="hollywood">
            </a>
            <a href="https://www.youtube.com/watch?v=dzxZAtCP5v4">
                <img src="../img/inglorios.png" id="inglorios">
            </a>
            <a href="https://www.youtube.com/watch?v=l7PuXAsPl9c">
                <img src="../img/possesion.png" id="possesion">
            </a>
            <a href="https://www.youtube.com/watch?v=z-41_kycR-A">
                <img src="../img/soldado ryan.png" id="ryan">
            </a>
            <a href="https://www.youtube.com/watch?v=_YYmfM2TfUA">
                <img src="../img/rocky.png" id="rocky">
            </a>
        </div>
    </body>
</html>
