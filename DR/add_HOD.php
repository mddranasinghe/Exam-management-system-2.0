<?php include "./Admin_nav.php";

// add hod////////////////////////////////////////////////
include 'db_connection.php';


if (isset($_POST['HODsubmit'])) {


    // Get form data
    $hodNum = $_POST['hodNum'];
    $hodName = $_POST['hodName'];
    $faculty = $_POST['faculty'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $password=$_POST['password'];

    // Perform database query to insert HOD information
    $query = "INSERT INTO hod (HODNum, HODName, Faculty, Email, contactno,passwordS) VALUES ('$hodNum', '$hodName', '$faculty', '$email', '$contactNo',' $password')";

    if (mysqli_query($conn, $query)) {
        // Insertion successful
        $successMessage = "HOD information has been saved successfully.";
    
    } else {
        // Insertion failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
    $conn->close();
}


?>

<div class="container p-3 my-3 bg-light text-dark">
<div class="container p-1 my-2 bg-dark text-white">
   <h2 style="text-align:center">ADD HEAD DETAILS</h2></div>
   
   <?php if (!empty($successMessage)) { ?>
    
                <div class="alert alert-success text-center " ><?php echo $successMessage; ?></div>
            <?php } ?>
            <?php if (!empty($errorMessage)) { ?>
                <div class="alert alert-danger text-center"><?php echo $errorMessage; ?></div>
            <?php } ?><div class="Add_user_form">
 <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="hodNum" class="col-sm-5 col-form-label">HOD Registration Number:</label>
        <input type="text"  class="form-control col-sm-7 col-form-label" id="hodNum" name="hodNum" required><br>
      
        <label for="hodName"class="col-sm-3 col-form-label">HOD Name:</label>
        <input type="text" class="form-control col-sm-7 col-form-label" id="hodName" name="hodName" required><br>
      
       

        <label for="faculty" class="col-sm-3 col-form-label">Faculty:</label><br>
        <select  id="faculty" name="faculty" required class="form-control col-sm-7 col-form-label">
            <option value="">Select Faculty</option>
            <option value="Technological Studies">Technological Studies</option>
            <option value="Applied Science">Applied Science</option>
            <option value="Business Studies">Business Studies</option>
        </select><br>

        <label for="email"class="col-sm-3 col-form-label">Email:</label>
        <input type="email" class="form-control col-sm-7 col-form-label"id="email" name="email" required placeholder="exmple@vau.ac.lk"><br>

        <label for="password" class="col-sm-2 col-form-label">Password:</label>
<input class="form-control col-sm-7 col-form-label"type="password" name="password" placeholder="Password" id="password" required=""><br>
 
       
        <label for="contactNo"class="col-sm-3 col-form-label">Contact No:</label>
        <input type="text" class="form-control col-sm-7 col-form-label" id="contactNo" name="contactNo" required placeholder="071xxxxxx2"><br>

        <button type="submit" name="HODsubmit" class="btn btn-primary submit-btn" >Submit</button>


   
</form>

</div></div>

