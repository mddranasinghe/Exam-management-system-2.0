<?php
include "db_connection.php";
session_start();
   if(isset($_POST['submit'])){
    $regnum=mysqli_real_escape_string($conn,$_POST['regNum']);
    $password=mysqli_real_escape_string($conn,$_POST['password']);

    $sql="SELECT * FROM students WHERE Registration_No='$regnum' AND password='$password'";
    $res=mysqli_query($conn,$sql);

    if(mysqli_num_rows($res)>0){
        $_SESSION['regNum']=$regnum;
        header('location:home.php');
        echo " login successs";
    }else{
        echo "Failed to login.";
    }
}
?>


