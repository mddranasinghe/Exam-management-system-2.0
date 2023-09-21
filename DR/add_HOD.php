<?php include "./Admin_nav.php";

// add hod////////////////////////////////////////////////
include 'db_connection.php';


if (isset($_POST['HODsubmit'])) {


    // Get form data
    $hodNum = $_POST['hodNum'];
    $hodDEP = $_POST['hodDEP'];
    $faculty = $_POST['faculty'];
    $email = $_POST['email'];
    $contactNo = $_POST['contactNo'];
    $password=$_POST['password'];

    // Perform database query to insert HOD information
    $query = "INSERT INTO hod (HODNum,department, Faculty, Email, contactno,passwordS) VALUES ('$hodNum', '$hodDEP', '$faculty', '$email', '$contactNo',' $password')";

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
   <h2 style="text-align:center">ADD HEAD'S DETAILS</h2></div>
   
   <?php if (!empty($successMessage)) { ?>
    
                <div class="alert alert-success text-center " ><?php echo $successMessage; ?></div>
            <?php } ?>
            <?php if (!empty($errorMessage)) { ?>
                <div class="alert alert-danger text-center"><?php echo $errorMessage; ?></div>
            <?php } ?><div class="Add_user_form">
 <form name="login" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <label for="hodNum" class="col-sm-5 col-form-label">HEAD'S USERNAME :</label>
        <input type="text"  class="form-control col-sm-7 col-form-label" id="hodNum" name="hodNum" required style=margin-top:1%><br>
      
    
        <label for="hodDEP" class="col-sm-3 col-form-label">HEAD'S DEPARMNT :</label><br>
        <select  id="hodDEP" name="hodDEP" required class="form-control col-sm-7 col-form-label" style=margin-top:1%>
            <option value="">SELECT DEPARMNT</option>
            <option value="Business Economics">Business Economics</option>
            <option value="English Language Teaching">English Language Teaching</option>
            <option value="Finance and Accountancy">Finance and Accountancy</option>
            <option value="Management and Entrepreneurship">Management and Entrepreneurship</option>
            <option value="Marketing Management">Marketing Management</option>
            <option value="Project Management">Project Management</option>
            <option value=" Department of Bio-science"> Department of Bio-science</option>
            <option value="Department of Physical Science">Department of Physical Science</option>
            <option value="Department of ICT">Department of ICT</option>

           
        </select><br>

        <label for="faculty" class="col-sm-3 col-form-label">FACULTY :</label><br>
        <select  id="faculty" name="faculty" required class="form-control col-sm-7 col-form-label" style=margin-top:1%>
            <option value="">Select Faculty</option>
            <option value="Technological Studies">Technological Studies</option>
            <option value="Applied Science">Applied Science</option>
            <option value="Business Studies">Business Studies</option>
        </select><br>

        <label for="email"class="col-sm-3 col-form-label">EMAIL :</label>
        <input type="email" class="form-control col-sm-7 col-form-label"id="email" name="email" required placeholder="exmple@vau.ac.lk" style=margin-top:1%><br>

        <label for="password" class="col-sm-2 col-form-label">PASSWORD :</label>
<input class="form-control col-sm-7 col-form-label"type="password" name="password" placeholder="Password" id="password" required="" style=margin-top:1%><br>
 
       
        <label for="contactNo"class="col-sm-3 col-form-label">CONTACT:</label>
        <input type="text" class="form-control col-sm-7 col-form-label" id="contactNo" name="contactNo" required placeholder="071xxxxxx2" style=margin-top:1%><br>

        <button type="submit" name="HODsubmit" class="btn btn-success submit-btn" >SUBMIT</button>

        <button type="reset" name="HODsubmit" class="btn btn-danger submit-btn" >RESET</button>
   
</form>

</div></div>

