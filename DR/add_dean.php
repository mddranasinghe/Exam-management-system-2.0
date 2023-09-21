<?php include "./Admin_nav.php";

// add DEAN////////////////////////////////////////////////
include 'db_connection.php';


if (isset($_POST['DEANsubmit'])) {


    // Get form data
    $DEANNum = $_POST['DEANNum'];
    $faculty = $_POST['faculty'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $password=$_POST['password'];

    // Perform database query to insert DEAN information
    $query = "INSERT INTO dean (DEANNum,  Faculty, Email, contactno,passwordS) VALUES ('$DEANNum',  '$faculty', '$email', '$contactNo',' $password')";

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
   <h2 style="text-align:center">ADD DEAN'S DETAILS</h2></div>
   
   <?php if (!empty($successMessage)) { ?>
    
                <div class="alert alert-success text-center " ><?php echo $successMessage; ?></div>
            <?php } ?>
            <?php if (!empty($errorMessage)) { ?>
                <div class="alert alert-danger text-center"><?php echo $errorMessage; ?></div>
            <?php } ?><div class="Add_user_form">
 <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="DEANNum" class="col-sm-5 col-form-label">DEAN'S USERNAME :</label>
        <input type="text"  class="form-control col-sm-7 col-form-label" id="DEANNum" name="DEANNum" required style=margin-top:1%><br>
      
        <label for="faculty" class="col-sm-5 col-form-label">FACULTY :</label>
        <select  id="faculty" name="faculty" required class="form-control col-sm-7 col-form-label" style=margin-top:1%><BR>
            <option value="">Select Faculty</option>
            <option value="Technological Studies">Technological Studies</option>
            <option value="Applied Science">Applied Science</option>
            <option value="Business Studies">Business Studies</option>
        </select><br>

        <label for="email"class="col-sm-3 col-form-label">EMAIL:</label>
        <input type="email" class="form-control col-sm-7 col-form-label"id="email" name="email" required placeholder="exmple@vau.ac.lk"style=margin-top:1%><br>

        <label for="password" class="col-sm-2 col-form-label">Password:</label>
<input class="form-control col-sm-7 col-form-label"type="password" name="password" placeholder="Password" id="password" required="" style=margin-top:1%><br>
 
       
        <label for="contactNo"class="col-sm-3 col-form-label">CONTACT NUMBER :</label>
        <input type="text" class="form-control col-sm-7 col-form-label" id="contactNo" name="contactNo" required placeholder="071xxxxxx2" style=margin-top:1%><br>

        <button type="submit" name="DEANsubmit" class="btn btn-success submit-btn" >Submit</button>
        <button type="reset" name="DEANsubmit" class="btn btn-danger submit-btn" >RESET</button>


   
</form>

</div></div>

