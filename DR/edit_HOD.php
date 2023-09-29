<?php
// Include the database connection file
ob_start();
include "db_connection.php";
include "Admin_nav.php";
?>
<?php
// Initialize variables
$department = $hodNumber = $faculty = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['HODNum'])) {
    // Get the HOD ID from the query string
    $hodNumber = $_GET['HODNum'];

    // Perform database query to get HOD information
    $query = "SELECT * FROM hod WHERE HODNum = '$hodNumber'";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $department = $row['department'];
        $hodNumber = $row['HODNum'];
        $faculty = $row['Faculty'];
    } else {
        // HOD not found
        $errorMessage = "HOD not found.";
    }
}

// Handle form submission for updating HOD information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    
    $department = $_POST['hodDEP'];
    $hodNumber = $_POST['hodNumber'];
  
    $faculty = $_POST['faculty'];

    // Perform database query to update HOD information
    $query = "UPDATE hod SET department = '$department', HODNum = '$hodNumber',Faculty = '$faculty' WHERE HODNum = '$hodNumber'";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if (mysqli_query($conn, $query)) {
        // Update successful
       header("Location: manage_HOD.php");
        exit();
    } else {
        // Update failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}
?>

    <div class="container mt-5">
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <form method="post" class="form-container">
            
           
        <label for="hodDEP"  class="form-label">HEAD'S DEPARMNT :</label><br>
        <select  id="hodDEP" name="hodDEP" required class="form-control"style=margin-top:1%>
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
            <div class="mb-3">
                <label for="hodNumber" class="form-label">HEAD'S USERNAME :</label>
                <input type="text" class="form-control" id="hodNumber" name="hodNumber" value="<?php echo $hodNumber; ?>" required>
            </div>
          
            <div class="mb-3">
                <label for="faculty" class="form-label">FACULTY :</label>
                <select class="form-control" id="faculty" name="faculty" required>
                    <option value="">Select Faculty</option>
                    <option value="Technological Studies" <?php if ($faculty === "Technological Studies") echo "selected"; ?>>Technological Studies</option>
                    <option value="Applied Science" <?php if ($faculty === "Applied Science") echo "selected"; ?>>Applied Science</option>
                    <option value="Business Studies" <?php if ($faculty === "Business Studies") echo "selected"; ?>>Business Studies</option>
                </select>
            </div>
            <button type="submit" name="update" class="btn btn-primary">UPDATE</button>
        </form>
    </div>



    <?php
ob_end_flush();?>