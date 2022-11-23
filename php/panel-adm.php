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
    <a href="../php/index.php"><img src="../img/Sweet.png" id="img"></a>
    <body>
         
        <h1>Painel do Administrador</h1>
 <form method="POST">
        <p id="label">Bem-vindo (a), <?php echo $_SESSION['user_name']; ?>! | Clique aqui Para <a href="logout.php">Sair</a></p>
        <p id="label">Aqui você pode conceder ou bloquear o acesso de usuários ao painél principal.</p>
        <br><br>
        <table class="a" border="2px">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Nascimento</th>
            <th>Adm</th>
            <th>Ativo</th>
            <th>Conceder acesso</th>
            <th>Bloquear acesso</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM tbusu";
            $query_run = mysqli_query($con, $query);
            if(mysqli_num_rows($query_run) > 0){
            foreach($query_run as $usuario)    {
            ?>
            <tr>
                </tr>
                <td><?=$usuario['id'];?></td>
                <td><?=$usuario['nome'];?></td>
                <td><?=$usuario['email'];?></td>
                <td><?=$usuario['nasc'];?></td>
                <td><?=$usuario['adm'];?></td>
                <td><?=$usuario['ativo'];?></td>
                <!--<td><input type="submit" value="OK" id="ativar"></td>-->
                <!--<td><input type="submit" value="X" id="bloquear"></td>-->
                <td><a href=<?php echo "./ativar.php\?id=".$usuario['id']?>>[Liberar]</a></td>
                <td><a href=<?php echo "./bloquear.php\?id=".$usuario['id']?>>[Bloquear]</a></td>
         
                <?php
               }
               }else{
                echo "<h5> Nenhum Cliente Cadastrado </h5>";
               }
               ?>

            </tbody>
            </table>
        </div>
        </form>
    </body>
</html>
