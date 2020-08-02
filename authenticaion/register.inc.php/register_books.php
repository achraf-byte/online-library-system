<?php 

require '../authenticaion\db_con\data_base_con.php';

if(isset($_POST["input_books_submit"]))
{





    



    $titre = $_POST["titre"];
    $auteur = $_POST["auteur"];
    $edition = $_POST["edition"];
    $nbr_p = $_POST["nbr_p"];
    $prix = $_POST["prix"];
    
    
   if(empty($titre)||empty($auteur)||empty($edition)||empty($nbr_p)||empty($prix)){
        echo'<p class="B">empty filds</p>';
   }else{
            $sql ="SELECT `auteur` FROM `book` WHERE `auteur`='$auteur' ";
            $result= mysqli_query($connetion, $sql);
            $row=mysqli_fetch_array($result);
                if($row>0)
                {
                    echo'<p class="B">ce livre est deja enregistreir</p>';
                
                }else{
                    
                    $sql = "INSERT INTO `book` (`titre`, `auteur`, `edition`, `nbr_p`, `prix`) VALUES ('$titre', '$auteur', '$edition', '$nbr_p', '$prix')";  
                    mysqli_query($connetion, $sql) or die('error query') ;
                    echo'<p class="A">livr est bient ajouter</p>';

                }  

        }
        
        

    
       
        
    
   
    
   
}




