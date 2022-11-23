<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="../css/login.css">
    <title>CF - Login</title>
    <a href="../php/index.php"><img src="../img/Sweet.png" id="img"></a></head>
<body>




    <div class="container">
    <h1>Login de Usuário</h1>

    <br><br>
    <form action="login.php" method="POST">

        <label for="email" id="label">E-mail</label>
        <br><br>
        <input type="text" name="email" id="input">
        <br><br>
        <label for="senha" id="label">Senha</label>
        <br><br>
        <input type="password" name="senha" id="input">
        <br><br>
        <input type="submit" value="Entrar" id="submit">
        
    </form>
    </div>
</body>
</html>