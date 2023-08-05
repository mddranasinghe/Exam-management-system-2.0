<?php
include "nav.php";
	include "db_connection.php";
	$reg=$_SESSION['regNum'];
$sql="SELECT *  FROM students WHERE Registration_No='$reg'";
$res=mysqli_query($conn,$sql);

if(mysqli_num_rows($res)>0){
  $row=mysqli_fetch_assoc($res);
  
}
?>


    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 text-center">
                <img class="profile-picture" src="profile-picture.jpg" alt="Profile Picture">
                <div class="profile-info">
                    <h1><?php echo $row['Registration_No']; ?></h1>
                    <h6><?php echo $row['Name_denoted_by_initial']; ?></h6>
                    <p>Admission Date: <?php echo $row['Date_of_admission']; ?></p>
                    <p>Mobile No:<?php echo $row['Mobile_Phone_no']; ?></p>
                    <p>Address:<?php echo $row['Address']; ?></p>
                    Password : <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
   Change Password
</button>
        
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="myModal">
    
<div style="width:700px; margin-left:400px; padding:50px;  height: 700px;">
<div class="container p-3 my-2 bg-white text-dark">
<div class="container p-1 my-2 bg-dark text-white">
          <h1 style ="text-align: center;font-size: 30px ; "> Change new password  </h1></div>
                                        
         
<form name="login" action="forgetpass.php" method="POST" onsubmit="return validateForm()">  
<label for="regNum">Registration Number:</label>   
<input type="text" class="form-control" placeholder="Registration Number" name="regNum" id="regNum" >
<hr>
<label for="password">New Password:</label>
<input class="form-control" type="password" name="newpassword" placeholder="New Password" id="password" required >
<hr>

<label for="confirm-password">Confirm Password:</label>
<input class="form-control" type="password" name="confirm-password" placeholder="Confirm Password" id="confirm-password" required >

<hr>
<input class="btn btn-outline-primary  " type="submit" name="submit" value="update" style="width:200px; margin-left:175px"><hr>
 </form>

</div>
</div></div></div>


                <?php

                    if(isset($_POST['submit']))
                    {
                        
                        if(mysqli_query($conn,"UPDATE students  SET  password='$_POST[newpassword]'WHERE Registration_No='$_POST[regNum]';"))
                        {
                        

                        ?>
                            

                            <div class="alert alert-waring " style="width:700px; margin-left: 50px; margin-top: 50px;color: white; background-color: red; text-align: center;">
                                <strong >The password updated sucessfully..!</strong>
                            </div>

                            <?php
                        }
                        else
                        {
                            ?>
                             <div class="alert alert-waring " style="width:700px; margin-left: 50px; margin-top: 50px; color: white; background-color: red; text-align: center;">
                                <strong >The password updated not sucessfully..!</strong>
                            </div>

                            <?php
                        }

                        

                    }	

                ?>
       
	
   



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
