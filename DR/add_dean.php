<?php include "./Admin_nav.php";

// add DEAN////////////////////////////////////////////////
include 'db_connection.php';


if (isset($_POST['DEANsubmit'])) {


    // Get form data
    $DEANNum = $_POST['DEANNum'];
    $DEANName = $_POST['DEANName'];
    $faculty = $_POST['faculty'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $password=$_POST['password'];

    // Perform database query to insert DEAN information
    $query = "INSERT INTO dean (DEANNum, DEANName, Faculty, Email, contactno,passwordS) VALUES ('$DEANNum', '$DEANName', '$faculty', '$email', '$contactNo',' $password')";

    if (mysqli_query($conn, $query)) {
        // Insertion successful
        $successMessage = " information has been saved successfully.";
    
    } else {
        // Insertion failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
    $conn->close();
}


?>

<div class="container p-3 my-3 bg-light text-dark">
<div class="container p-1 my-2 bg-dark text-white">
   <h2 style="text-align:center">ADD DEAN DETAILS</h2></div>
   
   <?php if (!empty($successMessage)) { ?>
    
                <div class="alert alert-success text-center " ><?php echo $successMessage; ?></div>
            <?php } ?>
            <?php if (!empty($errorMessage)) { ?>
                <div class="alert alert-danger text-center"><?php echo $errorMessage; ?></div>
            <?php } ?><div class="Add_user_form">
 <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="DEANNum" class="col-sm-5 col-form-label">DEAN Registration Number:</label>
        <input type="text"  class="form-control col-sm-7 col-form-label" id="DEANNum" name="DEANNum" required><br>
      
        <label for="DEANName"class="col-sm-3 col-form-label">DEAN Name:</label>
        <input type="text" class="form-control col-sm-7 col-form-label" id="DEANName" name="DEANName" required><br>
      
       

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

        <button type="submit" name="DEANsubmit" class="btn btn-primary submit-btn" >Submit</button>


   
</form>

</div></div>

