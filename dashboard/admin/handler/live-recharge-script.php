
<?php
require("../../includes/config.php");
if(isset($_POST['get_live_recharge'])){
    // echo "work";
    $date = date("Y-m-d");
        $q = $con->query("SELECT * FROM recharge_history where DATE='$date' order by ID DESC");
        $i =1 ;
        while($row = $q->fetch_assoc()){
     
      echo' <tr>
                <td>'.$i++ .'</td>
                <td>'.$row['TRANS_ID'] .'</td>
                <td>'.$row['OPERATOR_ID'] .'</td>
                <td>'.$row['DATE'] .'</td>
                <td>'.$row['NUMBER'] .'</td>
                <td>'.$row['STATUS'] .'</td>
                <td>'.$row['AMOUNT'] .'</td>
                <td>'.$row['API_NAME'] .'</td>
        </tr>';
        
        }
    
}


?>