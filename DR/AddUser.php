<?php include "./Admin_nav.php"?>
<?php
    
    include "db_connection.php";

   


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        if (!empty($_POST['regNum']) && !empty($_POST['password'])) {

            
        //    $regNum = mysqli_real_escape_string($conn, $_POST['regNum']);
          //  $password = mysqli_real_escape_string($conn, $_POST['password']);


            $regNum = mysqli_real_escape_string($conn, $_POST['regNum']);
            $INnum = mysqli_real_escape_string($conn, $_POST['INnum']);
            $gender= mysqli_real_escape_string($conn, $_POST['gender']);
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $initialName = mysqli_real_escape_string($conn, $_POST['initialName']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $admissionDate = mysqli_real_escape_string($conn, $_POST['admissionDate']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $address = mysqli_real_escape_string($conn, $_POST['address']);

            $faculty = mysqli_real_escape_string($conn, $_POST['faculty']);

$sql = "INSERT INTO students (Registration_No,INnum, gender, Name_with_initials, Name_denoted_by_initial, password, Date_of_admission,email, Mobile_Phone_no, Address, faculty) VALUES ('$regNum','$INnum' ,'$gender', '$name', '$initialName', '$password', '$admissionDate','$email','$phone', '$address', '$faculty')";


    
          
    if (mysqli_query($conn, $sql)) {
    
        $successMessage= "Student Added Successfully" . mysqli_error($conn);
      }
  } 
  else {
      // Insertion failed
      $errorMessage = "Error: " . mysqli_error($conn);
  }
        }
    

    // Close the database connection
    $conn->close();
    ?>
<div class="container p-3 my-3 bg-white text-dark">
<div class="container p-1 my-2 bg-dark text-white">
   <h2 style="text-align:center">ADD STUDENTS DETAILS</h2></div>

   <?php if (!empty($successMessage)) { ?>
    
    <div class="alert alert-success text-center " ><?php echo $successMessage; ?></div>
<?php } ?>
<?php if (!empty($errorMessage)) { ?>
    <div class="alert alert-danger text-center"><?php echo $errorMessage; ?></div>
<?php } ?>

   <div class="Add_user_form">
 <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">


    <label for="regNum" class="col-sm-3 col-form-label">Registration Number:</label>
    <input  class="form-control col-sm-7 col-form-label"  type="text"  placeholder="Registration Number" name="regNum" id="regNum"><br>

    <label for="INnum" class="col-sm-3 col-form-label">Index Number:</label>
    <input  class="form-control col-sm-7 col-form-label"  type="text"  placeholder="Index Numbetr" name="INnum" id="INnum"><br>

    <label for="faculty" class="col-sm-3 col-form-label">Faculty:</label>
                <select class="form-control col-sm-7 col-form-label" id="faculty" name="faculty" required>
                    <option value="">Select Faculty</option>
                    <option value="Technological Studies">Technological Studies</option>
                    <option value="Applied Science">Applied Science</option>
                    <option value="Business Studies">Business Studies</option>
                </select><br>

    <label for=" Name_with_initials"  class="col-sm-2 col-form-label"> Title : </label></td>
  
                                    <select name="gender" id="language"class="form-control col-sm-7 col-form-label">
                                        <option value="">Select</option>
                                        <option value="Mr"> Mr.</option>
                                        <option value="Miss.">Miss.</option>
                                        <option value="Mrs.">Mrs.</option>
                                      
                                    </select><br>
                                

<label for="name" class="col-sm-3 col-form-label">Name with Initials:</label>
    <input class="form-control col-sm-7 col-form-label"type="text" placeholder="Name with Initials" name="name" id="name"><br>
  

    <label for="initialName" class="col-sm-3 col-form-label">Name Denoted by Initial:</label>
    <input class="form-control col-sm-7 col-form-label"type="text"  placeholder="Name Denoted by Initial" name="initialName" id="initialName"><br>

    <label for="password" class="col-sm-2 col-form-label">Password:</label>
<input class="form-control col-sm-7 col-form-label"type="password" name="password" placeholder="Password" id="password" required=""><br>
 
  
   <label for="admissionDate" class="col-sm-3 col-form-label">Admission Date:</label>
    <input class="form-control col-sm-7 col-form-label"type="date"  name="admissionDate" id="admissionDate" placeholder="Admision Date" ><br>

 
    <label for="email" class="col-sm-3 col-form-label">Email :</label>
    <input class="form-control col-sm-7 col-form-label" type="email"  placeholder="Email" name="email" id="email" ><br>

  <label for="phone" class="col-sm-3 col-form-label">Mobile Phone Number:</label>
    <input class="form-control col-sm-7 col-form-label"type="text"  placeholder="Mobile Phone Number" name="phone" id="phone" ><br>
 
    <label for="address" class="col-sm-2 col-form-label">Address:</label>
    <input class="form-control col-sm-7 col-form-label"type="text" placeholder="Address" name="address" id="address" ><br>


  <input class="btn btn-success" type="submit" name="Submit" value="Submit">&nbsp &nbsp &nbsp &nbsp 
  <input class="btn btn-danger" type="reset" name="Reset" value="Reset">
</form>

</div>
</div>


<!-- Create your HTML form here for administrators to add student details. -->
