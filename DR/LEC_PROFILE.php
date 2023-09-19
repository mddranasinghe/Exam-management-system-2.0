<?php
include "Admin_nav.php";
include "db_connection.php";
$reg = $_SESSION['regNum'];
$sql = "SELECT * FROM lec WHERE LECNum='$reg'";
$res = mysqli_query($conn, $sql);
 


if (mysqli_num_rows($res) > 0) {
    $row = mysqli_fetch_assoc($res);
    // Now the $row variable is defined and contains the fetched data.
} else {
    // If no rows are returned, you can choose to set default values for the variables used below.
    // For example:
    $row = array(
        'LECNum' => '',
        'LECName' => '',
        'Faculty' => '',
        'contactno' => '',
        'Email' => ''
        // Add more fields if needed
    );
}
?>

<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 text-center">
            <img class="profile-picture" src="" alt="Profile Picture">
            <div class="profile-info">
                <h1><?php echo $row['LECNum']; ?></h1>
                <h6><?php echo $row['LECName']; ?></h6>
                <p>Faculty: <?php echo $row['Faculty']; ?></p>
                <p>Mobile No:<?php echo $row['contactno']; ?></p>
                <p>Email:<?php echo $row['Email']; ?></p>
                Password: <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">
                    Change Password
                </button>
            </div>
        </div>
    </div>
</div>
<!-- The rest of your code... -->

<div class="modal" id="myModal">
    
    <div style="width:700px; margin-left:400px; padding:50px;  height: 700px;">
    <div class="container p-3 my-2 bg-white text-dark">
    <div class="container p-1 my-2 bg-dark text-white">
              <h1 style ="text-align: center;font-size: 30px ; "> Change new password  </h1></div>
                                            
             
    <form name="login" action="forgetpass.php" method="POST" onsubmit="return validateForm()">  
       
    <input type="text" class="form-control" placeholder="Registration Number" name="regNum" id="regNum" >
  
    <input class="form-control" type="password" name="newpassword" placeholder="New Password" id="password" required >
  

    <input class="form-control" type="password" name="confirm-password" placeholder="Confirm Password" id="confirm-password" required >

    
    <input class="btn btn-outline-primary  " type="submit" name="submit" value="update" style="width:200px; margin-left:175px"><hr>
     </form>
    
    </div>
    </div></div></div>


                <?php

                    if(isset($_POST['submit']))
                    {
                        
                        if(mysqli_query($conn,"UPDATE lec  SET  password='$_POST[newpassword]'WHERE LECNum='$_POST[regNum]';"))
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
