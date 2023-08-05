

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="C:\xampp\htdocs\EMS\bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">
	<link rel="stylesheet" href="C:\xampp\htdocs\EMS\style.css">
    <title>Document</title>
</head>
<body>
    <div class="login-page-full" id="login-page">
 
  <div class="logo-side"><img width="600px" src="C:\xampp\htdocs\EMS\log.png" alt="po"></div>
 
</div>

<div class="">


  <div class='full-page'>
    <div class='form-box'>
    <h2 class=login-h2>User Login</h2>
    <form class='form' action="login.php" method="POST">
      <div class="mb-3">
    
        <input type="text" class="form-control" placeholder='Registation Number'  name="regNum" id ="regNum" >
      </div>
      <div class="mb-3">
     
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder='Enter password' name="password" >
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div>
      <button type="submit" class="btn btn-primary" id ="submit-button">Login</button>
    </form>
   
    </div>
     </div>

</div>


</body>
</html>