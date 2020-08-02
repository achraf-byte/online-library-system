<?php
if(isset($_POST["input_connect_as_admin"]))
{
    

    $email = $_POST["email"];
    $input_password = $_POST["input_password"];


    if(($email=='admin@login.com')&&($input_password=='admin@pass')){
        session_start();
        $_SESSION["user_admin"]=$email;
        header('Location: ../vieus\profile.php');
    }
    else{
        echo'<p class="B">mot de pass ou email incorect</p>';
    }

}
else{
    header('Location: ../login_as_admin.php');
}

if(isset($_POST["logout_admin"])){
    session_abort();
    header('Location: ../login_as_admin.php');
    

}