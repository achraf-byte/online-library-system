


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style_client_prof.css">
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
                <a href="" class="logout">LOGOUT</a> 
        </div>
    </div>
    <H1 class='heddd'>avalabel books</H1>
    <div class="contaner"> 
        
        
    <div class="books">
                    
                    <div class="felss P_top ">
                    <p CLASS="space spc2">titre :</p><p>achraf</p>
                    </div>
                    <span></span>
                    <div class="felss top">
                    <p CLASS="space ">auteut :</p><p>elassoui</p>
                    </div>
                    <div class="felss top">
                    <p CLASS="space ">date de production :</p><p>2020/20/01</p>
                    </div>
                    <div class="felss top">
                    <p CLASS="space">Prix :</p><p>200dh</p>
                    </div>
                    <form action="profile.php" method="post">
                    <input type="date" name="tele" placeholder="Phone number" >
                    <input type="date" name="email" placeholder="E-mail" >
                    
                    <?php
                        if(isset($_POST["input_singup_submit"])||isset($_POST["input_books_submit"])){
                            require '../authenticaion\register.inc.php\register.inc.php';  
                        }
                                    
                    ?>
                    <div class="fels">
                    <p>le livre est bien reserver</p>
                    <button type="submit" name="input_singup_submit" class="btn" > submit</button>
                    </div>
                </form>

        </div> 
        <div class="books">
                    
                    <div class="felss P_top ">
                    <p CLASS="space spc2">titre :</p><p>achraf</p>
                    </div>
                    <span></span>
                    <div class="felss top">
                    <p CLASS="space ">auteut :</p><p>elassoui</p>
                    </div>
                    <div class="felss top">
                    <p CLASS="space ">date de production :</p><p>2020/20/01</p>
                    </div>
                    <div class="felss top">
                    <p CLASS="space">Prix :</p><p>200dh</p>
                    </div>
                    <form action="profile.php" method="post">
                    <input type="date" name="tele" placeholder="Phone number" >
                    <input type="date" name="email" placeholder="E-mail" >
                    
                    <?php
                        if(isset($_POST["input_singup_submit"])||isset($_POST["input_books_submit"])){
                            require '../authenticaion\register.inc.php\register.inc.php';  
                        }
                                    
                    ?>
                    <div class="fels">
                    <p>le livre est bien reserver</p>
                    <button type="submit" name="input_singup_submit" class="btn" > submit</button>
                    </div>
                </form>

        </div> 
        <div class="books">
                    
                    <div class="felss P_top ">
                    <p CLASS="space spc2">titre :</p><p>achraf</p>
                    </div>
                    <span></span>
                    <div class="felss top">
                    <p CLASS="space ">auteut :</p><p>elassoui</p>
                    </div>
                    <div class="felss top">
                    <p CLASS="space ">date de production :</p><p>2020/20/01</p>
                    </div>
                    <div class="felss top">
                    <p CLASS="space">Prix :</p><p>200dh</p>
                    </div>
                    <form action="profile.php" method="post">
                    <input type="date" name="tele" placeholder="Phone number" >
                    <input type="date" name="email" placeholder="E-mail" >
                    
                    <?php
                        if(isset($_POST["input_singup_submit"])||isset($_POST["input_books_submit"])){
                            require '../authenticaion\register.inc.php\register.inc.php';  
                        }
                                    
                    ?>
                    <div class="fels">
                    <p>le livre est bien reserver</p>
                    <button type="submit" name="input_singup_submit" class="btn" > submit</button>
                    </div>
                </form>

        </div> 
        
        
    </div>
</body>
</html>