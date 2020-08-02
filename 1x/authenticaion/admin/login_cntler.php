<?php


if(isset($_POST["input_login_as_admin"]))
{
    
    session_start();
    $_SESSION['loging']='admin';
    
    header('Location: ../login_as_admin.php');
   
    
   
    
}

elseif(isset($_POST["input_login_as_user"])){
    session_start();
    $_SESSION['loging']='user';
    header('Location: ../login_as_client.php');
    

}
else{
    session_abort();
    header('Location: ../../index.php');
}

