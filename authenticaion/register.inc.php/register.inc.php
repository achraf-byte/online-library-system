<?php 
if(isset($_POST["input_singup2_submit"]))
{
    require 'db_con\data_base_con.php';
    $lastname = $_POST["lastname"];
    $FirstName = $_POST["FirstName"];
    $tele = $_POST["tele"];
    $email = $_POST["email"];
    $input_password = $_POST["input_password"];
    $input_rep_password = $_POST["input_rep_password"];
    
   if(empty($lastname)||empty($FirstName)||empty($tele)||empty($email)||empty($input_password)||empty($input_rep_password)){
        echo'<p class="B">empty filds</p>';
    }elseif($input_password==$input_rep_password){
        $sql ="SELECT `email` FROM `client` WHERE `email`='$email' ";
        $result= mysqli_query($connetion, $sql);
        $row=mysqli_fetch_array($result);
            if($row>0)
            {
                echo'<p class="B">email deja etuliser</p>';
            
            }else{
                
                $sql = "INSERT INTO `client` (`LastName`, `FirstName`, `tele`, `email`, `password`) VALUES ('$lastname', '$FirstName', '$tele', '$email', '$input_password')";  
                mysqli_query($connetion, $sql) or die('error query') ;
                echo'<p class="A">client est bient ajouter</p>';

            }  
        

    
       
        
    }
    else{
        echo'<p class="B">moddepass est uncorect</p>';
    }
   

}



if(isset($_POST["input_singup_submit"]))
{
    require '../authenticaion\db_con\data_base_con.php';




    



    $lastname = $_POST["lastname"];
    $FirstName = $_POST["FirstName"];
    $tele = $_POST["tele"];
    $email = $_POST["email"];
    $input_password = $_POST["input_password"];
    $input_rep_password = $_POST["input_rep_password"];
    
   if(empty($lastname)||empty($FirstName)||empty($tele)||empty($email)||empty($input_password)||empty($input_rep_password)){
        echo'<p class="B">empty filds</p>';
    }elseif($input_password==$input_rep_password){
        $sql ="SELECT `email` FROM `client` WHERE `email`='$email' ";
        $result= mysqli_query($connetion, $sql);
        $row=mysqli_fetch_array($result);
            if($row>0)
            {
                echo'<p class="B">email deja etuliser</p>';
            
            }else{
                
                $sql = "INSERT INTO `client` (`LastName`, `FirstName`, `tele`, `email`, `password`) VALUES ('$lastname', '$FirstName', '$tele', '$email', '$input_password')";  
                mysqli_query($connetion, $sql) or die('error query') ;
                echo'<p class="A">client est bient ajouter</p>';

            }  
        

    
       
        
    }
    else{
        echo'<p class="B">moddepass est uncorect</p>';
    }
    
   
}




