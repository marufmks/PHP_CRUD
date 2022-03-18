<?php

    $stu_name=$_POST['sname'];
    $stu_address=$_POST['saddress'];
    $stu_class=$_POST['class'];
    $stu_phone=$_POST['sphone'];

    $conn=mysqli_connect("localhost","root","","crud") or die("connection failed") ;
    $sql="insert into student(sname,saddress,sclass,sphone) 
    values('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}' )";
    $result=mysqli_query($conn,$sql) or die("query unsucessfull");

    header("Location: http://localhost/crud/index.php");
    mysqli_close($conn);

?>