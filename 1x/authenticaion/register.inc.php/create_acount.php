<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/regis_stylo.css">
    <title>online librarie</title>
</head>
<body>
<div id="Plan_de_travail___2">
       <div class="contaner">
          
           
           <div class="text">
                <p>Bienveunu</p>
                <h5>a notre site web</h5>
           </div>
           

           <div class="the_form">
               <img src="../1x/login/backa.png" alt="">
               <form action="create_acount.php" method="post">
                    <input type="text" name="lastname" placeholder="last name" >
                    <input type="text" name="FirstName" placeholder="First Name" >
                    <input type="text" name="tele" placeholder="Phone number" >
                    <input type="email" name="email" placeholder="E-mail" >
                    <input type="password" name="input_password" placeholder="Password" >
                    <input type="password" name="input_rep_password" placeholder="Repet_Password">
                    <?php
                         if(isset($_POST["input_singup2_submit"])||isset($_POST["input_books_submit"])){
                            require 'register.inc.php\register.inc.php';  
                        }
                                       
                    ?>
                   
                    <button type="submit" name="input_singup2_submit" class="btn" > submit</button>
                </form>
            </div>
       </div>
        
        
        
   
    
   
</body>
</html>