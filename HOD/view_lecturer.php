<?php
include "../db_connection.php";
include "./Admin_nav.php";
// Initialize variables
 $lecturerName = $lecturerNumber= $faculty = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['LECNum'])) {
    // Get the lecturer ID from the query string
    $lecturerNumber = $_GET['LECNum'];

    // Perform database query to get lecturer information
    $query = "SELECT * FROM lec WHERE LECNum = '$lecturerNumber'";
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
?>



    <div class="container">
        <h2>View Lecturer Details</h2>
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <table class="table lecturer-details">
            
            <tr>
                <th>Lecturer Name</th>
                <td><?php echo $lecturerName; ?></td>
            </tr>
            <tr>
                <th>Lecturer Number</th>
                <td><?php echo $lecturerNumber; ?></td>
            </tr>
     
            <tr>
                <th>Faculty</th>
                <td><?php echo $faculty; ?></td>
            </tr>
        </table>
        <a href="manage_lecturer.php" class="btn btn-primary back-btn">Back</a>
    </div>

