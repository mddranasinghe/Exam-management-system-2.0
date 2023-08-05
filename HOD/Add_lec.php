<?php include "./Admin_nav.php";

// add hod////////////////////////////////////////////////
include 'db_connection.php';


if (isset($_POST['submit'])) {


    // Get form data
    $LECNum = $_POST['LECNum'];
    $LECName = $_POST['LECName'];
    $faculty = $_POST['faculty'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $password=$_POST['password'];

    // Perform database query to insert HOD information
    $query = "INSERT INTO lec (LECNum, LECName, Faculty, Email, contactno,password) VALUES ('$LECNum', '$LECName', '$faculty', '$email', '$contactNo',' $password')";

    if (mysqli_query($conn, $query)) {
        // Insertion successful
        $successMessage = "LECTURE information has been saved successfully.";
    
    } else {
        // Insertion failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
    $conn->close();
}


?>

<div class="container p-3 my-3 bg-light text-dark">
<div class="container p-1 my-2 bg-dark text-white">
   <h2 style="text-align:center">ADD LECTURE DETAILS</h2></div>
   
   <?php if (!empty($successMessage)) { ?>
    
                <div class="alert alert-success text-center " ><?php echo $successMessage; ?></div>
            <?php } ?>
            <?php if (!empty($errorMessage)) { ?>
                <div class="alert alert-danger text-center"><?php echo $errorMessage; ?></div>
            <?php } ?><div class="Add_user_form">
 <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="LECNum" class="col-sm-5 col-form-label">LECTURE Registration Number:</label>
        <input type="text"  class="form-control col-sm-7 col-form-label" id="LECNum" name="LECNum" required><br>
      
        <label for="LECName"class="col-sm-3 col-form-label">LECTURE Name:</label>
        <input type="text" class="form-control col-sm-7 col-form-label" id="LECName" name="LECName" required><br>
      
       

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

        <button type="submit" name="submit" class="btn btn-primary submit-btn" >Submit</button>


   
</form>

</div></div>

