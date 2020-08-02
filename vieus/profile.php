<?php
if($_SESSION["user_admin"]=''){
    header('Location: ../authenticaion\login.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_profile.css">
    <title>online librarie</title>
</head>
<body>
    <div class="head">
        <div class="logo">
            <img src="../1x/ddd.png" >
        </div>
        <div class="nav">
            <a href="">home</a> 
            <a href="">Nou contacter</a> 
            <a href="">No service</a> 
            <form action="../authenticaion\admin\login_controller.php" method="post">
            
            <button type="submit" name="logout_admin" class="logout" > LOGOUT</button>
            </form>
             
        </div>
    </div>
    <div class="contaner">
        <div class="add_a_book">
                <h2>add a book</h2>
                <form action="profile.php" method="post">
                                       
                    <input type="text" name="titre" placeholder="Titre" >
                    <input type="text" name="auteur" placeholder="Auteur" >
                    <input type="text" name="edition" placeholder="edition" >
                    <input type="text" name="nbr_p" placeholder="Nombre de page" >
                    <input type="text" name="prix" placeholder="prix" >
                    <?php
                         if(isset($_POST["input_singup_submit"])||isset($_POST["input_books_submit"])){
                            require '../authenticaion\register.inc.php\register_books.php';  
                        }
                                       
                    ?>
                    
                    <button type="submit" name="input_books_submit" class="btn" > submit</button>
                 
                </form>
        </div>
        <div class="add_a_client">
                <h2>add a client</h2>
                <form action="profile.php" method="post">
                    <input type="text" name="lastname" placeholder="last name" >
                    <input type="text" name="FirstName" placeholder="First Name" >
                    <input type="text" name="tele" placeholder="Phone number" >
                    <input type="email" name="email" placeholder="E-mail" >
                    <input type="password" name="input_password" placeholder="Password" >
                    <input type="password" name="input_rep_password" placeholder="Repet_Password">
                    <?php
                         if(isset($_POST["input_singup_submit"])||isset($_POST["input_books_submit"])){
                            require '../authenticaion\register.inc.php\register.inc.php';  
                        }
                                       
                    ?>
                    <button type="submit" name="input_singup_submit" class="btn" > submit</button>
                </form>

        </div> 
    </div>
    <div class="book_tabel">
            <table class="blueTable">
                <thead>
                <tr>
                    <th>book's id</th>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Editions</th>
                    <th>Nombre de page</th>
                    <th>Prix</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_POST["aficher_les_books"])){
                    require '../authenticaion\fetch_data\books.php';   
                }
                                       
                ?>

                
                </tbody>
            </table>
            <form action="profile.php" method="post">
                <button type="submit" name="aficher_les_books" class="btn" > submit</button>
                <button type="submit" name="aficher_les_books" class="btn" > submit</button>
                <button type="submit" name="aficher_les_books" class="btn" > submit</button>
              
                
            </form>
        </div>
        <div class="client_tabel">
            <table class="blueTable">
                <thead>
                <tr>
                    <th>Client id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Telephone</th>
                    <th>E-mail</th>
                    <th>Adress</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if(isset($_POST["aficher_les_client"])){
                    require '../authenticaion\fetch_data\client.php';   
                }
                                       
                ?>
                   
                </tbody>
               
            </table>
            <form action="profile.php" method="post">
                <button type="submit" name="aficher_les_client" class="btn" > submit</button>
                <button type="submit" name="aficher_les_client" class="btn" > submit</button>
                <button type="submit" name="aficher_les_client" class="btn" > submit</button>
              
                
            </form>
        </div>
        
       
    
</body>
</html>