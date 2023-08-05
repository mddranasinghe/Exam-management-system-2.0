<?php
ob_start();
// Include the database connection file
include "db_connection.php";
include "Admin_nav.php";

// Initialize variables
 $studentName = $regNo = $yearOfStudy = $faculty = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['Registration_No'])) {
    // Get the student ID from the query string
    $Registration_No = $_GET['Registration_No'];

    // Perform database query to get student information
    $query = "SELECT * FROM students WHERE Registration_No = '$Registration_No'";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $studentName = $row['Name_with_initials'];
        $regNo = $row['Registration_No'];
        $yearOfStudy = $row['Date_of_admission'];
        $faculty = $row['faculty'];
    } else {
        // Student not found
        $errorMessage = "Student not found.";
    }
}

// Handle form submission for updating student information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $studentName = $_POST['studentName'];
    $regNo = $_POST['regNo'];
    $yearOfStudy = $_POST['yearOfStudy'];
    $faculty = $_POST['faculty'];

    // Perform database query to update student information
    $query = "UPDATE students SET Name_with_initials = '$studentName', Registration_No = '$regNo', Date_of_admission = '$yearOfStudy', faculty = '$faculty' WHERE Registration_No = '$regNo'";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if (mysqli_query($conn, $query)) {
        // Update successful
        header("Location: manageStudent.php");
        exit();
    } else {
        // Update failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}
?>



    <div class="container">
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <form method="post" class="form-container">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3">
                <label for="studentName" class="form-label">Student Name:</label>
                <input type="text" class="form-control" id="studentName" name="studentName" value="<?php echo $studentName; ?>" required>
            </div>
            <div class="mb-3">
                <label for="regNo" class="form-label">Registration Number:</label>
                <input type="text" class="form-control" id="regNo" name="regNo" value="<?php echo $regNo; ?>" required>
            </div>
            <div class="mb-3">
                <label for="yearOfStudy" class="form-label">Year of Study:</label>
                <input type="text" class="form-control" id="yearOfStudy" name="yearOfStudy" value="<?php echo $yearOfStudy; ?>" required>
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
            <div class="btn-container">
                <button type="submit" name="update" class="btn btn-primary">Update</button>
                <a href="manageStudent.php" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>

<?php
ob_end_flush();?>
