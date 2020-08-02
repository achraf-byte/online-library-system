<?php
    if($_SESSION['loging']='user'){
        session_abort();

    }else{
        header('Location: ../index.php');
        session_abort();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regis_stylogin.css">
    <title>online librarie</title>
</head>
<body>
    

    <div class="contaner">
          
           
        <div class="text">
            <p>Bienveunu</p>
            <h5>a notre site web</h5>
        </div>
        

        <div class="the_form">
            
            <img src="../1x/login/backa.png" alt="">
            <form action="login_as_admin.php" method="post">
            <h1>login as client</h1>
                
                <input type="email" name="email" placeholder="E-jjoooojjmail" >
                <input type="password" name="input_password" placeholder="Password" >
                <?php
                        if(isset($_POST["input_connect_as_admin"])){
                        require 'admin\login_controller.php';  
                    }
                                    
                ?>
                
                <button type="submit" name="input_connect_as_admin" class="btn" > Connecter</button>
            </form>
        </div>
      
    </div>
        
        
   
    
   
</body>
</html>