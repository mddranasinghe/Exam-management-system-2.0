<?php
// Include the database connection file
ob_start();
include "db_connection.php";
include "Admin_nav.php";
?>
<?php
// Initialize variables
$hodName = $hodNumber = $faculty = "";
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
        $hodName = $row['HODName'];
        $hodNumber = $row['HODNum'];

        $faculty = $row['Faculty'];
    } else {
        // HOD not found
        $errorMessage = "HOD not found.";
    }
}

// Handle form submission for updating HOD information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    
    $hodName = $_POST['hodName'];
    $hodNumber = $_POST['hodNumber'];
  
    $faculty = $_POST['faculty'];

    // Perform database query to update HOD information
    $query = "UPDATE hod SET HODName = '$hodName', HODNum = '$hodNumber',Faculty = '$faculty' WHERE HODNum = '$hodNumber'";
    
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
            
            <div class="mb-3">
                <label for="hodName" class="form-label">HOD Name:</label>
                <input type="text" class="form-control" id="hodName" name="hodName" value="<?php echo $hodName; ?>" required>
            </div>
            <div class="mb-3">
                <label for="hodNumber" class="form-label">HOD Number:</label>
                <input type="text" class="form-control" id="hodNumber" name="hodNumber" value="<?php echo $hodNumber; ?>" required>
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