<?php
include "./Admin_nav.php";
// Include the database connection file
include "db_connection.php";

// Initialize variables
 $studentName = $regNo = $yearOfStudy = $faculty = "";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['Registration_No'])) {
    // Get the student ID from the query string
    $regNo = $_GET['Registration_No'];

    // Perform database query to get student information
    $query = "SELECT * FROM students WHERE Registration_No = '$regNo'";
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
?>


    
    <div class="container">
        
        <?php if (!empty($errorMessage)) { ?>
            <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
        <?php } ?>
        <table class="table student-details">
         
            <tr>
                <th>Student Name</th>
                <td><?php echo $studentName; ?></td>
            </tr>
            <tr>
                <th>Registration Number</th>
                <td><?php echo $regNo; ?></td>
            </tr>
            <tr>
                <th>Year of Study</th>
                <td><?php echo $yearOfStudy; ?></td>
            </tr>
            <tr>
                <th>Faculty</th>
                <td><?php echo $faculty; ?></td>
            </tr>
        </table>
       
    </div>


