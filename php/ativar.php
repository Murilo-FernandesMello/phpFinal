<?php
$id = $_GET['id'];


try {
    $conexao = new PDO("mysql:host=localhost;dbname=bdlogin", "root", "");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->exec("set names utf8");
    echo 'conectei';
} catch (PDOException $erro) {
    echo "Erro na conexão:".$erro->getMessage();
}

$stmt = $conexao->prepare("UPDATE tbUsu SET ativo = '1'  WHERE id = ?");
$stmt->bindParam(1, $id);

$stmt->execute();
header('Location: ../panel-adm.php');
?>