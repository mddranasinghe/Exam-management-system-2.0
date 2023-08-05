<?php
	

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
    <h2 class=login-h2>User Login</h2>
    <form class='form' method="POST" action="script.php">
      <div class="mb-3">
    
        <input type="text" class="form-control" placeholder='Registation Number'  name="regNum" id ="regNum" >
      </div>
      <div class="mb-3">
     
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder='Enter password' name="password" >
      </div>
      <div class="mb-3 form-check">
       
       
      </div>
      <button type="submit" class="btn btn-primary" id ="submit-button"  name="submit">Login</button>
    </form>
   
    </div>
     </div>

</div>


</body>
</html>


