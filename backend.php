<?php

    echo    $stu_name = $_POST['sname'];
    echo    $stu_age = $_POST['age'];
    echo    $stu_number = $_POST['mobilenumber'];
    echo    $stu_email = $_POST['email'];
    echo    $stu_gender = $_POST['gender'];
    echo    $stu_date = $_POST['sdate'];
    echo    $stu_state=$_POST['mystate'];
    echo    $stu_city=$_POST['mycity'];
    echo    $stu_hospital=$_POST['myhospital'];
    echo    $stu_blood=$_POST['myblood'];

    $conn = mysqli_connect("localhost","root","","form") or die("connection failed");
    // $s = mysqli_query($conn,"select * from state");
    // mysqli_fetch_all($s,MYSQLI_ASSOC);

    $sql = "INSERT INTO bform(sname,age,mobilenumber,email,gender,sdate,mystate,mycity,myhospital,myblood) VALUES('{$stu_name}','{$stu_age}','{$stu_number}','{ $stu_email}','{ $stu_gender}','{ $stu_date}','{$stu_state}','{$stu_city}','{$stu_hospital}','{ $stu_blood}')";
    // // if(isset($_POST['gender'])){
    // //     $stu_gender = $_POST['gender']; 
    // //     $sql = "INSERT INTO bform(sname,age,mobilenumber,email,gender,sdate) VALUES('{$stu_name}','{$stu_age}','{$stu_number}','{ $stu_email}','{ $stu_gender}','{ $stu_date}')";
    // //     $query_run=mysqli_query($conn, $sql);
    // // }
    $result = mysqli_query($conn,$sql) or die("query unsuccessfull");

    header("Location:http://localhost/blood/donar1.php");
    mysqli_close($conn);
     
?>