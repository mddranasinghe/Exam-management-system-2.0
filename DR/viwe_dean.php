<?php
// Include the database connection file
include "db_connection.php";
include "Admin_nav.php";


// Initialize variables
 $DEANName = $DEANNumber = $faculty = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['DEANNum'])) {
    // Get the HOD ID from the query string
    $DEANNum = $_GET['DEANNum'];

    // Perform database query to get HOD information
    $query = "SELECT * FROM dean WHERE DEANNum = '$DEANNum'";
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
?>


    <div class="container">
        <h2>View HOD Details</h2>
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <table class="table hod-details">
       
            <tr>
                <th>HOD Name</th>
                <td><?php echo $DEANName; ?></td>
            </tr>
            <tr>
                <th>HOD Number</th>
                <td><?php echo $DEANNumber; ?></td>
            </tr>
    
            <tr>
                <th>Faculty</th>
                <td><?php echo $faculty; ?></td>
            </tr>
        </table>
        <a href="manage_dean.php" class="btn btn-danger back-btn" style="margin-left:500px">Back</a>
    </div>

