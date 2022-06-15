<?php

include_once('config.php');


if(isset($_POST['submit']) && !empty($_POST['submit']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['nome']) && !empty($_POST['nome']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    $email = addslashes(($_POST['email']));
    $nome = addslashes(($_POST['nome']));
    $senha = md5(($_POST['senha']));
    $ip = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP);
    
    $result = mysqli_query($conexao, "SELECT COUNT(*) FROM user_plataforma WHERE email='$email'");
    $result2 = mysqli_query($conexao, "SELECT COUNT(*) FROM user_plataforma WHERE email='$email'")->fetch_row();
    $row = $result->fetch_row();
    
    if ($row[0] > 0) {
    
        
        header("Location: ../sign-up?resultado=Email já cadastrado");
        exit;  

    }else {
    
        $result = mysqli_query($conexao, "INSERT INTO user_plataforma(email,nome,senha,ip_cli) VALUES ('$email', '$nome', '$senha', '$ip')");
        header('Location: ../log-in');
    }}else{
    
    
    
    }
?>
