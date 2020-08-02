<?php 

require '../authenticaion\db_con\data_base_con.php';



    
if(isset($_POST["aficher_les_client"])){
    $sql ="SELECT * FROM `client`";
    
        
           
            
            $result = $connetion->query($sql);
            while($row = $result->fetch_assoc()) {
                    
                        echo "<tr>
                        <td><span>" . $row["id"]."</span></td>
                        <td><span>" . $row["LastName"] ."</span></td>
                        <td><span>". $row["FirstName"]. "</span></td>
                        <td><span>". $row["tele"]. "</span></td>
                        <td><span>". $row["email"]. "</span></td>
                        <td><span>". $row["password"]. "</span></td>
                    </tr>";

                    
                }
          
}
?>
