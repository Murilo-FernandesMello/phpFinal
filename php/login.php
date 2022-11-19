<?php
require 'init.php';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';


//verificação 1
if(empty($email) || empty($senha)){
    echo "Email ou Senha Incorretas";
}




//Conecta no banco de dados
$PDO = db_connect();


$sql = "SELECT id, nome, adm FROM tbUsu WHERE email = :email AND senha = :senha";
$stmt = $PDO->prepare($sql);
 
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
//$stmt->bindParam('adm', $adm);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

/*if($adm == 0){
    header('Location: panel.php');
}else{
    header('Location:panel-adm.php');
}
*/
if (count($users) <= 0){
    echo "Email ou senha incorretos";
    exit;
}
 
// pega o primeiro usuário
$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['user_id'] = $user['id'];
$_SESSION['user_name'] = $user['nome'];

//direciona para a página principal
header('Location: panel.php');

?>