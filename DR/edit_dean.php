<?php
// Include the database connection file
ob_start();
include "db_connection.php";
include "Admin_nav.php";
?>
<?php
// Initialize variables
$deanName = $deanNumber = $faculty = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['DEANNum'])) {
    // Get the HOD ID from the query string
    $deanNumber = $_GET['DEANNum'];

    // Perform database query to get HOD information
    $query = "SELECT * FROM dean WHERE DEANNum = '$deanNumber'";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $DEANName = $row['DEANName'];
        $DEANNumber = $row['DEANNum'];

        $faculty = $row['Faculty'];
    } else {
        // HOD not found
        $errorMessage = "DEAN not found.";
    }
}

// Handle form submission for updating HOD information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    
    $DEANName = $_POST['DEANName'];
    $DEANNumber = $_POST['DEANNumber'];
  
    $faculty = $_POST['faculty'];

    // Perform database query to update HOD information
    $query = "UPDATE dean SET DEANName = '$DEANName', DEANNum = '$DEANNumber',Faculty = '$faculty' WHERE DEANNum = '$DEANNumber'";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if (mysqli_query($conn, $query)) {
        // Update successful
       header("Location: manage_dean.php");
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
            
            <div class="mb-3">
                <label for="DEANName" class="form-label">DEAN Name:</label>
                <input type="text" class="form-control" id="DEANName" name="DEANName" value="<?php echo $DEANName; ?>" required>
            </div>
            <div class="mb-3">
                <label for="DEANNumber" class="form-label">DEAN Number:</label>
                <input type="text" class="form-control" id="DEANNumber" name="DEANNumber" value="<?php echo $DEANNumber; ?>" required>
            </div>
          
            <div class="mb-3">
                <label for="faculty" class="form-label">Faculty:</label>
                <select class="form-control" id="faculty" name="faculty" required>
                    <option value="">Select Faculty</option>
                    <option value="Technological Studies" <?php if ($faculty === "Technological Studies") echo "selected"; ?>>Technological Studies</option>
                    <option value="Applied Science" <?php if ($faculty === "Applied Science") echo "selected"; ?>>Applied Science</option>
                    <option value="Business Studies" <?php if ($faculty === "Business Studies") echo "selected"; ?>>Business Studies</option>
                </select>
            </div>
            <button type="submit" name="update" class="btn btn-primary">Update</button>
        </form>
    </div>



    <?php
ob_end_flush();?>