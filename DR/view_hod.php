<?php
// Include the database connection file
include "db_connection.php";
include "Admin_nav.php";


// Initialize variables
 $department = $hodNumber = $faculty = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['HODNum'])) {
    // Get the HOD ID from the query string
    $HODNum = $_GET['HODNum'];

    // Perform database query to get HOD information
    $query = "SELECT * FROM hod WHERE HODNum = '$HODNum'";
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
?>


    <div class="container">
        <h2>View HOD Details</h2>
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <table class="table hod-details">
       
         
            <tr>
                <th>HOD USERNAME</th>
                <td><?php echo $hodNumber; ?></td>
            </tr>
            <tr>
                <th>DEPARTMENT</th>
                <td><?php echo $department; ?></td>
            </tr>
            <tr>
                <th>FACULTY</th>
                <td><?php echo $faculty; ?></td>
            </tr>
        </table>
        <a href="manage_hod.php" class="btn btn-danger back-btn" style="margin-left:500px">Back</a>
    </div>

