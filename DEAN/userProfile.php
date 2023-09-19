<?php
	include "db_connection.php";
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>update password</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 


    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.0-alpha1-dist\css\bootstrap.min.css">


    <style type="text/css">
      
      .full-page{

width: 70%;
height: 70%;
background-color: #f2f2f2;
margin-left:10%;
margin-top:5%;
padding:2px;

}

body
{
    background-color:#e4bfe2;

}
table {

padding: 200px;
width:70%;
height: 70%;
margin-left:10%;
}
tr
        {
            height:50px;
            margin-top:20%;
            
        }

      label 
      {
        width: 200px;
        margin-top:20%;
      }

    </style>	
    	

  
</head>
<body>
<div class="full-page">
    
          <h1 style ="text-align: center;font-size: 30px ; "> Change new password  </h1>
                                        
                                    
    <form name="login" action="forgetpass.php" method="POST" onsubmit="return validateForm()">
    <table><tr>
        <td>
    <label for="regNum">Registration Number:</label></td>
    <td>
<input type="text" class="form-control" placeholder="Registration Number" name="regNum" id="regNum" style="height:35px; width:400px; margin-top:15%; "></td>
</tr>
<tr>
<td>
<label for="password">New Password:</label></td><td>
<input class="form-control" type="password" name="newpassword" placeholder="New Password" id="password" required="" style="height:35px; width:400px;  margin-top:15%;">
<input type="checkbox" onclick="myFunction()">Show Password
</td>
</tr>
<tr>
<td>
<label for="confirm-password">Confirm Password:</label></td><td>
<input class="form-control" type="password" name="confirm-password" placeholder="Confirm Password"  id="confirm-password" required="" style="height:35px; width:400px; margin-top:15%;">
<input type="checkbox" onclick="myFunction2()">Show Password
</td>
</tr>
<tr>
    <td></td>
    <td>
            <input class="btn btn-outline-primary" type="submit" name="submit" value="update"style="height:35px; width:200px; margin-top:6%;"></td>
</tr>                                
</div>
</table>
 </form>
 </section>


                <?php

                    if(isset($_POST['submit']))
                    {
                        
                        if(mysqli_query($conn,"UPDATE admin  SET  password='$_POST[newpassword]'WHERE RegNo='$_POST[regNum]';"))
                        {
                        

                        ?>
                            

                            <div class="alert alert-waring " style="width:700px; margin-left: 100px; margin-top: 50px;color: white; background-color: red; text-align: center;">
                                <strong >The password updated sucessfully..!</strong>
                            </div>

                            <?php
                        }
                        else
                        {
                            ?>
                             <div class="alert alert-waring " style="width:700px; margin-left: 100px; margin-top: -20px; color: white; background-color: red; text-align: center;">
                                <strong >The password updated not sucessfully..!</strong>
                            </div>

                            <?php
                        }

                        

                    }	

                ?>

    </div>        
	
   
</body>
</html>

<script>
function validatePassword() {
			var password = document.getElementById("password").value;
			var password_confirm = document.getElementById("confirm-password").value;

			if (password != password_confirm) {
				alert("Passwords did Not match");
				return false;
			}

			return true;
		}

		function validatePasswordlen() {
			var password = document.getElementById("password").value;

			if (password.length < 8) {
				alert("Password must be at least 8 characters long");
				return false;
			}

			return true;
		}

		function validateForm() {
			var isValidpass = validatePassword();
			var isValidpasslen = validatePasswordlen();
			return isValidpass && isValidpasslen;
		}


        function myFunction2() {
  var x = document.getElementById("confirm-password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
