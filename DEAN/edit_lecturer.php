<?php
ob_start();
// Include the database connection file
include "db_connection.php";
include "Admin_nav.php";
; 

// Initialize variables
 $lecturerName = $lecturerNumber  = $faculty = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['LECNum'])) {
    // Get the lecturer ID from the query string
    $lecturerNumber = $_GET['LECNum'];

    // Perform database query to get lecturer information
    $query = "SELECT * FROM lec WHERE LECNum = '$lecturerNumber'";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $lecturerName = $row['LECName'];
        $lecturerNumber = $row['LECNum'];
        
        $faculty = $row['Faculty'];
    } else {
        // Lecturer not found
        $errorMessage = "Lecturer not found.";
    }
}

// Handle form submission for updating lecturer information
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {

    $lecturerName = $_POST['lecturerName'];
    $lecturerNumber = $_POST['lecturerNumber'];
    $faculty = $_POST['faculty'];

    // Perform database query to update lecturer information
    $query = "UPDATE lec SET LECName = '$lecturerName', LECNum = '$lecturerNumber', Faculty = '$faculty' WHERE LECNum = '$lecturerNumber'";
    
    // Check if the connection is successful
    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    if (mysqli_query($conn, $query)) {
        // Update successful
        header("Location: manage_lecturer.php");
        exit();
    } else {
        // Update failed
        $errorMessage = "Error: " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Lecturer</title>
    <!-- Add necessary CSS and JavaScript if needed -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <style>
        .navbar {
            background-color: #381030;
            color: white;
            padding: 10px;
        }

        .navbar-brand {
            color: white;
            text-decoration: none;
        }
        
        .navbar h4 {
            margin: 0;
            flex-grow: 1;
            text-align: center;
        }
        
        /* Custom styles for the form container */
        .form-container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #f4f6f8;
            padding: 20px;
            border-radius: 8px;
        }
    </style>
</head>
<body>


    <div class="container mt-5">
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <form method="post" class="form-container">
            
            <div class="mb-3">
                <label for="lecturerName" class="form-label">Lecturer Name:</label>
                <input type="text" class="form-control" id="lecturerName" name="lecturerName" value="<?php echo $lecturerName; ?>" required>
            </div>
            <div class="mb-3">
                <label for="lecturerNumber" class="form-label">Lecturer Number:</label>
                <input type="text" class="form-control" id="lecturerNumber" name="lecturerNumber" value="<?php echo $lecturerNumber; ?>" required>
            </div>
           
                <label for="faculty" class="form-label">Faculty:</label>
                <select class="form-control" id="faculty" name="faculty" required>
                    <option value="">Select Faculty</option>
                    <option value="Technological Studies" <?php if ($faculty === "Technological Studies") echo "selected"; ?>>Technological Studies</option>
                    <option value="Applied Science" <?php if ($faculty === "Applied Science") echo "selected"; ?>>Applied Science</option>
                    <option value="Business Studies" <?php if ($faculty === "Business Studies") echo "selected"; ?>>Business Studies</option>
                </select>
        
          <br>
            <button type="submit" name="update" class="btn btn-primary" >Update</button>
        </form>
    </div>
    </div>
</body>
</html>
<?php
ob_end_flush();?>