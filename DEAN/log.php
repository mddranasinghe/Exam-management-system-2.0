<?php
	include "db_connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <style>
      
    </style>
</head>
<body>
    <div class="login-page-full" id="login-page">
 
  <div class="logo-side"><img width="600px" src="log.png" alt="po"></div>
 <div class="caption">
  <h1 style="margin-left:220px; font-size: 40px;"><b>EXAM MANAGMENT SYSTEM</b></h1>
 </div>
</div>

<div class="">


  <div class='full-page'>
    <div class='form-box'>
    <h2 class=login-h2>Admin Login</h2>
    <form class='form' method="POST">
      <div class="mb-3">
    
        <input type="text" class="form-control" placeholder='Registation Number'  name="regNum" id ="regNum" >
      </div>
      <div class="mb-3">
     
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder='Enter password' name="password" >
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1"><br>Check me out</br></label>
      </div>
      <button type="submit" class="btn btn-primary" id ="submit-button"  name="submit">Login</button>
    </form>
   
    </div>
     </div>

</div>


</body>
</html>


<?php

if(isset($_POST['submit']))
{
    $count=0;
    $res = mysqli_query($conn," SELECT * FROM admin  WHERE RegNo='$_POST[regNum]' && password='$_POST[password]';");
    $count=mysqli_num_rows($res);
   
    

    if($count==0)
    {
        ?>
        <script type="text/javascript">
                alert("The user and password does not match.");
        </script>
        


     

        <?php
    }
    else
    {
        $_SESSION['login_user']=$_POST['username'];
        ?>
        <script type="text/javascript">
            window.location="dashboard.php"

        </script>
        <?php
    }

}		

?>