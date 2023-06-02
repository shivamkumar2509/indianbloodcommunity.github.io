<?php
  
    $conn = mysqli_connect("localhost","root","","india") or die("connection failed");

    $sql = "SELECT * FROM state";

    $query = mysqli_query($conn,$sql) or die("query unsuccesful.");
    
    $str = "";
    while($row = mysqli_fetch_assoc($query)){
        $str.="<option value='{$row['id']}'>{$row['state_name']}</option>";
    }

    echo $str;

?>