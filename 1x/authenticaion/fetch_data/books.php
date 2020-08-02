<?php 

require '../authenticaion\db_con\data_base_con.php';



    
if(isset($_POST["aficher_les_books"])){
    $sql ="SELECT * FROM `book`";
    
        
           
            
            $result = $connetion->query($sql);
            while($row = $result->fetch_assoc()) {
                    
                        echo "<tr>
                        <td><span>" . $row["id"]."</span></td>
                        <td><span>" . $row["titre"] ."</span></td>
                        <td><span>". $row["auteur"]. "</span></td>
                        <td><span>". $row["edition"]. "</span></td>
                        <td><span>". $row["nbr_p"]. "</span></td>
                        <td><span>". $row["prix"]. "</span></td>
                    </tr>";

                    
                }
          
}
?>
