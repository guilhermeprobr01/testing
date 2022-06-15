<?php
if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'config1.php';
    require 'User.php';
    $u = new user();
  

    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);

    if($u->login($email, $senha) == true){
            if(isset($_SESSION['iduser'])){

                header("Location: ../home");

            }else{
                header("Location: ../log-in");
            }

        
            
            
    }else{
        header("Location: ../log-in");
    }




}else{
    header("Location:  ../log-in");
}








?>